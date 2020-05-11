<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstancePolymerMonomerSetType
 *
 * Todo.
 * XSD Type: SubstancePolymer.MonomerSet
 */
class SubstancePolymerMonomerSetType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $ratioType
     */
    private $ratioType = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstancePolymerStartingMaterialType[] $startingMaterial
     */
    private $startingMaterial = null;

    /**
     * Gets as ratioType
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRatioType()
    {
        return $this->ratioType;
    }

    /**
     * Sets a new ratioType
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $ratioType
     * @return self
     */
    public function setRatioType(\TKusy\Hl7FhirR4\CodeableConceptType $ratioType)
    {
        $this->ratioType = $ratioType;
        return $this;
    }

    /**
     * Adds as startingMaterial
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstancePolymerStartingMaterialType $startingMaterial
     */
    public function addToStartingMaterial(\TKusy\Hl7FhirR4\SubstancePolymerStartingMaterialType $startingMaterial)
    {
        $this->startingMaterial[] = $startingMaterial;
        return $this;
    }

    /**
     * isset startingMaterial
     *
     * Todo.
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
     * Todo.
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
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstancePolymerStartingMaterialType[]
     */
    public function getStartingMaterial()
    {
        return $this->startingMaterial;
    }

    /**
     * Sets a new startingMaterial
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstancePolymerStartingMaterialType[] $startingMaterial
     * @return self
     */
    public function setStartingMaterial(array $startingMaterial)
    {
        $this->startingMaterial = $startingMaterial;
        return $this;
    }


}

