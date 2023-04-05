<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MolecularSequenceRelativeType
 *
 * Representation of a molecular sequence.
 * XSD Type: MolecularSequence.Relative
 */
class MolecularSequenceRelativeType extends BackboneElementType
{

    /**
     * These are different ways of identifying nucleotides or amino acids within a sequence. Different databases and file types may use different systems. For detail definitions, see https://loinc.org/92822-6/ for more detail.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $coordinateSystem
     */
    private $coordinateSystem = null;

    /**
     * Indicates the order in which the sequence should be considered when putting multiple 'relative' elements together.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $ordinalPosition
     */
    private $ordinalPosition = null;

    /**
     * Indicates the nucleotide range in the composed sequence when multiple 'relative' elements are used together.
     *
     * @var \TKusy\Hl7Fhir\R5\RangeType $sequenceRange
     */
    private $sequenceRange = null;

    /**
     * A sequence that is used as a starting sequence to describe variants that are present in a sequence analyzed.
     *
     * @var \TKusy\Hl7Fhir\R5\MolecularSequenceStartingSequenceType $startingSequence
     */
    private $startingSequence = null;

    /**
     * Changes in sequence from the starting sequence.
     *
     * @var \TKusy\Hl7Fhir\R5\MolecularSequenceEditType[] $edit
     */
    private $edit = null;

    /**
     * Gets as coordinateSystem
     *
     * These are different ways of identifying nucleotides or amino acids within a sequence. Different databases and file types may use different systems. For detail definitions, see https://loinc.org/92822-6/ for more detail.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCoordinateSystem()
    {
        return $this->coordinateSystem;
    }

    /**
     * Sets a new coordinateSystem
     *
     * These are different ways of identifying nucleotides or amino acids within a sequence. Different databases and file types may use different systems. For detail definitions, see https://loinc.org/92822-6/ for more detail.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $coordinateSystem
     * @return self
     */
    public function setCoordinateSystem(\TKusy\Hl7Fhir\R5\CodeableConceptType $coordinateSystem)
    {
        $this->coordinateSystem = $coordinateSystem;
        return $this;
    }

    /**
     * Gets as ordinalPosition
     *
     * Indicates the order in which the sequence should be considered when putting multiple 'relative' elements together.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getOrdinalPosition()
    {
        return $this->ordinalPosition;
    }

    /**
     * Sets a new ordinalPosition
     *
     * Indicates the order in which the sequence should be considered when putting multiple 'relative' elements together.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $ordinalPosition
     * @return self
     */
    public function setOrdinalPosition(?\TKusy\Hl7Fhir\R5\IntegerType $ordinalPosition = null)
    {
        $this->ordinalPosition = $ordinalPosition;
        return $this;
    }

    /**
     * Gets as sequenceRange
     *
     * Indicates the nucleotide range in the composed sequence when multiple 'relative' elements are used together.
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getSequenceRange()
    {
        return $this->sequenceRange;
    }

    /**
     * Sets a new sequenceRange
     *
     * Indicates the nucleotide range in the composed sequence when multiple 'relative' elements are used together.
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $sequenceRange
     * @return self
     */
    public function setSequenceRange(?\TKusy\Hl7Fhir\R5\RangeType $sequenceRange = null)
    {
        $this->sequenceRange = $sequenceRange;
        return $this;
    }

    /**
     * Gets as startingSequence
     *
     * A sequence that is used as a starting sequence to describe variants that are present in a sequence analyzed.
     *
     * @return \TKusy\Hl7Fhir\R5\MolecularSequenceStartingSequenceType
     */
    public function getStartingSequence()
    {
        return $this->startingSequence;
    }

    /**
     * Sets a new startingSequence
     *
     * A sequence that is used as a starting sequence to describe variants that are present in a sequence analyzed.
     *
     * @param \TKusy\Hl7Fhir\R5\MolecularSequenceStartingSequenceType $startingSequence
     * @return self
     */
    public function setStartingSequence(?\TKusy\Hl7Fhir\R5\MolecularSequenceStartingSequenceType $startingSequence = null)
    {
        $this->startingSequence = $startingSequence;
        return $this;
    }

    /**
     * Adds as edit
     *
     * Changes in sequence from the starting sequence.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MolecularSequenceEditType $edit
     */
    public function addToEdit(\TKusy\Hl7Fhir\R5\MolecularSequenceEditType $edit)
    {
        $this->edit[] = $edit;
        return $this;
    }

    /**
     * isset edit
     *
     * Changes in sequence from the starting sequence.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEdit($index)
    {
        return isset($this->edit[$index]);
    }

    /**
     * unset edit
     *
     * Changes in sequence from the starting sequence.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEdit($index)
    {
        unset($this->edit[$index]);
    }

    /**
     * Gets as edit
     *
     * Changes in sequence from the starting sequence.
     *
     * @return \TKusy\Hl7Fhir\R5\MolecularSequenceEditType[]
     */
    public function getEdit()
    {
        return $this->edit;
    }

    /**
     * Sets a new edit
     *
     * Changes in sequence from the starting sequence.
     *
     * @param \TKusy\Hl7Fhir\R5\MolecularSequenceEditType[] $edit
     * @return self
     */
    public function setEdit(array $edit = null)
    {
        $this->edit = $edit;
        return $this;
    }


}

