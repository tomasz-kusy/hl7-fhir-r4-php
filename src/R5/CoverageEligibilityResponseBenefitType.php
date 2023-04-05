<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $allowedUnsignedInt
     */
    private $allowedUnsignedInt = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $allowedString
     */
    private $allowedString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MoneyType $allowedMoney
     */
    private $allowedMoney = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $usedUnsignedInt
     */
    private $usedUnsignedInt = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $usedString
     */
    private $usedString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MoneyType $usedMoney
     */
    private $usedMoney = null;

    /**
     * Gets as type
     *
     * Classification of benefit being provided.
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
     * Classification of benefit being provided.
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
     * Gets as allowedUnsignedInt
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getAllowedUnsignedInt()
    {
        return $this->allowedUnsignedInt;
    }

    /**
     * Sets a new allowedUnsignedInt
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $allowedUnsignedInt
     * @return self
     */
    public function setAllowedUnsignedInt(?\TKusy\Hl7Fhir\R5\UnsignedIntType $allowedUnsignedInt = null)
    {
        $this->allowedUnsignedInt = $allowedUnsignedInt;
        return $this;
    }

    /**
     * Gets as allowedString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAllowedString()
    {
        return $this->allowedString;
    }

    /**
     * Sets a new allowedString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $allowedString
     * @return self
     */
    public function setAllowedString(?\TKusy\Hl7Fhir\R5\StringType $allowedString = null)
    {
        $this->allowedString = $allowedString;
        return $this;
    }

    /**
     * Gets as allowedMoney
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getAllowedMoney()
    {
        return $this->allowedMoney;
    }

    /**
     * Sets a new allowedMoney
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $allowedMoney
     * @return self
     */
    public function setAllowedMoney(?\TKusy\Hl7Fhir\R5\MoneyType $allowedMoney = null)
    {
        $this->allowedMoney = $allowedMoney;
        return $this;
    }

    /**
     * Gets as usedUnsignedInt
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getUsedUnsignedInt()
    {
        return $this->usedUnsignedInt;
    }

    /**
     * Sets a new usedUnsignedInt
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $usedUnsignedInt
     * @return self
     */
    public function setUsedUnsignedInt(?\TKusy\Hl7Fhir\R5\UnsignedIntType $usedUnsignedInt = null)
    {
        $this->usedUnsignedInt = $usedUnsignedInt;
        return $this;
    }

    /**
     * Gets as usedString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getUsedString()
    {
        return $this->usedString;
    }

    /**
     * Sets a new usedString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $usedString
     * @return self
     */
    public function setUsedString(?\TKusy\Hl7Fhir\R5\StringType $usedString = null)
    {
        $this->usedString = $usedString;
        return $this;
    }

    /**
     * Gets as usedMoney
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getUsedMoney()
    {
        return $this->usedMoney;
    }

    /**
     * Sets a new usedMoney
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $usedMoney
     * @return self
     */
    public function setUsedMoney(?\TKusy\Hl7Fhir\R5\MoneyType $usedMoney = null)
    {
        $this->usedMoney = $usedMoney;
        return $this;
    }


}

