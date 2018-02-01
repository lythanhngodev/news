<!DOCTYPE html>
<html>
<head>
<title>Lỗi trang</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" type="image/png" href="http://localhost/congngheviet/images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="http://localhost/congngheviet/images/favicon-16x16.png" sizes="16x16">
    <style>
    html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    background-color: #000;
    }

    .bg-img {
    position: absolute;
    width: 100%;
    height: 100%;
    background: url(https://media.giphy.com/media/bjfv14wZU7PiM/giphy.gif) no-repeat center center fixed;
    background-size: cover;
    background-color: #000;
    opacity: .5;
    filter: alpha(opacity=50);
    }

    .content {
    font-family: 'Avenir-Next',Avenir,Helvetica,sans-serif;
    color: #fff;
    background-color: none;
    z-index: 2;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    }

    .container{
      width:970px;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    h1 {
    font-size: 160px;
    margin-bottom: 0;
    margin-top: 0;
    }

    h2 {
    margin-top: 0;
    max-width: 700px;
    font-size: 30px;
    width: 90%;
    }

    p {
    text-align: left;
    padding-bottom: 32px;
    }

    .btn {
    display: inline-block;
    border: 1px solid #aaa;
    border-radius: 40px;
    padding: 15px 30px;
    margin-right: 15px;
    margin-bottom: 10px;
    }
    .btn > a{
      text-decoration: none;
      color: #fff;
    }
    .btn:hover {
    color: #e2e2e2;
    background: rgba(255, 255, 255, 0.1);
    }

    @media only screen and (max-width: 480px) {
        .btn {
          background-color: white;
          color: #444444;
          width: 100%;
        }

        h1 {
          font-size: 120px;
        }
        .btn > a{
          text-decoration: none;
        }
    }
    </style>
</head>
<body>
<div class='container'>
    <div class='row content'>
      <div class='col-lg-12'></div>
      <div class='col-lg-12'>
        <h1>404</h1>
        <h2>Rất tiếc, trang bạn đang yêu cầu không tồn tại :(</h2>
        <p>
          Bạn có thể quay lại trang chủ.
          <br>
            Nếu bạn nghĩ đây là một lỗ hỏng, hãy báo cáo với chúng tôi.
          </br>
        </p>
        <span class='btn'><a href="./">VỀ TRANG CHỦ</a></span>
        <span class='btn'><a href="#">BÁO LỖI</a></span>
      </div>
    </div>
  </div>
  <div class='bg-img'></div>
</body>
</html>
