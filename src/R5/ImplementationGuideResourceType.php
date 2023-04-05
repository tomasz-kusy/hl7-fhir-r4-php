<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImplementationGuideResourceType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Resource
 */
class ImplementationGuideResourceType extends BackboneElementType
{

    /**
     * Where this resource is found.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no versions are specified, the resource is assumed to apply to all the versions stated in ImplementationGuide.fhirVersion.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRVersionType[] $fhirVersion
     */
    private $fhirVersion = null;

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * If true, indicates the resource is an example instance.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isExample
     */
    private $isExample = null;

    /**
     * If present, indicates profile(s) the instance is valid against.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $profile
     */
    private $profile = null;

    /**
     * Reference to the id of the grouping this resource appears in.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $groupingId
     */
    private $groupingId = null;

    /**
     * Gets as reference
     *
     * Where this resource is found.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Where this resource is found.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7Fhir\R5\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Adds as fhirVersion
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no versions are specified, the resource is assumed to apply to all the versions stated in ImplementationGuide.fhirVersion.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\FHIRVersionType $fhirVersion
     */
    public function addToFhirVersion(\TKusy\Hl7Fhir\R5\FHIRVersionType $fhirVersion)
    {
        $this->fhirVersion[] = $fhirVersion;
        return $this;
    }

    /**
     * isset fhirVersion
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no versions are specified, the resource is assumed to apply to all the versions stated in ImplementationGuide.fhirVersion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFhirVersion($index)
    {
        return isset($this->fhirVersion[$index]);
    }

    /**
     * unset fhirVersion
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no versions are specified, the resource is assumed to apply to all the versions stated in ImplementationGuide.fhirVersion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFhirVersion($index)
    {
        unset($this->fhirVersion[$index]);
    }

    /**
     * Gets as fhirVersion
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no versions are specified, the resource is assumed to apply to all the versions stated in ImplementationGuide.fhirVersion.
     *
     * @return \TKusy\Hl7Fhir\R5\FHIRVersionType[]
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * Sets a new fhirVersion
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no versions are specified, the resource is assumed to apply to all the versions stated in ImplementationGuide.fhirVersion.
     *
     * @param \TKusy\Hl7Fhir\R5\FHIRVersionType[] $fhirVersion
     * @return self
     */
    public function setFhirVersion(array $fhirVersion = null)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * Gets as name
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the reason that a resource has been included in the implementation guide.
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
     * A description of the reason that a resource has been included in the implementation guide.
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
     * Gets as isExample
     *
     * If true, indicates the resource is an example instance.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getIsExample()
    {
        return $this->isExample;
    }

    /**
     * Sets a new isExample
     *
     * If true, indicates the resource is an example instance.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isExample
     * @return self
     */
    public function setIsExample(?\TKusy\Hl7Fhir\R5\BooleanType $isExample = null)
    {
        $this->isExample = $isExample;
        return $this;
    }

    /**
     * Adds as profile
     *
     * If present, indicates profile(s) the instance is valid against.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $profile
     */
    public function addToProfile(\TKusy\Hl7Fhir\R5\CanonicalType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * If present, indicates profile(s) the instance is valid against.
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
     * If present, indicates profile(s) the instance is valid against.
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
     * If present, indicates profile(s) the instance is valid against.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * If present, indicates profile(s) the instance is valid against.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $profile
     * @return self
     */
    public function setProfile(array $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as groupingId
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getGroupingId()
    {
        return $this->groupingId;
    }

    /**
     * Sets a new groupingId
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $groupingId
     * @return self
     */
    public function setGroupingId(?\TKusy\Hl7Fhir\R5\IdType $groupingId = null)
    {
        $this->groupingId = $groupingId;
        return $this;
    }


}

