<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceDefinitionMaterialType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Material
 */
class DeviceDefinitionMaterialType extends BackboneElementType
{

    /**
     * The substance.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $substance
     */
    private $substance = null;

    /**
     * Indicates an alternative material of the device.
     *
     * @var bool $alternate
     */
    private $alternate = null;

    /**
     * Whether the substance is a known or suspected allergen.
     *
     * @var bool $allergenicIndicator
     */
    private $allergenicIndicator = null;

    /**
     * Gets as substance
     *
     * The substance.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Sets a new substance
     *
     * The substance.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $substance
     * @return self
     */
    public function setSubstance(\TKusy\Hl7FhirR4\CodeableConceptType $substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Gets as alternate
     *
     * Indicates an alternative material of the device.
     *
     * @return bool
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
     * @param bool $alternate
     * @return self
     */
    public function setAlternate($alternate)
    {
        $this->alternate = $alternate;
        return $this;
    }

    /**
     * Gets as allergenicIndicator
     *
     * Whether the substance is a known or suspected allergen.
     *
     * @return bool
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
     * @param bool $allergenicIndicator
     * @return self
     */
    public function setAllergenicIndicator($allergenicIndicator)
    {
        $this->allergenicIndicator = $allergenicIndicator;
        return $this;
    }


}

