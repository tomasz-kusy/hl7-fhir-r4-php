<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ObservationDefinitionQuantitativeDetailsType
 *
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 * XSD Type: ObservationDefinition.QuantitativeDetails
 */
class ObservationDefinitionQuantitativeDetailsType extends BackboneElementType
{

    /**
     * Customary unit used to report quantitative results of observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $customaryUnit
     */
    private $customaryUnit = null;

    /**
     * SI unit used to report quantitative results of observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $unit
     */
    private $unit = null;

    /**
     * Factor for converting value expressed with SI unit to value expressed with customary unit.
     *
     * @var float $conversionFactor
     */
    private $conversionFactor = null;

    /**
     * Number of digits after decimal separator when the results of such observations are of type Quantity.
     *
     * @var \integer $decimalPrecision
     */
    private $decimalPrecision = null;

    /**
     * Gets as customaryUnit
     *
     * Customary unit used to report quantitative results of observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCustomaryUnit()
    {
        return $this->customaryUnit;
    }

    /**
     * Sets a new customaryUnit
     *
     * Customary unit used to report quantitative results of observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $customaryUnit
     * @return self
     */
    public function setCustomaryUnit(\TKusy\Hl7FhirR4\CodeableConceptType $customaryUnit)
    {
        $this->customaryUnit = $customaryUnit;
        return $this;
    }

    /**
     * Gets as unit
     *
     * SI unit used to report quantitative results of observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * SI unit used to report quantitative results of observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $unit
     * @return self
     */
    public function setUnit(\TKusy\Hl7FhirR4\CodeableConceptType $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as conversionFactor
     *
     * Factor for converting value expressed with SI unit to value expressed with customary unit.
     *
     * @return float
     */
    public function getConversionFactor()
    {
        return $this->conversionFactor;
    }

    /**
     * Sets a new conversionFactor
     *
     * Factor for converting value expressed with SI unit to value expressed with customary unit.
     *
     * @param float $conversionFactor
     * @return self
     */
    public function setConversionFactor($conversionFactor)
    {
        $this->conversionFactor = $conversionFactor;
        return $this;
    }

    /**
     * Gets as decimalPrecision
     *
     * Number of digits after decimal separator when the results of such observations are of type Quantity.
     *
     * @return \integer
     */
    public function getDecimalPrecision()
    {
        return $this->decimalPrecision;
    }

    /**
     * Sets a new decimalPrecision
     *
     * Number of digits after decimal separator when the results of such observations are of type Quantity.
     *
     * @param \integer $decimalPrecision
     * @return self
     */
    public function setDecimalPrecision(\integer $decimalPrecision)
    {
        $this->decimalPrecision = $decimalPrecision;
        return $this;
    }


}

