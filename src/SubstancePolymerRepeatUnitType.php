<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstancePolymerRepeatUnitType
 *
 * Todo.
 * XSD Type: SubstancePolymer.RepeatUnit
 */
class SubstancePolymerRepeatUnitType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $orientationOfPolymerisation
     */
    private $orientationOfPolymerisation = null;

    /**
     * Todo.
     *
     * @var string $repeatUnit
     */
    private $repeatUnit = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceAmountType $amount
     */
    private $amount = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstancePolymerDegreeOfPolymerisationType[] $degreeOfPolymerisation
     */
    private $degreeOfPolymerisation = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstancePolymerStructuralRepresentationType[] $structuralRepresentation
     */
    private $structuralRepresentation = null;

    /**
     * Gets as orientationOfPolymerisation
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getOrientationOfPolymerisation()
    {
        return $this->orientationOfPolymerisation;
    }

    /**
     * Sets a new orientationOfPolymerisation
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $orientationOfPolymerisation
     * @return self
     */
    public function setOrientationOfPolymerisation(\TKusy\Hl7FhirR4\CodeableConceptType $orientationOfPolymerisation)
    {
        $this->orientationOfPolymerisation = $orientationOfPolymerisation;
        return $this;
    }

    /**
     * Gets as repeatUnit
     *
     * Todo.
     *
     * @return string
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
     * @param string $repeatUnit
     * @return self
     */
    public function setRepeatUnit($repeatUnit)
    {
        $this->repeatUnit = $repeatUnit;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceAmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceAmountType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7FhirR4\SubstanceAmountType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as degreeOfPolymerisation
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstancePolymerDegreeOfPolymerisationType $degreeOfPolymerisation
     */
    public function addToDegreeOfPolymerisation(\TKusy\Hl7FhirR4\SubstancePolymerDegreeOfPolymerisationType $degreeOfPolymerisation)
    {
        $this->degreeOfPolymerisation[] = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * isset degreeOfPolymerisation
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDegreeOfPolymerisation($index)
    {
        return isset($this->degreeOfPolymerisation[$index]);
    }

    /**
     * unset degreeOfPolymerisation
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDegreeOfPolymerisation($index)
    {
        unset($this->degreeOfPolymerisation[$index]);
    }

    /**
     * Gets as degreeOfPolymerisation
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstancePolymerDegreeOfPolymerisationType[]
     */
    public function getDegreeOfPolymerisation()
    {
        return $this->degreeOfPolymerisation;
    }

    /**
     * Sets a new degreeOfPolymerisation
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstancePolymerDegreeOfPolymerisationType[] $degreeOfPolymerisation
     * @return self
     */
    public function setDegreeOfPolymerisation(array $degreeOfPolymerisation)
    {
        $this->degreeOfPolymerisation = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * Adds as structuralRepresentation
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstancePolymerStructuralRepresentationType $structuralRepresentation
     */
    public function addToStructuralRepresentation(\TKusy\Hl7FhirR4\SubstancePolymerStructuralRepresentationType $structuralRepresentation)
    {
        $this->structuralRepresentation[] = $structuralRepresentation;
        return $this;
    }

    /**
     * isset structuralRepresentation
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStructuralRepresentation($index)
    {
        return isset($this->structuralRepresentation[$index]);
    }

    /**
     * unset structuralRepresentation
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStructuralRepresentation($index)
    {
        unset($this->structuralRepresentation[$index]);
    }

    /**
     * Gets as structuralRepresentation
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstancePolymerStructuralRepresentationType[]
     */
    public function getStructuralRepresentation()
    {
        return $this->structuralRepresentation;
    }

    /**
     * Sets a new structuralRepresentation
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstancePolymerStructuralRepresentationType[] $structuralRepresentation
     * @return self
     */
    public function setStructuralRepresentation(array $structuralRepresentation)
    {
        $this->structuralRepresentation = $structuralRepresentation;
        return $this;
    }


}

