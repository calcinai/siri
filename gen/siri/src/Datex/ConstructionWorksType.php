<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ConstructionWorksType
 *
 * Roadworks involving the construction of new infrastructure.
 * XSD Type: ConstructionWorks
 */
class ConstructionWorksType extends RoadworksType
{

    /**
     * The type of construction work being performed.
     *
     * @property string $constructionWorkType
     */
    private $constructionWorkType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $constructionWorksExtension
     */
    private $constructionWorksExtension = null;

    /**
     * Gets as constructionWorkType
     *
     * The type of construction work being performed.
     *
     * @return string
     */
    public function getConstructionWorkType()
    {
        return $this->constructionWorkType;
    }

    /**
     * Sets a new constructionWorkType
     *
     * The type of construction work being performed.
     *
     * @param string $constructionWorkType
     * @return self
     */
    public function setConstructionWorkType($constructionWorkType)
    {
        $this->constructionWorkType = $constructionWorkType;
        return $this;
    }

    /**
     * Gets as constructionWorksExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getConstructionWorksExtension()
    {
        return $this->constructionWorksExtension;
    }

    /**
     * Sets a new constructionWorksExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $constructionWorksExtension
     * @return self
     */
    public function setConstructionWorksExtension(\Calcinai\Siri\Datex\ExtensionType $constructionWorksExtension)
    {
        $this->constructionWorksExtension = $constructionWorksExtension;
        return $this;
    }


}

