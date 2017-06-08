<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PBL2017</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/order_detail.css">
</head>
<body>
<?php require_once 'header.php'; ?>

<main>
    <h1>レタス</h1>
    <img src="images/nae.png">
    <form method="post" action="#">
        <div class="colum form-group">
            <h2>育苗方法</h2>
            <select class="form-control" id="sel1">
                <option>自根</option>
                <option>接木</option>
            </select>
        </div>
        <div class="colum">
            <h2>トレイ規格</h2>
            <select class="form-control" id="sel1">
                <option>280穴</option>
                <option>128穴</option>
                <option>9cmポット</option>
                <option>10.5cmポット</option>
            </select>
        </div>
        <div class="colum">
            <h2>引き取り日</h2>
            <input type="date" value="2017-06-07">
        </div>
        <div class="colum">
            <h2>苗数量</h2>
            <select class="form-control" id="sel1">
                <?php for ($i = 0; $i < 10001; $i++)
                    echo "<option>{$i}</option>";?>
            </select>
        </div>
        <div class="colum buttons">
            <input id="button" type="submit" value="決定" />
            <input id="button" type="button" onclick="location.href='SeedlingsList.php'" value="戻る" />
        </div>
        <div class="colum">
            <h2>台木</h2>
            <select class="form-control" id="sel1">
                <option>なし</option>
                <option>きゅうり台木1</option>
                <option>きゅうり台木2</option>
                <option>トマト台木1</option>
                <option>トマト台木2</option>
            </select>
        </div>
    </form>
</main>
</body>
</html>