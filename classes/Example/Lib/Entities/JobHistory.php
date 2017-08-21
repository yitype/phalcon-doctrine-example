<?php

namespace Example\Lib\Entities;

/**
 * JobHistory
 */
class JobHistory
{
    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var \Example\Lib\Entities\Employees
     */
    private $employee;

    /**
     * @var \Example\Lib\Entities\Departments
     */
    private $department;

    /**
     * @var \Example\Lib\Entities\Jobs
     */
    private $job;


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return JobHistory
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return JobHistory
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set employee
     *
     * @param \Example\Lib\Entities\Employees $employee
     *
     * @return JobHistory
     */
    public function setEmployee(\Example\Lib\Entities\Employees $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \Example\Lib\Entities\Employees
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set department
     *
     * @param \Example\Lib\Entities\Departments $department
     *
     * @return JobHistory
     */
    public function setDepartment(\Example\Lib\Entities\Departments $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \Example\Lib\Entities\Departments
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set job
     *
     * @param \Example\Lib\Entities\Jobs $job
     *
     * @return JobHistory
     */
    public function setJob(\Example\Lib\Entities\Jobs $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return \Example\Lib\Entities\Jobs
     */
    public function getJob()
    {
        return $this->job;
    }
}

