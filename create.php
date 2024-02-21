<?php
    include "config.php";


    if(isset($_POST["submit"])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
}

$sql = "INSERT INTO `userstable`(`id`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";

$result = $conn->query($sql);

if($result == TRUE){
    echo "New record created successfully";
}
else {
    echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup From</title>
</head>
<body>
    <h2>Singup Form</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Personal Information:</legend>
            First Name: <br>
            <input type="text" name="firstname"><br>
            Last Name: <br>
            <input type="text" name="lastname"><br>
            Email: <br>
            <input type="text" name="email"><br>
            Password: <br>
            <input type="password" name="password"><br>
            Gender: <br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female <br><br>
            <input type="Submit" name="submit" value="submit">
        </fieldset>
    </form>    
</body>
</html>