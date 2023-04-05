<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ElementDefinitionBindingType
 *
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Binding
 */
class ElementDefinitionBindingType extends BackboneTypeType
{

    /**
     * Indicates the degree of conformance expectations associated with this binding - that is, the degree to which the provided value set must be adhered to in the instances.
     *
     * @var \TKusy\Hl7Fhir\R5\BindingStrengthType $strength
     */
    private $strength = null;

    /**
     * Describes the intended use of this particular set of codes.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Refers to the value set that identifies the set of codes the binding refers to.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     */
    private $valueSet = null;

    /**
     * Additional bindings that help applications implementing this element. Additional bindings do not replace the main binding but provide more information and/or context.
     *
     * @var \TKusy\Hl7Fhir\R5\ElementDefinitionAdditionalType[] $additional
     */
    private $additional = null;

    /**
     * Gets as strength
     *
     * Indicates the degree of conformance expectations associated with this binding - that is, the degree to which the provided value set must be adhered to in the instances.
     *
     * @return \TKusy\Hl7Fhir\R5\BindingStrengthType
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
     * @param \TKusy\Hl7Fhir\R5\BindingStrengthType $strength
     * @return self
     */
    public function setStrength(\TKusy\Hl7Fhir\R5\BindingStrengthType $strength)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * Gets as description
     *
     * Describes the intended use of this particular set of codes.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as valueSet
     *
     * Refers to the value set that identifies the set of codes the binding refers to.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
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
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     * @return self
     */
    public function setValueSet(?\TKusy\Hl7Fhir\R5\CanonicalType $valueSet = null)
    {
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Adds as additional
     *
     * Additional bindings that help applications implementing this element. Additional bindings do not replace the main binding but provide more information and/or context.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ElementDefinitionAdditionalType $additional
     */
    public function addToAdditional(\TKusy\Hl7Fhir\R5\ElementDefinitionAdditionalType $additional)
    {
        $this->additional[] = $additional;
        return $this;
    }

    /**
     * isset additional
     *
     * Additional bindings that help applications implementing this element. Additional bindings do not replace the main binding but provide more information and/or context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditional($index)
    {
        return isset($this->additional[$index]);
    }

    /**
     * unset additional
     *
     * Additional bindings that help applications implementing this element. Additional bindings do not replace the main binding but provide more information and/or context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditional($index)
    {
        unset($this->additional[$index]);
    }

    /**
     * Gets as additional
     *
     * Additional bindings that help applications implementing this element. Additional bindings do not replace the main binding but provide more information and/or context.
     *
     * @return \TKusy\Hl7Fhir\R5\ElementDefinitionAdditionalType[]
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Sets a new additional
     *
     * Additional bindings that help applications implementing this element. Additional bindings do not replace the main binding but provide more information and/or context.
     *
     * @param \TKusy\Hl7Fhir\R5\ElementDefinitionAdditionalType[] $additional
     * @return self
     */
    public function setAdditional(array $additional = null)
    {
        $this->additional = $additional;
        return $this;
    }


}

