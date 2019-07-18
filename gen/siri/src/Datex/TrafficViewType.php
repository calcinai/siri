<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TrafficViewType
 *
 * An identifiable instance of a traffic view at a single point in time relating to a predefined location set, comprising one or more linear traffic views each of which comprise one or more traffic view records.
 * XSD Type: TrafficView
 */
class TrafficViewType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * The time to which the traffic view relates, i.e. the instance in time at which the traffic view was taken (comparable to taking a photograph).
     *
     * @property \DateTime $trafficViewTime
     */
    private $trafficViewTime = null;

    /**
     * A reference to a predefined location set.
     *
     * @property string $predefinedLocationSetReference
     */
    private $predefinedLocationSetReference = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\LinearTrafficViewType[] $linearTrafficView
     */
    private $linearTrafficView = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $trafficViewExtension
     */
    private $trafficViewExtension = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as trafficViewTime
     *
     * The time to which the traffic view relates, i.e. the instance in time at which the traffic view was taken (comparable to taking a photograph).
     *
     * @return \DateTime
     */
    public function getTrafficViewTime()
    {
        return $this->trafficViewTime;
    }

    /**
     * Sets a new trafficViewTime
     *
     * The time to which the traffic view relates, i.e. the instance in time at which the traffic view was taken (comparable to taking a photograph).
     *
     * @param \DateTime $trafficViewTime
     * @return self
     */
    public function setTrafficViewTime(\DateTime $trafficViewTime)
    {
        $this->trafficViewTime = $trafficViewTime;
        return $this;
    }

    /**
     * Gets as predefinedLocationSetReference
     *
     * A reference to a predefined location set.
     *
     * @return string
     */
    public function getPredefinedLocationSetReference()
    {
        return $this->predefinedLocationSetReference;
    }

    /**
     * Sets a new predefinedLocationSetReference
     *
     * A reference to a predefined location set.
     *
     * @param string $predefinedLocationSetReference
     * @return self
     */
    public function setPredefinedLocationSetReference($predefinedLocationSetReference)
    {
        $this->predefinedLocationSetReference = $predefinedLocationSetReference;
        return $this;
    }

    /**
     * Adds as linearTrafficView
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\LinearTrafficViewType $linearTrafficView
     */
    public function addToLinearTrafficView(\Calcinai\Siri\Objects\Datex\LinearTrafficViewType $linearTrafficView)
    {
        $this->linearTrafficView[] = $linearTrafficView;
        return $this;
    }

    /**
     * isset linearTrafficView
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinearTrafficView($index)
    {
        return isset($this->linearTrafficView[$index]);
    }

    /**
     * unset linearTrafficView
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinearTrafficView($index)
    {
        unset($this->linearTrafficView[$index]);
    }

    /**
     * Gets as linearTrafficView
     *
     * @return \Calcinai\Siri\Objects\Datex\LinearTrafficViewType[]
     */
    public function getLinearTrafficView()
    {
        return $this->linearTrafficView;
    }

    /**
     * Sets a new linearTrafficView
     *
     * @param \Calcinai\Siri\Objects\Datex\LinearTrafficViewType[] $linearTrafficView
     * @return self
     */
    public function setLinearTrafficView(array $linearTrafficView)
    {
        $this->linearTrafficView = $linearTrafficView;
        return $this;
    }

    /**
     * Gets as trafficViewExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTrafficViewExtension()
    {
        return $this->trafficViewExtension;
    }

    /**
     * Sets a new trafficViewExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $trafficViewExtension
     * @return self
     */
    public function setTrafficViewExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $trafficViewExtension)
    {
        $this->trafficViewExtension = $trafficViewExtension;
        return $this;
    }


}

