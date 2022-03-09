<?php

use FFI\ParserException;
$break = "<br>";
class User {
    public $userName;
    protected $email;
    public $role = "member";

    public function __construct($username, $email) {
        $this->userName = $username;
        $this->email = $email;

    }
    //this function is like the opposite of the construct method
    public function __destruct() {
        echo "$this->email is removed <br/>";
    }
    //this magic function will perform when there is new instance is created using clone
    public function __clone() {
        $this->userName = $this->userName . "(cloned) <br/>";
    }
    public function message() {
        return "$this->email sent a new message";
    }
    public function getEmail() {
        return $this->email;
    }
    public function changeEmail($email) {
        if (strpos($email, "@") > -1) {
            $this->email = $email;
        }
    }

}
class adminUser extends User {
    public $level;
    public $role = "admin";

    public function __construct($username, $email, $level) {
        $this->level = $level;
        parent::__construct($username, $email);
        
    }

    public function message() {
        return "$this->email, an admin, sent a message";
    }
}

$userOne = new User("Gabe", "gabefletchers@gmail.com");
$userTwo = new User("Alrose", "alrosewasawas@gmail.com");
$userThree = new adminUser("admin", "theadmin@gmail.com", 6);

$userFour = clone $userOne;

echo $userFour->userName . "<br/>";









 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Clone and Destruct methods</h1>
</body>
</html>