<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CapabilityStatementRestType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server or Client for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Rest
 */
class CapabilityStatementRestType extends BackboneElementType
{

    /**
     * Identifies whether this portion of the statement is describing the ability to initiate or receive restful operations.
     *
     * @var \TKusy\Hl7Fhir\R5\RestfulCapabilityModeType $mode
     */
    private $mode = null;

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * Information about security implementation from an interface perspective - what a client needs to know.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementSecurityType $security
     */
    private $security = null;

    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementResourceType[] $resource
     */
    private $resource = null;

    /**
     * A specification of restful operations supported by the system.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementInteraction1Type[] $interaction
     */
    private $interaction = null;

    /**
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation. This is only for searches executed against the system-level endpoint.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementSearchParamType[] $searchParam
     */
    private $searchParam = null;

    /**
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementOperationType[] $operation
     */
    private $operation = null;

    /**
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $compartment
     */
    private $compartment = null;

    /**
     * Gets as mode
     *
     * Identifies whether this portion of the statement is describing the ability to initiate or receive restful operations.
     *
     * @return \TKusy\Hl7Fhir\R5\RestfulCapabilityModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Identifies whether this portion of the statement is describing the ability to initiate or receive restful operations.
     *
     * @param \TKusy\Hl7Fhir\R5\RestfulCapabilityModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R5\RestfulCapabilityModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Information about the system's restful capabilities that apply across all applications, such as security.
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
     * Information about the system's restful capabilities that apply across all applications, such as security.
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
     * Gets as security
     *
     * Information about security implementation from an interface perspective - what a client needs to know.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementSecurityType
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Sets a new security
     *
     * Information about security implementation from an interface perspective - what a client needs to know.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementSecurityType $security
     * @return self
     */
    public function setSecurity(?\TKusy\Hl7Fhir\R5\CapabilityStatementSecurityType $security = null)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * Adds as resource
     *
     * A specification of the restful capabilities of the solution for a specific resource type.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementResourceType $resource
     */
    public function addToResource(\TKusy\Hl7Fhir\R5\CapabilityStatementResourceType $resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * isset resource
     *
     * A specification of the restful capabilities of the solution for a specific resource type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResource($index)
    {
        return isset($this->resource[$index]);
    }

    /**
     * unset resource
     *
     * A specification of the restful capabilities of the solution for a specific resource type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResource($index)
    {
        unset($this->resource[$index]);
    }

    /**
     * Gets as resource
     *
     * A specification of the restful capabilities of the solution for a specific resource type.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementResourceType[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * A specification of the restful capabilities of the solution for a specific resource type.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementResourceType[] $resource
     * @return self
     */
    public function setResource(array $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Adds as interaction
     *
     * A specification of restful operations supported by the system.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementInteraction1Type $interaction
     */
    public function addToInteraction(\TKusy\Hl7Fhir\R5\CapabilityStatementInteraction1Type $interaction)
    {
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * isset interaction
     *
     * A specification of restful operations supported by the system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInteraction($index)
    {
        return isset($this->interaction[$index]);
    }

    /**
     * unset interaction
     *
     * A specification of restful operations supported by the system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInteraction($index)
    {
        unset($this->interaction[$index]);
    }

    /**
     * Gets as interaction
     *
     * A specification of restful operations supported by the system.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementInteraction1Type[]
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Sets a new interaction
     *
     * A specification of restful operations supported by the system.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementInteraction1Type[] $interaction
     * @return self
     */
    public function setInteraction(array $interaction = null)
    {
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * Adds as searchParam
     *
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation. This is only for searches executed against the system-level endpoint.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementSearchParamType $searchParam
     */
    public function addToSearchParam(\TKusy\Hl7Fhir\R5\CapabilityStatementSearchParamType $searchParam)
    {
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * isset searchParam
     *
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation. This is only for searches executed against the system-level endpoint.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchParam($index)
    {
        return isset($this->searchParam[$index]);
    }

    /**
     * unset searchParam
     *
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation. This is only for searches executed against the system-level endpoint.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchParam($index)
    {
        unset($this->searchParam[$index]);
    }

    /**
     * Gets as searchParam
     *
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation. This is only for searches executed against the system-level endpoint.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementSearchParamType[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * Sets a new searchParam
     *
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation. This is only for searches executed against the system-level endpoint.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementSearchParamType[] $searchParam
     * @return self
     */
    public function setSearchParam(array $searchParam = null)
    {
        $this->searchParam = $searchParam;
        return $this;
    }

    /**
     * Adds as operation
     *
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementOperationType $operation
     */
    public function addToOperation(\TKusy\Hl7Fhir\R5\CapabilityStatementOperationType $operation)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * isset operation
     *
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperation($index)
    {
        return isset($this->operation[$index]);
    }

    /**
     * unset operation
     *
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperation($index)
    {
        unset($this->operation[$index]);
    }

    /**
     * Gets as operation
     *
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementOperationType[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementOperationType[] $operation
     * @return self
     */
    public function setOperation(array $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Adds as compartment
     *
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $compartment
     */
    public function addToCompartment(\TKusy\Hl7Fhir\R5\CanonicalType $compartment)
    {
        $this->compartment[] = $compartment;
        return $this;
    }

    /**
     * isset compartment
     *
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompartment($index)
    {
        return isset($this->compartment[$index]);
    }

    /**
     * unset compartment
     *
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompartment($index)
    {
        unset($this->compartment[$index]);
    }

    /**
     * Gets as compartment
     *
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $compartment
     * @return self
     */
    public function setCompartment(array $compartment = null)
    {
        $this->compartment = $compartment;
        return $this;
    }


}

