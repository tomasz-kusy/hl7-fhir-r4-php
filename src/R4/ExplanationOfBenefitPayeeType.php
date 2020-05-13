<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ExplanationOfBenefitPayeeType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.Payee
 */
class ExplanationOfBenefitPayeeType extends BackboneElementType
{

    /**
     * Type of Party to be reimbursed: Subscriber, provider, other.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Reference to the individual or organization to whom any payment will be made.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $party
     */
    private $party = null;

    /**
     * Gets as type
     *
     * Type of Party to be reimbursed: Subscriber, provider, other.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of Party to be reimbursed: Subscriber, provider, other.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as party
     *
     * Reference to the individual or organization to whom any payment will be made.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * Reference to the individual or organization to whom any payment will be made.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $party
     * @return self
     */
    public function setParty(\TKusy\Hl7Fhir\R4\ReferenceType $party)
    {
        $this->party = $party;
        return $this;
    }


}

