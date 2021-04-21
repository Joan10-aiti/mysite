
  <?php require 'includes/autheader.php' ?>
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="text-left form-validate" method="post">
                    <div class="form-group-material">
                      <input id="register-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="register-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="register-email" class="label-material">Email Address</label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">Password</label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-password" type="password" name="confirm" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">confirm password</label>
                    </div>
                  
                    <div class="form-group text-center">
                      <input id="signup" type="submit" name="register" value="Sign up" class="btn btn-primary">
                    </div>
                  </form><small>Already have an account? </small><a href="index.php" class="signup">Login</a>
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