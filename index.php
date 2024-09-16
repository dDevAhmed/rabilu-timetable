
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

    <img src="img/1.jpeg" style="width: 100%; height: 100%; position: fixed; top: 0px; opacity: 1;">
  
    <img src="img/2.jpeg" style="float: left; width: 8em; height: 8em; position: relative; z-index:6; margin-left: 5em; margin-top: -8em;  border-radius: 100%; ">

    <center><h4 id="success" style="z-index: 5; margin-left: 0em; margin-top: 8em; "></h4></center>
<center>
    <div style="width: 40em; height: 20em; background: #7f9ea0; position: relative;  z-index: 0; top: 0em; border-radius: 5px; "><br>
        <span style="font-size: 20;  color: #000; font-weight: bold; ">LOGIN TO PRINT YOUR EXAMS TIMETABLE </span><br><br>
        <input type="text" id="reg" placeholder="Enter Reg Number" style="width: 80%; height: 3em; background: #ffffff; outline: none; border-radius: 5px;"><br><br>
        <input type="password" id="pswd" placeholder="Enter Password" style="width: 80%; height: 3em; background: #ffffff; outline: none; border-radius: 5px;"><br><br>
        <input type="button" onclick="login();" value="SUBMIT" style="width: 20%; height: 3em; background: #000; color:#ffffff;  outline: none; border-radius: 5px; border: none;"><br><br>
   <span onclick="window.location.href='admin.php'"  style="color:blue"><u>Login as Admin</u></span>
   </div>
</center>    
</body>

<script>
function login(){
var reg = document.getElementById("reg").value;
var pswd = document.getElementById("pswd").value;
if(reg == "" || pswd == ""){
 document.getElementById("success").innerHTML='<div class="dangermsg">Please Fill all fields</div>';
}else{
 window.location.href="studentlogin.php?r=" + reg + '&p=' + pswd;   
}
}
</script>
     
    

</body>