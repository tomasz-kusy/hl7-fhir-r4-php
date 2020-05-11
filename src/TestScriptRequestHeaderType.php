<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptRequestHeaderType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.RequestHeader
 */
class TestScriptRequestHeaderType extends BackboneElementType
{

    /**
     * The HTTP header field e.g. "Accept".
     *
     * @var string $field
     */
    private $field = null;

    /**
     * The value of the header e.g. "application/fhir+xml".
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as field
     *
     * The HTTP header field e.g. "Accept".
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * The HTTP header field e.g. "Accept".
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Gets as value
     *
     * The value of the header e.g. "application/fhir+xml".
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value of the header e.g. "application/fhir+xml".
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

