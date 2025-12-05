<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm quốc gia</title>
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
        <h1>Thêm quốc gia</h1>
        <div class="container">
            <form action="index.php?page_layout=themquocgia" method="post">
                <div class="box">
                    <p>Tên quốc gia</p>
                    <input type="text" name="ten-quoc-gia" placeholder="tên quốc gia">
                </div>
                <div class="box">
                    <input type="submit" value="Thêm mới">
                </div>
            </form>
        </div>
    </div>
    <?php
        if (
            !empty($_POST['ten-quoc-gia'])
        ) {
            $tenQuocGia = $_POST['ten-quoc-gia'];

            $sql = "INSERT INTO `quoc_gia`(`ten_quoc_gia`) VALUES ('$tenQuocGia')";
         
            //echo $sql;
            include "connect.php";
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=quocgia');}
        // } else {
        //     echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
        // }
    ?>
</body>
</html>