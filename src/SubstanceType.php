<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceType
 *
 * A homogeneous material with a definite composition.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Substance
 */
class SubstanceType extends DomainResourceType
{

    /**
     * Unique identifier for the substance.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A code to indicate if the substance is actively used.
     *
     * @var \TKusy\Hl7FhirR4\FHIRSubstanceStatusType $status
     */
    private $status = null;

    /**
     * A code that classifies the general type of substance. This is used for searching, sorting and display purposes.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * A code (or set of codes) that identify this substance.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A description of the substance - its appearance, handling requirements, and other usage notes.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceInstanceType[] $instance
     */
    private $instance = null;

    /**
     * A substance can be composed of other substances.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceIngredientType[] $ingredient
     */
    private $ingredient = null;

    /**
     * Adds as identifier
     *
     * Unique identifier for the substance.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Unique identifier for the substance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Unique identifier for the substance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Unique identifier for the substance.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique identifier for the substance.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code to indicate if the substance is actively used.
     *
     * @return \TKusy\Hl7FhirR4\FHIRSubstanceStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code to indicate if the substance is actively used.
     *
     * @param \TKusy\Hl7FhirR4\FHIRSubstanceStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\FHIRSubstanceStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * A code that classifies the general type of substance. This is used for searching, sorting and display purposes.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A code that classifies the general type of substance. This is used for searching, sorting and display purposes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * A code that classifies the general type of substance. This is used for searching, sorting and display purposes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * A code that classifies the general type of substance. This is used for searching, sorting and display purposes.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A code that classifies the general type of substance. This is used for searching, sorting and display purposes.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code (or set of codes) that identify this substance.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code (or set of codes) that identify this substance.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the substance - its appearance, handling requirements, and other usage notes.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the substance - its appearance, handling requirements, and other usage notes.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as instance
     *
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceInstanceType $instance
     */
    public function addToInstance(\TKusy\Hl7FhirR4\SubstanceInstanceType $instance)
    {
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * isset instance
     *
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstance($index)
    {
        return isset($this->instance[$index]);
    }

    /**
     * unset instance
     *
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstance($index)
    {
        unset($this->instance[$index]);
    }

    /**
     * Gets as instance
     *
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceInstanceType[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceInstanceType[] $instance
     * @return self
     */
    public function setInstance(array $instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * A substance can be composed of other substances.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceIngredientType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7FhirR4\SubstanceIngredientType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * A substance can be composed of other substances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIngredient($index)
    {
        return isset($this->ingredient[$index]);
    }

    /**
     * unset ingredient
     *
     * A substance can be composed of other substances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIngredient($index)
    {
        unset($this->ingredient[$index]);
    }

    /**
     * Gets as ingredient
     *
     * A substance can be composed of other substances.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceIngredientType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * A substance can be composed of other substances.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceIngredientType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient)
    {
        $this->ingredient = $ingredient;
        return $this;
    }


}

