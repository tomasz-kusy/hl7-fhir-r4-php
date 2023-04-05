<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BodyStructureType
 *
 * Record details about an anatomical structure. This resource may be used when a coded concept does not provide the necessary detail needed for the use case.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: BodyStructure
 */
class BodyStructureType extends DomainResourceType
{

    /**
     * Identifier for this instance of the anatomical structure.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether this body site is in active use.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $active
     */
    private $active = null;

    /**
     * The kind of structure being represented by the body structure at `BodyStructure.location`. This can define both normal and abnormal morphologies.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $morphology
     */
    private $morphology = null;

    /**
     * The anatomical location(s) or region(s) of the specimen, lesion, or body structure.
     *
     * @var \TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType[] $includedStructure
     */
    private $includedStructure = null;

    /**
     * The anatomical location(s) or region(s) not occupied or represented by the specimen, lesion, or body structure.
     *
     * @var \TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType[] $excludedStructure
     */
    private $excludedStructure = null;

    /**
     * A summary, characterization or explanation of the body structure.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Image or images used to identify a location.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType[] $image
     */
    private $image = null;

    /**
     * The person to which the body site belongs.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * Adds as identifier
     *
     * Identifier for this instance of the anatomical structure.
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
     * Identifier for this instance of the anatomical structure.
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
     * Identifier for this instance of the anatomical structure.
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
     * Identifier for this instance of the anatomical structure.
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
     * Identifier for this instance of the anatomical structure.
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
     * Gets as active
     *
     * Whether this body site is in active use.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Whether this body site is in active use.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $active
     * @return self
     */
    public function setActive(?\TKusy\Hl7Fhir\R5\BooleanType $active = null)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as morphology
     *
     * The kind of structure being represented by the body structure at `BodyStructure.location`. This can define both normal and abnormal morphologies.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMorphology()
    {
        return $this->morphology;
    }

    /**
     * Sets a new morphology
     *
     * The kind of structure being represented by the body structure at `BodyStructure.location`. This can define both normal and abnormal morphologies.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $morphology
     * @return self
     */
    public function setMorphology(?\TKusy\Hl7Fhir\R5\CodeableConceptType $morphology = null)
    {
        $this->morphology = $morphology;
        return $this;
    }

    /**
     * Adds as includedStructure
     *
     * The anatomical location(s) or region(s) of the specimen, lesion, or body structure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType $includedStructure
     */
    public function addToIncludedStructure(\TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType $includedStructure)
    {
        $this->includedStructure[] = $includedStructure;
        return $this;
    }

    /**
     * isset includedStructure
     *
     * The anatomical location(s) or region(s) of the specimen, lesion, or body structure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncludedStructure($index)
    {
        return isset($this->includedStructure[$index]);
    }

    /**
     * unset includedStructure
     *
     * The anatomical location(s) or region(s) of the specimen, lesion, or body structure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncludedStructure($index)
    {
        unset($this->includedStructure[$index]);
    }

    /**
     * Gets as includedStructure
     *
     * The anatomical location(s) or region(s) of the specimen, lesion, or body structure.
     *
     * @return \TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType[]
     */
    public function getIncludedStructure()
    {
        return $this->includedStructure;
    }

    /**
     * Sets a new includedStructure
     *
     * The anatomical location(s) or region(s) of the specimen, lesion, or body structure.
     *
     * @param \TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType[] $includedStructure
     * @return self
     */
    public function setIncludedStructure(array $includedStructure)
    {
        $this->includedStructure = $includedStructure;
        return $this;
    }

    /**
     * Adds as excludedStructure
     *
     * The anatomical location(s) or region(s) not occupied or represented by the specimen, lesion, or body structure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType $excludedStructure
     */
    public function addToExcludedStructure(\TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType $excludedStructure)
    {
        $this->excludedStructure[] = $excludedStructure;
        return $this;
    }

    /**
     * isset excludedStructure
     *
     * The anatomical location(s) or region(s) not occupied or represented by the specimen, lesion, or body structure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedStructure($index)
    {
        return isset($this->excludedStructure[$index]);
    }

    /**
     * unset excludedStructure
     *
     * The anatomical location(s) or region(s) not occupied or represented by the specimen, lesion, or body structure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedStructure($index)
    {
        unset($this->excludedStructure[$index]);
    }

    /**
     * Gets as excludedStructure
     *
     * The anatomical location(s) or region(s) not occupied or represented by the specimen, lesion, or body structure.
     *
     * @return \TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType[]
     */
    public function getExcludedStructure()
    {
        return $this->excludedStructure;
    }

    /**
     * Sets a new excludedStructure
     *
     * The anatomical location(s) or region(s) not occupied or represented by the specimen, lesion, or body structure.
     *
     * @param \TKusy\Hl7Fhir\R5\BodyStructureIncludedStructureType[] $excludedStructure
     * @return self
     */
    public function setExcludedStructure(array $excludedStructure = null)
    {
        $this->excludedStructure = $excludedStructure;
        return $this;
    }

    /**
     * Gets as description
     *
     * A summary, characterization or explanation of the body structure.
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
     * A summary, characterization or explanation of the body structure.
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
     * Adds as image
     *
     * Image or images used to identify a location.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $image
     */
    public function addToImage(\TKusy\Hl7Fhir\R5\AttachmentType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * Image or images used to identify a location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * Image or images used to identify a location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * Image or images used to identify a location.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * Image or images used to identify a location.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType[] $image
     * @return self
     */
    public function setImage(array $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The person to which the body site belongs.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The person to which the body site belongs.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7Fhir\R5\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }


}

