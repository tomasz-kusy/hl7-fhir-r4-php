<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponseErrorType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.Error
 */
class ClaimResponseErrorType extends BackboneElementType
{

    /**
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $itemSequence
     */
    private $itemSequence = null;

    /**
     * The sequence number of the detail within the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $detailSequence
     */
    private $detailSequence = null;

    /**
     * The sequence number of the sub-detail within the detail within the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $subDetailSequence
     */
    private $subDetailSequence = null;

    /**
     * An error code, from a specified code system, which details why the claim could not be adjudicated.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $expression
     */
    private $expression = null;

    /**
     * Gets as itemSequence
     *
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }

    /**
     * Sets a new itemSequence
     *
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $itemSequence
     * @return self
     */
    public function setItemSequence(?\TKusy\Hl7Fhir\R5\PositiveIntType $itemSequence = null)
    {
        $this->itemSequence = $itemSequence;
        return $this;
    }

    /**
     * Gets as detailSequence
     *
     * The sequence number of the detail within the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
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
     * The sequence number of the detail within the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $detailSequence
     * @return self
     */
    public function setDetailSequence(?\TKusy\Hl7Fhir\R5\PositiveIntType $detailSequence = null)
    {
        $this->detailSequence = $detailSequence;
        return $this;
    }

    /**
     * Gets as subDetailSequence
     *
     * The sequence number of the sub-detail within the detail within the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
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
     * The sequence number of the sub-detail within the detail within the line item submitted which contains the error. This value is omitted when the error occurs outside of the item structure.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $subDetailSequence
     * @return self
     */
    public function setSubDetailSequence(?\TKusy\Hl7Fhir\R5\PositiveIntType $subDetailSequence = null)
    {
        $this->subDetailSequence = $subDetailSequence;
        return $this;
    }

    /**
     * Gets as code
     *
     * An error code, from a specified code system, which details why the claim could not be adjudicated.
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
     * An error code, from a specified code system, which details why the claim could not be adjudicated.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $expression
     */
    public function addToExpression(\TKusy\Hl7Fhir\R5\StringType $expression)
    {
        $this->expression[] = $expression;
        return $this;
    }

    /**
     * isset expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpression($index)
    {
        return isset($this->expression[$index]);
    }

    /**
     * unset expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpression($index)
    {
        unset($this->expression[$index]);
    }

    /**
     * Gets as expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * A [simple subset of FHIRPath](fhirpath.html#simple) limited to element names, repetition indicators and the default child accessor that identifies one of the elements in the resource that caused this issue to be raised.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $expression
     * @return self
     */
    public function setExpression(array $expression = null)
    {
        $this->expression = $expression;
        return $this;
    }


}

