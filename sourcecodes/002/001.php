<?php

// để khai báo class trừu tượng sử dụng từ khóa abstract trước tên class
abstract class Dienthoai {

    // để khai báo 1 phương thức trừu tượng sử dụng abstract trước từ khoa function
    // phương thức trừu tượng là 1 phương thức không có nội dung
    // không có { nội dung }
    // là phương thức rỗng
    abstract public function ngheCuocGoi();

    abstract public function goiDien();

}

// class con kế thừa từ class trừu tượng
// phải viết nội dung bên trong cho các phương thức abstract ở class cha
class Dienthoaithongminh extends Dienthoai {


   public function ngheCuocGoi() {
        echo '<br>' . __METHOD__;
    }

    public function goiDien()
    {
        echo '<br>' . __METHOD__;
    }

}

// mục đích của class trừu tượng là ép buộc các class con kế thừa từ nó
// phải viết code thực thi bên trong cho các phương thức trửu tượng của class abstract cha