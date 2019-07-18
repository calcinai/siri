<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ActionsStructureType
 *
 * Type for list of actions.
 * XSD Type: ActionsStructure
 */
class ActionsStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\PublishToWebAction $publishToWebAction
     */
    private $publishToWebAction = null;

    /**
     * @property \Calcinai\Siri\Objects\PublishToMobileAction $publishToMobileAction
     */
    private $publishToMobileAction = null;

    /**
     * @property \Calcinai\Siri\Objects\PublishToTvAction $publishToTvAction
     */
    private $publishToTvAction = null;

    /**
     * @property \Calcinai\Siri\Objects\PublishToAlertsAction $publishToAlertsAction
     */
    private $publishToAlertsAction = null;

    /**
     * @property \Calcinai\Siri\Objects\ManualAction $manualAction
     */
    private $manualAction = null;

    /**
     * @property \Calcinai\Siri\Objects\NotifyByEmailAction $notifyByEmailAction
     */
    private $notifyByEmailAction = null;

    /**
     * @property \Calcinai\Siri\Objects\NotifyBySmsAction $notifyBySmsAction
     */
    private $notifyBySmsAction = null;

    /**
     * @property \Calcinai\Siri\Objects\NotifyByPagerAction $notifyByPagerAction
     */
    private $notifyByPagerAction = null;

    /**
     * @property \Calcinai\Siri\Objects\NotifyUserAction $notifyUserAction
     */
    private $notifyUserAction = null;

    /**
     * Extension point
     *
     * @property mixed $extensions
     */
    private $extensions = null;

    /**
     * Gets as publishToWebAction
     *
     * @return \Calcinai\Siri\Objects\PublishToWebAction
     */
    public function getPublishToWebAction()
    {
        return $this->publishToWebAction;
    }

    /**
     * Sets a new publishToWebAction
     *
     * @param \Calcinai\Siri\Objects\PublishToWebAction $publishToWebAction
     * @return self
     */
    public function setPublishToWebAction(\Calcinai\Siri\Objects\PublishToWebAction $publishToWebAction)
    {
        $this->publishToWebAction = $publishToWebAction;
        return $this;
    }

    /**
     * Gets as publishToMobileAction
     *
     * @return \Calcinai\Siri\Objects\PublishToMobileAction
     */
    public function getPublishToMobileAction()
    {
        return $this->publishToMobileAction;
    }

    /**
     * Sets a new publishToMobileAction
     *
     * @param \Calcinai\Siri\Objects\PublishToMobileAction $publishToMobileAction
     * @return self
     */
    public function setPublishToMobileAction(\Calcinai\Siri\Objects\PublishToMobileAction $publishToMobileAction)
    {
        $this->publishToMobileAction = $publishToMobileAction;
        return $this;
    }

    /**
     * Gets as publishToTvAction
     *
     * @return \Calcinai\Siri\Objects\PublishToTvAction
     */
    public function getPublishToTvAction()
    {
        return $this->publishToTvAction;
    }

    /**
     * Sets a new publishToTvAction
     *
     * @param \Calcinai\Siri\Objects\PublishToTvAction $publishToTvAction
     * @return self
     */
    public function setPublishToTvAction(\Calcinai\Siri\Objects\PublishToTvAction $publishToTvAction)
    {
        $this->publishToTvAction = $publishToTvAction;
        return $this;
    }

    /**
     * Gets as publishToAlertsAction
     *
     * @return \Calcinai\Siri\Objects\PublishToAlertsAction
     */
    public function getPublishToAlertsAction()
    {
        return $this->publishToAlertsAction;
    }

    /**
     * Sets a new publishToAlertsAction
     *
     * @param \Calcinai\Siri\Objects\PublishToAlertsAction $publishToAlertsAction
     * @return self
     */
    public function setPublishToAlertsAction(\Calcinai\Siri\Objects\PublishToAlertsAction $publishToAlertsAction)
    {
        $this->publishToAlertsAction = $publishToAlertsAction;
        return $this;
    }

    /**
     * Gets as manualAction
     *
     * @return \Calcinai\Siri\Objects\ManualAction
     */
    public function getManualAction()
    {
        return $this->manualAction;
    }

    /**
     * Sets a new manualAction
     *
     * @param \Calcinai\Siri\Objects\ManualAction $manualAction
     * @return self
     */
    public function setManualAction(\Calcinai\Siri\Objects\ManualAction $manualAction)
    {
        $this->manualAction = $manualAction;
        return $this;
    }

    /**
     * Gets as notifyByEmailAction
     *
     * @return \Calcinai\Siri\Objects\NotifyByEmailAction
     */
    public function getNotifyByEmailAction()
    {
        return $this->notifyByEmailAction;
    }

    /**
     * Sets a new notifyByEmailAction
     *
     * @param \Calcinai\Siri\Objects\NotifyByEmailAction $notifyByEmailAction
     * @return self
     */
    public function setNotifyByEmailAction(\Calcinai\Siri\Objects\NotifyByEmailAction $notifyByEmailAction)
    {
        $this->notifyByEmailAction = $notifyByEmailAction;
        return $this;
    }

    /**
     * Gets as notifyBySmsAction
     *
     * @return \Calcinai\Siri\Objects\NotifyBySmsAction
     */
    public function getNotifyBySmsAction()
    {
        return $this->notifyBySmsAction;
    }

    /**
     * Sets a new notifyBySmsAction
     *
     * @param \Calcinai\Siri\Objects\NotifyBySmsAction $notifyBySmsAction
     * @return self
     */
    public function setNotifyBySmsAction(\Calcinai\Siri\Objects\NotifyBySmsAction $notifyBySmsAction)
    {
        $this->notifyBySmsAction = $notifyBySmsAction;
        return $this;
    }

    /**
     * Gets as notifyByPagerAction
     *
     * @return \Calcinai\Siri\Objects\NotifyByPagerAction
     */
    public function getNotifyByPagerAction()
    {
        return $this->notifyByPagerAction;
    }

    /**
     * Sets a new notifyByPagerAction
     *
     * @param \Calcinai\Siri\Objects\NotifyByPagerAction $notifyByPagerAction
     * @return self
     */
    public function setNotifyByPagerAction(\Calcinai\Siri\Objects\NotifyByPagerAction $notifyByPagerAction)
    {
        $this->notifyByPagerAction = $notifyByPagerAction;
        return $this;
    }

    /**
     * Gets as notifyUserAction
     *
     * @return \Calcinai\Siri\Objects\NotifyUserAction
     */
    public function getNotifyUserAction()
    {
        return $this->notifyUserAction;
    }

    /**
     * Sets a new notifyUserAction
     *
     * @param \Calcinai\Siri\Objects\NotifyUserAction $notifyUserAction
     * @return self
     */
    public function setNotifyUserAction(\Calcinai\Siri\Objects\NotifyUserAction $notifyUserAction)
    {
        $this->notifyUserAction = $notifyUserAction;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Extension point
     *
     * @return mixed
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * Extension point
     *
     * @param mixed $extensions
     * @return self
     */
    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

