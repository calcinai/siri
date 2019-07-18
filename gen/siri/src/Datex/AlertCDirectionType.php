<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AlertCDirectionType
 *
 * The direction of traffic flow along the road to which the information relates.
 * XSD Type: AlertCDirection
 */
class AlertCDirectionType
{

    /**
     * The direction of traffic flow to which the situation, traffic data or information is related. Positive is in the direction of coding of the road.
     *
     * @property string $alertCDirectionCoded
     */
    private $alertCDirectionCoded = null;

    /**
     * ALERT C name of a direction e.g. Brussels -> Lille.
     *
     * @property \Calcinai\Siri\Objects\Datex\AlertCDirectionType\AlertCDirectionNamedAType\ValueAType[] $alertCDirectionNamed
     */
    private $alertCDirectionNamed = null;

    /**
     * Indicates for circular routes the sense in which navigation should be made from the primary location to the secondary location, to avoid ambiguity. The value TRUE indicates the positive RDS direction which is the direction of coding of the road.
     *
     * @property bool $alertCDirectionSense
     */
    private $alertCDirectionSense = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $alertCDirectionExtension
     */
    private $alertCDirectionExtension = null;

    /**
     * Gets as alertCDirectionCoded
     *
     * The direction of traffic flow to which the situation, traffic data or information is related. Positive is in the direction of coding of the road.
     *
     * @return string
     */
    public function getAlertCDirectionCoded()
    {
        return $this->alertCDirectionCoded;
    }

    /**
     * Sets a new alertCDirectionCoded
     *
     * The direction of traffic flow to which the situation, traffic data or information is related. Positive is in the direction of coding of the road.
     *
     * @param string $alertCDirectionCoded
     * @return self
     */
    public function setAlertCDirectionCoded($alertCDirectionCoded)
    {
        $this->alertCDirectionCoded = $alertCDirectionCoded;
        return $this;
    }

    /**
     * Adds as value
     *
     * ALERT C name of a direction e.g. Brussels -> Lille.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\AlertCDirectionType\AlertCDirectionNamedAType\ValueAType $value
     */
    public function addToAlertCDirectionNamed(\Calcinai\Siri\Objects\Datex\AlertCDirectionType\AlertCDirectionNamedAType\ValueAType $value)
    {
        $this->alertCDirectionNamed[] = $value;
        return $this;
    }

    /**
     * isset alertCDirectionNamed
     *
     * ALERT C name of a direction e.g. Brussels -> Lille.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlertCDirectionNamed($index)
    {
        return isset($this->alertCDirectionNamed[$index]);
    }

    /**
     * unset alertCDirectionNamed
     *
     * ALERT C name of a direction e.g. Brussels -> Lille.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlertCDirectionNamed($index)
    {
        unset($this->alertCDirectionNamed[$index]);
    }

    /**
     * Gets as alertCDirectionNamed
     *
     * ALERT C name of a direction e.g. Brussels -> Lille.
     *
     * @return \Calcinai\Siri\Objects\Datex\AlertCDirectionType\AlertCDirectionNamedAType\ValueAType[]
     */
    public function getAlertCDirectionNamed()
    {
        return $this->alertCDirectionNamed;
    }

    /**
     * Sets a new alertCDirectionNamed
     *
     * ALERT C name of a direction e.g. Brussels -> Lille.
     *
     * @param \Calcinai\Siri\Objects\Datex\AlertCDirectionType\AlertCDirectionNamedAType\ValueAType[] $alertCDirectionNamed
     * @return self
     */
    public function setAlertCDirectionNamed(array $alertCDirectionNamed)
    {
        $this->alertCDirectionNamed = $alertCDirectionNamed;
        return $this;
    }

    /**
     * Gets as alertCDirectionSense
     *
     * Indicates for circular routes the sense in which navigation should be made from the primary location to the secondary location, to avoid ambiguity. The value TRUE indicates the positive RDS direction which is the direction of coding of the road.
     *
     * @return bool
     */
    public function getAlertCDirectionSense()
    {
        return $this->alertCDirectionSense;
    }

    /**
     * Sets a new alertCDirectionSense
     *
     * Indicates for circular routes the sense in which navigation should be made from the primary location to the secondary location, to avoid ambiguity. The value TRUE indicates the positive RDS direction which is the direction of coding of the road.
     *
     * @param bool $alertCDirectionSense
     * @return self
     */
    public function setAlertCDirectionSense($alertCDirectionSense)
    {
        $this->alertCDirectionSense = $alertCDirectionSense;
        return $this;
    }

    /**
     * Gets as alertCDirectionExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAlertCDirectionExtension()
    {
        return $this->alertCDirectionExtension;
    }

    /**
     * Sets a new alertCDirectionExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $alertCDirectionExtension
     * @return self
     */
    public function setAlertCDirectionExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $alertCDirectionExtension)
    {
        $this->alertCDirectionExtension = $alertCDirectionExtension;
        return $this;
    }


}

