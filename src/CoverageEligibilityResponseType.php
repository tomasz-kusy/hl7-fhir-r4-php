<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CoverageEligibilityResponseType
 *
 * This resource provides eligibility and plan details from the processing of an CoverageEligibilityRequest resource.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CoverageEligibilityResponse
 */
class CoverageEligibilityResponseType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * Code to specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for the patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     *
     * @var \TKusy\Hl7FhirR4\EligibilityResponsePurposeType[] $purpose
     */
    private $purpose = [
        
    ];

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
     * The date this resource was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * The provider which is responsible for the request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $requestor
     */
    private $requestor = null;

    /**
     * Reference to the original request resource.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $request
     */
    private $request = null;

    /**
     * The outcome of the request processing.
     *
     * @var \TKusy\Hl7FhirR4\RemittanceOutcomeType $outcome
     */
    private $outcome = null;

    /**
     * A human readable description of the status of the adjudication.
     *
     * @var \TKusy\Hl7FhirR4\StringType $disposition
     */
    private $disposition = null;

    /**
     * The Insurer who issued the coverage in question and is the author of the response.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $insurer
     */
    private $insurer = null;

    /**
     * Financial instruments for reimbursement for the health care products and services.
     *
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityResponseInsuranceType[] $insurance
     */
    private $insurance = [
        
    ];

    /**
     * A reference from the Insurer to which these services pertain to be used on further communication and as proof that the request occurred.
     *
     * @var \TKusy\Hl7FhirR4\StringType $preAuthRef
     */
    private $preAuthRef = null;

    /**
     * A code for the form to be used for printing the content.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $form
     */
    private $form = null;

    /**
     * Errors encountered during the processing of the request.
     *
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityResponseErrorType[] $error
     */
    private $error = [
        
    ];

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
     * Adds as purpose
     *
     * Code to specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for the patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\EligibilityResponsePurposeType $purpose
     */
    public function addToPurpose(\TKusy\Hl7FhirR4\EligibilityResponsePurposeType $purpose)
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
     * @return \TKusy\Hl7FhirR4\EligibilityResponsePurposeType[]
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
     * @param \TKusy\Hl7FhirR4\EligibilityResponsePurposeType[] $purpose
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
     * The date this resource was created.
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
     * The date this resource was created.
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
     * Gets as requestor
     *
     * The provider which is responsible for the request.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Sets a new requestor
     *
     * The provider which is responsible for the request.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $requestor
     * @return self
     */
    public function setRequestor(\TKusy\Hl7FhirR4\ReferenceType $requestor)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Gets as request
     *
     * Reference to the original request resource.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * Reference to the original request resource.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $request
     * @return self
     */
    public function setRequest(\TKusy\Hl7FhirR4\ReferenceType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * The outcome of the request processing.
     *
     * @return \TKusy\Hl7FhirR4\RemittanceOutcomeType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * The outcome of the request processing.
     *
     * @param \TKusy\Hl7FhirR4\RemittanceOutcomeType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7FhirR4\RemittanceOutcomeType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as disposition
     *
     * A human readable description of the status of the adjudication.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Sets a new disposition
     *
     * A human readable description of the status of the adjudication.
     *
     * @param \TKusy\Hl7FhirR4\StringType $disposition
     * @return self
     */
    public function setDisposition(\TKusy\Hl7FhirR4\StringType $disposition)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Gets as insurer
     *
     * The Insurer who issued the coverage in question and is the author of the response.
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
     * The Insurer who issued the coverage in question and is the author of the response.
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
     * Adds as insurance
     *
     * Financial instruments for reimbursement for the health care products and services.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityResponseInsuranceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7FhirR4\CoverageEligibilityResponseInsuranceType $insurance)
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
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityResponseInsuranceType[]
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
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityResponseInsuranceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Gets as preAuthRef
     *
     * A reference from the Insurer to which these services pertain to be used on further communication and as proof that the request occurred.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * Sets a new preAuthRef
     *
     * A reference from the Insurer to which these services pertain to be used on further communication and as proof that the request occurred.
     *
     * @param \TKusy\Hl7FhirR4\StringType $preAuthRef
     * @return self
     */
    public function setPreAuthRef(\TKusy\Hl7FhirR4\StringType $preAuthRef)
    {
        $this->preAuthRef = $preAuthRef;
        return $this;
    }

    /**
     * Gets as form
     *
     * A code for the form to be used for printing the content.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * A code for the form to be used for printing the content.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $form
     * @return self
     */
    public function setForm(\TKusy\Hl7FhirR4\CodeableConceptType $form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Adds as error
     *
     * Errors encountered during the processing of the request.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityResponseErrorType $error
     */
    public function addToError(\TKusy\Hl7FhirR4\CoverageEligibilityResponseErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * Errors encountered during the processing of the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * Errors encountered during the processing of the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * Errors encountered during the processing of the request.
     *
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityResponseErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * Errors encountered during the processing of the request.
     *
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityResponseErrorType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }


}

