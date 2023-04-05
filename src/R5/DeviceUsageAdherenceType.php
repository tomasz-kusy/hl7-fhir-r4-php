<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceUsageAdherenceType
 *
 * A record of a device being used by a patient where the record is the result of a report from the patient or a clinician.
 * XSD Type: DeviceUsage.Adherence
 */
class DeviceUsageAdherenceType extends BackboneElementType
{

    /**
     * Type of adherence.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Reason for adherence type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $reason
     */
    private $reason = null;

    /**
     * Gets as code
     *
     * Type of adherence.
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
     * Type of adherence.
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
     * Adds as reason
     *
     * Reason for adherence type.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * Reason for adherence type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * Reason for adherence type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * Reason for adherence type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Reason for adherence type.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $reason
     * @return self
     */
    public function setReason(array $reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

