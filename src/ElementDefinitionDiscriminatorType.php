<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ElementDefinitionDiscriminatorType
 *
 * Captures constraints on each element within the resource, profile, or extension.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Discriminator
 */
class ElementDefinitionDiscriminatorType extends BackboneElementType
{

    /**
     * How the element value is interpreted when discrimination is evaluated.
     *
     * @var \TKusy\Hl7FhirR4\DiscriminatorTypeType $type
     */
    private $type = null;

    /**
     * A FHIRPath expression, using [the simple subset of FHIRPath](fhirpath.html#simple), that is used to identify the element on which discrimination is based.
     *
     * @var \TKusy\Hl7FhirR4\StringType $path
     */
    private $path = null;

    /**
     * Gets as type
     *
     * How the element value is interpreted when discrimination is evaluated.
     *
     * @return \TKusy\Hl7FhirR4\DiscriminatorTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * How the element value is interpreted when discrimination is evaluated.
     *
     * @param \TKusy\Hl7FhirR4\DiscriminatorTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\DiscriminatorTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as path
     *
     * A FHIRPath expression, using [the simple subset of FHIRPath](fhirpath.html#simple), that is used to identify the element on which discrimination is based.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * A FHIRPath expression, using [the simple subset of FHIRPath](fhirpath.html#simple), that is used to identify the element on which discrimination is based.
     *
     * @param \TKusy\Hl7FhirR4\StringType $path
     * @return self
     */
    public function setPath(\TKusy\Hl7FhirR4\StringType $path)
    {
        $this->path = $path;
        return $this;
    }


}

