<?php
if (!isset($_SESSION)) session_start();
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
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
<?php require_once 'header.php'; ?>
<?php require_once 'functions/db_connect.php'; ?>
<?php require_once 'functions/php_functions.php'; ?>

<main class="clearfix">
    <div class="header">
        <img src="images/cart-header.png">
        <h1>カート</h1>
    </div>
    <?php
    $cartData = getCartData($_SESSION['userid']);
    $totalPrice = 0;
    if (getCartNumber($_SESSION['userid'] > 0)) {?>
    <?php foreach($cartData as $keys => $list) { ?>
        <div class="colum clearfix">

            <img src="<?php echo $list['product_image']; ?>">

            <div class="details">

                <h2><?php echo getProductName($list['product_id']); ?></h2>
                <div class="dcol">
                    <h3>トレイ規格：<span id="tray"><?php echo getTrayName($list['tray_id']); ?></span></h3>
                    <h3 class="right">育苗方法：<span><?php if(getTrayName($list['tray_id']) == "200穴" || getTrayName($list['tray_id']) === "128穴"){echo "自根";}else{echo "接木";} ?></span></h3>
                </div>

                <div class="dcol">
                    <h3>台木：<span><?php echo getRootstockName($list['rootstock_id']); ?></span></h3>
                    <h3 class="right">注文数：<span><?php echo number_format($list['product_num']); ?></span></h3>
                </div>

                <div class="dcol">
                    <h3>合計：<span><?php echo "¥".number_format($list['total_price']); ?></span></h3>
                    <input id="right-button" type="button" onclick="location.href='order_detail.php'" value="編集" />
                </div>

            </div>
        </div>

        <?php $totalPrice += $list['total_price']; ?>

    <?php } ?>

    <div class="pricecolum price">
        <h2>合計金額</h2><h3><?php echo "¥".number_format($totalPrice); ?></h3>
        <hr>
    </div>
    <div class="cartbtn">
        <input id="button" type="button" onclick="location.href='functions/addOrder.php'" value="注文する" />
    </div>
    <?php } else { ?>
    <p style="color: red; text-align: center; font-size: 1.5em; margin-top: 30px;">カートには何も入っていません。</p>
    <?php } ?>
</main>
<?php require_once 'footer.php'; ?>
</body>
</html>