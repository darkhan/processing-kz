<?php
namespace Processing\Objects\Entity;

class AdditionalInformation
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;

    /**
     * @param  string                                           $key
     * @return \Processing\Objects\Entity\AdditionalInformation
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param  string                                           $value
     * @return \Processing\Objects\Entity\AdditionalInformation
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}