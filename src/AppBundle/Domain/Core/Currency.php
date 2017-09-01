<?php

namespace AppBundle\Domain\Core;

class Currency
{

    Const REAL = "BRL";
    Const DOLAR = "USD";

    private $isoCode;

    public function __construct($anIsoCode = self::REAL)
    {
        $this->setIsoCode($anIsoCode);
    }
    private function setIsoCode($anIsoCode)
    {
        if (!preg_match('/^[A-Z]{3}$/', $anIsoCode)) {
            throw new \InvalidArgumentException();
        }
        $this->isoCode = $anIsoCode;
    }

    public function isoCode()
    {
        return $this->isoCode;
    }

    public function equals(Currency $currency)
    {
        return $currency->isoCode() === $this->isoCode();
    }

}
