<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Is a flag to indicate whether the benefits refer to in-network providers or out-of-network providers.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $network
     */
    private $network = null;

    /**
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $unit
     */
    private $unit = null;

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $term
     */
    private $term = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MoneyType $valueMoney
     */
    private $valueMoney = null;

    /**
     * A suite of codes indicating exceptions or reductions to patient costs and their effective periods.
     *
     * @var \TKusy\Hl7Fhir\R5\CoverageExceptionType[] $exception
     */
    private $exception = null;

    /**
     * Gets as type
     *
     * The category of patient centric costs associated with treatment.
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
     * The category of patient centric costs associated with treatment.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(?\TKusy\Hl7Fhir\R5\CodeableConceptType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as network
     *
     * Is a flag to indicate whether the benefits refer to in-network providers or out-of-network providers.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * Is a flag to indicate whether the benefits refer to in-network providers or out-of-network providers.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $network
     * @return self
     */
    public function setNetwork(?\TKusy\Hl7Fhir\R5\CodeableConceptType $network = null)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Gets as unit
     *
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $unit
     * @return self
     */
    public function setUnit(?\TKusy\Hl7Fhir\R5\CodeableConceptType $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as term
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $term
     * @return self
     */
    public function setTerm(?\TKusy\Hl7Fhir\R5\CodeableConceptType $term = null)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueMoney
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * Sets a new valueMoney
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $valueMoney
     * @return self
     */
    public function setValueMoney(?\TKusy\Hl7Fhir\R5\MoneyType $valueMoney = null)
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
     * @param \TKusy\Hl7Fhir\R5\CoverageExceptionType $exception
     */
    public function addToException(\TKusy\Hl7Fhir\R5\CoverageExceptionType $exception)
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
     * @return \TKusy\Hl7Fhir\R5\CoverageExceptionType[]
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
     * @param \TKusy\Hl7Fhir\R5\CoverageExceptionType[] $exception
     * @return self
     */
    public function setException(array $exception = null)
    {
        $this->exception = $exception;
        return $this;
    }


}

