<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing LifeCycleManagementType
 *
 * Information relating to the life cycle management of the situation record.
 * XSD Type: LifeCycleManagement
 */
class LifeCycleManagementType
{

    /**
     * Indication that all the element information previously sent is not considered valid, due to an incorrect content.
     *
     * @property bool $cancel
     */
    private $cancel = null;

    /**
     * A binary attribute specifying whether the situation element is finished (yes) or not (no).
     *
     * @property bool $end
     */
    private $end = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $lifeCycleManagementExtension
     */
    private $lifeCycleManagementExtension = null;

    /**
     * Gets as cancel
     *
     * Indication that all the element information previously sent is not considered valid, due to an incorrect content.
     *
     * @return bool
     */
    public function getCancel()
    {
        return $this->cancel;
    }

    /**
     * Sets a new cancel
     *
     * Indication that all the element information previously sent is not considered valid, due to an incorrect content.
     *
     * @param bool $cancel
     * @return self
     */
    public function setCancel($cancel)
    {
        $this->cancel = $cancel;
        return $this;
    }

    /**
     * Gets as end
     *
     * A binary attribute specifying whether the situation element is finished (yes) or not (no).
     *
     * @return bool
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * A binary attribute specifying whether the situation element is finished (yes) or not (no).
     *
     * @param bool $end
     * @return self
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as lifeCycleManagementExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getLifeCycleManagementExtension()
    {
        return $this->lifeCycleManagementExtension;
    }

    /**
     * Sets a new lifeCycleManagementExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $lifeCycleManagementExtension
     * @return self
     */
    public function setLifeCycleManagementExtension(\Calcinai\Siri\Datex\ExtensionType $lifeCycleManagementExtension)
    {
        $this->lifeCycleManagementExtension = $lifeCycleManagementExtension;
        return $this;
    }


}

