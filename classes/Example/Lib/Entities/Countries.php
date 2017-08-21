<?php

namespace Example\Lib\Entities;

/**
 * Countries
 */
class Countries
{
    /**
     * @var string
     */
    private $countryId;

    /**
     * @var string
     */
    private $countryName;

    /**
     * @var \Example\Lib\Entities\Regions
     */
    private $region;


    /**
     * Get countryId
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set countryName
     *
     * @param string $countryName
     *
     * @return Countries
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set region
     *
     * @param \Example\Lib\Entities\Regions $region
     *
     * @return Countries
     */
    public function setRegion(\Example\Lib\Entities\Regions $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Example\Lib\Entities\Regions
     */
    public function getRegion()
    {
        return $this->region;
    }
}

