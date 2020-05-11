<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceSourceMaterialOrganismType
 *
 * Source material shall capture information on the taxonomic and anatomical origins as well as the fraction of a material that can result in or can be modified to form a substance. This set of data elements shall be used to define polymer substances isolated from biological matrices. Taxonomic and anatomical origins shall be described using a controlled vocabulary as required. This information is captured for naturally derived polymers ( . starch) and structurally diverse substances. For Organisms belonging to the Kingdom Plantae the Substance level defines the fresh material of a single species or infraspecies, the Herbal Drug and the Herbal preparation. For Herbal preparations, the fraction information will be captured at the Substance information level and additional information for herbal extracts will be captured at the Specified Substance Group 1 information level. See for further explanation the Substance Class: Structurally Diverse and the herbal annex.
 * XSD Type: SubstanceSourceMaterial.Organism
 */
class SubstanceSourceMaterialOrganismType extends BackboneElementType
{

    /**
     * The family of an organism shall be specified.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $family
     */
    private $family = null;

    /**
     * The genus of an organism shall be specified; refers to the Latin epithet of the genus element of the plant/animal scientific name; it is present in names for genera, species and infraspecies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $genus
     */
    private $genus = null;

    /**
     * The species of an organism shall be specified; refers to the Latin epithet of the species of the plant/animal; it is present in names for species and infraspecies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $species
     */
    private $species = null;

    /**
     * The Intraspecific type of an organism shall be specified.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $intraspecificType
     */
    private $intraspecificType = null;

    /**
     * The intraspecific description of an organism shall be specified based on a controlled vocabulary. For Influenza Vaccine, the intraspecific description shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @var string $intraspecificDescription
     */
    private $intraspecificDescription = null;

    /**
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSourceMaterialAuthorType[] $author
     */
    private $author = null;

    /**
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSourceMaterialHybridType $hybrid
     */
    private $hybrid = null;

    /**
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSourceMaterialOrganismGeneralType $organismGeneral
     */
    private $organismGeneral = null;

    /**
     * Gets as family
     *
     * The family of an organism shall be specified.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Sets a new family
     *
     * The family of an organism shall be specified.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $family
     * @return self
     */
    public function setFamily(\TKusy\Hl7FhirR4\CodeableConceptType $family)
    {
        $this->family = $family;
        return $this;
    }

    /**
     * Gets as genus
     *
     * The genus of an organism shall be specified; refers to the Latin epithet of the genus element of the plant/animal scientific name; it is present in names for genera, species and infraspecies.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * Sets a new genus
     *
     * The genus of an organism shall be specified; refers to the Latin epithet of the genus element of the plant/animal scientific name; it is present in names for genera, species and infraspecies.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $genus
     * @return self
     */
    public function setGenus(\TKusy\Hl7FhirR4\CodeableConceptType $genus)
    {
        $this->genus = $genus;
        return $this;
    }

    /**
     * Gets as species
     *
     * The species of an organism shall be specified; refers to the Latin epithet of the species of the plant/animal; it is present in names for species and infraspecies.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Sets a new species
     *
     * The species of an organism shall be specified; refers to the Latin epithet of the species of the plant/animal; it is present in names for species and infraspecies.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $species
     * @return self
     */
    public function setSpecies(\TKusy\Hl7FhirR4\CodeableConceptType $species)
    {
        $this->species = $species;
        return $this;
    }

    /**
     * Gets as intraspecificType
     *
     * The Intraspecific type of an organism shall be specified.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getIntraspecificType()
    {
        return $this->intraspecificType;
    }

    /**
     * Sets a new intraspecificType
     *
     * The Intraspecific type of an organism shall be specified.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $intraspecificType
     * @return self
     */
    public function setIntraspecificType(\TKusy\Hl7FhirR4\CodeableConceptType $intraspecificType)
    {
        $this->intraspecificType = $intraspecificType;
        return $this;
    }

    /**
     * Gets as intraspecificDescription
     *
     * The intraspecific description of an organism shall be specified based on a controlled vocabulary. For Influenza Vaccine, the intraspecific description shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @return string
     */
    public function getIntraspecificDescription()
    {
        return $this->intraspecificDescription;
    }

    /**
     * Sets a new intraspecificDescription
     *
     * The intraspecific description of an organism shall be specified based on a controlled vocabulary. For Influenza Vaccine, the intraspecific description shall contain the syntax of the antigen in line with the WHO convention.
     *
     * @param string $intraspecificDescription
     * @return self
     */
    public function setIntraspecificDescription($intraspecificDescription)
    {
        $this->intraspecificDescription = $intraspecificDescription;
        return $this;
    }

    /**
     * Adds as author
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceSourceMaterialAuthorType $author
     */
    public function addToAuthor(\TKusy\Hl7FhirR4\SubstanceSourceMaterialAuthorType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthor($index)
    {
        return isset($this->author[$index]);
    }

    /**
     * unset author
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthor($index)
    {
        unset($this->author[$index]);
    }

    /**
     * Gets as author
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSourceMaterialAuthorType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * 4.9.13.6.1 Author type (Conditional).
     *
     * @param \TKusy\Hl7FhirR4\SubstanceSourceMaterialAuthorType[] $author
     * @return self
     */
    public function setAuthor(array $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as hybrid
     *
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSourceMaterialHybridType
     */
    public function getHybrid()
    {
        return $this->hybrid;
    }

    /**
     * Sets a new hybrid
     *
     * 4.9.13.8.1 Hybrid species maternal organism ID (Optional).
     *
     * @param \TKusy\Hl7FhirR4\SubstanceSourceMaterialHybridType $hybrid
     * @return self
     */
    public function setHybrid(\TKusy\Hl7FhirR4\SubstanceSourceMaterialHybridType $hybrid)
    {
        $this->hybrid = $hybrid;
        return $this;
    }

    /**
     * Gets as organismGeneral
     *
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSourceMaterialOrganismGeneralType
     */
    public function getOrganismGeneral()
    {
        return $this->organismGeneral;
    }

    /**
     * Sets a new organismGeneral
     *
     * 4.9.13.7.1 Kingdom (Conditional).
     *
     * @param \TKusy\Hl7FhirR4\SubstanceSourceMaterialOrganismGeneralType $organismGeneral
     * @return self
     */
    public function setOrganismGeneral(\TKusy\Hl7FhirR4\SubstanceSourceMaterialOrganismGeneralType $organismGeneral)
    {
        $this->organismGeneral = $organismGeneral;
        return $this;
    }


}

