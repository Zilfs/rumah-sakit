<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "<script type='text/javascript'>alert('Login gagal, Username atau password salah');</script>";
    } else if ($_GET['pesan'] == "logout") {
        echo "<script type='text/javascript'>alert('Anda Telah Logout');</script>";
    }
}
?>
    <div class="page-content">
       <div class="d-flex flex-row align-items-center justify-content-center">
            <div class="form-section col-6 container row justify-content-center ">
                <form class="w-75" method="POST" action="login-check.php">
                    <h1>Login</h1>
                    <div class="mb-3">
                        <label for="InputUsername" class="form-label mt-5">Username</label>
                        <input type="text" class="form-control" id="InputUsername" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword1" name="password">
                    </div>
                    <button type="submit" name="submit-login" class="btn btn-success justify-items-end">Submit</button>
                </form>
            </div>
            <div class="image-section col-6">
                <img src="assets/image/login-image.jpg" class="w-100 h-100">
            </div>
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
