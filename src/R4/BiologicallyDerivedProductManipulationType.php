<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing BiologicallyDerivedProductManipulationType
 *
 * A material substance originating from a biological entity intended to be transplanted or infused
 * into another (possibly the same) biological entity.
 * XSD Type: BiologicallyDerivedProduct.Manipulation
 */
class BiologicallyDerivedProductManipulationType extends BackboneElementType
{

    /**
     * Description of manipulation.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $description
     */
    private $description = null;

    /**
     * Time of manipulation. (choose any one of time*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $timeDateTime
     */
    private $timeDateTime = null;

    /**
     * Time of manipulation. (choose any one of time*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $timePeriod
     */
    private $timePeriod = null;

    /**
     * Gets as description
     *
     * Description of manipulation.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of manipulation.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as timeDateTime
     *
     * Time of manipulation. (choose any one of time*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getTimeDateTime()
    {
        return $this->timeDateTime;
    }

    /**
     * Sets a new timeDateTime
     *
     * Time of manipulation. (choose any one of time*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $timeDateTime
     * @return self
     */
    public function setTimeDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $timeDateTime)
    {
        $this->timeDateTime = $timeDateTime;
        return $this;
    }

    /**
     * Gets as timePeriod
     *
     * Time of manipulation. (choose any one of time*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }

    /**
     * Sets a new timePeriod
     *
     * Time of manipulation. (choose any one of time*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $timePeriod
     * @return self
     */
    public function setTimePeriod(\TKusy\Hl7Fhir\R4\PeriodType $timePeriod)
    {
        $this->timePeriod = $timePeriod;
        return $this;
    }


}

