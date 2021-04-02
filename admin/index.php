<?php session_start() ?>
<?php include "resources/includes/header.inc"?>
<?php require "config.php"?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $adminusername = $_POST['adminusername'] . "<br>";
    $adminpassword = $_POST['adminpassword'] . "<br>";
    $hashedpass = sha1($adminpassword);
    $stmt = $con->prepare("SELECT * FROM users WHERE username=? AND password=? AND groupid = 1");
    $stmt->execute(array($adminusername , $hashedpass));
    $row = $stmt->fetch(); 
    $count = $stmt->rowCount();
    $in_DB = 1;
    if($count == $in_DB){
        $_SESSION["USER_NAME"] = $adminpassword;
        $_SESSION["USER_ID"] = $row["user_id"];
        $_SESSION["FULL_NAME"] = $row["fullname"];
        $_SESSION["GROUP_ID"] = $row["groupid"];
        header("location:dashboard.php");
        exit();
    }else{
        echo "hello ";
    }
}
?>
<div class="login">
    <h1 class="text-center">Admin Login</h1>
    <div class="container">
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
            <div class="mb-3">
                <input type="text" class="form-control" name="adminusername" placeholder="username">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="adminpassword" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php include "resources/includes/footer.inc"?>
