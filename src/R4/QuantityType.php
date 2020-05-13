<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing QuantityType
 *
 * A measured amount (or an amount that can potentially be measured). Note that measured amounts include amounts that are not precisely quantified, including amounts involving arbitrary units and floating currencies.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Quantity
 */
class QuantityType extends ElementType
{

    /**
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $value
     */
    private $value = null;

    /**
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityComparatorType $comparator
     */
    private $comparator = null;

    /**
     * A human-readable form of the unit.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $unit
     */
    private $unit = null;

    /**
     * The identification of the system that provides the coded form of the unit.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $system
     */
    private $system = null;

    /**
     * A computer processable form of the unit in some unit representation system.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $code
     */
    private $code = null;

    /**
     * Gets as value
     *
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R4\DecimalType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as comparator
     *
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityComparatorType
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * Sets a new comparator
     *
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityComparatorType $comparator
     * @return self
     */
    public function setComparator(\TKusy\Hl7Fhir\R4\QuantityComparatorType $comparator)
    {
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * Gets as unit
     *
     * A human-readable form of the unit.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * A human-readable form of the unit.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $unit
     * @return self
     */
    public function setUnit(\TKusy\Hl7Fhir\R4\StringType $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as system
     *
     * The identification of the system that provides the coded form of the unit.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * The identification of the system that provides the coded form of the unit.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $system
     * @return self
     */
    public function setSystem(\TKusy\Hl7Fhir\R4\UriType $system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Gets as code
     *
     * A computer processable form of the unit in some unit representation system.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A computer processable form of the unit in some unit representation system.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }


}

