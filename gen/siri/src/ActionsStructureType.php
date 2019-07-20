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
     * @property \Calcinai\Siri\Objects\PublishToWebAction[] $publishToWebAction
     */
    private $publishToWebAction = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\PublishToMobileAction[] $publishToMobileAction
     */
    private $publishToMobileAction = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\PublishToTvAction $publishToTvAction
     */
    private $publishToTvAction = null;

    /**
     * @property \Calcinai\Siri\Objects\PublishToAlertsAction[] $publishToAlertsAction
     */
    private $publishToAlertsAction = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\ManualAction[] $manualAction
     */
    private $manualAction = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\NotifyByEmailAction[] $notifyByEmailAction
     */
    private $notifyByEmailAction = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\NotifyBySmsAction $notifyBySmsAction
     */
    private $notifyBySmsAction = null;

    /**
     * @property \Calcinai\Siri\Objects\NotifyByPagerAction[] $notifyByPagerAction
     */
    private $notifyByPagerAction = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\NotifyUserAction[] $notifyUserAction
     */
    private $notifyUserAction = [
        
    ];

    /**
     * Extension point
     *
     * @property mixed $extensions
     */
    private $extensions = null;

    /**
     * Adds as publishToWebAction
     *
     * @return self
     * @param \Calcinai\Siri\Objects\PublishToWebAction $publishToWebAction
     */
    public function addToPublishToWebAction(\Calcinai\Siri\Objects\PublishToWebAction $publishToWebAction)
    {
        $this->publishToWebAction[] = $publishToWebAction;
        return $this;
    }

    /**
     * isset publishToWebAction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPublishToWebAction($index)
    {
        return isset($this->publishToWebAction[$index]);
    }

    /**
     * unset publishToWebAction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPublishToWebAction($index)
    {
        unset($this->publishToWebAction[$index]);
    }

    /**
     * Gets as publishToWebAction
     *
     * @return \Calcinai\Siri\Objects\PublishToWebAction[]
     */
    public function getPublishToWebAction()
    {
        return $this->publishToWebAction;
    }

    /**
     * Sets a new publishToWebAction
     *
     * @param \Calcinai\Siri\Objects\PublishToWebAction[] $publishToWebAction
     * @return self
     */
    public function setPublishToWebAction(array $publishToWebAction)
    {
        $this->publishToWebAction = $publishToWebAction;
        return $this;
    }

    /**
     * Adds as publishToMobileAction
     *
     * @return self
     * @param \Calcinai\Siri\Objects\PublishToMobileAction $publishToMobileAction
     */
    public function addToPublishToMobileAction(\Calcinai\Siri\Objects\PublishToMobileAction $publishToMobileAction)
    {
        $this->publishToMobileAction[] = $publishToMobileAction;
        return $this;
    }

    /**
     * isset publishToMobileAction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPublishToMobileAction($index)
    {
        return isset($this->publishToMobileAction[$index]);
    }

    /**
     * unset publishToMobileAction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPublishToMobileAction($index)
    {
        unset($this->publishToMobileAction[$index]);
    }

    /**
     * Gets as publishToMobileAction
     *
     * @return \Calcinai\Siri\Objects\PublishToMobileAction[]
     */
    public function getPublishToMobileAction()
    {
        return $this->publishToMobileAction;
    }

    /**
     * Sets a new publishToMobileAction
     *
     * @param \Calcinai\Siri\Objects\PublishToMobileAction[] $publishToMobileAction
     * @return self
     */
    public function setPublishToMobileAction(array $publishToMobileAction)
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
     * Adds as publishToAlertsAction
     *
     * @return self
     * @param \Calcinai\Siri\Objects\PublishToAlertsAction $publishToAlertsAction
     */
    public function addToPublishToAlertsAction(\Calcinai\Siri\Objects\PublishToAlertsAction $publishToAlertsAction)
    {
        $this->publishToAlertsAction[] = $publishToAlertsAction;
        return $this;
    }

    /**
     * isset publishToAlertsAction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPublishToAlertsAction($index)
    {
        return isset($this->publishToAlertsAction[$index]);
    }

    /**
     * unset publishToAlertsAction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPublishToAlertsAction($index)
    {
        unset($this->publishToAlertsAction[$index]);
    }

    /**
     * Gets as publishToAlertsAction
     *
     * @return \Calcinai\Siri\Objects\PublishToAlertsAction[]
     */
    public function getPublishToAlertsAction()
    {
        return $this->publishToAlertsAction;
    }

    /**
     * Sets a new publishToAlertsAction
     *
     * @param \Calcinai\Siri\Objects\PublishToAlertsAction[] $publishToAlertsAction
     * @return self
     */
    public function setPublishToAlertsAction(array $publishToAlertsAction)
    {
        $this->publishToAlertsAction = $publishToAlertsAction;
        return $this;
    }

    /**
     * Adds as manualAction
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ManualAction $manualAction
     */
    public function addToManualAction(\Calcinai\Siri\Objects\ManualAction $manualAction)
    {
        $this->manualAction[] = $manualAction;
        return $this;
    }

    /**
     * isset manualAction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManualAction($index)
    {
        return isset($this->manualAction[$index]);
    }

    /**
     * unset manualAction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManualAction($index)
    {
        unset($this->manualAction[$index]);
    }

    /**
     * Gets as manualAction
     *
     * @return \Calcinai\Siri\Objects\ManualAction[]
     */
    public function getManualAction()
    {
        return $this->manualAction;
    }

    /**
     * Sets a new manualAction
     *
     * @param \Calcinai\Siri\Objects\ManualAction[] $manualAction
     * @return self
     */
    public function setManualAction(array $manualAction)
    {
        $this->manualAction = $manualAction;
        return $this;
    }

    /**
     * Adds as notifyByEmailAction
     *
     * @return self
     * @param \Calcinai\Siri\Objects\NotifyByEmailAction $notifyByEmailAction
     */
    public function addToNotifyByEmailAction(\Calcinai\Siri\Objects\NotifyByEmailAction $notifyByEmailAction)
    {
        $this->notifyByEmailAction[] = $notifyByEmailAction;
        return $this;
    }

    /**
     * isset notifyByEmailAction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotifyByEmailAction($index)
    {
        return isset($this->notifyByEmailAction[$index]);
    }

    /**
     * unset notifyByEmailAction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotifyByEmailAction($index)
    {
        unset($this->notifyByEmailAction[$index]);
    }

    /**
     * Gets as notifyByEmailAction
     *
     * @return \Calcinai\Siri\Objects\NotifyByEmailAction[]
     */
    public function getNotifyByEmailAction()
    {
        return $this->notifyByEmailAction;
    }

    /**
     * Sets a new notifyByEmailAction
     *
     * @param \Calcinai\Siri\Objects\NotifyByEmailAction[] $notifyByEmailAction
     * @return self
     */
    public function setNotifyByEmailAction(array $notifyByEmailAction)
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
     * Adds as notifyByPagerAction
     *
     * @return self
     * @param \Calcinai\Siri\Objects\NotifyByPagerAction $notifyByPagerAction
     */
    public function addToNotifyByPagerAction(\Calcinai\Siri\Objects\NotifyByPagerAction $notifyByPagerAction)
    {
        $this->notifyByPagerAction[] = $notifyByPagerAction;
        return $this;
    }

    /**
     * isset notifyByPagerAction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotifyByPagerAction($index)
    {
        return isset($this->notifyByPagerAction[$index]);
    }

    /**
     * unset notifyByPagerAction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotifyByPagerAction($index)
    {
        unset($this->notifyByPagerAction[$index]);
    }

    /**
     * Gets as notifyByPagerAction
     *
     * @return \Calcinai\Siri\Objects\NotifyByPagerAction[]
     */
    public function getNotifyByPagerAction()
    {
        return $this->notifyByPagerAction;
    }

    /**
     * Sets a new notifyByPagerAction
     *
     * @param \Calcinai\Siri\Objects\NotifyByPagerAction[] $notifyByPagerAction
     * @return self
     */
    public function setNotifyByPagerAction(array $notifyByPagerAction)
    {
        $this->notifyByPagerAction = $notifyByPagerAction;
        return $this;
    }

    /**
     * Adds as notifyUserAction
     *
     * @return self
     * @param \Calcinai\Siri\Objects\NotifyUserAction $notifyUserAction
     */
    public function addToNotifyUserAction(\Calcinai\Siri\Objects\NotifyUserAction $notifyUserAction)
    {
        $this->notifyUserAction[] = $notifyUserAction;
        return $this;
    }

    /**
     * isset notifyUserAction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotifyUserAction($index)
    {
        return isset($this->notifyUserAction[$index]);
    }

    /**
     * unset notifyUserAction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotifyUserAction($index)
    {
        unset($this->notifyUserAction[$index]);
    }

    /**
     * Gets as notifyUserAction
     *
     * @return \Calcinai\Siri\Objects\NotifyUserAction[]
     */
    public function getNotifyUserAction()
    {
        return $this->notifyUserAction;
    }

    /**
     * Sets a new notifyUserAction
     *
     * @param \Calcinai\Siri\Objects\NotifyUserAction[] $notifyUserAction
     * @return self
     */
    public function setNotifyUserAction(array $notifyUserAction)
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

