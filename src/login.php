<?php

include("db-connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Jquery/jquery-3.4.1.slim.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h4>Chat Login:</h4>
            <form action="" method="POST">
                <div class="form-group">
                    <?php if($loginError): ?>
                        <div class="alert alert-warning"><?php $loginError; ?></div>
                    <?php endif ?>
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" name="pwd" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn btn-info">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>