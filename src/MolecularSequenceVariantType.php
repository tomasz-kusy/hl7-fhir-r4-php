<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MolecularSequenceVariantType
 *
 * Raw data describing a biological sequence.
 * XSD Type: MolecularSequence.Variant
 */
class MolecularSequenceVariantType extends BackboneElementType
{

    /**
     * Start position of the variant on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \integer $start
     */
    private $start = null;

    /**
     * End position of the variant on the reference sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @var \integer $end
     */
    private $end = null;

    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @var string $observedAllele
     */
    private $observedAllele = null;

    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the reference sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @var string $referenceAllele
     */
    private $referenceAllele = null;

    /**
     * Extended CIGAR string for aligning the sequence with reference bases. See detailed documentation [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @var string $cigar
     */
    private $cigar = null;

    /**
     * A pointer to an Observation containing variant information.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $variantPointer
     */
    private $variantPointer = null;

    /**
     * Gets as start
     *
     * Start position of the variant on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
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
     * Start position of the variant on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
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
     * End position of the variant on the reference sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
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
     * End position of the variant on the reference sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @param \integer $end
     * @return self
     */
    public function setEnd(\integer $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as observedAllele
     *
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @return string
     */
    public function getObservedAllele()
    {
        return $this->observedAllele;
    }

    /**
     * Sets a new observedAllele
     *
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @param string $observedAllele
     * @return self
     */
    public function setObservedAllele($observedAllele)
    {
        $this->observedAllele = $observedAllele;
        return $this;
    }

    /**
     * Gets as referenceAllele
     *
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the reference sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @return string
     */
    public function getReferenceAllele()
    {
        return $this->referenceAllele;
    }

    /**
     * Sets a new referenceAllele
     *
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the reference sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @param string $referenceAllele
     * @return self
     */
    public function setReferenceAllele($referenceAllele)
    {
        $this->referenceAllele = $referenceAllele;
        return $this;
    }

    /**
     * Gets as cigar
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See detailed documentation [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @return string
     */
    public function getCigar()
    {
        return $this->cigar;
    }

    /**
     * Sets a new cigar
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See detailed documentation [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @param string $cigar
     * @return self
     */
    public function setCigar($cigar)
    {
        $this->cigar = $cigar;
        return $this;
    }

    /**
     * Gets as variantPointer
     *
     * A pointer to an Observation containing variant information.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getVariantPointer()
    {
        return $this->variantPointer;
    }

    /**
     * Sets a new variantPointer
     *
     * A pointer to an Observation containing variant information.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $variantPointer
     * @return self
     */
    public function setVariantPointer(\TKusy\Hl7FhirR4\ReferenceType $variantPointer)
    {
        $this->variantPointer = $variantPointer;
        return $this;
    }


}

