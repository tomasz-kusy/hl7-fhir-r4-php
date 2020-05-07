<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceNucleicAcidSubunitType
 *
 * Nucleic acids are defined by three distinct elements: the base, sugar and linkage. Individual substance/moiety IDs will be created for each of these elements. The nucleotide sequence will be always entered in the 5’-3’ direction.
 * XSD Type: SubstanceNucleicAcid.Subunit
 */
class SubstanceNucleicAcidSubunitType extends BackboneElementType
{

    /**
     * Index of linear sequences of nucleic acids in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $subunit
     */
    private $subunit = null;

    /**
     * Actual nucleotide sequence notation from 5' to 3' end using standard single letter codes. In addition to the base sequence, sugar and type of phosphate or non-phosphate linkage should also be captured.
     *
     * @var \TKusy\Hl7FhirR4\StringType $sequence
     */
    private $sequence = null;

    /**
     * The length of the sequence shall be captured.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $length
     */
    private $length = null;

    /**
     * (TBC).
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $sequenceAttachment
     */
    private $sequenceAttachment = null;

    /**
     * The nucleotide present at the 5’ terminal shall be specified based on a controlled vocabulary. Since the sequence is represented from the 5' to the 3' end, the 5’ prime nucleotide is the letter at the first position in the sequence. A separate representation would be redundant.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $fivePrime
     */
    private $fivePrime = null;

    /**
     * The nucleotide present at the 3’ terminal shall be specified based on a controlled vocabulary. Since the sequence is represented from the 5' to the 3' end, the 5’ prime nucleotide is the letter at the last position in the sequence. A separate representation would be redundant.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $threePrime
     */
    private $threePrime = null;

    /**
     * The linkages between sugar residues will also be captured.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceNucleicAcidLinkageType[] $linkage
     */
    private $linkage = [
        
    ];

    /**
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @var \TKusy\Hl7FhirR4\SubstanceNucleicAcidSugarType[] $sugar
     */
    private $sugar = [
        
    ];

    /**
     * Gets as subunit
     *
     * Index of linear sequences of nucleic acids in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

    /**
     * Sets a new subunit
     *
     * Index of linear sequences of nucleic acids in order of decreasing length. Sequences of the same length will be ordered by molecular weight. Subunits that have identical sequences will be repeated and have sequential subscripts.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $subunit
     * @return self
     */
    public function setSubunit(\TKusy\Hl7FhirR4\IntegerType $subunit)
    {
        $this->subunit = $subunit;
        return $this;
    }

    /**
     * Gets as sequence
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single letter codes. In addition to the base sequence, sugar and type of phosphate or non-phosphate linkage should also be captured.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single letter codes. In addition to the base sequence, sugar and type of phosphate or non-phosphate linkage should also be captured.
     *
     * @param \TKusy\Hl7FhirR4\StringType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7FhirR4\StringType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as length
     *
     * The length of the sequence shall be captured.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * The length of the sequence shall be captured.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $length
     * @return self
     */
    public function setLength(\TKusy\Hl7FhirR4\IntegerType $length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as sequenceAttachment
     *
     * (TBC).
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getSequenceAttachment()
    {
        return $this->sequenceAttachment;
    }

    /**
     * Sets a new sequenceAttachment
     *
     * (TBC).
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $sequenceAttachment
     * @return self
     */
    public function setSequenceAttachment(\TKusy\Hl7FhirR4\AttachmentType $sequenceAttachment)
    {
        $this->sequenceAttachment = $sequenceAttachment;
        return $this;
    }

    /**
     * Gets as fivePrime
     *
     * The nucleotide present at the 5’ terminal shall be specified based on a controlled vocabulary. Since the sequence is represented from the 5' to the 3' end, the 5’ prime nucleotide is the letter at the first position in the sequence. A separate representation would be redundant.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getFivePrime()
    {
        return $this->fivePrime;
    }

    /**
     * Sets a new fivePrime
     *
     * The nucleotide present at the 5’ terminal shall be specified based on a controlled vocabulary. Since the sequence is represented from the 5' to the 3' end, the 5’ prime nucleotide is the letter at the first position in the sequence. A separate representation would be redundant.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $fivePrime
     * @return self
     */
    public function setFivePrime(\TKusy\Hl7FhirR4\CodeableConceptType $fivePrime)
    {
        $this->fivePrime = $fivePrime;
        return $this;
    }

    /**
     * Gets as threePrime
     *
     * The nucleotide present at the 3’ terminal shall be specified based on a controlled vocabulary. Since the sequence is represented from the 5' to the 3' end, the 5’ prime nucleotide is the letter at the last position in the sequence. A separate representation would be redundant.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getThreePrime()
    {
        return $this->threePrime;
    }

    /**
     * Sets a new threePrime
     *
     * The nucleotide present at the 3’ terminal shall be specified based on a controlled vocabulary. Since the sequence is represented from the 5' to the 3' end, the 5’ prime nucleotide is the letter at the last position in the sequence. A separate representation would be redundant.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $threePrime
     * @return self
     */
    public function setThreePrime(\TKusy\Hl7FhirR4\CodeableConceptType $threePrime)
    {
        $this->threePrime = $threePrime;
        return $this;
    }

    /**
     * Adds as linkage
     *
     * The linkages between sugar residues will also be captured.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceNucleicAcidLinkageType $linkage
     */
    public function addToLinkage(\TKusy\Hl7FhirR4\SubstanceNucleicAcidLinkageType $linkage)
    {
        $this->linkage[] = $linkage;
        return $this;
    }

    /**
     * isset linkage
     *
     * The linkages between sugar residues will also be captured.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkage($index)
    {
        return isset($this->linkage[$index]);
    }

    /**
     * unset linkage
     *
     * The linkages between sugar residues will also be captured.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkage($index)
    {
        unset($this->linkage[$index]);
    }

    /**
     * Gets as linkage
     *
     * The linkages between sugar residues will also be captured.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceNucleicAcidLinkageType[]
     */
    public function getLinkage()
    {
        return $this->linkage;
    }

    /**
     * Sets a new linkage
     *
     * The linkages between sugar residues will also be captured.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceNucleicAcidLinkageType[] $linkage
     * @return self
     */
    public function setLinkage(array $linkage)
    {
        $this->linkage = $linkage;
        return $this;
    }

    /**
     * Adds as sugar
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceNucleicAcidSugarType $sugar
     */
    public function addToSugar(\TKusy\Hl7FhirR4\SubstanceNucleicAcidSugarType $sugar)
    {
        $this->sugar[] = $sugar;
        return $this;
    }

    /**
     * isset sugar
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSugar($index)
    {
        return isset($this->sugar[$index]);
    }

    /**
     * unset sugar
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSugar($index)
    {
        unset($this->sugar[$index]);
    }

    /**
     * Gets as sugar
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @return \TKusy\Hl7FhirR4\SubstanceNucleicAcidSugarType[]
     */
    public function getSugar()
    {
        return $this->sugar;
    }

    /**
     * Sets a new sugar
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @param \TKusy\Hl7FhirR4\SubstanceNucleicAcidSugarType[] $sugar
     * @return self
     */
    public function setSugar(array $sugar)
    {
        $this->sugar = $sugar;
        return $this;
    }


}

