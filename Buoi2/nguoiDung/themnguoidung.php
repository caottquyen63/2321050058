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
        <h1>Thêm người dùng</h1>
        <div class="container">
            <form action="index.php?page_layout=themnguoidung" method="post">
                <div class="box">
                    <p>Tên đăng nhập</p>
                    <input type="text" name="ten-dang-nhap" placeholder="tên đăng nhập">
                </div>
                <div class="box">
                    <p>Mật khẩu</p>
                    <input type="password" name="password" placeholder="mật khẩu">
                </div>
                <div class="box">
                    <p>Họ tên</p>
                    <input type="text" name="ho-ten" placeholder="Họ tên">
                </div>
                <div class="box">
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="box">
                    <p>Số điện thoại</p>
                    <input type="text" name="sdt" placeholder="Số điện thoại">
                </div>
                <div class="box">
                    <p>Ngày sinh</p>
                    <input type="date" name="ngay-sinh" placeholder="Ngày sinh">
                </div>
                <div>
                    <p>Vai trò</p>
                    <select name="vai-tro" id="">
                        <option value="1">admin</option>
                        <option value="2">Đạo diễn</option>
                        <option value="3">Diễn viên</option>
                        <option value="4">Người dùng</option>
                    </select>
                </div>
                <div class="box">
                    <input type="submit" value="Thêm mới">
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

            $sql = "INSERT INTO `nguoi_dung`(`ten_dang_nhap`, `mat_khau`, `ho_ten`, `email`, `sdt`, `vai_tro_id`, `ngay_sinh`) VALUES ('$tenDangNhap','$matKhau','$hoTen','$email','$sdt','$vaiTro','$ngaySinh')";
         
            //echo $sql;
            include "connect.php";
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=nguoidung');
        } else {
            echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    ?>
</body>
</html>