<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            text-align: center;
            background-color: gainsboro;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 24px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="text"],
        input[type="password"] {
            padding: 12px;
            margin-bottom: 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            background-color: #f2f2f2;
        }

        label {
            font-size: 20px;
            font-weight: bolder;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form action="" method="POST">
        <label>Username:</label>
        <input type="text" id="uname" name="uname" required>
        <br><br>
        <label>Password:</label>
        <input type="password" id="pass" name="pass" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $uname = $_POST['uname'];
            $pass = $_POST['pass'];

            $f=fopen("data.txt","r");
            $data=fgets($f);
            
            if($data == $uname . ',' . $pass){
                echo '<p> Access Granted </p';
            }
            else{
                echo '<p> Access Denied </p';
            }
        }
        ?>
    </div>
</body>

</html>
