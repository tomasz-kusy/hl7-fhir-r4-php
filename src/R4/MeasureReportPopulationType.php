<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MeasureReportPopulationType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Population
 */
class MeasureReportPopulationType extends BackboneElementType
{

    /**
     * The type of the population.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The number of members of the population.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $count
     */
    private $count = null;

    /**
     * This element refers to a List of subject level MeasureReport resources, one for each subject in this population.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subjectResults
     */
    private $subjectResults = null;

    /**
     * Gets as code
     *
     * The type of the population.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The type of the population.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as count
     *
     * The number of members of the population.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The number of members of the population.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $count
     * @return self
     */
    public function setCount(\TKusy\Hl7Fhir\R4\IntegerType $count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as subjectResults
     *
     * This element refers to a List of subject level MeasureReport resources, one for each subject in this population.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSubjectResults()
    {
        return $this->subjectResults;
    }

    /**
     * Sets a new subjectResults
     *
     * This element refers to a List of subject level MeasureReport resources, one for each subject in this population.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subjectResults
     * @return self
     */
    public function setSubjectResults(\TKusy\Hl7Fhir\R4\ReferenceType $subjectResults)
    {
        $this->subjectResults = $subjectResults;
        return $this;
    }


}

