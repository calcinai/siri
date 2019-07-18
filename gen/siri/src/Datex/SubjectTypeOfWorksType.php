<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing SubjectTypeOfWorksType
 *
 * The type of subject to which the roadworks are associated.
 * XSD Type: SubjectTypeOfWorks
 */
class SubjectTypeOfWorksType
{

    /**
     * The subject of the roadworks (i.e on what the construction or maintenance work is being performed).
     *
     * @property string $subjectTypeOfWorks
     */
    private $subjectTypeOfWorks = null;

    /**
     * The number of subjects on which the roadworks (construction or maintenance) are being performed.
     *
     * @property int $numberOfSubjects
     */
    private $numberOfSubjects = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $subjectTypeOfWorksExtension
     */
    private $subjectTypeOfWorksExtension = null;

    /**
     * Gets as subjectTypeOfWorks
     *
     * The subject of the roadworks (i.e on what the construction or maintenance work is being performed).
     *
     * @return string
     */
    public function getSubjectTypeOfWorks()
    {
        return $this->subjectTypeOfWorks;
    }

    /**
     * Sets a new subjectTypeOfWorks
     *
     * The subject of the roadworks (i.e on what the construction or maintenance work is being performed).
     *
     * @param string $subjectTypeOfWorks
     * @return self
     */
    public function setSubjectTypeOfWorks($subjectTypeOfWorks)
    {
        $this->subjectTypeOfWorks = $subjectTypeOfWorks;
        return $this;
    }

    /**
     * Gets as numberOfSubjects
     *
     * The number of subjects on which the roadworks (construction or maintenance) are being performed.
     *
     * @return int
     */
    public function getNumberOfSubjects()
    {
        return $this->numberOfSubjects;
    }

    /**
     * Sets a new numberOfSubjects
     *
     * The number of subjects on which the roadworks (construction or maintenance) are being performed.
     *
     * @param int $numberOfSubjects
     * @return self
     */
    public function setNumberOfSubjects($numberOfSubjects)
    {
        $this->numberOfSubjects = $numberOfSubjects;
        return $this;
    }

    /**
     * Gets as subjectTypeOfWorksExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getSubjectTypeOfWorksExtension()
    {
        return $this->subjectTypeOfWorksExtension;
    }

    /**
     * Sets a new subjectTypeOfWorksExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $subjectTypeOfWorksExtension
     * @return self
     */
    public function setSubjectTypeOfWorksExtension(\Calcinai\Siri\Datex\ExtensionType $subjectTypeOfWorksExtension)
    {
        $this->subjectTypeOfWorksExtension = $subjectTypeOfWorksExtension;
        return $this;
    }


}

