<!doctype html>
<head>

</head>
<body>
<form method="get">
<input name="userid">
<input type="submit" value="전송">
</from> 
<?php 
ini_set('display_errors',0);
echo "<br>이용자의 아이디 :{$_GET['userid']}";?>  
</body>
</html>