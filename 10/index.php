<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

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
            justify-content: center;
            margin-top: 2rem;
        }

        input[type="number"] {
            width: 10rem;
            height: 3rem;
            font-size: 1.2rem;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 1rem;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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
    <h1>Check for Prime</h1>
    <form action="" method="POST">
        <input type="number" name="number" />
        <input type="submit">
    </form>
    <?php 
        function checkPrime($num){
            for($j = 2; $j <= sqrt($num); $j++){
                if($num % $j==0)
                {
                    return false;
                }
            }
            return true;
        }

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $n=$_POST['number'];
            if(checkPrime($n)){
                echo '<p>Prime</p>';
            }
            else{
                echo '<p>Not a Prime</p>';
            }

        }

        echo '<p> Todays date:' . date('d-m-Y') . '</p>'; 
    ?>
</body>

</html>