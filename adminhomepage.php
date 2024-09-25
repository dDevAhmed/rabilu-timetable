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
</head>

<body>

    <img src="img/1.jpeg" style="width: 100%; height: 100%; position: fixed; top: 0px; opacity: 1;">
    <center>
        <img src="img/2.jpeg" style="float: left; width: 8em; height: 8em; position: relative; z-index:6; margin-left: 3em; margin-top: -10em;  border-radius: 100%; ">
        <span onclick="window.location.href='adminlogout.php'" style="float: right;  position: relative; margin-left: 3em; margin-top: -9em; padding: 10px; margin-right: 2em; "><b>LOGOUT</b></span>
        <span onclick="window.location.href='rescheduleexams.php'" style="float: right;  position: relative; margin-left: 3em; margin-top: -9em; padding: 10px; margin-right: 8em; "><b>RE-SCHEDULE EXAMS</b></span>

        <h4 id="success" style="z-index: 5; margin-left: -2em; margin-top: 8em; "></h4>
    </center>
    <center>
        <div style="width: 60em; height: 30em; background: #7f9ea0; position: relative;  z-index: 0; top: 0em; border-radius: 5px; "><br><br>
            <span style="font-size: 20;  color: #000; font-weight: bold; ">SCHEDULE EXAM FOR STUDENT </span><br><br>
            <input type="text" id="course" placeholder="Enter Exam Course" style="width: 27em; height: 3em; margin-left: 2em; float: left; background: #ffffff; outline: none; border-radius: 5px;">
            <input type="text" id="venue" placeholder="Enter Exam Venue" style="width: 27em; height: 3em; margin-right: 2em; float: right; background: #ffffff; outline: none; border-radius: 5px;"><br><br><br>
            <input type="text" id="date" placeholder="Enter Exam Date" style="width: 27em; height: 3em; margin-left: 2em; float: left; background: #ffffff; outline: none; border-radius: 5px;">
            <input type="text" id="time" placeholder="Enter Exam Time" style="width: 27em; height: 3em; margin-right: 2em; float: right; background: #ffffff; outline: none; border-radius: 5px;"><br><br><br>
            <input type="text" id="day" placeholder="Enter Exam Day" style="width: 27em; height: 3em; margin-left: 2em; float: left; background: #ffffff; outline: none; border-radius: 5px;">
            <input type="number" id="from" placeholder="Student From" style="width: 12em; height: 3em; margin-left: 2em; float: left; background: #ffffff; outline: none; border-radius: 5px;">
            <input type="number" id="to" placeholder="Student To" style="width: 12em; height: 3em; margin-left: 2em; float: left; background: #ffffff; outline: none; border-radius: 5px;">

            <br><br><br>
            <input type="text" value="Student scheduled for exam: <?php echo $scheduled; ?> of <?php echo $notscheduled; ?>" style="width: 27em; font-weight: bold; height: 3em; margin-left: 2em; background: #ffffff; outline: none; border-radius: 5px;" readonly>
            <br><br>
            <input type="button" value="SCHEDULE EXAM" onclick="schedulexam();" style="width: 20%; height: 3em; background: #000; color:#ffffff;  outline: none; border-radius: 5px; border: none;">
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