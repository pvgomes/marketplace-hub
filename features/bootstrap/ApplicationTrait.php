<?php

use PHPUnit_Framework_Assert as Assertions;
use Behat\Gherkin\Node\PyStringNode;

trait ApplicationTrait
{

    /**
     * @var string
     */
    private $arrHeader = [];

    /**
     * @var string
     */
    private $authorization = null;

    /**
     * @var array
     */
    private $addresses = [];

    /**
     * @return string
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * @param string $authorization
     */
    public function setAuthorization($authorization)
    {
        $this->authorization = $authorization;
    }

    private function setArrHeader($index,$value)
    {
        $this->arrHeader[$index] = $value;
    }

    private function getArrHeader()
    {
        return $this->arrHeader;
    }

    /**
     * @return array
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param array $addresses
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @Given /^I set header with customer authorization$/
     */
    public function setHeaderWithAuthorization()
    {
        $this->iSetHeaderWithValue("Authorization",$this->getAuthorization());
    }

    /**
     * @Given /^the authorization value must be kept on array$/
     */
    public function keepAuthorization()
    {
        $responseBody = $this->getResponse()->json();
        $auth = $this->recursiveFieldKeySearch("key",$responseBody);
        $this->setArrHeader("Authorization",$auth);
        $this->setAuthorization($auth);
        Assertions::assertNotNull($this->getArrHeader());
    }

    /**
     * @Given /the addresses value must be kept on array$/
     */
    public function keepAddresses()
    {
        $responseBody = $this->getResponse()->json();
        $this->setAddresses($responseBody['data']);
    }

    public function recursiveFieldKeySearch($needle, $haystack) {
        if (!is_array($haystack))      return false;
        if (isset($haystack[$needle])) return $haystack[$needle];

        foreach ($haystack as $key=>$value) {
            $result = self::recursiveFieldKeySearch($needle, $value);
            if ($result !== false) return $result;
        }
        return false;
    }

}