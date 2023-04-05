<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GoalType
 *
 * Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Goal
 */
class GoalType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The state of the goal throughout its lifecycle.
     *
     * @var \TKusy\Hl7Fhir\R5\GoalLifecycleStatusType $lifecycleStatus
     */
    private $lifecycleStatus = null;

    /**
     * Describes the progression, or lack thereof, towards the goal against the target.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $achievementStatus
     */
    private $achievementStatus = null;

    /**
     * Indicates a category the goal falls within.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * After meeting the goal, ongoing activity is needed to sustain the goal objective.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $continuous
     */
    private $continuous = null;

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $description
     */
    private $description = null;

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $startDate
     */
    private $startDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $startCodeableConcept
     */
    private $startCodeableConcept = null;

    /**
     * Indicates what should be done by when.
     *
     * @var \TKusy\Hl7Fhir\R5\GoalTargetType[] $target
     */
    private $target = null;

    /**
     * Identifies when the current status. I.e. When initially created, when achieved, when cancelled, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $statusDate
     */
    private $statusDate = null;

    /**
     * Captures the reason for the current status.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $statusReason
     */
    private $statusReason = null;

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    private $source = null;

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $addresses
     */
    private $addresses = null;

    /**
     * Any comments related to the goal.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $outcome
     */
    private $outcome = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this goal by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as lifecycleStatus
     *
     * The state of the goal throughout its lifecycle.
     *
     * @return \TKusy\Hl7Fhir\R5\GoalLifecycleStatusType
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
     * @param \TKusy\Hl7Fhir\R5\GoalLifecycleStatusType $lifecycleStatus
     * @return self
     */
    public function setLifecycleStatus(\TKusy\Hl7Fhir\R5\GoalLifecycleStatusType $lifecycleStatus)
    {
        $this->lifecycleStatus = $lifecycleStatus;
        return $this;
    }

    /**
     * Gets as achievementStatus
     *
     * Describes the progression, or lack thereof, towards the goal against the target.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $achievementStatus
     * @return self
     */
    public function setAchievementStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $achievementStatus = null)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as continuous
     *
     * After meeting the goal, ongoing activity is needed to sustain the goal objective.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getContinuous()
    {
        return $this->continuous;
    }

    /**
     * Sets a new continuous
     *
     * After meeting the goal, ongoing activity is needed to sustain the goal objective.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $continuous
     * @return self
     */
    public function setContinuous(?\TKusy\Hl7Fhir\R5\BooleanType $continuous = null)
    {
        $this->continuous = $continuous;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(?\TKusy\Hl7Fhir\R5\CodeableConceptType $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as description
     *
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R5\CodeableConceptType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Identifies the patient, group or organization for whom the goal is being established.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $startDate
     * @return self
     */
    public function setStartDate(?\TKusy\Hl7Fhir\R5\DateType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as startCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStartCodeableConcept()
    {
        return $this->startCodeableConcept;
    }

    /**
     * Sets a new startCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $startCodeableConcept
     * @return self
     */
    public function setStartCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $startCodeableConcept = null)
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
     * @param \TKusy\Hl7Fhir\R5\GoalTargetType $target
     */
    public function addToTarget(\TKusy\Hl7Fhir\R5\GoalTargetType $target)
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
     * @return \TKusy\Hl7Fhir\R5\GoalTargetType[]
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
     * @param \TKusy\Hl7Fhir\R5\GoalTargetType[] $target
     * @return self
     */
    public function setTarget(array $target = null)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as statusDate
     *
     * Identifies when the current status. I.e. When initially created, when achieved, when cancelled, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
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
     * @param \TKusy\Hl7Fhir\R5\DateType $statusDate
     * @return self
     */
    public function setStatusDate(?\TKusy\Hl7Fhir\R5\DateType $statusDate = null)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current status.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $statusReason
     * @return self
     */
    public function setStatusReason(?\TKusy\Hl7Fhir\R5\StringType $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as source
     *
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     * @return self
     */
    public function setSource(?\TKusy\Hl7Fhir\R5\ReferenceType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Adds as addresses
     *
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $addresses
     */
    public function addToAddresses(\TKusy\Hl7Fhir\R5\ReferenceType $addresses)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses = null)
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as outcome
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $outcome
     */
    public function addToOutcome(\TKusy\Hl7Fhir\R5\CodeableReferenceType $outcome)
    {
        $this->outcome[] = $outcome;
        return $this;
    }

    /**
     * isset outcome
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutcome($index)
    {
        return isset($this->outcome[$index]);
    }

    /**
     * unset outcome
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutcome($index)
    {
        unset($this->outcome[$index]);
    }

    /**
     * Gets as outcome
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * Identifies the change (or lack of change) at the point when the status of the goal is assessed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $outcome
     * @return self
     */
    public function setOutcome(array $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }


}

