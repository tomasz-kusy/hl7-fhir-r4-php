<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AuditEventEntityType
 *
 * A record of an event relevant for purposes such as operations, privacy, security, maintenance, and performance analysis.
 * XSD Type: AuditEvent.Entity
 */
class AuditEventEntityType extends BackboneElementType
{

    /**
     * Identifies a specific instance of the entity. The reference should be version specific. This is allowed to be a Parameters resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $what
     */
    private $what = null;

    /**
     * Code representing the role the entity played in the event being audited.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Security labels for the identified entity.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $securityLabel
     */
    private $securityLabel = null;

    /**
     * The query parameters for a query-type entities.
     *
     * @var \TKusy\Hl7Fhir\R5\Base64BinaryType $query
     */
    private $query = null;

    /**
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @var \TKusy\Hl7Fhir\R5\AuditEventDetailType[] $detail
     */
    private $detail = null;

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity in the activity. This is most used to indicate when persistence media (the entity) are used by an agent. For example when importing data from a device, the device would be described in an entity, and the user importing data from that media would be indicated as the entity.agent.
     *
     * @var \TKusy\Hl7Fhir\R5\AuditEventAgentType[] $agent
     */
    private $agent = null;

    /**
     * Gets as what
     *
     * Identifies a specific instance of the entity. The reference should be version specific. This is allowed to be a Parameters resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * Sets a new what
     *
     * Identifies a specific instance of the entity. The reference should be version specific. This is allowed to be a Parameters resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $what
     * @return self
     */
    public function setWhat(?\TKusy\Hl7Fhir\R5\ReferenceType $what = null)
    {
        $this->what = $what;
        return $this;
    }

    /**
     * Gets as role
     *
     * Code representing the role the entity played in the event being audited.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Code representing the role the entity played in the event being audited.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(?\TKusy\Hl7Fhir\R5\CodeableConceptType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as securityLabel
     *
     * Security labels for the identified entity.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $securityLabel
     */
    public function addToSecurityLabel(\TKusy\Hl7Fhir\R5\CodeableConceptType $securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * isset securityLabel
     *
     * Security labels for the identified entity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityLabel($index)
    {
        return isset($this->securityLabel[$index]);
    }

    /**
     * unset securityLabel
     *
     * Security labels for the identified entity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityLabel($index)
    {
        unset($this->securityLabel[$index]);
    }

    /**
     * Gets as securityLabel
     *
     * Security labels for the identified entity.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * Sets a new securityLabel
     *
     * Security labels for the identified entity.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $securityLabel
     * @return self
     */
    public function setSecurityLabel(array $securityLabel = null)
    {
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Gets as query
     *
     * The query parameters for a query-type entities.
     *
     * @return \TKusy\Hl7Fhir\R5\Base64BinaryType
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets a new query
     *
     * The query parameters for a query-type entities.
     *
     * @param \TKusy\Hl7Fhir\R5\Base64BinaryType $query
     * @return self
     */
    public function setQuery(?\TKusy\Hl7Fhir\R5\Base64BinaryType $query = null)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Adds as detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AuditEventDetailType $detail
     */
    public function addToDetail(\TKusy\Hl7Fhir\R5\AuditEventDetailType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @return \TKusy\Hl7Fhir\R5\AuditEventDetailType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @param \TKusy\Hl7Fhir\R5\AuditEventDetailType[] $detail
     * @return self
     */
    public function setDetail(array $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Adds as agent
     *
     * The entity is attributed to an agent to express the agent's responsibility for that entity in the activity. This is most used to indicate when persistence media (the entity) are used by an agent. For example when importing data from a device, the device would be described in an entity, and the user importing data from that media would be indicated as the entity.agent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AuditEventAgentType $agent
     */
    public function addToAgent(\TKusy\Hl7Fhir\R5\AuditEventAgentType $agent)
    {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * isset agent
     *
     * The entity is attributed to an agent to express the agent's responsibility for that entity in the activity. This is most used to indicate when persistence media (the entity) are used by an agent. For example when importing data from a device, the device would be described in an entity, and the user importing data from that media would be indicated as the entity.agent.
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
     * The entity is attributed to an agent to express the agent's responsibility for that entity in the activity. This is most used to indicate when persistence media (the entity) are used by an agent. For example when importing data from a device, the device would be described in an entity, and the user importing data from that media would be indicated as the entity.agent.
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
     * The entity is attributed to an agent to express the agent's responsibility for that entity in the activity. This is most used to indicate when persistence media (the entity) are used by an agent. For example when importing data from a device, the device would be described in an entity, and the user importing data from that media would be indicated as the entity.agent.
     *
     * @return \TKusy\Hl7Fhir\R5\AuditEventAgentType[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Sets a new agent
     *
     * The entity is attributed to an agent to express the agent's responsibility for that entity in the activity. This is most used to indicate when persistence media (the entity) are used by an agent. For example when importing data from a device, the device would be described in an entity, and the user importing data from that media would be indicated as the entity.agent.
     *
     * @param \TKusy\Hl7Fhir\R5\AuditEventAgentType[] $agent
     * @return self
     */
    public function setAgent(array $agent = null)
    {
        $this->agent = $agent;
        return $this;
    }


}

