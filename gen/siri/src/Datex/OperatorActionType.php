<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing OperatorActionType
 *
 * Actions that a traffic operator can decide to implement to prevent or help correct dangerous or poor driving conditions, including maintenance of the road infrastructure.
 * XSD Type: OperatorAction
 */
class OperatorActionType extends SituationRecordType
{

    /**
     * Indicates whether the actions to be undertaken by the operator are the result of an internal operation or external influence.
     *
     * @property string $actionOrigin
     */
    private $actionOrigin = null;

    /**
     * The status of the defined operator action.
     *
     * @property string $operatorActionStatus
     */
    private $operatorActionStatus = null;

    /**
     * Indication of whether the action is provisional, i.e. the action is subject to change. True indicates it is provisional.
     *
     * @property bool $provisional
     */
    private $provisional = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $operatorActionExtension
     */
    private $operatorActionExtension = null;

    /**
     * Gets as actionOrigin
     *
     * Indicates whether the actions to be undertaken by the operator are the result of an internal operation or external influence.
     *
     * @return string
     */
    public function getActionOrigin()
    {
        return $this->actionOrigin;
    }

    /**
     * Sets a new actionOrigin
     *
     * Indicates whether the actions to be undertaken by the operator are the result of an internal operation or external influence.
     *
     * @param string $actionOrigin
     * @return self
     */
    public function setActionOrigin($actionOrigin)
    {
        $this->actionOrigin = $actionOrigin;
        return $this;
    }

    /**
     * Gets as operatorActionStatus
     *
     * The status of the defined operator action.
     *
     * @return string
     */
    public function getOperatorActionStatus()
    {
        return $this->operatorActionStatus;
    }

    /**
     * Sets a new operatorActionStatus
     *
     * The status of the defined operator action.
     *
     * @param string $operatorActionStatus
     * @return self
     */
    public function setOperatorActionStatus($operatorActionStatus)
    {
        $this->operatorActionStatus = $operatorActionStatus;
        return $this;
    }

    /**
     * Gets as provisional
     *
     * Indication of whether the action is provisional, i.e. the action is subject to change. True indicates it is provisional.
     *
     * @return bool
     */
    public function getProvisional()
    {
        return $this->provisional;
    }

    /**
     * Sets a new provisional
     *
     * Indication of whether the action is provisional, i.e. the action is subject to change. True indicates it is provisional.
     *
     * @param bool $provisional
     * @return self
     */
    public function setProvisional($provisional)
    {
        $this->provisional = $provisional;
        return $this;
    }

    /**
     * Gets as operatorActionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getOperatorActionExtension()
    {
        return $this->operatorActionExtension;
    }

    /**
     * Sets a new operatorActionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $operatorActionExtension
     * @return self
     */
    public function setOperatorActionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $operatorActionExtension)
    {
        $this->operatorActionExtension = $operatorActionExtension;
        return $this;
    }


}

