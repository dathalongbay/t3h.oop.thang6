<?php

// <a href='' title='' target=''></a>
class Thelienket {

    public $href;

    public $title;

    public $target;

    public $text;


    public function __construct($href_param, $title_param, $target_param, $text_param)
    {
        $this->href = $href_param;
        $this->title = $title_param;
        $this->target = $target_param;
        $this->text = $text_param;
    }

    public function html() {

        $html = " <a href='$this->href' title='$this->title' target='$this->target'>$this->text</a>";

        return $html;
    }
}

$kenh14 = new Thelienket('https://kenh14.vn/', 'kenh 14', '_blank', 'Liên kết đến kenh 14');

echo $kenh14->html();

echo '<pre>';
print_r($kenh14);
echo '</pre>';


$tiki = new Thelienket('https://tiki.vn/', 'tiki.vn', '_parent', 'Liên kết đến tiki');
echo $tiki->html();