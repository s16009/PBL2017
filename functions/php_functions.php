<?php
require_once 'db_connect.php';

function get_tray() {
    try {
        $dbh = new PDO(DSN, DB_USER, DB_PWD);
        $dbh->query('SET NAMES utf8');

        $stmt = $dbh->prepare('select tray_name from tray');
        $stmt->execute();
        while ($TrayData = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<option>".$TrayData['tray_name']."</option>";
        }
        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function get_rootstock() {
    try {
        $dbh = new PDO(DSN, DB_USER, DB_PWD);
        $dbh->query('SET NAMES utf8');

        $stmt = $dbh->prepare('select rootstock_name from rootstock');
        $stmt->execute();
        while($RootstockData = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<option>".$RootstockData['rootstock_name']."</option>";
        }
        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}