<?php require 'includes/autheader.php'?>
            <div class="col-lg-6">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate mb-4">
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <div class="form-group">
                      <label for="login-password" class="label-material">User Type</label>
                      <select name="type"> 
                        <option value="-1">Select user type</option>
                        <option value="Admin">Admin</option>
                        <option value="Vine">Fruitful Vine</option>
                        <option value="Fruit">Fruit of</option>
                        <option value="Divinity">Fruit of Divinity</option>
                        <option value="Dominion">Fruit of Dominion</option>
                        <option value="Greatness">Fruit of Greatness</option>
                        <option value="Integrity">Fruit of Integrity</option>
                        <option value="Life">Fruit of Life</option>
                      </select>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                  </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="signup.php" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by Nanajay</p>
  
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>