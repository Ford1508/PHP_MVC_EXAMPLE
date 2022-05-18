<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function uppercase(){
            var x = document.f1.txt1.value
            document.f1.txt1.value = x.toUpperCase()
        }
    </script>
</head>
<body>
    <form name="f1" action="" method="">
        <input type="text" name="txt1" value="" onblur="uppercase()">
    </form>
    <div style="padding-top: 20px;"></div>
    <a href="t3.html"><input type="button" value="Back to home page"></a>
</body>
</html>