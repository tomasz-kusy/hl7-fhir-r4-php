<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceAmountType
 *
 * Chemical substances are a single substance type whose primary defining element is the molecular structure. Chemical substances shall be defined on the basis of their complete covalent molecular structure; the presence of a salt (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade, physical form or particle size are not taken into account in the definition of a chemical substance or in the assignment of a Substance ID.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: SubstanceAmount
 */
class SubstanceAmountType extends BackboneElementType
{

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $amountQuantity
     */
    private $amountQuantity = null;

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $amountRange
     */
    private $amountRange = null;

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $amountString
     */
    private $amountString = null;

    /**
     * Most elements that require a quantitative value will also have a field called amount type. Amount type should always be specified because the actual value of the amount is often dependent on it. EXAMPLE: In capturing the actual relative amounts of substances or molecular fragments it is essential to indicate whether the amount refers to a mole ratio or weight ratio. For any given element an effort should be made to use same the amount type for all related definitional elements.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $amountType
     */
    private $amountType = null;

    /**
     * A textual comment on a numeric value.
     *
     * @var \TKusy\Hl7FhirR4\StringType $amountText
     */
    private $amountText = null;

    /**
     * Reference range of possible or expected values.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceAmountReferenceRangeType $referenceRange
     */
    private $referenceRange = null;

    /**
     * Gets as amountQuantity
     *
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }

    /**
     * Sets a new amountQuantity
     *
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $amountQuantity
     * @return self
     */
    public function setAmountQuantity(\TKusy\Hl7FhirR4\QuantityType $amountQuantity)
    {
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * Gets as amountRange
     *
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getAmountRange()
    {
        return $this->amountRange;
    }

    /**
     * Sets a new amountRange
     *
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $amountRange
     * @return self
     */
    public function setAmountRange(\TKusy\Hl7FhirR4\RangeType $amountRange)
    {
        $this->amountRange = $amountRange;
        return $this;
    }

    /**
     * Gets as amountString
     *
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getAmountString()
    {
        return $this->amountString;
    }

    /**
     * Sets a new amountString
     *
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $amountString
     * @return self
     */
    public function setAmountString(\TKusy\Hl7FhirR4\StringType $amountString)
    {
        $this->amountString = $amountString;
        return $this;
    }

    /**
     * Gets as amountType
     *
     * Most elements that require a quantitative value will also have a field called amount type. Amount type should always be specified because the actual value of the amount is often dependent on it. EXAMPLE: In capturing the actual relative amounts of substances or molecular fragments it is essential to indicate whether the amount refers to a mole ratio or weight ratio. For any given element an effort should be made to use same the amount type for all related definitional elements.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAmountType()
    {
        return $this->amountType;
    }

    /**
     * Sets a new amountType
     *
     * Most elements that require a quantitative value will also have a field called amount type. Amount type should always be specified because the actual value of the amount is often dependent on it. EXAMPLE: In capturing the actual relative amounts of substances or molecular fragments it is essential to indicate whether the amount refers to a mole ratio or weight ratio. For any given element an effort should be made to use same the amount type for all related definitional elements.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $amountType
     * @return self
     */
    public function setAmountType(\TKusy\Hl7FhirR4\CodeableConceptType $amountType)
    {
        $this->amountType = $amountType;
        return $this;
    }

    /**
     * Gets as amountText
     *
     * A textual comment on a numeric value.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getAmountText()
    {
        return $this->amountText;
    }

    /**
     * Sets a new amountText
     *
     * A textual comment on a numeric value.
     *
     * @param \TKusy\Hl7FhirR4\StringType $amountText
     * @return self
     */
    public function setAmountText(\TKusy\Hl7FhirR4\StringType $amountText)
    {
        $this->amountText = $amountText;
        return $this;
    }

    /**
     * Gets as referenceRange
     *
     * Reference range of possible or expected values.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceAmountReferenceRangeType
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Sets a new referenceRange
     *
     * Reference range of possible or expected values.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceAmountReferenceRangeType $referenceRange
     * @return self
     */
    public function setReferenceRange(\TKusy\Hl7FhirR4\SubstanceAmountReferenceRangeType $referenceRange)
    {
        $this->referenceRange = $referenceRange;
        return $this;
    }


}

