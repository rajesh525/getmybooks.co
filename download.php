<?php

$username=$_GET['username'];
$course=$_GET['course'];
$branch=$_GET['branch'];
$college=$_GET['college'];
$gender=$_GET['gender'];
$event=$_GET['event'];
$email=$_GET['email'];
$phone=$_GET['phone']
$city=$_GET['city'];

$result="select * from register";


$con = mysql_connect('localhost','admin','aditya!212');
mysql_select_db('vedaregister',$con);
 $header = '';
$data ='';
$export = mysql_query ($result ) or die ( "Sql error : " . mysql_error( ) );
 
$fields = mysql_num_fields ( $export );
 
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $export , $i ) . "\t";
}
 
while( $row = mysql_fetch_row( $export ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );
 
if ( $data == "" )
{
    $data = "\nNo Record(s) Found!\n";                        
}
$name=date('d-m-y').'-list.xls';
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$name");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";


?>
