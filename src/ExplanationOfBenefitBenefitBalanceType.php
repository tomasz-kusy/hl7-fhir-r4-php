<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitBenefitBalanceType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.BenefitBalance
 */
class ExplanationOfBenefitBenefitBalanceType extends BackboneElementType
{

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicates the product or service is included in the coverage.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $excluded
     */
    private $excluded = null;

    /**
     * A short name or tag for the benefit.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A richer description of the benefit or services covered.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Is a flag to indicate whether the benefits refer to in-network providers or out-of-network providers.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $network
     */
    private $network = null;

    /**
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $unit
     */
    private $unit = null;

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $term
     */
    private $term = null;

    /**
     * Benefits Used to date.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitFinancialType[] $financial
     */
    private $financial = null;

    /**
     * Gets as category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as excluded
     *
     * True if the indicated class of service is excluded from the plan, missing or False indicates the product or service is included in the coverage.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getExcluded()
    {
        return $this->excluded;
    }

    /**
     * Sets a new excluded
     *
     * True if the indicated class of service is excluded from the plan, missing or False indicates the product or service is included in the coverage.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $excluded
     * @return self
     */
    public function setExcluded(\TKusy\Hl7FhirR4\BooleanType $excluded)
    {
        $this->excluded = $excluded;
        return $this;
    }

    /**
     * Gets as name
     *
     * A short name or tag for the benefit.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A short name or tag for the benefit.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * A richer description of the benefit or services covered.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A richer description of the benefit or services covered.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as network
     *
     * Is a flag to indicate whether the benefits refer to in-network providers or out-of-network providers.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $network
     * @return self
     */
    public function setNetwork(\TKusy\Hl7FhirR4\CodeableConceptType $network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Gets as unit
     *
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $unit
     * @return self
     */
    public function setUnit(\TKusy\Hl7FhirR4\CodeableConceptType $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as term
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $term
     * @return self
     */
    public function setTerm(\TKusy\Hl7FhirR4\CodeableConceptType $term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Adds as financial
     *
     * Benefits Used to date.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitFinancialType $financial
     */
    public function addToFinancial(\TKusy\Hl7FhirR4\ExplanationOfBenefitFinancialType $financial)
    {
        $this->financial[] = $financial;
        return $this;
    }

    /**
     * isset financial
     *
     * Benefits Used to date.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinancial($index)
    {
        return isset($this->financial[$index]);
    }

    /**
     * unset financial
     *
     * Benefits Used to date.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinancial($index)
    {
        unset($this->financial[$index]);
    }

    /**
     * Gets as financial
     *
     * Benefits Used to date.
     *
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitFinancialType[]
     */
    public function getFinancial()
    {
        return $this->financial;
    }

    /**
     * Sets a new financial
     *
     * Benefits Used to date.
     *
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitFinancialType[] $financial
     * @return self
     */
    public function setFinancial(array $financial)
    {
        $this->financial = $financial;
        return $this;
    }


}

