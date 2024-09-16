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
$course=test_input($_GET['c']);
$venue=test_input($_GET['v']);
$date=test_input($_GET['d']);
$time=test_input($_GET['t']);
$day=test_input($_GET['dy']);
$from=test_input($_GET['f']);
$to=test_input($_GET['to']);

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

$updateprpfile0=mysqli_query($db,"SELECT * FROM studentreg  LIMIT  $from, $to");
while($get0=mysqli_fetch_assoc($updateprpfile0)){
$regno=$get0['regno'];

echo $regno;

$query2=mysqli_query($db," INSERT INTO exam VALUES('', '$regno', '$course', '$venue', '$date', '$time', '$day' ) ");



}

?>


<script>
window.location.href="adminhomepage.php";
</script>    