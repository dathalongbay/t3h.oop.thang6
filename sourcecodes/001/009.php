<?php



class Student {

    // gán giá trị mặc định cho thuộc tính $name
    public $name = 'demo họ tên';

    // thêm thuộc tính tĩnh
    public static $location = 'việt nam';


    // phương thức tĩnh
    public static function demo1() {
        echo '<br>' . __METHOD__;
        // không được sử dụng từ khóa $this trong phương thức tĩnh
        // nếu sử dụng thì sẽ bị lỗi
        echo '<br> truy cập đến phương thức thông thường từ bên trong phương thức tĩnh';
        $self = new self();
        // truy cập thuộc tính bình thường
        echo '<br>' . $self->name;
        // truy cập phương thức bình thức
        echo '<br>' . $self->demo2();

        // truy cập đến thuộc tính tĩnh
        echo '<br> truy cập đến thuộc tính tĩnh';
        echo '<br>' . self::$location;

    }

    // phương thức bình thường
    public function demo2() {
        echo '<br>' . __METHOD__;
        echo '<br>' . $this->name;
    }

}

// khởi tạo đối tượng từ class
$tuan = new Student();
// muốn gọi đến phương thức bình thường
$tuan->demo2();

// phương thức tĩnh có ưu điểm là có thể gọi đến phương thức tĩnh màn không
// cần phải khởi tạo đối tượng
// cách gọi TenClass::TenPhuongthucTinh
Student::demo1();



