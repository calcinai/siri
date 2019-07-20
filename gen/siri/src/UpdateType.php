<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing UpdateType
 *
 *
 * XSD Type: Update
 */
class UpdateType
{

    /**
     * @property string[] $strings
     */
    private $strings = null;

    /**
     * Adds as string
     *
     * @return self
     * @param string $string
     */
    public function addToStrings($string)
    {
        $this->strings[] = $string;
        return $this;
    }

    /**
     * isset strings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStrings($index)
    {
        return isset($this->strings[$index]);
    }

    /**
     * unset strings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStrings($index)
    {
        unset($this->strings[$index]);
    }

    /**
     * Gets as strings
     *
     * @return string[]
     */
    public function getStrings()
    {
        return $this->strings;
    }

    /**
     * Sets a new strings
     *
     * @param string[] $strings
     * @return self
     */
    public function setStrings(array $strings)
    {
        $this->strings = $strings;
        return $this;
    }


}

