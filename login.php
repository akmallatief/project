<?php
    $db = mysqli_connect('localhost','root','12345.','otentikasi');

    if(isset($_POST['login'])){
      $userStambuk = $_POST['stambuk'];
      $userPassword = $_POST['password'];

      $result = mysqli_query($db, "SELECT * FROM account  WHERE stambuk = '$userStambuk'");

      //cek stambuk
      if( mysqli_num_rows($result) == 1){ 
        //cek password
        $row = mysqli_fetch_assoc($result);
       if( password_verify($userPassword, $row['password'])){
         header("Location: index.php");
         exit;
       }
      }
      // $eror = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!--css-->
    <link rel="stylesheet" href="styleLogin.css" />
    <title>Document</title>
  </head>
  <body>
    
    <div class="container-fluid ps-md-0">
      <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
          <div class="login d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <h3 class="login-heading mb-4">Login</h3>
                  <?php //if(isset($eror)) : ?>
                      <!-- <p>stambuk atau password anda salah <p> -->
                    <?php // endif; ?>


                  <!-- Sign In Form -->
                  <form method="post" action="">
                    <div class="form-floating mb-3">
                      <input type="text" name="stambuk" class="form-control" id="floatingInput" placeholder="Stambuk" />
                      <label for="floatingInput">Stambuk</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" />
                      <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck" />
                      <label class="form-check-label" for="rememberPasswordCheck"> Remember password </label>
                    </div>

                    <div class="d-grid">
                      <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="login">Login</button>
                      <div class="text-center">
                        <a class="small" href="#">Forgot password?</a>
                        <a class="small" href="singup.php">/alerdy have you signed up?</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>