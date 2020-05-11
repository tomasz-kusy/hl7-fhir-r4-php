<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitInsuranceType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.Insurance
 */
class ExplanationOfBenefitInsuranceType extends BackboneElementType
{

    /**
     * A flag to indicate that this Coverage is to be used for adjudication of this claim when set to true.
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
     * Reference numbers previously provided by the insurer to the provider to be quoted on subsequent claims containing services or products related to the prior authorization.
     *
     * @var string[] $preAuthRef
     */
    private $preAuthRef = null;

    /**
     * Gets as focal
     *
     * A flag to indicate that this Coverage is to be used for adjudication of this claim when set to true.
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
     * A flag to indicate that this Coverage is to be used for adjudication of this claim when set to true.
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
     * Adds as preAuthRef
     *
     * Reference numbers previously provided by the insurer to the provider to be quoted on subsequent claims containing services or products related to the prior authorization.
     *
     * @return self
     * @param string $preAuthRef
     */
    public function addToPreAuthRef($preAuthRef)
    {
        $this->preAuthRef[] = $preAuthRef;
        return $this;
    }

    /**
     * isset preAuthRef
     *
     * Reference numbers previously provided by the insurer to the provider to be quoted on subsequent claims containing services or products related to the prior authorization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreAuthRef($index)
    {
        return isset($this->preAuthRef[$index]);
    }

    /**
     * unset preAuthRef
     *
     * Reference numbers previously provided by the insurer to the provider to be quoted on subsequent claims containing services or products related to the prior authorization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreAuthRef($index)
    {
        unset($this->preAuthRef[$index]);
    }

    /**
     * Gets as preAuthRef
     *
     * Reference numbers previously provided by the insurer to the provider to be quoted on subsequent claims containing services or products related to the prior authorization.
     *
     * @return string[]
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * Sets a new preAuthRef
     *
     * Reference numbers previously provided by the insurer to the provider to be quoted on subsequent claims containing services or products related to the prior authorization.
     *
     * @param string[] $preAuthRef
     * @return self
     */
    public function setPreAuthRef(array $preAuthRef)
    {
        $this->preAuthRef = $preAuthRef;
        return $this;
    }


}

