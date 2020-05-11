<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductAuthorizationType
 *
 * The regulatory authorization of a medicinal product.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductAuthorization
 */
class MedicinalProductAuthorizationType extends DomainResourceType
{

    /**
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The medicinal product that is being authorized.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The country in which the marketing authorization has been granted.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $country
     */
    private $country = [
        
    ];

    /**
     * Jurisdiction within a country.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = [
        
    ];

    /**
     * The status of the marketing authorization.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * The date at which the given status has become applicable.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $statusDate
     */
    private $statusDate = null;

    /**
     * The date when a suspended the marketing or the marketing authorization of the product is anticipated to be restored.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $restoreDate
     */
    private $restoreDate = null;

    /**
     * The beginning of the time period in which the marketing authorization is in the specific status shall be specified A complete date consisting of day, month and year shall be specified using the ISO 8601 date format.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * A period of time after authorization before generic product applicatiosn can be submitted.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $dataExclusivityPeriod
     */
    private $dataExclusivityPeriod = null;

    /**
     * The date when the first authorization was granted by a Medicines Regulatory Agency.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $dateOfFirstAuthorization
     */
    private $dateOfFirstAuthorization = null;

    /**
     * Date of first marketing authorization for a company's new medicinal product in any country in the World.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $internationalBirthDate
     */
    private $internationalBirthDate = null;

    /**
     * The legal framework against which this authorization is granted.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $legalBasis
     */
    private $legalBasis = null;

    /**
     * Authorization in areas within a country.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductAuthorizationJurisdictionalAuthorizationType[] $jurisdictionalAuthorization
     */
    private $jurisdictionalAuthorization = [
        
    ];

    /**
     * Marketing Authorization Holder.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $holder
     */
    private $holder = null;

    /**
     * Medicines Regulatory Agency.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $regulator
     */
    private $regulator = null;

    /**
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType $procedure
     */
    private $procedure = null;

    /**
     * Adds as identifier
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The medicinal product that is being authorized.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The medicinal product that is being authorized.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Adds as country
     *
     * The country in which the marketing authorization has been granted.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $country
     */
    public function addToCountry(\TKusy\Hl7FhirR4\CodeableConceptType $country)
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * isset country
     *
     * The country in which the marketing authorization has been granted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountry($index)
    {
        return isset($this->country[$index]);
    }

    /**
     * unset country
     *
     * The country in which the marketing authorization has been granted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountry($index)
    {
        unset($this->country[$index]);
    }

    /**
     * Gets as country
     *
     * The country in which the marketing authorization has been granted.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * The country in which the marketing authorization has been granted.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $country
     * @return self
     */
    public function setCountry(array $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * isset jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdiction($index)
    {
        return isset($this->jurisdiction[$index]);
    }

    /**
     * unset jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdiction($index)
    {
        unset($this->jurisdiction[$index]);
    }

    /**
     * Gets as jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     * @return self
     */
    public function setJurisdiction(array $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the marketing authorization.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the marketing authorization.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusDate
     *
     * The date at which the given status has become applicable.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Sets a new statusDate
     *
     * The date at which the given status has become applicable.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $statusDate
     * @return self
     */
    public function setStatusDate(\TKusy\Hl7FhirR4\DateTimeType $statusDate)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Gets as restoreDate
     *
     * The date when a suspended the marketing or the marketing authorization of the product is anticipated to be restored.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getRestoreDate()
    {
        return $this->restoreDate;
    }

    /**
     * Sets a new restoreDate
     *
     * The date when a suspended the marketing or the marketing authorization of the product is anticipated to be restored.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $restoreDate
     * @return self
     */
    public function setRestoreDate(\TKusy\Hl7FhirR4\DateTimeType $restoreDate)
    {
        $this->restoreDate = $restoreDate;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * The beginning of the time period in which the marketing authorization is in the specific status shall be specified A complete date consisting of day, month and year shall be specified using the ISO 8601 date format.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * The beginning of the time period in which the marketing authorization is in the specific status shall be specified A complete date consisting of day, month and year shall be specified using the ISO 8601 date format.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\TKusy\Hl7FhirR4\PeriodType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as dataExclusivityPeriod
     *
     * A period of time after authorization before generic product applicatiosn can be submitted.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getDataExclusivityPeriod()
    {
        return $this->dataExclusivityPeriod;
    }

    /**
     * Sets a new dataExclusivityPeriod
     *
     * A period of time after authorization before generic product applicatiosn can be submitted.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $dataExclusivityPeriod
     * @return self
     */
    public function setDataExclusivityPeriod(\TKusy\Hl7FhirR4\PeriodType $dataExclusivityPeriod)
    {
        $this->dataExclusivityPeriod = $dataExclusivityPeriod;
        return $this;
    }

    /**
     * Gets as dateOfFirstAuthorization
     *
     * The date when the first authorization was granted by a Medicines Regulatory Agency.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDateOfFirstAuthorization()
    {
        return $this->dateOfFirstAuthorization;
    }

    /**
     * Sets a new dateOfFirstAuthorization
     *
     * The date when the first authorization was granted by a Medicines Regulatory Agency.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $dateOfFirstAuthorization
     * @return self
     */
    public function setDateOfFirstAuthorization(\TKusy\Hl7FhirR4\DateTimeType $dateOfFirstAuthorization)
    {
        $this->dateOfFirstAuthorization = $dateOfFirstAuthorization;
        return $this;
    }

    /**
     * Gets as internationalBirthDate
     *
     * Date of first marketing authorization for a company's new medicinal product in any country in the World.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getInternationalBirthDate()
    {
        return $this->internationalBirthDate;
    }

    /**
     * Sets a new internationalBirthDate
     *
     * Date of first marketing authorization for a company's new medicinal product in any country in the World.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $internationalBirthDate
     * @return self
     */
    public function setInternationalBirthDate(\TKusy\Hl7FhirR4\DateTimeType $internationalBirthDate)
    {
        $this->internationalBirthDate = $internationalBirthDate;
        return $this;
    }

    /**
     * Gets as legalBasis
     *
     * The legal framework against which this authorization is granted.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getLegalBasis()
    {
        return $this->legalBasis;
    }

    /**
     * Sets a new legalBasis
     *
     * The legal framework against which this authorization is granted.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $legalBasis
     * @return self
     */
    public function setLegalBasis(\TKusy\Hl7FhirR4\CodeableConceptType $legalBasis)
    {
        $this->legalBasis = $legalBasis;
        return $this;
    }

    /**
     * Adds as jurisdictionalAuthorization
     *
     * Authorization in areas within a country.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductAuthorizationJurisdictionalAuthorizationType $jurisdictionalAuthorization
     */
    public function addToJurisdictionalAuthorization(\TKusy\Hl7FhirR4\MedicinalProductAuthorizationJurisdictionalAuthorizationType $jurisdictionalAuthorization)
    {
        $this->jurisdictionalAuthorization[] = $jurisdictionalAuthorization;
        return $this;
    }

    /**
     * isset jurisdictionalAuthorization
     *
     * Authorization in areas within a country.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionalAuthorization($index)
    {
        return isset($this->jurisdictionalAuthorization[$index]);
    }

    /**
     * unset jurisdictionalAuthorization
     *
     * Authorization in areas within a country.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionalAuthorization($index)
    {
        unset($this->jurisdictionalAuthorization[$index]);
    }

    /**
     * Gets as jurisdictionalAuthorization
     *
     * Authorization in areas within a country.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductAuthorizationJurisdictionalAuthorizationType[]
     */
    public function getJurisdictionalAuthorization()
    {
        return $this->jurisdictionalAuthorization;
    }

    /**
     * Sets a new jurisdictionalAuthorization
     *
     * Authorization in areas within a country.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductAuthorizationJurisdictionalAuthorizationType[] $jurisdictionalAuthorization
     * @return self
     */
    public function setJurisdictionalAuthorization(array $jurisdictionalAuthorization)
    {
        $this->jurisdictionalAuthorization = $jurisdictionalAuthorization;
        return $this;
    }

    /**
     * Gets as holder
     *
     * Marketing Authorization Holder.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * Sets a new holder
     *
     * Marketing Authorization Holder.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $holder
     * @return self
     */
    public function setHolder(\TKusy\Hl7FhirR4\ReferenceType $holder)
    {
        $this->holder = $holder;
        return $this;
    }

    /**
     * Gets as regulator
     *
     * Medicines Regulatory Agency.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRegulator()
    {
        return $this->regulator;
    }

    /**
     * Sets a new regulator
     *
     * Medicines Regulatory Agency.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $regulator
     * @return self
     */
    public function setRegulator(\TKusy\Hl7FhirR4\ReferenceType $regulator)
    {
        $this->regulator = $regulator;
        return $this;
    }

    /**
     * Gets as procedure
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType $procedure
     * @return self
     */
    public function setProcedure(\TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType $procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }


}

