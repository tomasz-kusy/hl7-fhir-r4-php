<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing VerificationResultAttestationType
 *
 * Describes validation requirements, source(s), status and dates for one or more elements.
 * XSD Type: VerificationResult.Attestation
 */
class VerificationResultAttestationType extends BackboneElementType
{

    /**
     * The individual or organization attesting to information.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $who
     */
    private $who = null;

    /**
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf
     */
    private $onBehalfOf = null;

    /**
     * The method by which attested information was submitted/retrieved (manual; API; Push).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $communicationMethod
     */
    private $communicationMethod = null;

    /**
     * The date the information was attested to.
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $date
     */
    private $date = null;

    /**
     * A digital identity certificate associated with the attestation source.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $sourceIdentityCertificate
     */
    private $sourceIdentityCertificate = null;

    /**
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $proxyIdentityCertificate
     */
    private $proxyIdentityCertificate = null;

    /**
     * Signed assertion by the proxy entity indicating that they have the right to submit attested information on behalf of the attestation source.
     *
     * @var \TKusy\Hl7Fhir\R4\SignatureType $proxySignature
     */
    private $proxySignature = null;

    /**
     * Signed assertion by the attestation source that they have attested to the information.
     *
     * @var \TKusy\Hl7Fhir\R4\SignatureType $sourceSignature
     */
    private $sourceSignature = null;

    /**
     * Gets as who
     *
     * The individual or organization attesting to information.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Sets a new who
     *
     * The individual or organization attesting to information.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $who
     * @return self
     */
    public function setWho(\TKusy\Hl7Fhir\R4\ReferenceType $who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * Gets as onBehalfOf
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * Sets a new onBehalfOf
     *
     * When the who is asserting on behalf of another (organization or individual).
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf
     * @return self
     */
    public function setOnBehalfOf(\TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * Gets as communicationMethod
     *
     * The method by which attested information was submitted/retrieved (manual; API; Push).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCommunicationMethod()
    {
        return $this->communicationMethod;
    }

    /**
     * Sets a new communicationMethod
     *
     * The method by which attested information was submitted/retrieved (manual; API; Push).
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $communicationMethod
     * @return self
     */
    public function setCommunicationMethod(\TKusy\Hl7Fhir\R4\CodeableConceptType $communicationMethod)
    {
        $this->communicationMethod = $communicationMethod;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date the information was attested to.
     *
     * @return \TKusy\Hl7Fhir\R4\DateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date the information was attested to.
     *
     * @param \TKusy\Hl7Fhir\R4\DateType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7Fhir\R4\DateType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as sourceIdentityCertificate
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getSourceIdentityCertificate()
    {
        return $this->sourceIdentityCertificate;
    }

    /**
     * Sets a new sourceIdentityCertificate
     *
     * A digital identity certificate associated with the attestation source.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $sourceIdentityCertificate
     * @return self
     */
    public function setSourceIdentityCertificate(\TKusy\Hl7Fhir\R4\StringType $sourceIdentityCertificate)
    {
        $this->sourceIdentityCertificate = $sourceIdentityCertificate;
        return $this;
    }

    /**
     * Gets as proxyIdentityCertificate
     *
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getProxyIdentityCertificate()
    {
        return $this->proxyIdentityCertificate;
    }

    /**
     * Sets a new proxyIdentityCertificate
     *
     * A digital identity certificate associated with the proxy entity submitting attested information on behalf of the attestation source.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $proxyIdentityCertificate
     * @return self
     */
    public function setProxyIdentityCertificate(\TKusy\Hl7Fhir\R4\StringType $proxyIdentityCertificate)
    {
        $this->proxyIdentityCertificate = $proxyIdentityCertificate;
        return $this;
    }

    /**
     * Gets as proxySignature
     *
     * Signed assertion by the proxy entity indicating that they have the right to submit attested information on behalf of the attestation source.
     *
     * @return \TKusy\Hl7Fhir\R4\SignatureType
     */
    public function getProxySignature()
    {
        return $this->proxySignature;
    }

    /**
     * Sets a new proxySignature
     *
     * Signed assertion by the proxy entity indicating that they have the right to submit attested information on behalf of the attestation source.
     *
     * @param \TKusy\Hl7Fhir\R4\SignatureType $proxySignature
     * @return self
     */
    public function setProxySignature(\TKusy\Hl7Fhir\R4\SignatureType $proxySignature)
    {
        $this->proxySignature = $proxySignature;
        return $this;
    }

    /**
     * Gets as sourceSignature
     *
     * Signed assertion by the attestation source that they have attested to the information.
     *
     * @return \TKusy\Hl7Fhir\R4\SignatureType
     */
    public function getSourceSignature()
    {
        return $this->sourceSignature;
    }

    /**
     * Sets a new sourceSignature
     *
     * Signed assertion by the attestation source that they have attested to the information.
     *
     * @param \TKusy\Hl7Fhir\R4\SignatureType $sourceSignature
     * @return self
     */
    public function setSourceSignature(\TKusy\Hl7Fhir\R4\SignatureType $sourceSignature)
    {
        $this->sourceSignature = $sourceSignature;
        return $this;
    }


}

