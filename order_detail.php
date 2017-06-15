<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PBL2017</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/order_detail.css">
</head>
<body>
<?php require_once 'header.php'; ?>
<?php require_once 'functions/php_functions.php'; ?>

<?php
$productName = "きゅうり";

switch ($productName) {
    case "トマト":
        $checkProduct = "checkTomato()";
        break;
    case "きゅうり":
        $checkProduct = "checkCucumber()";
        break;
    case "レタス":
        $checkProduct = "checkLettuce()";
        break;
}

?>
<script>
    var checkproduct = new CheckProduct();
</script>

<main>
    <h1 id="productName"><?php echo $productName; ?></h1>
    <img src="images/tomato.png">
    <form method="post" action="order_check.php" id="orderDetail" name="orderDetail">
        <div class="colum form-group">
            <h2>育苗方法</h2>
            <select class="form-control" id="sel1" name="howToGrow" onchange="<?php echo "checkproduct.".$checkProduct; ?>">
                <option value='' disabled selected style='display:none;'>育苗方法を選択</option>
                <option>自根</option>
                <option>接木</option>
            </select>
        </div>
        <div class="colum">
            <h2>トレイ規格</h2>
            <select class="form-control" id="sel1" name="trayName" onchange="<?php echo "checkproduct.".$checkProduct; ?>">
                <option value='' disabled selected style='display:none;'>トレイ規格を選択</option>
                <?php get_tray(); ?>
            </select>
        </div>
        <div class="colum">
            <h2>引き取り日</h2>
            <input type="date" id="date" onchange="checkInput()">
        </div>
        <div class="colum">
            <h2>苗数量</h2>
            <input type="number" min="1" id="p_num" name="product_number" class="form-control" max="10000" placeholder="苗数量を入力" onchange="checkInput()">
        </div>
        <div class="colum buttons">
            <input id="button" type="submit" onmouseover="submitMouseover()" onmouseout="submitMouseout()" value="決定"/>
            <input id="button" type="button" onclick="location.href='SeedlingsList.php'" value="戻る" />
        </div>
        <div class="colum">
            <h2>台木</h2>
            <select class="form-control" id="sel1" name="selectGraft" onchange="<?php echo "checkproduct.".$checkProduct; ?>">
                <option value='' disabled selected style='display:none;'>台木を選択</option>
                <?php get_rootstock(); ?>
            </select>
        </div>
    </form>
</main>
</body>
</html>
