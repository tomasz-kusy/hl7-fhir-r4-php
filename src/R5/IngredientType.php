<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing IngredientType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Ingredient
 */
class IngredientType extends DomainResourceType
{

    /**
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * The status of this ingredient. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * The product which this ingredient is a constituent part of.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $for
     */
    private $for = null;

    /**
     * A classification of the ingredient identifying its purpose within the product, e.g. active, inactive.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * A classification of the ingredient identifying its precise purpose(s) in the drug product. This extends the Ingredient.role to add more detail. Example: antioxidant, alkalizing agent.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $function
     */
    private $function = null;

    /**
     * A classification of the ingredient according to where in the physical item it tends to be used, such the outer shell of a tablet, inner body or ink.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $group
     */
    private $group = null;

    /**
     * If the ingredient is a known or suspected allergen. Note that this is a property of the substance, so if a reference to a SubstanceDefinition is used to decribe that (rather than just a code), the allergen information should go there, not here.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $allergenicIndicator
     */
    private $allergenicIndicator = null;

    /**
     * A place for providing any notes that are relevant to the component, e.g. removed during process, adjusted for loss on drying.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $comment
     */
    private $comment = null;

    /**
     * The organization(s) that manufacture this ingredient. Can be used to indicate: 1) Organizations we are aware of that manufacture this ingredient 2) Specific Manufacturer(s) currently being used 3) Set of organisations allowed to manufacture this ingredient for this product Users must be clear on the application of context relevant to their use case.
     *
     * @var \TKusy\Hl7Fhir\R5\IngredientManufacturerType[] $manufacturer
     */
    private $manufacturer = null;

    /**
     * The substance that comprises this ingredient.
     *
     * @var \TKusy\Hl7Fhir\R5\IngredientSubstanceType $substance
     */
    private $substance = null;

    /**
     * Gets as identifier
     *
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this ingredient. Enables tracking the life-cycle of the content.
     *
     * @return \TKusy\Hl7Fhir\R5\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of this ingredient. Enables tracking the life-cycle of the content.
     *
     * @param \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as for
     *
     * The product which this ingredient is a constituent part of.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $for
     */
    public function addToFor(\TKusy\Hl7Fhir\R5\ReferenceType $for)
    {
        $this->for[] = $for;
        return $this;
    }

    /**
     * isset for
     *
     * The product which this ingredient is a constituent part of.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFor($index)
    {
        return isset($this->for[$index]);
    }

    /**
     * unset for
     *
     * The product which this ingredient is a constituent part of.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFor($index)
    {
        unset($this->for[$index]);
    }

    /**
     * Gets as for
     *
     * The product which this ingredient is a constituent part of.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getFor()
    {
        return $this->for;
    }

    /**
     * Sets a new for
     *
     * The product which this ingredient is a constituent part of.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $for
     * @return self
     */
    public function setFor(array $for = null)
    {
        $this->for = $for;
        return $this;
    }

    /**
     * Gets as role
     *
     * A classification of the ingredient identifying its purpose within the product, e.g. active, inactive.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A classification of the ingredient identifying its purpose within the product, e.g. active, inactive.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7Fhir\R5\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as function
     *
     * A classification of the ingredient identifying its precise purpose(s) in the drug product. This extends the Ingredient.role to add more detail. Example: antioxidant, alkalizing agent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    public function addToFunction(\TKusy\Hl7Fhir\R5\CodeableConceptType $function)
    {
        $this->function[] = $function;
        return $this;
    }

    /**
     * isset function
     *
     * A classification of the ingredient identifying its precise purpose(s) in the drug product. This extends the Ingredient.role to add more detail. Example: antioxidant, alkalizing agent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFunction($index)
    {
        return isset($this->function[$index]);
    }

    /**
     * unset function
     *
     * A classification of the ingredient identifying its precise purpose(s) in the drug product. This extends the Ingredient.role to add more detail. Example: antioxidant, alkalizing agent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFunction($index)
    {
        unset($this->function[$index]);
    }

    /**
     * Gets as function
     *
     * A classification of the ingredient identifying its precise purpose(s) in the drug product. This extends the Ingredient.role to add more detail. Example: antioxidant, alkalizing agent.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * A classification of the ingredient identifying its precise purpose(s) in the drug product. This extends the Ingredient.role to add more detail. Example: antioxidant, alkalizing agent.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $function
     * @return self
     */
    public function setFunction(array $function = null)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Gets as group
     *
     * A classification of the ingredient according to where in the physical item it tends to be used, such the outer shell of a tablet, inner body or ink.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * A classification of the ingredient according to where in the physical item it tends to be used, such the outer shell of a tablet, inner body or ink.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $group
     * @return self
     */
    public function setGroup(?\TKusy\Hl7Fhir\R5\CodeableConceptType $group = null)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Gets as allergenicIndicator
     *
     * If the ingredient is a known or suspected allergen. Note that this is a property of the substance, so if a reference to a SubstanceDefinition is used to decribe that (rather than just a code), the allergen information should go there, not here.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAllergenicIndicator()
    {
        return $this->allergenicIndicator;
    }

    /**
     * Sets a new allergenicIndicator
     *
     * If the ingredient is a known or suspected allergen. Note that this is a property of the substance, so if a reference to a SubstanceDefinition is used to decribe that (rather than just a code), the allergen information should go there, not here.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $allergenicIndicator
     * @return self
     */
    public function setAllergenicIndicator(?\TKusy\Hl7Fhir\R5\BooleanType $allergenicIndicator = null)
    {
        $this->allergenicIndicator = $allergenicIndicator;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A place for providing any notes that are relevant to the component, e.g. removed during process, adjusted for loss on drying.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A place for providing any notes that are relevant to the component, e.g. removed during process, adjusted for loss on drying.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $comment
     * @return self
     */
    public function setComment(?\TKusy\Hl7Fhir\R5\MarkdownType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * The organization(s) that manufacture this ingredient. Can be used to indicate: 1) Organizations we are aware of that manufacture this ingredient 2) Specific Manufacturer(s) currently being used 3) Set of organisations allowed to manufacture this ingredient for this product Users must be clear on the application of context relevant to their use case.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IngredientManufacturerType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7Fhir\R5\IngredientManufacturerType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * The organization(s) that manufacture this ingredient. Can be used to indicate: 1) Organizations we are aware of that manufacture this ingredient 2) Specific Manufacturer(s) currently being used 3) Set of organisations allowed to manufacture this ingredient for this product Users must be clear on the application of context relevant to their use case.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturer($index)
    {
        return isset($this->manufacturer[$index]);
    }

    /**
     * unset manufacturer
     *
     * The organization(s) that manufacture this ingredient. Can be used to indicate: 1) Organizations we are aware of that manufacture this ingredient 2) Specific Manufacturer(s) currently being used 3) Set of organisations allowed to manufacture this ingredient for this product Users must be clear on the application of context relevant to their use case.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturer($index)
    {
        unset($this->manufacturer[$index]);
    }

    /**
     * Gets as manufacturer
     *
     * The organization(s) that manufacture this ingredient. Can be used to indicate: 1) Organizations we are aware of that manufacture this ingredient 2) Specific Manufacturer(s) currently being used 3) Set of organisations allowed to manufacture this ingredient for this product Users must be clear on the application of context relevant to their use case.
     *
     * @return \TKusy\Hl7Fhir\R5\IngredientManufacturerType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * The organization(s) that manufacture this ingredient. Can be used to indicate: 1) Organizations we are aware of that manufacture this ingredient 2) Specific Manufacturer(s) currently being used 3) Set of organisations allowed to manufacture this ingredient for this product Users must be clear on the application of context relevant to their use case.
     *
     * @param \TKusy\Hl7Fhir\R5\IngredientManufacturerType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Gets as substance
     *
     * The substance that comprises this ingredient.
     *
     * @return \TKusy\Hl7Fhir\R5\IngredientSubstanceType
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Sets a new substance
     *
     * The substance that comprises this ingredient.
     *
     * @param \TKusy\Hl7Fhir\R5\IngredientSubstanceType $substance
     * @return self
     */
    public function setSubstance(\TKusy\Hl7Fhir\R5\IngredientSubstanceType $substance)
    {
        $this->substance = $substance;
        return $this;
    }


}

