<?php

class Lek
{
    private $nazwa;
    private $ilosc;
    private $zapotrzebowanie;

    function __construct($nazwa, $ilosc, $zapotrzebowanie )
    {
        $this->nazwa = $nazwa;
        $this->ilosc = $ilosc;
        $this->zapotrzebowanie = $zapotrzebowanie;
    }

   
    public function getNazwa()
    {
        return $this->nazwa;
    }


    public function getIlosc()
    {
        return $this->ilosc;
    }


    public function getZapotrzebowanie()
    {
        return $this->zapotrzebowanie;
    }

}

