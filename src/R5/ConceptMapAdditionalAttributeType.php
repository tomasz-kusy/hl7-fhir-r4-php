<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConceptMapAdditionalAttributeType
 *
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 * XSD Type: ConceptMap.AdditionalAttribute
 */
class ConceptMapAdditionalAttributeType extends BackboneElementType
{

    /**
     * A code that is used to identify this additional data attribute. The code is used internally in ConceptMap.group.element.target.dependsOn.attribute and ConceptMap.group.element.target.product.attribute.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $code
     */
    private $code = null;

    /**
     * Reference to the formal definition of the source/target data element. For elements defined by the FHIR specification, or using a FHIR logical model, the correct format is {canonical-url}#{element-id}.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $uri
     */
    private $uri = null;

    /**
     * A description of the additional attribute and/or the data element it refers to - why it is defined, and how the value might be used in mappings, and a discussion of issues associated with the use of the data element.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * The type of the source data contained in this concept map for this data element.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapAttributeTypeType $type
     */
    private $type = null;

    /**
     * Gets as code
     *
     * A code that is used to identify this additional data attribute. The code is used internally in ConceptMap.group.element.target.dependsOn.attribute and ConceptMap.group.element.target.product.attribute.
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
     * A code that is used to identify this additional data attribute. The code is used internally in ConceptMap.group.element.target.dependsOn.attribute and ConceptMap.group.element.target.product.attribute.
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
     * Reference to the formal definition of the source/target data element. For elements defined by the FHIR specification, or using a FHIR logical model, the correct format is {canonical-url}#{element-id}.
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
     * Reference to the formal definition of the source/target data element. For elements defined by the FHIR specification, or using a FHIR logical model, the correct format is {canonical-url}#{element-id}.
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
     * A description of the additional attribute and/or the data element it refers to - why it is defined, and how the value might be used in mappings, and a discussion of issues associated with the use of the data element.
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
     * A description of the additional attribute and/or the data element it refers to - why it is defined, and how the value might be used in mappings, and a discussion of issues associated with the use of the data element.
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
     * The type of the source data contained in this concept map for this data element.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapAttributeTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the source data contained in this concept map for this data element.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapAttributeTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\ConceptMapAttributeTypeType $type)
    {
        $this->type = $type;
        return $this;
    }


}

