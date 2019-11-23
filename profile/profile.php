<?php
    session_start();
    echo $_SESSION['username'];
?>

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
    <script src="js/profile.js"></script>
    <link rel="stylesheet" href="style/animate.css">
    <link rel="stylesheet" href="style/index.css">
    <title>PicDrive</title>
</head>
<body style="background-color:#FCD0CF;" class="animated fadeIn slower">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <a href="#" class="navbar-brand">
            Mr. Gurucharan
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    Logout <i class="fa fa-sign-out" style="front-size:20px;"></i>
                </a>
            </li>
        </ul>
    </nav>
    <br />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-5 border">
                <div class="d-flex justify-content-center align-items-center flex-column w-100 bg-white shadow-lg rounded-lg" style="height:250px;">
                    <i class="fa fa-folder-open" style="font-size:100px;"></i>
                    <h4>Upload Files</h4>
                    <span>Free Space : 10MB</span>
                    <div class="progress w-50 my-2 upload-icon" style="height:5px">
                        <div class="progress-bar progress-bar-animated progress-bar-striped w-50"></div>
                    </div>
                    <div>
                        <span>50%</span>
                        <i class="fa fa-pause-circle"></i>
                        <i class="fa fa-times-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5 border"></div>
            <div class="col-md-3 p-5 border"></div>
        </div>
    </div>
</body>
</html>