<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgeDefinitionalType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Definitional
 */
class MedicationKnowledgeDefinitionalType extends BackboneElementType
{

    /**
     * Associated definitions for this medication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $definition
     */
    private $definition = null;

    /**
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $doseForm
     */
    private $doseForm = null;

    /**
     * The intended or approved route of administration.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $intendedRoute
     */
    private $intendedRoute = null;

    /**
     * Identifies a particular constituent of interest in the product.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeIngredientType[] $ingredient
     */
    private $ingredient = null;

    /**
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeDrugCharacteristicType[] $drugCharacteristic
     */
    private $drugCharacteristic = null;

    /**
     * Adds as definition
     *
     * Associated definitions for this medication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $definition
     */
    public function addToDefinition(\TKusy\Hl7Fhir\R5\ReferenceType $definition)
    {
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * isset definition
     *
     * Associated definitions for this medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDefinition($index)
    {
        return isset($this->definition[$index]);
    }

    /**
     * unset definition
     *
     * Associated definitions for this medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDefinition($index)
    {
        unset($this->definition[$index]);
    }

    /**
     * Gets as definition
     *
     * Associated definitions for this medication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * Associated definitions for this medication.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $definition
     * @return self
     */
    public function setDefinition(array $definition = null)
    {
        $this->definition = $definition;
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
     * Adds as intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $intendedRoute
     */
    public function addToIntendedRoute(\TKusy\Hl7Fhir\R5\CodeableConceptType $intendedRoute)
    {
        $this->intendedRoute[] = $intendedRoute;
        return $this;
    }

    /**
     * isset intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntendedRoute($index)
    {
        return isset($this->intendedRoute[$index]);
    }

    /**
     * unset intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntendedRoute($index)
    {
        unset($this->intendedRoute[$index]);
    }

    /**
     * Gets as intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getIntendedRoute()
    {
        return $this->intendedRoute;
    }

    /**
     * Sets a new intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $intendedRoute
     * @return self
     */
    public function setIntendedRoute(array $intendedRoute = null)
    {
        $this->intendedRoute = $intendedRoute;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeIngredientType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7Fhir\R5\MedicationKnowledgeIngredientType $ingredient)
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
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeIngredientType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeIngredientType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient = null)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Adds as drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeDrugCharacteristicType $drugCharacteristic
     */
    public function addToDrugCharacteristic(\TKusy\Hl7Fhir\R5\MedicationKnowledgeDrugCharacteristicType $drugCharacteristic)
    {
        $this->drugCharacteristic[] = $drugCharacteristic;
        return $this;
    }

    /**
     * isset drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDrugCharacteristic($index)
    {
        return isset($this->drugCharacteristic[$index]);
    }

    /**
     * unset drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDrugCharacteristic($index)
    {
        unset($this->drugCharacteristic[$index]);
    }

    /**
     * Gets as drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeDrugCharacteristicType[]
     */
    public function getDrugCharacteristic()
    {
        return $this->drugCharacteristic;
    }

    /**
     * Sets a new drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeDrugCharacteristicType[] $drugCharacteristic
     * @return self
     */
    public function setDrugCharacteristic(array $drugCharacteristic = null)
    {
        $this->drugCharacteristic = $drugCharacteristic;
        return $this;
    }


}

