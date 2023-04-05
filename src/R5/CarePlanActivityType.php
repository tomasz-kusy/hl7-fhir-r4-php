<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CarePlanActivityType
 *
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 * XSD Type: CarePlan.Activity
 */
class CarePlanActivityType extends BackboneElementType
{

    /**
     * Identifies the activity that was performed. For example, an activity could be patient education, exercise, or a medication administration. The reference to an "event" resource, such as Procedure or Encounter or Observation, represents the activity that was performed. The requested activity can be conveyed using the CarePlan.activity.plannedActivityReference (a reference to a “request” resource).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $performedActivity
     */
    private $performedActivity = null;

    /**
     * Notes about the adherence/status/progress of the activity.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $progress
     */
    private $progress = null;

    /**
     * The details of the proposed activity represented in a specific resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $plannedActivityReference
     */
    private $plannedActivityReference = null;

    /**
     * Adds as performedActivity
     *
     * Identifies the activity that was performed. For example, an activity could be patient education, exercise, or a medication administration. The reference to an "event" resource, such as Procedure or Encounter or Observation, represents the activity that was performed. The requested activity can be conveyed using the CarePlan.activity.plannedActivityReference (a reference to a “request” resource).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $performedActivity
     */
    public function addToPerformedActivity(\TKusy\Hl7Fhir\R5\CodeableReferenceType $performedActivity)
    {
        $this->performedActivity[] = $performedActivity;
        return $this;
    }

    /**
     * isset performedActivity
     *
     * Identifies the activity that was performed. For example, an activity could be patient education, exercise, or a medication administration. The reference to an "event" resource, such as Procedure or Encounter or Observation, represents the activity that was performed. The requested activity can be conveyed using the CarePlan.activity.plannedActivityReference (a reference to a “request” resource).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformedActivity($index)
    {
        return isset($this->performedActivity[$index]);
    }

    /**
     * unset performedActivity
     *
     * Identifies the activity that was performed. For example, an activity could be patient education, exercise, or a medication administration. The reference to an "event" resource, such as Procedure or Encounter or Observation, represents the activity that was performed. The requested activity can be conveyed using the CarePlan.activity.plannedActivityReference (a reference to a “request” resource).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformedActivity($index)
    {
        unset($this->performedActivity[$index]);
    }

    /**
     * Gets as performedActivity
     *
     * Identifies the activity that was performed. For example, an activity could be patient education, exercise, or a medication administration. The reference to an "event" resource, such as Procedure or Encounter or Observation, represents the activity that was performed. The requested activity can be conveyed using the CarePlan.activity.plannedActivityReference (a reference to a “request” resource).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getPerformedActivity()
    {
        return $this->performedActivity;
    }

    /**
     * Sets a new performedActivity
     *
     * Identifies the activity that was performed. For example, an activity could be patient education, exercise, or a medication administration. The reference to an "event" resource, such as Procedure or Encounter or Observation, represents the activity that was performed. The requested activity can be conveyed using the CarePlan.activity.plannedActivityReference (a reference to a “request” resource).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $performedActivity
     * @return self
     */
    public function setPerformedActivity(array $performedActivity = null)
    {
        $this->performedActivity = $performedActivity;
        return $this;
    }

    /**
     * Adds as progress
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $progress
     */
    public function addToProgress(\TKusy\Hl7Fhir\R5\AnnotationType $progress)
    {
        $this->progress[] = $progress;
        return $this;
    }

    /**
     * isset progress
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgress($index)
    {
        return isset($this->progress[$index]);
    }

    /**
     * unset progress
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgress($index)
    {
        unset($this->progress[$index]);
    }

    /**
     * Gets as progress
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Sets a new progress
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $progress
     * @return self
     */
    public function setProgress(array $progress = null)
    {
        $this->progress = $progress;
        return $this;
    }

    /**
     * Gets as plannedActivityReference
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPlannedActivityReference()
    {
        return $this->plannedActivityReference;
    }

    /**
     * Sets a new plannedActivityReference
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $plannedActivityReference
     * @return self
     */
    public function setPlannedActivityReference(?\TKusy\Hl7Fhir\R5\ReferenceType $plannedActivityReference = null)
    {
        $this->plannedActivityReference = $plannedActivityReference;
        return $this;
    }


}

