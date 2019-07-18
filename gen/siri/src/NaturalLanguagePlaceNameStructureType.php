<?php

namespace Calcinai\Siri;

/**
 * Class representing NaturalLanguagePlaceNameStructureType
 *
 * @lang. ISO language code (default is en)
 * A string containing a phrase in a natural language name that requires at least one character of text and forbids certain reserved characters.
 * XSD Type: NaturalLanguagePlaceNameStructure
 */
class NaturalLanguagePlaceNameStructureType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $lang
     */
    private $lang = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }


}

