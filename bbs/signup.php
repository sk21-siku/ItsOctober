<?php
include('include/header.php');
?>


<div class="login">
    <h2>Register</h2>
    <form>
        <div class="form-group">
            <label>Your Name</label>
            <input class="form-control" type="text">
            <i class="ti-user"></i>
        </div>
        <div class="form-group">
            <label>Your Last Name</label>
            <input class="form-control" type="text">
            <i class="ti-user"></i>
        </div>
        <div class="form-group">
            <label>Your Email</label>
            <input class="form-control" type="email">
            <i class="icon_mail_alt"></i>
        </div>
        <div class="form-group">
            <label>Your password</label>
            <input class="form-control" type="password" id="password1">
            <i class="icon_lock_alt"></i>
        </div>
        <div class="form-group">
            <label>Confirm password</label>
            <input class="form-control" type="password" id="password2">
            <i class="icon_lock_alt"></i>
        </div>
        <div id="pass-info" class=""></div>
        <a href="#0" class="btn_1 ">Register Now!</a>
        <div class="text-center add_top_10">Already have an acccount? <strong><a href="signin.php">Sign In</a></strong>
        </div>
    </form>
</div>

<?php
include('include/footer.php');
?>
