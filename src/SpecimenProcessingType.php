<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * A coded value specifying the procedure used to process the specimen.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $procedure
     */
    private $procedure = null;

    /**
     * Material used in the processing step.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $additive
     */
    private $additive = [
        
    ];

    /**
     * A record of the time or period when the specimen processing occurred. For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $timeDateTime
     */
    private $timeDateTime = null;

    /**
     * A record of the time or period when the specimen processing occurred. For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $timePeriod
     */
    private $timePeriod = null;

    /**
     * Gets as description
     *
     * Textual description of procedure.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as procedure
     *
     * A coded value specifying the procedure used to process the specimen.
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
     * A coded value specifying the procedure used to process the specimen.
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
     * Adds as additive
     *
     * Material used in the processing step.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $additive
     */
    public function addToAdditive(\TKusy\Hl7FhirR4\ReferenceType $additive)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $additive
     * @return self
     */
    public function setAdditive(array $additive)
    {
        $this->additive = $additive;
        return $this;
    }

    /**
     * Gets as timeDateTime
     *
     * A record of the time or period when the specimen processing occurred. For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
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
     * A record of the time or period when the specimen processing occurred. For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
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
     * A record of the time or period when the specimen processing occurred. For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
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
     * A record of the time or period when the specimen processing occurred. For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
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

