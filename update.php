<?php

// setup conection database
$conn = pg_connect("host=localhost port=5432 dbname=project01 user=postgres password=admin");
if (!$conn) {
  exit;
}

$id = $_POST['id'];
$username = $_POST['username'];
$pw= $_POST['password'];

$query = "UPDATE public.user_profile SET  user_name='$username', user_password='$pw' WHERE user_id= '$id' returning user_id";
$result = pg_query($conn ,$query); 
print_r(pg_fetch_array($result)); 

?>