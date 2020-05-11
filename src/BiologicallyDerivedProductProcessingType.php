<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BiologicallyDerivedProductProcessingType
 *
 * A material substance originating from a biological entity intended to be transplanted or infused
 * into another (possibly the same) biological entity.
 * XSD Type: BiologicallyDerivedProduct.Processing
 */
class BiologicallyDerivedProductProcessingType extends BackboneElementType
{

    /**
     * Description of of processing.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Procesing code.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $procedure
     */
    private $procedure = null;

    /**
     * Substance added during processing.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $additive
     */
    private $additive = null;

    /**
     * Time of processing. (choose any one of time*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $timeDateTime
     */
    private $timeDateTime = null;

    /**
     * Time of processing. (choose any one of time*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $timePeriod
     */
    private $timePeriod = null;

    /**
     * Gets as description
     *
     * Description of of processing.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of of processing.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as procedure
     *
     * Procesing code.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * Procesing code.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $procedure
     * @return self
     */
    public function setProcedure(\TKusy\Hl7FhirR4\CodeableConceptType $procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Gets as additive
     *
     * Substance added during processing.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * Sets a new additive
     *
     * Substance added during processing.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $additive
     * @return self
     */
    public function setAdditive(\TKusy\Hl7FhirR4\ReferenceType $additive)
    {
        $this->additive = $additive;
        return $this;
    }

    /**
     * Gets as timeDateTime
     *
     * Time of processing. (choose any one of time*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getTimeDateTime()
    {
        return $this->timeDateTime;
    }

    /**
     * Sets a new timeDateTime
     *
     * Time of processing. (choose any one of time*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $timeDateTime
     * @return self
     */
    public function setTimeDateTime(\TKusy\Hl7FhirR4\DateTimeType $timeDateTime)
    {
        $this->timeDateTime = $timeDateTime;
        return $this;
    }

    /**
     * Gets as timePeriod
     *
     * Time of processing. (choose any one of time*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }

    /**
     * Sets a new timePeriod
     *
     * Time of processing. (choose any one of time*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $timePeriod
     * @return self
     */
    public function setTimePeriod(\TKusy\Hl7FhirR4\PeriodType $timePeriod)
    {
        $this->timePeriod = $timePeriod;
        return $this;
    }


}

