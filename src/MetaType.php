<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MetaType
 *
 * The metadata about a resource. This is content in the resource that is maintained by the infrastructure. Changes to the content might not always be associated with version changes to the resource.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: Meta
 */
class MetaType extends ElementType
{

    /**
     * The version specific identifier, as it appears in the version portion of the URL. This value changes when the resource is created, updated, or deleted.
     *
     * @var \TKusy\Hl7FhirR4\IdType $versionId
     */
    private $versionId = null;

    /**
     * When the resource last changed - e.g. when the version changed.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * A uri that identifies the source system of the resource. This provides a minimal amount of [[[Provenance]]] information that can be used to track or differentiate the source of information in the resource. The source may identify another FHIR server, document, message, database, etc.
     *
     * @var \TKusy\Hl7FhirR4\UriType $source
     */
    private $source = null;

    /**
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $profile
     */
    private $profile = [
        
    ];

    /**
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     *
     * @var \TKusy\Hl7FhirR4\CodingType[] $security
     */
    private $security = [
        
    ];

    /**
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     *
     * @var \TKusy\Hl7FhirR4\CodingType[] $tag
     */
    private $tag = [
        
    ];

    /**
     * Gets as versionId
     *
     * The version specific identifier, as it appears in the version portion of the URL. This value changes when the resource is created, updated, or deleted.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getVersionId()
    {
        return $this->versionId;
    }

    /**
     * Sets a new versionId
     *
     * The version specific identifier, as it appears in the version portion of the URL. This value changes when the resource is created, updated, or deleted.
     *
     * @param \TKusy\Hl7FhirR4\IdType $versionId
     * @return self
     */
    public function setVersionId(\TKusy\Hl7FhirR4\IdType $versionId)
    {
        $this->versionId = $versionId;
        return $this;
    }

    /**
     * Gets as lastUpdated
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @param \TKusy\Hl7FhirR4\InstantType $lastUpdated
     * @return self
     */
    public function setLastUpdated(\TKusy\Hl7FhirR4\InstantType $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Gets as source
     *
     * A uri that identifies the source system of the resource. This provides a minimal amount of [[[Provenance]]] information that can be used to track or differentiate the source of information in the resource. The source may identify another FHIR server, document, message, database, etc.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * A uri that identifies the source system of the resource. This provides a minimal amount of [[[Provenance]]] information that can be used to track or differentiate the source of information in the resource. The source may identify another FHIR server, document, message, database, etc.
     *
     * @param \TKusy\Hl7FhirR4\UriType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7FhirR4\UriType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Adds as profile
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CanonicalType $profile
     */
    public function addToProfile(\TKusy\Hl7FhirR4\CanonicalType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this resource claims to conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType[] $profile
     * @return self
     */
    public function setProfile(array $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Adds as security
     *
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodingType $security
     */
    public function addToSecurity(\TKusy\Hl7FhirR4\CodingType $security)
    {
        $this->security[] = $security;
        return $this;
    }

    /**
     * isset security
     *
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurity($index)
    {
        return isset($this->security[$index]);
    }

    /**
     * unset security
     *
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurity($index)
    {
        unset($this->security[$index]);
    }

    /**
     * Gets as security
     *
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     *
     * @return \TKusy\Hl7FhirR4\CodingType[]
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Sets a new security
     *
     * Security labels applied to this resource. These tags connect specific resources to the overall security policy and infrastructure.
     *
     * @param \TKusy\Hl7FhirR4\CodingType[] $security
     * @return self
     */
    public function setSecurity(array $security)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * Adds as tag
     *
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodingType $tag
     */
    public function addToTag(\TKusy\Hl7FhirR4\CodingType $tag)
    {
        $this->tag[] = $tag;
        return $this;
    }

    /**
     * isset tag
     *
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTag($index)
    {
        return isset($this->tag[$index]);
    }

    /**
     * unset tag
     *
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTag($index)
    {
        unset($this->tag[$index]);
    }

    /**
     * Gets as tag
     *
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     *
     * @return \TKusy\Hl7FhirR4\CodingType[]
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Sets a new tag
     *
     * Tags applied to this resource. Tags are intended to be used to identify and relate resources to process and workflow, and applications are not required to consider the tags when interpreting the meaning of a resource.
     *
     * @param \TKusy\Hl7FhirR4\CodingType[] $tag
     * @return self
     */
    public function setTag(array $tag)
    {
        $this->tag = $tag;
        return $this;
    }


}

