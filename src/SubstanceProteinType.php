<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceProteinType
 *
 * A SubstanceProtein is defined as a single unit of a linear amino acid sequence, or a combination of subunits that are either covalently linked or have a defined invariant stoichiometric relationship. This includes all synthetic, recombinant and purified SubstanceProteins of defined sequence, whether the use is therapeutic or prophylactic. This set of elements will be used to describe albumins, coagulation factors, cytokines, growth factors, peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant vaccines, and immunomodulators.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubstanceProtein
 */
class SubstanceProteinType extends DomainResourceType
{

    /**
     * The SubstanceProtein descriptive elements will only be used when a complete or partial amino acid sequence is available or derivable from a nucleic acid sequence.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $sequenceType
     */
    private $sequenceType = null;

    /**
     * Number of linear sequences of amino acids linked through peptide bonds. The number of subunits constituting the SubstanceProtein shall be described. It is possible that the number of subunits can be variable.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $numberOfSubunits
     */
    private $numberOfSubunits = null;

    /**
     * The disulphide bond between two cysteine residues either on the same subunit or on two different subunits shall be described. The position of the disulfide bonds in the SubstanceProtein shall be listed in increasing order of subunit number and position within subunit followed by the abbreviation of the amino acids involved. The disulfide linkage positions shall actually contain the amino acid Cysteine at the respective positions.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $disulfideLinkage
     */
    private $disulfideLinkage = null;

    /**
     * This subclause refers to the description of each subunit constituting the SubstanceProtein. A subunit is a linear sequence of amino acids linked through peptide bonds. The Subunit information shall be provided when the finished SubstanceProtein is a complex of multiple sequences; subunits are not used to delineate domains within a single sequence. Subunits are listed in order of decreasing length; sequences of the same length will be ordered by decreasing molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceProteinSubunitType[] $subunit
     */
    private $subunit = null;

    /**
     * Gets as sequenceType
     *
     * The SubstanceProtein descriptive elements will only be used when a complete or partial amino acid sequence is available or derivable from a nucleic acid sequence.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSequenceType()
    {
        return $this->sequenceType;
    }

    /**
     * Sets a new sequenceType
     *
     * The SubstanceProtein descriptive elements will only be used when a complete or partial amino acid sequence is available or derivable from a nucleic acid sequence.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $sequenceType
     * @return self
     */
    public function setSequenceType(\TKusy\Hl7FhirR4\CodeableConceptType $sequenceType)
    {
        $this->sequenceType = $sequenceType;
        return $this;
    }

    /**
     * Gets as numberOfSubunits
     *
     * Number of linear sequences of amino acids linked through peptide bonds. The number of subunits constituting the SubstanceProtein shall be described. It is possible that the number of subunits can be variable.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getNumberOfSubunits()
    {
        return $this->numberOfSubunits;
    }

    /**
     * Sets a new numberOfSubunits
     *
     * Number of linear sequences of amino acids linked through peptide bonds. The number of subunits constituting the SubstanceProtein shall be described. It is possible that the number of subunits can be variable.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $numberOfSubunits
     * @return self
     */
    public function setNumberOfSubunits(\TKusy\Hl7FhirR4\IntegerType $numberOfSubunits)
    {
        $this->numberOfSubunits = $numberOfSubunits;
        return $this;
    }

    /**
     * Adds as disulfideLinkage
     *
     * The disulphide bond between two cysteine residues either on the same subunit or on two different subunits shall be described. The position of the disulfide bonds in the SubstanceProtein shall be listed in increasing order of subunit number and position within subunit followed by the abbreviation of the amino acids involved. The disulfide linkage positions shall actually contain the amino acid Cysteine at the respective positions.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $disulfideLinkage
     */
    public function addToDisulfideLinkage(\TKusy\Hl7FhirR4\StringType $disulfideLinkage)
    {
        $this->disulfideLinkage[] = $disulfideLinkage;
        return $this;
    }

    /**
     * isset disulfideLinkage
     *
     * The disulphide bond between two cysteine residues either on the same subunit or on two different subunits shall be described. The position of the disulfide bonds in the SubstanceProtein shall be listed in increasing order of subunit number and position within subunit followed by the abbreviation of the amino acids involved. The disulfide linkage positions shall actually contain the amino acid Cysteine at the respective positions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisulfideLinkage($index)
    {
        return isset($this->disulfideLinkage[$index]);
    }

    /**
     * unset disulfideLinkage
     *
     * The disulphide bond between two cysteine residues either on the same subunit or on two different subunits shall be described. The position of the disulfide bonds in the SubstanceProtein shall be listed in increasing order of subunit number and position within subunit followed by the abbreviation of the amino acids involved. The disulfide linkage positions shall actually contain the amino acid Cysteine at the respective positions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisulfideLinkage($index)
    {
        unset($this->disulfideLinkage[$index]);
    }

    /**
     * Gets as disulfideLinkage
     *
     * The disulphide bond between two cysteine residues either on the same subunit or on two different subunits shall be described. The position of the disulfide bonds in the SubstanceProtein shall be listed in increasing order of subunit number and position within subunit followed by the abbreviation of the amino acids involved. The disulfide linkage positions shall actually contain the amino acid Cysteine at the respective positions.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getDisulfideLinkage()
    {
        return $this->disulfideLinkage;
    }

    /**
     * Sets a new disulfideLinkage
     *
     * The disulphide bond between two cysteine residues either on the same subunit or on two different subunits shall be described. The position of the disulfide bonds in the SubstanceProtein shall be listed in increasing order of subunit number and position within subunit followed by the abbreviation of the amino acids involved. The disulfide linkage positions shall actually contain the amino acid Cysteine at the respective positions.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $disulfideLinkage
     * @return self
     */
    public function setDisulfideLinkage(array $disulfideLinkage)
    {
        $this->disulfideLinkage = $disulfideLinkage;
        return $this;
    }

    /**
     * Adds as subunit
     *
     * This subclause refers to the description of each subunit constituting the SubstanceProtein. A subunit is a linear sequence of amino acids linked through peptide bonds. The Subunit information shall be provided when the finished SubstanceProtein is a complex of multiple sequences; subunits are not used to delineate domains within a single sequence. Subunits are listed in order of decreasing length; sequences of the same length will be ordered by decreasing molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceProteinSubunitType $subunit
     */
    public function addToSubunit(\TKusy\Hl7FhirR4\SubstanceProteinSubunitType $subunit)
    {
        $this->subunit[] = $subunit;
        return $this;
    }

    /**
     * isset subunit
     *
     * This subclause refers to the description of each subunit constituting the SubstanceProtein. A subunit is a linear sequence of amino acids linked through peptide bonds. The Subunit information shall be provided when the finished SubstanceProtein is a complex of multiple sequences; subunits are not used to delineate domains within a single sequence. Subunits are listed in order of decreasing length; sequences of the same length will be ordered by decreasing molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubunit($index)
    {
        return isset($this->subunit[$index]);
    }

    /**
     * unset subunit
     *
     * This subclause refers to the description of each subunit constituting the SubstanceProtein. A subunit is a linear sequence of amino acids linked through peptide bonds. The Subunit information shall be provided when the finished SubstanceProtein is a complex of multiple sequences; subunits are not used to delineate domains within a single sequence. Subunits are listed in order of decreasing length; sequences of the same length will be ordered by decreasing molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubunit($index)
    {
        unset($this->subunit[$index]);
    }

    /**
     * Gets as subunit
     *
     * This subclause refers to the description of each subunit constituting the SubstanceProtein. A subunit is a linear sequence of amino acids linked through peptide bonds. The Subunit information shall be provided when the finished SubstanceProtein is a complex of multiple sequences; subunits are not used to delineate domains within a single sequence. Subunits are listed in order of decreasing length; sequences of the same length will be ordered by decreasing molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceProteinSubunitType[]
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

    /**
     * Sets a new subunit
     *
     * This subclause refers to the description of each subunit constituting the SubstanceProtein. A subunit is a linear sequence of amino acids linked through peptide bonds. The Subunit information shall be provided when the finished SubstanceProtein is a complex of multiple sequences; subunits are not used to delineate domains within a single sequence. Subunits are listed in order of decreasing length; sequences of the same length will be ordered by decreasing molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceProteinSubunitType[] $subunit
     * @return self
     */
    public function setSubunit(array $subunit)
    {
        $this->subunit = $subunit;
        return $this;
    }


}

