<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MolecularSequenceReferenceSeqType
 *
 * Raw data describing a biological sequence.
 * XSD Type: MolecularSequence.ReferenceSeq
 */
class MolecularSequenceReferenceSeqType extends BackboneElementType
{

    /**
     * Structural unit composed of a nucleic acid molecule which controls its own replication through the interaction of specific proteins at one or more origins of replication ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $chromosome
     */
    private $chromosome = null;

    /**
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh 37'. Version number must be included if a versioned release of a primary build was used.
     *
     * @var \TKusy\Hl7FhirR4\StringType $genomeBuild
     */
    private $genomeBuild = null;

    /**
     * A relative reference to a DNA strand based on gene orientation. The strand that contains the open reading frame of the gene is the "sense" strand, and the opposite complementary strand is the "antisense" strand.
     *
     * @var \TKusy\Hl7FhirR4\OrientationType $orientation
     */
    private $orientation = null;

    /**
     * Reference identifier of reference sequence submitted to NCBI. It must match the type in the MolecularSequence.type field. For example, the prefix, “NG_” identifies reference sequence for genes, “NM_” for messenger RNA transcripts, and “NP_” for amino acid sequences.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $referenceSeqId
     */
    private $referenceSeqId = null;

    /**
     * A pointer to another MolecularSequence entity as reference sequence.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $referenceSeqPointer
     */
    private $referenceSeqPointer = null;

    /**
     * A string like "ACGT".
     *
     * @var \TKusy\Hl7FhirR4\StringType $referenceSeqString
     */
    private $referenceSeqString = null;

    /**
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end is on the short arm of the chromosome, and the Crick strand as the one whose 5'-end is on the long arm.
     *
     * @var \TKusy\Hl7FhirR4\StrandType $strand
     */
    private $strand = null;

    /**
     * Start position of the window on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $windowStart
     */
    private $windowStart = null;

    /**
     * End position of the window on the reference sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $windowEnd
     */
    private $windowEnd = null;

    /**
     * Gets as chromosome
     *
     * Structural unit composed of a nucleic acid molecule which controls its own replication through the interaction of specific proteins at one or more origins of replication ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getChromosome()
    {
        return $this->chromosome;
    }

    /**
     * Sets a new chromosome
     *
     * Structural unit composed of a nucleic acid molecule which controls its own replication through the interaction of specific proteins at one or more origins of replication ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $chromosome
     * @return self
     */
    public function setChromosome(\TKusy\Hl7FhirR4\CodeableConceptType $chromosome)
    {
        $this->chromosome = $chromosome;
        return $this;
    }

    /**
     * Gets as genomeBuild
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh 37'. Version number must be included if a versioned release of a primary build was used.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getGenomeBuild()
    {
        return $this->genomeBuild;
    }

    /**
     * Sets a new genomeBuild
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh 37'. Version number must be included if a versioned release of a primary build was used.
     *
     * @param \TKusy\Hl7FhirR4\StringType $genomeBuild
     * @return self
     */
    public function setGenomeBuild(\TKusy\Hl7FhirR4\StringType $genomeBuild)
    {
        $this->genomeBuild = $genomeBuild;
        return $this;
    }

    /**
     * Gets as orientation
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that contains the open reading frame of the gene is the "sense" strand, and the opposite complementary strand is the "antisense" strand.
     *
     * @return \TKusy\Hl7FhirR4\OrientationType
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Sets a new orientation
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that contains the open reading frame of the gene is the "sense" strand, and the opposite complementary strand is the "antisense" strand.
     *
     * @param \TKusy\Hl7FhirR4\OrientationType $orientation
     * @return self
     */
    public function setOrientation(\TKusy\Hl7FhirR4\OrientationType $orientation)
    {
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * Gets as referenceSeqId
     *
     * Reference identifier of reference sequence submitted to NCBI. It must match the type in the MolecularSequence.type field. For example, the prefix, “NG_” identifies reference sequence for genes, “NM_” for messenger RNA transcripts, and “NP_” for amino acid sequences.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getReferenceSeqId()
    {
        return $this->referenceSeqId;
    }

    /**
     * Sets a new referenceSeqId
     *
     * Reference identifier of reference sequence submitted to NCBI. It must match the type in the MolecularSequence.type field. For example, the prefix, “NG_” identifies reference sequence for genes, “NM_” for messenger RNA transcripts, and “NP_” for amino acid sequences.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $referenceSeqId
     * @return self
     */
    public function setReferenceSeqId(\TKusy\Hl7FhirR4\CodeableConceptType $referenceSeqId)
    {
        $this->referenceSeqId = $referenceSeqId;
        return $this;
    }

    /**
     * Gets as referenceSeqPointer
     *
     * A pointer to another MolecularSequence entity as reference sequence.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReferenceSeqPointer()
    {
        return $this->referenceSeqPointer;
    }

    /**
     * Sets a new referenceSeqPointer
     *
     * A pointer to another MolecularSequence entity as reference sequence.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $referenceSeqPointer
     * @return self
     */
    public function setReferenceSeqPointer(\TKusy\Hl7FhirR4\ReferenceType $referenceSeqPointer)
    {
        $this->referenceSeqPointer = $referenceSeqPointer;
        return $this;
    }

    /**
     * Gets as referenceSeqString
     *
     * A string like "ACGT".
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getReferenceSeqString()
    {
        return $this->referenceSeqString;
    }

    /**
     * Sets a new referenceSeqString
     *
     * A string like "ACGT".
     *
     * @param \TKusy\Hl7FhirR4\StringType $referenceSeqString
     * @return self
     */
    public function setReferenceSeqString(\TKusy\Hl7FhirR4\StringType $referenceSeqString)
    {
        $this->referenceSeqString = $referenceSeqString;
        return $this;
    }

    /**
     * Gets as strand
     *
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end is on the short arm of the chromosome, and the Crick strand as the one whose 5'-end is on the long arm.
     *
     * @return \TKusy\Hl7FhirR4\StrandType
     */
    public function getStrand()
    {
        return $this->strand;
    }

    /**
     * Sets a new strand
     *
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end is on the short arm of the chromosome, and the Crick strand as the one whose 5'-end is on the long arm.
     *
     * @param \TKusy\Hl7FhirR4\StrandType $strand
     * @return self
     */
    public function setStrand(\TKusy\Hl7FhirR4\StrandType $strand)
    {
        $this->strand = $strand;
        return $this;
    }

    /**
     * Gets as windowStart
     *
     * Start position of the window on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getWindowStart()
    {
        return $this->windowStart;
    }

    /**
     * Sets a new windowStart
     *
     * Start position of the window on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $windowStart
     * @return self
     */
    public function setWindowStart(\TKusy\Hl7FhirR4\IntegerType $windowStart)
    {
        $this->windowStart = $windowStart;
        return $this;
    }

    /**
     * Gets as windowEnd
     *
     * End position of the window on the reference sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getWindowEnd()
    {
        return $this->windowEnd;
    }

    /**
     * Sets a new windowEnd
     *
     * End position of the window on the reference sequence. If the coordinate system is 0-based then end is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $windowEnd
     * @return self
     */
    public function setWindowEnd(\TKusy\Hl7FhirR4\IntegerType $windowEnd)
    {
        $this->windowEnd = $windowEnd;
        return $this;
    }


}

