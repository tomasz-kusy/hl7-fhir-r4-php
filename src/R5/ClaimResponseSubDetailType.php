<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponseSubDetailType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.SubDetail
 */
class ClaimResponseSubDetailType extends BackboneElementType
{

    /**
     * A number to uniquely reference the claim sub-detail entry.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $subDetailSequence
     */
    private $subDetailSequence = null;

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
     * Gets as subDetailSequence
     *
     * A number to uniquely reference the claim sub-detail entry.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getSubDetailSequence()
    {
        return $this->subDetailSequence;
    }

    /**
     * Sets a new subDetailSequence
     *
     * A number to uniquely reference the claim sub-detail entry.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $subDetailSequence
     * @return self
     */
    public function setSubDetailSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $subDetailSequence)
    {
        $this->subDetailSequence = $subDetailSequence;
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


}

