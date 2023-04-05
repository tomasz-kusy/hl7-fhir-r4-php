<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CoverageEligibilityResponseErrorType
 *
 * This resource provides eligibility and plan details from the processing of an CoverageEligibilityRequest resource.
 * XSD Type: CoverageEligibilityResponse.Error
 */
class CoverageEligibilityResponseErrorType extends BackboneElementType
{

    /**
     * An error code,from a specified code system, which details why the eligibility check could not be performed.
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
     * Gets as code
     *
     * An error code,from a specified code system, which details why the eligibility check could not be performed.
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
     * An error code,from a specified code system, which details why the eligibility check could not be performed.
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

