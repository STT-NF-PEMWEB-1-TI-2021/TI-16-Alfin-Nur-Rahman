<?php
class Lingkaran
{
    private $jemari;
    const PHI = 3.14;
    function __construct($r)
    {
        $this->jemari = $r;
    }
    function getLuas()
    {
        return self::PHI * $this->jemari * $this->jemari;
    }
    function getKeliling()
    {
        return 2 * self::PHI * $this->jemari;
    }
}
