<?php 
$cookie_name="loggedin";
include("./connect/headers.php"); 
if (isset($_COOKIE[$cookie_name]))
{
$cookie_value=$_COOKIE[$cookie_name];
$user=$cookie_value;

}else{
$user="";
?>
<script>
window.location.href="admin.php";
</script>

<?php
} 

?>
<html>
    <title> Home page </title>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="./css/style.css">    
            <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" />
            <script src="./bootstrap/js/response.js"></script>
            <script language="javascript"src="./js/jquery-3.1.1.min.js"></script>
            <script src="./bootstrap/js/bootstrap.min.js"></script>
        </head>
<body>
<?php




$query2=mysqli_query($db,"DELETE FROM exam ");



?>

   <script>
window.location.href="adminhomepage.php";
</script> 