<?php
session_start();
$db['host'] = "localhost";  // DBサーバのURL
$db['user'] = "root";  // ユーザー名
$db['pass'] = "yc20140219";  // ユーザー名のパスワード
$db['dbname'] = "PBL2017";  // データベース名
$dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
try {
    $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $pdo->prepare('SELECT * FROM product');
    $stmt->execute();
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    }



} catch (PDOException $e) {
    $errorMessage = 'データベースエラー';
    //$errorMessage = $sql;
    // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
    echo $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PBL2017</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/SeedlingsList.css">
</head>
<body>
<?php require_once 'header.php'; ?>

<main>
    <div class="header">
        <img src="images/naeitiran.png">
        <h1>カート</h1>
    </div>

    <div class="product-list clearfix">

        <div class="column">
            <a href="order_detail.php"></a>
            <h1>とまと</h1>
            <img src="images/tomato.png">
        </div>

        <div class="column">
            <a href="order_detail.php"></a>
            <h1>とまと</h1>
            <img src="images/tomato.png">
        </div>

        <div class="column">
            <a href="order_detail.php"></a>
            <h1>とまと</h1>
            <img src="images/tomato.png">
        </div>

        <div class="column">
            <a href="#"></a>
            <h1>とまと</h1>
            <img src="images/tomato.png">
        </div>

    </div>


</main>

<?php require_once 'footer.php'; ?>

</body>
</html>