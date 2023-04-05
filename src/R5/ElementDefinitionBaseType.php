<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ElementDefinitionBaseType
 *
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Base
 */
class ElementDefinitionBaseType extends BackboneTypeType
{

    /**
     * The Path that identifies the base element - this matches the ElementDefinition.path for that element. Across FHIR, there is only one base definition of any element - that is, an element definition on a [[[StructureDefinition]]] without a StructureDefinition.base.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $path
     */
    private $path = null;

    /**
     * Minimum cardinality of the base element identified by the path.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $min
     */
    private $min = null;

    /**
     * Maximum cardinality of the base element identified by the path.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $max
     */
    private $max = null;

    /**
     * Gets as path
     *
     * The Path that identifies the base element - this matches the ElementDefinition.path for that element. Across FHIR, there is only one base definition of any element - that is, an element definition on a [[[StructureDefinition]]] without a StructureDefinition.base.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * The Path that identifies the base element - this matches the ElementDefinition.path for that element. Across FHIR, there is only one base definition of any element - that is, an element definition on a [[[StructureDefinition]]] without a StructureDefinition.base.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $path
     * @return self
     */
    public function setPath(\TKusy\Hl7Fhir\R5\StringType $path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as min
     *
     * Minimum cardinality of the base element identified by the path.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * Minimum cardinality of the base element identified by the path.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $min
     * @return self
     */
    public function setMin(\TKusy\Hl7Fhir\R5\UnsignedIntType $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * Maximum cardinality of the base element identified by the path.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * Maximum cardinality of the base element identified by the path.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $max
     * @return self
     */
    public function setMax(\TKusy\Hl7Fhir\R5\StringType $max)
    {
        $this->max = $max;
        return $this;
    }


}

