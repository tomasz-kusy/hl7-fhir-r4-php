<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RequestOrchestrationActionType
 *
 * A set of related requests that can be used to capture intended activities that have inter-dependencies such as "give this medication after that one".
 * XSD Type: RequestOrchestration.Action
 */
class RequestOrchestrationActionType extends BackboneElementType
{

    /**
     * The linkId of the action from the PlanDefinition that corresponds to this action in the RequestOrchestration resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * A user-visible prefix for the action. For example a section or item numbering such as 1. or A.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $prefix
     */
    private $prefix = null;

    /**
     * The title of the action displayed to a user.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A short description of the action used to provide a summary to display to the user.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $textEquivalent
     */
    private $textEquivalent = null;

    /**
     * Indicates how quickly the action should be addressed with respect to other actions.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for a section of a documentation template.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     */
    private $code = null;

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $documentation
     */
    private $documentation = null;

    /**
     * Goals that are intended to be achieved by following the requests in this action.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $goal
     */
    private $goal = null;

    /**
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestrationConditionType[] $condition
     */
    private $condition = null;

    /**
     * Defines input data requirements for the action.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestrationInputType[] $input
     */
    private $input = null;

    /**
     * Defines the outputs of the action, if any.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestrationOutputType[] $output
     */
    private $output = null;

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestrationRelatedActionType[] $relatedAction
     */
    private $relatedAction = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime
     */
    private $timingDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $timingAge
     */
    private $timingAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $timingPeriod
     */
    private $timingPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $timingDuration
     */
    private $timingDuration = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $timingRange
     */
    private $timingRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $timingTiming
     */
    private $timingTiming = null;

    /**
     * Identifies the facility where the action will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $location
     */
    private $location = null;

    /**
     * The participant that should perform or be responsible for this action.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestrationParticipantType[] $participant
     */
    private $participant = null;

    /**
     * The type of action to perform (create, update, remove).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Defines the grouping behavior for the action and its children.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionGroupingBehaviorType $groupingBehavior
     */
    private $groupingBehavior = null;

    /**
     * Defines the selection behavior for the action and its children.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionSelectionBehaviorType $selectionBehavior
     */
    private $selectionBehavior = null;

    /**
     * Defines expectations around whether an action is required.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionRequiredBehaviorType $requiredBehavior
     */
    private $requiredBehavior = null;

    /**
     * Defines whether the action should usually be preselected.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionPrecheckBehaviorType $precheckBehavior
     */
    private $precheckBehavior = null;

    /**
     * Defines whether the action can be selected multiple times.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionCardinalityBehaviorType $cardinalityBehavior
     */
    private $cardinalityBehavior = null;

    /**
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $resource
     */
    private $resource = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $definitionCanonical
     */
    private $definitionCanonical = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $definitionUri
     */
    private $definitionUri = null;

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $transform
     */
    private $transform = null;

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestrationDynamicValueType[] $dynamicValue
     */
    private $dynamicValue = null;

    /**
     * Sub actions.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestrationActionType[] $action
     */
    private $action = null;

    /**
     * Gets as linkId
     *
     * The linkId of the action from the PlanDefinition that corresponds to this action in the RequestOrchestration resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * The linkId of the action from the PlanDefinition that corresponds to this action in the RequestOrchestration resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $linkId
     * @return self
     */
    public function setLinkId(?\TKusy\Hl7Fhir\R5\StringType $linkId = null)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as prefix
     *
     * A user-visible prefix for the action. For example a section or item numbering such as 1. or A.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets a new prefix
     *
     * A user-visible prefix for the action. For example a section or item numbering such as 1. or A.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $prefix
     * @return self
     */
    public function setPrefix(?\TKusy\Hl7Fhir\R5\StringType $prefix = null)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Gets as title
     *
     * The title of the action displayed to a user.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as description
     *
     * A short description of the action used to provide a summary to display to the user.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as textEquivalent
     *
     * A text equivalent of the action to be performed. This provides a human-interpretable description of the action when the definition is consumed by a system that might not be capable of interpreting it dynamically.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $textEquivalent
     * @return self
     */
    public function setTextEquivalent(?\TKusy\Hl7Fhir\R5\MarkdownType $textEquivalent = null)
    {
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the action should be addressed with respect to other actions.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestPriorityType
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
     * @param \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(?\TKusy\Hl7Fhir\R5\RequestPriorityType $priority = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code = null)
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
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $documentation
     */
    public function addToDocumentation(\TKusy\Hl7Fhir\R5\RelatedArtifactType $documentation)
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
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType[]
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
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $documentation
     * @return self
     */
    public function setDocumentation(array $documentation = null)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as goal
     *
     * Goals that are intended to be achieved by following the requests in this action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $goal
     */
    public function addToGoal(\TKusy\Hl7Fhir\R5\ReferenceType $goal)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * isset goal
     *
     * Goals that are intended to be achieved by following the requests in this action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoal($index)
    {
        return isset($this->goal[$index]);
    }

    /**
     * unset goal
     *
     * Goals that are intended to be achieved by following the requests in this action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoal($index)
    {
        unset($this->goal[$index]);
    }

    /**
     * Gets as goal
     *
     * Goals that are intended to be achieved by following the requests in this action.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Sets a new goal
     *
     * Goals that are intended to be achieved by following the requests in this action.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $goal
     * @return self
     */
    public function setGoal(array $goal = null)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * Adds as condition
     *
     * An expression that describes applicability criteria, or start/stop conditions for the action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationConditionType $condition
     */
    public function addToCondition(\TKusy\Hl7Fhir\R5\RequestOrchestrationConditionType $condition)
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
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestrationConditionType[]
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
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as input
     *
     * Defines input data requirements for the action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationInputType $input
     */
    public function addToInput(\TKusy\Hl7Fhir\R5\RequestOrchestrationInputType $input)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * isset input
     *
     * Defines input data requirements for the action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInput($index)
    {
        return isset($this->input[$index]);
    }

    /**
     * unset input
     *
     * Defines input data requirements for the action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInput($index)
    {
        unset($this->input[$index]);
    }

    /**
     * Gets as input
     *
     * Defines input data requirements for the action.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestrationInputType[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Sets a new input
     *
     * Defines input data requirements for the action.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationInputType[] $input
     * @return self
     */
    public function setInput(array $input = null)
    {
        $this->input = $input;
        return $this;
    }

    /**
     * Adds as output
     *
     * Defines the outputs of the action, if any.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationOutputType $output
     */
    public function addToOutput(\TKusy\Hl7Fhir\R5\RequestOrchestrationOutputType $output)
    {
        $this->output[] = $output;
        return $this;
    }

    /**
     * isset output
     *
     * Defines the outputs of the action, if any.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutput($index)
    {
        return isset($this->output[$index]);
    }

    /**
     * unset output
     *
     * Defines the outputs of the action, if any.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutput($index)
    {
        unset($this->output[$index]);
    }

    /**
     * Gets as output
     *
     * Defines the outputs of the action, if any.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestrationOutputType[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Sets a new output
     *
     * Defines the outputs of the action, if any.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationOutputType[] $output
     * @return self
     */
    public function setOutput(array $output = null)
    {
        $this->output = $output;
        return $this;
    }

    /**
     * Adds as relatedAction
     *
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationRelatedActionType $relatedAction
     */
    public function addToRelatedAction(\TKusy\Hl7Fhir\R5\RequestOrchestrationRelatedActionType $relatedAction)
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
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestrationRelatedActionType[]
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
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationRelatedActionType[] $relatedAction
     * @return self
     */
    public function setRelatedAction(array $relatedAction = null)
    {
        $this->relatedAction = $relatedAction;
        return $this;
    }

    /**
     * Gets as timingDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * Sets a new timingDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime
     * @return self
     */
    public function setTimingDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime = null)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * Gets as timingAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getTimingAge()
    {
        return $this->timingAge;
    }

    /**
     * Sets a new timingAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $timingAge
     * @return self
     */
    public function setTimingAge(?\TKusy\Hl7Fhir\R5\AgeType $timingAge = null)
    {
        $this->timingAge = $timingAge;
        return $this;
    }

    /**
     * Gets as timingPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * Sets a new timingPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $timingPeriod
     * @return self
     */
    public function setTimingPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $timingPeriod = null)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Gets as timingDuration
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }

    /**
     * Sets a new timingDuration
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $timingDuration
     * @return self
     */
    public function setTimingDuration(?\TKusy\Hl7Fhir\R5\DurationType $timingDuration = null)
    {
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * Gets as timingRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }

    /**
     * Sets a new timingRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $timingRange
     * @return self
     */
    public function setTimingRange(?\TKusy\Hl7Fhir\R5\RangeType $timingRange = null)
    {
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * Gets as timingTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Sets a new timingTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $timingTiming
     * @return self
     */
    public function setTimingTiming(?\TKusy\Hl7Fhir\R5\TimingType $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Gets as location
     *
     * Identifies the facility where the action will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Identifies the facility where the action will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as participant
     *
     * The participant that should perform or be responsible for this action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\RequestOrchestrationParticipantType $participant)
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
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestrationParticipantType[]
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
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant = null)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of action to perform (create, update, remove).
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
     * The type of action to perform (create, update, remove).
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
     * Gets as groupingBehavior
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionGroupingBehaviorType
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
     * @param \TKusy\Hl7Fhir\R5\ActionGroupingBehaviorType $groupingBehavior
     * @return self
     */
    public function setGroupingBehavior(?\TKusy\Hl7Fhir\R5\ActionGroupingBehaviorType $groupingBehavior = null)
    {
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * Gets as selectionBehavior
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionSelectionBehaviorType
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
     * @param \TKusy\Hl7Fhir\R5\ActionSelectionBehaviorType $selectionBehavior
     * @return self
     */
    public function setSelectionBehavior(?\TKusy\Hl7Fhir\R5\ActionSelectionBehaviorType $selectionBehavior = null)
    {
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * Gets as requiredBehavior
     *
     * Defines expectations around whether an action is required.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionRequiredBehaviorType
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
     * @param \TKusy\Hl7Fhir\R5\ActionRequiredBehaviorType $requiredBehavior
     * @return self
     */
    public function setRequiredBehavior(?\TKusy\Hl7Fhir\R5\ActionRequiredBehaviorType $requiredBehavior = null)
    {
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * Gets as precheckBehavior
     *
     * Defines whether the action should usually be preselected.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionPrecheckBehaviorType
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
     * @param \TKusy\Hl7Fhir\R5\ActionPrecheckBehaviorType $precheckBehavior
     * @return self
     */
    public function setPrecheckBehavior(?\TKusy\Hl7Fhir\R5\ActionPrecheckBehaviorType $precheckBehavior = null)
    {
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * Gets as cardinalityBehavior
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionCardinalityBehaviorType
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
     * @param \TKusy\Hl7Fhir\R5\ActionCardinalityBehaviorType $cardinalityBehavior
     * @return self
     */
    public function setCardinalityBehavior(?\TKusy\Hl7Fhir\R5\ActionCardinalityBehaviorType $cardinalityBehavior = null)
    {
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The resource that is the target of the action (e.g. CommunicationRequest).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $resource
     * @return self
     */
    public function setResource(?\TKusy\Hl7Fhir\R5\ReferenceType $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as definitionCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * Sets a new definitionCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $definitionCanonical
     * @return self
     */
    public function setDefinitionCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $definitionCanonical = null)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * Gets as definitionUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getDefinitionUri()
    {
        return $this->definitionUri;
    }

    /**
     * Sets a new definitionUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $definitionUri
     * @return self
     */
    public function setDefinitionUri(?\TKusy\Hl7Fhir\R5\UriType $definitionUri = null)
    {
        $this->definitionUri = $definitionUri;
        return $this;
    }

    /**
     * Gets as transform
     *
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $transform
     * @return self
     */
    public function setTransform(?\TKusy\Hl7Fhir\R5\CanonicalType $transform = null)
    {
        $this->transform = $transform;
        return $this;
    }

    /**
     * Adds as dynamicValue
     *
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationDynamicValueType $dynamicValue
     */
    public function addToDynamicValue(\TKusy\Hl7Fhir\R5\RequestOrchestrationDynamicValueType $dynamicValue)
    {
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * isset dynamicValue
     *
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDynamicValue($index)
    {
        return isset($this->dynamicValue[$index]);
    }

    /**
     * unset dynamicValue
     *
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDynamicValue($index)
    {
        unset($this->dynamicValue[$index]);
    }

    /**
     * Gets as dynamicValue
     *
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestrationDynamicValueType[]
     */
    public function getDynamicValue()
    {
        return $this->dynamicValue;
    }

    /**
     * Sets a new dynamicValue
     *
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationDynamicValueType[] $dynamicValue
     * @return self
     */
    public function setDynamicValue(array $dynamicValue = null)
    {
        $this->dynamicValue = $dynamicValue;
        return $this;
    }

    /**
     * Adds as action
     *
     * Sub actions.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationActionType $action
     */
    public function addToAction(\TKusy\Hl7Fhir\R5\RequestOrchestrationActionType $action)
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
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestrationActionType[]
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
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationActionType[] $action
     * @return self
     */
    public function setAction(array $action = null)
    {
        $this->action = $action;
        return $this;
    }


}

