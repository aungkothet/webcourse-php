<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $operation = $_REQUEST['operation'];
                    $num1 = $_REQUEST['num1'];
                    $num2 = $_REQUEST['num2'];

                    $num1 = stripslashes($num1);
                    $num1 = htmlspecialchars($num1);

                   var_dump($num2);
                   die(); 
                    switch ($operation) {
                        case '+':
                            $result = $num1 + $num2;
                            break;
                        case '-':
                            $result = $num1 - $num2;
                            break;
                        case '*':
                            $result = $num1 * $num2;
                            break;
                        case '/':
                            $result = $num1 / $num2;
                            break;
                        case '%':
                            $result = $num1 % $num2;
                            break;
                        default:
                            $result = 0;
                            break;
                    }
                    echo "<p> $num1 $operation $num2 = $result</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>