<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureReportType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MeasureReport
 */
class MeasureReportType extends DomainResourceType
{

    /**
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The MeasureReport status. No data will be available until the MeasureReport status is complete.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureReportStatusType $status
     */
    private $status = null;

    /**
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; a summary report, which returns a population count for each of the criteria in the measure; or a data-collection, which enables the MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureReportTypeType $type
     */
    private $type = null;

    /**
     * Indicates whether the data submitted in a data-exchange report represents a snapshot or incremental update. A snapshot update replaces all previously submitted data for the receiver, whereas an incremental update represents only updated and/or changed data and should be applied as a differential update to the existing submitted data for the receiver.
     *
     * @var \TKusy\Hl7Fhir\R5\SubmitDataUpdateTypeType $dataUpdateType
     */
    private $dataUpdateType = null;

    /**
     * A reference to the Measure that was calculated to produce this report.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $measure
     */
    private $measure = null;

    /**
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The date this measure was calculated.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The individual or organization that is reporting the data.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reporter
     */
    private $reporter = null;

    /**
     * A reference to the vendor who queried the data, calculated results and/or generated the report. The ‘reporting vendor’ is intended to represent the submitting entity when it is not the same as the reporting entity. This extension is used when the Receiver is interested in getting vendor information in the report.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reportingVendor
     */
    private $reportingVendor = null;

    /**
     * A reference to the location for which the data is being reported.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * The reporting period for which the report was calculated.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * A reference to a Parameters resource (typically represented using a contained resource) that represents any input parameters that were provided to the operation that generated the report.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $inputParameters
     */
    private $inputParameters = null;

    /**
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented. It is expected to be the same as the scoring element on the referenced Measure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $scoring
     */
    private $scoring = null;

    /**
     * Whether improvement in the measure is noted by an increase or decrease in the measure score.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation
     */
    private $improvementNotation = null;

    /**
     * The results of the calculation, one for each population group in the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureReportGroupType[] $group
     */
    private $group = null;

    /**
     * A reference to a Resource that represents additional information collected for the report. If the value of the supplemental data is not a Resource (i.e. evaluating the supplementalData expression for this case in the measure results in a value that is not a FHIR Resource), it is reported as a reference to a contained Observation resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supplementalData
     */
    private $supplementalData = null;

    /**
     * Evaluated resources are used to capture what data was involved in the calculation of a measure. This usage is only allowed for individual reports to ensure that the size of the MeasureReport resource is bounded.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $evaluatedResource
     */
    private $evaluatedResource = null;

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The MeasureReport status. No data will be available until the MeasureReport status is complete.
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureReportStatusType
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\MeasureReportStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; a summary report, which returns a population count for each of the criteria in the measure; or a data-collection, which enables the MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureReportTypeType
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\MeasureReportTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as dataUpdateType
     *
     * Indicates whether the data submitted in a data-exchange report represents a snapshot or incremental update. A snapshot update replaces all previously submitted data for the receiver, whereas an incremental update represents only updated and/or changed data and should be applied as a differential update to the existing submitted data for the receiver.
     *
     * @return \TKusy\Hl7Fhir\R5\SubmitDataUpdateTypeType
     */
    public function getDataUpdateType()
    {
        return $this->dataUpdateType;
    }

    /**
     * Sets a new dataUpdateType
     *
     * Indicates whether the data submitted in a data-exchange report represents a snapshot or incremental update. A snapshot update replaces all previously submitted data for the receiver, whereas an incremental update represents only updated and/or changed data and should be applied as a differential update to the existing submitted data for the receiver.
     *
     * @param \TKusy\Hl7Fhir\R5\SubmitDataUpdateTypeType $dataUpdateType
     * @return self
     */
    public function setDataUpdateType(?\TKusy\Hl7Fhir\R5\SubmitDataUpdateTypeType $dataUpdateType = null)
    {
        $this->dataUpdateType = $dataUpdateType;
        return $this;
    }

    /**
     * Gets as measure
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
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
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $measure
     * @return self
     */
    public function setMeasure(?\TKusy\Hl7Fhir\R5\CanonicalType $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date this measure was calculated.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date this measure was calculated.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as reporter
     *
     * The individual or organization that is reporting the data.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Sets a new reporter
     *
     * The individual or organization that is reporting the data.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reporter
     * @return self
     */
    public function setReporter(?\TKusy\Hl7Fhir\R5\ReferenceType $reporter = null)
    {
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * Gets as reportingVendor
     *
     * A reference to the vendor who queried the data, calculated results and/or generated the report. The ‘reporting vendor’ is intended to represent the submitting entity when it is not the same as the reporting entity. This extension is used when the Receiver is interested in getting vendor information in the report.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReportingVendor()
    {
        return $this->reportingVendor;
    }

    /**
     * Sets a new reportingVendor
     *
     * A reference to the vendor who queried the data, calculated results and/or generated the report. The ‘reporting vendor’ is intended to represent the submitting entity when it is not the same as the reporting entity. This extension is used when the Receiver is interested in getting vendor information in the report.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reportingVendor
     * @return self
     */
    public function setReportingVendor(?\TKusy\Hl7Fhir\R5\ReferenceType $reportingVendor = null)
    {
        $this->reportingVendor = $reportingVendor;
        return $this;
    }

    /**
     * Gets as location
     *
     * A reference to the location for which the data is being reported.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * A reference to the location for which the data is being reported.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as period
     *
     * The reporting period for which the report was calculated.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
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
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R5\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as inputParameters
     *
     * A reference to a Parameters resource (typically represented using a contained resource) that represents any input parameters that were provided to the operation that generated the report.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getInputParameters()
    {
        return $this->inputParameters;
    }

    /**
     * Sets a new inputParameters
     *
     * A reference to a Parameters resource (typically represented using a contained resource) that represents any input parameters that were provided to the operation that generated the report.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $inputParameters
     * @return self
     */
    public function setInputParameters(?\TKusy\Hl7Fhir\R5\ReferenceType $inputParameters = null)
    {
        $this->inputParameters = $inputParameters;
        return $this;
    }

    /**
     * Gets as scoring
     *
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented. It is expected to be the same as the scoring element on the referenced Measure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * Sets a new scoring
     *
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented. It is expected to be the same as the scoring element on the referenced Measure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $scoring
     * @return self
     */
    public function setScoring(?\TKusy\Hl7Fhir\R5\CodeableConceptType $scoring = null)
    {
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * Gets as improvementNotation
     *
     * Whether improvement in the measure is noted by an increase or decrease in the measure score.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation
     * @return self
     */
    public function setImprovementNotation(?\TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation = null)
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportGroupType $group
     */
    public function addToGroup(\TKusy\Hl7Fhir\R5\MeasureReportGroupType $group)
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
     * @return \TKusy\Hl7Fhir\R5\MeasureReportGroupType[]
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportGroupType[] $group
     * @return self
     */
    public function setGroup(array $group = null)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Adds as supplementalData
     *
     * A reference to a Resource that represents additional information collected for the report. If the value of the supplemental data is not a Resource (i.e. evaluating the supplementalData expression for this case in the measure results in a value that is not a FHIR Resource), it is reported as a reference to a contained Observation resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supplementalData
     */
    public function addToSupplementalData(\TKusy\Hl7Fhir\R5\ReferenceType $supplementalData)
    {
        $this->supplementalData[] = $supplementalData;
        return $this;
    }

    /**
     * isset supplementalData
     *
     * A reference to a Resource that represents additional information collected for the report. If the value of the supplemental data is not a Resource (i.e. evaluating the supplementalData expression for this case in the measure results in a value that is not a FHIR Resource), it is reported as a reference to a contained Observation resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplementalData($index)
    {
        return isset($this->supplementalData[$index]);
    }

    /**
     * unset supplementalData
     *
     * A reference to a Resource that represents additional information collected for the report. If the value of the supplemental data is not a Resource (i.e. evaluating the supplementalData expression for this case in the measure results in a value that is not a FHIR Resource), it is reported as a reference to a contained Observation resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplementalData($index)
    {
        unset($this->supplementalData[$index]);
    }

    /**
     * Gets as supplementalData
     *
     * A reference to a Resource that represents additional information collected for the report. If the value of the supplemental data is not a Resource (i.e. evaluating the supplementalData expression for this case in the measure results in a value that is not a FHIR Resource), it is reported as a reference to a contained Observation resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupplementalData()
    {
        return $this->supplementalData;
    }

    /**
     * Sets a new supplementalData
     *
     * A reference to a Resource that represents additional information collected for the report. If the value of the supplemental data is not a Resource (i.e. evaluating the supplementalData expression for this case in the measure results in a value that is not a FHIR Resource), it is reported as a reference to a contained Observation resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supplementalData
     * @return self
     */
    public function setSupplementalData(array $supplementalData = null)
    {
        $this->supplementalData = $supplementalData;
        return $this;
    }

    /**
     * Adds as evaluatedResource
     *
     * Evaluated resources are used to capture what data was involved in the calculation of a measure. This usage is only allowed for individual reports to ensure that the size of the MeasureReport resource is bounded.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $evaluatedResource
     */
    public function addToEvaluatedResource(\TKusy\Hl7Fhir\R5\ReferenceType $evaluatedResource)
    {
        $this->evaluatedResource[] = $evaluatedResource;
        return $this;
    }

    /**
     * isset evaluatedResource
     *
     * Evaluated resources are used to capture what data was involved in the calculation of a measure. This usage is only allowed for individual reports to ensure that the size of the MeasureReport resource is bounded.
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
     * Evaluated resources are used to capture what data was involved in the calculation of a measure. This usage is only allowed for individual reports to ensure that the size of the MeasureReport resource is bounded.
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
     * Evaluated resources are used to capture what data was involved in the calculation of a measure. This usage is only allowed for individual reports to ensure that the size of the MeasureReport resource is bounded.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEvaluatedResource()
    {
        return $this->evaluatedResource;
    }

    /**
     * Sets a new evaluatedResource
     *
     * Evaluated resources are used to capture what data was involved in the calculation of a measure. This usage is only allowed for individual reports to ensure that the size of the MeasureReport resource is bounded.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $evaluatedResource
     * @return self
     */
    public function setEvaluatedResource(array $evaluatedResource = null)
    {
        $this->evaluatedResource = $evaluatedResource;
        return $this;
    }


}

