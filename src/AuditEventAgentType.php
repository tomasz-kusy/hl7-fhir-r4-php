<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AuditEventAgentType
 *
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 * XSD Type: AuditEvent.Agent
 */
class AuditEventAgentType extends BackboneElementType
{

    /**
     * Specification of the participation type the user plays when performing the event.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $role
     */
    private $role = [
        
    ];

    /**
     * Reference to who this agent is that was involved in the event.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $who
     */
    private $who = null;

    /**
     * Alternative agent Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     *
     * @var \TKusy\Hl7FhirR4\StringType $altId
     */
    private $altId = null;

    /**
     * Human-meaningful name for the agent.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $requestor
     */
    private $requestor = null;

    /**
     * Where the event occurred.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $policy
     */
    private $policy = [
        
    ];

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $media
     */
    private $media = null;

    /**
     * Logical network location for application activity, if the activity has a network location.
     *
     * @var \TKusy\Hl7FhirR4\AuditEventNetworkType $network
     */
    private $network = null;

    /**
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $purposeOfUse
     */
    private $purposeOfUse = [
        
    ];

    /**
     * Gets as type
     *
     * Specification of the participation type the user plays when performing the event.
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
     * Specification of the participation type the user plays when performing the event.
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
     * Adds as role
     *
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $role
     */
    public function addToRole(\TKusy\Hl7FhirR4\CodeableConceptType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $role
     * @return self
     */
    public function setRole(array $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as who
     *
     * Reference to who this agent is that was involved in the event.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Sets a new who
     *
     * Reference to who this agent is that was involved in the event.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $who
     * @return self
     */
    public function setWho(\TKusy\Hl7FhirR4\ReferenceType $who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * Gets as altId
     *
     * Alternative agent Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getAltId()
    {
        return $this->altId;
    }

    /**
     * Sets a new altId
     *
     * Alternative agent Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     *
     * @param \TKusy\Hl7FhirR4\StringType $altId
     * @return self
     */
    public function setAltId(\TKusy\Hl7FhirR4\StringType $altId)
    {
        $this->altId = $altId;
        return $this;
    }

    /**
     * Gets as name
     *
     * Human-meaningful name for the agent.
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
     * Human-meaningful name for the agent.
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
     * Gets as requestor
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Sets a new requestor
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $requestor
     * @return self
     */
    public function setRequestor(\TKusy\Hl7FhirR4\BooleanType $requestor)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Gets as location
     *
     * Where the event occurred.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Where the event occurred.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as policy
     *
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UriType $policy
     */
    public function addToPolicy(\TKusy\Hl7FhirR4\UriType $policy)
    {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * isset policy
     *
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @return \TKusy\Hl7FhirR4\UriType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @param \TKusy\Hl7FhirR4\UriType[] $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Gets as media
     *
     * Type of media involved. Used when the event is about exporting/importing onto media.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets a new media
     *
     * Type of media involved. Used when the event is about exporting/importing onto media.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $media
     * @return self
     */
    public function setMedia(\TKusy\Hl7FhirR4\CodingType $media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * Gets as network
     *
     * Logical network location for application activity, if the activity has a network location.
     *
     * @return \TKusy\Hl7FhirR4\AuditEventNetworkType
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * Logical network location for application activity, if the activity has a network location.
     *
     * @param \TKusy\Hl7FhirR4\AuditEventNetworkType $network
     * @return self
     */
    public function setNetwork(\TKusy\Hl7FhirR4\AuditEventNetworkType $network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Adds as purposeOfUse
     *
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $purposeOfUse
     */
    public function addToPurposeOfUse(\TKusy\Hl7FhirR4\CodeableConceptType $purposeOfUse)
    {
        $this->purposeOfUse[] = $purposeOfUse;
        return $this;
    }

    /**
     * isset purposeOfUse
     *
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurposeOfUse($index)
    {
        return isset($this->purposeOfUse[$index]);
    }

    /**
     * unset purposeOfUse
     *
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurposeOfUse($index)
    {
        unset($this->purposeOfUse[$index]);
    }

    /**
     * Gets as purposeOfUse
     *
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getPurposeOfUse()
    {
        return $this->purposeOfUse;
    }

    /**
     * Sets a new purposeOfUse
     *
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $purposeOfUse
     * @return self
     */
    public function setPurposeOfUse(array $purposeOfUse)
    {
        $this->purposeOfUse = $purposeOfUse;
        return $this;
    }


}

