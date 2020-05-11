<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CoverageEligibilityRequestType
 *
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CoverageEligibilityRequest
 */
class CoverageEligibilityRequestType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * When the requestor expects the processor to complete processing.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * Code to specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for the patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     *
     * @var \TKusy\Hl7FhirR4\EligibilityRequestPurposeType[] $purpose
     */
    private $purpose = null;

    /**
     * The party who is the beneficiary of the supplied coverage and for whom eligibility is sought.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The date or dates when the enclosed suite of services were performed or completed. (choose any one of serviced*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $servicedDate
     */
    private $servicedDate = null;

    /**
     * The date or dates when the enclosed suite of services were performed or completed. (choose any one of serviced*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $servicedPeriod
     */
    private $servicedPeriod = null;

    /**
     * The date when this resource was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * Person who created the request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $enterer
     */
    private $enterer = null;

    /**
     * The provider which is responsible for the request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $provider
     */
    private $provider = null;

    /**
     * The Insurer who issued the coverage in question and is the recipient of the request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $insurer
     */
    private $insurer = null;

    /**
     * Facility where the services are intended to be provided.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $facility
     */
    private $facility = null;

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityRequestSupportingInfoType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Financial instruments for reimbursement for the health care products and services.
     *
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityRequestInsuranceType[] $insurance
     */
    private $insurance = null;

    /**
     * Service categories or billable services for which benefit details and/or an authorization prior to service delivery may be required by the payor.
     *
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityRequestItemType[] $item
     */
    private $item = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this coverage eligiblity request.
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
     * A unique identifier assigned to this coverage eligiblity request.
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
     * A unique identifier assigned to this coverage eligiblity request.
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
     * A unique identifier assigned to this coverage eligiblity request.
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
     * A unique identifier assigned to this coverage eligiblity request.
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
     * Gets as status
     *
     * The status of the resource instance.
     *
     * @return \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the resource instance.
     *
     * @param \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as priority
     *
     * When the requestor expects the processor to complete processing.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * When the requestor expects the processor to complete processing.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\CodeableConceptType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Adds as purpose
     *
     * Code to specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for the patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\EligibilityRequestPurposeType $purpose
     */
    public function addToPurpose(\TKusy\Hl7FhirR4\EligibilityRequestPurposeType $purpose)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * isset purpose
     *
     * Code to specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for the patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurpose($index)
    {
        return isset($this->purpose[$index]);
    }

    /**
     * unset purpose
     *
     * Code to specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for the patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurpose($index)
    {
        unset($this->purpose[$index]);
    }

    /**
     * Gets as purpose
     *
     * Code to specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for the patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     *
     * @return \TKusy\Hl7FhirR4\EligibilityRequestPurposeType[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Code to specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for the patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     *
     * @param \TKusy\Hl7FhirR4\EligibilityRequestPurposeType[] $purpose
     * @return self
     */
    public function setPurpose(array $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The party who is the beneficiary of the supplied coverage and for whom eligibility is sought.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The party who is the beneficiary of the supplied coverage and for whom eligibility is sought.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as servicedDate
     *
     * The date or dates when the enclosed suite of services were performed or completed. (choose any one of serviced*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }

    /**
     * Sets a new servicedDate
     *
     * The date or dates when the enclosed suite of services were performed or completed. (choose any one of serviced*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $servicedDate
     * @return self
     */
    public function setServicedDate(\TKusy\Hl7FhirR4\DateType $servicedDate)
    {
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * Gets as servicedPeriod
     *
     * The date or dates when the enclosed suite of services were performed or completed. (choose any one of serviced*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }

    /**
     * Sets a new servicedPeriod
     *
     * The date or dates when the enclosed suite of services were performed or completed. (choose any one of serviced*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $servicedPeriod
     * @return self
     */
    public function setServicedPeriod(\TKusy\Hl7FhirR4\PeriodType $servicedPeriod)
    {
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date when this resource was created.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * The date when this resource was created.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7FhirR4\DateTimeType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as enterer
     *
     * Person who created the request.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * Sets a new enterer
     *
     * Person who created the request.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $enterer
     * @return self
     */
    public function setEnterer(\TKusy\Hl7FhirR4\ReferenceType $enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Gets as provider
     *
     * The provider which is responsible for the request.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The provider which is responsible for the request.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $provider
     * @return self
     */
    public function setProvider(\TKusy\Hl7FhirR4\ReferenceType $provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as insurer
     *
     * The Insurer who issued the coverage in question and is the recipient of the request.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * Sets a new insurer
     *
     * The Insurer who issued the coverage in question and is the recipient of the request.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $insurer
     * @return self
     */
    public function setInsurer(\TKusy\Hl7FhirR4\ReferenceType $insurer)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * Gets as facility
     *
     * Facility where the services are intended to be provided.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * Facility where the services are intended to be provided.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $facility
     * @return self
     */
    public function setFacility(\TKusy\Hl7FhirR4\ReferenceType $facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestSupportingInfoType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7FhirR4\CoverageEligibilityRequestSupportingInfoType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInfo($index)
    {
        return isset($this->supportingInfo[$index]);
    }

    /**
     * unset supportingInfo
     *
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInfo($index)
    {
        unset($this->supportingInfo[$index]);
    }

    /**
     * Gets as supportingInfo
     *
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityRequestSupportingInfoType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestSupportingInfoType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Financial instruments for reimbursement for the health care products and services.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestInsuranceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7FhirR4\CoverageEligibilityRequestInsuranceType $insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * isset insurance
     *
     * Financial instruments for reimbursement for the health care products and services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsurance($index)
    {
        return isset($this->insurance[$index]);
    }

    /**
     * unset insurance
     *
     * Financial instruments for reimbursement for the health care products and services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsurance($index)
    {
        unset($this->insurance[$index]);
    }

    /**
     * Gets as insurance
     *
     * Financial instruments for reimbursement for the health care products and services.
     *
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityRequestInsuranceType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Financial instruments for reimbursement for the health care products and services.
     *
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestInsuranceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Adds as item
     *
     * Service categories or billable services for which benefit details and/or an authorization prior to service delivery may be required by the payor.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestItemType $item
     */
    public function addToItem(\TKusy\Hl7FhirR4\CoverageEligibilityRequestItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Service categories or billable services for which benefit details and/or an authorization prior to service delivery may be required by the payor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * Service categories or billable services for which benefit details and/or an authorization prior to service delivery may be required by the payor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * Service categories or billable services for which benefit details and/or an authorization prior to service delivery may be required by the payor.
     *
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityRequestItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Service categories or billable services for which benefit details and/or an authorization prior to service delivery may be required by the payor.
     *
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }


}

