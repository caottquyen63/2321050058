<?php
    include "connect.php";
    if (
        !empty($_POST['ten-phim']) &&
        !empty($_POST['ten-dao-dien']) &&
        !empty($_POST['nam-phat-hanh']) &&
        !empty($_POST['poster']) &&
        !empty($_POST['quoc-gia']) &&
        !empty($_POST['so-tap']) &&
        !empty($_POST['trailer']) &&
        !empty($_POST['mo-ta'])
    ) {
        $tenPhim = $_POST['ten-phim'];
        $tenDaoDien = $_POST['ten-dao-dien'];
        $namPhatHanh = $_POST['nam-phat-hanh'];
        $poster = $_POST['poster'];
        $quocGia = $_POST['quoc-gia'];
        $soTap = $_POST['so-tap'];
        $trailer = $_POST['trailer'];
        $moTa = $_POST['mo-ta'];

        $sql = "INSERT INTO `phim`(`ten_phim`, `dao_dien_id`, `nam_phat_hanh`, `poster`, `quoc_gia_id`, `so_tap`, `trailer`, `mo_ta`) 
                VALUES ('$tenPhim','$tenDaoDien','$namPhatHanh','$poster','$quocGia','$soTap','$trailer','$moTa')";
         
        //echo $sql;
        mysqli_query($conn, $sql);
        header('location: index.php?page_layout=phim');
    } else {
        echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
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
        <h1>Thêm phim</h1>
        <div class="container">
            <form action="index.php?page_layout=themphim" method="post">
                <div class="box">
                    <p>Tên phim</p>
                    <input type="text" name="ten-phim" placeholder="tên phim">
                </div>
                <div>
                    <p>Tên đạo diễn</p>
                    <select name="ten-dao-dien">
                        <?php
                        // Lấy tất cả người dùng có vai trò đạo diễn
                        $sql = "SELECT id, ho_ten FROM nguoi_dung WHERE vai_tro_id = 2";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['id'] . '">' . $row['ho_ten'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="box">
                    <p>Năm phát hành</p>
                    <input type="text" name="nam-phat-hanh" placeholder="năm phát hành">
                </div>
                <div class="box">
                    <p>poster</p>
                    <input type="text" name="poster" placeholder="poster">
                </div>
                <div>
                    <p>Quốc gia</p>
                    <select name="quoc-gia">
                        <?php
                        // Lấy danh sách tất cả quốc gia
                        $sql = "SELECT id, ten_quoc_gia FROM quoc_gia";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['id'] . '">' . $row['ten_quoc_gia'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="box">
                    <p>Số tập</p>
                    <input type="number" name="so-tap" placeholder="số tập">
                </div>
                <div class="box">
                    <p>Trailer</p>
                    <input type="text" name="trailer" placeholder="trailer">
                </div>
                <div class="box">
                    <p>Mô tả</p>
                    <input type="text" name="mo-ta" placeholder="mô tả">
                </div>
                <div class="box">
                    <input type="submit" value="Thêm mới">
                </div>
            </form>
        </div>
    </div>
</body>
</html>