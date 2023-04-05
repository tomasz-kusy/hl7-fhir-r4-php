<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ProvenanceAgentType
 *
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 * XSD Type: Provenance.Agent
 */
class ProvenanceAgentType extends BackboneElementType
{

    /**
     * The Functional Role of the agent with respect to the activity.
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
     * Indicates who or what performed in the event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $who
     */
    private $who = null;

    /**
     * The agent that delegated authority to perform the activity performed by the agent.who element.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf
     */
    private $onBehalfOf = null;

    /**
     * Gets as type
     *
     * The Functional Role of the agent with respect to the activity.
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
     * The Functional Role of the agent with respect to the activity.
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
     * Indicates who or what performed in the event.
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
     * Indicates who or what performed in the event.
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
     * Gets as onBehalfOf
     *
     * The agent that delegated authority to perform the activity performed by the agent.who element.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * Sets a new onBehalfOf
     *
     * The agent that delegated authority to perform the activity performed by the agent.who element.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf
     * @return self
     */
    public function setOnBehalfOf(?\TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf = null)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }


}

