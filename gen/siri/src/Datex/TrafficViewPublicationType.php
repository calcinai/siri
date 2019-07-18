<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TrafficViewPublicationType
 *
 * A publication containing one or more traffic views.
 * XSD Type: TrafficViewPublication
 */
class TrafficViewPublicationType extends PayloadPublicationType
{

    /**
     * @property \Calcinai\Siri\Datex\HeaderInformationType $headerInformation
     */
    private $headerInformation = null;

    /**
     * @property \Calcinai\Siri\Datex\TrafficViewType[] $trafficView
     */
    private $trafficView = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $trafficViewPublicationExtension
     */
    private $trafficViewPublicationExtension = null;

    /**
     * Gets as headerInformation
     *
     * @return \Calcinai\Siri\Datex\HeaderInformationType
     */
    public function getHeaderInformation()
    {
        return $this->headerInformation;
    }

    /**
     * Sets a new headerInformation
     *
     * @param \Calcinai\Siri\Datex\HeaderInformationType $headerInformation
     * @return self
     */
    public function setHeaderInformation(\Calcinai\Siri\Datex\HeaderInformationType $headerInformation)
    {
        $this->headerInformation = $headerInformation;
        return $this;
    }

    /**
     * Adds as trafficView
     *
     * @return self
     * @param \Calcinai\Siri\Datex\TrafficViewType $trafficView
     */
    public function addToTrafficView(\Calcinai\Siri\Datex\TrafficViewType $trafficView)
    {
        $this->trafficView[] = $trafficView;
        return $this;
    }

    /**
     * isset trafficView
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrafficView($index)
    {
        return isset($this->trafficView[$index]);
    }

    /**
     * unset trafficView
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrafficView($index)
    {
        unset($this->trafficView[$index]);
    }

    /**
     * Gets as trafficView
     *
     * @return \Calcinai\Siri\Datex\TrafficViewType[]
     */
    public function getTrafficView()
    {
        return $this->trafficView;
    }

    /**
     * Sets a new trafficView
     *
     * @param \Calcinai\Siri\Datex\TrafficViewType[] $trafficView
     * @return self
     */
    public function setTrafficView(array $trafficView)
    {
        $this->trafficView = $trafficView;
        return $this;
    }

    /**
     * Gets as trafficViewPublicationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTrafficViewPublicationExtension()
    {
        return $this->trafficViewPublicationExtension;
    }

    /**
     * Sets a new trafficViewPublicationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $trafficViewPublicationExtension
     * @return self
     */
    public function setTrafficViewPublicationExtension(\Calcinai\Siri\Datex\ExtensionType $trafficViewPublicationExtension)
    {
        $this->trafficViewPublicationExtension = $trafficViewPublicationExtension;
        return $this;
    }


}

