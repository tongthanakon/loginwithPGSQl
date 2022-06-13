<?php
$conn = pg_connect("host=localhost port=5432 dbname=project01 user=postgres password=admin");
if (!$conn) {
  exit;
}
$username = $_POST['username'];
$pw= $_POST['password'];
$result = pg_query($conn, "SELECT user_id, user_name, user_password, \"user_isAdmin\", \"user_isDelete\"
FROM public.user_profile
where user_name = '$username' and user_password = '$pw'");
$row = pg_fetch_row($result);
if (empty($row)) {
    $result = false;
    //return false
  }else {
    // return true
    $result = true;
  }
  echo json_encode($result);
?>