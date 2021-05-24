<?php
try {
    $pdo = new PDO("mysql:host=bdd2.adkynet.com;dbname=s2446_sybette;port=3306;charset=utf8", "u2446_cJTMk86qXE", "D.nS1G7paN^qR7YRJRRI=Aeg");
} catch (Exception $ex) {
    echo "<div>Une erreur est survenue : <div><code>$ex</code></div></div>";
    $pdo = null;
}