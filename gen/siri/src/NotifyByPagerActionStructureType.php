<?php

namespace Calcinai\Siri;

/**
 * Class representing NotifyByPagerActionStructureType
 *
 * Type for Notify user by Pager.
 * XSD Type: NotifyByPagerActionStructure
 */
class NotifyByPagerActionStructureType extends PushedActionStructureType
{

    /**
     * Identifier of pager group to be notfied.
     *
     * @property string $pagerGroupRef
     */
    private $pagerGroupRef = null;

    /**
     * Pager number of pager to be notfied.
     *
     * @property string $pager
     */
    private $pager = null;

    /**
     * Gets as pagerGroupRef
     *
     * Identifier of pager group to be notfied.
     *
     * @return string
     */
    public function getPagerGroupRef()
    {
        return $this->pagerGroupRef;
    }

    /**
     * Sets a new pagerGroupRef
     *
     * Identifier of pager group to be notfied.
     *
     * @param string $pagerGroupRef
     * @return self
     */
    public function setPagerGroupRef($pagerGroupRef)
    {
        $this->pagerGroupRef = $pagerGroupRef;
        return $this;
    }

    /**
     * Gets as pager
     *
     * Pager number of pager to be notfied.
     *
     * @return string
     */
    public function getPager()
    {
        return $this->pager;
    }

    /**
     * Sets a new pager
     *
     * Pager number of pager to be notfied.
     *
     * @param string $pager
     * @return self
     */
    public function setPager($pager)
    {
        $this->pager = $pager;
        return $this;
    }


}

