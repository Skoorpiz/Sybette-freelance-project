<?php
try {
    $pdo = new PDO("mysql:host=YOURHOST;dbname=YOURDBNAME;port=3306;charset=utf8", "YOURID", "YOURPASSWORD");
} catch (Exception $ex) {
    echo "<div>Une erreur est survenue : <div><code>$ex</code></div></div>";
    $pdo = null;
}
