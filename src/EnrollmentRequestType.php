<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EnrollmentRequestType
 *
 * This resource provides the insurance enrollment details to the insurer regarding a specified coverage.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: EnrollmentRequest
 */
class EnrollmentRequestType extends DomainResourceType
{

    /**
     * The Response business identifier.
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
     * The date when this resource was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * The Insurer who is target of the request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $insurer
     */
    private $insurer = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $provider
     */
    private $provider = null;

    /**
     * Patient Resource.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $candidate
     */
    private $candidate = null;

    /**
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $coverage
     */
    private $coverage = null;

    /**
     * Adds as identifier
     *
     * The Response business identifier.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * Gets as insurer
     *
     * The Insurer who is target of the request.
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
     * The Insurer who is target of the request.
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
     * Gets as provider
     *
     * The practitioner who is responsible for the services rendered to the patient.
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
     * The practitioner who is responsible for the services rendered to the patient.
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
     * Gets as candidate
     *
     * Patient Resource.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * Sets a new candidate
     *
     * Patient Resource.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $candidate
     * @return self
     */
    public function setCandidate(\TKusy\Hl7FhirR4\ReferenceType $candidate)
    {
        $this->candidate = $candidate;
        return $this;
    }

    /**
     * Gets as coverage
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $coverage
     * @return self
     */
    public function setCoverage(\TKusy\Hl7FhirR4\ReferenceType $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }


}

