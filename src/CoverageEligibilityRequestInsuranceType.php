<?php

namespace TKusy\Hl7FhirR4;

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
     * @var bool $focal
     */
    private $focal = null;

    /**
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $coverage
     */
    private $coverage = null;

    /**
     * A business agreement number established between the provider and the insurer for special business processing purposes.
     *
     * @var string $businessArrangement
     */
    private $businessArrangement = null;

    /**
     * Gets as focal
     *
     * A flag to indicate that this Coverage is to be used for evaluation of this request when set to true.
     *
     * @return bool
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
     * @param bool $focal
     * @return self
     */
    public function setFocal($focal)
    {
        $this->focal = $focal;
        return $this;
    }

    /**
     * Gets as coverage
     *
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $coverage
     * @return self
     */
    public function setCoverage(\TKusy\Hl7FhirR4\ReferenceType $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as businessArrangement
     *
     * A business agreement number established between the provider and the insurer for special business processing purposes.
     *
     * @return string
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
     * @param string $businessArrangement
     * @return self
     */
    public function setBusinessArrangement($businessArrangement)
    {
        $this->businessArrangement = $businessArrangement;
        return $this;
    }


}

