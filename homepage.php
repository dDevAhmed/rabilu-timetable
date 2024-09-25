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
<?php
$updateprpfile = mysqli_query($db, "SELECT * FROM studentreg WHERE regno='$user' ");
$get = mysqli_fetch_assoc($updateprpfile);
$rows = mysqli_num_rows($updateprpfile);
$fname = $get['fullname'];
$dept = $get['department'];
$level = $get['level'];

$gender = $get['gender'];


$updateprpfile1 = mysqli_query($db, "SELECT * FROM exam WHERE regno='$user' ");
$rows = mysqli_num_rows($updateprpfile1);
?>

<body>
    <center>
        <div style="width: 60em; height: 100%;">
            <div style="width:100%; height: 10em;">
                <img src="img/2.jpeg" style="float: left; width: 8em; height: 8em; margin-left: 0.5em; margin-top: 0.2em;  border-radius: 100%; background: #ffffff;">
                <center><span style="font-family: arial; font-size: 25; font-weight:bold; margin-left: -4em;">ABUBAKAR TAFAWA BALEWA UNIVERSITY, BAUCHI</span></center>
                <center><span style="font-family: arial; font-size: 17; font-weight:bold; margin-left: -4em;">P.M.B 0248, BAUCHI, NIGERIA</span></center>
                <center><span style="font-family: arial; font-size: 17; font-weight:bold; margin-left: -4em;">UNDERGRADUATE PROGRAM</span></center>
                <center><span style="font-family: arial; font-size: 17; font-weight:bold; margin-left: -4em;">SECOND SEMESTER, 2022/2023</span></center>

                <center><span style="font-family: arial; font-size: 20; font-weight:bold; margin-left: -4em;"><u>ONLINE TIMETABLE EXAMINATION SLIP</u></span></center>

            </div>
            <br><br>

            <span style="font-family: arial; font-size: 15; margin-left: 1em; float: left;"><u><b>FULLNAME:</b> <?php echo $fname; ?></u></span>
            <span style="font-family: arial; font-size: 15; margin-right: 2em; float: right;"><u><b>DEPARTMENT:</b> <?php echo $dept; ?></u></span><br><br>
            <span style="font-family: arial; font-size: 15; margin-left: 1em; float: left;"><u><b>REG NO:</b> <?php echo $user; ?></u></span>
            <span style="font-family: arial; font-size: 15; margin-right: 2em; float: right;"><u><b>LEVEL:</b> <?php echo $level; ?></u></span><br><br>
            <br>


            <br>
            <?php

            if ($rows == 0) {
            ?>
                <div class="dangermsg">Your Exams is not Scheduled</div>

            <?php
            } else {
            ?>
                <table style="position: relative; left: 3.5em; width: 95%; height: auto; border: 1px solid black; padding: 5px;  background: #ffffff; margin-left: -6em;">
                    <thead>
                        <tr>
                            <th style="padding: 10px; border: 1px solid black;">COURSE</th>
                            <th style="padding: 10px; border: 1px solid black;">VENUE</th>
                            <th style="padding: 10px; border: 1px solid black;">DATE</th>
                            <th style="padding: 10px; border: 1px solid black;">TIME</th>
                            <th style="padding: 10px; border: 1px solid black;">DAY</th>


                        </tr>
                    </thead>
                    <?php
                    $updateprpfile = mysqli_query($db, "SELECT * FROM exam WHERE regno ='$user' ");
                    while ($get = mysqli_fetch_assoc($updateprpfile)) {
                        $regno = $get['regno'];
                        $course = $get['course'];
                        $venue = $get['venue'];
                        $date = $get['examdate'];
                        $time = $get['examtime'];
                        $day = $get['day'];


                    ?>
                        <tbody>
                            <tr>

                                <td style="padding: 10px; border: 1px solid black;"><?php echo $course; ?></td>
                                <td style="padding: 10px; border: 1px solid black;"><?php echo $venue; ?></td>
                                <td style="padding: 10px; border: 1px solid black;"><?php echo $date; ?></td>
                                <td style="padding: 10px; border: 1px solid black;"><?php echo $time; ?> </td>
                                <td style="padding: 10px; border: 1px solid black;"><?php echo $day; ?> </td>


                            </tr>
                        </tbody>

                    <?php
                    }

                    ?>
                </table>
            <?php
            }
            ?>
            <br><br><br><br>
            <button onclick="print()" style="font-family: arial; font-size: 15;">PRINT</button>
            <br><br><br><br>
            <button onclick="window.location.href='logout.php'" style="font-family: arial; font-size: 15;">LOGOUT</button>
        </div>

    </center>



</body>