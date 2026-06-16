<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login Page</title>

</head>
<body>
     <h1>user login</h1>
        <form method="post">
            user name : <input type="text" id="username" name="username" required><br><br>
            password :<input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if ($username === "admin" && $password === "12345") 
        {
            header("Location: result2.php");
        } 
        else
            {
            echo "Invalid username or password. Please try again.";
        }
}
?>