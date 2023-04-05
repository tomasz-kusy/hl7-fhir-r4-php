<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExplanationOfBenefitDiagnosisType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.Diagnosis
 */
class ExplanationOfBenefitDiagnosisType extends BackboneElementType
{

    /**
     * A number to uniquely identify diagnosis entries.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisCodeableConcept
     */
    private $diagnosisCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $diagnosisReference
     */
    private $diagnosisReference = null;

    /**
     * When the condition was observed or the relative ranking.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Indication of whether the diagnosis was present on admission to a facility.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $onAdmission
     */
    private $onAdmission = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify diagnosis entries.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A number to uniquely identify diagnosis entries.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as diagnosisCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDiagnosisCodeableConcept()
    {
        return $this->diagnosisCodeableConcept;
    }

    /**
     * Sets a new diagnosisCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisCodeableConcept
     * @return self
     */
    public function setDiagnosisCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisCodeableConcept = null)
    {
        $this->diagnosisCodeableConcept = $diagnosisCodeableConcept;
        return $this;
    }

    /**
     * Gets as diagnosisReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDiagnosisReference()
    {
        return $this->diagnosisReference;
    }

    /**
     * Sets a new diagnosisReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $diagnosisReference
     * @return self
     */
    public function setDiagnosisReference(?\TKusy\Hl7Fhir\R5\ReferenceType $diagnosisReference = null)
    {
        $this->diagnosisReference = $diagnosisReference;
        return $this;
    }

    /**
     * Adds as type
     *
     * When the condition was observed or the relative ranking.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * When the condition was observed or the relative ranking.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * When the condition was observed or the relative ranking.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * When the condition was observed or the relative ranking.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * When the condition was observed or the relative ranking.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as onAdmission
     *
     * Indication of whether the diagnosis was present on admission to a facility.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOnAdmission()
    {
        return $this->onAdmission;
    }

    /**
     * Sets a new onAdmission
     *
     * Indication of whether the diagnosis was present on admission to a facility.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $onAdmission
     * @return self
     */
    public function setOnAdmission(?\TKusy\Hl7Fhir\R5\CodeableConceptType $onAdmission = null)
    {
        $this->onAdmission = $onAdmission;
        return $this;
    }


}

