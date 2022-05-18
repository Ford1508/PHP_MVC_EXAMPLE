<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <frameset rows = "80, * ,80">
        <frame name = "t1" src="/Nh1916/view/t1.php">
        <frameset cols = "120, *, 120">
            <frame name = "t2" target = "t3" src="/Nh1916/view/t2.php">
            <frame name = "t3" target="_self" src="/Nh1916/view/t3.php">
            <frame name = "t4" src="/Nh1916/view/t4.php">
        </frameset>
        <frame name = "t5" src="/Nh1916/view/t5.php">
        <noframes>
            <body>The browser you are working does not
                support frames.</body>
        </noframes>
    </frameset>
</html>