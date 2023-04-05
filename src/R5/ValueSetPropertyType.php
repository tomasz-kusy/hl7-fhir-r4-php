<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetPropertyType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Property
 */
class ValueSetPropertyType extends BackboneElementType
{

    /**
     * A code that is used to identify the property. The code is used in ValueSet.expansion.contains.property.code.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $code
     */
    private $code = null;

    /**
     * Reference to the formal meaning of the property. One possible source of meaning is the [Concept Properties](codesystem-concept-properties.html) code system.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $uri
     */
    private $uri = null;

    /**
     * Gets as code
     *
     * A code that is used to identify the property. The code is used in ValueSet.expansion.contains.property.code.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that is used to identify the property. The code is used in ValueSet.expansion.contains.property.code.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as uri
     *
     * Reference to the formal meaning of the property. One possible source of meaning is the [Concept Properties](codesystem-concept-properties.html) code system.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * Reference to the formal meaning of the property. One possible source of meaning is the [Concept Properties](codesystem-concept-properties.html) code system.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $uri
     * @return self
     */
    public function setUri(?\TKusy\Hl7Fhir\R5\UriType $uri = null)
    {
        $this->uri = $uri;
        return $this;
    }


}

