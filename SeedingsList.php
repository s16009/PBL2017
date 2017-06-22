<?php
if (!isset($_SESSION)) session_start();
require_once 'functions/db_connect.php';
require_once 'functions/php_functions.php';
try {
    $pdo = new PDO(DSN, DB_USER, DB_PWD);
    $stmt = $pdo->prepare('SELECT * FROM product');
    $stmt->execute();
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    }



} catch (PDOException $e) {
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
<?php $products = show_product(); ?>

<main>
    <div class="header">
        <img src="images/naeitiran.png">
        <h1>カート</h1>
    </div>

    <div class="product-list clearfix">

        <?php foreach ($products as $keys => $list) { ?>
        <div class="column">

            <a href="order_detail.php?pid=<?php
            echo $list['product_id']; ?>&name=<?php
            echo $list['product_name']; ?>&image=<?php
            echo $list['product_image']; ?>"></a>

            <h1><?php echo $list['product_name']; ?></h1>
            <img src="<?php echo $list['product_image']; ?>">
        </div>
        <?php } ?>


    </div>


</main>

<?php require_once 'footer.php'; ?>

</body>
</html>