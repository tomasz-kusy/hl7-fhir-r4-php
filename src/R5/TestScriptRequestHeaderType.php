<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\StringType $field
     */
    private $field = null;

    /**
     * The value of the header e.g. "application/fhir+xml".
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Gets as field
     *
     * The HTTP header field e.g. "Accept".
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $field
     * @return self
     */
    public function setField(\TKusy\Hl7Fhir\R5\StringType $field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Gets as value
     *
     * The value of the header e.g. "application/fhir+xml".
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

