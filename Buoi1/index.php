<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 (PHP)</title>
</head>
<body>
    <?php 
        //1. In ra màn hình
        echo "Hello world! <br>";
        echo "Hi ";

        //2. Biến
        // Cú pháp: $ + tên biến = giá trị của biến
        $ten = "Ngoc Anh";
        $tuoi = 28;
        echo $ten . " " . 
        $tuoi . "tuổi <br>"; // dùng dấu . để nối chuỗi

        //3. Hằng
        define("soPi", "3.14"); //khai báo hằng define("tên hằng", "giá trị")
        echo soPi . "<br>";

        //4. Phân biệt ' ' và " "
        echo '$ten' . "<br>";
        echo "$ten" . "<br>"; //giống với echo $ten

        //5. Chuỗi
        #5.1 Kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        #5.2 Đếm số từ
        echo str_word_count($ten) . "<br>";
        #5.3 Tìm kiến ký tự trg chuỗi
        echo strpos($ten, "A" . "<br>"); // nơi ký tự xuất hiện lần đầu tiên
        #5.4 Thay thế kí tự trg chuỗi
        echo str_replace("Anh", "An", $ten . "<br>");

        //6. Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        # + - * /
        echo $soThuNhat + $soThuHai . "<br>";
        echo $soThuNhat - $soThuHai . "<br>";
        echo $soThuNhat * $soThuHai . "<br>";
        echo $soThuNhat / $soThuHai . "<br>";
        # += -+ *= /= %=
        # echo $soThuNhat %= soThuHai . "<br>";   
        # so sánh == != > < >= <= ===
        echo $soThuNhat < $soThuHai;

        //7. Câu điều kiện
        // if("Điều kiện"){
            // logic
        // }
        // elseif {
            // logic
        // }

        // VD: Kiểm tra tổng của số thứ nhất và số thứ 2
        // nếu < 15 thì in ra tổng nhỏ hơn 15
        // nếu = 15 thì in ra tổng = 15
        // còn lại in ra lớn hơn 15
        $tong = $soThuNhat + $soThuHai;
        if($tong < 15) {
            echo "Tổng 2 số nhỏ hơn 15 <br>";
        }

        elseif ($tong == 15){
            echo "Tổng 2 số = 15 <br>";
        }
        else{
            echo "Tổng 2 số lớn hơn 15 <br>";
        }

        //8. Switch case
        $color = "red";
        switch ($color){
            case "red";
                echo "is red";
                break;
            case "blue";
                echo "is blue";
                break;
            default:
                echo "no color";
                break;
        }

        //9. for
        // for ($i = 0; $i < 100; $i++) {
        //     echo $i . "<br>";
        // }

        // 10. Mảng
        // $mang = ["An", "Nhat Anh", "Vu Anh"];
        // // Đếm phần tử
        // echo count($mang);
        // echo $mang[1];
        // print_r($mang); //in toàn bộ mảng
        // $mang[0] = "Hai Anh"; //thay đổi phần tử trg mảng
        // print_r($mang);
        // $mang[] = "Tam";
        // print_r($mang);
        // #xóa
        // unset($mang[3]);
        // print_r($mang);

        #Sắp xếp mảng
        $mang = ["C", "B", "D", "A"];
        print_r($mang);
        echo "<br>";
        #sx tăng
        sort($mang);
        print_r($mang);
        #sx giảm
        echo "<br>";
        rsort($mang);
        print_r($mang);

        #String to array
        #$ten = "Dung, Kien, Hao, Minh, Phuong, Nam";
        
        // 11. Kiểm tra biến có tồn tại ko
        $bienA = "hello";
        isset($bienA); //true
        isset($bienB); //false
        if(isset($bienB)){
            echo "Biến này có tồn tại";
        }
        else{
            echo "Biến này ko tồn tại";
        }

        //check empty
        $check = "";
        if(empty($check)){
            echo "empty";
        }
        else{
            echo "no empty";
        }

        //12. Hàm
        #ko tham số
        fuction xinChao(){
            return "Hello";
        }
        echo xinChao();

        #có tham số 
        fuction xinChao2($ten){
            return "Hello" . $ten;
        }
        echo xinChao2("Anh");


    ?>
</body>
</html>