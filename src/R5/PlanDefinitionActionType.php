<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PlanDefinitionActionType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical and non-clinical artifacts such as clinical decision support rules, order sets, protocols, and drug quality specifications.
 * XSD Type: PlanDefinition.Action
 */
class PlanDefinitionActionType extends BackboneElementType
{

    /**
     * An identifier that is unique within the PlanDefinition to allow linkage within the realized CarePlan and/or RequestOrchestration.
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
     * The textual description of the action displayed to a user. For example, when the action is a test to be performed, the title would be the title of the test such as Assay by HPLC.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A brief description of the action used to provide a summary to display to the user.
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
     * A code that provides a meaning, grouping, or classification for the action or action group. For example, a section may have a LOINC code for the section of a documentation template. In pharmaceutical quality, an action (Test) such as pH could be classified as a physical property.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A description of why this action is necessary or appropriate.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $reason
     */
    private $reason = null;

    /**
     * Didactic or other informational resources associated with the action that can be provided to the CDS recipient. Information resources can include inline text commentary and links to web resources.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $documentation
     */
    private $documentation = null;

    /**
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition. In pharmaceutical quality, a goal represents acceptance criteria (Goal) for a given action (Test), so the goalId would be the unique id of a defined goal element establishing the acceptance criteria for the action.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType[] $goalId
     */
    private $goalId = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subjectReference
     */
    private $subjectReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $subjectCanonical
     */
    private $subjectCanonical = null;

    /**
     * A description of when the action should be triggered. When multiple triggers are specified on an action, any triggering event invokes the action.
     *
     * @var \TKusy\Hl7Fhir\R5\TriggerDefinitionType[] $trigger
     */
    private $trigger = null;

    /**
     * An expression that describes applicability criteria or start/stop conditions for the action.
     *
     * @var \TKusy\Hl7Fhir\R5\PlanDefinitionConditionType[] $condition
     */
    private $condition = null;

    /**
     * Defines input data requirements for the action.
     *
     * @var \TKusy\Hl7Fhir\R5\PlanDefinitionInputType[] $input
     */
    private $input = null;

    /**
     * Defines the outputs of the action, if any.
     *
     * @var \TKusy\Hl7Fhir\R5\PlanDefinitionOutputType[] $output
     */
    private $output = null;

    /**
     * A relationship to another action such as "before" or "30-60 minutes after start of".
     *
     * @var \TKusy\Hl7Fhir\R5\PlanDefinitionRelatedActionType[] $relatedAction
     */
    private $relatedAction = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $timingAge
     */
    private $timingAge = null;

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
     * Indicates who should participate in performing the action described.
     *
     * @var \TKusy\Hl7Fhir\R5\PlanDefinitionParticipantType[] $participant
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
     * Defines the required behavior for the action.
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
     * @var \TKusy\Hl7Fhir\R5\PlanDefinitionDynamicValueType[] $dynamicValue
     */
    private $dynamicValue = null;

    /**
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     *
     * @var \TKusy\Hl7Fhir\R5\PlanDefinitionActionType[] $action
     */
    private $action = null;

    /**
     * Gets as linkId
     *
     * An identifier that is unique within the PlanDefinition to allow linkage within the realized CarePlan and/or RequestOrchestration.
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
     * An identifier that is unique within the PlanDefinition to allow linkage within the realized CarePlan and/or RequestOrchestration.
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
     * The textual description of the action displayed to a user. For example, when the action is a test to be performed, the title would be the title of the test such as Assay by HPLC.
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
     * The textual description of the action displayed to a user. For example, when the action is a test to be performed, the title would be the title of the test such as Assay by HPLC.
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
     * A brief description of the action used to provide a summary to display to the user.
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
     * A brief description of the action used to provide a summary to display to the user.
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
     * Gets as code
     *
     * A code that provides a meaning, grouping, or classification for the action or action group. For example, a section may have a LOINC code for the section of a documentation template. In pharmaceutical quality, an action (Test) such as pH could be classified as a physical property.
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
     * A code that provides a meaning, grouping, or classification for the action or action group. For example, a section may have a LOINC code for the section of a documentation template. In pharmaceutical quality, an action (Test) such as pH could be classified as a physical property.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $reason)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
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
     * Adds as goalId
     *
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition. In pharmaceutical quality, a goal represents acceptance criteria (Goal) for a given action (Test), so the goalId would be the unique id of a defined goal element establishing the acceptance criteria for the action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdType $goalId
     */
    public function addToGoalId(\TKusy\Hl7Fhir\R5\IdType $goalId)
    {
        $this->goalId[] = $goalId;
        return $this;
    }

    /**
     * isset goalId
     *
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition. In pharmaceutical quality, a goal represents acceptance criteria (Goal) for a given action (Test), so the goalId would be the unique id of a defined goal element establishing the acceptance criteria for the action.
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
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition. In pharmaceutical quality, a goal represents acceptance criteria (Goal) for a given action (Test), so the goalId would be the unique id of a defined goal element establishing the acceptance criteria for the action.
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
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition. In pharmaceutical quality, a goal represents acceptance criteria (Goal) for a given action (Test), so the goalId would be the unique id of a defined goal element establishing the acceptance criteria for the action.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType[]
     */
    public function getGoalId()
    {
        return $this->goalId;
    }

    /**
     * Sets a new goalId
     *
     * Identifies goals that this action supports. The reference must be to a goal element defined within this plan definition. In pharmaceutical quality, a goal represents acceptance criteria (Goal) for a given action (Test), so the goalId would be the unique id of a defined goal element establishing the acceptance criteria for the action.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType[] $goalId
     * @return self
     */
    public function setGoalId(array $goalId = null)
    {
        $this->goalId = $goalId;
        return $this;
    }

    /**
     * Gets as subjectCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * Sets a new subjectCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept
     * @return self
     */
    public function setSubjectCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept = null)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * Gets as subjectReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * Sets a new subjectReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subjectReference
     * @return self
     */
    public function setSubjectReference(?\TKusy\Hl7Fhir\R5\ReferenceType $subjectReference = null)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * Gets as subjectCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getSubjectCanonical()
    {
        return $this->subjectCanonical;
    }

    /**
     * Sets a new subjectCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $subjectCanonical
     * @return self
     */
    public function setSubjectCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $subjectCanonical = null)
    {
        $this->subjectCanonical = $subjectCanonical;
        return $this;
    }

    /**
     * Adds as trigger
     *
     * A description of when the action should be triggered. When multiple triggers are specified on an action, any triggering event invokes the action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TriggerDefinitionType $trigger
     */
    public function addToTrigger(\TKusy\Hl7Fhir\R5\TriggerDefinitionType $trigger)
    {
        $this->trigger[] = $trigger;
        return $this;
    }

    /**
     * isset trigger
     *
     * A description of when the action should be triggered. When multiple triggers are specified on an action, any triggering event invokes the action.
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
     * A description of when the action should be triggered. When multiple triggers are specified on an action, any triggering event invokes the action.
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
     * A description of when the action should be triggered. When multiple triggers are specified on an action, any triggering event invokes the action.
     *
     * @return \TKusy\Hl7Fhir\R5\TriggerDefinitionType[]
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * Sets a new trigger
     *
     * A description of when the action should be triggered. When multiple triggers are specified on an action, any triggering event invokes the action.
     *
     * @param \TKusy\Hl7Fhir\R5\TriggerDefinitionType[] $trigger
     * @return self
     */
    public function setTrigger(array $trigger = null)
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionConditionType $condition
     */
    public function addToCondition(\TKusy\Hl7Fhir\R5\PlanDefinitionConditionType $condition)
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
     * @return \TKusy\Hl7Fhir\R5\PlanDefinitionConditionType[]
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionConditionType[] $condition
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionInputType $input
     */
    public function addToInput(\TKusy\Hl7Fhir\R5\PlanDefinitionInputType $input)
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
     * @return \TKusy\Hl7Fhir\R5\PlanDefinitionInputType[]
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionInputType[] $input
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionOutputType $output
     */
    public function addToOutput(\TKusy\Hl7Fhir\R5\PlanDefinitionOutputType $output)
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
     * @return \TKusy\Hl7Fhir\R5\PlanDefinitionOutputType[]
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionOutputType[] $output
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionRelatedActionType $relatedAction
     */
    public function addToRelatedAction(\TKusy\Hl7Fhir\R5\PlanDefinitionRelatedActionType $relatedAction)
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
     * @return \TKusy\Hl7Fhir\R5\PlanDefinitionRelatedActionType[]
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionRelatedActionType[] $relatedAction
     * @return self
     */
    public function setRelatedAction(array $relatedAction = null)
    {
        $this->relatedAction = $relatedAction;
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
     * Indicates who should participate in performing the action described.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\PlanDefinitionParticipantType $participant)
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
     * @return \TKusy\Hl7Fhir\R5\PlanDefinitionParticipantType[]
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionParticipantType[] $participant
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
     * Defines the required behavior for the action.
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
     * Defines the required behavior for the action.
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionDynamicValueType $dynamicValue
     */
    public function addToDynamicValue(\TKusy\Hl7Fhir\R5\PlanDefinitionDynamicValueType $dynamicValue)
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
     * @return \TKusy\Hl7Fhir\R5\PlanDefinitionDynamicValueType[]
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionDynamicValueType[] $dynamicValue
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
     * Sub actions that are contained within the action. The behavior of this action determines the functionality of the sub-actions. For example, a selection behavior of at-most-one indicates that of the sub-actions, at most one may be chosen as part of realizing the action definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionActionType $action
     */
    public function addToAction(\TKusy\Hl7Fhir\R5\PlanDefinitionActionType $action)
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
     * @return \TKusy\Hl7Fhir\R5\PlanDefinitionActionType[]
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
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionActionType[] $action
     * @return self
     */
    public function setAction(array $action = null)
    {
        $this->action = $action;
        return $this;
    }


}

