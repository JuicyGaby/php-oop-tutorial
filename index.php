<?php

use FFI\ParserException;
// access modifiers

//public, can be accessed and change anywhere
//private, can be accessed internally and insdie the class ONLY where it was declared
//protected, same as private however, protected can be accessed also in subclass or child class
$break = "<br>";
class User {
    private $userName;
    //changed to protected type for adminUser child class to access
    protected $email;
    //variable for role
    public $role = "member";

    public function __construct($username, $email) {
        $this->userName = $username;
        $this->email = $email;

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
//create a new class and inherit the User class
class adminUser extends User {
    public $level;
    //role variable for adminUser to override the parent role variable
    public $role = "admin";

    //creates a constructor function for new argument/s input
    public function __construct($username, $email, $level) {
        $this->level = $level;
        //calls the constructor function from the parent class to put in the first two arguements
        parent::__construct($username, $email);
        
    }

    public function message() {
        //override parent message() function
        return "$this->email, an admin, sent a message";
    }
}

$userOne = new User("Gabe", "gabefletchers@gmail.com");
$userTwo = new User("Alrose", "alrosewasawas@gmail.com");
$userThree = new adminUser("admin", "theadmin@gmail.com", 6);

echo $userOne->role . "<br/>";
//echoing user 3 (admin) role
echo $userThree->role . "<br/>";
echo $userOne->message() . "<br/>";
//calling same function (adminUser);
echo $userThree->message();









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
    <h1>Overriding Properties & Methods</h1>
</body>
</html>