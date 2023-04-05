<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionMaterialType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Material
 */
class DeviceDefinitionMaterialType extends BackboneElementType
{

    /**
     * A substance that the device contains, may contain, or is made of - for example latex - to be used to determine patient compatibility. This is not intended to represent the composition of the device, only the clinically relevant materials.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $substance
     */
    private $substance = null;

    /**
     * Indicates an alternative material of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $alternate
     */
    private $alternate = null;

    /**
     * Whether the substance is a known or suspected allergen.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $allergenicIndicator
     */
    private $allergenicIndicator = null;

    /**
     * Gets as substance
     *
     * A substance that the device contains, may contain, or is made of - for example latex - to be used to determine patient compatibility. This is not intended to represent the composition of the device, only the clinically relevant materials.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Sets a new substance
     *
     * A substance that the device contains, may contain, or is made of - for example latex - to be used to determine patient compatibility. This is not intended to represent the composition of the device, only the clinically relevant materials.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $substance
     * @return self
     */
    public function setSubstance(\TKusy\Hl7Fhir\R5\CodeableConceptType $substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Gets as alternate
     *
     * Indicates an alternative material of the device.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAlternate()
    {
        return $this->alternate;
    }

    /**
     * Sets a new alternate
     *
     * Indicates an alternative material of the device.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $alternate
     * @return self
     */
    public function setAlternate(?\TKusy\Hl7Fhir\R5\BooleanType $alternate = null)
    {
        $this->alternate = $alternate;
        return $this;
    }

    /**
     * Gets as allergenicIndicator
     *
     * Whether the substance is a known or suspected allergen.
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
     * Whether the substance is a known or suspected allergen.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $allergenicIndicator
     * @return self
     */
    public function setAllergenicIndicator(?\TKusy\Hl7Fhir\R5\BooleanType $allergenicIndicator = null)
    {
        $this->allergenicIndicator = $allergenicIndicator;
        return $this;
    }


}

