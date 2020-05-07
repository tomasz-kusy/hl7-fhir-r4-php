<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no versions are specified, the resource is assumed to apply to all the versions stated in ImplementationGuide.fhirVersion.
     *
     * @var \TKusy\Hl7FhirR4\FHIRVersionType[] $fhirVersion
     */
    private $fhirVersion = [
        
    ];

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $exampleBoolean
     */
    private $exampleBoolean = null;

    /**
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $exampleCanonical
     */
    private $exampleCanonical = null;

    /**
     * Reference to the id of the grouping this resource appears in.
     *
     * @var \TKusy\Hl7FhirR4\IdType $groupingId
     */
    private $groupingId = null;

    /**
     * Gets as reference
     *
     * Where this resource is found.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7FhirR4\ReferenceType $reference)
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
     * @param \TKusy\Hl7FhirR4\FHIRVersionType $fhirVersion
     */
    public function addToFhirVersion(\TKusy\Hl7FhirR4\FHIRVersionType $fhirVersion)
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
     * @return \TKusy\Hl7FhirR4\FHIRVersionType[]
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
     * @param \TKusy\Hl7FhirR4\FHIRVersionType[] $fhirVersion
     * @return self
     */
    public function setFhirVersion(array $fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * Gets as name
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the reason that a resource has been included in the implementation guide.
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
     * A description of the reason that a resource has been included in the implementation guide.
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
     * Gets as exampleBoolean
     *
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }

    /**
     * Sets a new exampleBoolean
     *
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $exampleBoolean
     * @return self
     */
    public function setExampleBoolean(\TKusy\Hl7FhirR4\BooleanType $exampleBoolean)
    {
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * Gets as exampleCanonical
     *
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getExampleCanonical()
    {
        return $this->exampleCanonical;
    }

    /**
     * Sets a new exampleCanonical
     *
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $exampleCanonical
     * @return self
     */
    public function setExampleCanonical(\TKusy\Hl7FhirR4\CanonicalType $exampleCanonical)
    {
        $this->exampleCanonical = $exampleCanonical;
        return $this;
    }

    /**
     * Gets as groupingId
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @return \TKusy\Hl7FhirR4\IdType
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
     * @param \TKusy\Hl7FhirR4\IdType $groupingId
     * @return self
     */
    public function setGroupingId(\TKusy\Hl7FhirR4\IdType $groupingId)
    {
        $this->groupingId = $groupingId;
        return $this;
    }


}

