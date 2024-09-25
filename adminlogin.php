<?php
$cookie_name = "loggedin";
include("./connect/headers.php");
if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    $user = $cookie_value;
} else {
    $user = "";
}
?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" />
    <script src="./bootstrap/js/response.js"></script>
    <script language="javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</head>
<center>
    <h4 id="success" style="z-index: 5; margin-left: 5em; margin-top: 8em; "></h4>
</center>

<?php
$uname = test_input(@$_GET['u']);
$password = test_input($_GET['p']);
$salt1 = "adam";
$salt1 = md5($salt1);
$salt2 = "yusuf";
$salt2 = md5($salt2);
$salt3 = "musty";
$salt3 = md5($salt3);
$password = $salt1 . $password . $salt2;
$password = md5($password . $salt3);


$sql = mysqli_query($db, "SELECT * FROM adminreg WHERE username='$uname' AND pswd='$password' LIMIT 1");
$count = mysqli_num_rows($sql);
if ($count == 1) {
    $cookie_value = $uname;
    setcookie($cookie_name, $cookie_value, time() + (24624000), "/");
?>
    <script>
        window.location.href = "adminhomepage.php";
    </script>
<?php
} else {

?>
    <script>
        document.getElementById("success").innerHTML = '<div class="dangermsg">Incorrect username or password</div>';
        setInterval(function() {
            window.location.href = 'admin.php';
        }, 1000);
    </script>
<?php
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>