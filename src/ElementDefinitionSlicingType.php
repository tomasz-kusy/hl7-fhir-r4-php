<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ElementDefinitionSlicingType
 *
 * Captures constraints on each element within the resource, profile, or extension.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Slicing
 */
class ElementDefinitionSlicingType extends BackboneElementType
{

    /**
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     *
     * @var \TKusy\Hl7FhirR4\ElementDefinitionDiscriminatorType[] $discriminator
     */
    private $discriminator = null;

    /**
     * A human-readable text description of how the slicing works. If there is no discriminator, this is required to be present to provide whatever information is possible about how the slices can be differentiated.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * If the matching elements have to occur in the same order as defined in the profile.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $ordered
     */
    private $ordered = null;

    /**
     * Whether additional slices are allowed or not. When the slices are ordered, profile authors can also say that additional slices are only allowed at the end.
     *
     * @var \TKusy\Hl7FhirR4\SlicingRulesType $rules
     */
    private $rules = null;

    /**
     * Adds as discriminator
     *
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ElementDefinitionDiscriminatorType $discriminator
     */
    public function addToDiscriminator(\TKusy\Hl7FhirR4\ElementDefinitionDiscriminatorType $discriminator)
    {
        $this->discriminator[] = $discriminator;
        return $this;
    }

    /**
     * isset discriminator
     *
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscriminator($index)
    {
        return isset($this->discriminator[$index]);
    }

    /**
     * unset discriminator
     *
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscriminator($index)
    {
        unset($this->discriminator[$index]);
    }

    /**
     * Gets as discriminator
     *
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     *
     * @return \TKusy\Hl7FhirR4\ElementDefinitionDiscriminatorType[]
     */
    public function getDiscriminator()
    {
        return $this->discriminator;
    }

    /**
     * Sets a new discriminator
     *
     * Designates which child elements are used to discriminate between the slices when processing an instance. If one or more discriminators are provided, the value of the child elements in the instance data SHALL completely distinguish which slice the element in the resource matches based on the allowed values for those elements in each of the slices.
     *
     * @param \TKusy\Hl7FhirR4\ElementDefinitionDiscriminatorType[] $discriminator
     * @return self
     */
    public function setDiscriminator(array $discriminator)
    {
        $this->discriminator = $discriminator;
        return $this;
    }

    /**
     * Gets as description
     *
     * A human-readable text description of how the slicing works. If there is no discriminator, this is required to be present to provide whatever information is possible about how the slices can be differentiated.
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
     * A human-readable text description of how the slicing works. If there is no discriminator, this is required to be present to provide whatever information is possible about how the slices can be differentiated.
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
     * Gets as ordered
     *
     * If the matching elements have to occur in the same order as defined in the profile.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getOrdered()
    {
        return $this->ordered;
    }

    /**
     * Sets a new ordered
     *
     * If the matching elements have to occur in the same order as defined in the profile.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $ordered
     * @return self
     */
    public function setOrdered(\TKusy\Hl7FhirR4\BooleanType $ordered)
    {
        $this->ordered = $ordered;
        return $this;
    }

    /**
     * Gets as rules
     *
     * Whether additional slices are allowed or not. When the slices are ordered, profile authors can also say that additional slices are only allowed at the end.
     *
     * @return \TKusy\Hl7FhirR4\SlicingRulesType
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Sets a new rules
     *
     * Whether additional slices are allowed or not. When the slices are ordered, profile authors can also say that additional slices are only allowed at the end.
     *
     * @param \TKusy\Hl7FhirR4\SlicingRulesType $rules
     * @return self
     */
    public function setRules(\TKusy\Hl7FhirR4\SlicingRulesType $rules)
    {
        $this->rules = $rules;
        return $this;
    }


}

