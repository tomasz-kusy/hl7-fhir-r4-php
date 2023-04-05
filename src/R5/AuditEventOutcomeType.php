<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AuditEventOutcomeType
 *
 * A record of an event relevant for purposes such as operations, privacy, security, maintenance, and performance analysis.
 * XSD Type: AuditEvent.Outcome
 */
class AuditEventOutcomeType extends BackboneElementType
{

    /**
     * Indicates whether the event succeeded or failed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $code
     */
    private $code = null;

    /**
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $detail
     */
    private $detail = null;

    /**
     * Gets as code
     *
     * Indicates whether the event succeeded or failed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Indicates whether the event succeeded or failed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodingType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as detail
     *
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $detail
     */
    public function addToDetail(\TKusy\Hl7Fhir\R5\CodeableConceptType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
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
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
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
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Additional details about the error. This may be a text description of the error or a system code that identifies the error.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $detail
     * @return self
     */
    public function setDetail(array $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }


}

