<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="icon" href="/images/icon.ico">
        <title>お問い合わせ | BoundFore</title>
        <link rel="stylesheet" href="/Style/index.css">
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/header.php') ?>

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
        </div>


        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php') ?>
    </body>
</html>
