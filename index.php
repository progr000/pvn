<?php
require __DIR__ . '/db.php';

if (isset($_POST['passwd'])) {
    $db = Db::getInstance();
    $res = $db->query("SELECT * FROM passwd WHERE hash=:hash", ['hash' => $_POST['passwd']]);

    if (is_array($res) && sizeof($res) > 0) {
        echo "password is hacked";
    } else {
        echo "password is ok";
    }
}

?>

<html>
<body>

<form method="post" action="index.php">
    <label><input type="text" name="passwd" />Enter password</label>
    <input type="submit" value="Check" />
</form>

</body>
</html>
