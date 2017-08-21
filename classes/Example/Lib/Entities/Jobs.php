<?php

namespace Example\Lib\Entities;

/**
 * Jobs
 */
class Jobs
{
    /**
     * @var string
     */
    private $jobId;

    /**
     * @var string
     */
    private $jobTitle;

    /**
     * @var integer
     */
    private $minSalary;

    /**
     * @var integer
     */
    private $maxSalary;


    /**
     * Get jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     *
     * @return Jobs
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set minSalary
     *
     * @param integer $minSalary
     *
     * @return Jobs
     */
    public function setMinSalary($minSalary)
    {
        $this->minSalary = $minSalary;

        return $this;
    }

    /**
     * Get minSalary
     *
     * @return integer
     */
    public function getMinSalary()
    {
        return $this->minSalary;
    }

    /**
     * Set maxSalary
     *
     * @param integer $maxSalary
     *
     * @return Jobs
     */
    public function setMaxSalary($maxSalary)
    {
        $this->maxSalary = $maxSalary;

        return $this;
    }

    /**
     * Get maxSalary
     *
     * @return integer
     */
    public function getMaxSalary()
    {
        return $this->maxSalary;
    }
}

