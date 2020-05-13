<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ClaimDiagnosisType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * XSD Type: Claim.Diagnosis
 */
class ClaimDiagnosisType extends BackboneElementType
{

    /**
     * A number to uniquely identify diagnosis entries.
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $diagnosisCodeableConcept
     */
    private $diagnosisCodeableConcept = null;

    /**
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $diagnosisReference
     */
    private $diagnosisReference = null;

    /**
     * When the condition was observed or the relative ranking.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Indication of whether the diagnosis was present on admission to a facility.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $onAdmission
     */
    private $onAdmission = null;

    /**
     * A package billing code or bundle code used to group products and services to a particular health condition (such as heart attack) which is based on a predetermined grouping code system.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $packageCode
     */
    private $packageCode = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify diagnosis entries.
     *
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType
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
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R4\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as diagnosisCodeableConcept
     *
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getDiagnosisCodeableConcept()
    {
        return $this->diagnosisCodeableConcept;
    }

    /**
     * Sets a new diagnosisCodeableConcept
     *
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $diagnosisCodeableConcept
     * @return self
     */
    public function setDiagnosisCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $diagnosisCodeableConcept)
    {
        $this->diagnosisCodeableConcept = $diagnosisCodeableConcept;
        return $this;
    }

    /**
     * Gets as diagnosisReference
     *
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getDiagnosisReference()
    {
        return $this->diagnosisReference;
    }

    /**
     * Sets a new diagnosisReference
     *
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $diagnosisReference
     * @return self
     */
    public function setDiagnosisReference(\TKusy\Hl7Fhir\R4\ReferenceType $diagnosisReference)
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as onAdmission
     *
     * Indication of whether the diagnosis was present on admission to a facility.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $onAdmission
     * @return self
     */
    public function setOnAdmission(\TKusy\Hl7Fhir\R4\CodeableConceptType $onAdmission)
    {
        $this->onAdmission = $onAdmission;
        return $this;
    }

    /**
     * Gets as packageCode
     *
     * A package billing code or bundle code used to group products and services to a particular health condition (such as heart attack) which is based on a predetermined grouping code system.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getPackageCode()
    {
        return $this->packageCode;
    }

    /**
     * Sets a new packageCode
     *
     * A package billing code or bundle code used to group products and services to a particular health condition (such as heart attack) which is based on a predetermined grouping code system.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $packageCode
     * @return self
     */
    public function setPackageCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $packageCode)
    {
        $this->packageCode = $packageCode;
        return $this;
    }


}

