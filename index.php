<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/ajax_random_password.js"></script>
    <script src="js/ajax_user_check.js"></script>
    <script src="js/ajax_signup.js"></script>
    <script src="js/check_activation_key.js"></script>
    <script src="js/ajax_login.js"></script>
    <link rel="stylesheet" href="style/animate.css">
    <link rel="stylesheet" href="style/index.css">
    <title>PicDrive</title>
</head>
<body style="background-color:#FCD0CF;" class="animated fadeIn slower">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0">
                <img src="images/main_pic.jpg" alt="mainPic" class="shadow-lg w-100" />
            </div>
            <div class="col-md-4 py-4 pl-3">
            <h3 class="ml-3 mb-2">SIGN UP</h3>
                <form id="signup-form">
                    <input type="text" name="fullname" id="fullname" placeholder="ENTER YOUR NAME" required="required" />
                    <div id="email-box">
                        <input type="email" name="email" id="email" required="required" placeholder="EMAIL"  />
                        <i class="fa fa-circle-o-notch fa-spin d-none" id="load-icon" style="font-size:18px"></i>
                    </div>
                    <div id="pass-box">
                        <input type="password" name="password" id="password" required="required" placeholder="PASSWORD" />
                        <i class="fa fa-eye eye-icon" style="font-size:20px;color:#ccc;"></i>
                    </div>
                    <button class="btn float-left p-2">CLICK GENERATE TO IMPROVE SECURITY</button>
                    <button class="btn float-right generate-btn">GENERATE</button>
                    <button class="btn submit-btn m-3" disabled="disabled">REGISTER NOW</button>
                    <div class="signup-alert">

                    </div>
                </form>
                <div class="activation-box px-2 d-none">
                    <span>Please check your email id to get <b>Activation Code</b></span>
                    <input type="text" name="code" id="code" placeholder="Activation Code" class="my-3" /><br />
                    <button class="btn btn-dark activate-btn">Activate Now</button>
                </div>
            </div>
            <div class="col-md-4 py-4 px-5">
            <h3 class="ml-3 mb-2">LOGIN</h3>
                <form id="login-form">
                    <div id="login-email-box">
                        <input type="email" name="email" id="login-email" required="required" placeholder="EMAIL"  />
                        <i class="fa fa-circle-o-notch fa-spin d-none" id="email-load" style="font-size:18px"></i>
                    </div>
                    <div id="login-pass-box">
                        <input type="password" name="password" id="login-password" required="required" placeholder="PASSWORD" />
                        <i class="fa fa-eye show-icon" style="font-size:20px;color:#ccc;"></i>
                    </div>
                    <button class="btn login-submit-btn m-3 float-right" >LOGIN</button><br />
                    <div id="login-notice">

                    </div>
                </form>
                <div class="login-activation d-none">
                    <span>Please check your email id to get <b>Activation Code</b></span>
                    <input type="text" name="code" id="login-code" placeholder="Activation Code" class="my-3" /><br />
                    <button class="btn btn-dark login-activate-btn">Activate Now</button>
                </div>  
            </div>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>
</html>