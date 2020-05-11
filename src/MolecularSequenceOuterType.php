<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MolecularSequenceOuterType
 *
 * Raw data describing a biological sequence.
 * XSD Type: MolecularSequence.Outer
 */
class MolecularSequenceOuterType extends BackboneElementType
{

    /**
     * Structural variant outer start. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \integer $start
     */
    private $start = null;

    /**
     * Structural variant outer end. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @var \integer $end
     */
    private $end = null;

    /**
     * Gets as start
     *
     * Structural variant outer start. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @return \integer
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Structural variant outer start. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @param \integer $start
     * @return self
     */
    public function setStart(\integer $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * Structural variant outer end. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @return \integer
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * Structural variant outer end. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @param \integer $end
     * @return self
     */
    public function setEnd(\integer $end)
    {
        $this->end = $end;
        return $this;
    }


}

