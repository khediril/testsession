<?php 
class Employee{
    private $emp_no;
    private $birth_date;
    private $first_name;
    private $last_name;
    private $gender;
    private $hire_date;

    /**
     * Get the value of emp_no
     */ 
    public function getEmp_no()
    {
        return $this->emp_no;
    }

    /**
     * Set the value of emp_no
     *
     * @return  self
     */ 
    public function setEmp_no($emp_no)
    {
        $this->emp_no = $emp_no;

        return $this;
    }

    /**
     * Get the value of birth_date
     */ 
    public function getBirth_date()
    {
        return $this->birth_date;
    }

    /**
     * Set the value of birth_date
     *
     * @return  self
     */ 
    public function setBirth_date($birth_date)
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of hire_date
     */ 
    public function getHire_date()
    {
        return $this->hire_date;
    }

    /**
     * Set the value of hire_date
     *
     * @return  self
     */ 
    public function setHire_date($hire_date)
    {
        $this->hire_date = $hire_date;

        return $this;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }
}