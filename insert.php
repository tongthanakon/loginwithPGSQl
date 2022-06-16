<?php

// setup conection database
$conn = pg_connect("host=localhost port=5432 dbname=project01 user=postgres password=admin");
if (!$conn) {
  exit;
}
$username = $_POST['username'];
$pw= $_POST['password'];


//$query = "INSERT INTO user_profile VALUES ('$username','$pw')";
$query = "INSERT INTO public.user_profile(user_name, user_password) VALUES ('$username', '$pw') returning user_id ;";
//exe query with connection
$result = pg_query($conn ,$query); 
//get result via array
print_r(pg_fetch_array($result));  
// loop to get id if have if return true 



?>