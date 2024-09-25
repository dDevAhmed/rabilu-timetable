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
                <h1>Admin Login</h1>
                <!-- <form action="index.php" class="signup-form"> -->
                    <input type="text" name="" id="uname" placeholder="Username" required autofocus>
                    <input type="password" name="" id="pswd" placeholder="********" required>
                    <button type="submit" onclick="login();" value="SUBMIT">Submit</button>
                <!-- </form> -->
                <a href="index.php">Student Login</a>
            </div>
        </div>
    </main>
</body>

<script>
    function login() {
        var uname = document.getElementById("uname").value;
        var pswd = document.getElementById("pswd").value;
        if (uname == "" || pswd == "") {
            document.getElementById("success").innerHTML = '<div class="dangermsg">Please Fill all fields</div>';
        } else {
            window.location.href = "adminlogin.php?u=" + uname + '&p=' + pswd;
        }
    }
</script>



</body>