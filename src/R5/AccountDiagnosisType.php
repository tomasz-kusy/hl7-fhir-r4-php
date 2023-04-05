<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AccountDiagnosisType
 *
 * A financial tool for tracking value accrued for a particular purpose. In the healthcare field, used to track charges for a patient, cost centers, etc.
 * XSD Type: Account.Diagnosis
 */
class AccountDiagnosisType extends BackboneElementType
{

    /**
     * Ranking of the diagnosis (for each type).
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * The diagnosis relevant to the account.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $condition
     */
    private $condition = null;

    /**
     * Ranking of the diagnosis (for each type).
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $dateOfDiagnosis
     */
    private $dateOfDiagnosis = null;

    /**
     * Type that this diagnosis has relevant to the account (e.g. admission, billing, discharge …).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Was the Diagnosis present on Admission in the related Encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $onAdmission
     */
    private $onAdmission = null;

    /**
     * The package code can be used to group diagnoses that may be priced or delivered as a single product. Such as DRGs.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $packageCode
     */
    private $packageCode = null;

    /**
     * Gets as sequence
     *
     * Ranking of the diagnosis (for each type).
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
     * Ranking of the diagnosis (for each type).
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(?\TKusy\Hl7Fhir\R5\PositiveIntType $sequence = null)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as condition
     *
     * The diagnosis relevant to the account.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * The diagnosis relevant to the account.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $condition
     * @return self
     */
    public function setCondition(\TKusy\Hl7Fhir\R5\CodeableReferenceType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as dateOfDiagnosis
     *
     * Ranking of the diagnosis (for each type).
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDateOfDiagnosis()
    {
        return $this->dateOfDiagnosis;
    }

    /**
     * Sets a new dateOfDiagnosis
     *
     * Ranking of the diagnosis (for each type).
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $dateOfDiagnosis
     * @return self
     */
    public function setDateOfDiagnosis(?\TKusy\Hl7Fhir\R5\DateTimeType $dateOfDiagnosis = null)
    {
        $this->dateOfDiagnosis = $dateOfDiagnosis;
        return $this;
    }

    /**
     * Adds as type
     *
     * Type that this diagnosis has relevant to the account (e.g. admission, billing, discharge …).
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
     * Type that this diagnosis has relevant to the account (e.g. admission, billing, discharge …).
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
     * Type that this diagnosis has relevant to the account (e.g. admission, billing, discharge …).
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
     * Type that this diagnosis has relevant to the account (e.g. admission, billing, discharge …).
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
     * Type that this diagnosis has relevant to the account (e.g. admission, billing, discharge …).
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
     * Was the Diagnosis present on Admission in the related Encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getOnAdmission()
    {
        return $this->onAdmission;
    }

    /**
     * Sets a new onAdmission
     *
     * Was the Diagnosis present on Admission in the related Encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $onAdmission
     * @return self
     */
    public function setOnAdmission(?\TKusy\Hl7Fhir\R5\BooleanType $onAdmission = null)
    {
        $this->onAdmission = $onAdmission;
        return $this;
    }

    /**
     * Adds as packageCode
     *
     * The package code can be used to group diagnoses that may be priced or delivered as a single product. Such as DRGs.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $packageCode
     */
    public function addToPackageCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $packageCode)
    {
        $this->packageCode[] = $packageCode;
        return $this;
    }

    /**
     * isset packageCode
     *
     * The package code can be used to group diagnoses that may be priced or delivered as a single product. Such as DRGs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageCode($index)
    {
        return isset($this->packageCode[$index]);
    }

    /**
     * unset packageCode
     *
     * The package code can be used to group diagnoses that may be priced or delivered as a single product. Such as DRGs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageCode($index)
    {
        unset($this->packageCode[$index]);
    }

    /**
     * Gets as packageCode
     *
     * The package code can be used to group diagnoses that may be priced or delivered as a single product. Such as DRGs.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getPackageCode()
    {
        return $this->packageCode;
    }

    /**
     * Sets a new packageCode
     *
     * The package code can be used to group diagnoses that may be priced or delivered as a single product. Such as DRGs.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $packageCode
     * @return self
     */
    public function setPackageCode(array $packageCode = null)
    {
        $this->packageCode = $packageCode;
        return $this;
    }


}

