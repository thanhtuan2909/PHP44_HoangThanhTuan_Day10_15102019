<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 2</title>
    <style type="text/css">
        .style-span {
            display: block;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="displaywithhtml">
        <h1>Display with HTML</h1>
        <span class="style-span">Today I \'ll learn PHP - "Variable"</span>
        <span class="style-span">This is a bad command : del c:\*.*</span>
    </div>
    <div class="displaywithjs">
        <h1>Display with JS</h1>
        <button id="btn" onclick="return displaycontent();">Show nội dung</button>
        <p id="result"></p>
    </div>
    <script type="text/javascript">
        function displaycontent() {
            $result = "<b>Today I \\'ll learn PHP - \"Variable\"</b>" + "<br>";
            $result += "<b>This is a bad command : del c:\\*.*</b>"
            document.getElementById('result').innerHTML = $result;
        }
    </script>

    <div class="displaywithphp">
        <h1>Display with PHP</h1>
        <?php
            $str1 = '<b>Today I \'ll learn PHP - \"Variable\"</b>' . '<br>';
            $str2 = '<b>This is a bad command : del c:\*.*</b>';

            echo $str1 . $str2;
        ?>
    </div>
</body>
</html>
