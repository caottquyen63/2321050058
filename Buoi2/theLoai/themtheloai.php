<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thể loại</title>
    <style>
        p{
            font-weight: bold;
            margin: 5px 0;
        }
        /* h1{

        }
        .container{

        } */
        .box{
            margin: 10px;
        }
        main{
            width: 90%;
        }
    </style>
</head>
<body>
    <div>
        <h1>Thêm thể loại</h1>
        <div class="container">
            <form action="index.php?page_layout=themtheloai" method="post">
                <div class="box">
                    <p>Tên thể loại</p>
                    <input type="text" name="ten-the-loai" placeholder="tên thể loại">
                </div>
                <div class="box">
                    <input type="submit" value="Thêm mới">
                </div>
            </form>
        </div>
    </div>
    <?php
        if (
            !empty($_POST['ten-the-loai'])
        ) {
            $tenTheLoai = $_POST['ten-the-loai'];

            $sql = "INSERT INTO `the_loai`(`ten_the_loai`) VALUES ('$tenTheLoai')";
         
            //echo $sql;
            include "connect.php";
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=theloai');}
        // } else {
        //     echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
        // }
    ?>
</body>
</html>