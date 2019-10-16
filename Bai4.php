<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 4</title>
</head>
<body>
    <?php
        $name = "Hoàng Thanh Tuấn";
        $age = 23;
        $birthday = "29/09/1996";
        $gender = "Nam";
        $address = "Hà Tĩnh - Việt Nam";
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Họ tên</th>
            <th>Tuổi</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
        </tr>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $age ?></td>
            <td><?php echo $birthday ?></td>
            <td><?php echo $gender ?></td>
            <td><?php echo $address ?></td>
        </tr>
    </table>
</body>
</html>
