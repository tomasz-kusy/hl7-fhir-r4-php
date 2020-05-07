<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ProvenanceAgentType
 *
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 * XSD Type: Provenance.Agent
 */
class ProvenanceAgentType extends BackboneElementType
{

    /**
     * The participation the agent had with respect to the activity.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $role
     */
    private $role = [
        
    ];

    /**
     * The individual, device or organization that participated in the event.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $who
     */
    private $who = null;

    /**
     * The individual, device, or organization for whom the change was made.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $onBehalfOf
     */
    private $onBehalfOf = null;

    /**
     * Gets as type
     *
     * The participation the agent had with respect to the activity.
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
     * The participation the agent had with respect to the activity.
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
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
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
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
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
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
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
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
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
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
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
     * The individual, device or organization that participated in the event.
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
     * The individual, device or organization that participated in the event.
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
     * Gets as onBehalfOf
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * Sets a new onBehalfOf
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $onBehalfOf
     * @return self
     */
    public function setOnBehalfOf(\TKusy\Hl7FhirR4\ReferenceType $onBehalfOf)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }


}

