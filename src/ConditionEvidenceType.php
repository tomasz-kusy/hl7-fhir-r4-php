<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConditionEvidenceType
 *
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or clinical concept that has risen to a level of concern.
 * XSD Type: Condition.Evidence
 */
class ConditionEvidenceType extends BackboneElementType
{

    /**
     * A manifestation or symptom that led to the recording of this condition.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     */
    private $code = [
        
    ];

    /**
     * Links to other relevant information, including pathology reports.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $detail
     */
    private $detail = [
        
    ];

    /**
     * Adds as code
     *
     * A manifestation or symptom that led to the recording of this condition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * A manifestation or symptom that led to the recording of this condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * A manifestation or symptom that led to the recording of this condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * A manifestation or symptom that led to the recording of this condition.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A manifestation or symptom that led to the recording of this condition.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as detail
     *
     * Links to other relevant information, including pathology reports.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $detail
     */
    public function addToDetail(\TKusy\Hl7FhirR4\ReferenceType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * Links to other relevant information, including pathology reports.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Links to other relevant information, including pathology reports.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Links to other relevant information, including pathology reports.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Links to other relevant information, including pathology reports.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

