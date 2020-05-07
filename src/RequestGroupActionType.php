<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RequestGroupActionType
 *
 * A group of related requests that can be used to capture intended activities that have inter-dependencies such as "give this medication after that one".
 * XSD Type: RequestGroup.Action
 */
class RequestGroupActionType extends BackboneElementType
{

    /**
     * A user-visible prefix for the action.
     *
     * @var \TKusy\Hl7FhirR4\StringType $prefix
     */
    private $prefix = null;

    /**
     * The title of the action displayed to a user.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * A short description of the action used to provide a summary to display to the user.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     *
     * @var \TKusy\Hl7FhirR4\StringType $textEquivalent
     */
    private $textEquivalent = null;

    /**
     * Indicates how quickly the action should be addressed with respect to other actions.
     *
     * @var \TKusy\Hl7FhirR4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a section of a documentation template.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     */
    private $code = [
        
    ];

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @var \TKusy\Hl7FhirR4\RelatedArtifactType[] $documentation
     */
    private $documentation = [
        
    ];

    /**
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     *
     * @var \TKusy\Hl7FhirR4\RequestGroupConditionType[] $condition
     */
    private $condition = [
        
    ];

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @var \TKusy\Hl7FhirR4\RequestGroupRelatedActionType[] $relatedAction
     */
    private $relatedAction = [
        
    ];

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $timingDateTime
     */
    private $timingDateTime = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AgeType $timingAge
     */
    private $timingAge = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $timingPeriod
     */
    private $timingPeriod = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $timingDuration
     */
    private $timingDuration = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $timingRange
     */
    private $timingRange = null;

    /**
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $timingTiming
     */
    private $timingTiming = null;

    /**
     * The participant that should perform or be responsible for this action.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $participant
     */
    private $participant = [
        
    ];

    /**
     * The type of action to perform (create, update, remove).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Defines the grouping behavior for the action and its children.
     *
     * @var \TKusy\Hl7FhirR4\ActionGroupingBehaviorType $groupingBehavior
     */
    private $groupingBehavior = null;

    /**
     * Defines the selection behavior for the action and its children.
     *
     * @var \TKusy\Hl7FhirR4\ActionSelectionBehaviorType $selectionBehavior
     */
    private $selectionBehavior = null;

    /**
     * Defines expectations around whether an action is required.
     *
     * @var \TKusy\Hl7FhirR4\ActionRequiredBehaviorType $requiredBehavior
     */
    private $requiredBehavior = null;

    /**
     * Defines whether the action should usually be preselected.
     *
     * @var \TKusy\Hl7FhirR4\ActionPrecheckBehaviorType $precheckBehavior
     */
    private $precheckBehavior = null;

    /**
     * Defines whether the action can be selected multiple times.
     *
     * @var \TKusy\Hl7FhirR4\ActionCardinalityBehaviorType $cardinalityBehavior
     */
    private $cardinalityBehavior = null;

    /**
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $resource
     */
    private $resource = null;

    /**
     * Sub actions.
     *
     * @var \TKusy\Hl7FhirR4\RequestGroupActionType[] $action
     */
    private $action = [
        
    ];

    /**
     * Gets as prefix
     *
     * A user-visible prefix for the action.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets a new prefix
     *
     * A user-visible prefix for the action.
     *
     * @param \TKusy\Hl7FhirR4\StringType $prefix
     * @return self
     */
    public function setPrefix(\TKusy\Hl7FhirR4\StringType $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Gets as title
     *
     * The title of the action displayed to a user.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The title of the action displayed to a user.
     *
     * @param \TKusy\Hl7FhirR4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7FhirR4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as description
     *
     * A short description of the action used to provide a summary to display to the user.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A short description of the action used to provide a summary to display to the user.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as textEquivalent
     *
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getTextEquivalent()
    {
        return $this->textEquivalent;
    }

    /**
     * Sets a new textEquivalent
     *
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     *
     * @param \TKusy\Hl7FhirR4\StringType $textEquivalent
     * @return self
     */
    public function setTextEquivalent(\TKusy\Hl7FhirR4\StringType $textEquivalent)
    {
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the action should be addressed with respect to other actions.
     *
     * @return \TKusy\Hl7FhirR4\RequestPriorityType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Indicates how quickly the action should be addressed with respect to other actions.
     *
     * @param \TKusy\Hl7FhirR4\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\RequestPriorityType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Adds as code
     *
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a section of a documentation template.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a section of a documentation template.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a section of a documentation template.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a section of a documentation template.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a section of a documentation template.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as documentation
     *
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RelatedArtifactType $documentation
     */
    public function addToDocumentation(\TKusy\Hl7FhirR4\RelatedArtifactType $documentation)
    {
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * isset documentation
     *
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentation($index)
    {
        return isset($this->documentation[$index]);
    }

    /**
     * unset documentation
     *
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentation($index)
    {
        unset($this->documentation[$index]);
    }

    /**
     * Gets as documentation
     *
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @return \TKusy\Hl7FhirR4\RelatedArtifactType[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @param \TKusy\Hl7FhirR4\RelatedArtifactType[] $documentation
     * @return self
     */
    public function setDocumentation(array $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as condition
     *
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RequestGroupConditionType $condition
     */
    public function addToCondition(\TKusy\Hl7FhirR4\RequestGroupConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     *
     * @return \TKusy\Hl7FhirR4\RequestGroupConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     *
     * @param \TKusy\Hl7FhirR4\RequestGroupConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as relatedAction
     *
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RequestGroupRelatedActionType $relatedAction
     */
    public function addToRelatedAction(\TKusy\Hl7FhirR4\RequestGroupRelatedActionType $relatedAction)
    {
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * isset relatedAction
     *
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedAction($index)
    {
        return isset($this->relatedAction[$index]);
    }

    /**
     * unset relatedAction
     *
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedAction($index)
    {
        unset($this->relatedAction[$index]);
    }

    /**
     * Gets as relatedAction
     *
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @return \TKusy\Hl7FhirR4\RequestGroupRelatedActionType[]
     */
    public function getRelatedAction()
    {
        return $this->relatedAction;
    }

    /**
     * Sets a new relatedAction
     *
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @param \TKusy\Hl7FhirR4\RequestGroupRelatedActionType[] $relatedAction
     * @return self
     */
    public function setRelatedAction(array $relatedAction)
    {
        $this->relatedAction = $relatedAction;
        return $this;
    }

    /**
     * Gets as timingDateTime
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * Sets a new timingDateTime
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $timingDateTime
     * @return self
     */
    public function setTimingDateTime(\TKusy\Hl7FhirR4\DateTimeType $timingDateTime)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * Gets as timingAge
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AgeType
     */
    public function getTimingAge()
    {
        return $this->timingAge;
    }

    /**
     * Sets a new timingAge
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AgeType $timingAge
     * @return self
     */
    public function setTimingAge(\TKusy\Hl7FhirR4\AgeType $timingAge)
    {
        $this->timingAge = $timingAge;
        return $this;
    }

    /**
     * Gets as timingPeriod
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * Sets a new timingPeriod
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $timingPeriod
     * @return self
     */
    public function setTimingPeriod(\TKusy\Hl7FhirR4\PeriodType $timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Gets as timingDuration
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }

    /**
     * Sets a new timingDuration
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $timingDuration
     * @return self
     */
    public function setTimingDuration(\TKusy\Hl7FhirR4\DurationType $timingDuration)
    {
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * Gets as timingRange
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }

    /**
     * Sets a new timingRange
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $timingRange
     * @return self
     */
    public function setTimingRange(\TKusy\Hl7FhirR4\RangeType $timingRange)
    {
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * Gets as timingTiming
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Sets a new timingTiming
     *
     * An optional value describing when the action should be performed. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $timingTiming
     * @return self
     */
    public function setTimingTiming(\TKusy\Hl7FhirR4\TimingType $timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Adds as participant
     *
     * The participant that should perform or be responsible for this action.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $participant
     */
    public function addToParticipant(\TKusy\Hl7FhirR4\ReferenceType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * The participant that should perform or be responsible for this action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParticipant($index)
    {
        return isset($this->participant[$index]);
    }

    /**
     * unset participant
     *
     * The participant that should perform or be responsible for this action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParticipant($index)
    {
        unset($this->participant[$index]);
    }

    /**
     * Gets as participant
     *
     * The participant that should perform or be responsible for this action.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * The participant that should perform or be responsible for this action.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $participant
     * @return self
     */
    public function setParticipant(array $participant)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of action to perform (create, update, remove).
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
     * The type of action to perform (create, update, remove).
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
     * Gets as groupingBehavior
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return \TKusy\Hl7FhirR4\ActionGroupingBehaviorType
     */
    public function getGroupingBehavior()
    {
        return $this->groupingBehavior;
    }

    /**
     * Sets a new groupingBehavior
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @param \TKusy\Hl7FhirR4\ActionGroupingBehaviorType $groupingBehavior
     * @return self
     */
    public function setGroupingBehavior(\TKusy\Hl7FhirR4\ActionGroupingBehaviorType $groupingBehavior)
    {
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Gets as selectionBehavior
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return \TKusy\Hl7FhirR4\ActionSelectionBehaviorType
     */
    public function getSelectionBehavior()
    {
        return $this->selectionBehavior;
    }

    /**
     * Sets a new selectionBehavior
     *
     * Defines the selection behavior for the action and its children.
     *
     * @param \TKusy\Hl7FhirR4\ActionSelectionBehaviorType $selectionBehavior
     * @return self
     */
    public function setSelectionBehavior(\TKusy\Hl7FhirR4\ActionSelectionBehaviorType $selectionBehavior)
    {
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Gets as requiredBehavior
     *
     * Defines expectations around whether an action is required.
     *
     * @return \TKusy\Hl7FhirR4\ActionRequiredBehaviorType
     */
    public function getRequiredBehavior()
    {
        return $this->requiredBehavior;
    }

    /**
     * Sets a new requiredBehavior
     *
     * Defines expectations around whether an action is required.
     *
     * @param \TKusy\Hl7FhirR4\ActionRequiredBehaviorType $requiredBehavior
     * @return self
     */
    public function setRequiredBehavior(\TKusy\Hl7FhirR4\ActionRequiredBehaviorType $requiredBehavior)
    {
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Gets as precheckBehavior
     *
     * Defines whether the action should usually be preselected.
     *
     * @return \TKusy\Hl7FhirR4\ActionPrecheckBehaviorType
     */
    public function getPrecheckBehavior()
    {
        return $this->precheckBehavior;
    }

    /**
     * Sets a new precheckBehavior
     *
     * Defines whether the action should usually be preselected.
     *
     * @param \TKusy\Hl7FhirR4\ActionPrecheckBehaviorType $precheckBehavior
     * @return self
     */
    public function setPrecheckBehavior(\TKusy\Hl7FhirR4\ActionPrecheckBehaviorType $precheckBehavior)
    {
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Gets as cardinalityBehavior
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return \TKusy\Hl7FhirR4\ActionCardinalityBehaviorType
     */
    public function getCardinalityBehavior()
    {
        return $this->cardinalityBehavior;
    }

    /**
     * Sets a new cardinalityBehavior
     *
     * Defines whether the action can be selected multiple times.
     *
     * @param \TKusy\Hl7FhirR4\ActionCardinalityBehaviorType $cardinalityBehavior
     * @return self
     */
    public function setCardinalityBehavior(\TKusy\Hl7FhirR4\ActionCardinalityBehaviorType $cardinalityBehavior)
    {
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7FhirR4\ReferenceType $resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Adds as action
     *
     * Sub actions.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RequestGroupActionType $action
     */
    public function addToAction(\TKusy\Hl7FhirR4\RequestGroupActionType $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * Sub actions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * Sub actions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * Sub actions.
     *
     * @return \TKusy\Hl7FhirR4\RequestGroupActionType[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Sub actions.
     *
     * @param \TKusy\Hl7FhirR4\RequestGroupActionType[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }


}

