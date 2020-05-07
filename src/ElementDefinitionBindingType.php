<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ElementDefinitionBindingType
 *
 * Captures constraints on each element within the resource, profile, or extension.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Binding
 */
class ElementDefinitionBindingType extends BackboneElementType
{

    /**
     * Indicates the degree of conformance expectations associated with this binding - that is, the degree to which the provided value set must be adhered to in the instances.
     *
     * @var \TKusy\Hl7FhirR4\BindingStrengthType $strength
     */
    private $strength = null;

    /**
     * Describes the intended use of this particular set of codes.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Refers to the value set that identifies the set of codes the binding refers to.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $valueSet
     */
    private $valueSet = null;

    /**
     * Gets as strength
     *
     * Indicates the degree of conformance expectations associated with this binding - that is, the degree to which the provided value set must be adhered to in the instances.
     *
     * @return \TKusy\Hl7FhirR4\BindingStrengthType
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Sets a new strength
     *
     * Indicates the degree of conformance expectations associated with this binding - that is, the degree to which the provided value set must be adhered to in the instances.
     *
     * @param \TKusy\Hl7FhirR4\BindingStrengthType $strength
     * @return self
     */
    public function setStrength(\TKusy\Hl7FhirR4\BindingStrengthType $strength)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * Gets as description
     *
     * Describes the intended use of this particular set of codes.
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
     * Describes the intended use of this particular set of codes.
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
     * Gets as valueSet
     *
     * Refers to the value set that identifies the set of codes the binding refers to.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * Refers to the value set that identifies the set of codes the binding refers to.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $valueSet
     * @return self
     */
    public function setValueSet(\TKusy\Hl7FhirR4\CanonicalType $valueSet)
    {
        $this->valueSet = $valueSet;
        return $this;
    }


}

