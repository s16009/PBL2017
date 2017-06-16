<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PBL2017</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/order_check.css">
</head>
<body>
<?php require_once 'header.php'; ?>
<?php $time = strtotime($_POST['receiving_date']);
$date = date('Y-m-d', $time); ?>
<main>
    <h1>レタス</h1>
    <img src="images/nae2.png">
    <form method="post" action="#">

        <div class="colum" style="margin-top: 0;">
            <h2>トレイ規格</h2><h3><?php echo $_POST['trayName']; ?></h3>
            <hr>
        </div>

        <div class="colum">
            <h2>苗数量</h2><h3><?php echo $_POST['product_number']; ?></h3>
            <hr>
        </div>

        <div class="colum">
            <h2>台木</h2><h3><?php echo $_POST['selectGraft']; ?></h3>
            <hr>
        </div>

        <div class="colum">
            <h2>育苗方法</h2><h3><?php echo $_POST['howToGrow']; ?></h3>
            <hr>
        </div>

        <div class="colum">
            <h2>引き取り日</h2><h3><?php echo $date;?></h3>
            <hr>
        </div>

        <div class="colum price">
            <h2>合計金額</h2><h3>3000円</h3>
            <hr>
        </div>

        <div class="colum buttons">
            <input id="button" type="button" onclick="location.href='order_detail.php'" value="戻る" />
            <input id="button" type="submit" value="カートに入れる" />
        </div>

    </form>
</main>
</body>
</html>