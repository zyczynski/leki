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

    /**
     * @return mixed
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * @param mixed $ilosc
     */
    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;
    }

    /**
     * @return mixed
     */
    public function getZapotrzebowanie()
    {
        return $this->zapotrzebowanie;
    }

}

//komentarz