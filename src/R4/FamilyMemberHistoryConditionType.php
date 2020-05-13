<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Indicates what happened following the condition. If the condition resulted in death, deceased date is captured on the relation.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $outcome
     */
    private $outcome = null;

    /**
     * This condition contributed to the cause of death of the related person. If contributedToDeath is not populated, then it is unknown.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $contributedToDeath
     */
    private $contributedToDeath = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AgeType $onsetAge
     */
    private $onsetAge = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RangeType $onsetRange
     */
    private $onsetRange = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $onsetPeriod
     */
    private $onsetPeriod = null;

    /**
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $onsetString
     */
    private $onsetString = null;

    /**
     * An area where general notes can be placed about this specific condition.
     *
     * @var \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as code
     *
     * The actual condition specified. Could be a coded condition (like MI or Diabetes) or a less specific string like 'cancer' depending on how much is known about the condition and the capabilities of the creating system.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * Indicates what happened following the condition. If the condition resulted in death, deceased date is captured on the relation.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7Fhir\R4\CodeableConceptType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as contributedToDeath
     *
     * This condition contributed to the cause of death of the related person. If contributedToDeath is not populated, then it is unknown.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
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
     * @param \TKusy\Hl7Fhir\R4\BooleanType $contributedToDeath
     * @return self
     */
    public function setContributedToDeath(\TKusy\Hl7Fhir\R4\BooleanType $contributedToDeath)
    {
        $this->contributedToDeath = $contributedToDeath;
        return $this;
    }

    /**
     * Gets as onsetAge
     *
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AgeType
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Sets a new onsetAge
     *
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AgeType $onsetAge
     * @return self
     */
    public function setOnsetAge(\TKusy\Hl7Fhir\R4\AgeType $onsetAge)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Gets as onsetRange
     *
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RangeType
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Sets a new onsetRange
     *
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RangeType $onsetRange
     * @return self
     */
    public function setOnsetRange(\TKusy\Hl7Fhir\R4\RangeType $onsetRange)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Gets as onsetPeriod
     *
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Sets a new onsetPeriod
     *
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $onsetPeriod
     * @return self
     */
    public function setOnsetPeriod(\TKusy\Hl7Fhir\R4\PeriodType $onsetPeriod)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Gets as onsetString
     *
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * Sets a new onsetString
     *
     * Either the age of onset, range of approximate age or descriptive string can be recorded. For conditions with multiple occurrences, this describes the first known occurrence. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $onsetString
     * @return self
     */
    public function setOnsetString(\TKusy\Hl7Fhir\R4\StringType $onsetString)
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R4\AnnotationType $note)
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
     * @return \TKusy\Hl7Fhir\R4\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

