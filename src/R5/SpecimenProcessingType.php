<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenProcessingType
 *
 * A sample to be used for analysis.
 * XSD Type: Specimen.Processing
 */
class SpecimenProcessingType extends BackboneElementType
{

    /**
     * Textual description of procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * A coded value specifying the method used to process the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     */
    private $method = null;

    /**
     * Material used in the processing step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $additive
     */
    private $additive = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $timeDateTime
     */
    private $timeDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $timePeriod
     */
    private $timePeriod = null;

    /**
     * Gets as description
     *
     * Textual description of procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Textual description of procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as method
     *
     * A coded value specifying the method used to process the specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * A coded value specifying the method used to process the specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     * @return self
     */
    public function setMethod(?\TKusy\Hl7Fhir\R5\CodeableConceptType $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Adds as additive
     *
     * Material used in the processing step.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $additive
     */
    public function addToAdditive(\TKusy\Hl7Fhir\R5\ReferenceType $additive)
    {
        $this->additive[] = $additive;
        return $this;
    }

    /**
     * isset additive
     *
     * Material used in the processing step.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditive($index)
    {
        return isset($this->additive[$index]);
    }

    /**
     * unset additive
     *
     * Material used in the processing step.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditive($index)
    {
        unset($this->additive[$index]);
    }

    /**
     * Gets as additive
     *
     * Material used in the processing step.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * Sets a new additive
     *
     * Material used in the processing step.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $additive
     * @return self
     */
    public function setAdditive(array $additive = null)
    {
        $this->additive = $additive;
        return $this;
    }

    /**
     * Gets as timeDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getTimeDateTime()
    {
        return $this->timeDateTime;
    }

    /**
     * Sets a new timeDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $timeDateTime
     * @return self
     */
    public function setTimeDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $timeDateTime = null)
    {
        $this->timeDateTime = $timeDateTime;
        return $this;
    }

    /**
     * Gets as timePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }

    /**
     * Sets a new timePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $timePeriod
     * @return self
     */
    public function setTimePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $timePeriod = null)
    {
        $this->timePeriod = $timePeriod;
        return $this;
    }


}

