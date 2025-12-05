<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể loại</title>
    <style>
        table{
            width: 30%;
        }
        .sua-xoa {
            width: 30%;
        }
        .xoa{
            padding: 0 10px;
            color: white;
            background: red;
        }
    </style>
</head>
<body>
    <div style="display: flex; justify-content: space-between; align-items:center;">
        <a class="btn them" href="index.php?page_layout=themtheloai">Thêm thể loại</a>
    </div>
    <h1>Thể loại</h1>
    <table border=1>
        <tr>
            <th>Tên thể loại</th>
        </tr>
        <?php
            include("connect.php");
            $sql = "SELECT * FROM `the_loai` WHERE 1";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["ten_the_loai"] ?></td>
            <td class="chac-nang">
                <a class="btn sua" href="index.php?page_layout=capnhattheloai&id=<?php echo $row["id"] ?>">Cập nhật</a>
                <a class="btn xoa" href="index.php?page_layout=xoatheloai&id=<?php echo $row["id"] ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>