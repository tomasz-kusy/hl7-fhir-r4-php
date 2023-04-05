<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MolecularSequenceEditType
 *
 * Representation of a molecular sequence.
 * XSD Type: MolecularSequence.Edit
 */
class MolecularSequenceEditType extends BackboneElementType
{

    /**
     * Start position of the edit on the starting sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $start
     */
    private $start = null;

    /**
     * End position of the edit on the starting sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $end
     */
    private $end = null;

    /**
     * Allele that was observed. Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $replacementSequence
     */
    private $replacementSequence = null;

    /**
     * Allele in the starting sequence. Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the starting sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $replacedSequence
     */
    private $replacedSequence = null;

    /**
     * Gets as start
     *
     * Start position of the edit on the starting sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Start position of the edit on the starting sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $start
     * @return self
     */
    public function setStart(?\TKusy\Hl7Fhir\R5\IntegerType $start = null)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * End position of the edit on the starting sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * End position of the edit on the starting sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $end
     * @return self
     */
    public function setEnd(?\TKusy\Hl7Fhir\R5\IntegerType $end = null)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as replacementSequence
     *
     * Allele that was observed. Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getReplacementSequence()
    {
        return $this->replacementSequence;
    }

    /**
     * Sets a new replacementSequence
     *
     * Allele that was observed. Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $replacementSequence
     * @return self
     */
    public function setReplacementSequence(?\TKusy\Hl7Fhir\R5\StringType $replacementSequence = null)
    {
        $this->replacementSequence = $replacementSequence;
        return $this;
    }

    /**
     * Gets as replacedSequence
     *
     * Allele in the starting sequence. Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the starting sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getReplacedSequence()
    {
        return $this->replacedSequence;
    }

    /**
     * Sets a new replacedSequence
     *
     * Allele in the starting sequence. Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the starting sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $replacedSequence
     * @return self
     */
    public function setReplacedSequence(?\TKusy\Hl7Fhir\R5\StringType $replacedSequence = null)
    {
        $this->replacedSequence = $replacedSequence;
        return $this;
    }


}

