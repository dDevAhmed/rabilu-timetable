<?php
$cookie_name="loggedin";


setcookie("loggedin", "val", time() - (24624000), "/");

?>
<script>
window.location.href="index.php";
</script>