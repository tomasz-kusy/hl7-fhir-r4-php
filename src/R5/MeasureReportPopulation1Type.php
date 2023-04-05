<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureReportPopulation1Type
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Population1
 */
class MeasureReportPopulation1Type extends BackboneElementType
{

    /**
     * The population from the Measure that corresponds to this population in the MeasureReport resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * The type of the population.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The number of members of the population in this stratum.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $count
     */
    private $count = null;

    /**
     * This element refers to a List of individual level MeasureReport resources, one for each subject in this population in this stratum.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subjectResults
     */
    private $subjectResults = null;

    /**
     * A reference to an individual level MeasureReport resource for a member of the population.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $subjectReport
     */
    private $subjectReport = null;

    /**
     * Optional Group identifying the individuals that make up the population.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subjects
     */
    private $subjects = null;

    /**
     * Gets as linkId
     *
     * The population from the Measure that corresponds to this population in the MeasureReport resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * The population from the Measure that corresponds to this population in the MeasureReport resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $linkId
     * @return self
     */
    public function setLinkId(?\TKusy\Hl7Fhir\R5\StringType $linkId = null)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as code
     *
     * The type of the population.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as count
     *
     * The number of members of the population in this stratum.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The number of members of the population in this stratum.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $count
     * @return self
     */
    public function setCount(?\TKusy\Hl7Fhir\R5\IntegerType $count = null)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as subjectResults
     *
     * This element refers to a List of individual level MeasureReport resources, one for each subject in this population in this stratum.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubjectResults()
    {
        return $this->subjectResults;
    }

    /**
     * Sets a new subjectResults
     *
     * This element refers to a List of individual level MeasureReport resources, one for each subject in this population in this stratum.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subjectResults
     * @return self
     */
    public function setSubjectResults(?\TKusy\Hl7Fhir\R5\ReferenceType $subjectResults = null)
    {
        $this->subjectResults = $subjectResults;
        return $this;
    }

    /**
     * Adds as subjectReport
     *
     * A reference to an individual level MeasureReport resource for a member of the population.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subjectReport
     */
    public function addToSubjectReport(\TKusy\Hl7Fhir\R5\ReferenceType $subjectReport)
    {
        $this->subjectReport[] = $subjectReport;
        return $this;
    }

    /**
     * isset subjectReport
     *
     * A reference to an individual level MeasureReport resource for a member of the population.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubjectReport($index)
    {
        return isset($this->subjectReport[$index]);
    }

    /**
     * unset subjectReport
     *
     * A reference to an individual level MeasureReport resource for a member of the population.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubjectReport($index)
    {
        unset($this->subjectReport[$index]);
    }

    /**
     * Gets as subjectReport
     *
     * A reference to an individual level MeasureReport resource for a member of the population.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSubjectReport()
    {
        return $this->subjectReport;
    }

    /**
     * Sets a new subjectReport
     *
     * A reference to an individual level MeasureReport resource for a member of the population.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $subjectReport
     * @return self
     */
    public function setSubjectReport(array $subjectReport = null)
    {
        $this->subjectReport = $subjectReport;
        return $this;
    }

    /**
     * Gets as subjects
     *
     * Optional Group identifying the individuals that make up the population.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * Sets a new subjects
     *
     * Optional Group identifying the individuals that make up the population.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subjects
     * @return self
     */
    public function setSubjects(?\TKusy\Hl7Fhir\R5\ReferenceType $subjects = null)
    {
        $this->subjects = $subjects;
        return $this;
    }


}

