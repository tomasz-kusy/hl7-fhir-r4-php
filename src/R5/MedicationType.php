<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationType
 *
 * This resource is primarily used for the identification and definition of a medication, including ingredients, for the purposes of prescribing, dispensing, and administering a medication as well as for making statements about medication use.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Medication
 */
class MedicationType extends DomainResourceType
{

    /**
     * Business identifier for this medication.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A code to indicate if the medication is in active use.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationStatusCodesType $status
     */
    private $status = null;

    /**
     * The company or other legal entity that has authorization, from the appropriate drug regulatory authority, to market a medicine in one or more jurisdictions. Typically abbreviated MAH.Note: The MAH may manufacture the product and may also contract the manufacturing of the product to one or more companies (organizations).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $marketingAuthorizationHolder
     */
    private $marketingAuthorizationHolder = null;

    /**
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $doseForm
     */
    private $doseForm = null;

    /**
     * When the specified product code does not infer a package size, this is the specific amount of drug in the product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $totalVolume
     */
    private $totalVolume = null;

    /**
     * Identifies a particular constituent of interest in the product.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationIngredientType[] $ingredient
     */
    private $ingredient = null;

    /**
     * Information that only applies to packages (not products).
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationBatchType $batch
     */
    private $batch = null;

    /**
     * A reference to a knowledge resource that provides more information about this medication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $definition
     */
    private $definition = null;

    /**
     * Adds as identifier
     *
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Gets as code
     *
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code to indicate if the medication is in active use.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code to indicate if the medication is in active use.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationStatusCodesType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\MedicationStatusCodesType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as marketingAuthorizationHolder
     *
     * The company or other legal entity that has authorization, from the appropriate drug regulatory authority, to market a medicine in one or more jurisdictions. Typically abbreviated MAH.Note: The MAH may manufacture the product and may also contract the manufacturing of the product to one or more companies (organizations).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getMarketingAuthorizationHolder()
    {
        return $this->marketingAuthorizationHolder;
    }

    /**
     * Sets a new marketingAuthorizationHolder
     *
     * The company or other legal entity that has authorization, from the appropriate drug regulatory authority, to market a medicine in one or more jurisdictions. Typically abbreviated MAH.Note: The MAH may manufacture the product and may also contract the manufacturing of the product to one or more companies (organizations).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $marketingAuthorizationHolder
     * @return self
     */
    public function setMarketingAuthorizationHolder(?\TKusy\Hl7Fhir\R5\ReferenceType $marketingAuthorizationHolder = null)
    {
        $this->marketingAuthorizationHolder = $marketingAuthorizationHolder;
        return $this;
    }

    /**
     * Gets as doseForm
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDoseForm()
    {
        return $this->doseForm;
    }

    /**
     * Sets a new doseForm
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $doseForm
     * @return self
     */
    public function setDoseForm(?\TKusy\Hl7Fhir\R5\CodeableConceptType $doseForm = null)
    {
        $this->doseForm = $doseForm;
        return $this;
    }

    /**
     * Gets as totalVolume
     *
     * When the specified product code does not infer a package size, this is the specific amount of drug in the product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getTotalVolume()
    {
        return $this->totalVolume;
    }

    /**
     * Sets a new totalVolume
     *
     * When the specified product code does not infer a package size, this is the specific amount of drug in the product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $totalVolume
     * @return self
     */
    public function setTotalVolume(?\TKusy\Hl7Fhir\R5\QuantityType $totalVolume = null)
    {
        $this->totalVolume = $totalVolume;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationIngredientType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7Fhir\R5\MedicationIngredientType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * Identifies a particular constituent of interest in the product.
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
     * Identifies a particular constituent of interest in the product.
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
     * Identifies a particular constituent of interest in the product.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationIngredientType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationIngredientType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient = null)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Gets as batch
     *
     * Information that only applies to packages (not products).
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationBatchType
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Sets a new batch
     *
     * Information that only applies to packages (not products).
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationBatchType $batch
     * @return self
     */
    public function setBatch(?\TKusy\Hl7Fhir\R5\MedicationBatchType $batch = null)
    {
        $this->batch = $batch;
        return $this;
    }

    /**
     * Gets as definition
     *
     * A reference to a knowledge resource that provides more information about this medication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * A reference to a knowledge resource that provides more information about this medication.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $definition
     * @return self
     */
    public function setDefinition(?\TKusy\Hl7Fhir\R5\ReferenceType $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }


}

