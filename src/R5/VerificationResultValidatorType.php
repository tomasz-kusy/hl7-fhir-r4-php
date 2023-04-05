<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing VerificationResultValidatorType
 *
 * Describes validation requirements, source(s), status and dates for one or more elements.
 * XSD Type: VerificationResult.Validator
 */
class VerificationResultValidatorType extends BackboneElementType
{

    /**
     * Reference to the organization validating information.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $organization
     */
    private $organization = null;

    /**
     * A digital identity certificate associated with the validator.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $identityCertificate
     */
    private $identityCertificate = null;

    /**
     * Signed assertion by the validator that they have validated the information.
     *
     * @var \TKusy\Hl7Fhir\R5\SignatureType $attestationSignature
     */
    private $attestationSignature = null;

    /**
     * Gets as organization
     *
     * Reference to the organization validating information.
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
     * Reference to the organization validating information.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $organization
     * @return self
     */
    public function setOrganization(\TKusy\Hl7Fhir\R5\ReferenceType $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as identityCertificate
     *
     * A digital identity certificate associated with the validator.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getIdentityCertificate()
    {
        return $this->identityCertificate;
    }

    /**
     * Sets a new identityCertificate
     *
     * A digital identity certificate associated with the validator.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $identityCertificate
     * @return self
     */
    public function setIdentityCertificate(?\TKusy\Hl7Fhir\R5\StringType $identityCertificate = null)
    {
        $this->identityCertificate = $identityCertificate;
        return $this;
    }

    /**
     * Gets as attestationSignature
     *
     * Signed assertion by the validator that they have validated the information.
     *
     * @return \TKusy\Hl7Fhir\R5\SignatureType
     */
    public function getAttestationSignature()
    {
        return $this->attestationSignature;
    }

    /**
     * Sets a new attestationSignature
     *
     * Signed assertion by the validator that they have validated the information.
     *
     * @param \TKusy\Hl7Fhir\R5\SignatureType $attestationSignature
     * @return self
     */
    public function setAttestationSignature(?\TKusy\Hl7Fhir\R5\SignatureType $attestationSignature = null)
    {
        $this->attestationSignature = $attestationSignature;
        return $this;
    }


}

