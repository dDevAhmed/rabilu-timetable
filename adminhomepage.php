<?php
$cookie_name = "loggedin";
include("./connect/headers.php");
if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    $user = $cookie_value;
} else {
    $user = "";
?>
    <script>
        window.location.href = "admin.php";
    </script>

<?php
}
$updateprpfile0 = mysqli_query($db, "SELECT * FROM studentreg");
$notscheduled = mysqli_num_rows($updateprpfile0);

$updateprpfile = mysqli_query($db, "SELECT * FROM exam");
$scheduled = mysqli_num_rows($updateprpfile);

?>
<html>
<title> Home page </title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" />
    <script src="./bootstrap/js/response.js"></script>
    <script language="javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="./css/adminpage.css"> -->
    <style>
        body {
            width: 100%;
        }

        nav.navbar {
            padding: 10px;
            display: flex;
            justify-content: space-between;

            span {
                display: flex;
                align-items: center;
                gap: 10px;

                a {
                    color: #357bf5;
                    text-decoration: none;
                    font-weight: 600;
                }
            }
        }
        span.row{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 20px;
        }

        input {
            padding: 15px;
            background: #fff;
            outline: none;
            border: none;
            border-radius: 5px;
            width: 100%;
        }

        button {
            background: #000;
            border: none;
            padding: 15px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            color: white;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <img src="img/2.jpeg" style="height: 60px;">
        <span>
            <a href="#" onclick="window.location.href='rescheduleexams.php'">RE-SCHEDULE EXAMS</a>
            <a href="#" onclick="window.location.href='adminlogout.php'">LOGOUT</a>
        </span>

    </nav>
    <center>
        <div style="width: 60em; background: #357bf5; position: relative;  z-index: 0; top: 0em; border-radius: 5px; padding: 30px;"><br><br>
            <span style="font-size: 20;  color: #000; font-weight: bold;">SCHEDULE EXAM FOR STUDENT </span><br><br>
            <span class="row">
                <input type="text" id="course" placeholder="Enter Exam Course">
                <input type="text" id="venue" placeholder="Enter Exam Venue">
            </span>
            <span class="row">
                <input type="text" id="date" placeholder="Enter Exam Date">
                <input type="text" id="time" placeholder="Enter Exam Time">
            </span>
            <span class="row"><input type="text" id="day" placeholder="Enter Exam Day"></span>
            <span class="row">
                <input type="number" id="from" placeholder="Student From">
                <input type="number" id="to" placeholder="Student To">
            </span>

            <input type="text" value="Student scheduled for exam: <?php echo $scheduled; ?> of <?php echo $notscheduled; ?>" style="width: 27em; font-weight: bold; height: 3em; margin-left: 2em; background: #ffffff; outline: none; border-radius: 5px;" readonly>
            <button type="button" value="SCHEDULE EXAM" onclick="schedulexam();" style="width: 20%; height: 3em; background: #000; color:#ffffff;  outline: none; border-radius: 5px; border: none; display: block;">Schedule Exam</button>
        </div>
    </center>

</body>

<script>
    function schedulexam() {
        var course = document.getElementById('course').value;
        var venue = document.getElementById('venue').value;
        var date = document.getElementById('date').value;
        var time = document.getElementById('time').value;
        var day = document.getElementById('day').value;
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;

        if (course == "" || venue == "" || date == "" || time == "" || day == "" || from == "" || to == "") {
            document.getElementById("success").innerHTML = '<div class="dangermsg"> Please Fill all fields</div> ';
        } else {
            window.location.href = 'adminexamprocessing.php?c=' + course + "&v=" + venue + "&d=" + date + "&t=" + time + "&dy=" + day + "&f=" + from + "&to=" + to;

        }

    }
</script>