<? php
if($test=mysql_connect("localhost","root"," "))
{
echo("connected") "<br/>";
echo $test1;
}
else
echo mysql_error();
?>