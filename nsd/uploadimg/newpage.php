<html>
<head>
</head>
<body>
	<?php
session_start();
session_destroy();
header("Location: ../home.php");
exit;
?>
</body>
</html>