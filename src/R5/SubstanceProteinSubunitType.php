<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceProteinSubunitType
 *
 * A SubstanceProtein is defined as a single unit of a linear amino acid sequence, or a combination of subunits that are either covalently linked or have a defined invariant stoichiometric relationship. This includes all synthetic, recombinant and purified SubstanceProteins of defined sequence, whether the use is therapeutic or prophylactic. This set of elements will be used to describe albumins, coagulation factors, cytokines, growth factors, peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant vaccines, and immunomodulators.
 * XSD Type: SubstanceProtein.Subunit
 */
class SubstanceProteinSubunitType extends BackboneElementType
{

    /**
     * Index of primary sequences of amino acids linked through peptide bonds in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $subunit
     */
    private $subunit = null;

    /**
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $sequence
     */
    private $sequence = null;

    /**
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $length
     */
    private $length = null;

    /**
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $sequenceAttachment
     */
    private $sequenceAttachment = null;

    /**
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $nTerminalModificationId
     */
    private $nTerminalModificationId = null;

    /**
     * The name of the fragment modified at the N-terminal of the SubstanceProtein shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $nTerminalModification
     */
    private $nTerminalModification = null;

    /**
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $cTerminalModificationId
     */
    private $cTerminalModificationId = null;

    /**
     * The modification at the C-terminal shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $cTerminalModification
     */
    private $cTerminalModification = null;

    /**
     * Gets as subunit
     *
     * Index of primary sequences of amino acids linked through peptide bonds in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

    /**
     * Sets a new subunit
     *
     * Index of primary sequences of amino acids linked through peptide bonds in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $subunit
     * @return self
     */
    public function setSubunit(?\TKusy\Hl7Fhir\R5\IntegerType $subunit = null)
    {
        $this->subunit = $subunit;
        return $this;
    }

    /**
     * Gets as sequence
     *
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $sequence
     * @return self
     */
    public function setSequence(?\TKusy\Hl7Fhir\R5\StringType $sequence = null)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as length
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $length
     * @return self
     */
    public function setLength(?\TKusy\Hl7Fhir\R5\IntegerType $length = null)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as sequenceAttachment
     *
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getSequenceAttachment()
    {
        return $this->sequenceAttachment;
    }

    /**
     * Sets a new sequenceAttachment
     *
     * The sequence information shall be provided enumerating the amino acids from N- to C-terminal end using standard single-letter amino acid codes. Uppercase shall be used for L-amino acids and lowercase for D-amino acids. Transcribed SubstanceProteins will always be described using the translated sequence; for synthetic peptide containing amino acids that are not represented with a single letter code an X should be used within the sequence. The modified amino acids will be distinguished by their position in the sequence.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $sequenceAttachment
     * @return self
     */
    public function setSequenceAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $sequenceAttachment = null)
    {
        $this->sequenceAttachment = $sequenceAttachment;
        return $this;
    }

    /**
     * Gets as nTerminalModificationId
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getNTerminalModificationId()
    {
        return $this->nTerminalModificationId;
    }

    /**
     * Sets a new nTerminalModificationId
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $nTerminalModificationId
     * @return self
     */
    public function setNTerminalModificationId(?\TKusy\Hl7Fhir\R5\IdentifierType $nTerminalModificationId = null)
    {
        $this->nTerminalModificationId = $nTerminalModificationId;
        return $this;
    }

    /**
     * Gets as nTerminalModification
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getNTerminalModification()
    {
        return $this->nTerminalModification;
    }

    /**
     * Sets a new nTerminalModification
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $nTerminalModification
     * @return self
     */
    public function setNTerminalModification(?\TKusy\Hl7Fhir\R5\StringType $nTerminalModification = null)
    {
        $this->nTerminalModification = $nTerminalModification;
        return $this;
    }

    /**
     * Gets as cTerminalModificationId
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getCTerminalModificationId()
    {
        return $this->cTerminalModificationId;
    }

    /**
     * Sets a new cTerminalModificationId
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238 Substance ID.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $cTerminalModificationId
     * @return self
     */
    public function setCTerminalModificationId(?\TKusy\Hl7Fhir\R5\IdentifierType $cTerminalModificationId = null)
    {
        $this->cTerminalModificationId = $cTerminalModificationId;
        return $this;
    }

    /**
     * Gets as cTerminalModification
     *
     * The modification at the C-terminal shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCTerminalModification()
    {
        return $this->cTerminalModification;
    }

    /**
     * Sets a new cTerminalModification
     *
     * The modification at the C-terminal shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $cTerminalModification
     * @return self
     */
    public function setCTerminalModification(?\TKusy\Hl7Fhir\R5\StringType $cTerminalModification = null)
    {
        $this->cTerminalModification = $cTerminalModification;
        return $this;
    }


}

