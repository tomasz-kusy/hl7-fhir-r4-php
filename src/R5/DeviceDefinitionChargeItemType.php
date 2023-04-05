<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionChargeItemType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.ChargeItem
 */
class DeviceDefinitionChargeItemType extends BackboneElementType
{

    /**
     * The code or reference for the charge item.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $chargeItemCode
     */
    private $chargeItemCode = null;

    /**
     * Coefficient applicable to the billing code.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $count
     */
    private $count = null;

    /**
     * A specific time period in which this charge item applies.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * The context to which this charge item applies.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * Gets as chargeItemCode
     *
     * The code or reference for the charge item.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getChargeItemCode()
    {
        return $this->chargeItemCode;
    }

    /**
     * Sets a new chargeItemCode
     *
     * The code or reference for the charge item.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $chargeItemCode
     * @return self
     */
    public function setChargeItemCode(\TKusy\Hl7Fhir\R5\CodeableReferenceType $chargeItemCode)
    {
        $this->chargeItemCode = $chargeItemCode;
        return $this;
    }

    /**
     * Gets as count
     *
     * Coefficient applicable to the billing code.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * Coefficient applicable to the billing code.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $count
     * @return self
     */
    public function setCount(\TKusy\Hl7Fhir\R5\QuantityType $count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * A specific time period in which this charge item applies.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * A specific time period in which this charge item applies.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Adds as useContext
     *
     * The context to which this charge item applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UsageContextType $useContext
     */
    public function addToUseContext(\TKusy\Hl7Fhir\R5\UsageContextType $useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * isset useContext
     *
     * The context to which this charge item applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseContext($index)
    {
        return isset($this->useContext[$index]);
    }

    /**
     * unset useContext
     *
     * The context to which this charge item applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseContext($index)
    {
        unset($this->useContext[$index]);
    }

    /**
     * Gets as useContext
     *
     * The context to which this charge item applies.
     *
     * @return \TKusy\Hl7Fhir\R5\UsageContextType[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Sets a new useContext
     *
     * The context to which this charge item applies.
     *
     * @param \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     * @return self
     */
    public function setUseContext(array $useContext = null)
    {
        $this->useContext = $useContext;
        return $this;
    }


}

