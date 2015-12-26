<?php
//$log_status=0;

session_start();

if (isset($_SESSION['valid_uid'])) #checking if session already exists
   {


   }
elseif (isset($_POST["txtLogin"]) && isset($_POST["txtPassword"])) #if session doesn't exist, create one
    {
     $user_name = $_POST["txtLogin"];
     $user_password =$_POST["txtPassword"];
     //$conn = mysql_connect('localhost', 'sde', 'sde123') or die ("I Missed the Connection");
     //$db=mysql_select_db("sde") or die ("I Missed the database");     

     include("admin/php/connect_to_mysql.php");


    $res=mysql_query("select * from  users where s_id='$user_name' and password='$user_password';") or die ("I Missed the data retrieval");     
   
    $row=mysql_fetch_row($res);
     if($row[0]!='')
        {
           $_SESSION['valid_uid'] = $row[0];
   //         $_SESSION['first_name'] = $row[2];
  //           $_SESSION['middle_name'] = $row[3];
 //         $_SESSION['last_name'] = $row[4];
           $_SESSION['full_name'] = $row[5];
 //          $_SESSION['user_role'] = $row[4];
                      
        }
     else
        {
           session_destroy();
           header("Location:login.php?e=1");
           exit;
        }
  }
else              #if user access the page directly, redirect to login page
{
 session_destroy();
 header("Location:index.php");
 exit;
}

?>	
