<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1 style="margin:0; padding: 0; color: red;">Tim kiem thong tin</h1>
    </div>
    <form action="" method="GET" target="frameA">
        <input type="hidden" name="view" value="1">
        <input type="hidden" name="timkiemnv" value="1">
        <div>
            <div style="width: 50px;">
                <input type="radio" name="C1" id="" value = "1">
            </div>
            <label style="width: 100px;">IDNV</label>
            <div style="width: 50px;">
                <input type="radio" name="C1" id="" value = "2">
            </div>
            <label style="width: 100px;">Tên NV</label>
            <div style="width: 50px;">
                <input type="radio" name="C1" id="" value = "3">
            </div>
            <label style="width: 100px;">IDPB</label>
            <div style="width: 50px;">
                <input type="radio" name="C1" id="" value = "4">
            </div>
            <label style="width: 100px;">Địa chỉ</label>
        </div>
        <div>
            <label style="width: 150px;">Nhap thong tin:</label>
            <div style="width: 200px;">
                <input type="text" name="S1">
            </div>
            <input type="submit" value="Send">
        </div>
    </form>
    <iframe name="frameA" src="" frameborder="0" height="500px" width="100%"></iframe>
</body>
</html>