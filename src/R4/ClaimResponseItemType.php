<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ClaimResponseItemType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.Item
 */
class ClaimResponseItemType extends BackboneElementType
{

    /**
     * A number to uniquely reference the claim item entries.
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType $itemSequence
     */
    private $itemSequence = null;

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType[] $noteNumber
     */
    private $noteNumber = null;

    /**
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimResponseAdjudicationType[] $adjudication
     */
    private $adjudication = null;

    /**
     * A claim detail. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimResponseDetailType[] $detail
     */
    private $detail = null;

    /**
     * Gets as itemSequence
     *
     * A number to uniquely reference the claim item entries.
     *
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }

    /**
     * Sets a new itemSequence
     *
     * A number to uniquely reference the claim item entries.
     *
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $itemSequence
     * @return self
     */
    public function setItemSequence(\TKusy\Hl7Fhir\R4\PositiveIntType $itemSequence)
    {
        $this->itemSequence = $itemSequence;
        return $this;
    }

    /**
     * Adds as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $noteNumber
     */
    public function addToNoteNumber(\TKusy\Hl7Fhir\R4\PositiveIntType $noteNumber)
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
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType[]
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
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType[] $noteNumber
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
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ClaimResponseAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7Fhir\R4\ClaimResponseAdjudicationType $adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * isset adjudication
     *
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
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
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
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
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
     *
     * @return \TKusy\Hl7Fhir\R4\ClaimResponseAdjudicationType[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * Sets a new adjudication
     *
     * If this item is a group then the values here are a summary of the adjudication of the detail items. If this item is a simple product or service then this is the result of the adjudication of this item.
     *
     * @param \TKusy\Hl7Fhir\R4\ClaimResponseAdjudicationType[] $adjudication
     * @return self
     */
    public function setAdjudication(array $adjudication)
    {
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * Adds as detail
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ClaimResponseDetailType $detail
     */
    public function addToDetail(\TKusy\Hl7Fhir\R4\ClaimResponseDetailType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
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
     * A claim detail. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
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
     * A claim detail. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @return \TKusy\Hl7Fhir\R4\ClaimResponseDetailType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @param \TKusy\Hl7Fhir\R4\ClaimResponseDetailType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

