<?php

namespace Calcinai\Siri\Objects\AnnotatedLineStructureType;

/**
 * Class representing DestinationsAType
 */
class DestinationsAType
{

    /**
     * @property \Calcinai\Siri\Objects\Destination[] $destination
     */
    private $destination = [
        
    ];

    /**
     * Adds as destination
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Destination $destination
     */
    public function addToDestination(\Calcinai\Siri\Objects\Destination $destination)
    {
        $this->destination[] = $destination;
        return $this;
    }

    /**
     * isset destination
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestination($index)
    {
        return isset($this->destination[$index]);
    }

    /**
     * unset destination
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestination($index)
    {
        unset($this->destination[$index]);
    }

    /**
     * Gets as destination
     *
     * @return \Calcinai\Siri\Objects\Destination[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * @param \Calcinai\Siri\Objects\Destination[] $destination
     * @return self
     */
    public function setDestination(array $destination)
    {
        $this->destination = $destination;
        return $this;
    }


}

