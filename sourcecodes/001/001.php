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