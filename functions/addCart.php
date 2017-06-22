<?php
if (!isset($_SESSION)) session_start();
require_once 'db_connect.php';
require_once 'php_functions.php';

$userid = $_SESSION['userid'];
$pname = $_GET['pname'];
$num = $_GET['num'];
$tray = $_GET['tray'];
$root = $_GET['root'];
$price = $_GET['price'];
$image = $_GET['image'];
$receiving_date = $_GET['receiving-date'];
try {
    $dbh = new PDO(DSN, DB_USER, DB_PWD);
    $dbh->query('SET NAMES UTF8');

    $stmt = $dbh->prepare('
    INSERT INTO cart (user_id, product_id, product_num, tray_id, rootstock_id, total_price, product_image, receiving_date)
    VALUES ("'.$userid.'", "'.getProductId($pname).'", "'.$num.'", "'.getTrayId($tray).'", "'.getRootstockId($root).'", "'.$price.'", "'.$image.'", "'.$receiving_date.'")');
    $stmt->execute();
    header("Location: ../SeedingsList.php");
} catch (PDOException $po) {
    echo $po->getMessage();
}