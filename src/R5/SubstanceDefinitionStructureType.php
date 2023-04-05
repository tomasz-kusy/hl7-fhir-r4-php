<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionStructureType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceDefinition.Structure
 */
class SubstanceDefinitionStructureType extends BackboneElementType
{

    /**
     * Stereochemistry type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $stereochemistry
     */
    private $stereochemistry = null;

    /**
     * Optical activity type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $opticalActivity
     */
    private $opticalActivity = null;

    /**
     * An expression which states the number and type of atoms present in a molecule of a substance.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $molecularFormula
     */
    private $molecularFormula = null;

    /**
     * Specified per moiety according to the Hill system, i.e. first C, then H, then alphabetical, each moiety separated by a dot.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $molecularFormulaByMoiety
     */
    private $molecularFormulaByMoiety = null;

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType $molecularWeight
     */
    private $molecularWeight = null;

    /**
     * The method used to elucidate the structure of the drug substance. Examples: X-ray, NMR, Peptide mapping, Ligand binding assay.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $technique
     */
    private $technique = null;

    /**
     * The source of information about the structure.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $sourceDocument
     */
    private $sourceDocument = null;

    /**
     * A depiction of the structure of the substance.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionRepresentationType[] $representation
     */
    private $representation = null;

    /**
     * Gets as stereochemistry
     *
     * Stereochemistry type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $stereochemistry
     * @return self
     */
    public function setStereochemistry(?\TKusy\Hl7Fhir\R5\CodeableConceptType $stereochemistry = null)
    {
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * Gets as opticalActivity
     *
     * Optical activity type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $opticalActivity
     * @return self
     */
    public function setOpticalActivity(?\TKusy\Hl7Fhir\R5\CodeableConceptType $opticalActivity = null)
    {
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * Gets as molecularFormula
     *
     * An expression which states the number and type of atoms present in a molecule of a substance.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMolecularFormula()
    {
        return $this->molecularFormula;
    }

    /**
     * Sets a new molecularFormula
     *
     * An expression which states the number and type of atoms present in a molecule of a substance.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $molecularFormula
     * @return self
     */
    public function setMolecularFormula(?\TKusy\Hl7Fhir\R5\StringType $molecularFormula = null)
    {
        $this->molecularFormula = $molecularFormula;
        return $this;
    }

    /**
     * Gets as molecularFormulaByMoiety
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then alphabetical, each moiety separated by a dot.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $molecularFormulaByMoiety
     * @return self
     */
    public function setMolecularFormulaByMoiety(?\TKusy\Hl7Fhir\R5\StringType $molecularFormulaByMoiety = null)
    {
        $this->molecularFormulaByMoiety = $molecularFormulaByMoiety;
        return $this;
    }

    /**
     * Gets as molecularWeight
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType
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
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType $molecularWeight
     * @return self
     */
    public function setMolecularWeight(?\TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType $molecularWeight = null)
    {
        $this->molecularWeight = $molecularWeight;
        return $this;
    }

    /**
     * Adds as technique
     *
     * The method used to elucidate the structure of the drug substance. Examples: X-ray, NMR, Peptide mapping, Ligand binding assay.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $technique
     */
    public function addToTechnique(\TKusy\Hl7Fhir\R5\CodeableConceptType $technique)
    {
        $this->technique[] = $technique;
        return $this;
    }

    /**
     * isset technique
     *
     * The method used to elucidate the structure of the drug substance. Examples: X-ray, NMR, Peptide mapping, Ligand binding assay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnique($index)
    {
        return isset($this->technique[$index]);
    }

    /**
     * unset technique
     *
     * The method used to elucidate the structure of the drug substance. Examples: X-ray, NMR, Peptide mapping, Ligand binding assay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnique($index)
    {
        unset($this->technique[$index]);
    }

    /**
     * Gets as technique
     *
     * The method used to elucidate the structure of the drug substance. Examples: X-ray, NMR, Peptide mapping, Ligand binding assay.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * Sets a new technique
     *
     * The method used to elucidate the structure of the drug substance. Examples: X-ray, NMR, Peptide mapping, Ligand binding assay.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $technique
     * @return self
     */
    public function setTechnique(array $technique = null)
    {
        $this->technique = $technique;
        return $this;
    }

    /**
     * Adds as sourceDocument
     *
     * The source of information about the structure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $sourceDocument
     */
    public function addToSourceDocument(\TKusy\Hl7Fhir\R5\ReferenceType $sourceDocument)
    {
        $this->sourceDocument[] = $sourceDocument;
        return $this;
    }

    /**
     * isset sourceDocument
     *
     * The source of information about the structure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSourceDocument($index)
    {
        return isset($this->sourceDocument[$index]);
    }

    /**
     * unset sourceDocument
     *
     * The source of information about the structure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSourceDocument($index)
    {
        unset($this->sourceDocument[$index]);
    }

    /**
     * Gets as sourceDocument
     *
     * The source of information about the structure.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSourceDocument()
    {
        return $this->sourceDocument;
    }

    /**
     * Sets a new sourceDocument
     *
     * The source of information about the structure.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $sourceDocument
     * @return self
     */
    public function setSourceDocument(array $sourceDocument = null)
    {
        $this->sourceDocument = $sourceDocument;
        return $this;
    }

    /**
     * Adds as representation
     *
     * A depiction of the structure of the substance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionRepresentationType $representation
     */
    public function addToRepresentation(\TKusy\Hl7Fhir\R5\SubstanceDefinitionRepresentationType $representation)
    {
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * isset representation
     *
     * A depiction of the structure of the substance.
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
     * A depiction of the structure of the substance.
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
     * A depiction of the structure of the substance.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionRepresentationType[]
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Sets a new representation
     *
     * A depiction of the structure of the substance.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionRepresentationType[] $representation
     * @return self
     */
    public function setRepresentation(array $representation = null)
    {
        $this->representation = $representation;
        return $this;
    }


}

