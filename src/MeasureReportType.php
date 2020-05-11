<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MeasureReportType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MeasureReport
 */
class MeasureReportType extends DomainResourceType
{

    /**
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The MeasureReport status. No data will be available until the MeasureReport status is complete.
     *
     * @var \TKusy\Hl7FhirR4\MeasureReportStatusType $status
     */
    private $status = null;

    /**
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; a summary report, which returns a population count for each of the criteria in the measure; or a data-collection, which enables the MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @var \TKusy\Hl7FhirR4\MeasureReportTypeType $type
     */
    private $type = null;

    /**
     * A reference to the Measure that was calculated to produce this report.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $measure
     */
    private $measure = null;

    /**
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The date this measure report was generated.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The individual, location, or organization that is reporting the data.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $reporter
     */
    private $reporter = null;

    /**
     * The reporting period for which the report was calculated.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Whether improvement in the measure is noted by an increase or decrease in the measure score.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $improvementNotation
     */
    private $improvementNotation = null;

    /**
     * The results of the calculation, one for each population group in the measure.
     *
     * @var \TKusy\Hl7FhirR4\MeasureReportGroupType[] $group
     */
    private $group = null;

    /**
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $evaluatedResource
     */
    private $evaluatedResource = null;

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The MeasureReport status. No data will be available until the MeasureReport status is complete.
     *
     * @return \TKusy\Hl7FhirR4\MeasureReportStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The MeasureReport status. No data will be available until the MeasureReport status is complete.
     *
     * @param \TKusy\Hl7FhirR4\MeasureReportStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\MeasureReportStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; a summary report, which returns a population count for each of the criteria in the measure; or a data-collection, which enables the MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @return \TKusy\Hl7FhirR4\MeasureReportTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; a summary report, which returns a population count for each of the criteria in the measure; or a data-collection, which enables the MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @param \TKusy\Hl7FhirR4\MeasureReportTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\MeasureReportTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as measure
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $measure
     * @return self
     */
    public function setMeasure(\TKusy\Hl7FhirR4\CanonicalType $measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date this measure report was generated.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date this measure report was generated.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as reporter
     *
     * The individual, location, or organization that is reporting the data.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Sets a new reporter
     *
     * The individual, location, or organization that is reporting the data.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $reporter
     * @return self
     */
    public function setReporter(\TKusy\Hl7FhirR4\ReferenceType $reporter)
    {
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * Gets as period
     *
     * The reporting period for which the report was calculated.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The reporting period for which the report was calculated.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as improvementNotation
     *
     * Whether improvement in the measure is noted by an increase or decrease in the measure score.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getImprovementNotation()
    {
        return $this->improvementNotation;
    }

    /**
     * Sets a new improvementNotation
     *
     * Whether improvement in the measure is noted by an increase or decrease in the measure score.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $improvementNotation
     * @return self
     */
    public function setImprovementNotation(\TKusy\Hl7FhirR4\CodeableConceptType $improvementNotation)
    {
        $this->improvementNotation = $improvementNotation;
        return $this;
    }

    /**
     * Adds as group
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MeasureReportGroupType $group
     */
    public function addToGroup(\TKusy\Hl7FhirR4\MeasureReportGroupType $group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * isset group
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroup($index)
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @return \TKusy\Hl7FhirR4\MeasureReportGroupType[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param \TKusy\Hl7FhirR4\MeasureReportGroupType[] $group
     * @return self
     */
    public function setGroup(array $group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Adds as evaluatedResource
     *
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $evaluatedResource
     */
    public function addToEvaluatedResource(\TKusy\Hl7FhirR4\ReferenceType $evaluatedResource)
    {
        $this->evaluatedResource[] = $evaluatedResource;
        return $this;
    }

    /**
     * isset evaluatedResource
     *
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvaluatedResource($index)
    {
        return isset($this->evaluatedResource[$index]);
    }

    /**
     * unset evaluatedResource
     *
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvaluatedResource($index)
    {
        unset($this->evaluatedResource[$index]);
    }

    /**
     * Gets as evaluatedResource
     *
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getEvaluatedResource()
    {
        return $this->evaluatedResource;
    }

    /**
     * Sets a new evaluatedResource
     *
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $evaluatedResource
     * @return self
     */
    public function setEvaluatedResource(array $evaluatedResource)
    {
        $this->evaluatedResource = $evaluatedResource;
        return $this;
    }


}

