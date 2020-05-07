<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PlanDefinitionRelatedActionType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 * XSD Type: PlanDefinition.RelatedAction
 */
class PlanDefinitionRelatedActionType extends BackboneElementType
{

    /**
     * The element id of the related action.
     *
     * @var \TKusy\Hl7FhirR4\IdType $actionId
     */
    private $actionId = null;

    /**
     * The relationship of this action to the related action.
     *
     * @var \TKusy\Hl7FhirR4\ActionRelationshipType $relationship
     */
    private $relationship = null;

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $offsetDuration
     */
    private $offsetDuration = null;

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $offsetRange
     */
    private $offsetRange = null;

    /**
     * Gets as actionId
     *
     * The element id of the related action.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * Sets a new actionId
     *
     * The element id of the related action.
     *
     * @param \TKusy\Hl7FhirR4\IdType $actionId
     * @return self
     */
    public function setActionId(\TKusy\Hl7FhirR4\IdType $actionId)
    {
        $this->actionId = $actionId;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * The relationship of this action to the related action.
     *
     * @return \TKusy\Hl7FhirR4\ActionRelationshipType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * The relationship of this action to the related action.
     *
     * @param \TKusy\Hl7FhirR4\ActionRelationshipType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7FhirR4\ActionRelationshipType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as offsetDuration
     *
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * Sets a new offsetDuration
     *
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $offsetDuration
     * @return self
     */
    public function setOffsetDuration(\TKusy\Hl7FhirR4\DurationType $offsetDuration)
    {
        $this->offsetDuration = $offsetDuration;
        return $this;
    }

    /**
     * Gets as offsetRange
     *
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getOffsetRange()
    {
        return $this->offsetRange;
    }

    /**
     * Sets a new offsetRange
     *
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $offsetRange
     * @return self
     */
    public function setOffsetRange(\TKusy\Hl7FhirR4\RangeType $offsetRange)
    {
        $this->offsetRange = $offsetRange;
        return $this;
    }


}

