<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstancePolymerRepeatType
 *
 * Todo.
 * XSD Type: SubstancePolymer.Repeat
 */
class SubstancePolymerRepeatType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $averageMolecularFormula
     */
    private $averageMolecularFormula = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $repeatUnitAmountType
     */
    private $repeatUnitAmountType = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\SubstancePolymerRepeatUnitType[] $repeatUnit
     */
    private $repeatUnit = null;

    /**
     * Gets as numberOfUnits
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits(\TKusy\Hl7Fhir\R4\IntegerType $numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * Gets as averageMolecularFormula
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getAverageMolecularFormula()
    {
        return $this->averageMolecularFormula;
    }

    /**
     * Sets a new averageMolecularFormula
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $averageMolecularFormula
     * @return self
     */
    public function setAverageMolecularFormula(\TKusy\Hl7Fhir\R4\StringType $averageMolecularFormula)
    {
        $this->averageMolecularFormula = $averageMolecularFormula;
        return $this;
    }

    /**
     * Gets as repeatUnitAmountType
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getRepeatUnitAmountType()
    {
        return $this->repeatUnitAmountType;
    }

    /**
     * Sets a new repeatUnitAmountType
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $repeatUnitAmountType
     * @return self
     */
    public function setRepeatUnitAmountType(\TKusy\Hl7Fhir\R4\CodeableConceptType $repeatUnitAmountType)
    {
        $this->repeatUnitAmountType = $repeatUnitAmountType;
        return $this;
    }

    /**
     * Adds as repeatUnit
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\SubstancePolymerRepeatUnitType $repeatUnit
     */
    public function addToRepeatUnit(\TKusy\Hl7Fhir\R4\SubstancePolymerRepeatUnitType $repeatUnit)
    {
        $this->repeatUnit[] = $repeatUnit;
        return $this;
    }

    /**
     * isset repeatUnit
     *
     * Todo.
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
     * Todo.
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
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\SubstancePolymerRepeatUnitType[]
     */
    public function getRepeatUnit()
    {
        return $this->repeatUnit;
    }

    /**
     * Sets a new repeatUnit
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\SubstancePolymerRepeatUnitType[] $repeatUnit
     * @return self
     */
    public function setRepeatUnit(array $repeatUnit)
    {
        $this->repeatUnit = $repeatUnit;
        return $this;
    }


}

