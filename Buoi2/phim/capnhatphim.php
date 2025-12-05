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

        $sql = "UPDATE `phim` SET `ten_phim`='$tenPhim',`dao_dien_id`='$tenDaoDien',`nam_phat_hanh`='$namPhatHanh',`poster`='$poster',`quoc_gia_id`='$quocGia',`so_tap`='$soTap',`trailer`='$trailer',`mo_ta`='$moTa' WHERE `id` = '$id'";
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
    <title>Cập nhật phim</title>
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
        $sql = "select * from phim where id = '$id'";
        $result = mysqli_query($conn,$sql);
        $phim = mysqli_fetch_assoc($result);
    ?>
    <div>
        <h1> Cập nhật phim</h1>
        <div class="container">
            <form action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="post">
                <div class="box">
                    <p>Tên phim</p>
                    <input type="text" name="ten-phim" placeholder="tên phim" value="<?php echo $phim['ten_phim'] ?>">
                </div>
                <div>
                    <p>Tên đạo diễn</p>
                    <select name="ten-dao-dien">
                        <?php
                        // Lấy tất cả người dùng có vai trò đạo diễn
                        $sql = "SELECT id, ho_ten FROM nguoi_dung WHERE vai_tro_id = 2";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $selected = ($row['id'] == $phim['dao_dien_id']) ? "selected" : "";
                            echo '<option value="' . $row['id'] . '" ' . $selected . '>' . $row['ho_ten'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="box">
                    <p>Năm phát hành</p>
                    <input type="text" name="nam-phat-hanh" placeholder="năm phát hành" value="<?php echo $phim['nam_phat_hanh'] ?>">
                </div>
                <div class="box">
                    <p>poster</p>
                    <input type="text" name="poster" placeholder="poster" value="<?php echo $phim['poster'] ?>">
                </div>
                <div>
                    <p>Quốc gia</p>
                    <select name="quoc-gia">
                        <?php
                        // Lấy danh sách tất cả quốc gia
                        $sql = "SELECT id, ten_quoc_gia FROM quoc_gia";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $selected = ($row['id'] == $phim['quoc_gia_id']) ? "selected" : "";
                            echo '<option value="' . $row['id'] . '" ' . $selected . '>' . $row['ten_quoc_gia'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="box">
                    <p>Số tập</p>
                    <input type="number" name="so-tap" placeholder="số tập" value="<?php echo $phim['so_tap'] ?>">
                </div>
                <div class="box">
                    <p>Trailer</p>
                    <input type="text" name="trailer" placeholder="trailer" value="<?php echo $phim['trailer'] ?>">
                </div>
                <div class="box">
                    <p>Mô tả</p>
                    <input type="text" name="mo-ta" placeholder="mô tả" value="<?php echo $phim['mo_ta'] ?>">
                </div>
                <div class="box">
                    <input type="submit" value="Thêm mới">
                </div>
            </form>
        </div>
    </div>
    <?php
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

        $sql = "UPDATE `phim` SET `ten_phim`='$tenPhim',`dao_dien_id`='$tenDaoDien',`nam_phat_hanh`='$namPhatHanh',`poster`='$poster',`quoc_gia_id`='$quocGia',`so_tap`='$soTap',`trailer`='$trailer',`mo_ta`='$moTa' WHERE `id` = '$id'";
            //echo $sql;
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=phim');
        }
        // } else {
        //     echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
        // }
    ?>
</body>
</html>