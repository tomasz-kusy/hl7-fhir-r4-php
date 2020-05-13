<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceSpecificationStructureType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Structure
 */
class SubstanceSpecificationStructureType extends BackboneElementType
{

    /**
     * Stereochemistry type.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $stereochemistry
     */
    private $stereochemistry = null;

    /**
     * Optical activity type.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $opticalActivity
     */
    private $opticalActivity = null;

    /**
     * Molecular formula.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $molecularFormula
     */
    private $molecularFormula = null;

    /**
     * Specified per moiety according to the Hill system, i.e. first C, then H, then alphabetical, each moiety separated by a dot.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $molecularFormulaByMoiety
     */
    private $molecularFormulaByMoiety = null;

    /**
     * Applicable for single substances that contain a radionuclide or a non-natural isotopic ratio.
     *
     * @var \TKusy\Hl7Fhir\R4\SubstanceSpecificationIsotopeType[] $isotope
     */
    private $isotope = null;

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var \TKusy\Hl7Fhir\R4\SubstanceSpecificationMolecularWeightType $molecularWeight
     */
    private $molecularWeight = null;

    /**
     * Supporting literature.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Molecular structural representation.
     *
     * @var \TKusy\Hl7Fhir\R4\SubstanceSpecificationRepresentationType[] $representation
     */
    private $representation = null;

    /**
     * Gets as stereochemistry
     *
     * Stereochemistry type.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getStereochemistry()
    {
        return $this->stereochemistry;
    }

    /**
     * Sets a new stereochemistry
     *
     * Stereochemistry type.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $stereochemistry
     * @return self
     */
    public function setStereochemistry(\TKusy\Hl7Fhir\R4\CodeableConceptType $stereochemistry)
    {
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * Gets as opticalActivity
     *
     * Optical activity type.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getOpticalActivity()
    {
        return $this->opticalActivity;
    }

    /**
     * Sets a new opticalActivity
     *
     * Optical activity type.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $opticalActivity
     * @return self
     */
    public function setOpticalActivity(\TKusy\Hl7Fhir\R4\CodeableConceptType $opticalActivity)
    {
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * Gets as molecularFormula
     *
     * Molecular formula.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getMolecularFormula()
    {
        return $this->molecularFormula;
    }

    /**
     * Sets a new molecularFormula
     *
     * Molecular formula.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $molecularFormula
     * @return self
     */
    public function setMolecularFormula(\TKusy\Hl7Fhir\R4\StringType $molecularFormula)
    {
        $this->molecularFormula = $molecularFormula;
        return $this;
    }

    /**
     * Gets as molecularFormulaByMoiety
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then alphabetical, each moiety separated by a dot.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getMolecularFormulaByMoiety()
    {
        return $this->molecularFormulaByMoiety;
    }

    /**
     * Sets a new molecularFormulaByMoiety
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then alphabetical, each moiety separated by a dot.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $molecularFormulaByMoiety
     * @return self
     */
    public function setMolecularFormulaByMoiety(\TKusy\Hl7Fhir\R4\StringType $molecularFormulaByMoiety)
    {
        $this->molecularFormulaByMoiety = $molecularFormulaByMoiety;
        return $this;
    }

    /**
     * Adds as isotope
     *
     * Applicable for single substances that contain a radionuclide or a non-natural isotopic ratio.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\SubstanceSpecificationIsotopeType $isotope
     */
    public function addToIsotope(\TKusy\Hl7Fhir\R4\SubstanceSpecificationIsotopeType $isotope)
    {
        $this->isotope[] = $isotope;
        return $this;
    }

    /**
     * isset isotope
     *
     * Applicable for single substances that contain a radionuclide or a non-natural isotopic ratio.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIsotope($index)
    {
        return isset($this->isotope[$index]);
    }

    /**
     * unset isotope
     *
     * Applicable for single substances that contain a radionuclide or a non-natural isotopic ratio.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIsotope($index)
    {
        unset($this->isotope[$index]);
    }

    /**
     * Gets as isotope
     *
     * Applicable for single substances that contain a radionuclide or a non-natural isotopic ratio.
     *
     * @return \TKusy\Hl7Fhir\R4\SubstanceSpecificationIsotopeType[]
     */
    public function getIsotope()
    {
        return $this->isotope;
    }

    /**
     * Sets a new isotope
     *
     * Applicable for single substances that contain a radionuclide or a non-natural isotopic ratio.
     *
     * @param \TKusy\Hl7Fhir\R4\SubstanceSpecificationIsotopeType[] $isotope
     * @return self
     */
    public function setIsotope(array $isotope)
    {
        $this->isotope = $isotope;
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

    /**
     * Adds as source
     *
     * Supporting literature.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7Fhir\R4\ReferenceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Supporting literature.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * Supporting literature.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * Supporting literature.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Supporting literature.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Adds as representation
     *
     * Molecular structural representation.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\SubstanceSpecificationRepresentationType $representation
     */
    public function addToRepresentation(\TKusy\Hl7Fhir\R4\SubstanceSpecificationRepresentationType $representation)
    {
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * isset representation
     *
     * Molecular structural representation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRepresentation($index)
    {
        return isset($this->representation[$index]);
    }

    /**
     * unset representation
     *
     * Molecular structural representation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRepresentation($index)
    {
        unset($this->representation[$index]);
    }

    /**
     * Gets as representation
     *
     * Molecular structural representation.
     *
     * @return \TKusy\Hl7Fhir\R4\SubstanceSpecificationRepresentationType[]
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Sets a new representation
     *
     * Molecular structural representation.
     *
     * @param \TKusy\Hl7Fhir\R4\SubstanceSpecificationRepresentationType[] $representation
     * @return self
     */
    public function setRepresentation(array $representation)
    {
        $this->representation = $representation;
        return $this;
    }


}

