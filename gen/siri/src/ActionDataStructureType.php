<?php

namespace Calcinai\Siri;

/**
 * Class representing ActionDataStructureType
 *
 * Type for list of situations.
 * XSD Type: ActionDataStructure
 */
class ActionDataStructureType
{

    /**
     * Name of action data Element.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Data type of action data.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Value for action.
     *
     * @property mixed[] $value
     */
    private $value = [
        
    ];

    /**
     * Display prompt for presenting action to user.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $prompt
     */
    private $prompt = null;

    /**
     * Gets as name
     *
     * Name of action data Element.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of action data Element.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * Data type of action data.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Data type of action data.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as value
     *
     * Value for action.
     *
     * @return self
     * @param mixed $value
     */
    public function addToValue($value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * Value for action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * Value for action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * Value for action.
     *
     * @return mixed[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Value for action.
     *
     * @param mixed[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as prompt
     *
     * Display prompt for presenting action to user.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * Sets a new prompt
     *
     * Display prompt for presenting action to user.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $prompt
     * @return self
     */
    public function setPrompt(\Calcinai\Siri\NaturalLanguageStringStructureType $prompt)
    {
        $this->prompt = $prompt;
        return $this;
    }


}

