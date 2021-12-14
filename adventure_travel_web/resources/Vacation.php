<?php

// Class is used to make vacation objects

class Vacation {

    // properties
    private $vacationId;
    private $vacationName;
    private $vacationImg;
    private $vacationDescription;
    private $vacationDays;
    private $vacationNights;
    private $vacationAdultPrice;
    private $vacationChildPrice;
    private $vacationGroupSize;
    private $vacationSpotsRemaining;
    private $vacationDateAvailable;
    private $vacationCheckInTime;
    private $vacationDateInserted;
    private $vacationDateUpdated;
    
    // constructor class - none

    // setters and getters
    /**
     * Get the value of vacationId
     */ 
    public function getVacationId()
    {
        return $this->vacationId;
    }

    /**
     * Set the value of vacationId
     *
     * @return  self
     */ 
    public function setVacationId($vacationId)
    {
        $this->vacationId = $vacationId;

        return $this;
    }

    /**
     * Get the value of vacationName
     */ 
    public function getVacationName()
    {
        return $this->vacationName;
    }

    /**
     * Set the value of vacationName
     *
     * @return  self
     */ 
    public function setVacationName($vacationName)
    {
        $this->vacationName = $vacationName;

        return $this;
    }

    /**
     * Get the value of vacationImg
     */ 
    public function getVacationImg()
    {
        return $this->vacationImg;
    }

    /**
     * Set the value of vacationImg
     *
     * @return  self
     */ 
    public function setVacationImg($vacationImg)
    {
        $this->vacationImg = $vacationImg;

        return $this;
    }

    /**
     * Get the value of vacationDescription
     */ 
    public function getVacationDescription()
    {
        return $this->vacationDescription;
    }

    /**
     * Set the value of vacationDescription
     *
     * @return  self
     */ 
    public function setVacationDescription($vacationDescription)
    {
        $this->vacationDescription = $vacationDescription;

        return $this;
    }

    /**
     * Get the value of vacationDays
     */ 
    public function getVacationDays()
    {
        return $this->vacationDays;
    }

    /**
     * Set the value of vacationDays
     *
     * @return  self
     */ 
    public function setVacationDays($vacationDays)
    {
        $this->vacationDays = $vacationDays;

        return $this;
    }

    /**
     * Get the value of vacationNights
     */ 
    public function getVacationNights()
    {
        return $this->vacationNights;
    }

    /**
     * Set the value of vacationNights
     *
     * @return  self
     */ 
    public function setVacationNights($vacationNights)
    {
        $this->vacationNights = $vacationNights;

        return $this;
    }

    /**
     * Get the value of vacationAdultPrice
     */ 
    public function getVacationAdultPrice()
    {
        return $this->vacationAdultPrice;
    }

    /**
     * Set the value of vacationAdultPrice
     *
     * @return  self
     */ 
    public function setVacationAdultPrice($vacationAdultPrice)
    {
        $this->vacationAdultPrice = $vacationAdultPrice;

        return $this;
    }

    /**
     * Get the value of vacationChildPrice
     */ 
    public function getVacationChildPrice()
    {
        return $this->vacationChildPrice;
    }

    /**
     * Set the value of vacationChildPrice
     *
     * @return  self
     */ 
    public function setVacationChildPrice($vacationChildPrice)
    {
        $this->vacationChildPrice = $vacationChildPrice;

        return $this;
    }

    /**
     * Get the value of vacationGroupSize
     */ 
    public function getVacationGroupSize()
    {
        return $this->vacationGroupSize;
    }

    /**
     * Set the value of vacationGroupSize
     *
     * @return  self
     */ 
    public function setVacationGroupSize($vacationGroupSize)
    {
        $this->vacationGroupSize = $vacationGroupSize;

        return $this;
    }

    /**
     * Get the value of vacationSpotsRemaining
     */ 
    public function getVacationSpotsRemaining()
    {
        return $this->vacationSpotsRemaining;
    }

    /**
     * Set the value of vacationSpotsRemaining
     *
     * @return  self
     */ 
    public function setVacationSpotsRemaining($vacationSpotsRemaining)
    {
        $this->vacationSpotsRemaining = $vacationSpotsRemaining;

        return $this;
    }

    /**
     * Get the value of vacationDateAvailable
     */ 
    public function getVacationDateAvailable()
    {
        return $this->vacationDateAvailable;
    }

    /**
     * Set the value of vacationDateAvailable
     *
     * @return  self
     */ 
    public function setVacationDateAvailable($vacationDateAvailable)
    {
        $this->vacationDateAvailable = $vacationDateAvailable;

        return $this;
    }

    /**
     * Get the value of vacationCheckInTime
     */ 
    public function getVacationCheckInTime()
    {
        return $this->vacationCheckInTime;
    }

    /**
     * Set the value of vacationCheckInTime
     *
     * @return  self
     */ 
    public function setVacationCheckInTime($vacationCheckInTime)
    {
        $this->vacationCheckInTime = $vacationCheckInTime;

        return $this;
    }

    /**
     * Get the value of vacationDateInserted
     */ 
    public function getVacationDateInserted()
    {
        return $this->vacationDateInserted;
    }

    /**
     * Set the value of vacationDateInserted
     *
     * @return  self
     */ 
    public function setVacationDateInserted($vacationDateInserted)
    {
        $this->vacationDateInserted = $vacationDateInserted;

        return $this;
    }

    /**
     * Get the value of vacationDateUpdated
     */ 
    public function getVacationDateUpdated()
    {
        return $this->vacationDateUpdated;
    }

    /**
     * Set the value of vacationDateUpdated
     *
     * @return  self
     */ 
    public function setVacationDateUpdated($vacationDateUpdated)
    {
        $this->vacationDateUpdated = $vacationDateUpdated;

        return $this;
    }

    // processing methods
}
?>