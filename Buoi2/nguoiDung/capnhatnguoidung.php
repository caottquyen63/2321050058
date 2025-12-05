<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật người dùng</title>
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
        $sql = "select * from nguoi_dung where id = '$id'";
        $result = mysqli_query($conn,$sql);
        $nguoiDung = mysqli_fetch_assoc($result);
    ?>
    <div>
        <h1> Cập nhật người dùng</h1>
        <div class="container">
            <form action="index.php?page_layout=capnhatnguoidung&id=<?php echo $id ?>" method="post">
                <div class="box">
                    <p>Tên đăng nhập</p>
                    <input type="text" name="ten-dang-nhap" placeholder="tên đăng nhập" value="<?php echo $nguoiDung['ten_dang_nhap'] ?>">
                </div>
                <div class="box">
                    <p>Mật khẩu</p>
                    <input type="password" name="password" placeholder="mật khẩu" value="<?php echo $nguoiDung['mat_khau'] ?>">
                </div>
                <div class="box">
                    <p>Họ tên</p>
                    <input type="text" name="ho-ten" placeholder="Họ tên" value="<?php echo $nguoiDung['ho_ten'] ?>">
                </div>
                <div class="box">
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Email" value="<?php echo $nguoiDung['email'] ?>">
                </div>
                <div class="box">
                    <p>Số điện thoại</p>
                    <input type="text" name="sdt" placeholder="Số điện thoại" value="<?php echo $nguoiDung['sdt'] ?>">
                </div>
                <div class="box">
                    <p>Ngày sinh</p>
                    <input type="date" name="ngay-sinh" placeholder="Ngày sinh" value="<?php echo $nguoiDung['ngay_sinh'] ?>">
                </div>
                <div>
                    <p>Vai trò</p>
                    <select name="vai-tro">
                        <option value="1" <?php echo $nguoiDung['vai_tro_id'] == 1 ? "selected" :"" ?> >admin</option>
                        <option value="2" <?php echo $nguoiDung['vai_tro_id'] == 2 ? "selected" :"" ?> >Đạo diễn</option>
                        <option value="3" <?php echo $nguoiDung['vai_tro_id'] == 3 ? "selected" :"" ?> >Diễn viên</option>
                        <option value="4" <?php echo $nguoiDung['vai_tro_id'] == 4 ? "selected" :"" ?> >Người dùng</option>
                    </select>
                </div>
                <div class = "box">
                    <input type="submit" value="Cap nhat">
                </div>
            </form>
        </div>
    </div>
    <?php
        if (
            !empty($_POST['ten-dang-nhap']) &&
            !empty($_POST['password']) &&
            !empty($_POST['ho-ten']) &&
            !empty($_POST['email']) &&
            !empty($_POST['sdt']) &&
            !empty($_POST['ngay-sinh']) &&
            !empty($_POST['vai-tro'])
        ) {

            $tenDangNhap = $_POST['ten-dang-nhap'];
            $matKhau = $_POST['password'];
            $hoTen = $_POST['ho-ten'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $ngaySinh = $_POST['ngay-sinh'];
            $vaiTro = $_POST['vai-tro'];

            $sql = "UPDATE `nguoi_dung` SET `ten_dang_nhap`='$tenDangNhap',`mat_khau`='$matKhau',`ho_ten`='$hoTen',`email`='$email',`sdt`='$sdt',`vai_tro_id`='$vaiTro',`ngay_sinh`='$ngaySinh' WHERE `id`='$id'";
            //echo $sql;
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=nguoidung');
        } else {
            echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    ?>
</body>
</html>