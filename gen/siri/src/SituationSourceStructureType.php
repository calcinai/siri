<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SituationSourceStructureType
 *
 * Type for a source ie provider of information.
 * XSD Type: SituationSourceStructure
 */
class SituationSourceStructureType
{

    /**
     * Country of origin of source element.
     *
     * @property string $country
     */
    private $country = null;

    /**
     * Nature of Source.
     *
     * @property string $sourceType
     */
    private $sourceType = null;

    /**
     * Email of Supplier of information.
     *
     * @property string $email
     */
    private $email = null;

    /**
     * Phone number of Supplier of information.
     *
     * @property string $phone
     */
    private $phone = null;

    /**
     * Fax number of Supplier of information.
     *
     * @property string $fax
     */
    private $fax = null;

    /**
     * Information was obtained from a web site URL of site and/or page.
     *
     * @property string $web
     */
    private $web = null;

    /**
     * Other information about source.
     *
     * @property string $other
     */
    private $other = null;

    /**
     * Nature of method used to get Source.
     *
     * @property string $sourceMethod
     */
    private $sourceMethod = null;

    /**
     * Identifies the Agent, i.e. Capture client user who input an situation. Available for use in intranet exchange of situations.
     *
     * @property string $agentReference
     */
    private $agentReference = null;

    /**
     * Name of for source.
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name
     */
    private $name = null;

    /**
     * Job title of Source.
     *
     * @property string $sourceRole
     */
    private $sourceRole = null;

    /**
     * Time of communication of message, if different from creation time.
     *
     * @property \DateTime $timeOfCommunication
     */
    private $timeOfCommunication = null;

    /**
     * External system reference to situation.
     *
     * @property string $externalCode
     */
    private $externalCode = null;

    /**
     * Electronic file / attachment containing information about situation.
     *
     * @property string $sourceFile
     */
    private $sourceFile = null;

    /**
     * Gets as country
     *
     * Country of origin of source element.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Country of origin of source element.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as sourceType
     *
     * Nature of Source.
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Sets a new sourceType
     *
     * Nature of Source.
     *
     * @param string $sourceType
     * @return self
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * Gets as email
     *
     * Email of Supplier of information.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email of Supplier of information.
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as phone
     *
     * Phone number of Supplier of information.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * Phone number of Supplier of information.
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as fax
     *
     * Fax number of Supplier of information.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * Fax number of Supplier of information.
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as web
     *
     * Information was obtained from a web site URL of site and/or page.
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Sets a new web
     *
     * Information was obtained from a web site URL of site and/or page.
     *
     * @param string $web
     * @return self
     */
    public function setWeb($web)
    {
        $this->web = $web;
        return $this;
    }

    /**
     * Gets as other
     *
     * Other information about source.
     *
     * @return string
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * Other information about source.
     *
     * @param string $other
     * @return self
     */
    public function setOther($other)
    {
        $this->other = $other;
        return $this;
    }

    /**
     * Gets as sourceMethod
     *
     * Nature of method used to get Source.
     *
     * @return string
     */
    public function getSourceMethod()
    {
        return $this->sourceMethod;
    }

    /**
     * Sets a new sourceMethod
     *
     * Nature of method used to get Source.
     *
     * @param string $sourceMethod
     * @return self
     */
    public function setSourceMethod($sourceMethod)
    {
        $this->sourceMethod = $sourceMethod;
        return $this;
    }

    /**
     * Gets as agentReference
     *
     * Identifies the Agent, i.e. Capture client user who input an situation. Available for use in intranet exchange of situations.
     *
     * @return string
     */
    public function getAgentReference()
    {
        return $this->agentReference;
    }

    /**
     * Sets a new agentReference
     *
     * Identifies the Agent, i.e. Capture client user who input an situation. Available for use in intranet exchange of situations.
     *
     * @param string $agentReference
     * @return self
     */
    public function setAgentReference($agentReference)
    {
        $this->agentReference = $agentReference;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name of for source.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of for source.
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name
     * @return self
     */
    public function setName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as sourceRole
     *
     * Job title of Source.
     *
     * @return string
     */
    public function getSourceRole()
    {
        return $this->sourceRole;
    }

    /**
     * Sets a new sourceRole
     *
     * Job title of Source.
     *
     * @param string $sourceRole
     * @return self
     */
    public function setSourceRole($sourceRole)
    {
        $this->sourceRole = $sourceRole;
        return $this;
    }

    /**
     * Gets as timeOfCommunication
     *
     * Time of communication of message, if different from creation time.
     *
     * @return \DateTime
     */
    public function getTimeOfCommunication()
    {
        return $this->timeOfCommunication;
    }

    /**
     * Sets a new timeOfCommunication
     *
     * Time of communication of message, if different from creation time.
     *
     * @param \DateTime $timeOfCommunication
     * @return self
     */
    public function setTimeOfCommunication(\DateTime $timeOfCommunication)
    {
        $this->timeOfCommunication = $timeOfCommunication;
        return $this;
    }

    /**
     * Gets as externalCode
     *
     * External system reference to situation.
     *
     * @return string
     */
    public function getExternalCode()
    {
        return $this->externalCode;
    }

    /**
     * Sets a new externalCode
     *
     * External system reference to situation.
     *
     * @param string $externalCode
     * @return self
     */
    public function setExternalCode($externalCode)
    {
        $this->externalCode = $externalCode;
        return $this;
    }

    /**
     * Gets as sourceFile
     *
     * Electronic file / attachment containing information about situation.
     *
     * @return string
     */
    public function getSourceFile()
    {
        return $this->sourceFile;
    }

    /**
     * Sets a new sourceFile
     *
     * Electronic file / attachment containing information about situation.
     *
     * @param string $sourceFile
     * @return self
     */
    public function setSourceFile($sourceFile)
    {
        $this->sourceFile = $sourceFile;
        return $this;
    }


}

