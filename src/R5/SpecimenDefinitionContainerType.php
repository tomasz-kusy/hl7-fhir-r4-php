<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenDefinitionContainerType
 *
 * A kind of specimen with associated set of requirements.
 * XSD Type: SpecimenDefinition.Container
 */
class SpecimenDefinitionContainerType extends BackboneElementType
{

    /**
     * The type of material of the container.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $material
     */
    private $material = null;

    /**
     * The type of container used to contain this kind of specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Color of container cap.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $cap
     */
    private $cap = null;

    /**
     * The textual description of the kind of container.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The capacity (volume or other measure) of this kind of container.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $capacity
     */
    private $capacity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $minimumVolumeQuantity
     */
    private $minimumVolumeQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $minimumVolumeString
     */
    private $minimumVolumeString = null;

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenDefinitionAdditiveType[] $additive
     */
    private $additive = null;

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $preparation
     */
    private $preparation = null;

    /**
     * Gets as material
     *
     * The type of material of the container.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Sets a new material
     *
     * The type of material of the container.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $material
     * @return self
     */
    public function setMaterial(?\TKusy\Hl7Fhir\R5\CodeableConceptType $material = null)
    {
        $this->material = $material;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of container used to contain this kind of specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of container used to contain this kind of specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as cap
     *
     * Color of container cap.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Sets a new cap
     *
     * Color of container cap.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $cap
     * @return self
     */
    public function setCap(?\TKusy\Hl7Fhir\R5\CodeableConceptType $cap = null)
    {
        $this->cap = $cap;
        return $this;
    }

    /**
     * Gets as description
     *
     * The textual description of the kind of container.
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
     * The textual description of the kind of container.
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
     * Gets as capacity
     *
     * The capacity (volume or other measure) of this kind of container.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Sets a new capacity
     *
     * The capacity (volume or other measure) of this kind of container.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $capacity
     * @return self
     */
    public function setCapacity(?\TKusy\Hl7Fhir\R5\QuantityType $capacity = null)
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * Gets as minimumVolumeQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getMinimumVolumeQuantity()
    {
        return $this->minimumVolumeQuantity;
    }

    /**
     * Sets a new minimumVolumeQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $minimumVolumeQuantity
     * @return self
     */
    public function setMinimumVolumeQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $minimumVolumeQuantity = null)
    {
        $this->minimumVolumeQuantity = $minimumVolumeQuantity;
        return $this;
    }

    /**
     * Gets as minimumVolumeString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMinimumVolumeString()
    {
        return $this->minimumVolumeString;
    }

    /**
     * Sets a new minimumVolumeString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $minimumVolumeString
     * @return self
     */
    public function setMinimumVolumeString(?\TKusy\Hl7Fhir\R5\StringType $minimumVolumeString = null)
    {
        $this->minimumVolumeString = $minimumVolumeString;
        return $this;
    }

    /**
     * Adds as additive
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SpecimenDefinitionAdditiveType $additive
     */
    public function addToAdditive(\TKusy\Hl7Fhir\R5\SpecimenDefinitionAdditiveType $additive)
    {
        $this->additive[] = $additive;
        return $this;
    }

    /**
     * isset additive
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditive($index)
    {
        return isset($this->additive[$index]);
    }

    /**
     * unset additive
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditive($index)
    {
        unset($this->additive[$index]);
    }

    /**
     * Gets as additive
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenDefinitionAdditiveType[]
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * Sets a new additive
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenDefinitionAdditiveType[] $additive
     * @return self
     */
    public function setAdditive(array $additive = null)
    {
        $this->additive = $additive;
        return $this;
    }

    /**
     * Gets as preparation
     *
     * Special processing that should be applied to the container for this kind of specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * Sets a new preparation
     *
     * Special processing that should be applied to the container for this kind of specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $preparation
     * @return self
     */
    public function setPreparation(?\TKusy\Hl7Fhir\R5\MarkdownType $preparation = null)
    {
        $this->preparation = $preparation;
        return $this;
    }


}

