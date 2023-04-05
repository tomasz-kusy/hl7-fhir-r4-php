<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AuditEventAgentType
 *
 * A record of an event relevant for purposes such as operations, privacy, security, maintenance, and performance analysis.
 * XSD Type: AuditEvent.Agent
 */
class AuditEventAgentType extends BackboneElementType
{

    /**
     * The Functional Role of the user when performing the event.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The structural roles of the agent indicating the agent's competency. The security role enabling the agent with respect to the activity.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $role
     */
    private $role = null;

    /**
     * Reference to who this agent is that was involved in the event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $who
     */
    private $who = null;

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $requestor
     */
    private $requestor = null;

    /**
     * Where the agent location is known, the agent location when the event occurred.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Where the policy(ies) are known that authorized the agent participation in the event. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $policy
     */
    private $policy = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $networkReference
     */
    private $networkReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $networkUri
     */
    private $networkUri = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $networkString
     */
    private $networkString = null;

    /**
     * The authorization (e.g., PurposeOfUse) that was used during the event being recorded.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $authorization
     */
    private $authorization = null;

    /**
     * Gets as type
     *
     * The Functional Role of the user when performing the event.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The Functional Role of the user when performing the event.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as role
     *
     * The structural roles of the agent indicating the agent's competency. The security role enabling the agent with respect to the activity.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    public function addToRole(\TKusy\Hl7Fhir\R5\CodeableConceptType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * The structural roles of the agent indicating the agent's competency. The security role enabling the agent with respect to the activity.
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
     * The structural roles of the agent indicating the agent's competency. The security role enabling the agent with respect to the activity.
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
     * The structural roles of the agent indicating the agent's competency. The security role enabling the agent with respect to the activity.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The structural roles of the agent indicating the agent's competency. The security role enabling the agent with respect to the activity.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as who
     *
     * Reference to who this agent is that was involved in the event.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $who
     * @return self
     */
    public function setWho(\TKusy\Hl7Fhir\R5\ReferenceType $who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * Gets as requestor
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
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
     * @param \TKusy\Hl7Fhir\R5\BooleanType $requestor
     * @return self
     */
    public function setRequestor(?\TKusy\Hl7Fhir\R5\BooleanType $requestor = null)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Gets as location
     *
     * Where the agent location is known, the agent location when the event occurred.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Where the agent location is known, the agent location when the event occurred.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as policy
     *
     * Where the policy(ies) are known that authorized the agent participation in the event. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $policy
     */
    public function addToPolicy(\TKusy\Hl7Fhir\R5\UriType $policy)
    {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * isset policy
     *
     * Where the policy(ies) are known that authorized the agent participation in the event. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
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
     * Where the policy(ies) are known that authorized the agent participation in the event. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
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
     * Where the policy(ies) are known that authorized the agent participation in the event. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Where the policy(ies) are known that authorized the agent participation in the event. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $policy
     * @return self
     */
    public function setPolicy(array $policy = null)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Gets as networkReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getNetworkReference()
    {
        return $this->networkReference;
    }

    /**
     * Sets a new networkReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $networkReference
     * @return self
     */
    public function setNetworkReference(?\TKusy\Hl7Fhir\R5\ReferenceType $networkReference = null)
    {
        $this->networkReference = $networkReference;
        return $this;
    }

    /**
     * Gets as networkUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getNetworkUri()
    {
        return $this->networkUri;
    }

    /**
     * Sets a new networkUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $networkUri
     * @return self
     */
    public function setNetworkUri(?\TKusy\Hl7Fhir\R5\UriType $networkUri = null)
    {
        $this->networkUri = $networkUri;
        return $this;
    }

    /**
     * Gets as networkString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getNetworkString()
    {
        return $this->networkString;
    }

    /**
     * Sets a new networkString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $networkString
     * @return self
     */
    public function setNetworkString(?\TKusy\Hl7Fhir\R5\StringType $networkString = null)
    {
        $this->networkString = $networkString;
        return $this;
    }

    /**
     * Adds as authorization
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being recorded.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $authorization
     */
    public function addToAuthorization(\TKusy\Hl7Fhir\R5\CodeableConceptType $authorization)
    {
        $this->authorization[] = $authorization;
        return $this;
    }

    /**
     * isset authorization
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being recorded.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorization($index)
    {
        return isset($this->authorization[$index]);
    }

    /**
     * unset authorization
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being recorded.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorization($index)
    {
        unset($this->authorization[$index]);
    }

    /**
     * Gets as authorization
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being recorded.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * Sets a new authorization
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being recorded.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $authorization
     * @return self
     */
    public function setAuthorization(array $authorization = null)
    {
        $this->authorization = $authorization;
        return $this;
    }


}

