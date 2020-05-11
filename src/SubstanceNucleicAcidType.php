<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceNucleicAcidType
 *
 * Nucleic acids are defined by three distinct elements: the base, sugar and linkage. Individual substance/moiety IDs will be created for each of these elements. The nucleotide sequence will be always entered in the 5’-3’ direction.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubstanceNucleicAcid
 */
class SubstanceNucleicAcidType extends DomainResourceType
{

    /**
     * The type of the sequence shall be specified based on a controlled vocabulary.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $sequenceType
     */
    private $sequenceType = null;

    /**
     * The number of linear sequences of nucleotides linked through phosphodiester bonds shall be described. Subunits would be strands of nucleic acids that are tightly associated typically through Watson-Crick base pairing. NOTE: If not specified in the reference source, the assumption is that there is 1 subunit.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $numberOfSubunits
     */
    private $numberOfSubunits = null;

    /**
     * The area of hybridisation shall be described if applicable for double stranded RNA or DNA. The number associated with the subunit followed by the number associated to the residue shall be specified in increasing order. The underscore “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @var \TKusy\Hl7FhirR4\StringType $areaOfHybridisation
     */
    private $areaOfHybridisation = null;

    /**
     * (TBC).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $oligoNucleotideType
     */
    private $oligoNucleotideType = null;

    /**
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceNucleicAcidSubunitType[] $subunit
     */
    private $subunit = [
        
    ];

    /**
     * Gets as sequenceType
     *
     * The type of the sequence shall be specified based on a controlled vocabulary.
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
     * The type of the sequence shall be specified based on a controlled vocabulary.
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
     * The number of linear sequences of nucleotides linked through phosphodiester bonds shall be described. Subunits would be strands of nucleic acids that are tightly associated typically through Watson-Crick base pairing. NOTE: If not specified in the reference source, the assumption is that there is 1 subunit.
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
     * The number of linear sequences of nucleotides linked through phosphodiester bonds shall be described. Subunits would be strands of nucleic acids that are tightly associated typically through Watson-Crick base pairing. NOTE: If not specified in the reference source, the assumption is that there is 1 subunit.
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
     * Gets as areaOfHybridisation
     *
     * The area of hybridisation shall be described if applicable for double stranded RNA or DNA. The number associated with the subunit followed by the number associated to the residue shall be specified in increasing order. The underscore “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getAreaOfHybridisation()
    {
        return $this->areaOfHybridisation;
    }

    /**
     * Sets a new areaOfHybridisation
     *
     * The area of hybridisation shall be described if applicable for double stranded RNA or DNA. The number associated with the subunit followed by the number associated to the residue shall be specified in increasing order. The underscore “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @param \TKusy\Hl7FhirR4\StringType $areaOfHybridisation
     * @return self
     */
    public function setAreaOfHybridisation(\TKusy\Hl7FhirR4\StringType $areaOfHybridisation)
    {
        $this->areaOfHybridisation = $areaOfHybridisation;
        return $this;
    }

    /**
     * Gets as oligoNucleotideType
     *
     * (TBC).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getOligoNucleotideType()
    {
        return $this->oligoNucleotideType;
    }

    /**
     * Sets a new oligoNucleotideType
     *
     * (TBC).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $oligoNucleotideType
     * @return self
     */
    public function setOligoNucleotideType(\TKusy\Hl7FhirR4\CodeableConceptType $oligoNucleotideType)
    {
        $this->oligoNucleotideType = $oligoNucleotideType;
        return $this;
    }

    /**
     * Adds as subunit
     *
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceNucleicAcidSubunitType $subunit
     */
    public function addToSubunit(\TKusy\Hl7FhirR4\SubstanceNucleicAcidSubunitType $subunit)
    {
        $this->subunit[] = $subunit;
        return $this;
    }

    /**
     * isset subunit
     *
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
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
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
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
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceNucleicAcidSubunitType[]
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

    /**
     * Sets a new subunit
     *
     * Subunits are listed in order of decreasing length; sequences of the same length will be ordered by molecular weight; subunits that have identical sequences will be repeated multiple times.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceNucleicAcidSubunitType[] $subunit
     * @return self
     */
    public function setSubunit(array $subunit)
    {
        $this->subunit = $subunit;
        return $this;
    }


}

