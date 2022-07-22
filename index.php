<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="icon" href="/images/icon.ico">
      <title>ホーム | BoundFore</title>
      <link rel="stylesheet" href="/Style/index.css">
  		<script src="/interactivemap/mapdata.js"></script>
  		<script src="/interactivemap/continentmap.js"></script>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/header.php') ?>
        <div class="logo-container">

        </div>

        <div class="header-container">
            <img src="/images/earth.jpg" alt="">
            <div id="title">
                <h1 style="background-color:black;">BoundFive</h1>
            </div>
        </div>

        <div class="about_us">
            <h2>About us</h2>
            <p>こんにちは！BoundForeです。この留学情報サイトは、留学中・留学経験のある日本の大学生メンバーによって運営されています。</p>
        </div>

        <div class="introduction">
            <h2>Your Mind is Bound For...???</h2>
        </div>

        <div id="map" style="display:block;margin:0px auto;"></div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php') ?>
    </body>
</html>
