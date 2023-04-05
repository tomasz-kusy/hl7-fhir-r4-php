<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExplanationOfBenefitRelatedType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.Related
 */
class ExplanationOfBenefitRelatedType extends BackboneElementType
{

    /**
     * Reference to a related claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $claim
     */
    private $claim = null;

    /**
     * A code to convey how the claims are related.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $relationship
     */
    private $relationship = null;

    /**
     * An alternate organizational reference to the case or file to which this particular claim pertains.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $reference
     */
    private $reference = null;

    /**
     * Gets as claim
     *
     * Reference to a related claim.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $claim
     * @return self
     */
    public function setClaim(?\TKusy\Hl7Fhir\R5\ReferenceType $claim = null)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * A code to convey how the claims are related.
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
     * A code to convey how the claims are related.
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
     * Gets as reference
     *
     * An alternate organizational reference to the case or file to which this particular claim pertains.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $reference
     * @return self
     */
    public function setReference(?\TKusy\Hl7Fhir\R5\IdentifierType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }


}

