<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConceptMapPropertyType
 *
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 * XSD Type: ConceptMap.Property
 */
class ConceptMapPropertyType extends BackboneElementType
{

    /**
     * A code that is used to identify the property. The code is used internally (in ConceptMap.group.element.target.property.code) and also in the $translate operation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $code
     */
    private $code = null;

    /**
     * Reference to the formal meaning of the property.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $uri
     */
    private $uri = null;

    /**
     * A description of the property - why it is defined, and how its value might be used.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * The type of the property value.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapPropertyTypeType $type
     */
    private $type = null;

    /**
     * The CodeSystem that defines the codes from which values of type ```code``` in property values.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $system
     */
    private $system = null;

    /**
     * Gets as code
     *
     * A code that is used to identify the property. The code is used internally (in ConceptMap.group.element.target.property.code) and also in the $translate operation.
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
     * A code that is used to identify the property. The code is used internally (in ConceptMap.group.element.target.property.code) and also in the $translate operation.
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
     * Reference to the formal meaning of the property.
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
     * Reference to the formal meaning of the property.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $uri
     * @return self
     */
    public function setUri(?\TKusy\Hl7Fhir\R5\UriType $uri = null)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the property - why it is defined, and how its value might be used.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the property - why it is defined, and how its value might be used.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of the property value.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapPropertyTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the property value.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapPropertyTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\ConceptMapPropertyTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as system
     *
     * The CodeSystem that defines the codes from which values of type ```code``` in property values.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * The CodeSystem that defines the codes from which values of type ```code``` in property values.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $system
     * @return self
     */
    public function setSystem(?\TKusy\Hl7Fhir\R5\CanonicalType $system = null)
    {
        $this->system = $system;
        return $this;
    }


}

