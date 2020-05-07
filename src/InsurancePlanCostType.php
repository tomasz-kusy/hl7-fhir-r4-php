<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing InsurancePlanCostType
 *
 * Details of a Health Insurance product/plan provided by an organization.
 * XSD Type: InsurancePlan.Cost
 */
class InsurancePlanCostType extends BackboneElementType
{

    /**
     * Type of cost (copay; individual cap; family cap; coinsurance; deductible).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Whether the cost applies to in-network or out-of-network providers (in-network; out-of-network; other).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $applicability
     */
    private $applicability = null;

    /**
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $qualifiers
     */
    private $qualifiers = [
        
    ];

    /**
     * The actual cost value. (some of the costs may be represented as percentages rather than currency, e.g. 10% coinsurance).
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $value
     */
    private $value = null;

    /**
     * Gets as type
     *
     * Type of cost (copay; individual cap; family cap; coinsurance; deductible).
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
     * Type of cost (copay; individual cap; family cap; coinsurance; deductible).
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
     * Gets as applicability
     *
     * Whether the cost applies to in-network or out-of-network providers (in-network; out-of-network; other).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getApplicability()
    {
        return $this->applicability;
    }

    /**
     * Sets a new applicability
     *
     * Whether the cost applies to in-network or out-of-network providers (in-network; out-of-network; other).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $applicability
     * @return self
     */
    public function setApplicability(\TKusy\Hl7FhirR4\CodeableConceptType $applicability)
    {
        $this->applicability = $applicability;
        return $this;
    }

    /**
     * Adds as qualifiers
     *
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $qualifiers
     */
    public function addToQualifiers(\TKusy\Hl7FhirR4\CodeableConceptType $qualifiers)
    {
        $this->qualifiers[] = $qualifiers;
        return $this;
    }

    /**
     * isset qualifiers
     *
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualifiers($index)
    {
        return isset($this->qualifiers[$index]);
    }

    /**
     * unset qualifiers
     *
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualifiers($index)
    {
        unset($this->qualifiers[$index]);
    }

    /**
     * Gets as qualifiers
     *
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getQualifiers()
    {
        return $this->qualifiers;
    }

    /**
     * Sets a new qualifiers
     *
     * Additional information about the cost, such as information about funding sources (e.g. HSA, HRA, FSA, RRA).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $qualifiers
     * @return self
     */
    public function setQualifiers(array $qualifiers)
    {
        $this->qualifiers = $qualifiers;
        return $this;
    }

    /**
     * Gets as value
     *
     * The actual cost value. (some of the costs may be represented as percentages rather than currency, e.g. 10% coinsurance).
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The actual cost value. (some of the costs may be represented as percentages rather than currency, e.g. 10% coinsurance).
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7FhirR4\QuantityType $value)
    {
        $this->value = $value;
        return $this;
    }


}

