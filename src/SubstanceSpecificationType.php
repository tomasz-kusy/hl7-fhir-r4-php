<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceSpecificationType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: SubstanceSpecification
 */
class SubstanceSpecificationType extends DomainResourceType
{

    /**
     * Identifier by which this substance is known.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * High level categorization, e.g. polymer or nucleic acid.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Status of substance within the catalogue e.g. approved.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * If the substance applies to only human or veterinary use.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $domain
     */
    private $domain = null;

    /**
     * Textual description of the substance.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Supporting literature.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $source
     */
    private $source = [
        
    ];

    /**
     * Textual comment about this record of a substance.
     *
     * @var \TKusy\Hl7FhirR4\StringType $comment
     */
    private $comment = null;

    /**
     * Moiety, for structural modifications.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationMoietyType[] $moiety
     */
    private $moiety = [
        
    ];

    /**
     * General specifications for this substance, including how it is related to other substances.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationPropertyType[] $property
     */
    private $property = [
        
    ];

    /**
     * General information detailing this substance.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $referenceInformation
     */
    private $referenceInformation = null;

    /**
     * Structural information.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationStructureType $structure
     */
    private $structure = null;

    /**
     * Codes associated with the substance.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationCodeType[] $code
     */
    private $code = [
        
    ];

    /**
     * Names applicable to this substance.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[] $name
     */
    private $name = [
        
    ];

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationMolecularWeightType[] $molecularWeight
     */
    private $molecularWeight = [
        
    ];

    /**
     * A link between this substance and another, with details of the relationship.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationRelationshipType[] $relationship
     */
    private $relationship = [
        
    ];

    /**
     * Data items specific to nucleic acids.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $nucleicAcid
     */
    private $nucleicAcid = null;

    /**
     * Data items specific to polymers.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $polymer
     */
    private $polymer = null;

    /**
     * Data items specific to proteins.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $protein
     */
    private $protein = null;

    /**
     * Material or taxonomic/anatomical source for the substance.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $sourceMaterial
     */
    private $sourceMaterial = null;

    /**
     * Gets as identifier
     *
     * Identifier by which this substance is known.
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
     * Identifier by which this substance is known.
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
     * Gets as type
     *
     * High level categorization, e.g. polymer or nucleic acid.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * High level categorization, e.g. polymer or nucleic acid.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as status
     *
     * Status of substance within the catalogue e.g. approved.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status of substance within the catalogue e.g. approved.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as domain
     *
     * If the substance applies to only human or veterinary use.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * If the substance applies to only human or veterinary use.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $domain
     * @return self
     */
    public function setDomain(\TKusy\Hl7FhirR4\CodeableConceptType $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Gets as description
     *
     * Textual description of the substance.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as source
     *
     * Supporting literature.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7FhirR4\ReferenceType $source)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Textual comment about this record of a substance.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Textual comment about this record of a substance.
     *
     * @param \TKusy\Hl7FhirR4\StringType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7FhirR4\StringType $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as moiety
     *
     * Moiety, for structural modifications.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationMoietyType $moiety
     */
    public function addToMoiety(\TKusy\Hl7FhirR4\SubstanceSpecificationMoietyType $moiety)
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
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationMoietyType[]
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationMoietyType[] $moiety
     * @return self
     */
    public function setMoiety(array $moiety)
    {
        $this->moiety = $moiety;
        return $this;
    }

    /**
     * Adds as property
     *
     * General specifications for this substance, including how it is related to other substances.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7FhirR4\SubstanceSpecificationPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * General specifications for this substance, including how it is related to other substances.
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
     * General specifications for this substance, including how it is related to other substances.
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
     * General specifications for this substance, including how it is related to other substances.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * General specifications for this substance, including how it is related to other substances.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Gets as referenceInformation
     *
     * General information detailing this substance.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $referenceInformation
     * @return self
     */
    public function setReferenceInformation(\TKusy\Hl7FhirR4\ReferenceType $referenceInformation)
    {
        $this->referenceInformation = $referenceInformation;
        return $this;
    }

    /**
     * Gets as structure
     *
     * Structural information.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationStructureType
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationStructureType $structure
     * @return self
     */
    public function setStructure(\TKusy\Hl7FhirR4\SubstanceSpecificationStructureType $structure)
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationCodeType $code
     */
    public function addToCode(\TKusy\Hl7FhirR4\SubstanceSpecificationCodeType $code)
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
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationCodeType[]
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationCodeType[] $code
     * @return self
     */
    public function setCode(array $code)
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationNameType $name
     */
    public function addToName(\TKusy\Hl7FhirR4\SubstanceSpecificationNameType $name)
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
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[]
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationNameType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as molecularWeight
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationMolecularWeightType $molecularWeight
     */
    public function addToMolecularWeight(\TKusy\Hl7FhirR4\SubstanceSpecificationMolecularWeightType $molecularWeight)
    {
        $this->molecularWeight[] = $molecularWeight;
        return $this;
    }

    /**
     * isset molecularWeight
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
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
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
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
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationMolecularWeightType[]
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationMolecularWeightType[] $molecularWeight
     * @return self
     */
    public function setMolecularWeight(array $molecularWeight)
    {
        $this->molecularWeight = $molecularWeight;
        return $this;
    }

    /**
     * Adds as relationship
     *
     * A link between this substance and another, with details of the relationship.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationRelationshipType $relationship
     */
    public function addToRelationship(\TKusy\Hl7FhirR4\SubstanceSpecificationRelationshipType $relationship)
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
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationRelationshipType[]
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
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationRelationshipType[] $relationship
     * @return self
     */
    public function setRelationship(array $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as nucleicAcid
     *
     * Data items specific to nucleic acids.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $nucleicAcid
     * @return self
     */
    public function setNucleicAcid(\TKusy\Hl7FhirR4\ReferenceType $nucleicAcid)
    {
        $this->nucleicAcid = $nucleicAcid;
        return $this;
    }

    /**
     * Gets as polymer
     *
     * Data items specific to polymers.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $polymer
     * @return self
     */
    public function setPolymer(\TKusy\Hl7FhirR4\ReferenceType $polymer)
    {
        $this->polymer = $polymer;
        return $this;
    }

    /**
     * Gets as protein
     *
     * Data items specific to proteins.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $protein
     * @return self
     */
    public function setProtein(\TKusy\Hl7FhirR4\ReferenceType $protein)
    {
        $this->protein = $protein;
        return $this;
    }

    /**
     * Gets as sourceMaterial
     *
     * Material or taxonomic/anatomical source for the substance.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $sourceMaterial
     * @return self
     */
    public function setSourceMaterial(\TKusy\Hl7FhirR4\ReferenceType $sourceMaterial)
    {
        $this->sourceMaterial = $sourceMaterial;
        return $this;
    }


}

