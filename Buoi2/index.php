<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <style>
    body{
        margin: 0;
    }
    nav{
        background-color: cornflowerblue;
        display: flex;
        justify-content: space-between;
    }
    ul{
        display: flex;
        list-style: none;
        margin: 0;
        gap: 15 px;
    }
    li{
        padding: 10px;
        font-size: 18px;
    }
    a{
        text-decoration: none;
    }
   </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['username'])){
            header('location: login.php');
        }
    ?>
    <header>
        <nav class="">
            <ul class="">
                <li class=""><a class="" href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li class=""><a class="" href="index.php?page_layout=phim">Phim</a></li>
                <li class=""><a class="" href="index.php?page_layout=theloai">Thể loại</a></li>
                <li class=""><a class="" href="index.php?page_layout=quocgia">Quốc gia</a></li>
                <li class=""><a class="" href="index.php?page_layout=nguoidung">Người dùng</a></li>
            </ul>
            <div>
                <li class=""><?php echo "xin chào" . $_SESSION["username"];?></li>
                <li class=""><a class="" href="index.php?page_layout=dangxuat">Đăng xuất</a></li>
            </div>
        </nav>
        <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'trangchu':
                    include "trangchu.php";
                    break;
                case 'phim':
                    include "phim/phim.php";
                    break;
                case 'themphim':
                    include "phim/themphim.php";
                    break;
                case 'xoaphim':
                    include "phim/xoaphim.php";
                    break;
                case 'capnhatphim':
                    include "phim/capnhatphim.php";
                    break;
                case 'theloai':
                    include "theLoai/theloai.php";
                    break;
                case 'themtheloai':
                    include "theLoai/themtheloai.php";
                    break;
                case 'xoatheloai':
                    include "theLoai/xoatheloai.php";
                    break;
                case 'capnhattheloai':
                    include "theLoai/capnhattheloai.php";
                    break;
                case 'quocgia':
                    include "quocGia/quocgia.php";
                    break;
                case 'themquocgia':
                    include "quocGia/themquocgia.php";
                    break;
                case 'xoaquocgia':
                    include "quocGia/xoaquocgia.php";
                    break;
                case 'capnhatquocgia':
                    include "quocGia/capnhatquocgia.php";
                    break;
                case 'nguoidung':
                    include "nguoiDung/nguoidung.php";
                    break;
                case 'themnguoidung':
                    include "nguoiDung/themnguoidung.php";
                    break;
                case 'xoanguoidung':
                    include "nguoiDung/xoanguoidung.php";
                    break;
                case 'capnhatnguoidung':
                    include "nguoiDung/capnhatnguoidung.php";
                    break;
                case 'dangxuat':         
                    break;
            }
        }
        ?>
    </header>
</body>
</html>