<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quốc gia</title>
    <style>
        table{
            width: 30%;
        }
        .sua-xoa {
            width: 30%;
        }
        .xoa{
            padding:0 10px;
            color: white;
            background: red;
        }
        
    </style>
</head>
<body>
    <div class="quoc-gia">
    <div class= "container">
        <div style="display: flex; justify-content: space-between; align-items:center;">
            <a class="btn them" href="index.php?page_layout=themquocgia">Thêm quốc gia</a>
        </div>
        <h1>Quốc gia</h1>
        <table border=1>
            <tr>
                <th>Tên quốc gia</th>
            </tr>
            <?php
                include("connect.php");
                $sql = "SELECT * FROM `quoc_gia` WHERE 1";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["ten_quoc_gia"] ?></td>
                <td class="chac-nang">
                    <a class="btn sua" href="index.php?page_layout=capnhatquocgia&id=<?php echo $row["id"] ?>">Cập nhật</a>
                    <a class="btn xoa" href="index.php?page_layout=xoaquocgia&id=<?php echo $row["id"] ?>">Xóa</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </div>
</body>
</html>