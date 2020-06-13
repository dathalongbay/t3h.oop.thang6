<?php

//
// <img src="" alt="" width="" height="" id="" class="" />

class Hinhanh {

    // tạo ra các thuộc tính class Hinhanh
    // thuộc tính chỉ đặc điểm tích chất class trong php
    // từ khóa public trước tên thuộc tính để khai báo giới hạn truy cập
    // cho tên thuộc tính
    public $src;

    public $alt;

    public $width;

    public $height;

    public $id;

    public $class;


    // phương thức khởi tạo class
    // chú ý __ là 2 shift _ liên tiêp
    // phương thức khởi tạo class được tự động gọi
    // khi chúng ta khởi tạo đối tượng từ class bằng từ khóa new
    public function __construct($src_param, $alt_param, $width_param, $height_param,$id_param,$class_param)
    {
        // bên trong hàm khởi tạo
        // truyền các giá trị của tham số cho các thuộc tính class
        $this->src = $src_param;
        $this->alt = $alt_param;
        $this->width = $width_param;
        $this->height = $height_param;
        $this->id = $id_param;
        $this->class = $class_param;
    }

    // tạo ra phương thức trong class
    // phương thức gần giống hàm function trong php
    // sử dụng từ khóa public khai báo giới hạn truy cập trước tên của phương thức
    // phương thức trong class thường dùng để tạo 1 hành động cho đối tượng
    public function html() {

        // đưa các thuộc tính của class HinhAnh vào trong phương thức html
        // để truy cập vào thuộc tính trong class ở trong nội bộ
        // phương thức của nó thì sử dụng $this->ten_thuoc_tinh
        // $this->src
        $html = "<img src='$this->src' alt='$this->alt' width='$this->width' height='$this->height' id='$this->id' class='$this->class' />";

        return $html;
    }


} // kết thúc của class Hinhanh



// tạo ra đối tượng object từ class Hinhanh
$img1 = new Hinhanh('https://salt.tikicdn.com/cache/w584/ts/banner/11/5a/b7/7e23d5a94110b992f9e12a2f6643f7d3.jpg', 'demo hình ảnh', 200, 300, 'img1', 'image');

// gọi đến phương thức trong class từ object đối tượng cụ thể
echo $img1->html();

// in ra cấu trúc của 1 class
echo '<pre>';
print_r($img1);
echo '</pre>';

$img2 = new Hinhanh('https://salt.tikicdn.com/cache/w412/ts/banner/91/f3/4e/b38a65bbf37f393d82af0fbb14828a4f.jpg', 'demo hình ảnh', 200, 300, 'img1', 'image');
echo $img2->html();