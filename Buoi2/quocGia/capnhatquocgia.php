<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật quốc gia</title>
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
        $sql = "select * from quoc_gia where id = '$id'";
        $result = mysqli_query($conn,$sql);
        $quocGia = mysqli_fetch_assoc($result);
    ?>
    <div>
        <h1> Cập nhật quốc gia</h1>
        <div class="container">
            <form action="index.php?page_layout=capnhatquocgia&id=<?php echo $id ?>" method="post">
                <div class="box">
                    <p>Tên quốc gia</p>
                    <input type="text" name="ten-quoc-gia" placeholder="tên quốc gia" value="<?php echo $quocGia['ten_quoc_gia'] ?>">
                </div>
                <div class = "box">
                    <input type="submit" value="Cap nhat">
                </div>
            </form>
        </div>
    </div>
    <?php
        if (
            !empty($_POST['ten-quoc-gia'])
        ) {
            $tenQuocGia = $_POST['ten-quoc-gia'];

            $sql = "UPDATE `quoc_gia` SET `ten_quoc_gia`='$tenQuocGia' WHERE `id`='$id'";
            //echo $sql;
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=quocgia');
        }
        // } else {
        //     echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
        // }
    ?>
</body>
</html>