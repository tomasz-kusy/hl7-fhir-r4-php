<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AuditEventType
 *
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: AuditEvent
 */
class AuditEventType extends DomainResourceType
{

    /**
     * Identifier for a family of the event. For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $type
     */
    private $type = null;

    /**
     * Identifier for the category of event.
     *
     * @var \TKusy\Hl7FhirR4\CodingType[] $subtype
     */
    private $subtype = [
        
    ];

    /**
     * Indicator for type of action performed during the event that generated the audit.
     *
     * @var \TKusy\Hl7FhirR4\AuditEventActionType $action
     */
    private $action = null;

    /**
     * The period during which the activity occurred.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * The time when the event was recorded.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $recorded
     */
    private $recorded = null;

    /**
     * Indicates whether the event succeeded or failed.
     *
     * @var \TKusy\Hl7FhirR4\AuditEventOutcomeType $outcome
     */
    private $outcome = null;

    /**
     * A free text description of the outcome of the event.
     *
     * @var \TKusy\Hl7FhirR4\StringType $outcomeDesc
     */
    private $outcomeDesc = null;

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $purposeOfEvent
     */
    private $purposeOfEvent = [
        
    ];

    /**
     * An actor taking an active role in the event or activity that is logged.
     *
     * @var \TKusy\Hl7FhirR4\AuditEventAgentType[] $agent
     */
    private $agent = [
        
    ];

    /**
     * The system that is reporting the event.
     *
     * @var \TKusy\Hl7FhirR4\AuditEventSourceType $source
     */
    private $source = null;

    /**
     * Specific instances of data or objects that have been accessed.
     *
     * @var \TKusy\Hl7FhirR4\AuditEventEntityType[] $entity
     */
    private $entity = [
        
    ];

    /**
     * Gets as type
     *
     * Identifier for a family of the event. For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifier for a family of the event. For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodingType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as subtype
     *
     * Identifier for the category of event.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodingType $subtype
     */
    public function addToSubtype(\TKusy\Hl7FhirR4\CodingType $subtype)
    {
        $this->subtype[] = $subtype;
        return $this;
    }

    /**
     * isset subtype
     *
     * Identifier for the category of event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubtype($index)
    {
        return isset($this->subtype[$index]);
    }

    /**
     * unset subtype
     *
     * Identifier for the category of event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubtype($index)
    {
        unset($this->subtype[$index]);
    }

    /**
     * Gets as subtype
     *
     * Identifier for the category of event.
     *
     * @return \TKusy\Hl7FhirR4\CodingType[]
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Sets a new subtype
     *
     * Identifier for the category of event.
     *
     * @param \TKusy\Hl7FhirR4\CodingType[] $subtype
     * @return self
     */
    public function setSubtype(array $subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * Gets as action
     *
     * Indicator for type of action performed during the event that generated the audit.
     *
     * @return \TKusy\Hl7FhirR4\AuditEventActionType
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Indicator for type of action performed during the event that generated the audit.
     *
     * @param \TKusy\Hl7FhirR4\AuditEventActionType $action
     * @return self
     */
    public function setAction(\TKusy\Hl7FhirR4\AuditEventActionType $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period during which the activity occurred.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period during which the activity occurred.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as recorded
     *
     * The time when the event was recorded.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * Sets a new recorded
     *
     * The time when the event was recorded.
     *
     * @param \TKusy\Hl7FhirR4\InstantType $recorded
     * @return self
     */
    public function setRecorded(\TKusy\Hl7FhirR4\InstantType $recorded)
    {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * Indicates whether the event succeeded or failed.
     *
     * @return \TKusy\Hl7FhirR4\AuditEventOutcomeType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * Indicates whether the event succeeded or failed.
     *
     * @param \TKusy\Hl7FhirR4\AuditEventOutcomeType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7FhirR4\AuditEventOutcomeType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as outcomeDesc
     *
     * A free text description of the outcome of the event.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getOutcomeDesc()
    {
        return $this->outcomeDesc;
    }

    /**
     * Sets a new outcomeDesc
     *
     * A free text description of the outcome of the event.
     *
     * @param \TKusy\Hl7FhirR4\StringType $outcomeDesc
     * @return self
     */
    public function setOutcomeDesc(\TKusy\Hl7FhirR4\StringType $outcomeDesc)
    {
        $this->outcomeDesc = $outcomeDesc;
        return $this;
    }

    /**
     * Adds as purposeOfEvent
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $purposeOfEvent
     */
    public function addToPurposeOfEvent(\TKusy\Hl7FhirR4\CodeableConceptType $purposeOfEvent)
    {
        $this->purposeOfEvent[] = $purposeOfEvent;
        return $this;
    }

    /**
     * isset purposeOfEvent
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurposeOfEvent($index)
    {
        return isset($this->purposeOfEvent[$index]);
    }

    /**
     * unset purposeOfEvent
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurposeOfEvent($index)
    {
        unset($this->purposeOfEvent[$index]);
    }

    /**
     * Gets as purposeOfEvent
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getPurposeOfEvent()
    {
        return $this->purposeOfEvent;
    }

    /**
     * Sets a new purposeOfEvent
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $purposeOfEvent
     * @return self
     */
    public function setPurposeOfEvent(array $purposeOfEvent)
    {
        $this->purposeOfEvent = $purposeOfEvent;
        return $this;
    }

    /**
     * Adds as agent
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AuditEventAgentType $agent
     */
    public function addToAgent(\TKusy\Hl7FhirR4\AuditEventAgentType $agent)
    {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * isset agent
     *
     * An actor taking an active role in the event or activity that is logged.
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
     * An actor taking an active role in the event or activity that is logged.
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
     * An actor taking an active role in the event or activity that is logged.
     *
     * @return \TKusy\Hl7FhirR4\AuditEventAgentType[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Sets a new agent
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @param \TKusy\Hl7FhirR4\AuditEventAgentType[] $agent
     * @return self
     */
    public function setAgent(array $agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * Gets as source
     *
     * The system that is reporting the event.
     *
     * @return \TKusy\Hl7FhirR4\AuditEventSourceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The system that is reporting the event.
     *
     * @param \TKusy\Hl7FhirR4\AuditEventSourceType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7FhirR4\AuditEventSourceType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Adds as entity
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AuditEventEntityType $entity
     */
    public function addToEntity(\TKusy\Hl7FhirR4\AuditEventEntityType $entity)
    {
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * isset entity
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntity($index)
    {
        return isset($this->entity[$index]);
    }

    /**
     * unset entity
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntity($index)
    {
        unset($this->entity[$index]);
    }

    /**
     * Gets as entity
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @return \TKusy\Hl7FhirR4\AuditEventEntityType[]
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Sets a new entity
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param \TKusy\Hl7FhirR4\AuditEventEntityType[] $entity
     * @return self
     */
    public function setEntity(array $entity)
    {
        $this->entity = $entity;
        return $this;
    }


}

