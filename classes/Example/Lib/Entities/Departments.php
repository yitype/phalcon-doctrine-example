<?php

namespace Example\Lib\Entities;

/**
 * Departments
 */
class Departments
{
    /**
     * @var integer
     */
    private $departmentId;

    /**
     * @var string
     */
    private $departmentName;

    /**
     * @var \Example\Lib\Entities\Locations
     */
    private $location;

    /**
     * @var \Example\Lib\Entities\Employees
     */
    private $manager;


    /**
     * Get departmentId
     *
     * @return integer
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Set departmentName
     *
     * @param string $departmentName
     *
     * @return Departments
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    /**
     * Get departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Set location
     *
     * @param \Example\Lib\Entities\Locations $location
     *
     * @return Departments
     */
    public function setLocation(\Example\Lib\Entities\Locations $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \Example\Lib\Entities\Locations
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set manager
     *
     * @param \Example\Lib\Entities\Employees $manager
     *
     * @return Departments
     */
    public function setManager(\Example\Lib\Entities\Employees $manager = null)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return \Example\Lib\Entities\Employees
     */
    public function getManager()
    {
        return $this->manager;
    }
}

