<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionSourceMaterialType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceDefinition.SourceMaterial
 */
class SubstanceDefinitionSourceMaterialType extends BackboneElementType
{

    /**
     * A classification that provides the origin of the raw material. Example: cat hair would be an Animal source type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The genus of an organism, typically referring to the Latin epithet of the genus element of the plant/animal scientific name.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $genus
     */
    private $genus = null;

    /**
     * The species of an organism, typically referring to the Latin epithet of the species of the plant/animal.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $species
     */
    private $species = null;

    /**
     * An anatomical origin of the source material within an organism.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $part
     */
    private $part = null;

    /**
     * The country or countries where the material is harvested.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $countryOfOrigin
     */
    private $countryOfOrigin = null;

    /**
     * Gets as type
     *
     * A classification that provides the origin of the raw material. Example: cat hair would be an Animal source type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A classification that provides the origin of the raw material. Example: cat hair would be an Animal source type.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as genus
     *
     * The genus of an organism, typically referring to the Latin epithet of the genus element of the plant/animal scientific name.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * Sets a new genus
     *
     * The genus of an organism, typically referring to the Latin epithet of the genus element of the plant/animal scientific name.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $genus
     * @return self
     */
    public function setGenus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $genus = null)
    {
        $this->genus = $genus;
        return $this;
    }

    /**
     * Gets as species
     *
     * The species of an organism, typically referring to the Latin epithet of the species of the plant/animal.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Sets a new species
     *
     * The species of an organism, typically referring to the Latin epithet of the species of the plant/animal.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $species
     * @return self
     */
    public function setSpecies(?\TKusy\Hl7Fhir\R5\CodeableConceptType $species = null)
    {
        $this->species = $species;
        return $this;
    }

    /**
     * Gets as part
     *
     * An anatomical origin of the source material within an organism.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Sets a new part
     *
     * An anatomical origin of the source material within an organism.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $part
     * @return self
     */
    public function setPart(?\TKusy\Hl7Fhir\R5\CodeableConceptType $part = null)
    {
        $this->part = $part;
        return $this;
    }

    /**
     * Adds as countryOfOrigin
     *
     * The country or countries where the material is harvested.
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
     * The country or countries where the material is harvested.
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
     * The country or countries where the material is harvested.
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
     * The country or countries where the material is harvested.
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
     * The country or countries where the material is harvested.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $countryOfOrigin
     * @return self
     */
    public function setCountryOfOrigin(array $countryOfOrigin = null)
    {
        $this->countryOfOrigin = $countryOfOrigin;
        return $this;
    }


}

