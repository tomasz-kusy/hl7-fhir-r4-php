<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ElementDefinitionBaseType
 *
 * Captures constraints on each element within the resource, profile, or extension.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Base
 */
class ElementDefinitionBaseType extends BackboneElementType
{

    /**
     * The Path that identifies the base element - this matches the ElementDefinition.path for that element. Across FHIR, there is only one base definition of any element - that is, an element definition on a [[[StructureDefinition]]] without a StructureDefinition.base.
     *
     * @var string $path
     */
    private $path = null;

    /**
     * Minimum cardinality of the base element identified by the path.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $min
     */
    private $min = null;

    /**
     * Maximum cardinality of the base element identified by the path.
     *
     * @var string $max
     */
    private $max = null;

    /**
     * Gets as path
     *
     * The Path that identifies the base element - this matches the ElementDefinition.path for that element. Across FHIR, there is only one base definition of any element - that is, an element definition on a [[[StructureDefinition]]] without a StructureDefinition.base.
     *
     * @return string
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
     * @param string $path
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as min
     *
     * Minimum cardinality of the base element identified by the path.
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
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
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $min
     * @return self
     */
    public function setMin(\TKusy\Hl7FhirR4\UnsignedIntType $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * Maximum cardinality of the base element identified by the path.
     *
     * @return string
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
     * @param string $max
     * @return self
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }


}

