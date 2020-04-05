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
    <!-- <div class="container container-fluid text-center"> -->
    <div class="card bg-light d-block text-center" style="width:400px;margin: 20px auto;">
        <img id='captcha' class="card-img-top" src="captchacreate.php" alt="captcha image" style="width: 100%">
        <div class="card-body">
            <form action="check.php" method="post" autocomplete="off">
                <div>
                    <input type="text" name="captchacodeuser" id="" placeholder="enter the code">
                    <button type="button" class="btn btn-sm btn-dark" onclick="reload()">
                        <i class='fas fa-redo-alt'></i>
                    </button>
                </div>
                <div class="py-2">
                    <input class="btn btn-sm btn-dark" type="submit" value="submit">
                </div>
            </form>
            <!-- <p id="auth"></p> -->
        </div>
    </div>
    <!-- </div> -->
    <script>
        function reload()

        {

            img = document.getElementById("captcha");

            img.src = "captchacreate.php?rand_number=" + Math.random();

        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>