<?php


class Hinhchunhat {


    public $canhA;

    public $canhB;

    public $chuvi;

    public $dientich;

    public function __construct($a_param, $b_param)
    {
        $this->canhA = $a_param;
        $this->canhB = $b_param;
    }


    public function tinhchuvi() {
        $chuvi = ($this->canhA + $this->canhB)*2;
        $this->chuvi = $chuvi;
        return $this->chuvi;
    }


    public function tinhdientich() {
        $dientich = $this->canhA*$this->canhB;
        $this->dientich = $dientich;
        return $this->dientich;
    }


}

$hcn1 = new Hinhchunhat(5,6);
echo '<br> chu vi là : ' . $hcn1->tinhchuvi();
echo '<br> dien tich là : ' . $hcn1->tinhdientich();