<?php

namespace Calcinai\Siri;

/**
 * Class representing ParameterisedActionStructureType
 *
 * Type for parameterised ie user definable actions.
 * XSD Type: ParameterisedActionStructure
 */
class ParameterisedActionStructureType extends SimpleActionStructureType
{

    /**
     * Description of action.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $description
     */
    private $description = null;

    /**
     * Data associated with action.
     *
     * @property \Calcinai\Siri\ActionDataStructureType[] $actionData
     */
    private $actionData = [
        
    ];

    /**
     * Gets as description
     *
     * Description of action.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of action.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $description
     * @return self
     */
    public function setDescription(\Calcinai\Siri\NaturalLanguageStringStructureType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as actionData
     *
     * Data associated with action.
     *
     * @return self
     * @param \Calcinai\Siri\ActionDataStructureType $actionData
     */
    public function addToActionData(\Calcinai\Siri\ActionDataStructureType $actionData)
    {
        $this->actionData[] = $actionData;
        return $this;
    }

    /**
     * isset actionData
     *
     * Data associated with action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActionData($index)
    {
        return isset($this->actionData[$index]);
    }

    /**
     * unset actionData
     *
     * Data associated with action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActionData($index)
    {
        unset($this->actionData[$index]);
    }

    /**
     * Gets as actionData
     *
     * Data associated with action.
     *
     * @return \Calcinai\Siri\ActionDataStructureType[]
     */
    public function getActionData()
    {
        return $this->actionData;
    }

    /**
     * Sets a new actionData
     *
     * Data associated with action.
     *
     * @param \Calcinai\Siri\ActionDataStructureType[] $actionData
     * @return self
     */
    public function setActionData(array $actionData)
    {
        $this->actionData = $actionData;
        return $this;
    }


}

