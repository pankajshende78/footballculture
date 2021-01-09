<html>
<head>
<head>
     <link rel="shortcut icon" href="Iron.ico" />
     <link href="C:\Documents and Settings\Admin\Desktop\Photos\login\login.css" rel="stylesheet" type="text/css">
     
</head>
</head>
<body>
<?php
$dbconnect=mysqli_connect("localhost","root","football");
if(mysqli_connect_errno($dbconnect))
{
echo "failed to connect";
}
else
{
echo "connection succesful";
}
?>
</body>
</html>