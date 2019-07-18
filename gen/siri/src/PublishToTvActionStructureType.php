<?php

namespace Calcinai\Siri;

/**
 * Class representing PublishToTvActionStructureType
 *
 * Type for Notify situation to Tv.
 * XSD Type: PublishToTvActionStructure
 */
class PublishToTvActionStructureType extends ParameterisedActionStructureType
{

    /**
     * Publish to Teltext. Default is true.
     *
     * @property bool $ceefax
     */
    private $ceefax = null;

    /**
     * Publish to Ceefax. default is true.
     *
     * @property bool $teletext
     */
    private $teletext = null;

    /**
     * Gets as ceefax
     *
     * Publish to Teltext. Default is true.
     *
     * @return bool
     */
    public function getCeefax()
    {
        return $this->ceefax;
    }

    /**
     * Sets a new ceefax
     *
     * Publish to Teltext. Default is true.
     *
     * @param bool $ceefax
     * @return self
     */
    public function setCeefax($ceefax)
    {
        $this->ceefax = $ceefax;
        return $this;
    }

    /**
     * Gets as teletext
     *
     * Publish to Ceefax. default is true.
     *
     * @return bool
     */
    public function getTeletext()
    {
        return $this->teletext;
    }

    /**
     * Sets a new teletext
     *
     * Publish to Ceefax. default is true.
     *
     * @param bool $teletext
     * @return self
     */
    public function setTeletext($teletext)
    {
        $this->teletext = $teletext;
        return $this;
    }


}

