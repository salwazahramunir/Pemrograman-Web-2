<?php
class PersegiPanjang
{
    public $panjang, $lebar;

    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function luas()
    {
        $luas = $this->panjang * $this->lebar;

        return $luas;
    }
    public function keliling()
    {
        $keliling = (2 * $this->panjang) + (2 * $this->lebar);

        return $keliling;
    }
}
