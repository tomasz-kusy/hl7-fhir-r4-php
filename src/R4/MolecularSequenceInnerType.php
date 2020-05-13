<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MolecularSequenceInnerType
 *
 * Raw data describing a biological sequence.
 * XSD Type: MolecularSequence.Inner
 */
class MolecularSequenceInnerType extends BackboneElementType
{

    /**
     * Structural variant inner start. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $start
     */
    private $start = null;

    /**
     * Structural variant inner end. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $end
     */
    private $end = null;

    /**
     * Gets as start
     *
     * Structural variant inner start. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Structural variant inner start. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $start
     * @return self
     */
    public function setStart(\TKusy\Hl7Fhir\R4\IntegerType $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * Structural variant inner end. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * Structural variant inner end. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $end
     * @return self
     */
    public function setEnd(\TKusy\Hl7Fhir\R4\IntegerType $end)
    {
        $this->end = $end;
        return $this;
    }


}

