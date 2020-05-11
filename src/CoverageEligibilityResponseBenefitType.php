<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CoverageEligibilityResponseBenefitType
 *
 * This resource provides eligibility and plan details from the processing of an CoverageEligibilityRequest resource.
 * XSD Type: CoverageEligibilityResponse.Benefit
 */
class CoverageEligibilityResponseBenefitType extends BackboneElementType
{

    /**
     * Classification of benefit being provided.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $allowedUnsignedInt
     */
    private $allowedUnsignedInt = null;

    /**
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $allowedString
     */
    private $allowedString = null;

    /**
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $allowedMoney
     */
    private $allowedMoney = null;

    /**
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $usedUnsignedInt
     */
    private $usedUnsignedInt = null;

    /**
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $usedString
     */
    private $usedString = null;

    /**
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $usedMoney
     */
    private $usedMoney = null;

    /**
     * Gets as type
     *
     * Classification of benefit being provided.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Classification of benefit being provided.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as allowedUnsignedInt
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
     */
    public function getAllowedUnsignedInt()
    {
        return $this->allowedUnsignedInt;
    }

    /**
     * Sets a new allowedUnsignedInt
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $allowedUnsignedInt
     * @return self
     */
    public function setAllowedUnsignedInt(\TKusy\Hl7FhirR4\UnsignedIntType $allowedUnsignedInt)
    {
        $this->allowedUnsignedInt = $allowedUnsignedInt;
        return $this;
    }

    /**
     * Gets as allowedString
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getAllowedString()
    {
        return $this->allowedString;
    }

    /**
     * Sets a new allowedString
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $allowedString
     * @return self
     */
    public function setAllowedString(\TKusy\Hl7FhirR4\StringType $allowedString)
    {
        $this->allowedString = $allowedString;
        return $this;
    }

    /**
     * Gets as allowedMoney
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getAllowedMoney()
    {
        return $this->allowedMoney;
    }

    /**
     * Sets a new allowedMoney
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any one of allowed*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $allowedMoney
     * @return self
     */
    public function setAllowedMoney(\TKusy\Hl7FhirR4\MoneyType $allowedMoney)
    {
        $this->allowedMoney = $allowedMoney;
        return $this;
    }

    /**
     * Gets as usedUnsignedInt
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
     */
    public function getUsedUnsignedInt()
    {
        return $this->usedUnsignedInt;
    }

    /**
     * Sets a new usedUnsignedInt
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $usedUnsignedInt
     * @return self
     */
    public function setUsedUnsignedInt(\TKusy\Hl7FhirR4\UnsignedIntType $usedUnsignedInt)
    {
        $this->usedUnsignedInt = $usedUnsignedInt;
        return $this;
    }

    /**
     * Gets as usedString
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getUsedString()
    {
        return $this->usedString;
    }

    /**
     * Sets a new usedString
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $usedString
     * @return self
     */
    public function setUsedString(\TKusy\Hl7FhirR4\StringType $usedString)
    {
        $this->usedString = $usedString;
        return $this;
    }

    /**
     * Gets as usedMoney
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getUsedMoney()
    {
        return $this->usedMoney;
    }

    /**
     * Sets a new usedMoney
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of used*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $usedMoney
     * @return self
     */
    public function setUsedMoney(\TKusy\Hl7FhirR4\MoneyType $usedMoney)
    {
        $this->usedMoney = $usedMoney;
        return $this;
    }


}

