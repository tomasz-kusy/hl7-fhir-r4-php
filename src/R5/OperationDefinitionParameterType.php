<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing OperationDefinitionParameterType
 *
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 * XSD Type: OperationDefinition.Parameter
 */
class OperationDefinitionParameterType extends BackboneElementType
{

    /**
     * The name of used to identify the parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $name
     */
    private $name = null;

    /**
     * Whether this is an input or an output parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\OperationParameterUseType $use
     */
    private $use = null;

    /**
     * If present, indicates that the parameter applies when the operation is being invoked at the specified level.
     *
     * @var \TKusy\Hl7Fhir\R5\OperationParameterScopeType[] $scope
     */
    private $scope = null;

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $min
     */
    private $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $max
     */
    private $max = null;

    /**
     * Describes the meaning or use of this parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * The type for this parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRTypesType $type
     */
    private $type = null;

    /**
     * Support for polymorphic types. If the parameter type is abstract, this element lists allowed sub-types for the parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRTypesType[] $allowedType
     */
    private $allowedType = null;

    /**
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $targetProfile
     */
    private $targetProfile = null;

    /**
     * How the parameter is understood if/when it used as search parameter. This is only used if the parameter is a string.
     *
     * @var \TKusy\Hl7Fhir\R5\SearchParamTypeType $searchType
     */
    private $searchType = null;

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @var \TKusy\Hl7Fhir\R5\OperationDefinitionBindingType $binding
     */
    private $binding = null;

    /**
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     *
     * @var \TKusy\Hl7Fhir\R5\OperationDefinitionReferencedFromType[] $referencedFrom
     */
    private $referencedFrom = null;

    /**
     * The parts of a nested Parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\OperationDefinitionParameterType[] $part
     */
    private $part = null;

    /**
     * Gets as name
     *
     * The name of used to identify the parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of used to identify the parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\CodeType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as use
     *
     * Whether this is an input or an output parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\OperationParameterUseType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * Whether this is an input or an output parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\OperationParameterUseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7Fhir\R5\OperationParameterUseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Adds as scope
     *
     * If present, indicates that the parameter applies when the operation is being invoked at the specified level.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\OperationParameterScopeType $scope
     */
    public function addToScope(\TKusy\Hl7Fhir\R5\OperationParameterScopeType $scope)
    {
        $this->scope[] = $scope;
        return $this;
    }

    /**
     * isset scope
     *
     * If present, indicates that the parameter applies when the operation is being invoked at the specified level.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScope($index)
    {
        return isset($this->scope[$index]);
    }

    /**
     * unset scope
     *
     * If present, indicates that the parameter applies when the operation is being invoked at the specified level.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScope($index)
    {
        unset($this->scope[$index]);
    }

    /**
     * Gets as scope
     *
     * If present, indicates that the parameter applies when the operation is being invoked at the specified level.
     *
     * @return \TKusy\Hl7Fhir\R5\OperationParameterScopeType[]
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * If present, indicates that the parameter applies when the operation is being invoked at the specified level.
     *
     * @param \TKusy\Hl7Fhir\R5\OperationParameterScopeType[] $scope
     * @return self
     */
    public function setScope(array $scope = null)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Gets as min
     *
     * The minimum number of times this parameter SHALL appear in the request or response.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * The minimum number of times this parameter SHALL appear in the request or response.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $min
     * @return self
     */
    public function setMin(\TKusy\Hl7Fhir\R5\IntegerType $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * The maximum number of times this element is permitted to appear in the request or response.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * The maximum number of times this element is permitted to appear in the request or response.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $max
     * @return self
     */
    public function setMax(\TKusy\Hl7Fhir\R5\StringType $max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Describes the meaning or use of this parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Describes the meaning or use of this parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(?\TKusy\Hl7Fhir\R5\MarkdownType $documentation = null)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type for this parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\FHIRTypesType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type for this parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\FHIRTypesType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\FHIRTypesType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as allowedType
     *
     * Support for polymorphic types. If the parameter type is abstract, this element lists allowed sub-types for the parameter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\FHIRTypesType $allowedType
     */
    public function addToAllowedType(\TKusy\Hl7Fhir\R5\FHIRTypesType $allowedType)
    {
        $this->allowedType[] = $allowedType;
        return $this;
    }

    /**
     * isset allowedType
     *
     * Support for polymorphic types. If the parameter type is abstract, this element lists allowed sub-types for the parameter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowedType($index)
    {
        return isset($this->allowedType[$index]);
    }

    /**
     * unset allowedType
     *
     * Support for polymorphic types. If the parameter type is abstract, this element lists allowed sub-types for the parameter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowedType($index)
    {
        unset($this->allowedType[$index]);
    }

    /**
     * Gets as allowedType
     *
     * Support for polymorphic types. If the parameter type is abstract, this element lists allowed sub-types for the parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\FHIRTypesType[]
     */
    public function getAllowedType()
    {
        return $this->allowedType;
    }

    /**
     * Sets a new allowedType
     *
     * Support for polymorphic types. If the parameter type is abstract, this element lists allowed sub-types for the parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\FHIRTypesType[] $allowedType
     * @return self
     */
    public function setAllowedType(array $allowedType = null)
    {
        $this->allowedType = $allowedType;
        return $this;
    }

    /**
     * Adds as targetProfile
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $targetProfile
     */
    public function addToTargetProfile(\TKusy\Hl7Fhir\R5\CanonicalType $targetProfile)
    {
        $this->targetProfile[] = $targetProfile;
        return $this;
    }

    /**
     * isset targetProfile
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
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
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
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
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getTargetProfile()
    {
        return $this->targetProfile;
    }

    /**
     * Sets a new targetProfile
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $targetProfile
     * @return self
     */
    public function setTargetProfile(array $targetProfile = null)
    {
        $this->targetProfile = $targetProfile;
        return $this;
    }

    /**
     * Gets as searchType
     *
     * How the parameter is understood if/when it used as search parameter. This is only used if the parameter is a string.
     *
     * @return \TKusy\Hl7Fhir\R5\SearchParamTypeType
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * Sets a new searchType
     *
     * How the parameter is understood if/when it used as search parameter. This is only used if the parameter is a string.
     *
     * @param \TKusy\Hl7Fhir\R5\SearchParamTypeType $searchType
     * @return self
     */
    public function setSearchType(?\TKusy\Hl7Fhir\R5\SearchParamTypeType $searchType = null)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * Gets as binding
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @return \TKusy\Hl7Fhir\R5\OperationDefinitionBindingType
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Sets a new binding
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @param \TKusy\Hl7Fhir\R5\OperationDefinitionBindingType $binding
     * @return self
     */
    public function setBinding(?\TKusy\Hl7Fhir\R5\OperationDefinitionBindingType $binding = null)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * Adds as referencedFrom
     *
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\OperationDefinitionReferencedFromType $referencedFrom
     */
    public function addToReferencedFrom(\TKusy\Hl7Fhir\R5\OperationDefinitionReferencedFromType $referencedFrom)
    {
        $this->referencedFrom[] = $referencedFrom;
        return $this;
    }

    /**
     * isset referencedFrom
     *
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedFrom($index)
    {
        return isset($this->referencedFrom[$index]);
    }

    /**
     * unset referencedFrom
     *
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedFrom($index)
    {
        unset($this->referencedFrom[$index]);
    }

    /**
     * Gets as referencedFrom
     *
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     *
     * @return \TKusy\Hl7Fhir\R5\OperationDefinitionReferencedFromType[]
     */
    public function getReferencedFrom()
    {
        return $this->referencedFrom;
    }

    /**
     * Sets a new referencedFrom
     *
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     *
     * @param \TKusy\Hl7Fhir\R5\OperationDefinitionReferencedFromType[] $referencedFrom
     * @return self
     */
    public function setReferencedFrom(array $referencedFrom = null)
    {
        $this->referencedFrom = $referencedFrom;
        return $this;
    }

    /**
     * Adds as part
     *
     * The parts of a nested Parameter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\OperationDefinitionParameterType $part
     */
    public function addToPart(\TKusy\Hl7Fhir\R5\OperationDefinitionParameterType $part)
    {
        $this->part[] = $part;
        return $this;
    }

    /**
     * isset part
     *
     * The parts of a nested Parameter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPart($index)
    {
        return isset($this->part[$index]);
    }

    /**
     * unset part
     *
     * The parts of a nested Parameter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPart($index)
    {
        unset($this->part[$index]);
    }

    /**
     * Gets as part
     *
     * The parts of a nested Parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\OperationDefinitionParameterType[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Sets a new part
     *
     * The parts of a nested Parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\OperationDefinitionParameterType[] $part
     * @return self
     */
    public function setPart(array $part = null)
    {
        $this->part = $part;
        return $this;
    }


}

