<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Document</title>
  </head>
  <body>
    <?php
    if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $user = $_POST['username'];
      $pass = $_POST['password'];
    
      if($user == "" || $pass == "" || $name == "" || $email == "") {
        echo "All fields should be filled. Either one or many fields are empty.";
        echo "<br/>";
        echo "<a href='register.php'>Go back</a>";
      } else {
        mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
          or die("Could not execute the insert query.");
          
        echo "Registration successfully";
        echo "<br/>";
        echo "<a href='login.php'>Login</a>";
      }
    }
    ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
              <form>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus />
                  <label for="floatingInputUsername">Stambuk</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus />
                  <label for="floatingInputUsername">Username</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com" />
                  <label for="floatingInputEmail">Email address</label>
                </div>

                <hr />

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password" />
                  <label for="floatingPasswordConfirm">Confirm Password</label>
                </div>

                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                </div>

                <a class="d-block text-center mt-2 small" href="login.html">Have an account? Sign In</a>

                <hr class="my-4" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
