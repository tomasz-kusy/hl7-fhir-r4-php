<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing HealthcareServiceEligibilityType
 *
 * The details of a healthcare service available at a location.
 * XSD Type: HealthcareService.Eligibility
 */
class HealthcareServiceEligibilityType extends BackboneElementType
{

    /**
     * Coded value for the eligibility.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Describes the eligibility conditions for the service.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $comment
     */
    private $comment = null;

    /**
     * Gets as code
     *
     * Coded value for the eligibility.
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
     * Coded value for the eligibility.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Describes the eligibility conditions for the service.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Describes the eligibility conditions for the service.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7Fhir\R4\MarkdownType $comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

