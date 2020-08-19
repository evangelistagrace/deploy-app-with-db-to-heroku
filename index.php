<?php require 'login.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deploy to Heroku with Database</title>

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    <div class="container">
        <div id="login_box" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot
                            password?</a></div>
                </div>

                <div style="padding-top:30px" class="panel-body">

                    <div id="login_alert">
                        <div style="display:none" class="alert alert-danger"></div>
                    </div>

                    <form id="login_form" class="form-horizontal" role="form" method="POST" action="login.php">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login_email" type="text" class="form-control" name="login_email" value=""
                                placeholder="username or email">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login_password" type="password" class="form-control" name="login_password"
                                placeholder="password">
                        </div>

                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login_remember" type="checkbox" name="login_remember" value="1">Remember me
                                </label>
                            </div>
                        </div>

                        <div class="input-group" style="margin-top:10px; margin-bottom: 25px">
                            <!-- Button -->

                            <button class="col-sm-12 controls btn btn-success" id="btn_login" name="btn_login" class="">Login</button>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                    Don't have an account?
                                    <a href="#" onClick="$('#login_box').hide(); $('#signup_box').show()">
                                        Sign up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div id="signup_box" style="display:none; margin-top:50px"
            class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#"
                            onclick="$('#signup_box').hide(); $('#login_box').show()">Sign In</a></div>
                </div>
                <div class="panel-body">
                    <form id="signup_form" class="form-horizontal" role="form" method="POST" action="login.php">
                        <div id="signup_alert">
                            <div style="display:none" class="alert alert-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="register_email" name="register_email"
                                    placeholder="Email Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="register_first_name"
                                    name="register_first_name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="register_last_name"
                                    name="register_last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="register_password"
                                    name="register_password" placeholder="Password">
                            </div>
                        </div>

                        <div class="input-group">
                            <!-- Button -->
                            <button class="btn btn-info" id="btn_register" name="btn_register">Sign up</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="jquery.min.js"></script>
</body>

</html>