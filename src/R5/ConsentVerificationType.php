<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConsentVerificationType
 *
 * A record of a healthcare consumer’s choices or choices made on their behalf by a third party, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * XSD Type: Consent.Verification
 */
class ConsentVerificationType extends BackboneElementType
{

    /**
     * Has the instruction been verified.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $verified
     */
    private $verified = null;

    /**
     * Extensible list of verification type starting with verification and re-validation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $verificationType
     */
    private $verificationType = null;

    /**
     * The person who conducted the verification/validation of the Grantor decision.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $verifiedBy
     */
    private $verifiedBy = null;

    /**
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $verifiedWith
     */
    private $verifiedWith = null;

    /**
     * Date(s) verification was collected.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType[] $verificationDate
     */
    private $verificationDate = null;

    /**
     * Gets as verified
     *
     * Has the instruction been verified.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Sets a new verified
     *
     * Has the instruction been verified.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $verified
     * @return self
     */
    public function setVerified(\TKusy\Hl7Fhir\R5\BooleanType $verified)
    {
        $this->verified = $verified;
        return $this;
    }

    /**
     * Gets as verificationType
     *
     * Extensible list of verification type starting with verification and re-validation.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getVerificationType()
    {
        return $this->verificationType;
    }

    /**
     * Sets a new verificationType
     *
     * Extensible list of verification type starting with verification and re-validation.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $verificationType
     * @return self
     */
    public function setVerificationType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $verificationType = null)
    {
        $this->verificationType = $verificationType;
        return $this;
    }

    /**
     * Gets as verifiedBy
     *
     * The person who conducted the verification/validation of the Grantor decision.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getVerifiedBy()
    {
        return $this->verifiedBy;
    }

    /**
     * Sets a new verifiedBy
     *
     * The person who conducted the verification/validation of the Grantor decision.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $verifiedBy
     * @return self
     */
    public function setVerifiedBy(?\TKusy\Hl7Fhir\R5\ReferenceType $verifiedBy = null)
    {
        $this->verifiedBy = $verifiedBy;
        return $this;
    }

    /**
     * Gets as verifiedWith
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getVerifiedWith()
    {
        return $this->verifiedWith;
    }

    /**
     * Sets a new verifiedWith
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $verifiedWith
     * @return self
     */
    public function setVerifiedWith(?\TKusy\Hl7Fhir\R5\ReferenceType $verifiedWith = null)
    {
        $this->verifiedWith = $verifiedWith;
        return $this;
    }

    /**
     * Adds as verificationDate
     *
     * Date(s) verification was collected.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $verificationDate
     */
    public function addToVerificationDate(\TKusy\Hl7Fhir\R5\DateTimeType $verificationDate)
    {
        $this->verificationDate[] = $verificationDate;
        return $this;
    }

    /**
     * isset verificationDate
     *
     * Date(s) verification was collected.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVerificationDate($index)
    {
        return isset($this->verificationDate[$index]);
    }

    /**
     * unset verificationDate
     *
     * Date(s) verification was collected.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVerificationDate($index)
    {
        unset($this->verificationDate[$index]);
    }

    /**
     * Gets as verificationDate
     *
     * Date(s) verification was collected.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType[]
     */
    public function getVerificationDate()
    {
        return $this->verificationDate;
    }

    /**
     * Sets a new verificationDate
     *
     * Date(s) verification was collected.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType[] $verificationDate
     * @return self
     */
    public function setVerificationDate(array $verificationDate = null)
    {
        $this->verificationDate = $verificationDate;
        return $this;
    }


}

