<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing GroupCharacteristicType
 *
 * Represents a defined collection of entities that may be discussed or acted upon collectively but which are not expected to act collectively, and are not formally or legally recognized; i.e. a collection of entities that isn't an Organization.
 * XSD Type: Group.Characteristic
 */
class GroupCharacteristicType extends BackboneElementType
{

    /**
     * A code that identifies the kind of trait being asserted.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @var bool $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * If true, indicates the characteristic is one that is NOT held by members of the group.
     *
     * @var bool $exclude
     */
    private $exclude = null;

    /**
     * The period over which the characteristic is tested; e.g. the patient had an operation during the month of June.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as code
     *
     * A code that identifies the kind of trait being asserted.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that identifies the kind of trait being asserted.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @return bool
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @param bool $valueBoolean
     * @return self
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
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
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
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
     * Gets as valueRange
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $valueRange
     * @return self
     */
    public function setValueRange(\TKusy\Hl7FhirR4\RangeType $valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Sets a new valueReference
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(\TKusy\Hl7FhirR4\ReferenceType $valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Gets as exclude
     *
     * If true, indicates the characteristic is one that is NOT held by members of the group.
     *
     * @return bool
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Sets a new exclude
     *
     * If true, indicates the characteristic is one that is NOT held by members of the group.
     *
     * @param bool $exclude
     * @return self
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period over which the characteristic is tested; e.g. the patient had an operation during the month of June.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period over which the characteristic is tested; e.g. the patient had an operation during the month of June.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

