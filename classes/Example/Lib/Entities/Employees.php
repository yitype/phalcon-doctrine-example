<?php

namespace Example\Lib\Entities;

/**
 * Employees
 */
class Employees
{
    /**
     * @var integer
     */
    private $employeeId;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var \DateTime
     */
    private $hireDate;

    /**
     * @var string
     */
    private $salary;

    /**
     * @var string
     */
    private $commissionPct;

    /**
     * @var \Example\Lib\Entities\Departments
     */
    private $department;

    /**
     * @var \Example\Lib\Entities\Jobs
     */
    private $job;

    /**
     * @var \Example\Lib\Entities\Employees
     */
    private $manager;


    /**
     * Get employeeId
     *
     * @return integer
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Employees
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Employees
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Employees
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Employees
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set hireDate
     *
     * @param \DateTime $hireDate
     *
     * @return Employees
     */
    public function setHireDate($hireDate)
    {
        $this->hireDate = $hireDate;

        return $this;
    }

    /**
     * Get hireDate
     *
     * @return \DateTime
     */
    public function getHireDate()
    {
        return $this->hireDate;
    }

    /**
     * Set salary
     *
     * @param string $salary
     *
     * @return Employees
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return string
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set commissionPct
     *
     * @param string $commissionPct
     *
     * @return Employees
     */
    public function setCommissionPct($commissionPct)
    {
        $this->commissionPct = $commissionPct;

        return $this;
    }

    /**
     * Get commissionPct
     *
     * @return string
     */
    public function getCommissionPct()
    {
        return $this->commissionPct;
    }

    /**
     * Set department
     *
     * @param \Example\Lib\Entities\Departments $department
     *
     * @return Employees
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
     * @return Employees
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

    /**
     * Set manager
     *
     * @param \Example\Lib\Entities\Employees $manager
     *
     * @return Employees
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

