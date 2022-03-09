<?php  
if (isset($_POST['submit'])) {
    echo "Hello World";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP FORM TUTORIAL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?> " method="post">

            <label for="username">Username: </label>
            <input type="text" name="username">

            <label for="email">Email: </label>
            <input type="text" name="email">

            <input type="submit" value="Submit" name="submit">


        </form>
    </div>
</body>
</html>