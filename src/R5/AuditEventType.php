<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AuditEventType
 *
 * A record of an event relevant for purposes such as operations, privacy, security, maintenance, and performance analysis.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: AuditEvent
 */
class AuditEventType extends DomainResourceType
{

    /**
     * Classification of the type of event.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Describes what happened. The most specific code for the event.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Indicator for type of action performed during the event that generated the audit.
     *
     * @var \TKusy\Hl7Fhir\R5\AuditEventActionType $action
     */
    private $action = null;

    /**
     * Indicates and enables segmentation of various severity including debugging from critical.
     *
     * @var \TKusy\Hl7Fhir\R5\AuditEventSeverityType $severity
     */
    private $severity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $occurredPeriod
     */
    private $occurredPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurredDateTime
     */
    private $occurredDateTime = null;

    /**
     * The time when the event was recorded.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $recorded
     */
    private $recorded = null;

    /**
     * Indicates whether the event succeeded or failed. A free text descripiton can be given in outcome.text.
     *
     * @var \TKusy\Hl7Fhir\R5\AuditEventOutcomeType $outcome
     */
    private $outcome = null;

    /**
     * The authorization (e.g., PurposeOfUse) that was used during the event being recorded.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $authorization
     */
    private $authorization = null;

    /**
     * Allows tracing of authorizatino for the events and tracking whether proposals/recommendations were acted upon.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The patient element is available to enable deterministic tracking of activities that involve the patient as the subject of the data used in an activity.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * This will typically be the encounter the event occurred, but some events may be initiated prior to or after the official completion of an encounter but still be tied to the context of the encounter (e.g. pre-admission lab tests).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * An actor taking an active role in the event or activity that is logged.
     *
     * @var \TKusy\Hl7Fhir\R5\AuditEventAgentType[] $agent
     */
    private $agent = null;

    /**
     * The actor that is reporting the event.
     *
     * @var \TKusy\Hl7Fhir\R5\AuditEventSourceType $source
     */
    private $source = null;

    /**
     * Specific instances of data or objects that have been accessed.
     *
     * @var \TKusy\Hl7Fhir\R5\AuditEventEntityType[] $entity
     */
    private $entity = null;

    /**
     * Adds as category
     *
     * Classification of the type of event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Classification of the type of event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * Classification of the type of event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * Classification of the type of event.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Classification of the type of event.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * Describes what happened. The most specific code for the event.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Describes what happened. The most specific code for the event.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as action
     *
     * Indicator for type of action performed during the event that generated the audit.
     *
     * @return \TKusy\Hl7Fhir\R5\AuditEventActionType
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
     * @param \TKusy\Hl7Fhir\R5\AuditEventActionType $action
     * @return self
     */
    public function setAction(?\TKusy\Hl7Fhir\R5\AuditEventActionType $action = null)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as severity
     *
     * Indicates and enables segmentation of various severity including debugging from critical.
     *
     * @return \TKusy\Hl7Fhir\R5\AuditEventSeverityType
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Indicates and enables segmentation of various severity including debugging from critical.
     *
     * @param \TKusy\Hl7Fhir\R5\AuditEventSeverityType $severity
     * @return self
     */
    public function setSeverity(?\TKusy\Hl7Fhir\R5\AuditEventSeverityType $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as occurredPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOccurredPeriod()
    {
        return $this->occurredPeriod;
    }

    /**
     * Sets a new occurredPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $occurredPeriod
     * @return self
     */
    public function setOccurredPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $occurredPeriod = null)
    {
        $this->occurredPeriod = $occurredPeriod;
        return $this;
    }

    /**
     * Gets as occurredDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOccurredDateTime()
    {
        return $this->occurredDateTime;
    }

    /**
     * Sets a new occurredDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $occurredDateTime
     * @return self
     */
    public function setOccurredDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $occurredDateTime = null)
    {
        $this->occurredDateTime = $occurredDateTime;
        return $this;
    }

    /**
     * Gets as recorded
     *
     * The time when the event was recorded.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
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
     * @param \TKusy\Hl7Fhir\R5\InstantType $recorded
     * @return self
     */
    public function setRecorded(\TKusy\Hl7Fhir\R5\InstantType $recorded)
    {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * Indicates whether the event succeeded or failed. A free text descripiton can be given in outcome.text.
     *
     * @return \TKusy\Hl7Fhir\R5\AuditEventOutcomeType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * Indicates whether the event succeeded or failed. A free text descripiton can be given in outcome.text.
     *
     * @param \TKusy\Hl7Fhir\R5\AuditEventOutcomeType $outcome
     * @return self
     */
    public function setOutcome(?\TKusy\Hl7Fhir\R5\AuditEventOutcomeType $outcome = null)
    {
        $this->outcome = $outcome;
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

    /**
     * Adds as basedOn
     *
     * Allows tracing of authorizatino for the events and tracking whether proposals/recommendations were acted upon.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * Allows tracing of authorizatino for the events and tracking whether proposals/recommendations were acted upon.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * Allows tracing of authorizatino for the events and tracking whether proposals/recommendations were acted upon.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * Allows tracing of authorizatino for the events and tracking whether proposals/recommendations were acted upon.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * Allows tracing of authorizatino for the events and tracking whether proposals/recommendations were acted upon.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient element is available to enable deterministic tracking of activities that involve the patient as the subject of the data used in an activity.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The patient element is available to enable deterministic tracking of activities that involve the patient as the subject of the data used in an activity.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $patient
     * @return self
     */
    public function setPatient(?\TKusy\Hl7Fhir\R5\ReferenceType $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * This will typically be the encounter the event occurred, but some events may be initiated prior to or after the official completion of an encounter but still be tied to the context of the encounter (e.g. pre-admission lab tests).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * This will typically be the encounter the event occurred, but some events may be initiated prior to or after the official completion of an encounter but still be tied to the context of the encounter (e.g. pre-admission lab tests).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Adds as agent
     *
     * An actor taking an active role in the event or activity that is logged.
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
     * @return \TKusy\Hl7Fhir\R5\AuditEventAgentType[]
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
     * @param \TKusy\Hl7Fhir\R5\AuditEventAgentType[] $agent
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
     * The actor that is reporting the event.
     *
     * @return \TKusy\Hl7Fhir\R5\AuditEventSourceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The actor that is reporting the event.
     *
     * @param \TKusy\Hl7Fhir\R5\AuditEventSourceType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7Fhir\R5\AuditEventSourceType $source)
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
     * @param \TKusy\Hl7Fhir\R5\AuditEventEntityType $entity
     */
    public function addToEntity(\TKusy\Hl7Fhir\R5\AuditEventEntityType $entity)
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
     * @return \TKusy\Hl7Fhir\R5\AuditEventEntityType[]
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
     * @param \TKusy\Hl7Fhir\R5\AuditEventEntityType[] $entity
     * @return self
     */
    public function setEntity(array $entity = null)
    {
        $this->entity = $entity;
        return $this;
    }


}

