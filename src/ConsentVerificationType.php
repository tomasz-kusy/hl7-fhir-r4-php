<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConsentVerificationType
 *
 * A record of a healthcare consumer’s choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * XSD Type: Consent.Verification
 */
class ConsentVerificationType extends BackboneElementType
{

    /**
     * Has the instruction been verified.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $verified
     */
    private $verified = null;

    /**
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $verifiedWith
     */
    private $verifiedWith = null;

    /**
     * Date verification was collected.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $verificationDate
     */
    private $verificationDate = null;

    /**
     * Gets as verified
     *
     * Has the instruction been verified.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
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
     * @param \TKusy\Hl7FhirR4\BooleanType $verified
     * @return self
     */
    public function setVerified(\TKusy\Hl7FhirR4\BooleanType $verified)
    {
        $this->verified = $verified;
        return $this;
    }

    /**
     * Gets as verifiedWith
     *
     * Who verified the instruction (Patient, Relative or other Authorized Person).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $verifiedWith
     * @return self
     */
    public function setVerifiedWith(\TKusy\Hl7FhirR4\ReferenceType $verifiedWith)
    {
        $this->verifiedWith = $verifiedWith;
        return $this;
    }

    /**
     * Gets as verificationDate
     *
     * Date verification was collected.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getVerificationDate()
    {
        return $this->verificationDate;
    }

    /**
     * Sets a new verificationDate
     *
     * Date verification was collected.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $verificationDate
     * @return self
     */
    public function setVerificationDate(\TKusy\Hl7FhirR4\DateTimeType $verificationDate)
    {
        $this->verificationDate = $verificationDate;
        return $this;
    }


}

