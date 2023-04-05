<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponseEventType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.Event
 */
class ClaimResponseEventType extends BackboneElementType
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

