<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CoverageEligibilityRequestInsuranceType
 *
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 * XSD Type: CoverageEligibilityRequest.Insurance
 */
class CoverageEligibilityRequestInsuranceType extends BackboneElementType
{

    /**
     * A flag to indicate that this Coverage is to be used for evaluation of this request when set to true.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $focal
     */
    private $focal = null;

    /**
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $coverage
     */
    private $coverage = null;

    /**
     * A business agreement number established between the provider and the insurer for special business processing purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $businessArrangement
     */
    private $businessArrangement = null;

    /**
     * Gets as focal
     *
     * A flag to indicate that this Coverage is to be used for evaluation of this request when set to true.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getFocal()
    {
        return $this->focal;
    }

    /**
     * Sets a new focal
     *
     * A flag to indicate that this Coverage is to be used for evaluation of this request when set to true.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $focal
     * @return self
     */
    public function setFocal(?\TKusy\Hl7Fhir\R5\BooleanType $focal = null)
    {
        $this->focal = $focal;
        return $this;
    }

    /**
     * Gets as coverage
     *
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $coverage
     * @return self
     */
    public function setCoverage(\TKusy\Hl7Fhir\R5\ReferenceType $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as businessArrangement
     *
     * A business agreement number established between the provider and the insurer for special business processing purposes.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $businessArrangement
     * @return self
     */
    public function setBusinessArrangement(?\TKusy\Hl7Fhir\R5\StringType $businessArrangement = null)
    {
        $this->businessArrangement = $businessArrangement;
        return $this;
    }


}

