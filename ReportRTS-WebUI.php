<html>
<body>
<?php
#Ticket Web Display for ReportRTS 0.4.0
#By ron975
$username="minecraft"; #Subsitute MySQL Username
$password="password"; #Subsitute MySQL Password
$database="minecraft"; #Susitute Database Name
$dbhost="localhost"; #Subsitute Database Host

mysql_connect($dbhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM reportrts_request";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
?>
<table border="1" cellspacing="2" cellpadding="2">
<tr>

<td><font face="Arial, Helvetica, sans-serif">Ticket ID</font></td>
<td><font face="Arial, Helvetica, sans-serif">User ID</font></td>
<td><font face="Arial, Helvetica, sans-serif">Mod ID</font></td>
<td><font face="Arial, Helvetica, sans-serif">Time of acceptance(DD/MM/YY)</font></td>
<td><font face="Arial, Helvetica, sans-serif">Mod Comment</font></td>
<td><font face="Arial, Helvetica, sans-serif">Time of submission (DD/MM/YY)</font></td>
<td><font face="Arial, Helvetica, sans-serif">World</font></td>
<td><font face="Arial, Helvetica, sans-serif">X Position</font></td>
<td><font face="Arial, Helvetica, sans-serif">Y Position</font></td>
<td><font face="Arial, Helvetica, sans-serif">Z Position</font></td>
<td><font face="Arial, Helvetica, sans-serif">Yaw</font></td>
<td><font face="Arial, Helvetica, sans-serif">Pitch</font></td>
<td><font face="Arial, Helvetica, sans-serif">Ticket description</font></td>
<td><font face="Arial, Helvetica, sans-serif">Ticket completed?</font></td>
<td><font face="Arial, Helvetica, sans-serif">User Notified?</font></td>
</tr>

<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"id");
$f2=mysql_result($result,$i,"mod_id");
$f3=mysql_result($result,$i,"mod_timestamp");
$f4=mysql_result($result,$i,"mod_comment");
$f5=mysql_result($result,$i,"tstamp");
$f6=mysql_result($result,$i,"world");
$f7=mysql_result($result,$i,"x");
$f8=mysql_result($result,$i,"y");
$f9=mysql_result($result,$i,"z");
$f10=mysql_result($result,$i,"yaw");
$f11=mysql_result($result,$i,"pitch");
$f12=mysql_result($result,$i,"text");
$f13=mysql_result($result,$i,"status");
$f14=mysql_result($result,$i,"notified_of_completion");
$f15=mysql_result($result,$i,"user_id");
?>


<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f15; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo date("d/m/Y",$f3); ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo date("d/m/Y",$f5); ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f9; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f10; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f11; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f12; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f13; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f14; ?></font></td>
</tr>

<?php
$i++;
}
?>

<?php
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM reportrts_user";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
?>
<table border="1" cellspacing="2" cellpadding="2">
<tr>

<td><font face="Arial, Helvetica, sans-serif">User ID</font></td>
<td><font face="Arial, Helvetica, sans-serif">Username</font></td>
<td><font face="Arial, Helvetica, sans-serif">Is Banned?</font></td>
</tr>

<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"id");
$f2=mysql_result($result,$i,"name");
$f3=mysql_result($result,$i,"banned");
?>


<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
</tr>

<?php
$i++;
}
?>
</body>
</html>