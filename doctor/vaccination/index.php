<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vaccination | Input Form</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Custom Login Form Styling with CSS3" />
    <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <script src="js/modernizr.custom.63321.js"></script>
    <script type="text/javascript" src="js/jquery_1.5.2.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <script type="text/javascript" src="js/vpb_script.js"></script>
    <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    <style>
        @import url(http://fonts.googleapis.com/css?family=Raleway:400,700);

        body {
            background: #7f9b4e url(img/bg5.jpg) repeat center top;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
        }

        .container>header h1,
        .container>header h2 {
            color: #fff;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>

<body>
    <div class="container">

        <header>
            <a href="../panel/index.php"><img src="img/logo.png" width="150px" height="150px" /></a>
            <table width="500" border="0">
                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="insert.php" method="post">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <!-- <input type="text" name="given_date" class="form-control"> -->
                                        <input type="date" name="given_date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mother's NIC</label>
                                        <input type="text" name="mother_nic" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Vaccine Name</label>
                                        <input type="text" name="v_name" class="form-control">
                                    </div>
                                    <!-- <div class="form-group">
                            <label>Manufacturer</label>
                            <input type="text" name="manufacturer" class="form-control">
                        </div> -->
                                    <div class="form-group">
                                        <label>Dose Number</label>
                                        <input type="text" name="dose_num" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Age given</label>
                                        <input type="text" name="age_given" class="form-control">
                                    </div>

                                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </center>
    </div>
    </table>
</body>

</html>