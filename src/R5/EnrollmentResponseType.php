<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EnrollmentResponseType
 *
 * This resource provides enrollment and plan details from the processing of an EnrollmentRequest resource.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: EnrollmentResponse
 */
class EnrollmentResponseType extends DomainResourceType
{

    /**
     * The Response business identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * Original request resource reference.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $request
     */
    private $request = null;

    /**
     * Processing status: error, complete.
     *
     * @var \TKusy\Hl7Fhir\R5\EnrollmentOutcomeType $outcome
     */
    private $outcome = null;

    /**
     * A description of the status of the adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $disposition
     */
    private $disposition = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $created
     */
    private $created = null;

    /**
     * The Insurer who produced this adjudicated response.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $organization
     */
    private $organization = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requestProvider
     */
    private $requestProvider = null;

    /**
     * Adds as identifier
     *
     * The Response business identifier.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * The Response business identifier.
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
     * The Response business identifier.
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
     * The Response business identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The Response business identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the resource instance.
     *
     * @return \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType
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
     * @param \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as request
     *
     * Original request resource reference.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * Original request resource reference.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $request
     * @return self
     */
    public function setRequest(?\TKusy\Hl7Fhir\R5\ReferenceType $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * Processing status: error, complete.
     *
     * @return \TKusy\Hl7Fhir\R5\EnrollmentOutcomeType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * Processing status: error, complete.
     *
     * @param \TKusy\Hl7Fhir\R5\EnrollmentOutcomeType $outcome
     * @return self
     */
    public function setOutcome(?\TKusy\Hl7Fhir\R5\EnrollmentOutcomeType $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as disposition
     *
     * A description of the status of the adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Sets a new disposition
     *
     * A description of the status of the adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $disposition
     * @return self
     */
    public function setDisposition(?\TKusy\Hl7Fhir\R5\StringType $disposition = null)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $created
     * @return self
     */
    public function setCreated(?\TKusy\Hl7Fhir\R5\DateTimeType $created = null)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as organization
     *
     * The Insurer who produced this adjudicated response.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * The Insurer who produced this adjudicated response.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $organization
     * @return self
     */
    public function setOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as requestProvider
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRequestProvider()
    {
        return $this->requestProvider;
    }

    /**
     * Sets a new requestProvider
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $requestProvider
     * @return self
     */
    public function setRequestProvider(?\TKusy\Hl7Fhir\R5\ReferenceType $requestProvider = null)
    {
        $this->requestProvider = $requestProvider;
        return $this;
    }


}

