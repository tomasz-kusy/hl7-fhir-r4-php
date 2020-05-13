<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing RangeType
 *
 * A set of ordered Quantities defined by a low and high limit.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Range
 */
class RangeType extends ElementType
{

    /**
     * The low limit. The boundary is inclusive.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $low
     */
    private $low = null;

    /**
     * The high limit. The boundary is inclusive.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $high
     */
    private $high = null;

    /**
     * Gets as low
     *
     * The low limit. The boundary is inclusive.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Sets a new low
     *
     * The low limit. The boundary is inclusive.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $low
     * @return self
     */
    public function setLow(\TKusy\Hl7Fhir\R4\QuantityType $low)
    {
        $this->low = $low;
        return $this;
    }

    /**
     * Gets as high
     *
     * The high limit. The boundary is inclusive.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Sets a new high
     *
     * The high limit. The boundary is inclusive.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $high
     * @return self
     */
    public function setHigh(\TKusy\Hl7Fhir\R4\QuantityType $high)
    {
        $this->high = $high;
        return $this;
    }


}

