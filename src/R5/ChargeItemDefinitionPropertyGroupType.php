<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ChargeItemDefinitionPropertyGroupType
 *
 * The ChargeItemDefinition resource provides the properties that apply to the (billing) codes necessary to calculate costs and prices. The properties may differ largely depending on type and realm, therefore this resource gives only a rough structure and requires profiling for each type of billing code system.
 * XSD Type: ChargeItemDefinition.PropertyGroup
 */
class ChargeItemDefinitionPropertyGroupType extends BackboneElementType
{

    /**
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @var \TKusy\Hl7Fhir\R5\ChargeItemDefinitionApplicabilityType[] $applicability
     */
    private $applicability = null;

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     *
     * @var \TKusy\Hl7Fhir\R5\MonetaryComponentType[] $priceComponent
     */
    private $priceComponent = null;

    /**
     * Adds as applicability
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ChargeItemDefinitionApplicabilityType $applicability
     */
    public function addToApplicability(\TKusy\Hl7Fhir\R5\ChargeItemDefinitionApplicabilityType $applicability)
    {
        $this->applicability[] = $applicability;
        return $this;
    }

    /**
     * isset applicability
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicability($index)
    {
        return isset($this->applicability[$index]);
    }

    /**
     * unset applicability
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicability($index)
    {
        unset($this->applicability[$index]);
    }

    /**
     * Gets as applicability
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @return \TKusy\Hl7Fhir\R5\ChargeItemDefinitionApplicabilityType[]
     */
    public function getApplicability()
    {
        return $this->applicability;
    }

    /**
     * Sets a new applicability
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @param \TKusy\Hl7Fhir\R5\ChargeItemDefinitionApplicabilityType[] $applicability
     * @return self
     */
    public function setApplicability(array $applicability = null)
    {
        $this->applicability = $applicability;
        return $this;
    }

    /**
     * Adds as priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MonetaryComponentType $priceComponent
     */
    public function addToPriceComponent(\TKusy\Hl7Fhir\R5\MonetaryComponentType $priceComponent)
    {
        $this->priceComponent[] = $priceComponent;
        return $this;
    }

    /**
     * isset priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceComponent($index)
    {
        return isset($this->priceComponent[$index]);
    }

    /**
     * unset priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceComponent($index)
    {
        unset($this->priceComponent[$index]);
    }

    /**
     * Gets as priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     *
     * @return \TKusy\Hl7Fhir\R5\MonetaryComponentType[]
     */
    public function getPriceComponent()
    {
        return $this->priceComponent;
    }

    /**
     * Sets a new priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the prices have been calculated.
     *
     * @param \TKusy\Hl7Fhir\R5\MonetaryComponentType[] $priceComponent
     * @return self
     */
    public function setPriceComponent(array $priceComponent = null)
    {
        $this->priceComponent = $priceComponent;
        return $this;
    }


}

