<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ProvenanceEntityType
 *
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 * XSD Type: Provenance.Entity
 */
class ProvenanceEntityType extends BackboneElementType
{

    /**
     * How the entity was used during the activity.
     *
     * @var \TKusy\Hl7FhirR4\ProvenanceEntityRoleType $role
     */
    private $role = null;

    /**
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute or relative.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $what
     */
    private $what = null;

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     *
     * @var \TKusy\Hl7FhirR4\ProvenanceAgentType[] $agent
     */
    private $agent = null;

    /**
     * Gets as role
     *
     * How the entity was used during the activity.
     *
     * @return \TKusy\Hl7FhirR4\ProvenanceEntityRoleType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * How the entity was used during the activity.
     *
     * @param \TKusy\Hl7FhirR4\ProvenanceEntityRoleType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7FhirR4\ProvenanceEntityRoleType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as what
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute or relative.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * Sets a new what
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute or relative.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $what
     * @return self
     */
    public function setWhat(\TKusy\Hl7FhirR4\ReferenceType $what)
    {
        $this->what = $what;
        return $this;
    }

    /**
     * Adds as agent
     *
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ProvenanceAgentType $agent
     */
    public function addToAgent(\TKusy\Hl7FhirR4\ProvenanceAgentType $agent)
    {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * isset agent
     *
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgent($index)
    {
        return isset($this->agent[$index]);
    }

    /**
     * unset agent
     *
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgent($index)
    {
        unset($this->agent[$index]);
    }

    /**
     * Gets as agent
     *
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     *
     * @return \TKusy\Hl7FhirR4\ProvenanceAgentType[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Sets a new agent
     *
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     *
     * @param \TKusy\Hl7FhirR4\ProvenanceAgentType[] $agent
     * @return self
     */
    public function setAgent(array $agent)
    {
        $this->agent = $agent;
        return $this;
    }


}

