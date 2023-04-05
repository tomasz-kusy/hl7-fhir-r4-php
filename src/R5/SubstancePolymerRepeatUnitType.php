<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstancePolymerRepeatUnitType
 *
 * Properties of a substance specific to it being a polymer.
 * XSD Type: SubstancePolymer.RepeatUnit
 */
class SubstancePolymerRepeatUnitType extends BackboneElementType
{

    /**
     * Structural repeat units are essential elements for defining polymers.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $unit
     */
    private $unit = null;

    /**
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $orientation
     */
    private $orientation = null;

    /**
     * Number of repeats of this unit.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $amount
     */
    private $amount = null;

    /**
     * Applies to homopolymer and block co-polymers where the degree of polymerisation within a block can be described.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstancePolymerDegreeOfPolymerisationType[] $degreeOfPolymerisation
     */
    private $degreeOfPolymerisation = null;

    /**
     * A graphical structure for this SRU.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstancePolymerStructuralRepresentationType[] $structuralRepresentation
     */
    private $structuralRepresentation = null;

    /**
     * Gets as unit
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $unit
     * @return self
     */
    public function setUnit(?\TKusy\Hl7Fhir\R5\StringType $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as orientation
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Sets a new orientation
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $orientation
     * @return self
     */
    public function setOrientation(?\TKusy\Hl7Fhir\R5\CodeableConceptType $orientation = null)
    {
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Number of repeats of this unit.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Number of repeats of this unit.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $amount
     * @return self
     */
    public function setAmount(?\TKusy\Hl7Fhir\R5\IntegerType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as degreeOfPolymerisation
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation within a block can be described.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerDegreeOfPolymerisationType $degreeOfPolymerisation
     */
    public function addToDegreeOfPolymerisation(\TKusy\Hl7Fhir\R5\SubstancePolymerDegreeOfPolymerisationType $degreeOfPolymerisation)
    {
        $this->degreeOfPolymerisation[] = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * isset degreeOfPolymerisation
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation within a block can be described.
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
     * Applies to homopolymer and block co-polymers where the degree of polymerisation within a block can be described.
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
     * Applies to homopolymer and block co-polymers where the degree of polymerisation within a block can be described.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstancePolymerDegreeOfPolymerisationType[]
     */
    public function getDegreeOfPolymerisation()
    {
        return $this->degreeOfPolymerisation;
    }

    /**
     * Sets a new degreeOfPolymerisation
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation within a block can be described.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerDegreeOfPolymerisationType[] $degreeOfPolymerisation
     * @return self
     */
    public function setDegreeOfPolymerisation(array $degreeOfPolymerisation = null)
    {
        $this->degreeOfPolymerisation = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * Adds as structuralRepresentation
     *
     * A graphical structure for this SRU.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerStructuralRepresentationType $structuralRepresentation
     */
    public function addToStructuralRepresentation(\TKusy\Hl7Fhir\R5\SubstancePolymerStructuralRepresentationType $structuralRepresentation)
    {
        $this->structuralRepresentation[] = $structuralRepresentation;
        return $this;
    }

    /**
     * isset structuralRepresentation
     *
     * A graphical structure for this SRU.
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
     * A graphical structure for this SRU.
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
     * A graphical structure for this SRU.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstancePolymerStructuralRepresentationType[]
     */
    public function getStructuralRepresentation()
    {
        return $this->structuralRepresentation;
    }

    /**
     * Sets a new structuralRepresentation
     *
     * A graphical structure for this SRU.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerStructuralRepresentationType[] $structuralRepresentation
     * @return self
     */
    public function setStructuralRepresentation(array $structuralRepresentation = null)
    {
        $this->structuralRepresentation = $structuralRepresentation;
        return $this;
    }


}

