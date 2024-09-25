<html>
<title> Home page </title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" />
    <script src="./bootstrap/js/response.js"></script>
    <script language="javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background-color: gray;">
    <main class="assignment-4">
        <div class="sign-up-card">
            <div class="about">
                <img src="img/3.png" style="width: 100%; height: auto;">
            </div>
            <div class="sign-up-form-container">
                <h1>Welcome Back</h1>
                <p> Login to print your exams timetable </p>
                <!-- <form action="" class="signup-form"> -->
                    <input type="text" name="" id="reg" placeholder="Reg Number" required autofocus>
                    <input type="password" name="" id="pswd" placeholder="********" required>
                    <button type="submit" onclick="login();" value="SUBMIT" >Submit</button>
                <!-- </form> -->
                <a href="admin.php">Admin Login</a>
            </div>
        </div>
    </main>
</body>

<script>
    function login() {
        var reg = document.getElementById("reg").value;
        var pswd = document.getElementById("pswd").value;
        if (reg == "" || pswd == "") {
            document.getElementById("success").innerHTML = '<div class="dangermsg">Please Fill all fields</div>';
        } else {
            window.location.href = "studentlogin.php?r=" + reg + '&p=' + pswd;
        }
    }
</script>



</body>