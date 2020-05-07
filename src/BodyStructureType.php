<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BodyStructureType
 *
 * Record details about an anatomical structure. This resource may be used when a coded concept does not provide the necessary detail needed for the use case.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: BodyStructure
 */
class BodyStructureType extends DomainResourceType
{

    /**
     * Identifier for this instance of the anatomical structure.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Whether this body site is in active use.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $active
     */
    private $active = null;

    /**
     * The kind of structure being represented by the body structure at `BodyStructure.location`. This can define both normal and abnormal morphologies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $morphology
     */
    private $morphology = null;

    /**
     * The anatomical location or region of the specimen, lesion, or body structure.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $location
     */
    private $location = null;

    /**
     * Qualifier to refine the anatomical location. These include qualifiers for laterality, relative location, directionality, number, and plane.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $locationQualifier
     */
    private $locationQualifier = [
        
    ];

    /**
     * A summary, characterization or explanation of the body structure.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Image or images used to identify a location.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType[] $image
     */
    private $image = [
        
    ];

    /**
     * The person to which the body site belongs.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * Adds as identifier
     *
     * Identifier for this instance of the anatomical structure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as active
     *
     * Whether this body site is in active use.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
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
     * @param \TKusy\Hl7FhirR4\BooleanType $active
     * @return self
     */
    public function setActive(\TKusy\Hl7FhirR4\BooleanType $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as morphology
     *
     * The kind of structure being represented by the body structure at `BodyStructure.location`. This can define both normal and abnormal morphologies.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $morphology
     * @return self
     */
    public function setMorphology(\TKusy\Hl7FhirR4\CodeableConceptType $morphology)
    {
        $this->morphology = $morphology;
        return $this;
    }

    /**
     * Gets as location
     *
     * The anatomical location or region of the specimen, lesion, or body structure.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The anatomical location or region of the specimen, lesion, or body structure.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\CodeableConceptType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as locationQualifier
     *
     * Qualifier to refine the anatomical location. These include qualifiers for laterality, relative location, directionality, number, and plane.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $locationQualifier
     */
    public function addToLocationQualifier(\TKusy\Hl7FhirR4\CodeableConceptType $locationQualifier)
    {
        $this->locationQualifier[] = $locationQualifier;
        return $this;
    }

    /**
     * isset locationQualifier
     *
     * Qualifier to refine the anatomical location. These include qualifiers for laterality, relative location, directionality, number, and plane.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationQualifier($index)
    {
        return isset($this->locationQualifier[$index]);
    }

    /**
     * unset locationQualifier
     *
     * Qualifier to refine the anatomical location. These include qualifiers for laterality, relative location, directionality, number, and plane.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationQualifier($index)
    {
        unset($this->locationQualifier[$index]);
    }

    /**
     * Gets as locationQualifier
     *
     * Qualifier to refine the anatomical location. These include qualifiers for laterality, relative location, directionality, number, and plane.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getLocationQualifier()
    {
        return $this->locationQualifier;
    }

    /**
     * Sets a new locationQualifier
     *
     * Qualifier to refine the anatomical location. These include qualifiers for laterality, relative location, directionality, number, and plane.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $locationQualifier
     * @return self
     */
    public function setLocationQualifier(array $locationQualifier)
    {
        $this->locationQualifier = $locationQualifier;
        return $this;
    }

    /**
     * Gets as description
     *
     * A summary, characterization or explanation of the body structure.
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
     * A summary, characterization or explanation of the body structure.
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
     * Adds as image
     *
     * Image or images used to identify a location.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AttachmentType $image
     */
    public function addToImage(\TKusy\Hl7FhirR4\AttachmentType $image)
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
     * @return \TKusy\Hl7FhirR4\AttachmentType[]
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
     * @param \TKusy\Hl7FhirR4\AttachmentType[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The person to which the body site belongs.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }


}

