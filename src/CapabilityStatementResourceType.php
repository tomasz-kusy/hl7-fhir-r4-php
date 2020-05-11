<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CapabilityStatementResourceType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Resource
 */
class CapabilityStatementResourceType extends BackboneElementType
{

    /**
     * A type of resource exposed via the restful interface.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $type
     */
    private $type = null;

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $profile
     */
    private $profile = null;

    /**
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $supportedProfile
     */
    private $supportedProfile = null;

    /**
     * Additional information about the resource type used by the system.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * Identifies a restful operation supported by the solution.
     *
     * @var \TKusy\Hl7FhirR4\CapabilityStatementInteractionType[] $interaction
     */
    private $interaction = null;

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     *
     * @var \TKusy\Hl7FhirR4\ResourceVersionPolicyType $versioning
     */
    private $versioning = null;

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $readHistory
     */
    private $readHistory = null;

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $updateCreate
     */
    private $updateCreate = null;

    /**
     * A flag that indicates that the server supports conditional create.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $conditionalCreate
     */
    private $conditionalCreate = null;

    /**
     * A code that indicates how the server supports conditional read.
     *
     * @var \TKusy\Hl7FhirR4\ConditionalReadStatusType $conditionalRead
     */
    private $conditionalRead = null;

    /**
     * A flag that indicates that the server supports conditional update.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $conditionalUpdate
     */
    private $conditionalUpdate = null;

    /**
     * A code that indicates how the server supports conditional delete.
     *
     * @var \TKusy\Hl7FhirR4\ConditionalDeleteStatusType $conditionalDelete
     */
    private $conditionalDelete = null;

    /**
     * A set of flags that defines how references are supported.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceHandlingPolicyType[] $referencePolicy
     */
    private $referencePolicy = null;

    /**
     * A list of _include values supported by the server.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $searchInclude
     */
    private $searchInclude = null;

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $searchRevInclude
     */
    private $searchRevInclude = null;

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     *
     * @var \TKusy\Hl7FhirR4\CapabilityStatementSearchParamType[] $searchParam
     */
    private $searchParam = null;

    /**
     * Definition of an operation or a named query together with its parameters and their meaning and type. Consult the definition of the operation for details about how to invoke the operation, and the parameters.
     *
     * @var \TKusy\Hl7FhirR4\CapabilityStatementOperationType[] $operation
     */
    private $operation = null;

    /**
     * Gets as type
     *
     * A type of resource exposed via the restful interface.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A type of resource exposed via the restful interface.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as profile
     *
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7FhirR4\CanonicalType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Adds as supportedProfile
     *
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CanonicalType $supportedProfile
     */
    public function addToSupportedProfile(\TKusy\Hl7FhirR4\CanonicalType $supportedProfile)
    {
        $this->supportedProfile[] = $supportedProfile;
        return $this;
    }

    /**
     * isset supportedProfile
     *
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedProfile($index)
    {
        return isset($this->supportedProfile[$index]);
    }

    /**
     * unset supportedProfile
     *
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedProfile($index)
    {
        unset($this->supportedProfile[$index]);
    }

    /**
     * Gets as supportedProfile
     *
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
     */
    public function getSupportedProfile()
    {
        return $this->supportedProfile;
    }

    /**
     * Sets a new supportedProfile
     *
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles](profiling.html#profile-uses).
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType[] $supportedProfile
     * @return self
     */
    public function setSupportedProfile(array $supportedProfile)
    {
        $this->supportedProfile = $supportedProfile;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Additional information about the resource type used by the system.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Additional information about the resource type used by the system.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7FhirR4\MarkdownType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as interaction
     *
     * Identifies a restful operation supported by the solution.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CapabilityStatementInteractionType $interaction
     */
    public function addToInteraction(\TKusy\Hl7FhirR4\CapabilityStatementInteractionType $interaction)
    {
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * isset interaction
     *
     * Identifies a restful operation supported by the solution.
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
     * Identifies a restful operation supported by the solution.
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
     * Identifies a restful operation supported by the solution.
     *
     * @return \TKusy\Hl7FhirR4\CapabilityStatementInteractionType[]
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Sets a new interaction
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param \TKusy\Hl7FhirR4\CapabilityStatementInteractionType[] $interaction
     * @return self
     */
    public function setInteraction(array $interaction)
    {
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * Gets as versioning
     *
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     *
     * @return \TKusy\Hl7FhirR4\ResourceVersionPolicyType
     */
    public function getVersioning()
    {
        return $this->versioning;
    }

    /**
     * Sets a new versioning
     *
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     *
     * @param \TKusy\Hl7FhirR4\ResourceVersionPolicyType $versioning
     * @return self
     */
    public function setVersioning(\TKusy\Hl7FhirR4\ResourceVersionPolicyType $versioning)
    {
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * Gets as readHistory
     *
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getReadHistory()
    {
        return $this->readHistory;
    }

    /**
     * Sets a new readHistory
     *
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $readHistory
     * @return self
     */
    public function setReadHistory(\TKusy\Hl7FhirR4\BooleanType $readHistory)
    {
        $this->readHistory = $readHistory;
        return $this;
    }

    /**
     * Gets as updateCreate
     *
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getUpdateCreate()
    {
        return $this->updateCreate;
    }

    /**
     * Sets a new updateCreate
     *
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $updateCreate
     * @return self
     */
    public function setUpdateCreate(\TKusy\Hl7FhirR4\BooleanType $updateCreate)
    {
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * Gets as conditionalCreate
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getConditionalCreate()
    {
        return $this->conditionalCreate;
    }

    /**
     * Sets a new conditionalCreate
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $conditionalCreate
     * @return self
     */
    public function setConditionalCreate(\TKusy\Hl7FhirR4\BooleanType $conditionalCreate)
    {
        $this->conditionalCreate = $conditionalCreate;
        return $this;
    }

    /**
     * Gets as conditionalRead
     *
     * A code that indicates how the server supports conditional read.
     *
     * @return \TKusy\Hl7FhirR4\ConditionalReadStatusType
     */
    public function getConditionalRead()
    {
        return $this->conditionalRead;
    }

    /**
     * Sets a new conditionalRead
     *
     * A code that indicates how the server supports conditional read.
     *
     * @param \TKusy\Hl7FhirR4\ConditionalReadStatusType $conditionalRead
     * @return self
     */
    public function setConditionalRead(\TKusy\Hl7FhirR4\ConditionalReadStatusType $conditionalRead)
    {
        $this->conditionalRead = $conditionalRead;
        return $this;
    }

    /**
     * Gets as conditionalUpdate
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getConditionalUpdate()
    {
        return $this->conditionalUpdate;
    }

    /**
     * Sets a new conditionalUpdate
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $conditionalUpdate
     * @return self
     */
    public function setConditionalUpdate(\TKusy\Hl7FhirR4\BooleanType $conditionalUpdate)
    {
        $this->conditionalUpdate = $conditionalUpdate;
        return $this;
    }

    /**
     * Gets as conditionalDelete
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @return \TKusy\Hl7FhirR4\ConditionalDeleteStatusType
     */
    public function getConditionalDelete()
    {
        return $this->conditionalDelete;
    }

    /**
     * Sets a new conditionalDelete
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @param \TKusy\Hl7FhirR4\ConditionalDeleteStatusType $conditionalDelete
     * @return self
     */
    public function setConditionalDelete(\TKusy\Hl7FhirR4\ConditionalDeleteStatusType $conditionalDelete)
    {
        $this->conditionalDelete = $conditionalDelete;
        return $this;
    }

    /**
     * Adds as referencePolicy
     *
     * A set of flags that defines how references are supported.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceHandlingPolicyType $referencePolicy
     */
    public function addToReferencePolicy(\TKusy\Hl7FhirR4\ReferenceHandlingPolicyType $referencePolicy)
    {
        $this->referencePolicy[] = $referencePolicy;
        return $this;
    }

    /**
     * isset referencePolicy
     *
     * A set of flags that defines how references are supported.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencePolicy($index)
    {
        return isset($this->referencePolicy[$index]);
    }

    /**
     * unset referencePolicy
     *
     * A set of flags that defines how references are supported.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencePolicy($index)
    {
        unset($this->referencePolicy[$index]);
    }

    /**
     * Gets as referencePolicy
     *
     * A set of flags that defines how references are supported.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceHandlingPolicyType[]
     */
    public function getReferencePolicy()
    {
        return $this->referencePolicy;
    }

    /**
     * Sets a new referencePolicy
     *
     * A set of flags that defines how references are supported.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceHandlingPolicyType[] $referencePolicy
     * @return self
     */
    public function setReferencePolicy(array $referencePolicy)
    {
        $this->referencePolicy = $referencePolicy;
        return $this;
    }

    /**
     * Adds as searchInclude
     *
     * A list of _include values supported by the server.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $searchInclude
     */
    public function addToSearchInclude(\TKusy\Hl7FhirR4\StringType $searchInclude)
    {
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * isset searchInclude
     *
     * A list of _include values supported by the server.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchInclude($index)
    {
        return isset($this->searchInclude[$index]);
    }

    /**
     * unset searchInclude
     *
     * A list of _include values supported by the server.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchInclude($index)
    {
        unset($this->searchInclude[$index]);
    }

    /**
     * Gets as searchInclude
     *
     * A list of _include values supported by the server.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getSearchInclude()
    {
        return $this->searchInclude;
    }

    /**
     * Sets a new searchInclude
     *
     * A list of _include values supported by the server.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $searchInclude
     * @return self
     */
    public function setSearchInclude(array $searchInclude)
    {
        $this->searchInclude = $searchInclude;
        return $this;
    }

    /**
     * Adds as searchRevInclude
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $searchRevInclude
     */
    public function addToSearchRevInclude(\TKusy\Hl7FhirR4\StringType $searchRevInclude)
    {
        $this->searchRevInclude[] = $searchRevInclude;
        return $this;
    }

    /**
     * isset searchRevInclude
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchRevInclude($index)
    {
        return isset($this->searchRevInclude[$index]);
    }

    /**
     * unset searchRevInclude
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchRevInclude($index)
    {
        unset($this->searchRevInclude[$index]);
    }

    /**
     * Gets as searchRevInclude
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getSearchRevInclude()
    {
        return $this->searchRevInclude;
    }

    /**
     * Sets a new searchRevInclude
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $searchRevInclude
     * @return self
     */
    public function setSearchRevInclude(array $searchRevInclude)
    {
        $this->searchRevInclude = $searchRevInclude;
        return $this;
    }

    /**
     * Adds as searchParam
     *
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CapabilityStatementSearchParamType $searchParam
     */
    public function addToSearchParam(\TKusy\Hl7FhirR4\CapabilityStatementSearchParamType $searchParam)
    {
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * isset searchParam
     *
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
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
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
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
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     *
     * @return \TKusy\Hl7FhirR4\CapabilityStatementSearchParamType[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * Sets a new searchParam
     *
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     *
     * @param \TKusy\Hl7FhirR4\CapabilityStatementSearchParamType[] $searchParam
     * @return self
     */
    public function setSearchParam(array $searchParam)
    {
        $this->searchParam = $searchParam;
        return $this;
    }

    /**
     * Adds as operation
     *
     * Definition of an operation or a named query together with its parameters and their meaning and type. Consult the definition of the operation for details about how to invoke the operation, and the parameters.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CapabilityStatementOperationType $operation
     */
    public function addToOperation(\TKusy\Hl7FhirR4\CapabilityStatementOperationType $operation)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * isset operation
     *
     * Definition of an operation or a named query together with its parameters and their meaning and type. Consult the definition of the operation for details about how to invoke the operation, and the parameters.
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
     * Definition of an operation or a named query together with its parameters and their meaning and type. Consult the definition of the operation for details about how to invoke the operation, and the parameters.
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
     * Definition of an operation or a named query together with its parameters and their meaning and type. Consult the definition of the operation for details about how to invoke the operation, and the parameters.
     *
     * @return \TKusy\Hl7FhirR4\CapabilityStatementOperationType[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Definition of an operation or a named query together with its parameters and their meaning and type. Consult the definition of the operation for details about how to invoke the operation, and the parameters.
     *
     * @param \TKusy\Hl7FhirR4\CapabilityStatementOperationType[] $operation
     * @return self
     */
    public function setOperation(array $operation)
    {
        $this->operation = $operation;
        return $this;
    }


}

