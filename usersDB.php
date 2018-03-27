<?php
require_once('inc/Database.php');
require_once('inc/User.php');
class UsersDB {
    private static $db;
    private static function getDb() {
        if(!isset(self::$db)) {
            self::$db = new Database;
        }
        return self::$db;
    }
    public static function getUsers() {
        $db = self::getDb();
        $rows = $db->query('SELECT * FROM accounts;');
        $users = [];
        foreach($rows as $row) {
            $user = new User;
            $user->setId($row['id']);
            $user->setEmail($row['email']);
            $user->setFirstName($row['fname']);
            $user->setLastName($row['lname']);
            $user->setPhone($row['phone']);
            $user->setBirthday($row['birthday']);
            $user->setGender($row['gender']);
            $user->setPassword($row['password']);
            $users[] = $user;
        }
        return $users;
    }
    public static function createUser($user) {
        $db = self::getDb();
        $email = $user->getEmail();
        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $phone = $user->getPhone();
        $birthday = $user->getBirthday();
        $gender = $user->getGender();
        $password = $user->getPassword();
        $result = $db->query("INSERT INTO accounts
            (email, fname, lname, phone, birthday, gender, password)
            VALUES
            ($email, $firstName, $lastName, $phone, $birthday, $gender, $password)");
        return $result;
    }
    public static function updatePassword($user, $password) {
        $db = self::getDb();
        $id = $user->getId();
        $rows = $db->query("SELECT * FROM accounts WHERE id = $id");
        if(count($rows) < 1) return false;
        $result = $db->query("UPDATE accounts SET password = $password WHERE id = $id");
        return $result;
    }
    public static function deleteUser($user) {
        $db = self::getDb();
        $id = $user->getId();
        $result = $db->query("DELETE FROM accounts WHERE id = $id");
    }
}
?>