<?php

use FFI\ParserException;

$break = "<br>";
class User {
    private $userName;
    private $email;

    public function __construct($username, $email) {
        $this->userName = $username;
        $this->email = $email;

    }

    public function introduce() {
        $userName = $this->userName;
        $email = $this->email;
        return "Hi i'm $userName and my email is $email";
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

    //creates a constructor function for new argument/s input
    public function __construct($username, $email, $level) {
        $this->level = $level;
        //calls the constructor function from the parent class to put in the first two arguements
        parent::__construct($username, $email);
        
    }
}

$userOne = new User("Gabe", "gabefletchers@gmail.com");
$userTwo = new User("Alrose", "alrosewasawas@gmail.com");
// variable created from the child class (adminUser)
$userThree = new adminUser("admin", "theadmin@gmail.com", 6);

//introduce method is from the parent class (user)
echo $userThree->introduce()






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
    <h1>Hello</h1>
</body>
</html>