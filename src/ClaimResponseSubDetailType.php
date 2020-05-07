<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\PositiveIntType $subDetailSequence
     */
    private $subDetailSequence = null;

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $noteNumber
     */
    private $noteNumber = [
        
    ];

    /**
     * The adjudication results.
     *
     * @var \TKusy\Hl7FhirR4\ClaimResponseAdjudicationType[] $adjudication
     */
    private $adjudication = [
        
    ];

    /**
     * Gets as subDetailSequence
     *
     * A number to uniquely reference the claim sub-detail entry.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType $subDetailSequence
     * @return self
     */
    public function setSubDetailSequence(\TKusy\Hl7FhirR4\PositiveIntType $subDetailSequence)
    {
        $this->subDetailSequence = $subDetailSequence;
        return $this;
    }

    /**
     * Adds as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $noteNumber
     */
    public function addToNoteNumber(\TKusy\Hl7FhirR4\PositiveIntType $noteNumber)
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
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $noteNumber
     * @return self
     */
    public function setNoteNumber(array $noteNumber)
    {
        $this->noteNumber = $noteNumber;
        return $this;
    }

    /**
     * Adds as adjudication
     *
     * The adjudication results.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ClaimResponseAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7FhirR4\ClaimResponseAdjudicationType $adjudication)
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
     * @return \TKusy\Hl7FhirR4\ClaimResponseAdjudicationType[]
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
     * @param \TKusy\Hl7FhirR4\ClaimResponseAdjudicationType[] $adjudication
     * @return self
     */
    public function setAdjudication(array $adjudication)
    {
        $this->adjudication = $adjudication;
        return $this;
    }


}

