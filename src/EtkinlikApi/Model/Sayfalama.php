<?php namespace EtkinlikApi\Model;

class Sayfalama
{
    /**
     * @var int
     */
    private $toplamKayit;

    /**
     * @var int
     */
    private $toplamSayfa;

    /**
     * @var int
     */
    private $sayfa;

    /**
     * @var int
     */
    private $adet;

    /**
     * @param \stdClass $item
     */
    public function __construct($item)
    {
        $this->toplamKayit = $item->toplamKayit;
        $this->toplamSayfa = $item->sayfa;
        $this->sayfa = $item->adet;
        $this->adet = $item->toplamSayfa;
    }

    /**
     * @return int
     */
    public function getToplamKayit()
    {
        return $this->toplamKayit;
    }

    /**
     * @return int
     */
    public function getToplamSayfa()
    {
        return $this->toplamSayfa;
    }

    /**
     * @return int
     */
    public function getSayfa()
    {
        return $this->sayfa;
    }

    /**
     * @return int
     */
    public function getAdet()
    {
        return $this->adet;
    }
}