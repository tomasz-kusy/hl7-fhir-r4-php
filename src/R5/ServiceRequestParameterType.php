<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ServiceRequestParameterType
 *
 * A record of a request for service such as diagnostic investigations, treatments, or operations to be performed.
 * XSD Type: ServiceRequest.Parameter
 */
class ServiceRequestParameterType extends BackboneElementType
{

    /**
     * A value representing the additional detail or instructions for the order (e.g., catheter insertion, body elevation, descriptive device configuration and/or setting instructions).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $valueRatio
     */
    private $valueRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $valueString
     */
    private $valueString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * Gets as code
     *
     * A value representing the additional detail or instructions for the order (e.g., catheter insertion, body elevation, descriptive device configuration and/or setting instructions).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A value representing the additional detail or instructions for the order (e.g., catheter insertion, body elevation, descriptive device configuration and/or setting instructions).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
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
     * Gets as valueRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Sets a new valueRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $valueRatio
     * @return self
     */
    public function setValueRatio(?\TKusy\Hl7Fhir\R5\RatioType $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * Gets as valueRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $valueRange
     * @return self
     */
    public function setValueRange(?\TKusy\Hl7Fhir\R5\RangeType $valueRange = null)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $valueBoolean = null)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $valueString
     * @return self
     */
    public function setValueString(?\TKusy\Hl7Fhir\R5\StringType $valueString = null)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valuePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * Sets a new valuePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $valuePeriod
     * @return self
     */
    public function setValuePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }


}

