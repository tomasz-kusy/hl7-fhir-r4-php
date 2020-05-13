<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceSpecificationIsotopeType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Isotope
 */
class SubstanceSpecificationIsotopeType extends BackboneElementType
{

    /**
     * Substance identifier for each non-natural or radioisotope.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Substance name for each non-natural or radioisotope.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $name
     */
    private $name = null;

    /**
     * The type of isotopic substitution present in a single substance.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $substitution
     */
    private $substitution = null;

    /**
     * Half life - for a non-natural nuclide.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $halfLife
     */
    private $halfLife = null;

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var \TKusy\Hl7Fhir\R4\SubstanceSpecificationMolecularWeightType $molecularWeight
     */
    private $molecularWeight = null;

    /**
     * Gets as identifier
     *
     * Substance identifier for each non-natural or radioisotope.
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
     * Substance identifier for each non-natural or radioisotope.
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
     * Substance name for each non-natural or radioisotope.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Substance name for each non-natural or radioisotope.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\CodeableConceptType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as substitution
     *
     * The type of isotopic substitution present in a single substance.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Sets a new substitution
     *
     * The type of isotopic substitution present in a single substance.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $substitution
     * @return self
     */
    public function setSubstitution(\TKusy\Hl7Fhir\R4\CodeableConceptType $substitution)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Gets as halfLife
     *
     * Half life - for a non-natural nuclide.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getHalfLife()
    {
        return $this->halfLife;
    }

    /**
     * Sets a new halfLife
     *
     * Half life - for a non-natural nuclide.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $halfLife
     * @return self
     */
    public function setHalfLife(\TKusy\Hl7Fhir\R4\QuantityType $halfLife)
    {
        $this->halfLife = $halfLife;
        return $this;
    }

    /**
     * Gets as molecularWeight
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @return \TKusy\Hl7Fhir\R4\SubstanceSpecificationMolecularWeightType
     */
    public function getMolecularWeight()
    {
        return $this->molecularWeight;
    }

    /**
     * Sets a new molecularWeight
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @param \TKusy\Hl7Fhir\R4\SubstanceSpecificationMolecularWeightType $molecularWeight
     * @return self
     */
    public function setMolecularWeight(\TKusy\Hl7Fhir\R4\SubstanceSpecificationMolecularWeightType $molecularWeight)
    {
        $this->molecularWeight = $molecularWeight;
        return $this;
    }


}

