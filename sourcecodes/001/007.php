<?php



class Dienthoaiphothong {

    public $sodienthoai;

    public function nghe() {
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>' . __METHOD__;
    }

    public function goidien() {
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>' . __METHOD__;
    }

}


// sử dụng đa kế thừa trong php dùng trait
trait Maytinh {

    public $ip;

    public function guiEmail() {
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>' . __METHOD__;
    }

    public function office() {
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>' . __METHOD__;
    }

}

trait Mp3 {

    public function ngheRadio() {
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>' . __METHOD__;
    }

    public function ngheNhac() {
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>' . __METHOD__;
    }
}

// extends : kế thừa
class Dienthoaithongminh extends Dienthoaiphothong {


    // nạp trait Maytinh để sử dụng các thuộc tính và phương thức của Maytinh
    // Dienthoaithongminh kế thừa tất cả các thuộc tính và phương thức của Maytinh
    use Maytinh;
    use Mp3;
}

// $sony là đối tượng cụ thể được tạo ra từ Dienthoaithongminh
$sony = new Dienthoaithongminh();

echo "<pre>";
print_r($sony);
echo "</pre>";

// gọi đến phương thức của Dienthoaiphothong
$sony->goidien();

// gọi đến phương thức của trait Maytinh
$sony->guiEmail();

// gọi đến phương thức của trait Mp3
$sony->ngheNhac();

/**
 * PHP từ khóa extends chỉ hỗ trợ đơn kế thừa
 * khi muốn sử dụng đa kế thừa thì sẽ sử dụng trait
 * cho mục đích này
 * để nạp trait các bạn sử dụng từ khóa use trong class
 */