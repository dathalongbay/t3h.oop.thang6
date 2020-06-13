<?php

// khai niệm kế thừa
// khai báo kế thừa sử dụng extends
// classA extends classB {}
// class con khi kế thừa class B thì sử dụng được phương thức và các thuộc tính
// của class cha có giới hạn truy cập là public và protected

class Traicay {


    public $ten;

    protected $mausac;

    public function __construct($ten_param, $mausac_param)
    {
        $this->ten = $ten_param;
        $this->mausac = $mausac_param;
    }

}

class Dautay extends Traicay {


    public function message() {
        echo 'quả dâu tây';
    }
}

$dautay1 = new Dautay('dau tây', 'đỏ');

echo '<pre>';
print_r($dautay1);
echo '</pre>';