<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing FamilyMemberHistoryConditionType
 *
 * Significant health conditions for a person related to the patient relevant in the context of care for the patient.
 * XSD Type: FamilyMemberHistory.Condition
 */
class FamilyMemberHistoryConditionType extends BackboneElementType
{

    /**
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Indicates what happened following the condition. If the condition resulted in death, deceased date is captured on the relation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $outcome
     */
    private $outcome = null;

    /**
     * This condition contributed to the cause of death of the related person. If contributedToDeath is not populated, then it is unknown.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $contributedToDeath
     */
    private $contributedToDeath = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $onsetAge
     */
    private $onsetAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $onsetRange
     */
    private $onsetRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod
     */
    private $onsetPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $onsetString
     */
    private $onsetString = null;

    /**
     * An area where general notes can be placed about this specific condition.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as code
     *
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
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
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * Indicates what happened following the condition. If the condition resulted in death, deceased date is captured on the relation.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * Indicates what happened following the condition. If the condition resulted in death, deceased date is captured on the relation.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $outcome
     * @return self
     */
    public function setOutcome(?\TKusy\Hl7Fhir\R5\CodeableConceptType $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as contributedToDeath
     *
     * This condition contributed to the cause of death of the related person. If contributedToDeath is not populated, then it is unknown.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getContributedToDeath()
    {
        return $this->contributedToDeath;
    }

    /**
     * Sets a new contributedToDeath
     *
     * This condition contributed to the cause of death of the related person. If contributedToDeath is not populated, then it is unknown.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $contributedToDeath
     * @return self
     */
    public function setContributedToDeath(?\TKusy\Hl7Fhir\R5\BooleanType $contributedToDeath = null)
    {
        $this->contributedToDeath = $contributedToDeath;
        return $this;
    }

    /**
     * Gets as onsetAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Sets a new onsetAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $onsetAge
     * @return self
     */
    public function setOnsetAge(?\TKusy\Hl7Fhir\R5\AgeType $onsetAge = null)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Gets as onsetRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Sets a new onsetRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $onsetRange
     * @return self
     */
    public function setOnsetRange(?\TKusy\Hl7Fhir\R5\RangeType $onsetRange = null)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Gets as onsetPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Sets a new onsetPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod
     * @return self
     */
    public function setOnsetPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod = null)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Gets as onsetString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * Sets a new onsetString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $onsetString
     * @return self
     */
    public function setOnsetString(?\TKusy\Hl7Fhir\R5\StringType $onsetString = null)
    {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * Adds as note
     *
     * An area where general notes can be placed about this specific condition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * An area where general notes can be placed about this specific condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * An area where general notes can be placed about this specific condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * An area where general notes can be placed about this specific condition.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * An area where general notes can be placed about this specific condition.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

