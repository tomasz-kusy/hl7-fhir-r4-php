<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceNucleicAcidSugarType
 *
 * Nucleic acids are defined by three distinct elements: the base, sugar and linkage. Individual substance/moiety IDs will be created for each of these elements. The nucleotide sequence will be always entered in the 5’-3’ direction.
 * XSD Type: SubstanceNucleicAcid.Sugar
 */
class SubstanceNucleicAcidSugarType extends BackboneElementType
{

    /**
     * The Substance ID of the sugar or sugar-like component that make up the nucleotide.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * The name of the sugar or sugar-like component that make up the nucleotide.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * The residues that contain a given sugar will be captured. The order of given residues will be captured in the 5‘-3‘direction consistent with the base sequences listed above.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $residueSite
     */
    private $residueSite = null;

    /**
     * Gets as identifier
     *
     * The Substance ID of the sugar or sugar-like component that make up the nucleotide.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The Substance ID of the sugar or sugar-like component that make up the nucleotide.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the sugar or sugar-like component that make up the nucleotide.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the sugar or sugar-like component that make up the nucleotide.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as residueSite
     *
     * The residues that contain a given sugar will be captured. The order of given residues will be captured in the 5‘-3‘direction consistent with the base sequences listed above.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getResidueSite()
    {
        return $this->residueSite;
    }

    /**
     * Sets a new residueSite
     *
     * The residues that contain a given sugar will be captured. The order of given residues will be captured in the 5‘-3‘direction consistent with the base sequences listed above.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $residueSite
     * @return self
     */
    public function setResidueSite(\TKusy\Hl7Fhir\R4\StringType $residueSite)
    {
        $this->residueSite = $residueSite;
        return $this;
    }


}

