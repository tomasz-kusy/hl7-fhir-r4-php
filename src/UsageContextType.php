<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing UsageContextType
 *
 * Specifies clinical/business/etc. metadata that can be used to retrieve, index and/or categorize an artifact. This metadata can either be specific to the applicable population (e.g., age category, DRG) or the specific context of care (e.g., venue, care setting, provider of care).If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: UsageContext
 */
class UsageContextType extends ElementType
{

    /**
     * A code that identifies the type of context being specified by this usage context.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $code
     */
    private $code = null;

    /**
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Gets as code
     *
     * A code that identifies the type of context being specified by this usage context.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that identifies the type of context being specified by this usage context.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodingType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
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
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
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
     * Gets as valueQuantity
     *
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
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
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
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
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
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
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
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
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
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
     * A value that defines the context specified in this context of use. The interpretation of the value is defined by the code. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(\TKusy\Hl7FhirR4\ReferenceType $valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }


}

