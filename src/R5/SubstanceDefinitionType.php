<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubstanceDefinition
 */
class SubstanceDefinitionType extends DomainResourceType
{

    /**
     * Identifier by which this substance is known.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A business level version identifier of the substance.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical, biological, or a lower level such as the general types of polymer (linear or branch chain) or type of impurity (process related or contaminant).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classification
     */
    private $classification = null;

    /**
     * If the substance applies to human or veterinary use.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $domain
     */
    private $domain = null;

    /**
     * The quality standard, established benchmark, to which substance complies (e.g. USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $grade
     */
    private $grade = null;

    /**
     * Textual description of the substance.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Supporting literature.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $informationSource
     */
    private $informationSource = null;

    /**
     * Textual comment about the substance's catalogue or registry record.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The entity that creates, makes, produces or fabricates the substance. This is a set of potential manufacturers but is not necessarily comprehensive.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     */
    private $manufacturer = null;

    /**
     * An entity that is the source for the substance. It may be different from the manufacturer. Supplier is synonymous to a distributor.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supplier
     */
    private $supplier = null;

    /**
     * Moiety, for structural modifications.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionMoietyType[] $moiety
     */
    private $moiety = null;

    /**
     * General specifications for this substance.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionCharacterizationType[] $characterization
     */
    private $characterization = null;

    /**
     * General specifications for this substance.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionPropertyType[] $property
     */
    private $property = null;

    /**
     * General information detailing this substance.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $referenceInformation
     */
    private $referenceInformation = null;

    /**
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType[] $molecularWeight
     */
    private $molecularWeight = null;

    /**
     * Structural information.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionStructureType $structure
     */
    private $structure = null;

    /**
     * Codes associated with the substance.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionCodeType[] $code
     */
    private $code = null;

    /**
     * Names applicable to this substance.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[] $name
     */
    private $name = null;

    /**
     * A link between this substance and another, with details of the relationship.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionRelationshipType[] $relationship
     */
    private $relationship = null;

    /**
     * Data items specific to nucleic acids.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $nucleicAcid
     */
    private $nucleicAcid = null;

    /**
     * Data items specific to polymers.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $polymer
     */
    private $polymer = null;

    /**
     * Data items specific to proteins.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $protein
     */
    private $protein = null;

    /**
     * Material or taxonomic/anatomical source for the substance.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinitionSourceMaterialType $sourceMaterial
     */
    private $sourceMaterial = null;

    /**
     * Adds as identifier
     *
     * Identifier by which this substance is known.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Identifier by which this substance is known.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Identifier by which this substance is known.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Identifier by which this substance is known.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier by which this substance is known.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as version
     *
     * A business level version identifier of the substance.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * A business level version identifier of the substance.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as status
     *
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status of substance within the catalogue e.g. active, retired.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as classification
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical, biological, or a lower level such as the general types of polymer (linear or branch chain) or type of impurity (process related or contaminant).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $classification
     */
    public function addToClassification(\TKusy\Hl7Fhir\R5\CodeableConceptType $classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * isset classification
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical, biological, or a lower level such as the general types of polymer (linear or branch chain) or type of impurity (process related or contaminant).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassification($index)
    {
        return isset($this->classification[$index]);
    }

    /**
     * unset classification
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical, biological, or a lower level such as the general types of polymer (linear or branch chain) or type of impurity (process related or contaminant).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassification($index)
    {
        unset($this->classification[$index]);
    }

    /**
     * Gets as classification
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical, biological, or a lower level such as the general types of polymer (linear or branch chain) or type of impurity (process related or contaminant).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * A high level categorization, e.g. polymer or nucleic acid, or food, chemical, biological, or a lower level such as the general types of polymer (linear or branch chain) or type of impurity (process related or contaminant).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classification
     * @return self
     */
    public function setClassification(array $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Gets as domain
     *
     * If the substance applies to human or veterinary use.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * If the substance applies to human or veterinary use.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $domain
     * @return self
     */
    public function setDomain(?\TKusy\Hl7Fhir\R5\CodeableConceptType $domain = null)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Adds as grade
     *
     * The quality standard, established benchmark, to which substance complies (e.g. USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $grade
     */
    public function addToGrade(\TKusy\Hl7Fhir\R5\CodeableConceptType $grade)
    {
        $this->grade[] = $grade;
        return $this;
    }

    /**
     * isset grade
     *
     * The quality standard, established benchmark, to which substance complies (e.g. USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGrade($index)
    {
        return isset($this->grade[$index]);
    }

    /**
     * unset grade
     *
     * The quality standard, established benchmark, to which substance complies (e.g. USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGrade($index)
    {
        unset($this->grade[$index]);
    }

    /**
     * Gets as grade
     *
     * The quality standard, established benchmark, to which substance complies (e.g. USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Sets a new grade
     *
     * The quality standard, established benchmark, to which substance complies (e.g. USP/NF, Ph. Eur, JP, BP, Company Standard).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $grade
     * @return self
     */
    public function setGrade(array $grade = null)
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * Gets as description
     *
     * Textual description of the substance.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Textual description of the substance.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as informationSource
     *
     * Supporting literature.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $informationSource
     */
    public function addToInformationSource(\TKusy\Hl7Fhir\R5\ReferenceType $informationSource)
    {
        $this->informationSource[] = $informationSource;
        return $this;
    }

    /**
     * isset informationSource
     *
     * Supporting literature.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationSource($index)
    {
        return isset($this->informationSource[$index]);
    }

    /**
     * unset informationSource
     *
     * Supporting literature.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationSource($index)
    {
        unset($this->informationSource[$index]);
    }

    /**
     * Gets as informationSource
     *
     * Supporting literature.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getInformationSource()
    {
        return $this->informationSource;
    }

    /**
     * Sets a new informationSource
     *
     * Supporting literature.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $informationSource
     * @return self
     */
    public function setInformationSource(array $informationSource = null)
    {
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * Adds as note
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Textual comment about the substance's catalogue or registry record.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a set of potential manufacturers but is not necessarily comprehensive.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7Fhir\R5\ReferenceType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a set of potential manufacturers but is not necessarily comprehensive.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturer($index)
    {
        return isset($this->manufacturer[$index]);
    }

    /**
     * unset manufacturer
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a set of potential manufacturers but is not necessarily comprehensive.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturer($index)
    {
        unset($this->manufacturer[$index]);
    }

    /**
     * Gets as manufacturer
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a set of potential manufacturers but is not necessarily comprehensive.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * The entity that creates, makes, produces or fabricates the substance. This is a set of potential manufacturers but is not necessarily comprehensive.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as supplier
     *
     * An entity that is the source for the substance. It may be different from the manufacturer. Supplier is synonymous to a distributor.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supplier
     */
    public function addToSupplier(\TKusy\Hl7Fhir\R5\ReferenceType $supplier)
    {
        $this->supplier[] = $supplier;
        return $this;
    }

    /**
     * isset supplier
     *
     * An entity that is the source for the substance. It may be different from the manufacturer. Supplier is synonymous to a distributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplier($index)
    {
        return isset($this->supplier[$index]);
    }

    /**
     * unset supplier
     *
     * An entity that is the source for the substance. It may be different from the manufacturer. Supplier is synonymous to a distributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplier($index)
    {
        unset($this->supplier[$index]);
    }

    /**
     * Gets as supplier
     *
     * An entity that is the source for the substance. It may be different from the manufacturer. Supplier is synonymous to a distributor.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Sets a new supplier
     *
     * An entity that is the source for the substance. It may be different from the manufacturer. Supplier is synonymous to a distributor.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supplier
     * @return self
     */
    public function setSupplier(array $supplier = null)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * Adds as moiety
     *
     * Moiety, for structural modifications.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionMoietyType $moiety
     */
    public function addToMoiety(\TKusy\Hl7Fhir\R5\SubstanceDefinitionMoietyType $moiety)
    {
        $this->moiety[] = $moiety;
        return $this;
    }

    /**
     * isset moiety
     *
     * Moiety, for structural modifications.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMoiety($index)
    {
        return isset($this->moiety[$index]);
    }

    /**
     * unset moiety
     *
     * Moiety, for structural modifications.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMoiety($index)
    {
        unset($this->moiety[$index]);
    }

    /**
     * Gets as moiety
     *
     * Moiety, for structural modifications.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionMoietyType[]
     */
    public function getMoiety()
    {
        return $this->moiety;
    }

    /**
     * Sets a new moiety
     *
     * Moiety, for structural modifications.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionMoietyType[] $moiety
     * @return self
     */
    public function setMoiety(array $moiety = null)
    {
        $this->moiety = $moiety;
        return $this;
    }

    /**
     * Adds as characterization
     *
     * General specifications for this substance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionCharacterizationType $characterization
     */
    public function addToCharacterization(\TKusy\Hl7Fhir\R5\SubstanceDefinitionCharacterizationType $characterization)
    {
        $this->characterization[] = $characterization;
        return $this;
    }

    /**
     * isset characterization
     *
     * General specifications for this substance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacterization($index)
    {
        return isset($this->characterization[$index]);
    }

    /**
     * unset characterization
     *
     * General specifications for this substance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacterization($index)
    {
        unset($this->characterization[$index]);
    }

    /**
     * Gets as characterization
     *
     * General specifications for this substance.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionCharacterizationType[]
     */
    public function getCharacterization()
    {
        return $this->characterization;
    }

    /**
     * Sets a new characterization
     *
     * General specifications for this substance.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionCharacterizationType[] $characterization
     * @return self
     */
    public function setCharacterization(array $characterization = null)
    {
        $this->characterization = $characterization;
        return $this;
    }

    /**
     * Adds as property
     *
     * General specifications for this substance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\SubstanceDefinitionPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * General specifications for this substance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * General specifications for this substance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * General specifications for this substance.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * General specifications for this substance.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Gets as referenceInformation
     *
     * General information detailing this substance.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReferenceInformation()
    {
        return $this->referenceInformation;
    }

    /**
     * Sets a new referenceInformation
     *
     * General information detailing this substance.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $referenceInformation
     * @return self
     */
    public function setReferenceInformation(?\TKusy\Hl7Fhir\R5\ReferenceType $referenceInformation = null)
    {
        $this->referenceInformation = $referenceInformation;
        return $this;
    }

    /**
     * Adds as molecularWeight
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType $molecularWeight
     */
    public function addToMolecularWeight(\TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType $molecularWeight)
    {
        $this->molecularWeight[] = $molecularWeight;
        return $this;
    }

    /**
     * isset molecularWeight
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMolecularWeight($index)
    {
        return isset($this->molecularWeight[$index]);
    }

    /**
     * unset molecularWeight
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMolecularWeight($index)
    {
        unset($this->molecularWeight[$index]);
    }

    /**
     * Gets as molecularWeight
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType[]
     */
    public function getMolecularWeight()
    {
        return $this->molecularWeight;
    }

    /**
     * Sets a new molecularWeight
     *
     * The average mass of a molecule of a compound compared to 1/12 the mass of carbon 12 and calculated as the sum of the atomic weights of the constituent atoms.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionMolecularWeightType[] $molecularWeight
     * @return self
     */
    public function setMolecularWeight(array $molecularWeight = null)
    {
        $this->molecularWeight = $molecularWeight;
        return $this;
    }

    /**
     * Gets as structure
     *
     * Structural information.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionStructureType
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Sets a new structure
     *
     * Structural information.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionStructureType $structure
     * @return self
     */
    public function setStructure(?\TKusy\Hl7Fhir\R5\SubstanceDefinitionStructureType $structure = null)
    {
        $this->structure = $structure;
        return $this;
    }

    /**
     * Adds as code
     *
     * Codes associated with the substance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionCodeType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R5\SubstanceDefinitionCodeType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * Codes associated with the substance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * Codes associated with the substance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * Codes associated with the substance.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionCodeType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Codes associated with the substance.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionCodeType[] $code
     * @return self
     */
    public function setCode(array $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as name
     *
     * Names applicable to this substance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType $name
     */
    public function addToName(\TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * Names applicable to this substance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * Names applicable to this substance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * Names applicable to this substance.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Names applicable to this substance.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionNameType[] $name
     * @return self
     */
    public function setName(array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as relationship
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionRelationshipType $relationship
     */
    public function addToRelationship(\TKusy\Hl7Fhir\R5\SubstanceDefinitionRelationshipType $relationship)
    {
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * isset relationship
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelationship($index)
    {
        return isset($this->relationship[$index]);
    }

    /**
     * unset relationship
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelationship($index)
    {
        unset($this->relationship[$index]);
    }

    /**
     * Gets as relationship
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionRelationshipType[]
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionRelationshipType[] $relationship
     * @return self
     */
    public function setRelationship(array $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as nucleicAcid
     *
     * Data items specific to nucleic acids.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getNucleicAcid()
    {
        return $this->nucleicAcid;
    }

    /**
     * Sets a new nucleicAcid
     *
     * Data items specific to nucleic acids.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $nucleicAcid
     * @return self
     */
    public function setNucleicAcid(?\TKusy\Hl7Fhir\R5\ReferenceType $nucleicAcid = null)
    {
        $this->nucleicAcid = $nucleicAcid;
        return $this;
    }

    /**
     * Gets as polymer
     *
     * Data items specific to polymers.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPolymer()
    {
        return $this->polymer;
    }

    /**
     * Sets a new polymer
     *
     * Data items specific to polymers.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $polymer
     * @return self
     */
    public function setPolymer(?\TKusy\Hl7Fhir\R5\ReferenceType $polymer = null)
    {
        $this->polymer = $polymer;
        return $this;
    }

    /**
     * Gets as protein
     *
     * Data items specific to proteins.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getProtein()
    {
        return $this->protein;
    }

    /**
     * Sets a new protein
     *
     * Data items specific to proteins.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $protein
     * @return self
     */
    public function setProtein(?\TKusy\Hl7Fhir\R5\ReferenceType $protein = null)
    {
        $this->protein = $protein;
        return $this;
    }

    /**
     * Gets as sourceMaterial
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinitionSourceMaterialType
     */
    public function getSourceMaterial()
    {
        return $this->sourceMaterial;
    }

    /**
     * Sets a new sourceMaterial
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinitionSourceMaterialType $sourceMaterial
     * @return self
     */
    public function setSourceMaterial(?\TKusy\Hl7Fhir\R5\SubstanceDefinitionSourceMaterialType $sourceMaterial = null)
    {
        $this->sourceMaterial = $sourceMaterial;
        return $this;
    }


}

