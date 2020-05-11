<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceNucleicAcidLinkageType
 *
 * Nucleic acids are defined by three distinct elements: the base, sugar and linkage. Individual substance/moiety IDs will be created for each of these elements. The nucleotide sequence will be always entered in the 5’-3’ direction.
 * XSD Type: SubstanceNucleicAcid.Linkage
 */
class SubstanceNucleicAcidLinkageType extends BackboneElementType
{

    /**
     * The entity that links the sugar residues together should also be captured for nearly all naturally occurring nucleic acid the linkage is a phosphate group. For many synthetic oligonucleotides phosphorothioate linkages are often seen. Linkage connectivity is assumed to be 3’-5’. If the linkage is either 3’-3’ or 5’-5’ this should be specified.
     *
     * @var string $connectivity
     */
    private $connectivity = null;

    /**
     * Each linkage will be registered as a fragment and have an ID.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Each linkage will be registered as a fragment and have at least one name. A single name shall be assigned to each linkage.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Residues shall be captured as described in 5.3.6.8.3.
     *
     * @var string $residueSite
     */
    private $residueSite = null;

    /**
     * Gets as connectivity
     *
     * The entity that links the sugar residues together should also be captured for nearly all naturally occurring nucleic acid the linkage is a phosphate group. For many synthetic oligonucleotides phosphorothioate linkages are often seen. Linkage connectivity is assumed to be 3’-5’. If the linkage is either 3’-3’ or 5’-5’ this should be specified.
     *
     * @return string
     */
    public function getConnectivity()
    {
        return $this->connectivity;
    }

    /**
     * Sets a new connectivity
     *
     * The entity that links the sugar residues together should also be captured for nearly all naturally occurring nucleic acid the linkage is a phosphate group. For many synthetic oligonucleotides phosphorothioate linkages are often seen. Linkage connectivity is assumed to be 3’-5’. If the linkage is either 3’-3’ or 5’-5’ this should be specified.
     *
     * @param string $connectivity
     * @return self
     */
    public function setConnectivity($connectivity)
    {
        $this->connectivity = $connectivity;
        return $this;
    }

    /**
     * Gets as identifier
     *
     * Each linkage will be registered as a fragment and have an ID.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Each linkage will be registered as a fragment and have an ID.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * Each linkage will be registered as a fragment and have at least one name. A single name shall be assigned to each linkage.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Each linkage will be registered as a fragment and have at least one name. A single name shall be assigned to each linkage.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as residueSite
     *
     * Residues shall be captured as described in 5.3.6.8.3.
     *
     * @return string
     */
    public function getResidueSite()
    {
        return $this->residueSite;
    }

    /**
     * Sets a new residueSite
     *
     * Residues shall be captured as described in 5.3.6.8.3.
     *
     * @param string $residueSite
     * @return self
     */
    public function setResidueSite($residueSite)
    {
        $this->residueSite = $residueSite;
        return $this;
    }


}

