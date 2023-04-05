<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponseDetailType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.Detail
 */
class ClaimResponseDetailType extends BackboneElementType
{

    /**
     * A number to uniquely reference the claim detail entry.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $detailSequence
     */
    private $detailSequence = null;

    /**
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $traceNumber
     */
    private $traceNumber = null;

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $noteNumber
     */
    private $noteNumber = null;

    /**
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseReviewOutcomeType $reviewOutcome
     */
    private $reviewOutcome = null;

    /**
     * The adjudication results.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[] $adjudication
     */
    private $adjudication = null;

    /**
     * A sub-detail adjudication of a simple product or service.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseSubDetailType[] $subDetail
     */
    private $subDetail = null;

    /**
     * Gets as detailSequence
     *
     * A number to uniquely reference the claim detail entry.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getDetailSequence()
    {
        return $this->detailSequence;
    }

    /**
     * Sets a new detailSequence
     *
     * A number to uniquely reference the claim detail entry.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $detailSequence
     * @return self
     */
    public function setDetailSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $detailSequence)
    {
        $this->detailSequence = $detailSequence;
        return $this;
    }

    /**
     * Adds as traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $traceNumber
     */
    public function addToTraceNumber(\TKusy\Hl7Fhir\R5\IdentifierType $traceNumber)
    {
        $this->traceNumber[] = $traceNumber;
        return $this;
    }

    /**
     * isset traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTraceNumber($index)
    {
        return isset($this->traceNumber[$index]);
    }

    /**
     * unset traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTraceNumber($index)
    {
        unset($this->traceNumber[$index]);
    }

    /**
     * Gets as traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getTraceNumber()
    {
        return $this->traceNumber;
    }

    /**
     * Sets a new traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $traceNumber
     * @return self
     */
    public function setTraceNumber(array $traceNumber = null)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * Adds as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $noteNumber
     */
    public function addToNoteNumber(\TKusy\Hl7Fhir\R5\PositiveIntType $noteNumber)
    {
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * isset noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNoteNumber($index)
    {
        return isset($this->noteNumber[$index]);
    }

    /**
     * unset noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNoteNumber($index)
    {
        unset($this->noteNumber[$index]);
    }

    /**
     * Gets as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
    }

    /**
     * Sets a new noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $noteNumber
     * @return self
     */
    public function setNoteNumber(array $noteNumber = null)
    {
        $this->noteNumber = $noteNumber;
        return $this;
    }

    /**
     * Gets as reviewOutcome
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseReviewOutcomeType
     */
    public function getReviewOutcome()
    {
        return $this->reviewOutcome;
    }

    /**
     * Sets a new reviewOutcome
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseReviewOutcomeType $reviewOutcome
     * @return self
     */
    public function setReviewOutcome(?\TKusy\Hl7Fhir\R5\ClaimResponseReviewOutcomeType $reviewOutcome = null)
    {
        $this->reviewOutcome = $reviewOutcome;
        return $this;
    }

    /**
     * Adds as adjudication
     *
     * The adjudication results.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType $adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * isset adjudication
     *
     * The adjudication results.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdjudication($index)
    {
        return isset($this->adjudication[$index]);
    }

    /**
     * unset adjudication
     *
     * The adjudication results.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdjudication($index)
    {
        unset($this->adjudication[$index]);
    }

    /**
     * Gets as adjudication
     *
     * The adjudication results.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * Sets a new adjudication
     *
     * The adjudication results.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[] $adjudication
     * @return self
     */
    public function setAdjudication(array $adjudication = null)
    {
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * Adds as subDetail
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseSubDetailType $subDetail
     */
    public function addToSubDetail(\TKusy\Hl7Fhir\R5\ClaimResponseSubDetailType $subDetail)
    {
        $this->subDetail[] = $subDetail;
        return $this;
    }

    /**
     * isset subDetail
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubDetail($index)
    {
        return isset($this->subDetail[$index]);
    }

    /**
     * unset subDetail
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubDetail($index)
    {
        unset($this->subDetail[$index]);
    }

    /**
     * Gets as subDetail
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseSubDetailType[]
     */
    public function getSubDetail()
    {
        return $this->subDetail;
    }

    /**
     * Sets a new subDetail
     *
     * A sub-detail adjudication of a simple product or service.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseSubDetailType[] $subDetail
     * @return self
     */
    public function setSubDetail(array $subDetail = null)
    {
        $this->subDetail = $subDetail;
        return $this;
    }


}

