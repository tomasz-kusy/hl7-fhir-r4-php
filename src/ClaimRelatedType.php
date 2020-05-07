<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ClaimRelatedType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * XSD Type: Claim.Related
 */
class ClaimRelatedType extends BackboneElementType
{

    /**
     * Reference to a related claim.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $claim
     */
    private $claim = null;

    /**
     * A code to convey how the claims are related.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $relationship
     */
    private $relationship = null;

    /**
     * An alternate organizational reference to the case or file to which this particular claim pertains.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $reference
     */
    private $reference = null;

    /**
     * Gets as claim
     *
     * Reference to a related claim.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getClaim()
    {
        return $this->claim;
    }

    /**
     * Sets a new claim
     *
     * Reference to a related claim.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $claim
     * @return self
     */
    public function setClaim(\TKusy\Hl7FhirR4\ReferenceType $claim)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * A code to convey how the claims are related.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * A code to convey how the claims are related.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7FhirR4\CodeableConceptType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as reference
     *
     * An alternate organizational reference to the case or file to which this particular claim pertains.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * An alternate organizational reference to the case or file to which this particular claim pertains.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7FhirR4\IdentifierType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

