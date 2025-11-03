let danhSachPhim = [
    {
        id:1,
        tenPhim: "Mưa Đỏ",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Việt Nam",
        poster: url("../Bai7/img/mua-do2-1122.jpeg"),
        theLoai: "Phim chiếu rạp"
    },
    {
        id:2,
        tenPhim: "Conan",
        namPhatHanh: 2023,
        tuoi: 10,
        thoiLuong: 1.5,
        quocGia: "Nhật Bản",
        poster: url("../Bai7/img/phim/conan.jpg"),
        theLoai: "Phim hoạt hình"
    },
    {
        id:3,
        tenPhim: "Người đẹp và quái vật",
        namPhatHanh: 2023,
        tuoi: 15,
        thoiLuong: 120,
        quocGia: "Mỹ",
        poster: url("../Bai7/img/phim/beautyandthebeaets.jpg"),
        theLoai: "Phim hoạt hình"
    }
];

let phimHienTai = danhSachPhim[0];
let banner = document.getElementsByClassName('banner')[0];

function chonPhim(idPhim){
    for(let i=0; i < danhSachPhim.length; i++){
        if(danhSachPhim[i].id == idPhim)
            banner.computedStyleMap.backgroundImage = danhSachPhim[i].poster;
    }
}