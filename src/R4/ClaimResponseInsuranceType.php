<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ClaimResponseInsuranceType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.Insurance
 */
class ClaimResponseInsuranceType extends BackboneElementType
{

    /**
     * A number to uniquely identify insurance entries and provide a sequence of coverages to convey coordination of benefit order.
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * A flag to indicate that this Coverage is to be used for adjudication of this claim when set to true.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $focal
     */
    private $focal = null;

    /**
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $coverage
     */
    private $coverage = null;

    /**
     * A business agreement number established between the provider and the insurer for special business processing purposes.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $businessArrangement
     */
    private $businessArrangement = null;

    /**
     * The result of the adjudication of the line items for the Coverage specified in this insurance.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $claimResponse
     */
    private $claimResponse = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify insurance entries and provide a sequence of coverages to convey coordination of benefit order.
     *
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A number to uniquely identify insurance entries and provide a sequence of coverages to convey coordination of benefit order.
     *
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R4\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as focal
     *
     * A flag to indicate that this Coverage is to be used for adjudication of this claim when set to true.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getFocal()
    {
        return $this->focal;
    }

    /**
     * Sets a new focal
     *
     * A flag to indicate that this Coverage is to be used for adjudication of this claim when set to true.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $focal
     * @return self
     */
    public function setFocal(\TKusy\Hl7Fhir\R4\BooleanType $focal)
    {
        $this->focal = $focal;
        return $this;
    }

    /**
     * Gets as coverage
     *
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $coverage
     * @return self
     */
    public function setCoverage(\TKusy\Hl7Fhir\R4\ReferenceType $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as businessArrangement
     *
     * A business agreement number established between the provider and the insurer for special business processing purposes.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getBusinessArrangement()
    {
        return $this->businessArrangement;
    }

    /**
     * Sets a new businessArrangement
     *
     * A business agreement number established between the provider and the insurer for special business processing purposes.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $businessArrangement
     * @return self
     */
    public function setBusinessArrangement(\TKusy\Hl7Fhir\R4\StringType $businessArrangement)
    {
        $this->businessArrangement = $businessArrangement;
        return $this;
    }

    /**
     * Gets as claimResponse
     *
     * The result of the adjudication of the line items for the Coverage specified in this insurance.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * Sets a new claimResponse
     *
     * The result of the adjudication of the line items for the Coverage specified in this insurance.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $claimResponse
     * @return self
     */
    public function setClaimResponse(\TKusy\Hl7Fhir\R4\ReferenceType $claimResponse)
    {
        $this->claimResponse = $claimResponse;
        return $this;
    }


}

