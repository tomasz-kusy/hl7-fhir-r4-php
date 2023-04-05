<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceType
 *
 * A homogeneous material with a definite composition.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Substance
 */
class SubstanceType extends DomainResourceType
{

    /**
     * Unique identifier for the substance. For an instance, an identifier associated with the package/container (usually a label affixed directly).
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A boolean to indicate if this an instance of a substance or a kind of one (a definition).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $instance
     */
    private $instance = null;

    /**
     * A code to indicate if the substance is actively used.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRSubstanceStatusType $status
     */
    private $status = null;

    /**
     * A code that classifies the general type of substance. This is used for searching, sorting and display purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * A code (or set of codes) that identify this substance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     */
    private $code = null;

    /**
     * A description of the substance - its appearance, handling requirements, and other usage notes.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * When the substance is no longer valid to use. For some substances, a single arbitrary date is used for expiry.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $expiry
     */
    private $expiry = null;

    /**
     * The amount of the substance.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * A substance can be composed of other substances.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceIngredientType[] $ingredient
     */
    private $ingredient = null;

    /**
     * Adds as identifier
     *
     * Unique identifier for the substance. For an instance, an identifier associated with the package/container (usually a label affixed directly).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Unique identifier for the substance. For an instance, an identifier associated with the package/container (usually a label affixed directly).
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
     * Unique identifier for the substance. For an instance, an identifier associated with the package/container (usually a label affixed directly).
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
     * Unique identifier for the substance. For an instance, an identifier associated with the package/container (usually a label affixed directly).
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique identifier for the substance. For an instance, an identifier associated with the package/container (usually a label affixed directly).
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as instance
     *
     * A boolean to indicate if this an instance of a substance or a kind of one (a definition).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * A boolean to indicate if this an instance of a substance or a kind of one (a definition).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $instance
     * @return self
     */
    public function setInstance(\TKusy\Hl7Fhir\R5\BooleanType $instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code to indicate if the substance is actively used.
     *
     * @return \TKusy\Hl7Fhir\R5\FHIRSubstanceStatusType
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
     * @param \TKusy\Hl7Fhir\R5\FHIRSubstanceStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\FHIRSubstanceStatusType $status = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code (or set of codes) that identify this substance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableReferenceType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the substance - its appearance, handling requirements, and other usage notes.
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
     * A description of the substance - its appearance, handling requirements, and other usage notes.
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
     * Gets as expiry
     *
     * When the substance is no longer valid to use. For some substances, a single arbitrary date is used for expiry.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Sets a new expiry
     *
     * When the substance is no longer valid to use. For some substances, a single arbitrary date is used for expiry.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $expiry
     * @return self
     */
    public function setExpiry(?\TKusy\Hl7Fhir\R5\DateTimeType $expiry = null)
    {
        $this->expiry = $expiry;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount of the substance.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount of the substance.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * A substance can be composed of other substances.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceIngredientType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7Fhir\R5\SubstanceIngredientType $ingredient)
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
     * @return \TKusy\Hl7Fhir\R5\SubstanceIngredientType[]
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
     * @param \TKusy\Hl7Fhir\R5\SubstanceIngredientType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient = null)
    {
        $this->ingredient = $ingredient;
        return $this;
    }


}

