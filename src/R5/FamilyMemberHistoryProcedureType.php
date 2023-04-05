<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing FamilyMemberHistoryProcedureType
 *
 * Significant health conditions for a person related to the patient relevant in the context of care for the patient.
 * XSD Type: FamilyMemberHistory.Procedure
 */
class FamilyMemberHistoryProcedureType extends BackboneElementType
{

    /**
     * The actual procedure specified. Could be a coded procedure or a less specific string depending on how much is known about the procedure and the capabilities of the creating system.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Indicates what happened following the procedure. If the procedure resulted in death, deceased date is captured on the relation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $outcome
     */
    private $outcome = null;

    /**
     * This procedure contributed to the cause of death of the related person. If contributedToDeath is not populated, then it is unknown.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $contributedToDeath
     */
    private $contributedToDeath = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $performedAge
     */
    private $performedAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $performedRange
     */
    private $performedRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $performedPeriod
     */
    private $performedPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $performedString
     */
    private $performedString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $performedDateTime
     */
    private $performedDateTime = null;

    /**
     * An area where general notes can be placed about this specific procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as code
     *
     * The actual procedure specified. Could be a coded procedure or a less specific string depending on how much is known about the procedure and the capabilities of the creating system.
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
     * The actual procedure specified. Could be a coded procedure or a less specific string depending on how much is known about the procedure and the capabilities of the creating system.
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
     * Indicates what happened following the procedure. If the procedure resulted in death, deceased date is captured on the relation.
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
     * Indicates what happened following the procedure. If the procedure resulted in death, deceased date is captured on the relation.
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
     * This procedure contributed to the cause of death of the related person. If contributedToDeath is not populated, then it is unknown.
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
     * This procedure contributed to the cause of death of the related person. If contributedToDeath is not populated, then it is unknown.
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
     * Gets as performedAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getPerformedAge()
    {
        return $this->performedAge;
    }

    /**
     * Sets a new performedAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $performedAge
     * @return self
     */
    public function setPerformedAge(?\TKusy\Hl7Fhir\R5\AgeType $performedAge = null)
    {
        $this->performedAge = $performedAge;
        return $this;
    }

    /**
     * Gets as performedRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getPerformedRange()
    {
        return $this->performedRange;
    }

    /**
     * Sets a new performedRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $performedRange
     * @return self
     */
    public function setPerformedRange(?\TKusy\Hl7Fhir\R5\RangeType $performedRange = null)
    {
        $this->performedRange = $performedRange;
        return $this;
    }

    /**
     * Gets as performedPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPerformedPeriod()
    {
        return $this->performedPeriod;
    }

    /**
     * Sets a new performedPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $performedPeriod
     * @return self
     */
    public function setPerformedPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $performedPeriod = null)
    {
        $this->performedPeriod = $performedPeriod;
        return $this;
    }

    /**
     * Gets as performedString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPerformedString()
    {
        return $this->performedString;
    }

    /**
     * Sets a new performedString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $performedString
     * @return self
     */
    public function setPerformedString(?\TKusy\Hl7Fhir\R5\StringType $performedString = null)
    {
        $this->performedString = $performedString;
        return $this;
    }

    /**
     * Gets as performedDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getPerformedDateTime()
    {
        return $this->performedDateTime;
    }

    /**
     * Sets a new performedDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $performedDateTime
     * @return self
     */
    public function setPerformedDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $performedDateTime = null)
    {
        $this->performedDateTime = $performedDateTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * An area where general notes can be placed about this specific procedure.
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
     * An area where general notes can be placed about this specific procedure.
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
     * An area where general notes can be placed about this specific procedure.
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
     * An area where general notes can be placed about this specific procedure.
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
     * An area where general notes can be placed about this specific procedure.
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

