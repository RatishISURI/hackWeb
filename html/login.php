<?php include("header.php")?>

<div id="login_content">
    <div id="login_img">
        <img src="imgs/login.jpg" alt="">
    </div>
    <div id="login_form">
        <h3>Admin login</h3>
        <form>
            <div class="form-group">
              <label for="InputEmail">Email address</label>
              <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">Do not use your account outside the hoospital.</small>
            </div>
            <div class="form-group">
              <label for="InputPassword">Password</label>
              <input type="password" class="form-control" id="InputPassword">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
    </div>
</div>







<!--  -->

<?php include("footer.php")?>
