let danhSachPhim = [
    {
        id:1,
        tenPhim: "Mưa Đỏ",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 120,
        quocGia: "Việt Nam",
        poster: "../Bai7/img/mua-do2-1122.jpeg",
        theLoai: "Phim chiếu rạp",
        trailer: "https://www.youtube.com/watch?v=BD6PoZJdt_M",
    },
    {
        id:2,
        tenPhim: "Conan",
        namPhatHanh: 2023,
        tuoi: 10,
        thoiLuong: 120,
        quocGia: "Nhật Bản",
        poster: "../Bai7/img/phim/conan2.webp",
        theLoai: "Phim hoạt hình",
        trailer: "https://www.youtube.com/watch?v=C4pG3GbhQZw",
    },
    {
        id:3,
        tenPhim: "Người đẹp và quái vật",
        namPhatHanh: 2023,
        tuoi: 15,
        thoiLuong: 150,
        quocGia: "Mỹ",
        poster: "../Bai7/img/phim/beautyandthebeaets2.jpg",
        theLoai: "Phim hoạt hình",
        trailer: "https://www.youtube.com/watch?v=ZdzBRbgNs-I",
    },
    {
        id:4,
        tenPhim: "Cám",
        namPhatHanh: 2025,
        tuoi: 18,
        thoiLuong: 90,
        quocGia: "Việt Nam",
        poster: "../Bai7/img/phim/Cam.png",
        theLoai: "Phim kinh dị",
        trailer: "https://www.youtube.com/watch?v=_8qUFEmPQbc",
    },
    {
        id:5,
        tenPhim: "Địa đạo",
        namPhatHanh: 2025,
        tuoi: 10,
        thoiLuong: 120,
        quocGia: "Việt Nam",
        poster: "../Bai7/img/phim/diadao.jpg",
        theLoai: "Phim lịch sử",
        trailer: "https://www.youtube.com/watch?v=-OGDDtsIBHA",
    }, 
    {
        id:6,
        tenPhim: "Xúc xắc sinh tử",
        namPhatHanh: 2025,
        tuoi: 13,
        thoiLuong: 45,
        quocGia: "Thái Lan",
        poster: "../Bai7/img/phim/xuasacsinhtu2.webp",
        theLoai: "Phim truyền hình",
        trailer: "https://www.youtube.com/watch?v=qZeU9Yb3jm8",
    },
    {
        id:7,
        tenPhim: "Naruto",
        namPhatHanh: 2015,
        tuoi: 10,
        thoiLuong: 150,
        quocGia: "Nhật Bản",
        poster: "../Bai7/img/phim/naruto2.jpg",
        theLoai: "Phim hoạt hình",
        trailer: "https://www.youtube.com/watch?v=-G9BqkgZXRA",
    },
    {
        id:8,
        tenPhim: "Siêu nhân hải tặc",
        namPhatHanh: 2010,
        tuoi: 3,
        thoiLuong: 30,
        quocGia: "Nhật Bản",
        poster: "../Bai7/img/phim/sieunhanhaitac2.jpg",
        theLoai: "Phim hoạt hình"
    },
    {
        id:9,
        tenPhim: "Tết ở làng địa ngục",
        namPhatHanh: 2024,
        tuoi: 18,
        thoiLuong: 50,
        quocGia: "Việt Nam",
        poster: "../Bai7/img/phim/tetolangdianguc2.jpg",
        theLoai: "Phim truyền hình",
        trailer: "https://www.youtube.com/watch?v=C2V38ghWHlQ",
    },
    {
        id:10,
        tenPhim: "TOY STORY 4",
        namPhatHanh: 2015,
        tuoi: 3,
        thoiLuong: 90,
        quocGia: "Mỹ",
        poster: "../Bai7/img/phim/Toy-Story-4-2.jpg",
        theLoai: "Phim hoạt hình",
        trailer: "https://www.youtube.com/watch?v=wmiIUN-7qhE",
    },
    {
        id:11,
        tenPhim: "JONH WICK",
        namPhatHanh: 2014,
        tuoi: 18,
        thoiLuong: 120,
        quocGia: "Mỹ",
        poster: "../Bai7/img/phim/john-wick-2.jpg",
        theLoai: "Phim hành động",
        trailer: "https://www.youtube.com/watch?v=C0BMx-qxsP4",
    }
];

let phimHienTai = danhSachPhim[0];

let banner = document.getElementsByClassName('banner')[0];
let nam = document.getElementsByClassName('nam')[0];
let tuoi = document.getElementsByClassName('tuoi')[0];
let thoiLuong = document.getElementsByClassName('thoi-luong')[0];
let quocGia = document.getElementsByClassName('quoc-gia')[0];
let theLoai = document.getElementsByClassName('the-loai')[0];
let trailer = document.getElementsByClassName('trai-ler')[0];

function chonPhim(idPhim){
    for(let i = 0; i < danhSachPhim.length; i++){
        if(danhSachPhim[i].id === idPhim) {
            debugger
            banner.style.backgroundImage = `url(${danhSachPhim[i].poster})`;
            nam.innerHTML = danhSachPhim[i].namPhatHanh;
            tuoi.innerHTML = "T" + danhSachPhim[i].tuoi;
            thoiLuong.innerHTML = danhSachPhim[i].thoiLuong + " phút";
            quocGia.innerHTML = danhSachPhim[i].quocGia;
            theLoai.innerHTML = danhSachPhim[i].theLoai;

            // Cập nhật trailer cho nút
            trailer.onclick = function() {
                window.open(danhSachPhim[i].trailer, "_blank");
            };
            
        }
    }
}


