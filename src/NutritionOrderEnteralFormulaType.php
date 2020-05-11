<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing NutritionOrderEnteralFormulaType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.EnteralFormula
 */
class NutritionOrderEnteralFormulaType extends BackboneElementType
{

    /**
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $baseFormulaType
     */
    private $baseFormulaType = null;

    /**
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     *
     * @var string $baseFormulaProductName
     */
    private $baseFormulaProductName = null;

    /**
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $additiveType
     */
    private $additiveType = null;

    /**
     * The product or brand name of the type of modular component to be added to the formula.
     *
     * @var string $additiveProductName
     */
    private $additiveProductName = null;

    /**
     * The amount of energy (calories) that the formula should provide per specified volume, typically per mL or fluid oz. For example, an infant may require a formula that provides 24 calories per fluid ounce or an adult may require an enteral formula that provides 1.5 calorie/mL.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $caloricDensity
     */
    private $caloricDensity = null;

    /**
     * The route or physiological path of administration into the patient's gastrointestinal tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $routeofAdministration
     */
    private $routeofAdministration = null;

    /**
     * Formula administration instructions as structured data. This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding. An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     *
     * @var \TKusy\Hl7FhirR4\NutritionOrderAdministrationType[] $administration
     */
    private $administration = null;

    /**
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $maxVolumeToDeliver
     */
    private $maxVolumeToDeliver = null;

    /**
     * Free text formula administration, feeding instructions or additional instructions or information.
     *
     * @var string $administrationInstruction
     */
    private $administrationInstruction = null;

    /**
     * Gets as baseFormulaType
     *
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getBaseFormulaType()
    {
        return $this->baseFormulaType;
    }

    /**
     * Sets a new baseFormulaType
     *
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $baseFormulaType
     * @return self
     */
    public function setBaseFormulaType(\TKusy\Hl7FhirR4\CodeableConceptType $baseFormulaType)
    {
        $this->baseFormulaType = $baseFormulaType;
        return $this;
    }

    /**
     * Gets as baseFormulaProductName
     *
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     *
     * @return string
     */
    public function getBaseFormulaProductName()
    {
        return $this->baseFormulaProductName;
    }

    /**
     * Sets a new baseFormulaProductName
     *
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     *
     * @param string $baseFormulaProductName
     * @return self
     */
    public function setBaseFormulaProductName($baseFormulaProductName)
    {
        $this->baseFormulaProductName = $baseFormulaProductName;
        return $this;
    }

    /**
     * Gets as additiveType
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAdditiveType()
    {
        return $this->additiveType;
    }

    /**
     * Sets a new additiveType
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $additiveType
     * @return self
     */
    public function setAdditiveType(\TKusy\Hl7FhirR4\CodeableConceptType $additiveType)
    {
        $this->additiveType = $additiveType;
        return $this;
    }

    /**
     * Gets as additiveProductName
     *
     * The product or brand name of the type of modular component to be added to the formula.
     *
     * @return string
     */
    public function getAdditiveProductName()
    {
        return $this->additiveProductName;
    }

    /**
     * Sets a new additiveProductName
     *
     * The product or brand name of the type of modular component to be added to the formula.
     *
     * @param string $additiveProductName
     * @return self
     */
    public function setAdditiveProductName($additiveProductName)
    {
        $this->additiveProductName = $additiveProductName;
        return $this;
    }

    /**
     * Gets as caloricDensity
     *
     * The amount of energy (calories) that the formula should provide per specified volume, typically per mL or fluid oz. For example, an infant may require a formula that provides 24 calories per fluid ounce or an adult may require an enteral formula that provides 1.5 calorie/mL.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getCaloricDensity()
    {
        return $this->caloricDensity;
    }

    /**
     * Sets a new caloricDensity
     *
     * The amount of energy (calories) that the formula should provide per specified volume, typically per mL or fluid oz. For example, an infant may require a formula that provides 24 calories per fluid ounce or an adult may require an enteral formula that provides 1.5 calorie/mL.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $caloricDensity
     * @return self
     */
    public function setCaloricDensity(\TKusy\Hl7FhirR4\QuantityType $caloricDensity)
    {
        $this->caloricDensity = $caloricDensity;
        return $this;
    }

    /**
     * Gets as routeofAdministration
     *
     * The route or physiological path of administration into the patient's gastrointestinal tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRouteofAdministration()
    {
        return $this->routeofAdministration;
    }

    /**
     * Sets a new routeofAdministration
     *
     * The route or physiological path of administration into the patient's gastrointestinal tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $routeofAdministration
     * @return self
     */
    public function setRouteofAdministration(\TKusy\Hl7FhirR4\CodeableConceptType $routeofAdministration)
    {
        $this->routeofAdministration = $routeofAdministration;
        return $this;
    }

    /**
     * Adds as administration
     *
     * Formula administration instructions as structured data. This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding. An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\NutritionOrderAdministrationType $administration
     */
    public function addToAdministration(\TKusy\Hl7FhirR4\NutritionOrderAdministrationType $administration)
    {
        $this->administration[] = $administration;
        return $this;
    }

    /**
     * isset administration
     *
     * Formula administration instructions as structured data. This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding. An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdministration($index)
    {
        return isset($this->administration[$index]);
    }

    /**
     * unset administration
     *
     * Formula administration instructions as structured data. This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding. An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdministration($index)
    {
        unset($this->administration[$index]);
    }

    /**
     * Gets as administration
     *
     * Formula administration instructions as structured data. This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding. An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     *
     * @return \TKusy\Hl7FhirR4\NutritionOrderAdministrationType[]
     */
    public function getAdministration()
    {
        return $this->administration;
    }

    /**
     * Sets a new administration
     *
     * Formula administration instructions as structured data. This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding. An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     *
     * @param \TKusy\Hl7FhirR4\NutritionOrderAdministrationType[] $administration
     * @return self
     */
    public function setAdministration(array $administration)
    {
        $this->administration = $administration;
        return $this;
    }

    /**
     * Gets as maxVolumeToDeliver
     *
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getMaxVolumeToDeliver()
    {
        return $this->maxVolumeToDeliver;
    }

    /**
     * Sets a new maxVolumeToDeliver
     *
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $maxVolumeToDeliver
     * @return self
     */
    public function setMaxVolumeToDeliver(\TKusy\Hl7FhirR4\QuantityType $maxVolumeToDeliver)
    {
        $this->maxVolumeToDeliver = $maxVolumeToDeliver;
        return $this;
    }

    /**
     * Gets as administrationInstruction
     *
     * Free text formula administration, feeding instructions or additional instructions or information.
     *
     * @return string
     */
    public function getAdministrationInstruction()
    {
        return $this->administrationInstruction;
    }

    /**
     * Sets a new administrationInstruction
     *
     * Free text formula administration, feeding instructions or additional instructions or information.
     *
     * @param string $administrationInstruction
     * @return self
     */
    public function setAdministrationInstruction($administrationInstruction)
    {
        $this->administrationInstruction = $administrationInstruction;
        return $this;
    }


}

