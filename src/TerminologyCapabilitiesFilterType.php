<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesFilterType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Filter
 */
class TerminologyCapabilitiesFilterType extends BackboneElementType
{

    /**
     * Code of the property supported.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * Operations supported for the property.
     *
     * @var \TKusy\Hl7FhirR4\CodeType[] $op
     */
    private $op = [
        
    ];

    /**
     * Gets as code
     *
     * Code of the property supported.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code of the property supported.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as op
     *
     * Operations supported for the property.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeType $op
     */
    public function addToOp(\TKusy\Hl7FhirR4\CodeType $op)
    {
        $this->op[] = $op;
        return $this;
    }

    /**
     * isset op
     *
     * Operations supported for the property.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOp($index)
    {
        return isset($this->op[$index]);
    }

    /**
     * unset op
     *
     * Operations supported for the property.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOp($index)
    {
        unset($this->op[$index]);
    }

    /**
     * Gets as op
     *
     * Operations supported for the property.
     *
     * @return \TKusy\Hl7FhirR4\CodeType[]
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Sets a new op
     *
     * Operations supported for the property.
     *
     * @param \TKusy\Hl7FhirR4\CodeType[] $op
     * @return self
     */
    public function setOp(array $op)
    {
        $this->op = $op;
        return $this;
    }


}

