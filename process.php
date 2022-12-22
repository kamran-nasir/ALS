<?php
$con = mysqli_connect("sdb-53.hosting.stackcp.net", "live_db-35303035f60a", "c2lc0b6krc", "live_db-35303035f60a");
//$con = mysqli_connect("localhost", "root", "root", "local");
if (!$con) {
    echo "connection error";
}
 $post_id = htmlspecialchars(trim($_POST['post_id']));
  $urlPDF = $_POST['download_file'];
 $ip_address =   $_SERVER['REMOTE_ADDR'];
  $date = date("Y-m-d"); 
//$cpass = htmlspecialchars(trim($_POST['cpassword']));
//$mobile = htmlspecialchars(trim($_POST['mobile']));
if (empty($post_id) ) {
    echo '<div class="alert alert-success">please fill all required field</div>';
} else {
     $sql = "INSERT INTO `wp_form_disable` (`form_button_url`, `formID`, `ip_address`, `date`)
    VALUES ('$urlPDF', $post_id, '$ip_address', '$date')";
    if ($res = mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success">data successfully inserted</div>';
    } else {
        echo '<div class="alert alert-warning">data not inserted</div>';
    }
}
