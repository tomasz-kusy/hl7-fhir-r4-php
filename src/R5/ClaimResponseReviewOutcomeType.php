<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponseReviewOutcomeType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.ReviewOutcome
 */
class ClaimResponseReviewOutcomeType extends BackboneElementType
{

    /**
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $decision
     */
    private $decision = null;

    /**
     * The reasons for the result of the claim, predetermination, or preauthorization adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $reason
     */
    private $reason = null;

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $preAuthRef
     */
    private $preAuthRef = null;

    /**
     * The time frame during which this authorization is effective.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $preAuthPeriod
     */
    private $preAuthPeriod = null;

    /**
     * Gets as decision
     *
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Sets a new decision
     *
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $decision
     * @return self
     */
    public function setDecision(?\TKusy\Hl7Fhir\R5\CodeableConceptType $decision = null)
    {
        $this->decision = $decision;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The reasons for the result of the claim, predetermination, or preauthorization adjudication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * The reasons for the result of the claim, predetermination, or preauthorization adjudication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * The reasons for the result of the claim, predetermination, or preauthorization adjudication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * The reasons for the result of the claim, predetermination, or preauthorization adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The reasons for the result of the claim, predetermination, or preauthorization adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as preAuthRef
     *
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * Sets a new preAuthRef
     *
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $preAuthRef
     * @return self
     */
    public function setPreAuthRef(?\TKusy\Hl7Fhir\R5\StringType $preAuthRef = null)
    {
        $this->preAuthRef = $preAuthRef;
        return $this;
    }

    /**
     * Gets as preAuthPeriod
     *
     * The time frame during which this authorization is effective.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPreAuthPeriod()
    {
        return $this->preAuthPeriod;
    }

    /**
     * Sets a new preAuthPeriod
     *
     * The time frame during which this authorization is effective.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $preAuthPeriod
     * @return self
     */
    public function setPreAuthPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $preAuthPeriod = null)
    {
        $this->preAuthPeriod = $preAuthPeriod;
        return $this;
    }


}

