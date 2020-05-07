<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CodeSystemPropertyType
 *
 * The CodeSystem resource is used to declare the existence of and describe a code system or code system supplement and its key properties, and optionally define a part or all of its content.
 * XSD Type: CodeSystem.Property
 */
class CodeSystemPropertyType extends BackboneElementType
{

    /**
     * A code that is used to identify the property. The code is used internally (in CodeSystem.concept.property.code) and also externally, such as in property filters.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * Reference to the formal meaning of the property. One possible source of meaning is the [Concept Properties](codesystem-concept-properties.html) code system.
     *
     * @var \TKusy\Hl7FhirR4\UriType $uri
     */
    private $uri = null;

    /**
     * A description of the property- why it is defined, and how its value might be used.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * The type of the property value. Properties of type "code" contain a code defined by the code system (e.g. a reference to another defined concept).
     *
     * @var \TKusy\Hl7FhirR4\PropertyTypeType $type
     */
    private $type = null;

    /**
     * Gets as code
     *
     * A code that is used to identify the property. The code is used internally (in CodeSystem.concept.property.code) and also externally, such as in property filters.
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
     * A code that is used to identify the property. The code is used internally (in CodeSystem.concept.property.code) and also externally, such as in property filters.
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
     * Gets as uri
     *
     * Reference to the formal meaning of the property. One possible source of meaning is the [Concept Properties](codesystem-concept-properties.html) code system.
     *
     * @return \TKusy\Hl7FhirR4\UriType
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
     * @param \TKusy\Hl7FhirR4\UriType $uri
     * @return self
     */
    public function setUri(\TKusy\Hl7FhirR4\UriType $uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the property- why it is defined, and how its value might be used.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the property- why it is defined, and how its value might be used.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of the property value. Properties of type "code" contain a code defined by the code system (e.g. a reference to another defined concept).
     *
     * @return \TKusy\Hl7FhirR4\PropertyTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the property value. Properties of type "code" contain a code defined by the code system (e.g. a reference to another defined concept).
     *
     * @param \TKusy\Hl7FhirR4\PropertyTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\PropertyTypeType $type)
    {
        $this->type = $type;
        return $this;
    }


}

