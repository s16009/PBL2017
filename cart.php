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

<main class="clearfix">
    <div class="header">
        <img src="images/cart-header.png">
        <h1>カート</h1>
    </div>

    <?php $order = array(
        0 => array(
            "product_name" => "トマト",
            "order_num" => 300
        ),
        1 => array(
            "product_name" => "レタス",
            "order_num" => 200
        ),
        2 => array(
            "product_name" => "きゅうり",
            "order_num" => 4000
        )
    ); $i = 0;?>
    <?php for($i = 0; $i < count($order); $i++) { ?>
        <div class="colum clearfix">

            <img src="images/nae2.png">

            <div class="details">

                <h2><?php echo $order[$i]['product_name']; ?></h2>
                <div class="dcol">
                    <h3>トレイ規格：<span>200穴</span></h3>
                    <h3 id="right">育苗方法：<span>自根</span></h3>
                </div>

                <div class="dcol">
                    <h3>台木：<span>なし</span></h3>
                    <h3 id="right">注文数：<span><?php echo $order[$i]['order_num']; ?></span></h3>
                </div>

                <div class="dcol">
                    <h3>合計：<span>3000円</span></h3>
                    <input id="right-button" type="button" onclick="location.href='order_detail.php'" value="編集" />
                </div>

            </div>
        </div>

    <?php } ?>

    <div class="pricecolum price">
        <h2>合計金額</h2><h3>3000円</h3>
        <hr>
    </div>
    <div class="cartbtn">
        <input id="button" type="button" onclick="location.href='order_detail.php'" value="注文する" />
    </div>
</main>
<?php require_once 'footer.php'; ?>
</body>
</html>