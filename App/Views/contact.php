<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Faith-based Development Initiative</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?= asset('css/bootstrap.css') ?>" rel='stylesheet' type='text/css'/>
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <script src="<?= asset('js/jquery.min.js') ?>"></script>
    <!-- Custom Theme files -->
    <link href="<?= asset('css/style.css') ?>" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
</head>
<body>
<!---->
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="/"><h1>FBDI<span> 2012</span></h1></a>
            </div>
        </div>
        <div class="top-menu">
            <span class="menu">MENU</span>
            <ul>
                <li>
                    <a href="/">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Home
                    </a>
                </li>
                <li>
                    <a href="/projects"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Projects/Activities</a>
                </li>
                <li>
                    <a href="/gallery"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Gallery</a>
                </li>
                <li class="active"><a href="/contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="welcome">
    <div class="container">
        <div class="welcome-top">
            <h3>Contact Us</h3>
            <p>For more information, please contact:</p>
            <form style="padding:3em;" action="contact" method="post" class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control"><br>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control"><br>
                <label for="tel">Phone</label>
                <input type="tel" name="tel" placeholder="Phone" class="form-control"><br>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control">
                </textarea>
                <hr>
                <button class="btn btn-lg btn-success"><i class="fa fa-paper-plane-o"></i> Submit</button>
                <br>
                <hr style="border: 1px solid black;">
            </form>
            <hr>
        </div>
        <div class="charitys" style="line-height: 2.5em;">
            <h3>Nathaniel Garang Aduot</h3>
            <a href="tel:0954900108"><i class="fa fa-phone"></i> 0954900108</a><br>
            <a href="mailto:nathanieldeaduot@gmail.com"><i class="fa fa-envelope"></i> nathanieldeaduot@gmail.com</a>
            <h3>Samuel Garang Akau</h3>
            <a href="tel:09559074078"><i class="fa fa-phone"></i> 0955907407</a><br>
            <a href="mailto:garang.samuel@gmail.co"><i class="fa fa-envelope"></i> garang.samuel@gmail.co</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="copywrite">
    <div class="container">
        <p> © 2017 Faith-based Development Initiative. All rights reserved | Design by
            <a href="https://safemoon.com/" style="color:#ff1649;">Safemoon Systems</a>
        </p>
    </div>
</div>
<!---->
</body>
</html>