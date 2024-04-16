<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-AU-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: cursive;
  }

  body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('pics/login/BG1.jpg') no-repeat;
    background-size: cover;
    background-position: center;
  }

  .wrapper{
    width: 420px;
    background: #8c8c8c;
    color: #ffffff;
    border-radius: 10px;
    padding: 30px 40px;
  }

  .wrapper h1{
    font-size: 36px;
    text-align: center;
  }

  .wrapper .input-box{
    width: 100%;
    height: 50%;
    margin: 30px 0;
  }

  .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #ffffff;
    padding: 20px 45px 20px 20px;
  }

  .input-box input::placeholder{
    color: #ffffff;
  }

  .input-box i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
  }

  .wrapper .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
  }

  .remember-forgot label input{
    accent-color: #ffffff;
    margin-right: 3px;
  }

  .remember-forgot a{
    color: #ffffff;
    text-decoration: none;
  }

  .remember-forgot a:hover{
    text-decoration: underline;
  }

  .wrapper .btn{
  width: 100%;
  height: 45px;
  background: #ffffff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
  }

  </style>
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <form action="login.php" method="post">
        <h1>Login</h1>
      <div class="input-box">
      <input type="text" placeholder="username" required>
    </div>
    <div class="input-box">
    <input type="password" placeholder="password" required>
  </div>
  <div class="remember-forgot">
  <label><input type="checkbox"> Remember Me </label>
</div>
<button type="submit" class="btn">Login</button><br><br>
</div>
    </form>
</body>
</html>
