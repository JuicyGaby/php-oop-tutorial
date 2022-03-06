<?php
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

$userOne = new User("Gabe", "gabefletchers@gmail.com");
$userTwo = new User("Alrose", "alrosewasawas@gmail.com");

echo $userOne->getEmail() . "<br/>";
echo $userTwo->getEmail() . "<br/>";

echo $userOne->changeEmail("newgabefletchers@gmail.com");
echo $break;

echo $userOne->getEmail();




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