<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MolecularSequenceStartingSequenceType
 *
 * Representation of a molecular sequence.
 * XSD Type: MolecularSequence.StartingSequence
 */
class MolecularSequenceStartingSequenceType extends BackboneElementType
{

    /**
     * The genome assembly used for starting sequence, e.g. GRCh38.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $genomeAssembly
     */
    private $genomeAssembly = null;

    /**
     * Structural unit composed of a nucleic acid molecule which controls its own replication through the interaction of specific proteins at one or more origins of replication ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $chromosome
     */
    private $chromosome = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $sequenceCodeableConcept
     */
    private $sequenceCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $sequenceString
     */
    private $sequenceString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $sequenceReference
     */
    private $sequenceReference = null;

    /**
     * Start position of the window on the starting sequence. This value should honor the rules of the coordinateSystem.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $windowStart
     */
    private $windowStart = null;

    /**
     * End position of the window on the starting sequence. This value should honor the rules of the coordinateSystem.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $windowEnd
     */
    private $windowEnd = null;

    /**
     * A relative reference to a DNA strand based on gene orientation. The strand that contains the open reading frame of the gene is the "sense" strand, and the opposite complementary strand is the "antisense" strand.
     *
     * @var \TKusy\Hl7Fhir\R5\OrientationTypeType $orientation
     */
    private $orientation = null;

    /**
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end is on the short arm of the chromosome, and the Crick strand as the one whose 5'-end is on the long arm.
     *
     * @var \TKusy\Hl7Fhir\R5\StrandTypeType $strand
     */
    private $strand = null;

    /**
     * Gets as genomeAssembly
     *
     * The genome assembly used for starting sequence, e.g. GRCh38.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getGenomeAssembly()
    {
        return $this->genomeAssembly;
    }

    /**
     * Sets a new genomeAssembly
     *
     * The genome assembly used for starting sequence, e.g. GRCh38.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $genomeAssembly
     * @return self
     */
    public function setGenomeAssembly(?\TKusy\Hl7Fhir\R5\CodeableConceptType $genomeAssembly = null)
    {
        $this->genomeAssembly = $genomeAssembly;
        return $this;
    }

    /**
     * Gets as chromosome
     *
     * Structural unit composed of a nucleic acid molecule which controls its own replication through the interaction of specific proteins at one or more origins of replication ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $chromosome
     * @return self
     */
    public function setChromosome(?\TKusy\Hl7Fhir\R5\CodeableConceptType $chromosome = null)
    {
        $this->chromosome = $chromosome;
        return $this;
    }

    /**
     * Gets as sequenceCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSequenceCodeableConcept()
    {
        return $this->sequenceCodeableConcept;
    }

    /**
     * Sets a new sequenceCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $sequenceCodeableConcept
     * @return self
     */
    public function setSequenceCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $sequenceCodeableConcept = null)
    {
        $this->sequenceCodeableConcept = $sequenceCodeableConcept;
        return $this;
    }

    /**
     * Gets as sequenceString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSequenceString()
    {
        return $this->sequenceString;
    }

    /**
     * Sets a new sequenceString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $sequenceString
     * @return self
     */
    public function setSequenceString(?\TKusy\Hl7Fhir\R5\StringType $sequenceString = null)
    {
        $this->sequenceString = $sequenceString;
        return $this;
    }

    /**
     * Gets as sequenceReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSequenceReference()
    {
        return $this->sequenceReference;
    }

    /**
     * Sets a new sequenceReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $sequenceReference
     * @return self
     */
    public function setSequenceReference(?\TKusy\Hl7Fhir\R5\ReferenceType $sequenceReference = null)
    {
        $this->sequenceReference = $sequenceReference;
        return $this;
    }

    /**
     * Gets as windowStart
     *
     * Start position of the window on the starting sequence. This value should honor the rules of the coordinateSystem.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getWindowStart()
    {
        return $this->windowStart;
    }

    /**
     * Sets a new windowStart
     *
     * Start position of the window on the starting sequence. This value should honor the rules of the coordinateSystem.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $windowStart
     * @return self
     */
    public function setWindowStart(?\TKusy\Hl7Fhir\R5\IntegerType $windowStart = null)
    {
        $this->windowStart = $windowStart;
        return $this;
    }

    /**
     * Gets as windowEnd
     *
     * End position of the window on the starting sequence. This value should honor the rules of the coordinateSystem.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getWindowEnd()
    {
        return $this->windowEnd;
    }

    /**
     * Sets a new windowEnd
     *
     * End position of the window on the starting sequence. This value should honor the rules of the coordinateSystem.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $windowEnd
     * @return self
     */
    public function setWindowEnd(?\TKusy\Hl7Fhir\R5\IntegerType $windowEnd = null)
    {
        $this->windowEnd = $windowEnd;
        return $this;
    }

    /**
     * Gets as orientation
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that contains the open reading frame of the gene is the "sense" strand, and the opposite complementary strand is the "antisense" strand.
     *
     * @return \TKusy\Hl7Fhir\R5\OrientationTypeType
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
     * @param \TKusy\Hl7Fhir\R5\OrientationTypeType $orientation
     * @return self
     */
    public function setOrientation(?\TKusy\Hl7Fhir\R5\OrientationTypeType $orientation = null)
    {
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * Gets as strand
     *
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end is on the short arm of the chromosome, and the Crick strand as the one whose 5'-end is on the long arm.
     *
     * @return \TKusy\Hl7Fhir\R5\StrandTypeType
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
     * @param \TKusy\Hl7Fhir\R5\StrandTypeType $strand
     * @return self
     */
    public function setStrand(?\TKusy\Hl7Fhir\R5\StrandTypeType $strand = null)
    {
        $this->strand = $strand;
        return $this;
    }


}

