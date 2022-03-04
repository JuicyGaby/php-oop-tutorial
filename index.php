<?php
$break = "<br/>"; 
class User {
    public $username = "gabe";
    public $email = "gabefletchers@gmail.com";

    public function addFriend() {
        $user = $this->username;
        return "$user have new friends";
    }
}
//declaring users from class
$userOne = new User();
$userTwo = new user();


echo $userOne->username . $break;
echo $userOne->email . $break;
echo $userOne->addFriend() . $break;

echo $break;
//overwriting class values
$userTwo->username = "alrose";
$userTwo->email = "alrose@gmail.com";


echo $break;
echo $userTwo->username . $break;
echo $userTwo->email . $break;
echo $userTwo->addFriend() . $break;




// //get class variables
// print_r(get_class_vars('User'));
// echo $break;
// //get class methods
// print_r(get_class_methods('User'));




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
    
</body>
</html>