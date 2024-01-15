<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./script.php" method="post">
        <h1>Login</h1>
        <label for="username">User Name :</label>
        <input type="text" name="username" required placeholder="Name"><br>

        <label for="gender">Gender :</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender"  value="Female">
        <label for="male">Female</label><br>

        <label for="emailid">Email Id :</label>
        <input type="email" name="emailid" required placeholder="Email"><br>

        <label for="password">Password :</label>
        <input type="password" name="password" required placeholder="Password" ><br>

        
        <label for="registeredcourse">Registered Course :</label>
        <input type="text" name="registeredcourse" required value="<?php echo $_POST['course'];?>" readonly><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>