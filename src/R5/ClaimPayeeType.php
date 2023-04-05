<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimPayeeType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * XSD Type: Claim.Payee
 */
class ClaimPayeeType extends BackboneElementType
{

    /**
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Reference to the individual or organization to whom any payment will be made.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $party
     */
    private $party = null;

    /**
     * Gets as type
     *
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as party
     *
     * Reference to the individual or organization to whom any payment will be made.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $party
     * @return self
     */
    public function setParty(?\TKusy\Hl7Fhir\R5\ReferenceType $party = null)
    {
        $this->party = $party;
        return $this;
    }


}

