<?php

namespace Calcinai\Siri\AnnotatedLineStructureType;

/**
 * Class representing DestinationsAType
 */
class DestinationsAType
{

    /**
     * @property \Calcinai\Siri\Destination[] $destination
     */
    private $destination = [
        
    ];

    /**
     * Adds as destination
     *
     * @return self
     * @param \Calcinai\Siri\Destination $destination
     */
    public function addToDestination(\Calcinai\Siri\Destination $destination)
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
     * @return \Calcinai\Siri\Destination[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * @param \Calcinai\Siri\Destination[] $destination
     * @return self
     */
    public function setDestination(array $destination)
    {
        $this->destination = $destination;
        return $this;
    }


}

