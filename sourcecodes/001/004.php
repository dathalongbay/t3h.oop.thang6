<?php

class FormBuilder {

    public $form_name;
    public $action;
    public $method;


    public function __construct($form_name_param, $action_param, $method_param)
    {
        $this->form_name = $form_name_param;
        $this->action = $action_param;
        $this->method = $method_param;
    }


    public function beginForm() {
        $begin = "<form name='$this->form_name' method='$this->method' action='$this->action'>";
        return $begin;
    }

    public function endForm() {
        $end = "</form>";
        return $end;
    }


    public function label($text){
        $html = "<label>$text</label>";
        return $html;
    }


    public function inputText($name, $value, $placeholder){
        $html = "<input type='text' name='$name' value='$value' placeholder='$placeholder' />";

        return $html;
    }


    public function inputEmail($name, $value, $placeholder){
        $html = "<input type='email' name='$name' value='$value' placeholder='$placeholder' />";

        return $html;
    }

    public function inputPassword($name, $value, $placeholder){
        $html = "<input type='password' name='$name' value='$value' placeholder='$placeholder' />";

        return $html;
    }

    public function inputFile($name, $value){
        $html = "<input type='file' name='$name' value='$value' />";

        return $html;
    }
}

$form1 = new FormBuilder('form', '', 'post');

$form1->beginForm();
echo "<div>";
echo $form1->label('Nhập tên');
echo $form1->inputText('ten', '', 'Nhập họ tên');
echo "</div>";

echo "<div>";
echo $form1->label('Nhập email');
echo $form1->inputEmail('email', '', 'Nhập thư điện tử');
echo "</div>";

echo "<div>";
echo $form1->label('Nhập mật khẩu');
echo $form1->inputPassword('matkhau', '', 'Nhập mật khẩu từ 8 đến 32 ký tự');
echo "</div>";

echo "<div>";
echo $form1->label('Nhập file đính kèm');
echo $form1->inputFile('file', '');
echo "</div>";
$form1->endForm();