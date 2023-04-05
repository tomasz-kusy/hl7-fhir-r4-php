<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AccountRelatedAccountType
 *
 * A financial tool for tracking value accrued for a particular purpose. In the healthcare field, used to track charges for a patient, cost centers, etc.
 * XSD Type: Account.RelatedAccount
 */
class AccountRelatedAccountType extends BackboneElementType
{

    /**
     * Relationship of the associated Account.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $relationship
     */
    private $relationship = null;

    /**
     * Reference to an associated Account.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $account
     */
    private $account = null;

    /**
     * Gets as relationship
     *
     * Relationship of the associated Account.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * Relationship of the associated Account.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $relationship
     * @return self
     */
    public function setRelationship(?\TKusy\Hl7Fhir\R5\CodeableConceptType $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as account
     *
     * Reference to an associated Account.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Reference to an associated Account.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $account
     * @return self
     */
    public function setAccount(\TKusy\Hl7Fhir\R5\ReferenceType $account)
    {
        $this->account = $account;
        return $this;
    }


}

