<?php

// giới hạn truy cập thuộc tính và phương thức class php
// public ( công khai ) có thể truy cập mọi nơi
// protected ( kế thừa ) có tác dụng trong class đó và các class con kế thừa từ nó
// private ( riêng tư ) chỉ có tác dụng trong bản thân class đó

class Traicay {


    public $ten;

    protected $mausac;

    private $khoiluong;
}

$xoai = new Traicay();
$xoai->ten = 'xoài';
$xoai->mausac = 'vàng'; // lỗi do truy cập protected từ bên ngoài class
$xoai->khoiluong = '300 g'; // lỗi do truy cập private từ bên ngoài class

