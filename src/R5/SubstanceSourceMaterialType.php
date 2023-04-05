<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceSourceMaterialType
 *
 * Source material shall capture information on the taxonomic and anatomical origins as well as the fraction of a material that can result in or can be modified to form a substance. This set of data elements shall be used to define polymer substances isolated from biological matrices. Taxonomic and anatomical origins shall be described using a controlled vocabulary as required. This information is captured for naturally derived polymers ( . starch) and structurally diverse substances. For Organisms belonging to the Kingdom Plantae the Substance level defines the fresh material of a single species or infraspecies, the Herbal Drug and the Herbal preparation. For Herbal preparations, the fraction information will be captured at the Substance information level and additional information for herbal extracts will be captured at the Specified Substance Group 1 information level. See for further explanation the Substance Class: Structurally Diverse and the herbal annex.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubstanceSourceMaterial
 */
class SubstanceSourceMaterialType extends DomainResourceType
{

    /**
     * General high level classification of the source material specific to the origin of the material.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialClass
     */
    private $sourceMaterialClass = null;

    /**
     * The type of the source material shall be specified based on a controlled vocabulary. For vaccines, this subclause refers to the class of infectious agent.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialType
     */
    private $sourceMaterialType = null;

    /**
     * The state of the source material when extracted.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialState
     */
    private $sourceMaterialState = null;

    /**
     * The unique identifier associated with the source material parent organism shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $organismId
     */
    private $organismId = null;

    /**
     * The organism accepted Scientific name shall be provided based on the organism taxonomy.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $organismName
     */
    private $organismName = null;

    /**
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $parentSubstanceId
     */
    private $parentSubstanceId = null;

    /**
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $parentSubstanceName
     */
    private $parentSubstanceName = null;

    /**
     * The country where the plant material is harvested or the countries where the plasma is sourced from as laid down in accordance with the Plasma Master File. For “Plasma-derived substances” the attribute country of origin provides information about the countries used for the manufacturing of the Cryopoor plama or Crioprecipitate.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $countryOfOrigin
     */
    private $countryOfOrigin = null;

    /**
     * The place/region where the plant is harvested or the places/regions where the animal source material has its habitat.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $geographicalLocation
     */
    private $geographicalLocation = null;

    /**
     * Stage of life for animals, plants, insects and microorganisms. This information shall be provided only when the substance is significantly different in these stages (e.g. foetal bovine serum).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $developmentStage
     */
    private $developmentStage = null;

    /**
     * Many complex materials are fractions of parts of plants, animals, or minerals. Fraction elements are often necessary to define both Substances and Specified Group 1 Substances. For substances derived from Plants, fraction information will be captured at the Substance information level ( . Oils, Juices and Exudates). Additional information for Extracts, such as extraction solvent composition, will be captured at the Specified Substance Group 1 information level. For plasma-derived products fraction information will be captured at the Substance and the Specified Substance Group 1 levels.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialFractionDescriptionType[] $fractionDescription
     */
    private $fractionDescription = null;

    /**
     * This subclause describes the organism which the substance is derived from. For vaccines, the parent organism shall be specified based on these subclause elements. As an example, full taxonomy will be described for the Substance Name: ., Leaf.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialOrganismType $organism
     */
    private $organism = null;

    /**
     * To do.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialPartDescriptionType[] $partDescription
     */
    private $partDescription = null;

    /**
     * Gets as sourceMaterialClass
     *
     * General high level classification of the source material specific to the origin of the material.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSourceMaterialClass()
    {
        return $this->sourceMaterialClass;
    }

    /**
     * Sets a new sourceMaterialClass
     *
     * General high level classification of the source material specific to the origin of the material.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialClass
     * @return self
     */
    public function setSourceMaterialClass(?\TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialClass = null)
    {
        $this->sourceMaterialClass = $sourceMaterialClass;
        return $this;
    }

    /**
     * Gets as sourceMaterialType
     *
     * The type of the source material shall be specified based on a controlled vocabulary. For vaccines, this subclause refers to the class of infectious agent.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSourceMaterialType()
    {
        return $this->sourceMaterialType;
    }

    /**
     * Sets a new sourceMaterialType
     *
     * The type of the source material shall be specified based on a controlled vocabulary. For vaccines, this subclause refers to the class of infectious agent.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialType
     * @return self
     */
    public function setSourceMaterialType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialType = null)
    {
        $this->sourceMaterialType = $sourceMaterialType;
        return $this;
    }

    /**
     * Gets as sourceMaterialState
     *
     * The state of the source material when extracted.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSourceMaterialState()
    {
        return $this->sourceMaterialState;
    }

    /**
     * Sets a new sourceMaterialState
     *
     * The state of the source material when extracted.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialState
     * @return self
     */
    public function setSourceMaterialState(?\TKusy\Hl7Fhir\R5\CodeableConceptType $sourceMaterialState = null)
    {
        $this->sourceMaterialState = $sourceMaterialState;
        return $this;
    }

    /**
     * Gets as organismId
     *
     * The unique identifier associated with the source material parent organism shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getOrganismId()
    {
        return $this->organismId;
    }

    /**
     * Sets a new organismId
     *
     * The unique identifier associated with the source material parent organism shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $organismId
     * @return self
     */
    public function setOrganismId(?\TKusy\Hl7Fhir\R5\IdentifierType $organismId = null)
    {
        $this->organismId = $organismId;
        return $this;
    }

    /**
     * Gets as organismName
     *
     * The organism accepted Scientific name shall be provided based on the organism taxonomy.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getOrganismName()
    {
        return $this->organismName;
    }

    /**
     * Sets a new organismName
     *
     * The organism accepted Scientific name shall be provided based on the organism taxonomy.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $organismName
     * @return self
     */
    public function setOrganismName(?\TKusy\Hl7Fhir\R5\StringType $organismName = null)
    {
        $this->organismName = $organismName;
        return $this;
    }

    /**
     * Adds as parentSubstanceId
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $parentSubstanceId
     */
    public function addToParentSubstanceId(\TKusy\Hl7Fhir\R5\IdentifierType $parentSubstanceId)
    {
        $this->parentSubstanceId[] = $parentSubstanceId;
        return $this;
    }

    /**
     * isset parentSubstanceId
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentSubstanceId($index)
    {
        return isset($this->parentSubstanceId[$index]);
    }

    /**
     * unset parentSubstanceId
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentSubstanceId($index)
    {
        unset($this->parentSubstanceId[$index]);
    }

    /**
     * Gets as parentSubstanceId
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getParentSubstanceId()
    {
        return $this->parentSubstanceId;
    }

    /**
     * Sets a new parentSubstanceId
     *
     * The parent of the herbal drug Ginkgo biloba, Leaf is the substance ID of the substance (fresh) of Ginkgo biloba L. or Ginkgo biloba L. (Whole plant).
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $parentSubstanceId
     * @return self
     */
    public function setParentSubstanceId(array $parentSubstanceId = null)
    {
        $this->parentSubstanceId = $parentSubstanceId;
        return $this;
    }

    /**
     * Adds as parentSubstanceName
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $parentSubstanceName
     */
    public function addToParentSubstanceName(\TKusy\Hl7Fhir\R5\StringType $parentSubstanceName)
    {
        $this->parentSubstanceName[] = $parentSubstanceName;
        return $this;
    }

    /**
     * isset parentSubstanceName
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentSubstanceName($index)
    {
        return isset($this->parentSubstanceName[$index]);
    }

    /**
     * unset parentSubstanceName
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentSubstanceName($index)
    {
        unset($this->parentSubstanceName[$index]);
    }

    /**
     * Gets as parentSubstanceName
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getParentSubstanceName()
    {
        return $this->parentSubstanceName;
    }

    /**
     * Sets a new parentSubstanceName
     *
     * The parent substance of the Herbal Drug, or Herbal preparation.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $parentSubstanceName
     * @return self
     */
    public function setParentSubstanceName(array $parentSubstanceName = null)
    {
        $this->parentSubstanceName = $parentSubstanceName;
        return $this;
    }

    /**
     * Adds as countryOfOrigin
     *
     * The country where the plant material is harvested or the countries where the plasma is sourced from as laid down in accordance with the Plasma Master File. For “Plasma-derived substances” the attribute country of origin provides information about the countries used for the manufacturing of the Cryopoor plama or Crioprecipitate.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $countryOfOrigin
     */
    public function addToCountryOfOrigin(\TKusy\Hl7Fhir\R5\CodeableConceptType $countryOfOrigin)
    {
        $this->countryOfOrigin[] = $countryOfOrigin;
        return $this;
    }

    /**
     * isset countryOfOrigin
     *
     * The country where the plant material is harvested or the countries where the plasma is sourced from as laid down in accordance with the Plasma Master File. For “Plasma-derived substances” the attribute country of origin provides information about the countries used for the manufacturing of the Cryopoor plama or Crioprecipitate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountryOfOrigin($index)
    {
        return isset($this->countryOfOrigin[$index]);
    }

    /**
     * unset countryOfOrigin
     *
     * The country where the plant material is harvested or the countries where the plasma is sourced from as laid down in accordance with the Plasma Master File. For “Plasma-derived substances” the attribute country of origin provides information about the countries used for the manufacturing of the Cryopoor plama or Crioprecipitate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountryOfOrigin($index)
    {
        unset($this->countryOfOrigin[$index]);
    }

    /**
     * Gets as countryOfOrigin
     *
     * The country where the plant material is harvested or the countries where the plasma is sourced from as laid down in accordance with the Plasma Master File. For “Plasma-derived substances” the attribute country of origin provides information about the countries used for the manufacturing of the Cryopoor plama or Crioprecipitate.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * Sets a new countryOfOrigin
     *
     * The country where the plant material is harvested or the countries where the plasma is sourced from as laid down in accordance with the Plasma Master File. For “Plasma-derived substances” the attribute country of origin provides information about the countries used for the manufacturing of the Cryopoor plama or Crioprecipitate.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $countryOfOrigin
     * @return self
     */
    public function setCountryOfOrigin(array $countryOfOrigin = null)
    {
        $this->countryOfOrigin = $countryOfOrigin;
        return $this;
    }

    /**
     * Adds as geographicalLocation
     *
     * The place/region where the plant is harvested or the places/regions where the animal source material has its habitat.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $geographicalLocation
     */
    public function addToGeographicalLocation(\TKusy\Hl7Fhir\R5\StringType $geographicalLocation)
    {
        $this->geographicalLocation[] = $geographicalLocation;
        return $this;
    }

    /**
     * isset geographicalLocation
     *
     * The place/region where the plant is harvested or the places/regions where the animal source material has its habitat.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeographicalLocation($index)
    {
        return isset($this->geographicalLocation[$index]);
    }

    /**
     * unset geographicalLocation
     *
     * The place/region where the plant is harvested or the places/regions where the animal source material has its habitat.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeographicalLocation($index)
    {
        unset($this->geographicalLocation[$index]);
    }

    /**
     * Gets as geographicalLocation
     *
     * The place/region where the plant is harvested or the places/regions where the animal source material has its habitat.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getGeographicalLocation()
    {
        return $this->geographicalLocation;
    }

    /**
     * Sets a new geographicalLocation
     *
     * The place/region where the plant is harvested or the places/regions where the animal source material has its habitat.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $geographicalLocation
     * @return self
     */
    public function setGeographicalLocation(array $geographicalLocation = null)
    {
        $this->geographicalLocation = $geographicalLocation;
        return $this;
    }

    /**
     * Gets as developmentStage
     *
     * Stage of life for animals, plants, insects and microorganisms. This information shall be provided only when the substance is significantly different in these stages (e.g. foetal bovine serum).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDevelopmentStage()
    {
        return $this->developmentStage;
    }

    /**
     * Sets a new developmentStage
     *
     * Stage of life for animals, plants, insects and microorganisms. This information shall be provided only when the substance is significantly different in these stages (e.g. foetal bovine serum).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $developmentStage
     * @return self
     */
    public function setDevelopmentStage(?\TKusy\Hl7Fhir\R5\CodeableConceptType $developmentStage = null)
    {
        $this->developmentStage = $developmentStage;
        return $this;
    }

    /**
     * Adds as fractionDescription
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals. Fraction elements are often necessary to define both Substances and Specified Group 1 Substances. For substances derived from Plants, fraction information will be captured at the Substance information level ( . Oils, Juices and Exudates). Additional information for Extracts, such as extraction solvent composition, will be captured at the Specified Substance Group 1 information level. For plasma-derived products fraction information will be captured at the Substance and the Specified Substance Group 1 levels.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialFractionDescriptionType $fractionDescription
     */
    public function addToFractionDescription(\TKusy\Hl7Fhir\R5\SubstanceSourceMaterialFractionDescriptionType $fractionDescription)
    {
        $this->fractionDescription[] = $fractionDescription;
        return $this;
    }

    /**
     * isset fractionDescription
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals. Fraction elements are often necessary to define both Substances and Specified Group 1 Substances. For substances derived from Plants, fraction information will be captured at the Substance information level ( . Oils, Juices and Exudates). Additional information for Extracts, such as extraction solvent composition, will be captured at the Specified Substance Group 1 information level. For plasma-derived products fraction information will be captured at the Substance and the Specified Substance Group 1 levels.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFractionDescription($index)
    {
        return isset($this->fractionDescription[$index]);
    }

    /**
     * unset fractionDescription
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals. Fraction elements are often necessary to define both Substances and Specified Group 1 Substances. For substances derived from Plants, fraction information will be captured at the Substance information level ( . Oils, Juices and Exudates). Additional information for Extracts, such as extraction solvent composition, will be captured at the Specified Substance Group 1 information level. For plasma-derived products fraction information will be captured at the Substance and the Specified Substance Group 1 levels.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFractionDescription($index)
    {
        unset($this->fractionDescription[$index]);
    }

    /**
     * Gets as fractionDescription
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals. Fraction elements are often necessary to define both Substances and Specified Group 1 Substances. For substances derived from Plants, fraction information will be captured at the Substance information level ( . Oils, Juices and Exudates). Additional information for Extracts, such as extraction solvent composition, will be captured at the Specified Substance Group 1 information level. For plasma-derived products fraction information will be captured at the Substance and the Specified Substance Group 1 levels.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialFractionDescriptionType[]
     */
    public function getFractionDescription()
    {
        return $this->fractionDescription;
    }

    /**
     * Sets a new fractionDescription
     *
     * Many complex materials are fractions of parts of plants, animals, or minerals. Fraction elements are often necessary to define both Substances and Specified Group 1 Substances. For substances derived from Plants, fraction information will be captured at the Substance information level ( . Oils, Juices and Exudates). Additional information for Extracts, such as extraction solvent composition, will be captured at the Specified Substance Group 1 information level. For plasma-derived products fraction information will be captured at the Substance and the Specified Substance Group 1 levels.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialFractionDescriptionType[] $fractionDescription
     * @return self
     */
    public function setFractionDescription(array $fractionDescription = null)
    {
        $this->fractionDescription = $fractionDescription;
        return $this;
    }

    /**
     * Gets as organism
     *
     * This subclause describes the organism which the substance is derived from. For vaccines, the parent organism shall be specified based on these subclause elements. As an example, full taxonomy will be described for the Substance Name: ., Leaf.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialOrganismType
     */
    public function getOrganism()
    {
        return $this->organism;
    }

    /**
     * Sets a new organism
     *
     * This subclause describes the organism which the substance is derived from. For vaccines, the parent organism shall be specified based on these subclause elements. As an example, full taxonomy will be described for the Substance Name: ., Leaf.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialOrganismType $organism
     * @return self
     */
    public function setOrganism(?\TKusy\Hl7Fhir\R5\SubstanceSourceMaterialOrganismType $organism = null)
    {
        $this->organism = $organism;
        return $this;
    }

    /**
     * Adds as partDescription
     *
     * To do.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialPartDescriptionType $partDescription
     */
    public function addToPartDescription(\TKusy\Hl7Fhir\R5\SubstanceSourceMaterialPartDescriptionType $partDescription)
    {
        $this->partDescription[] = $partDescription;
        return $this;
    }

    /**
     * isset partDescription
     *
     * To do.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartDescription($index)
    {
        return isset($this->partDescription[$index]);
    }

    /**
     * unset partDescription
     *
     * To do.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartDescription($index)
    {
        unset($this->partDescription[$index]);
    }

    /**
     * Gets as partDescription
     *
     * To do.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialPartDescriptionType[]
     */
    public function getPartDescription()
    {
        return $this->partDescription;
    }

    /**
     * Sets a new partDescription
     *
     * To do.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceSourceMaterialPartDescriptionType[] $partDescription
     * @return self
     */
    public function setPartDescription(array $partDescription = null)
    {
        $this->partDescription = $partDescription;
        return $this;
    }


}

