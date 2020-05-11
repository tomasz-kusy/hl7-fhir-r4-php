<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureDefinitionDifferentialType
 *
 * A definition of a FHIR structure. This resource is used to describe the underlying resources, data types defined in FHIR, and also for describing extensions and constraints on resources and data types.
 * XSD Type: StructureDefinition.Differential
 */
class StructureDefinitionDifferentialType extends BackboneElementType
{

    /**
     * Captures constraints on each element within the resource.
     *
     * @var \TKusy\Hl7FhirR4\ElementDefinitionType[] $element
     */
    private $element = null;

    /**
     * Adds as element
     *
     * Captures constraints on each element within the resource.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ElementDefinitionType $element
     */
    public function addToElement(\TKusy\Hl7FhirR4\ElementDefinitionType $element)
    {
        $this->element[] = $element;
        return $this;
    }

    /**
     * isset element
     *
     * Captures constraints on each element within the resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElement($index)
    {
        return isset($this->element[$index]);
    }

    /**
     * unset element
     *
     * Captures constraints on each element within the resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElement($index)
    {
        unset($this->element[$index]);
    }

    /**
     * Gets as element
     *
     * Captures constraints on each element within the resource.
     *
     * @return \TKusy\Hl7FhirR4\ElementDefinitionType[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * Captures constraints on each element within the resource.
     *
     * @param \TKusy\Hl7FhirR4\ElementDefinitionType[] $element
     * @return self
     */
    public function setElement(array $element)
    {
        $this->element = $element;
        return $this;
    }


}

