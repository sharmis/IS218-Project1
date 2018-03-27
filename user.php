<?php
class User {
    private $id;
    private $email;
    private $firstName;
    private $lastName;
    private $phone;
    private $birthday;
    private $gender;
    private $password;
    //Getters
    public function getId() {
        return $this->id;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    public function getLastName() {
        return $this->lastName;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function getBirthday() {
        return $this->birthday;
    }
    public function getGender() {
        return $this->gender;
    }
    public function getPassword() {
        return $this->password;
    }
    //Setters
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }
    public function setBirthday($birthday) {
        $this->birthday = $birthday;
        return $this;
    }
    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    //Display user info table
    public function displayInfoTable() {
        $html = "
            <tr>
                <td>$this->id</td>
                <td>$this->email</td>
                <td>$this->firstName</td>
                <td>$this->lastName</td>
                <td>$this->phone</td>
                <td>$this->birthday</td>
                <td>$this->gender</td>
                <td>$this->password</td>
            </tr>";
        return $html;
    }
}
?>