<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PlanDefinitionActionType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 * XSD Type: PlanDefinition.Action
 */
class PlanDefinitionActionType extends BackboneElementType
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
     * A brief description of the action used to provide a summary to display to the user.
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
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     */
    private $code = [
        
    ];

    /**
     * A description of why this action is necessary or appropriate.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reason
     */
    private $reason = [
        
    ];

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @var \TKusy\Hl7FhirR4\RelatedArtifactType[] $documentation
     */
    private $documentation = [
        
    ];

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     *
     * @var \TKusy\Hl7FhirR4\IdType[] $goalId
     */
    private $goalId = [
        
    ];

    /**
     * A code or group definition that describes the intended subject of the action and its children, if any. (choose any one of subject*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * A code or group definition that describes the intended subject of the action and its children, if any. (choose any one of subject*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subjectReference
     */
    private $subjectReference = null;

    /**
     * A description of when the action should be triggered.
     *
     * @var \TKusy\Hl7FhirR4\TriggerDefinitionType[] $trigger
     */
    private $trigger = [
        
    ];

    /**
     * An expression that describes applicability criteria or start/stop conditions for the action.
     *
     * @var \TKusy\Hl7FhirR4\PlanDefinitionConditionType[] $condition
     */
    private $condition = [
        
    ];

    /**
     * Defines input data requirements for the action.
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementType[] $input
     */
    private $input = [
        
    ];

    /**
     * Defines the outputs of the action, if any.
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementType[] $output
     */
    private $output = [
        
    ];

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @var \TKusy\Hl7FhirR4\PlanDefinitionRelatedActionType[] $relatedAction
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
     * Indicates who should participate in performing the action described.
     *
     * @var \TKusy\Hl7FhirR4\PlanDefinitionParticipantType[] $participant
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
     * Defines the required behavior for the action.
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
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken. (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $definitionCanonical
     */
    private $definitionCanonical = null;

    /**
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken. (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UriType $definitionUri
     */
    private $definitionUri = null;

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $transform
     */
    private $transform = null;

    /**
     * Customizations that should be applied to the statically defined resource. For example, if the dosage of a medication must be computed based on the patient's weight, a customization would be used to specify an expression that calculated the weight, and the path on the resource that would contain the result.
     *
     * @var \TKusy\Hl7FhirR4\PlanDefinitionDynamicValueType[] $dynamicValue
     */
    private $dynamicValue = [
        
    ];

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     *
     * @var \TKusy\Hl7FhirR4\PlanDefinitionActionType[] $action
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
     * A brief description of the action used to provide a summary to display to the user.
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
     * A brief description of the action used to provide a summary to display to the user.
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
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
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
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
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
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
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
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
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
     * A code that provides meaning for the action or action group. For example, a section may have a LOINC code for the section of a documentation template.
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
     * Adds as reason
     *
     * A description of why this action is necessary or appropriate.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reason
     */
    public function addToReason(\TKusy\Hl7FhirR4\CodeableConceptType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * A description of why this action is necessary or appropriate.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $reason
     * @return self
     */
    public function setReason(array $reason)
    {
        $this->reason = $reason;
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
     * Adds as goalId
     *
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdType $goalId
     */
    public function addToGoalId(\TKusy\Hl7FhirR4\IdType $goalId)
    {
        $this->goalId[] = $goalId;
        return $this;
    }

    /**
     * isset goalId
     *
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoalId($index)
    {
        return isset($this->goalId[$index]);
    }

    /**
     * unset goalId
     *
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoalId($index)
    {
        unset($this->goalId[$index]);
    }

    /**
     * Gets as goalId
     *
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     *
     * @return \TKusy\Hl7FhirR4\IdType[]
     */
    public function getGoalId()
    {
        return $this->goalId;
    }

    /**
     * Sets a new goalId
     *
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition.
     *
     * @param \TKusy\Hl7FhirR4\IdType[] $goalId
     * @return self
     */
    public function setGoalId(array $goalId)
    {
        $this->goalId = $goalId;
        return $this;
    }

    /**
     * Gets as subjectCodeableConcept
     *
     * A code or group definition that describes the intended subject of the action and its children, if any. (choose any one of subject*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * Sets a new subjectCodeableConcept
     *
     * A code or group definition that describes the intended subject of the action and its children, if any. (choose any one of subject*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept
     * @return self
     */
    public function setSubjectCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * Gets as subjectReference
     *
     * A code or group definition that describes the intended subject of the action and its children, if any. (choose any one of subject*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * Sets a new subjectReference
     *
     * A code or group definition that describes the intended subject of the action and its children, if any. (choose any one of subject*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subjectReference
     * @return self
     */
    public function setSubjectReference(\TKusy\Hl7FhirR4\ReferenceType $subjectReference)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * Adds as trigger
     *
     * A description of when the action should be triggered.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TriggerDefinitionType $trigger
     */
    public function addToTrigger(\TKusy\Hl7FhirR4\TriggerDefinitionType $trigger)
    {
        $this->trigger[] = $trigger;
        return $this;
    }

    /**
     * isset trigger
     *
     * A description of when the action should be triggered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrigger($index)
    {
        return isset($this->trigger[$index]);
    }

    /**
     * unset trigger
     *
     * A description of when the action should be triggered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrigger($index)
    {
        unset($this->trigger[$index]);
    }

    /**
     * Gets as trigger
     *
     * A description of when the action should be triggered.
     *
     * @return \TKusy\Hl7FhirR4\TriggerDefinitionType[]
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * Sets a new trigger
     *
     * A description of when the action should be triggered.
     *
     * @param \TKusy\Hl7FhirR4\TriggerDefinitionType[] $trigger
     * @return self
     */
    public function setTrigger(array $trigger)
    {
        $this->trigger = $trigger;
        return $this;
    }

    /**
     * Adds as condition
     *
     * An expression that describes applicability criteria or start/stop conditions for the action.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PlanDefinitionConditionType $condition
     */
    public function addToCondition(\TKusy\Hl7FhirR4\PlanDefinitionConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * An expression that describes applicability criteria or start/stop conditions for the action.
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
     * An expression that describes applicability criteria or start/stop conditions for the action.
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
     * An expression that describes applicability criteria or start/stop conditions for the action.
     *
     * @return \TKusy\Hl7FhirR4\PlanDefinitionConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * An expression that describes applicability criteria or start/stop conditions for the action.
     *
     * @param \TKusy\Hl7FhirR4\PlanDefinitionConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
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
     * @param \TKusy\Hl7FhirR4\DataRequirementType $input
     */
    public function addToInput(\TKusy\Hl7FhirR4\DataRequirementType $input)
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
     * @return \TKusy\Hl7FhirR4\DataRequirementType[]
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
     * @param \TKusy\Hl7FhirR4\DataRequirementType[] $input
     * @return self
     */
    public function setInput(array $input)
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
     * @param \TKusy\Hl7FhirR4\DataRequirementType $output
     */
    public function addToOutput(\TKusy\Hl7FhirR4\DataRequirementType $output)
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
     * @return \TKusy\Hl7FhirR4\DataRequirementType[]
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
     * @param \TKusy\Hl7FhirR4\DataRequirementType[] $output
     * @return self
     */
    public function setOutput(array $output)
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
     * @param \TKusy\Hl7FhirR4\PlanDefinitionRelatedActionType $relatedAction
     */
    public function addToRelatedAction(\TKusy\Hl7FhirR4\PlanDefinitionRelatedActionType $relatedAction)
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
     * @return \TKusy\Hl7FhirR4\PlanDefinitionRelatedActionType[]
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
     * @param \TKusy\Hl7FhirR4\PlanDefinitionRelatedActionType[] $relatedAction
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
     * Indicates who should participate in performing the action described.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PlanDefinitionParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7FhirR4\PlanDefinitionParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * Indicates who should participate in performing the action described.
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
     * Indicates who should participate in performing the action described.
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
     * Indicates who should participate in performing the action described.
     *
     * @return \TKusy\Hl7FhirR4\PlanDefinitionParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \TKusy\Hl7FhirR4\PlanDefinitionParticipantType[] $participant
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
     * Defines the required behavior for the action.
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
     * Defines the required behavior for the action.
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
     * Gets as definitionCanonical
     *
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken. (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * Sets a new definitionCanonical
     *
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken. (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $definitionCanonical
     * @return self
     */
    public function setDefinitionCanonical(\TKusy\Hl7FhirR4\CanonicalType $definitionCanonical)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * Gets as definitionUri
     *
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken. (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getDefinitionUri()
    {
        return $this->definitionUri;
    }

    /**
     * Sets a new definitionUri
     *
     * A reference to an ActivityDefinition that describes the action to be taken in detail, or a PlanDefinition that describes a series of actions to be taken. (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UriType $definitionUri
     * @return self
     */
    public function setDefinitionUri(\TKusy\Hl7FhirR4\UriType $definitionUri)
    {
        $this->definitionUri = $definitionUri;
        return $this;
    }

    /**
     * Gets as transform
     *
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
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
     * @param \TKusy\Hl7FhirR4\CanonicalType $transform
     * @return self
     */
    public function setTransform(\TKusy\Hl7FhirR4\CanonicalType $transform)
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
     * @param \TKusy\Hl7FhirR4\PlanDefinitionDynamicValueType $dynamicValue
     */
    public function addToDynamicValue(\TKusy\Hl7FhirR4\PlanDefinitionDynamicValueType $dynamicValue)
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
     * @return \TKusy\Hl7FhirR4\PlanDefinitionDynamicValueType[]
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
     * @param \TKusy\Hl7FhirR4\PlanDefinitionDynamicValueType[] $dynamicValue
     * @return self
     */
    public function setDynamicValue(array $dynamicValue)
    {
        $this->dynamicValue = $dynamicValue;
        return $this;
    }

    /**
     * Adds as action
     *
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PlanDefinitionActionType $action
     */
    public function addToAction(\TKusy\Hl7FhirR4\PlanDefinitionActionType $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
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
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
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
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     *
     * @return \TKusy\Hl7FhirR4\PlanDefinitionActionType[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     *
     * @param \TKusy\Hl7FhirR4\PlanDefinitionActionType[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }


}

