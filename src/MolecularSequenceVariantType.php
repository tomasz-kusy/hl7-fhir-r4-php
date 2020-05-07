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
     * @var \TKusy\Hl7FhirR4\IntegerType $start
     */
    private $start = null;

    /**
     * End position of the variant on the reference sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $end
     */
    private $end = null;

    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @var \TKusy\Hl7FhirR4\StringType $observedAllele
     */
    private $observedAllele = null;

    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the reference sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @var \TKusy\Hl7FhirR4\StringType $referenceAllele
     */
    private $referenceAllele = null;

    /**
     * Extended CIGAR string for aligning the sequence with reference bases. See detailed documentation [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @var \TKusy\Hl7FhirR4\StringType $cigar
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
     * @return \TKusy\Hl7FhirR4\IntegerType
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
     * @param \TKusy\Hl7FhirR4\IntegerType $start
     * @return self
     */
    public function setStart(\TKusy\Hl7FhirR4\IntegerType $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * End position of the variant on the reference sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
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
     * @param \TKusy\Hl7FhirR4\IntegerType $end
     * @return self
     */
    public function setEnd(\TKusy\Hl7FhirR4\IntegerType $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as observedAllele
     *
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $observedAllele
     * @return self
     */
    public function setObservedAllele(\TKusy\Hl7FhirR4\StringType $observedAllele)
    {
        $this->observedAllele = $observedAllele;
        return $this;
    }

    /**
     * Gets as referenceAllele
     *
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the reference sequence. When the sequence type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $referenceAllele
     * @return self
     */
    public function setReferenceAllele(\TKusy\Hl7FhirR4\StringType $referenceAllele)
    {
        $this->referenceAllele = $referenceAllele;
        return $this;
    }

    /**
     * Gets as cigar
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See detailed documentation [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $cigar
     * @return self
     */
    public function setCigar(\TKusy\Hl7FhirR4\StringType $cigar)
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

