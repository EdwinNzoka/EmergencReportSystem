<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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

  .container{
    width: 2000px;
    height: 1000px;
    background: #8c8c8c;
    color: #ffffff;
    border-radius: 10px;
    padding: 30px 40px;
  }

  .container h2{
    font-size: 36px;
    text-align: left;
  }

  .container table{
    font-size: 20px;
    text-align: left;
    padding: 20px 45px 20px 20px;
  }

  .container th{
    font-size: 20px;
    text-align: left;
    padding: 10px 70px 20px 60px;
  }

  .container td{
    font-size: 20px;
    text-align: left;
    padding: 10px 70px 20px 60px;
  }

  </style>
</head>
<body>
  <div class="container my-5">
    <h2>List of Users</h2>
    <br>
      <a class="btn btn-primary" href="add_user.html" role="button">New User</a>
      <br><br>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Location</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "emergencysystem";

          $conn = new mysqli($servername, $username, $password, $database);

          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM users";
          $result = $conn->query($sql);

          while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>$row[user_name]</td>
              <td>$row[user_phonenumber]</td>
              <td>$row[user_location]</td>
              <td>
                <a class='btn btn-primary btn-sm' href='name=$row[user_name]'>Delete</a>
              </td>
            </tr>

            ";
          }

          ?>

        </tbody>
      </table>
    </div>
</body>
</html>
