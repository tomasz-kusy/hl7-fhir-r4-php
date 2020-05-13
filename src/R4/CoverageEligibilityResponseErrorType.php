<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * An error code,from a specified code system, which details why the eligibility check could not be performed.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }


}

