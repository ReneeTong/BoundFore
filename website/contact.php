<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="icon" href="/images/icon.ico">
  <title>お問い合わせ | BoundFore</title>
  <link rel="stylesheet" href="../Style/contact.css">
</head>

<body>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/php/header.php') ?>

  <div class="header-container">
    <img src="../images/city/hungary_city_2.jpg" alt="">
    <div id="title">
      <h2>Contact Us</h2>
    </div>
  </div>

  <div class="contact">
    <h3>Email: boundfore@gmail.com </h3>
  </div>

  <div class="body-container">
    <form action="/php/send_contact_form.php" method="POST">
      <p>Name</p> <input type="text" name="name">
      <p>Email</p> <input type="text" name="email">

      <p>Request</p>
      <select name="type" size="1">
        <option value="update">Request country</option>
        <option value="change">Question</option>
        <option value="addition">Site change</option>
        <option value="new">Other</option>
      </select>
      <br />

      <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
      <input type="submit" value="Send"><input type="reset" value="Clear">
    </form>

    <div class="members">
      <h2>Members </h2>

      <div class="person">
        <img src="/images/profile/sumiyo.jpeg" alt="" class="image">
        <div class="text_container">
          <h3>すきやき</h3>
          <p>
            こんにちは
            <br>現在アメリカ、ユタ州へ留学中のすき焼きです！好きな食べ物はもちろんすき焼きです。私が留学先を調べる時に困った経験をしたので、このウェブサイトの立ち上げを決心しました。留学では大変なことももちろんありますが、それ以上の見返りがあると思います！この活動が少しでも役に立てれば嬉しいです。
          </p>
        </div>
      </div>

      <div class="person">
        <img src="/images/profile/komeno.jpeg" alt="" class="image">
        <div class="text_container">
          <h3>ポトフ</h3>
          <p>
            Hej hej! スウェーデンはヨーテボリに留学中のポトフです。この道7年筋金入りのヘタリアオタクです。推しはリトアニアです。
            <br>私が留学先にスウェーデンを選んだ決め手は、留学先の大学にちょうど学びたい科目があったことです。個人的には、興味のある分野を学べる国に行くのが留学成功のカギだと思います。それに加えて、ヨーロッパに留学すると、様々な国に旅行ができます。旅先で博物館や美術館を訪れたり、街を歩きながら世界史で学んだことを思い出してみたり、楽しいだけじゃなく意外と良い学びになりますよ！
          </p>
        </div>
      </div>

      <div class="person">
        <img src="/images/profile/nana.jpeg" alt="" class="image">
        <div class="text_container">
          <h3>ponzu</h3>
          <p>
            初めまして！ponzuと申します。21-22年にかけてラトビアに留学していました。英語力は喋れるフリができる程度ですが、ラトビアでは語学だけでない、多くのことを学ぶことができて、色々あったけど留学ができて良かったなと思えました。こうした経験をできるだけ多くの人に、もっと躊躇いや不安が少ない状態で渡航して留学生活を楽しんでもらえるようにと思い、すきやきとポトフと共にサイトの作成に至りました。
            個人的なアドバイスとしては、海外で人気の日本アニメ作品はある程度観てから向こうに行くと友達ができやすいのでオススメです！
          </p>
        </div>
      </div>

      <div class="person">
        <img src="/images/profile/renee.JPG" alt="" class="image">
        <div class="text_container">
          <h3>Chocolate</h3>
          <p>
            Hi, I am from China, I am the progrmmer of this website. I am very excited to join this project. Hope everyone enjory it.
          </p>
        </div>
      </div>
    </div>
  </div>


  <?php include($_SERVER['DOCUMENT_ROOT'] . '/php/footer.php') ?>
</body>

</html>