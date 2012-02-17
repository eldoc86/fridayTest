<?php
function db_connect(){
  $host     = "localhost"; 
  $username = "membership_admin";
  $password = "jLKJWWVwWjfLrShC"; // Replace with your password
  $database = "membership";
  
  $link = mysql_connect($host, $username, $password);
  if(!$link){
    exit('Could not connect to database: '. mysql_error());
  }
  
  $selected = mysql_select_db($database);
  if(!$selected){
    exit("Could not select database '$database'");
  }
}

?>