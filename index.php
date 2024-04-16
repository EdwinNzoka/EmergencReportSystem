<!DOCTYPE html>
<html>
<head>
  <style>
  *{
    margin: 0;
    padding: 0;
  }

  body {
    font-size: 10px;
    line-height: 22px;
    line-height: normal;
    background: url('pics/login/BG1.jpg');
    background-size: cover;
    background-position: center;
  }

  .navbar{
    width:  100%;
    height: 15vh;
    margin-top: 10px;
    display: flex;
    align-items: center;
  }

  nav{
    flex: 1;
    padding-left: 60px;
    text-align: right;
    margin-right: 20px;
  }

  nav ul li{
    display: inline-block;
    list-style: none;
    margin: 0px 20px;
  }

  nav ul li a{
    text-decoration: none;
    color: #ffffff;
    background-color: #000000;
    padding: 5px 10px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 12px;
    font-style: oblique;
    font-family: cursive;
    border-style: solid;
    border-color: #000000;
  }

  nav ul li a:hover{
    color: #000000;
    background: #296BFF;
    box-shadow: 0 0 10px #296BFF, 0 0 40px #296BFF, 0 0 80px #296BFF;
    transition-delay: 0.5s;
  }

  .content{
    margin-top: 7%;
    margin-left: 30%;
    line-height: 20px;
  }

  .content h2{
    font-size: 45px;
    font-weight: 100;
    color: #5588c2;
    margin-bottom: 55px;
  }

  .content p{
    font-size: 20px;
    color: #ffffff;
  }

  .content a{
    margin-top: 6%;
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #fc0303;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 30px;
    overflow: hidden;
    transition: 0.2s;
    font-family: serif;
    border-style: solid;
    border-color: #fc0303;
  }

  .content a:hover{
    color: #000000;
    background: #fc0303;
    box-shadow: 0 0 10px #fc0303, 0 0 40px #fc0303, 0 0 80px #fc0303;
    transition-delay: 0.1s;
  }

  .feature-img{
    height: 40%;
    position: absolute;
    top: 190px;
    right: 60px;
  }

  .feature-img2{
    height: 40%;
    position: absolute;
    top: 190px;
    right: 120px;
  }

  .feature-img3{
    height: 60%;
    position: absolute;
    top: -100px;
    left: 20px;
  }

  .feature-img4{
    height: 30%;
    position: absolute;
    top: 0px;
    left: -40px;
  }

  .About{
    background-color: black;
    position: absolute;
    padding: 30px;
    margin-top: 16%;
    margin-left: -20px;
  }

  .About a{
    text-decoration: none;
    color: #fc0303;
    padding-right: 20px;
    font-size: 20px;
    border-style: solid;
    border-radius: 15px;
    border-width: thin;
  }

  .About p{
    padding: 20px;
    font-size: 15px;
    color: #ffffff;
    line-height: 30px;
  }
  </style>
  <title>EMERGENCY</title>
</head>
<body>
    <img src="Pics/Phone.png" class="feature-img4">
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="auth.php" target="_self">ADMIN</a></li>
          <li><a href="News.html" target="_self">NEWS</a></li>
          <li><a href="#About" target="_self">About</a></li>
        </ul>
      </nav>
    </div>
    <div class="content">
      <h2>For all your emergency needs</h2>
      <p>We are here to assist you get the fastest possible response to you.</p>
      <br><br><br><br>
      <a href="add_emergency.html" target="_self"=>REPORT AN EMERGENCY</a>
      </div>
    <img src="Pics/Police.png" class="feature-img">
    <img src="Pics/Doctor.png" class="feature-img2">
    <div class="About">
      <a id=About></a>
      <p>This is a virtual space and community for emergencies across the globe who are registered themselves for fastest response.<br>
        It notifies the nearest emergency centres incase of a car accident or any other kind of emergencies.<br>
    Worry less, we are just a button away.<br>
    Here are our contact info, you can reach us through:<br>
      <a href="">Facebook</a>
      <a href="">Instagram</a>
      <p>Or call/sms us via: +254010101010.</p>

  </div>
</body>
</html>
