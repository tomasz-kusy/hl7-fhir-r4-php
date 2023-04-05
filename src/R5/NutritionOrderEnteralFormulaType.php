<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $baseFormulaType
     */
    private $baseFormulaType = null;

    /**
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $baseFormulaProductName
     */
    private $baseFormulaProductName = null;

    /**
     * The intended type of device that is to be used for the administration of the enteral formula.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $deliveryDevice
     */
    private $deliveryDevice = null;

    /**
     * Indicates modular components to be provided in addition or mixed with the base formula.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionOrderAdditiveType[] $additive
     */
    private $additive = null;

    /**
     * The amount of energy (calories) that the formula should provide per specified volume, typically per mL or fluid oz. For example, an infant may require a formula that provides 24 calories per fluid ounce or an adult may require an enteral formula that provides 1.5 calorie/mL.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $caloricDensity
     */
    private $caloricDensity = null;

    /**
     * The route or physiological path of administration into the patient's gastrointestinal tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $routeOfAdministration
     */
    private $routeOfAdministration = null;

    /**
     * Formula administration instructions as structured data. This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding. An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionOrderAdministrationType[] $administration
     */
    private $administration = null;

    /**
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $maxVolumeToDeliver
     */
    private $maxVolumeToDeliver = null;

    /**
     * Free text formula administration, feeding instructions or additional instructions or information.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $administrationInstruction
     */
    private $administrationInstruction = null;

    /**
     * Gets as baseFormulaType
     *
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $baseFormulaType
     * @return self
     */
    public function setBaseFormulaType(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $baseFormulaType = null)
    {
        $this->baseFormulaType = $baseFormulaType;
        return $this;
    }

    /**
     * Gets as baseFormulaProductName
     *
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $baseFormulaProductName
     * @return self
     */
    public function setBaseFormulaProductName(?\TKusy\Hl7Fhir\R5\StringType $baseFormulaProductName = null)
    {
        $this->baseFormulaProductName = $baseFormulaProductName;
        return $this;
    }

    /**
     * Adds as deliveryDevice
     *
     * The intended type of device that is to be used for the administration of the enteral formula.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $deliveryDevice
     */
    public function addToDeliveryDevice(\TKusy\Hl7Fhir\R5\CodeableReferenceType $deliveryDevice)
    {
        $this->deliveryDevice[] = $deliveryDevice;
        return $this;
    }

    /**
     * isset deliveryDevice
     *
     * The intended type of device that is to be used for the administration of the enteral formula.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryDevice($index)
    {
        return isset($this->deliveryDevice[$index]);
    }

    /**
     * unset deliveryDevice
     *
     * The intended type of device that is to be used for the administration of the enteral formula.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryDevice($index)
    {
        unset($this->deliveryDevice[$index]);
    }

    /**
     * Gets as deliveryDevice
     *
     * The intended type of device that is to be used for the administration of the enteral formula.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getDeliveryDevice()
    {
        return $this->deliveryDevice;
    }

    /**
     * Sets a new deliveryDevice
     *
     * The intended type of device that is to be used for the administration of the enteral formula.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $deliveryDevice
     * @return self
     */
    public function setDeliveryDevice(array $deliveryDevice = null)
    {
        $this->deliveryDevice = $deliveryDevice;
        return $this;
    }

    /**
     * Adds as additive
     *
     * Indicates modular components to be provided in addition or mixed with the base formula.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderAdditiveType $additive
     */
    public function addToAdditive(\TKusy\Hl7Fhir\R5\NutritionOrderAdditiveType $additive)
    {
        $this->additive[] = $additive;
        return $this;
    }

    /**
     * isset additive
     *
     * Indicates modular components to be provided in addition or mixed with the base formula.
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
     * Indicates modular components to be provided in addition or mixed with the base formula.
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
     * Indicates modular components to be provided in addition or mixed with the base formula.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionOrderAdditiveType[]
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * Sets a new additive
     *
     * Indicates modular components to be provided in addition or mixed with the base formula.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderAdditiveType[] $additive
     * @return self
     */
    public function setAdditive(array $additive = null)
    {
        $this->additive = $additive;
        return $this;
    }

    /**
     * Gets as caloricDensity
     *
     * The amount of energy (calories) that the formula should provide per specified volume, typically per mL or fluid oz. For example, an infant may require a formula that provides 24 calories per fluid ounce or an adult may require an enteral formula that provides 1.5 calorie/mL.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
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
     * @param \TKusy\Hl7Fhir\R5\QuantityType $caloricDensity
     * @return self
     */
    public function setCaloricDensity(?\TKusy\Hl7Fhir\R5\QuantityType $caloricDensity = null)
    {
        $this->caloricDensity = $caloricDensity;
        return $this;
    }

    /**
     * Gets as routeOfAdministration
     *
     * The route or physiological path of administration into the patient's gastrointestinal tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRouteOfAdministration()
    {
        return $this->routeOfAdministration;
    }

    /**
     * Sets a new routeOfAdministration
     *
     * The route or physiological path of administration into the patient's gastrointestinal tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $routeOfAdministration
     * @return self
     */
    public function setRouteOfAdministration(?\TKusy\Hl7Fhir\R5\CodeableConceptType $routeOfAdministration = null)
    {
        $this->routeOfAdministration = $routeOfAdministration;
        return $this;
    }

    /**
     * Adds as administration
     *
     * Formula administration instructions as structured data. This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding. An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderAdministrationType $administration
     */
    public function addToAdministration(\TKusy\Hl7Fhir\R5\NutritionOrderAdministrationType $administration)
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
     * @return \TKusy\Hl7Fhir\R5\NutritionOrderAdministrationType[]
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
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderAdministrationType[] $administration
     * @return self
     */
    public function setAdministration(array $administration = null)
    {
        $this->administration = $administration;
        return $this;
    }

    /**
     * Gets as maxVolumeToDeliver
     *
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
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
     * @param \TKusy\Hl7Fhir\R5\QuantityType $maxVolumeToDeliver
     * @return self
     */
    public function setMaxVolumeToDeliver(?\TKusy\Hl7Fhir\R5\QuantityType $maxVolumeToDeliver = null)
    {
        $this->maxVolumeToDeliver = $maxVolumeToDeliver;
        return $this;
    }

    /**
     * Gets as administrationInstruction
     *
     * Free text formula administration, feeding instructions or additional instructions or information.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $administrationInstruction
     * @return self
     */
    public function setAdministrationInstruction(?\TKusy\Hl7Fhir\R5\MarkdownType $administrationInstruction = null)
    {
        $this->administrationInstruction = $administrationInstruction;
        return $this;
    }


}

