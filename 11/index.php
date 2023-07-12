<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 2rem;
            text-align: center;
            margin-top: 2rem;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
        }

        label {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        textarea {
            height: 10rem;
            resize: none;
            font-size: 1rem;
            padding: 0.5rem;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 1rem;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #357f38;
        }

        p {
            font-size: 1.2rem;
            margin-top: 2rem;
            text-align: center;
        }
    </style>

</head>

<body>
    <h1>File Contents</h1>
    <form method="POST">
        <label for="msg">Enter the Message:</label><br>
        <textarea name="msg" id="msg" cols="30" rows="10"></textarea><br>
        <input type="submit">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $info=$_POST['msg'];
            $f=fopen("info.txt","a");
            fwrite($f,$info);
            fclose($f);

            echo '<p> File contents are: <br> ' . nl2br(file_get_contents("info.txt")) . '<p>';
        }

    ?>
</body>

</html>