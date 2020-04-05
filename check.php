<?php
session_start();

// print_r(array_values($_POST));
// foreach ($_POST as $key => $value) {
//     echo $key . " : " . $value . "<br>";
// }
$userentry = $_POST['captchacodeuser'];
$code = $_SESSION["captchacode"];
echo $code;
echo " " . $userentry;
// if ($_POST["captchacode"]) {
//     if ($userentry == $code) {
//         echo "correct";
//     } else {
//         echo "incorrect";
//     }

//     session_destroy();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>captcha</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b0a123f416.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="card bg-light d-block text-center" style="width:400px;margin: 20px auto;">
        <div class="card-body">
            <div class="display-1">
                <?php
                // session_start();
                // $userentry = $_POST["captchacode"];
                // $code = $_SESSION["captchacode"];
                if ($_POST["captchacodeuser"]) {
                    if ($userentry == $code) {
                        echo "Correct";
                    } else {
                        echo "Incorrect";
                    }

                    session_destroy();
                }

                ?>
                <div><a href="index.php" class="btn btn-sm btn-dark">Go back</a></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>