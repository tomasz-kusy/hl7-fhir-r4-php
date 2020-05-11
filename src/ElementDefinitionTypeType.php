<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ElementDefinitionTypeType
 *
 * Captures constraints on each element within the resource, profile, or extension.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Type
 */
class ElementDefinitionTypeType extends BackboneElementType
{

    /**
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     *
     * @var \TKusy\Hl7FhirR4\UriType $code
     */
    private $code = null;

    /**
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $profile
     */
    private $profile = [
        
    ];

    /**
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $targetProfile
     */
    private $targetProfile = [
        
    ];

    /**
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     *
     * @var \TKusy\Hl7FhirR4\AggregationModeType[] $aggregation
     */
    private $aggregation = [
        
    ];

    /**
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceVersionRulesType $versioning
     */
    private $versioning = null;

    /**
     * Gets as code
     *
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     *
     * @param \TKusy\Hl7FhirR4\UriType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\UriType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as profile
     *
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
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
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
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
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
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
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
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
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
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
     * Adds as targetProfile
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CanonicalType $targetProfile
     */
    public function addToTargetProfile(\TKusy\Hl7FhirR4\CanonicalType $targetProfile)
    {
        $this->targetProfile[] = $targetProfile;
        return $this;
    }

    /**
     * isset targetProfile
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTargetProfile($index)
    {
        return isset($this->targetProfile[$index]);
    }

    /**
     * unset targetProfile
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTargetProfile($index)
    {
        unset($this->targetProfile[$index]);
    }

    /**
     * Gets as targetProfile
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
     */
    public function getTargetProfile()
    {
        return $this->targetProfile;
    }

    /**
     * Sets a new targetProfile
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType[] $targetProfile
     * @return self
     */
    public function setTargetProfile(array $targetProfile)
    {
        $this->targetProfile = $targetProfile;
        return $this;
    }

    /**
     * Adds as aggregation
     *
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AggregationModeType $aggregation
     */
    public function addToAggregation(\TKusy\Hl7FhirR4\AggregationModeType $aggregation)
    {
        $this->aggregation[] = $aggregation;
        return $this;
    }

    /**
     * isset aggregation
     *
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAggregation($index)
    {
        return isset($this->aggregation[$index]);
    }

    /**
     * unset aggregation
     *
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAggregation($index)
    {
        unset($this->aggregation[$index]);
    }

    /**
     * Gets as aggregation
     *
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     *
     * @return \TKusy\Hl7FhirR4\AggregationModeType[]
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * Sets a new aggregation
     *
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     *
     * @param \TKusy\Hl7FhirR4\AggregationModeType[] $aggregation
     * @return self
     */
    public function setAggregation(array $aggregation)
    {
        $this->aggregation = $aggregation;
        return $this;
    }

    /**
     * Gets as versioning
     *
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceVersionRulesType
     */
    public function getVersioning()
    {
        return $this->versioning;
    }

    /**
     * Sets a new versioning
     *
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceVersionRulesType $versioning
     * @return self
     */
    public function setVersioning(\TKusy\Hl7FhirR4\ReferenceVersionRulesType $versioning)
    {
        $this->versioning = $versioning;
        return $this;
    }


}

