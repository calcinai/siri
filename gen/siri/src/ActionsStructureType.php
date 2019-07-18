<?php

namespace Calcinai\Siri;

/**
 * Class representing ActionsStructureType
 *
 * Type for list of actions.
 * XSD Type: ActionsStructure
 */
class ActionsStructureType
{

    /**
     * @property \Calcinai\Siri\PublishToWebAction $publishToWebAction
     */
    private $publishToWebAction = null;

    /**
     * @property \Calcinai\Siri\PublishToMobileAction $publishToMobileAction
     */
    private $publishToMobileAction = null;

    /**
     * @property \Calcinai\Siri\PublishToTvAction $publishToTvAction
     */
    private $publishToTvAction = null;

    /**
     * @property \Calcinai\Siri\PublishToAlertsAction $publishToAlertsAction
     */
    private $publishToAlertsAction = null;

    /**
     * @property \Calcinai\Siri\ManualAction $manualAction
     */
    private $manualAction = null;

    /**
     * @property \Calcinai\Siri\NotifyByEmailAction $notifyByEmailAction
     */
    private $notifyByEmailAction = null;

    /**
     * @property \Calcinai\Siri\NotifyBySmsAction $notifyBySmsAction
     */
    private $notifyBySmsAction = null;

    /**
     * @property \Calcinai\Siri\NotifyByPagerAction $notifyByPagerAction
     */
    private $notifyByPagerAction = null;

    /**
     * @property \Calcinai\Siri\NotifyUserAction $notifyUserAction
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
     * @return \Calcinai\Siri\PublishToWebAction
     */
    public function getPublishToWebAction()
    {
        return $this->publishToWebAction;
    }

    /**
     * Sets a new publishToWebAction
     *
     * @param \Calcinai\Siri\PublishToWebAction $publishToWebAction
     * @return self
     */
    public function setPublishToWebAction(\Calcinai\Siri\PublishToWebAction $publishToWebAction)
    {
        $this->publishToWebAction = $publishToWebAction;
        return $this;
    }

    /**
     * Gets as publishToMobileAction
     *
     * @return \Calcinai\Siri\PublishToMobileAction
     */
    public function getPublishToMobileAction()
    {
        return $this->publishToMobileAction;
    }

    /**
     * Sets a new publishToMobileAction
     *
     * @param \Calcinai\Siri\PublishToMobileAction $publishToMobileAction
     * @return self
     */
    public function setPublishToMobileAction(\Calcinai\Siri\PublishToMobileAction $publishToMobileAction)
    {
        $this->publishToMobileAction = $publishToMobileAction;
        return $this;
    }

    /**
     * Gets as publishToTvAction
     *
     * @return \Calcinai\Siri\PublishToTvAction
     */
    public function getPublishToTvAction()
    {
        return $this->publishToTvAction;
    }

    /**
     * Sets a new publishToTvAction
     *
     * @param \Calcinai\Siri\PublishToTvAction $publishToTvAction
     * @return self
     */
    public function setPublishToTvAction(\Calcinai\Siri\PublishToTvAction $publishToTvAction)
    {
        $this->publishToTvAction = $publishToTvAction;
        return $this;
    }

    /**
     * Gets as publishToAlertsAction
     *
     * @return \Calcinai\Siri\PublishToAlertsAction
     */
    public function getPublishToAlertsAction()
    {
        return $this->publishToAlertsAction;
    }

    /**
     * Sets a new publishToAlertsAction
     *
     * @param \Calcinai\Siri\PublishToAlertsAction $publishToAlertsAction
     * @return self
     */
    public function setPublishToAlertsAction(\Calcinai\Siri\PublishToAlertsAction $publishToAlertsAction)
    {
        $this->publishToAlertsAction = $publishToAlertsAction;
        return $this;
    }

    /**
     * Gets as manualAction
     *
     * @return \Calcinai\Siri\ManualAction
     */
    public function getManualAction()
    {
        return $this->manualAction;
    }

    /**
     * Sets a new manualAction
     *
     * @param \Calcinai\Siri\ManualAction $manualAction
     * @return self
     */
    public function setManualAction(\Calcinai\Siri\ManualAction $manualAction)
    {
        $this->manualAction = $manualAction;
        return $this;
    }

    /**
     * Gets as notifyByEmailAction
     *
     * @return \Calcinai\Siri\NotifyByEmailAction
     */
    public function getNotifyByEmailAction()
    {
        return $this->notifyByEmailAction;
    }

    /**
     * Sets a new notifyByEmailAction
     *
     * @param \Calcinai\Siri\NotifyByEmailAction $notifyByEmailAction
     * @return self
     */
    public function setNotifyByEmailAction(\Calcinai\Siri\NotifyByEmailAction $notifyByEmailAction)
    {
        $this->notifyByEmailAction = $notifyByEmailAction;
        return $this;
    }

    /**
     * Gets as notifyBySmsAction
     *
     * @return \Calcinai\Siri\NotifyBySmsAction
     */
    public function getNotifyBySmsAction()
    {
        return $this->notifyBySmsAction;
    }

    /**
     * Sets a new notifyBySmsAction
     *
     * @param \Calcinai\Siri\NotifyBySmsAction $notifyBySmsAction
     * @return self
     */
    public function setNotifyBySmsAction(\Calcinai\Siri\NotifyBySmsAction $notifyBySmsAction)
    {
        $this->notifyBySmsAction = $notifyBySmsAction;
        return $this;
    }

    /**
     * Gets as notifyByPagerAction
     *
     * @return \Calcinai\Siri\NotifyByPagerAction
     */
    public function getNotifyByPagerAction()
    {
        return $this->notifyByPagerAction;
    }

    /**
     * Sets a new notifyByPagerAction
     *
     * @param \Calcinai\Siri\NotifyByPagerAction $notifyByPagerAction
     * @return self
     */
    public function setNotifyByPagerAction(\Calcinai\Siri\NotifyByPagerAction $notifyByPagerAction)
    {
        $this->notifyByPagerAction = $notifyByPagerAction;
        return $this;
    }

    /**
     * Gets as notifyUserAction
     *
     * @return \Calcinai\Siri\NotifyUserAction
     */
    public function getNotifyUserAction()
    {
        return $this->notifyUserAction;
    }

    /**
     * Sets a new notifyUserAction
     *
     * @param \Calcinai\Siri\NotifyUserAction $notifyUserAction
     * @return self
     */
    public function setNotifyUserAction(\Calcinai\Siri\NotifyUserAction $notifyUserAction)
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

