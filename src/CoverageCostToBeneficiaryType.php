<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CoverageCostToBeneficiaryType
 *
 * Financial instrument which may be used to reimburse or pay for health care products and services. Includes both insurance and self-payment.
 * XSD Type: Coverage.CostToBeneficiary
 */
class CoverageCostToBeneficiaryType extends BackboneElementType
{

    /**
     * The category of patient centric costs associated with treatment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The amount due from the patient for the cost category. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * The amount due from the patient for the cost category. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $valueMoney
     */
    private $valueMoney = null;

    /**
     * A suite of codes indicating exceptions or reductions to patient costs and their effective periods.
     *
     * @var \TKusy\Hl7FhirR4\CoverageExceptionType[] $exception
     */
    private $exception = null;

    /**
     * Gets as type
     *
     * The category of patient centric costs associated with treatment.
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
     * The category of patient centric costs associated with treatment.
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
     * Gets as valueQuantity
     *
     * The amount due from the patient for the cost category. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * The amount due from the patient for the cost category. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(\TKusy\Hl7FhirR4\QuantityType $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueMoney
     *
     * The amount due from the patient for the cost category. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * Sets a new valueMoney
     *
     * The amount due from the patient for the cost category. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $valueMoney
     * @return self
     */
    public function setValueMoney(\TKusy\Hl7FhirR4\MoneyType $valueMoney)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * Adds as exception
     *
     * A suite of codes indicating exceptions or reductions to patient costs and their effective periods.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CoverageExceptionType $exception
     */
    public function addToException(\TKusy\Hl7FhirR4\CoverageExceptionType $exception)
    {
        $this->exception[] = $exception;
        return $this;
    }

    /**
     * isset exception
     *
     * A suite of codes indicating exceptions or reductions to patient costs and their effective periods.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetException($index)
    {
        return isset($this->exception[$index]);
    }

    /**
     * unset exception
     *
     * A suite of codes indicating exceptions or reductions to patient costs and their effective periods.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetException($index)
    {
        unset($this->exception[$index]);
    }

    /**
     * Gets as exception
     *
     * A suite of codes indicating exceptions or reductions to patient costs and their effective periods.
     *
     * @return \TKusy\Hl7FhirR4\CoverageExceptionType[]
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Sets a new exception
     *
     * A suite of codes indicating exceptions or reductions to patient costs and their effective periods.
     *
     * @param \TKusy\Hl7FhirR4\CoverageExceptionType[] $exception
     * @return self
     */
    public function setException(array $exception)
    {
        $this->exception = $exception;
        return $this;
    }


}

