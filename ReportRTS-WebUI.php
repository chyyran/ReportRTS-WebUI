<html>
<body>
<?php
#Ticket Web Display for ReportRTS 0.4.0
#By ron975
$username="minecraft"; #Subsitute MySQL Username
$password="password"; #Subsitute MySQL Password
$database="minecraft"; #Susitute Database Name
$dbhost="localhost"; #Subsitute Database Host

#Localization Strings
#To Translators: Edit these strings
$ticketid="Ticket ID";
$userid="User ID";
$modid="Mod ID";
$mtimestamp="Time of acceptance(DD/MM/YY)";
$modcomment="Mod Comment";
$timestamp="Time of submission (DD/MM/YY)";
$world="World";
$xpos="X Position";
$ypos="Y Position";
$zpos="Z Position";
$yaw="Yaw";
$pitch="Pitch";
$tickdesc="Ticket description";
$tickcomp="Ticket Status";
$notified="User notified?";
$name="Username";
$banned="Is Banned?";
#Localization Strings end
mysql_connect($dbhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM reportrts_request";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
?>
<table border="1" cellspacing="2" cellpadding="2">
<tr>

<td><font face="Arial, Helvetica, sans-serif"><?php echo $ticketid; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $userid; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $modid; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $mtimestamp; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $modcomment; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $timestamp; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $world; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $xpos; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $ypos; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $zpos; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $yaw; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $pitch; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $tickdesc; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $tickcomp; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $notified; ?></font></td>

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

<td><font face="Arial, Helvetica, sans-serif"><?php echo $userid; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $name; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $banned; ?></font></td>
</tr>

<?php
$i=0;
while ($i < $num) {

$g1=mysql_result($result,$i,"id");
$g2=mysql_result($result,$i,"name");
$g3=mysql_result($result,$i,"banned");
?>


<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $g1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $g2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $g3; ?></font></td>
</tr>

<?php
$i++;
}
?>
</body>
</html>