<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CoverageEligibilityRequestEventType
 *
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 * XSD Type: CoverageEligibilityRequest.Event
 */
class CoverageEligibilityRequestEventType extends BackboneElementType
{

    /**
     * A coded event such as when a service is expected or a card printed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $whenDateTime
     */
    private $whenDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $whenPeriod
     */
    private $whenPeriod = null;

    /**
     * Gets as type
     *
     * A coded event such as when a service is expected or a card printed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A coded event such as when a service is expected or a card printed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as whenDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getWhenDateTime()
    {
        return $this->whenDateTime;
    }

    /**
     * Sets a new whenDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $whenDateTime
     * @return self
     */
    public function setWhenDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $whenDateTime = null)
    {
        $this->whenDateTime = $whenDateTime;
        return $this;
    }

    /**
     * Gets as whenPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getWhenPeriod()
    {
        return $this->whenPeriod;
    }

    /**
     * Sets a new whenPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $whenPeriod
     * @return self
     */
    public function setWhenPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $whenPeriod = null)
    {
        $this->whenPeriod = $whenPeriod;
        return $this;
    }


}

