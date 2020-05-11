<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationType
 *
 * This resource is primarily used for the identification and definition of a medication for the purposes of prescribing, dispensing, and administering a medication as well as for making statements about medication use.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Medication
 */
class MedicationType extends DomainResourceType
{

    /**
     * Business identifier for this medication.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A code to indicate if the medication is in active use.
     *
     * @var \TKusy\Hl7FhirR4\MedicationStatusCodesType $status
     */
    private $status = null;

    /**
     * Describes the details of the manufacturer of the medication product. This is not intended to represent the distributor of a medication product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     */
    private $manufacturer = null;

    /**
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $form
     */
    private $form = null;

    /**
     * Specific amount of the drug in the packaged product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @var \TKusy\Hl7FhirR4\RatioType $amount
     */
    private $amount = null;

    /**
     * Identifies a particular constituent of interest in the product.
     *
     * @var \TKusy\Hl7FhirR4\MedicationIngredientType[] $ingredient
     */
    private $ingredient = [
        
    ];

    /**
     * Information that only applies to packages (not products).
     *
     * @var \TKusy\Hl7FhirR4\MedicationBatchType $batch
     */
    private $batch = null;

    /**
     * Adds as identifier
     *
     * Business identifier for this medication.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
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
     * A code (or set of codes) that specify this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
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
     * Gets as status
     *
     * A code to indicate if the medication is in active use.
     *
     * @return \TKusy\Hl7FhirR4\MedicationStatusCodesType
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
     * @param \TKusy\Hl7FhirR4\MedicationStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\MedicationStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as manufacturer
     *
     * Describes the details of the manufacturer of the medication product. This is not intended to represent the distributor of a medication product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Describes the details of the manufacturer of the medication product. This is not intended to represent the distributor of a medication product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     * @return self
     */
    public function setManufacturer(\TKusy\Hl7FhirR4\ReferenceType $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Gets as form
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $form
     * @return self
     */
    public function setForm(\TKusy\Hl7FhirR4\CodeableConceptType $form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Specific amount of the drug in the packaged product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Specific amount of the drug in the packaged product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @param \TKusy\Hl7FhirR4\RatioType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7FhirR4\RatioType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationIngredientType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7FhirR4\MedicationIngredientType $ingredient)
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
     * @return \TKusy\Hl7FhirR4\MedicationIngredientType[]
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
     * @param \TKusy\Hl7FhirR4\MedicationIngredientType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Gets as batch
     *
     * Information that only applies to packages (not products).
     *
     * @return \TKusy\Hl7FhirR4\MedicationBatchType
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
     * @param \TKusy\Hl7FhirR4\MedicationBatchType $batch
     * @return self
     */
    public function setBatch(\TKusy\Hl7FhirR4\MedicationBatchType $batch)
    {
        $this->batch = $batch;
        return $this;
    }


}

