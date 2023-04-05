<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResearchSubjectProgressType
 *
 * A ResearchSubject is a participant or object which is the recipient of investigative activities in a research study.
 * XSD Type: ResearchSubject.Progress
 */
class ResearchSubjectProgressType extends BackboneElementType
{

    /**
     * Identifies the aspect of the subject's journey that the state refers to.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The current state of the subject.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectState
     */
    private $subjectState = null;

    /**
     * The milestones the subject has passed through.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $milestone
     */
    private $milestone = null;

    /**
     * The reason for the state change. If coded it should follow the formal subject state model.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    private $reason = null;

    /**
     * The date when the new status started.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $startDate
     */
    private $startDate = null;

    /**
     * The date when the state ended.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $endDate
     */
    private $endDate = null;

    /**
     * Gets as type
     *
     * Identifies the aspect of the subject's journey that the state refers to.
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
     * Identifies the aspect of the subject's journey that the state refers to.
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
     * Gets as subjectState
     *
     * The current state of the subject.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubjectState()
    {
        return $this->subjectState;
    }

    /**
     * Sets a new subjectState
     *
     * The current state of the subject.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectState
     * @return self
     */
    public function setSubjectState(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subjectState = null)
    {
        $this->subjectState = $subjectState;
        return $this;
    }

    /**
     * Gets as milestone
     *
     * The milestones the subject has passed through.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /**
     * Sets a new milestone
     *
     * The milestones the subject has passed through.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $milestone
     * @return self
     */
    public function setMilestone(?\TKusy\Hl7Fhir\R5\CodeableConceptType $milestone = null)
    {
        $this->milestone = $milestone;
        return $this;
    }

    /**
     * Gets as reason
     *
     * The reason for the state change. If coded it should follow the formal subject state model.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The reason for the state change. If coded it should follow the formal subject state model.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * The date when the new status started.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The date when the new status started.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $startDate
     * @return self
     */
    public function setStartDate(?\TKusy\Hl7Fhir\R5\DateTimeType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The date when the state ended.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The date when the state ended.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $endDate
     * @return self
     */
    public function setEndDate(?\TKusy\Hl7Fhir\R5\DateTimeType $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }


}

