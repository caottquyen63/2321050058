CREATE DATABASE IF NOT EXISTS quan_ly_web_phim; # Chạy lệnh nhiều lần ko bị lỗi 

# 1. Thể loại
CREATE TABLE the_loai(
    id INT PRIMARY KEY,
    ten_the_loai VARCHAR(50)
);
# 2. Người dùng
CREATE TABLE nguoi_dung(
    id int,
    ten_dang_nhap VARCHAR(50),
    mat_khau VARCHAR(50),
    ho_ten VARCHAR(50),
    email VARCHAR(50),
    sdt CHAR(10),
    vai_tro_id INT,
    ngay_sinh DATETIME
);
# 3. Vai trof
CREATE TABLE vai_tro(
    id INT,
    ten_vai_tro VARCHAR(20)
);
# 4. PHIM
CREATE TABLE phim(
    id INT PRIMARY KEY,
    ten_phim VARCHAR(100),
    dao_dien_id INT,
    nha_phat_hanh INT,
    poster VARCHAR,
    quoc_gia_id INT,
    so_tap INT,
    trailer VARCHAR
    mo_ta TEXT
);
# 5. Phim diễn viên
CREATE TABLE phim_dien_vien(
    id INT,
    phim_id INT,
    dien_vien_id INT
);
# 6. Quốc gia
CREATE TABLE quoc_qua(
    id INT PRIMARY KEY,
    ten_quoc_gia VARCHAR(50)
);
# 7. Tập phim
CREATE TABLE tap_phim(
    id INT PRIMARY KEY,
    so_tap INT,
    tieu_de VARCHAR,
    phim_id INT,
    thoi_luong float,
    trailer VARCHAR
);