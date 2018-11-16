<?php

  // Start a Session
  session_start();
  $destination_page = "pianoproject.html";
  $wrongLogin = 0;

  // print_r("log=". $_GET['logButton']);

  // logout and destroy session
  if ($_GET['logButton'] == "Logout" )
  {
   $logout = 1;
// {
//   echo "<script type='text/javascript'>
//         $(window).on('load',function(){
//           $('#wlModal').modal('show');
//         });
//         </script>";
  
    
    // echo "<script>alert('Thanks for the good times you have been logged out.')</script>";
    session_unset();
    session_destroy();


  }

  // is the user has filled out a reservation form but not signed in
  if (isset($_SESSION['registration_ready']))
  {
    $destination_page = "pianoproject.html";
  }

  // check and set active login
  if (isset($_POST['signinEmail']) && isset($_POST['signinPassword']))
  {
    // Choose which login file to use (local/online)
    require_once 'login.php'; // local database connection

    // establish database connection
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

    $email = $_POST['signinEmail'];
    $password = $_POST['signinPassword'];

    $salt1 ="asdfscv77";
    $salt2 = "asrwear333%%";
    $token = hash('ripemd128', $salt1 . $password . $salt2);

    $query = "SELECT * FROM user WHERE email='$email' && password='$password'";
    $result = $conn->query($query);

    if (!$result) die ("THIS SPOT Database access failed: " . $conn->error);
    elseif ($result->num_rows)
    {
      $col = $result->fetch_array(MYSQLI_NUM);
      // $result->close();

      if ($password == $col[5])
      {
        $_SESSION['logged_in'] = 1;
        $_SESSION['user_id'] = $col[0];
        $_SESSION['email'] = $email;
        $_SESSION['first_name'] = $col[1];
        $_SESSION['user_privledge'] = $col[4];

        header("Location: $destination_page");
      }
      else
      {
        $wrongLogin = 1;
      }
    }
    else
    {
      $wrongLogin = 1;
    }
    
  }

echo <<<_END
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin into The Piano Project</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link href="../css/tinyhouse.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="container">
      <form class="form-signin" method="POST" action="signin.php">
        <img class="mb-4" src="assets/pianoproject.png" alt="Piano" width="295">
        <!-- <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1> -->
        <label for="signinEmail" class="sr-only">Email address</label>
        <input type="email" id="signinEmail" name="signinEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="signinPassword" class="sr-only">Password</label>
        <input type="password" id="signinPassword" name="signinPassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg bg-th-pri btn-block text-light" type="submit">Log in</button>
      </form>
       
      </div>

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
_END;

if ($wrongLogin)
{
  echo "<script type='text/javascript'>
        $(window).on('load',function(){
          $('#wlModal').modal('show');
        });
        </script>";
  echo <<<_END
    <div class="modal fade" tabindex="-1" role="dialog" id="wlModal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login Error</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>We're sorry but your email and/or password were incorrect Please try again.</p>
            <!-- <p>EMAIL: ($email) PASSSWORD: ($password) TOKEN: ($token)  ***There were $rows rows***. -->
          </div>
          <div class="modal-footer">
            <!-- <a href="index.php" class="btn btn-secondary">Home</a> -->
            <a href="signin.php" class="btn btn-primary">Login Again</a>
          </div>
        </div>
      </div>
    </div>
_END;
}

if ($logout)
{
  echo "<script type='text/javascript'>
          $(window).on('load',function(){
            $('#logoutModal').modal('show');
          });
        </script>";
}

echo <<<_END
<div class="modal fade" tabindex="-1" role="dialog" id="logoutModal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">TinyHouse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Thanks for the good times you have been logged out</p>
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-secondary">Home</a>
        <a href="signin.php" class="btn btn-primary">Login Again</a>
      </div>
    </div>
  </div>
</div>
_END;

echo "
  </body>
</html>
";

?>