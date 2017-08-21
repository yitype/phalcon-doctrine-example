<?php

namespace Example\Lib\Entities;

/**
 * Regions
 */
class Regions
{
    /**
     * @var integer
     */
    private $regionId;

    /**
     * @var string
     */
    private $regionName;


    /**
     * Get regionId
     *
     * @return integer
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Set regionName
     *
     * @param string $regionName
     *
     * @return Regions
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;

        return $this;
    }

    /**
     * Get regionName
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }
}

