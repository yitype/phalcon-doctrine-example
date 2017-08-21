<?php

namespace Example\Lib\Entities;

/**
 * Locations
 */
class Locations
{
    /**
     * @var integer
     */
    private $locationId;

    /**
     * @var string
     */
    private $streetAddress;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $stateProvince;

    /**
     * @var \Example\Lib\Entities\Countries
     */
    private $country;


    /**
     * Get locationId
     *
     * @return integer
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set streetAddress
     *
     * @param string $streetAddress
     *
     * @return Locations
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    /**
     * Get streetAddress
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Locations
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Locations
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set stateProvince
     *
     * @param string $stateProvince
     *
     * @return Locations
     */
    public function setStateProvince($stateProvince)
    {
        $this->stateProvince = $stateProvince;

        return $this;
    }

    /**
     * Get stateProvince
     *
     * @return string
     */
    public function getStateProvince()
    {
        return $this->stateProvince;
    }

    /**
     * Set country
     *
     * @param \Example\Lib\Entities\Countries $country
     *
     * @return Locations
     */
    public function setCountry(\Example\Lib\Entities\Countries $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Example\Lib\Entities\Countries
     */
    public function getCountry()
    {
        return $this->country;
    }
}

