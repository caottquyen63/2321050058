<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim</title>
    <style>
        table{
            width:100%;
        }
        .xoa{
            padding:0 10px;
            color: white;
            background: red;
        }
    </style>
</head>
<body>
    <div style="display: flex; justify-content: space-between; align-items:center;">
        <a class="btn them" href="index.php?page_layout=themphim">Thêm phim</a>
    </div>
    <h1>Phim</h1>
    <table border=1>
        <tr>
            <th>Tên phim</th>
            <th>Tên đạo diễn</th>
            <th>Năm phát hành</th>
            <th>poster</th>
            <th>Quốc gia</th>
            <th>Số tập</th>
            <th>Thể loại</th>
            <th>Trailer</th>
            <th>Mô tả</th>
        </tr>
        <?php
            include('connect.php');
            $sql = "SELECT p.*, nd.ho_ten,qg.ten_quoc_gia, GROUP_CONCAT(tl.ten_the_loai SEPARATOR ', ') AS ds_the_loai
                    FROM phim p
                    JOIN quoc_gia qg ON qg.id = p.quoc_gia_id
                    JOIN nguoi_dung nd ON nd.id = p.dao_dien_id
                    JOIN phim_the_loai ptl ON p.id = ptl.phim_id
                    JOIN the_loai tl ON tl.id = ptl.the_loai_id
                    GROUP BY p.id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["ten_phim"] ?></td>
            <td><?php echo $row["ho_ten"] ?></td>
            <td><?php echo $row["nam_phat_hanh"] ?></td>
            <td><?php echo $row["poster"] ?></td>
            <td><?php echo $row["ten_quoc_gia"] ?></td>
            <td><?php echo $row["so_tap"] ?></td>
            <td><?php echo $row["ds_the_loai"] ?></td>
            <td><?php echo $row["trailer"] ?></td>
            <td><?php echo $row["mo_ta"] ?></td>
            <td>
                <a class="btn sua" href="index.php?page_layout=capnhatphim&id=<?php echo $row["id"]?>">Cập nhật</a>
                <a class="btn xoa" href="index.php?page_layout=xoaphim&id=<?php echo $row['id'] ?>">Xóa</a>

            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>