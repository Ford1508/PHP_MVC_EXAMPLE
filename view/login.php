<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mydiv {
            margin: auto;
            width: 60%;
            align-items: center;
            justify-content: center;
            padding-bottom: 5px;
        }
        .mydiv2{
            display: flex;
            padding-left: 30%;
            padding-bottom: 5px;
        }
    </style>
    <script>

        function validateForm(){
            var error = document.forms["F1"]["username"].value
            var error2 = document.forms["F1"]["password"].value

            if (error == ""){
                document.getElementById("namelogin").innerHTML = "Loi username"
                return false;
            }
            else if (error2 == ""){
                document.getElementById("passlogin").innerHTML = "Loi password"
                return false;
            }
            else if (error == "" && error2 == ""){
                document.getElementById("namelogin").innerHTML = "Loi username"
                return false;
            }
        }
        function resetform(){
            document.F1.name.value = ""
            document.F1.pass.value = ""
            document.getElementById("namelogin").innerHTML = ""
            document.getElementById("passlogin").innerHTML = ""
        }
    </script>
</head>
<body style="background-color: rgb(92, 255, 173);">
    <form name="F1" action="/Nh1916/controller/admin/C_Login.php" method = 'POST' onsubmit="return validateForm()">
        <div class="mydiv">
            <div class="mydiv2">
                <h1 style="margin:0; padding: 0;">Login</h1>
            </div>
            <div>
                <div class="mydiv2">
                    <label style="width: 100px;">Username</label>
                    <div style="display: inline-block; width: 100px;">
                        <input type="text" name="username" id="">
                    </div>
                    <span style ="margin-left: 20%; color: red; font-weight: bold;" id="namelogin"></span>
                </div>
                <div class="mydiv2">
                    <label style="width: 100px;">Password</label>
                    <div style="display: inline-block; width: 100px;">
                        <input type="password" name="password" id="">
                    </div>
                    <span style ="margin-left: 20%; color: red; font-weight: bold;" id="passlogin"></span>
                </div>
            </div>
            <div class="mydiv2" style="margin-left: 80px;">
                <input type="submit" value="OK" id = "submit">
                <input type="button" value="reset" onclick="resetform()">
            </div>
            <div class="mydiv2" style="margin-top: 50px;">
                <a href="t3.html"><input type="button" value="Back to home page"></a>
            </div>
        </div>
    </form>
    <?php 
    ?>
</body>
</html>