<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="assets/bootstrap/css/login.css" type="text/css" />	
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />	
	</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Salesrecord</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" method="post" action="items/items/view">
                <input type="text" class="form-control" placeholder="username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <!--<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>-->
                </form>
            </div>
            <!--<a href="#" class="text-center new-account">Create an account </a>-->
        </div>
    </div>
</div>
</body>
</html>
