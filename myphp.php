<?php
$color = "Yellow";
if(isset($_POST['sel_color'])){
 $color = $_POST['sel_color'];
 setcookie('theme_color', $color, time() + (86400 * 30), "/");
 header("location: index.php");
}

if(isset($_POST['click'])){
	$check_value =  $_POST['check'];
	if($check_value == 1){
$first_value =  $_POST['first_name'];
$last_value =  $_POST['last_name'];
$email_value =  $_POST['email_address'];
$me_value =  $_POST['about_me'];
$check_value =  $_POST['check'];
setcookie('first', $first_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie('last', $last_value, time() + (86400 * 30), "/");
setcookie('email', $email_value, time() + (86400 * 30), "/");
setcookie('me', $me_value, time() + (86400 * 30), "/");
setcookie('checker', $check_value, time() + (86400 * 30), "/");
header("location: index.php");
}
}
?>
