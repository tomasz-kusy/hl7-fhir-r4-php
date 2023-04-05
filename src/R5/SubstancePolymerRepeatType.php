<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstancePolymerRepeatType
 *
 * Properties of a substance specific to it being a polymer.
 * XSD Type: SubstancePolymer.Repeat
 */
class SubstancePolymerRepeatType extends BackboneElementType
{

    /**
     * A representation of an (average) molecular formula from a polymer.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $averageMolecularFormula
     */
    private $averageMolecularFormula = null;

    /**
     * How the quantitative amount of Structural Repeat Units is captured (e.g. Exact, Numeric, Average).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $repeatUnitAmountType
     */
    private $repeatUnitAmountType = null;

    /**
     * An SRU - Structural Repeat Unit.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstancePolymerRepeatUnitType[] $repeatUnit
     */
    private $repeatUnit = null;

    /**
     * Gets as averageMolecularFormula
     *
     * A representation of an (average) molecular formula from a polymer.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAverageMolecularFormula()
    {
        return $this->averageMolecularFormula;
    }

    /**
     * Sets a new averageMolecularFormula
     *
     * A representation of an (average) molecular formula from a polymer.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $averageMolecularFormula
     * @return self
     */
    public function setAverageMolecularFormula(?\TKusy\Hl7Fhir\R5\StringType $averageMolecularFormula = null)
    {
        $this->averageMolecularFormula = $averageMolecularFormula;
        return $this;
    }

    /**
     * Gets as repeatUnitAmountType
     *
     * How the quantitative amount of Structural Repeat Units is captured (e.g. Exact, Numeric, Average).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRepeatUnitAmountType()
    {
        return $this->repeatUnitAmountType;
    }

    /**
     * Sets a new repeatUnitAmountType
     *
     * How the quantitative amount of Structural Repeat Units is captured (e.g. Exact, Numeric, Average).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $repeatUnitAmountType
     * @return self
     */
    public function setRepeatUnitAmountType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $repeatUnitAmountType = null)
    {
        $this->repeatUnitAmountType = $repeatUnitAmountType;
        return $this;
    }

    /**
     * Adds as repeatUnit
     *
     * An SRU - Structural Repeat Unit.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerRepeatUnitType $repeatUnit
     */
    public function addToRepeatUnit(\TKusy\Hl7Fhir\R5\SubstancePolymerRepeatUnitType $repeatUnit)
    {
        $this->repeatUnit[] = $repeatUnit;
        return $this;
    }

    /**
     * isset repeatUnit
     *
     * An SRU - Structural Repeat Unit.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRepeatUnit($index)
    {
        return isset($this->repeatUnit[$index]);
    }

    /**
     * unset repeatUnit
     *
     * An SRU - Structural Repeat Unit.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRepeatUnit($index)
    {
        unset($this->repeatUnit[$index]);
    }

    /**
     * Gets as repeatUnit
     *
     * An SRU - Structural Repeat Unit.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstancePolymerRepeatUnitType[]
     */
    public function getRepeatUnit()
    {
        return $this->repeatUnit;
    }

    /**
     * Sets a new repeatUnit
     *
     * An SRU - Structural Repeat Unit.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerRepeatUnitType[] $repeatUnit
     * @return self
     */
    public function setRepeatUnit(array $repeatUnit = null)
    {
        $this->repeatUnit = $repeatUnit;
        return $this;
    }


}

