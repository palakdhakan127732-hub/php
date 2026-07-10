<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Username</title>
</head>
<body>

<h2>Welcome</h2>

<?php
echo "Username is: " . $_SESSION["RACHIT"];
?>

</body>
</html>