<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing GoalType
 *
 * Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Goal
 */
class GoalType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The state of the goal throughout its lifecycle.
     *
     * @var \TKusy\Hl7FhirR4\GoalLifecycleStatusType $lifecycleStatus
     */
    private $lifecycleStatus = null;

    /**
     * Describes the progression, or lack thereof, towards the goal against the target.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $achievementStatus
     */
    private $achievementStatus = null;

    /**
     * Indicates a category the goal falls within.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $description
     */
    private $description = null;

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $startDate
     */
    private $startDate = null;

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $startCodeableConcept
     */
    private $startCodeableConcept = null;

    /**
     * Indicates what should be done by when.
     *
     * @var \TKusy\Hl7FhirR4\GoalTargetType[] $target
     */
    private $target = [
        
    ];

    /**
     * Identifies when the current status. I.e. When initially created, when achieved, when cancelled, etc.
     *
     * @var \TKusy\Hl7FhirR4\DateType $statusDate
     */
    private $statusDate = null;

    /**
     * Captures the reason for the current status.
     *
     * @var \TKusy\Hl7FhirR4\StringType $statusReason
     */
    private $statusReason = null;

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $expressedBy
     */
    private $expressedBy = null;

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $addresses
     */
    private $addresses = [
        
    ];

    /**
     * Any comments related to the goal.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $outcomeCode
     */
    private $outcomeCode = [
        
    ];

    /**
     * Details of what's changed (or not changed).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $outcomeReference
     */
    private $outcomeReference = [
        
    ];

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as lifecycleStatus
     *
     * The state of the goal throughout its lifecycle.
     *
     * @return \TKusy\Hl7FhirR4\GoalLifecycleStatusType
     */
    public function getLifecycleStatus()
    {
        return $this->lifecycleStatus;
    }

    /**
     * Sets a new lifecycleStatus
     *
     * The state of the goal throughout its lifecycle.
     *
     * @param \TKusy\Hl7FhirR4\GoalLifecycleStatusType $lifecycleStatus
     * @return self
     */
    public function setLifecycleStatus(\TKusy\Hl7FhirR4\GoalLifecycleStatusType $lifecycleStatus)
    {
        $this->lifecycleStatus = $lifecycleStatus;
        return $this;
    }

    /**
     * Gets as achievementStatus
     *
     * Describes the progression, or lack thereof, towards the goal against the target.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAchievementStatus()
    {
        return $this->achievementStatus;
    }

    /**
     * Sets a new achievementStatus
     *
     * Describes the progression, or lack thereof, towards the goal against the target.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $achievementStatus
     * @return self
     */
    public function setAchievementStatus(\TKusy\Hl7FhirR4\CodeableConceptType $achievementStatus)
    {
        $this->achievementStatus = $achievementStatus;
        return $this;
    }

    /**
     * Adds as category
     *
     * Indicates a category the goal falls within.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Indicates a category the goal falls within.
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
     * Indicates a category the goal falls within.
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
     * Indicates a category the goal falls within.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Indicates a category the goal falls within.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\CodeableConceptType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as description
     *
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\CodeableConceptType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Identifies the patient, group or organization for whom the goal is being established.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Identifies the patient, group or organization for whom the goal is being established.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $startDate
     * @return self
     */
    public function setStartDate(\TKusy\Hl7FhirR4\DateType $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as startCodeableConcept
     *
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStartCodeableConcept()
    {
        return $this->startCodeableConcept;
    }

    /**
     * Sets a new startCodeableConcept
     *
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $startCodeableConcept
     * @return self
     */
    public function setStartCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $startCodeableConcept)
    {
        $this->startCodeableConcept = $startCodeableConcept;
        return $this;
    }

    /**
     * Adds as target
     *
     * Indicates what should be done by when.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\GoalTargetType $target
     */
    public function addToTarget(\TKusy\Hl7FhirR4\GoalTargetType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * Indicates what should be done by when.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTarget($index)
    {
        return isset($this->target[$index]);
    }

    /**
     * unset target
     *
     * Indicates what should be done by when.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTarget($index)
    {
        unset($this->target[$index]);
    }

    /**
     * Gets as target
     *
     * Indicates what should be done by when.
     *
     * @return \TKusy\Hl7FhirR4\GoalTargetType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Indicates what should be done by when.
     *
     * @param \TKusy\Hl7FhirR4\GoalTargetType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as statusDate
     *
     * Identifies when the current status. I.e. When initially created, when achieved, when cancelled, etc.
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Sets a new statusDate
     *
     * Identifies when the current status. I.e. When initially created, when achieved, when cancelled, etc.
     *
     * @param \TKusy\Hl7FhirR4\DateType $statusDate
     * @return self
     */
    public function setStatusDate(\TKusy\Hl7FhirR4\DateType $statusDate)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current status.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * Captures the reason for the current status.
     *
     * @param \TKusy\Hl7FhirR4\StringType $statusReason
     * @return self
     */
    public function setStatusReason(\TKusy\Hl7FhirR4\StringType $statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as expressedBy
     *
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getExpressedBy()
    {
        return $this->expressedBy;
    }

    /**
     * Sets a new expressedBy
     *
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $expressedBy
     * @return self
     */
    public function setExpressedBy(\TKusy\Hl7FhirR4\ReferenceType $expressedBy)
    {
        $this->expressedBy = $expressedBy;
        return $this;
    }

    /**
     * Adds as addresses
     *
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $addresses
     */
    public function addToAddresses(\TKusy\Hl7FhirR4\ReferenceType $addresses)
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * isset addresses
     *
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Adds as note
     *
     * Any comments related to the goal.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Any comments related to the goal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Any comments related to the goal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Any comments related to the goal.
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Any comments related to the goal.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as outcomeCode
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $outcomeCode
     */
    public function addToOutcomeCode(\TKusy\Hl7FhirR4\CodeableConceptType $outcomeCode)
    {
        $this->outcomeCode[] = $outcomeCode;
        return $this;
    }

    /**
     * isset outcomeCode
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutcomeCode($index)
    {
        return isset($this->outcomeCode[$index]);
    }

    /**
     * unset outcomeCode
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutcomeCode($index)
    {
        unset($this->outcomeCode[$index]);
    }

    /**
     * Gets as outcomeCode
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getOutcomeCode()
    {
        return $this->outcomeCode;
    }

    /**
     * Sets a new outcomeCode
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $outcomeCode
     * @return self
     */
    public function setOutcomeCode(array $outcomeCode)
    {
        $this->outcomeCode = $outcomeCode;
        return $this;
    }

    /**
     * Adds as outcomeReference
     *
     * Details of what's changed (or not changed).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $outcomeReference
     */
    public function addToOutcomeReference(\TKusy\Hl7FhirR4\ReferenceType $outcomeReference)
    {
        $this->outcomeReference[] = $outcomeReference;
        return $this;
    }

    /**
     * isset outcomeReference
     *
     * Details of what's changed (or not changed).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutcomeReference($index)
    {
        return isset($this->outcomeReference[$index]);
    }

    /**
     * unset outcomeReference
     *
     * Details of what's changed (or not changed).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutcomeReference($index)
    {
        unset($this->outcomeReference[$index]);
    }

    /**
     * Gets as outcomeReference
     *
     * Details of what's changed (or not changed).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getOutcomeReference()
    {
        return $this->outcomeReference;
    }

    /**
     * Sets a new outcomeReference
     *
     * Details of what's changed (or not changed).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $outcomeReference
     * @return self
     */
    public function setOutcomeReference(array $outcomeReference)
    {
        $this->outcomeReference = $outcomeReference;
        return $this;
    }


}

