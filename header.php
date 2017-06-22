<?php require_once 'functions/php_functions.php'; ?>
<header>
<nav>
    <ul class="clearfix">
        <li id="otoiawase"><a href="contact.php"><img id="nav_image" src="images/otoiawase.png"/></a></li>
        <li id="cart"><a href="cart.php"><img id="nav_image" src="images/lgi01a201410222200.png"/><span class="badge" style="position: absolute;margin-left: -42px;background-color: red;"><?php if (getCartNumber($_SESSION['userid']) > 0) echo getCartNumber($_SESSION['userid']); ?></span></a></li>
        <li id="cancel"><a href="cancel.php"><img id="nav_image" src="images/1122041004.png"/></a></li>
        <li id="oshirase"><a href="oshirase.php"><img id="nav_image" src="images/oshirase.png"/><span class="badge" style="position: absolute;margin-left: -36px;background-color: red;"></span></a></li>
        <li id="naeitiran"><a href="SeedingsList.php"><img id="nav_image" src="images/45754519.png"/></a></li>
        <li id="home"><a href="home.php"><img id="nav_image" src="images/5e5b5e_7d8323baf24743f397d42e41cecf1aca-mv2.png"/></a></li>
        <li id="logo"><a href="#"><img src="images/syokubutsu_nae.png"/></a></li>
    </ul>
</nav>
</header>
