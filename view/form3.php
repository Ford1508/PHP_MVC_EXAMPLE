<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .content {
        max-width: 80%;
        margin:auto;
    }
    .navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: rgb(255, 255, 255);
    }

    .navbar li {
        float: left;
    }

    .navbar li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar li a:hover {
        background-color: rgb(158, 158, 158);
    }

    .navbar2 {
        display: flex;
    }
    .navbar2 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 240px;
    background-color: #ffffff;
    border-style: solid;
    border-color: darkgray;
    border-radius: 4px;
    border-width: 1px;
    }

    .navbar2 li {
        border: 0.5px solid darkgray;
    }

    .navbar2 li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    }

    .navbar2 li a:hover {
    background-color: #555;
    color: white;
    }
    p a:hover {
        color:dodgerblue;
    }
    </style>
</head>
<body>
    <div class="content">
        <div>
            <h1>
                <img src="http://dut.udn.vn/portals/_default/skins/dhbk/img/front/logo-k_cntt.png" alt="">
            </h1>
        </div>
        <div class="navbar">
            <ul>
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="#gioithieu">GIỚI THIỆU</a></li>
                <li><a href="#tuyensinh">TUYỂN SINH</a></li>
                <li><a href="#daotao">ĐÀO TẠO</a></li>
                <li><a href="#nghiencuu">NGHIÊN CỨU KHOA HỌC</a></li>
                <li><a href="#hoptac">HỢP TÁC</a></li>
                <li><a href="#sinhvien">SINH VIÊN</a></li>
                <li><a href="#cuusinhvien">CỰU SINH VIÊN</a></li>
                <li><a href="#lienhe">LIÊN HỆ</a></li>
            </ul>
        </div>
        <p style="background-color: darkgrey; border-radius: 2px; padding: 10px 12px;"><a target="frame_A" style="text-decoration: none;" href="http://dut.udn.vn/Images/Slides/Slider_KhoaCNTT_KN40namCB.jpg">Trang chủ</a></p>
        <div class="navbar2">
            <ul>
                <li style="color:dodgerblue; padding: 8px 16px;">K. CÔNG NGHỆ THÔNG TIN</li>
                <li><a target="frame_A" href="thongbao.PNG">Thông báo</a></li>
                <li><a target="frame_A" href="tintuc.PNG">Tin tức hoạt động</a></li>
                <li><a target="frame_A" href="daotaoDH.PNG">Đào tạo đại học</a></li>
                <li><a target="frame_A" href="daotaoSauDH.PNG">Đào tạo sau đại học</a></li>
                <li><a target="frame_A" href="nghiencuuKH.PNG">Nghiên cứu khoa học</a></li>
                <li><a target="frame_A" href="nghiencuuKH.PNG">Biểu mẫu của Khoa</a></li>
                <li><a target="frame_A" href="nghiencuuKH.PNG">Góp ý với Khoa</a></li>
            </ul>
            <iframe name="frame_A" src="http://dut.udn.vn/Images/Slides/Slider_KhoaCNTT_KN40namCB.jpg" frameborder="0" height="500px" width="100%"></iframe>
        </div>
    </div>
</body>
</html>