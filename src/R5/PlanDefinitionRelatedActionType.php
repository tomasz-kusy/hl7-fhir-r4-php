<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PlanDefinitionRelatedActionType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical and non-clinical artifacts such as clinical decision support rules, order sets, protocols, and drug quality specifications.
 * XSD Type: PlanDefinition.RelatedAction
 */
class PlanDefinitionRelatedActionType extends BackboneElementType
{

    /**
     * The element id of the target related action.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $targetId
     */
    private $targetId = null;

    /**
     * The relationship of the start of this action to the related action.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionRelationshipTypeType $relationship
     */
    private $relationship = null;

    /**
     * The relationship of the end of this action to the related action.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionRelationshipTypeType $endRelationship
     */
    private $endRelationship = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $offsetDuration
     */
    private $offsetDuration = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $offsetRange
     */
    private $offsetRange = null;

    /**
     * Gets as targetId
     *
     * The element id of the target related action.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Sets a new targetId
     *
     * The element id of the target related action.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $targetId
     * @return self
     */
    public function setTargetId(\TKusy\Hl7Fhir\R5\IdType $targetId)
    {
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * The relationship of the start of this action to the related action.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionRelationshipTypeType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * The relationship of the start of this action to the related action.
     *
     * @param \TKusy\Hl7Fhir\R5\ActionRelationshipTypeType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7Fhir\R5\ActionRelationshipTypeType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as endRelationship
     *
     * The relationship of the end of this action to the related action.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionRelationshipTypeType
     */
    public function getEndRelationship()
    {
        return $this->endRelationship;
    }

    /**
     * Sets a new endRelationship
     *
     * The relationship of the end of this action to the related action.
     *
     * @param \TKusy\Hl7Fhir\R5\ActionRelationshipTypeType $endRelationship
     * @return self
     */
    public function setEndRelationship(?\TKusy\Hl7Fhir\R5\ActionRelationshipTypeType $endRelationship = null)
    {
        $this->endRelationship = $endRelationship;
        return $this;
    }

    /**
     * Gets as offsetDuration
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * Sets a new offsetDuration
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $offsetDuration
     * @return self
     */
    public function setOffsetDuration(?\TKusy\Hl7Fhir\R5\DurationType $offsetDuration = null)
    {
        $this->offsetDuration = $offsetDuration;
        return $this;
    }

    /**
     * Gets as offsetRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getOffsetRange()
    {
        return $this->offsetRange;
    }

    /**
     * Sets a new offsetRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $offsetRange
     * @return self
     */
    public function setOffsetRange(?\TKusy\Hl7Fhir\R5\RangeType $offsetRange = null)
    {
        $this->offsetRange = $offsetRange;
        return $this;
    }


}

