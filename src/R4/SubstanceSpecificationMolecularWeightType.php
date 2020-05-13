<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceSpecificationMolecularWeightType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.MolecularWeight
 */
class SubstanceSpecificationMolecularWeightType extends BackboneElementType
{

    /**
     * The method by which the molecular weight was determined.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * Type of molecular weight such as exact, average (also known as. number average), weight average.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $amount
     */
    private $amount = null;

    /**
     * Gets as method
     *
     * The method by which the molecular weight was determined.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * The method by which the molecular weight was determined.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7Fhir\R4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of molecular weight such as exact, average (also known as. number average), weight average.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of molecular weight such as exact, average (also known as. number average), weight average.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7Fhir\R4\QuantityType $amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

