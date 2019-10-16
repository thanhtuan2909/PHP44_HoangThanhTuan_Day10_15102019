<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bài 5</title>
</head>
<body>
<div class="container">
    <form action="" method="post" class="style-form" onsubmit="return viewresult();">
        <?php
            $name = "Hoàng Thanh Tuấn";
            $mail = "tuandhv96@gmail.com";
            $phone = "0364081626";
            $ms = "This is a message";
        ?>
        <div class="row form-group">
            <div class="col-md-4 col-12">
                <lable>Name *</lable>
                <input type="text" name="name" id="name" value="<?php echo $name ?>" class="form-control">
            </div>
            <div class="col-md-4 col-12">
                <lable>Email *</lable>
                <input type="email" name="mail" id="mail" value="<?php echo $mail ?>" class="form-control">
            </div>
            <div class="col-md-4 col-12">
                <lable>Phone *</lable>
                <input type="text" name="phone" id="phone" value="<?php echo $phone ?>" class="form-control">
            </div>
        </div>
        <div class="mss form-group">
            <lable>Massage *</lable>
            <textarea name="ms" id="ms" cols="30" rows="10" class="form-control"><?php echo $ms ?></textarea>
        </div>
        <div class="sb text-center">
            <input type="submit" value="Send Message" class="btn btn-warning">
        </div>
        * These fields are required
        <p id="result"></p>
    </form>
</div>


<!--File JS-->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
</body>
</html>
