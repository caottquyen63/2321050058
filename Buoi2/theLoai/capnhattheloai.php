<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thể loại</title>
    <style>
        p{
            font-weight: bold;
            margin: 5px 0;
        }
        /* form{

        } */
    </style>
</head>
<body>
    <?php
        include "connect.php";
        $id = $_GET['id'];
        $sql = "select * from the_loai where id = '$id'";
        $result = mysqli_query($conn,$sql);
        $theLoai = mysqli_fetch_assoc($result);
    ?>
    <div>
        <h1> Cập nhật thể loại</h1>
        <div class="container">
            <form action="index.php?page_layout=capnhattheloai&id=<?php echo $id ?>" method="post">
                <div class="box">
                    <p>Tên thể loại</p>
                    <input type="text" name="ten-the-loai" placeholder="tên thể loại" value="<?php echo $theLoai['ten_the_loai'] ?>">
                </div>
                <div class = "box">
                    <input type="submit" value="Cập nhật>
                </div>
            </form>
        </div>
    </div>
    <?php
        if (
            !empty($_POST['ten-the-loai'])
        ) {
            $tenTheLoai= $_POST['ten-the-loai'];

            $sql = "UPDATE `the_loai` SET `ten_the_loai`='$tenTheLoai' WHERE `id`='$id'";
            //echo $sql;
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=theloai');
        }
        // } else {
        //     echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
        // }
    ?>
</body>
</html>