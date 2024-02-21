<?php
    include "config.php";

    if(isset($_POST['updste'])){
        $user_id = $_POST['id'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
    }
    $sql = "UPDATE `userstable` SET `firstname`='[value-2]',`lastname`='[value-3]',`email`='[value-4]',`password`='[value-5]',`gender`='[value-6]' WHERE `id`='[value-1]'";
    
     $result = $conn->query($sql);

    if($result == TRUE ){
        echo "Record updated suceessfully";
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM 'userstable' WHERE 'id'='$suer_id' ";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $first_name = $_row['firstname'];
            $last_name = $_row['lastname'];
            $email = $_row['email'];
            $gender = $_row['gender'];
            $password = $_row['password'];
            $user_id = $row['id'];
}
}
?> 

<h3>User update form</h3>
<form action="" method="post"></form>
<fieldset>
            <legend>Personal Information:</legend>
            First Name: <br>
            <input type="text" name="firstname"><br>
            Last Name: <br>
            <input type="text" name="lastname"><br>
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
<?php
} else{
    // If the 'id' value is not valid, redirect the user to view.php page
    header('Location: view.php');
}