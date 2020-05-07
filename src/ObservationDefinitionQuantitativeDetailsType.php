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
     * @var \TKusy\Hl7FhirR4\DecimalType $conversionFactor
     */
    private $conversionFactor = null;

    /**
     * Number of digits after decimal separator when the results of such observations are of type Quantity.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $decimalPrecision
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
     * @return \TKusy\Hl7FhirR4\DecimalType
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
     * @param \TKusy\Hl7FhirR4\DecimalType $conversionFactor
     * @return self
     */
    public function setConversionFactor(\TKusy\Hl7FhirR4\DecimalType $conversionFactor)
    {
        $this->conversionFactor = $conversionFactor;
        return $this;
    }

    /**
     * Gets as decimalPrecision
     *
     * Number of digits after decimal separator when the results of such observations are of type Quantity.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
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
     * @param \TKusy\Hl7FhirR4\IntegerType $decimalPrecision
     * @return self
     */
    public function setDecimalPrecision(\TKusy\Hl7FhirR4\IntegerType $decimalPrecision)
    {
        $this->decimalPrecision = $decimalPrecision;
        return $this;
    }


}

