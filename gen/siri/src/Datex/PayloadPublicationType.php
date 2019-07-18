<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing PayloadPublicationType
 *
 * A payload publication of traffic related information or associated management information created at a specific point in time that can be exchanged via a DATEX II interface.
 * XSD Type: PayloadPublication
 */
class PayloadPublicationType
{

    /**
     * @property string $lang
     */
    private $lang = null;

    /**
     * A classification of the information which is to be found in the publications originating from the particular feed (URL). Different URLs from one source may be used to filter the information which is made available to clients (e.g. by type or location).
     *
     * @property string $feedType
     */
    private $feedType = null;

    /**
     * Date/time at which the payload publication was created.
     *
     * @property \DateTime $publicationTime
     */
    private $publicationTime = null;

    /**
     * @property \Calcinai\Siri\Datex\InternationalIdentifierType $publicationCreator
     */
    private $publicationCreator = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $payloadPublicationExtension
     */
    private $payloadPublicationExtension = null;

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

    /**
     * Gets as feedType
     *
     * A classification of the information which is to be found in the publications originating from the particular feed (URL). Different URLs from one source may be used to filter the information which is made available to clients (e.g. by type or location).
     *
     * @return string
     */
    public function getFeedType()
    {
        return $this->feedType;
    }

    /**
     * Sets a new feedType
     *
     * A classification of the information which is to be found in the publications originating from the particular feed (URL). Different URLs from one source may be used to filter the information which is made available to clients (e.g. by type or location).
     *
     * @param string $feedType
     * @return self
     */
    public function setFeedType($feedType)
    {
        $this->feedType = $feedType;
        return $this;
    }

    /**
     * Gets as publicationTime
     *
     * Date/time at which the payload publication was created.
     *
     * @return \DateTime
     */
    public function getPublicationTime()
    {
        return $this->publicationTime;
    }

    /**
     * Sets a new publicationTime
     *
     * Date/time at which the payload publication was created.
     *
     * @param \DateTime $publicationTime
     * @return self
     */
    public function setPublicationTime(\DateTime $publicationTime)
    {
        $this->publicationTime = $publicationTime;
        return $this;
    }

    /**
     * Gets as publicationCreator
     *
     * @return \Calcinai\Siri\Datex\InternationalIdentifierType
     */
    public function getPublicationCreator()
    {
        return $this->publicationCreator;
    }

    /**
     * Sets a new publicationCreator
     *
     * @param \Calcinai\Siri\Datex\InternationalIdentifierType $publicationCreator
     * @return self
     */
    public function setPublicationCreator(\Calcinai\Siri\Datex\InternationalIdentifierType $publicationCreator)
    {
        $this->publicationCreator = $publicationCreator;
        return $this;
    }

    /**
     * Gets as payloadPublicationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getPayloadPublicationExtension()
    {
        return $this->payloadPublicationExtension;
    }

    /**
     * Sets a new payloadPublicationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $payloadPublicationExtension
     * @return self
     */
    public function setPayloadPublicationExtension(\Calcinai\Siri\Datex\ExtensionType $payloadPublicationExtension)
    {
        $this->payloadPublicationExtension = $payloadPublicationExtension;
        return $this;
    }


}

