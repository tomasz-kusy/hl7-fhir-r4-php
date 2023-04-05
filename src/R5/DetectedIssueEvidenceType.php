<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DetectedIssueEvidenceType
 *
 * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, Ineffective treatment frequency, Procedure-condition conflict, gaps in care, etc.
 * XSD Type: DetectedIssue.Evidence
 */
class DetectedIssueEvidenceType extends BackboneElementType
{

    /**
     * A manifestation that led to the recording of this detected issue.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     */
    private $code = null;

    /**
     * Links to resources that constitute evidence for the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $detail
     */
    private $detail = null;

    /**
     * Adds as code
     *
     * A manifestation that led to the recording of this detected issue.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * A manifestation that led to the recording of this detected issue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * A manifestation that led to the recording of this detected issue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * A manifestation that led to the recording of this detected issue.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A manifestation that led to the recording of this detected issue.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as detail
     *
     * Links to resources that constitute evidence for the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $detail
     */
    public function addToDetail(\TKusy\Hl7Fhir\R5\ReferenceType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * Links to resources that constitute evidence for the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Links to resources that constitute evidence for the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Links to resources that constitute evidence for the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Links to resources that constitute evidence for the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $detail
     * @return self
     */
    public function setDetail(array $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }


}

