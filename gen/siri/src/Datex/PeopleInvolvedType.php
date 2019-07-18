<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PeopleInvolvedType
 *
 * Overview of people involved in the event and their injury status.
 * XSD Type: PeopleInvolved
 */
class PeopleInvolvedType
{

    /**
     * The number of people involved.
     *
     * @property int $numberOfPeople
     */
    private $numberOfPeople = null;

    /**
     * The injury status of the people involved.
     *
     * @property string $injuryStatus
     */
    private $injuryStatus = null;

    /**
     * The invlovement role of the people.
     *
     * @property string $involvementRole
     */
    private $involvementRole = null;

    /**
     * The type of people involved.
     *
     * @property string $typeOfPeopleInvolved
     */
    private $typeOfPeopleInvolved = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $peopleInvolvedExtension
     */
    private $peopleInvolvedExtension = null;

    /**
     * Gets as numberOfPeople
     *
     * The number of people involved.
     *
     * @return int
     */
    public function getNumberOfPeople()
    {
        return $this->numberOfPeople;
    }

    /**
     * Sets a new numberOfPeople
     *
     * The number of people involved.
     *
     * @param int $numberOfPeople
     * @return self
     */
    public function setNumberOfPeople($numberOfPeople)
    {
        $this->numberOfPeople = $numberOfPeople;
        return $this;
    }

    /**
     * Gets as injuryStatus
     *
     * The injury status of the people involved.
     *
     * @return string
     */
    public function getInjuryStatus()
    {
        return $this->injuryStatus;
    }

    /**
     * Sets a new injuryStatus
     *
     * The injury status of the people involved.
     *
     * @param string $injuryStatus
     * @return self
     */
    public function setInjuryStatus($injuryStatus)
    {
        $this->injuryStatus = $injuryStatus;
        return $this;
    }

    /**
     * Gets as involvementRole
     *
     * The invlovement role of the people.
     *
     * @return string
     */
    public function getInvolvementRole()
    {
        return $this->involvementRole;
    }

    /**
     * Sets a new involvementRole
     *
     * The invlovement role of the people.
     *
     * @param string $involvementRole
     * @return self
     */
    public function setInvolvementRole($involvementRole)
    {
        $this->involvementRole = $involvementRole;
        return $this;
    }

    /**
     * Gets as typeOfPeopleInvolved
     *
     * The type of people involved.
     *
     * @return string
     */
    public function getTypeOfPeopleInvolved()
    {
        return $this->typeOfPeopleInvolved;
    }

    /**
     * Sets a new typeOfPeopleInvolved
     *
     * The type of people involved.
     *
     * @param string $typeOfPeopleInvolved
     * @return self
     */
    public function setTypeOfPeopleInvolved($typeOfPeopleInvolved)
    {
        $this->typeOfPeopleInvolved = $typeOfPeopleInvolved;
        return $this;
    }

    /**
     * Gets as peopleInvolvedExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPeopleInvolvedExtension()
    {
        return $this->peopleInvolvedExtension;
    }

    /**
     * Sets a new peopleInvolvedExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $peopleInvolvedExtension
     * @return self
     */
    public function setPeopleInvolvedExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $peopleInvolvedExtension)
    {
        $this->peopleInvolvedExtension = $peopleInvolvedExtension;
        return $this;
    }


}

