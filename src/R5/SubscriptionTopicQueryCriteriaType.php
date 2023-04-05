<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionTopicQueryCriteriaType
 *
 * Describes a stream of resource state changes or events and annotated with labels useful to filter projections from this topic.
 * XSD Type: SubscriptionTopic.QueryCriteria
 */
class SubscriptionTopicQueryCriteriaType extends BackboneElementType
{

    /**
     * The FHIR query based rules are applied to the previous resource state (e.g., state before an update).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $previous
     */
    private $previous = null;

    /**
     * For `create` interactions, should the `previous` criteria count as an automatic pass or an automatic fail. If not present, the testing behavior during `create` interactions is unspecified (server discretion).
     *
     * @var \TKusy\Hl7Fhir\R5\CriteriaNotExistsBehaviorType $resultForCreate
     */
    private $resultForCreate = null;

    /**
     * The FHIR query based rules are applied to the current resource state (e.g., state after an update).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $current
     */
    private $current = null;

    /**
     * For 'delete' interactions, should the 'current' query criteria count as an automatic pass or an automatic fail. If not present, the testing behavior during `delete` interactions is unspecified (server discretion).
     *
     * @var \TKusy\Hl7Fhir\R5\CriteriaNotExistsBehaviorType $resultForDelete
     */
    private $resultForDelete = null;

    /**
     * If set to `true`, both the `current` and `previous` query criteria must evaluate `true` to trigger a notification for this topic. If set to `false` or not present, a notification for this topic will be triggered if either the `current` or `previous` tests evaluate to `true`.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $requireBoth
     */
    private $requireBoth = null;

    /**
     * Gets as previous
     *
     * The FHIR query based rules are applied to the previous resource state (e.g., state before an update).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * Sets a new previous
     *
     * The FHIR query based rules are applied to the previous resource state (e.g., state before an update).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $previous
     * @return self
     */
    public function setPrevious(?\TKusy\Hl7Fhir\R5\StringType $previous = null)
    {
        $this->previous = $previous;
        return $this;
    }

    /**
     * Gets as resultForCreate
     *
     * For `create` interactions, should the `previous` criteria count as an automatic pass or an automatic fail. If not present, the testing behavior during `create` interactions is unspecified (server discretion).
     *
     * @return \TKusy\Hl7Fhir\R5\CriteriaNotExistsBehaviorType
     */
    public function getResultForCreate()
    {
        return $this->resultForCreate;
    }

    /**
     * Sets a new resultForCreate
     *
     * For `create` interactions, should the `previous` criteria count as an automatic pass or an automatic fail. If not present, the testing behavior during `create` interactions is unspecified (server discretion).
     *
     * @param \TKusy\Hl7Fhir\R5\CriteriaNotExistsBehaviorType $resultForCreate
     * @return self
     */
    public function setResultForCreate(?\TKusy\Hl7Fhir\R5\CriteriaNotExistsBehaviorType $resultForCreate = null)
    {
        $this->resultForCreate = $resultForCreate;
        return $this;
    }

    /**
     * Gets as current
     *
     * The FHIR query based rules are applied to the current resource state (e.g., state after an update).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Sets a new current
     *
     * The FHIR query based rules are applied to the current resource state (e.g., state after an update).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $current
     * @return self
     */
    public function setCurrent(?\TKusy\Hl7Fhir\R5\StringType $current = null)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * Gets as resultForDelete
     *
     * For 'delete' interactions, should the 'current' query criteria count as an automatic pass or an automatic fail. If not present, the testing behavior during `delete` interactions is unspecified (server discretion).
     *
     * @return \TKusy\Hl7Fhir\R5\CriteriaNotExistsBehaviorType
     */
    public function getResultForDelete()
    {
        return $this->resultForDelete;
    }

    /**
     * Sets a new resultForDelete
     *
     * For 'delete' interactions, should the 'current' query criteria count as an automatic pass or an automatic fail. If not present, the testing behavior during `delete` interactions is unspecified (server discretion).
     *
     * @param \TKusy\Hl7Fhir\R5\CriteriaNotExistsBehaviorType $resultForDelete
     * @return self
     */
    public function setResultForDelete(?\TKusy\Hl7Fhir\R5\CriteriaNotExistsBehaviorType $resultForDelete = null)
    {
        $this->resultForDelete = $resultForDelete;
        return $this;
    }

    /**
     * Gets as requireBoth
     *
     * If set to `true`, both the `current` and `previous` query criteria must evaluate `true` to trigger a notification for this topic. If set to `false` or not present, a notification for this topic will be triggered if either the `current` or `previous` tests evaluate to `true`.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getRequireBoth()
    {
        return $this->requireBoth;
    }

    /**
     * Sets a new requireBoth
     *
     * If set to `true`, both the `current` and `previous` query criteria must evaluate `true` to trigger a notification for this topic. If set to `false` or not present, a notification for this topic will be triggered if either the `current` or `previous` tests evaluate to `true`.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $requireBoth
     * @return self
     */
    public function setRequireBoth(?\TKusy\Hl7Fhir\R5\BooleanType $requireBoth = null)
    {
        $this->requireBoth = $requireBoth;
        return $this;
    }


}

