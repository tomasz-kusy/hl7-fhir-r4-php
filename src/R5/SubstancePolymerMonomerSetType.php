<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstancePolymerMonomerSetType
 *
 * Properties of a substance specific to it being a polymer.
 * XSD Type: SubstancePolymer.MonomerSet
 */
class SubstancePolymerMonomerSetType extends BackboneElementType
{

    /**
     * Captures the type of ratio to the entire polymer, e.g. Monomer/Polymer ratio, SRU/Polymer Ratio.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $ratioType
     */
    private $ratioType = null;

    /**
     * The starting materials - monomer(s) used in the synthesis of the polymer.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstancePolymerStartingMaterialType[] $startingMaterial
     */
    private $startingMaterial = null;

    /**
     * Gets as ratioType
     *
     * Captures the type of ratio to the entire polymer, e.g. Monomer/Polymer ratio, SRU/Polymer Ratio.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRatioType()
    {
        return $this->ratioType;
    }

    /**
     * Sets a new ratioType
     *
     * Captures the type of ratio to the entire polymer, e.g. Monomer/Polymer ratio, SRU/Polymer Ratio.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $ratioType
     * @return self
     */
    public function setRatioType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $ratioType = null)
    {
        $this->ratioType = $ratioType;
        return $this;
    }

    /**
     * Adds as startingMaterial
     *
     * The starting materials - monomer(s) used in the synthesis of the polymer.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerStartingMaterialType $startingMaterial
     */
    public function addToStartingMaterial(\TKusy\Hl7Fhir\R5\SubstancePolymerStartingMaterialType $startingMaterial)
    {
        $this->startingMaterial[] = $startingMaterial;
        return $this;
    }

    /**
     * isset startingMaterial
     *
     * The starting materials - monomer(s) used in the synthesis of the polymer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStartingMaterial($index)
    {
        return isset($this->startingMaterial[$index]);
    }

    /**
     * unset startingMaterial
     *
     * The starting materials - monomer(s) used in the synthesis of the polymer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStartingMaterial($index)
    {
        unset($this->startingMaterial[$index]);
    }

    /**
     * Gets as startingMaterial
     *
     * The starting materials - monomer(s) used in the synthesis of the polymer.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstancePolymerStartingMaterialType[]
     */
    public function getStartingMaterial()
    {
        return $this->startingMaterial;
    }

    /**
     * Sets a new startingMaterial
     *
     * The starting materials - monomer(s) used in the synthesis of the polymer.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerStartingMaterialType[] $startingMaterial
     * @return self
     */
    public function setStartingMaterial(array $startingMaterial = null)
    {
        $this->startingMaterial = $startingMaterial;
        return $this;
    }


}

