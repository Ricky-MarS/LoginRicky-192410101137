<?php 
session_start();
if(!isset($_SESSION['session_username'])){
    header("location:index.php");
    exit();
}
print_r($_SESSION);
print_r($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div style="margin-top:10px" class="form-group">
        <div class="col-sm-12 controls">
            <form method="get" action="logout.php">
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>