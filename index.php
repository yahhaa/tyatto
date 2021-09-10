<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
    <style type="text/css">
      *{margin: 0;padding: 0;list-style: none;}
      .wrap{
        width: 600px;
        margin: 0 auto;
        padding: 20px;
        background: #f1f1f2;
        min-height: 100vh;
      }
      li{
        position: relative;
        padding: 10px 20px;
        margin: 0 10px 10px 10px;
        background-color: #ffffff;
        border-radius: 5px;

      }
      span{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 10px;
        font-size: 12px;
        color: #ccc
      }
      form{
        position: fixed;
        top:10%;
        left: 5vw;
      }

      H2 { text-align: center;
          font-size: 300%;
          color:  #ffd666;
        text-shadow:1px 0 5px black;}
    </style>
  </head>
  <body>
    <h2>やっはーチャット</h2>
    <div class="wrap">
      <ul>
        <li>Hello world <span>2021/09/09</span></li>
        <li>Hello world <span>2021/09/09</span></li>
      </ul>
    </div>

    <form action="index.php" method="post">
      <h1>メッセージを入力</h1>
      <input type="text" name="message" >
      <button type="submit">送信</button>
    </form>
  </body>
</html>
<?php
 　if($SERVER["REQUST_METHOD"] === "POST"){
   echo $_POST['message'];
 }
 ?>
