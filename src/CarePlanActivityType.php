<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CarePlanActivityType
 *
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 * XSD Type: CarePlan.Activity
 */
class CarePlanActivityType extends BackboneElementType
{

    /**
     * Identifies the outcome at the point when the status of the activity is assessed. For example, the outcome of an education activity could be patient understands (or not).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $outcomeCodeableConcept
     */
    private $outcomeCodeableConcept = [
        
    ];

    /**
     * Details of the outcome or action resulting from the activity. The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself. The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $outcomeReference
     */
    private $outcomeReference = [
        
    ];

    /**
     * Notes about the adherence/status/progress of the activity.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $progress
     */
    private $progress = [
        
    ];

    /**
     * The details of the proposed activity represented in a specific resource.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $reference
     */
    private $reference = null;

    /**
     * A simple summary of a planned activity suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     *
     * @var \TKusy\Hl7FhirR4\CarePlanDetailType $detail
     */
    private $detail = null;

    /**
     * Adds as outcomeCodeableConcept
     *
     * Identifies the outcome at the point when the status of the activity is assessed. For example, the outcome of an education activity could be patient understands (or not).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $outcomeCodeableConcept
     */
    public function addToOutcomeCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $outcomeCodeableConcept)
    {
        $this->outcomeCodeableConcept[] = $outcomeCodeableConcept;
        return $this;
    }

    /**
     * isset outcomeCodeableConcept
     *
     * Identifies the outcome at the point when the status of the activity is assessed. For example, the outcome of an education activity could be patient understands (or not).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutcomeCodeableConcept($index)
    {
        return isset($this->outcomeCodeableConcept[$index]);
    }

    /**
     * unset outcomeCodeableConcept
     *
     * Identifies the outcome at the point when the status of the activity is assessed. For example, the outcome of an education activity could be patient understands (or not).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutcomeCodeableConcept($index)
    {
        unset($this->outcomeCodeableConcept[$index]);
    }

    /**
     * Gets as outcomeCodeableConcept
     *
     * Identifies the outcome at the point when the status of the activity is assessed. For example, the outcome of an education activity could be patient understands (or not).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getOutcomeCodeableConcept()
    {
        return $this->outcomeCodeableConcept;
    }

    /**
     * Sets a new outcomeCodeableConcept
     *
     * Identifies the outcome at the point when the status of the activity is assessed. For example, the outcome of an education activity could be patient understands (or not).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $outcomeCodeableConcept
     * @return self
     */
    public function setOutcomeCodeableConcept(array $outcomeCodeableConcept)
    {
        $this->outcomeCodeableConcept = $outcomeCodeableConcept;
        return $this;
    }

    /**
     * Adds as outcomeReference
     *
     * Details of the outcome or action resulting from the activity. The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself. The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
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
     * Details of the outcome or action resulting from the activity. The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself. The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
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
     * Details of the outcome or action resulting from the activity. The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself. The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
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
     * Details of the outcome or action resulting from the activity. The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself. The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
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
     * Details of the outcome or action resulting from the activity. The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself. The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $outcomeReference
     * @return self
     */
    public function setOutcomeReference(array $outcomeReference)
    {
        $this->outcomeReference = $outcomeReference;
        return $this;
    }

    /**
     * Adds as progress
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $progress
     */
    public function addToProgress(\TKusy\Hl7FhirR4\AnnotationType $progress)
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $progress
     * @return self
     */
    public function setProgress(array $progress)
    {
        $this->progress = $progress;
        return $this;
    }

    /**
     * Gets as reference
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7FhirR4\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as detail
     *
     * A simple summary of a planned activity suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     *
     * @return \TKusy\Hl7FhirR4\CarePlanDetailType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * A simple summary of a planned activity suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     *
     * @param \TKusy\Hl7FhirR4\CarePlanDetailType $detail
     * @return self
     */
    public function setDetail(\TKusy\Hl7FhirR4\CarePlanDetailType $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

