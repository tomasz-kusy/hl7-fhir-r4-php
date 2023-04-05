<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InsurancePlanPlanType
 *
 * Details of a Health Insurance product/plan provided by an organization.
 * XSD Type: InsurancePlan.Plan
 */
class InsurancePlanPlanType extends BackboneElementType
{

    /**
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Type of plan. For example, "Platinum" or "High Deductable".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $coverageArea
     */
    private $coverageArea = null;

    /**
     * Reference to the network that providing the type of coverage.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $network
     */
    private $network = null;

    /**
     * Overall costs associated with the plan.
     *
     * @var \TKusy\Hl7Fhir\R5\InsurancePlanGeneralCostType[] $generalCost
     */
    private $generalCost = null;

    /**
     * Costs associated with the coverage provided by the product.
     *
     * @var \TKusy\Hl7Fhir\R5\InsurancePlanSpecificCostType[] $specificCost
     */
    private $specificCost = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of plan. For example, "Platinum" or "High Deductable".
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of plan. For example, "Platinum" or "High Deductable".
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as coverageArea
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $coverageArea
     */
    public function addToCoverageArea(\TKusy\Hl7Fhir\R5\ReferenceType $coverageArea)
    {
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * isset coverageArea
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverageArea($index)
    {
        return isset($this->coverageArea[$index]);
    }

    /**
     * unset coverageArea
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverageArea($index)
    {
        unset($this->coverageArea[$index]);
    }

    /**
     * Gets as coverageArea
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }

    /**
     * Sets a new coverageArea
     *
     * The geographic region in which a health insurance plan's benefits apply.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $coverageArea
     * @return self
     */
    public function setCoverageArea(array $coverageArea = null)
    {
        $this->coverageArea = $coverageArea;
        return $this;
    }

    /**
     * Adds as network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $network
     */
    public function addToNetwork(\TKusy\Hl7Fhir\R5\ReferenceType $network)
    {
        $this->network[] = $network;
        return $this;
    }

    /**
     * isset network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNetwork($index)
    {
        return isset($this->network[$index]);
    }

    /**
     * unset network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNetwork($index)
    {
        unset($this->network[$index]);
    }

    /**
     * Gets as network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $network
     * @return self
     */
    public function setNetwork(array $network = null)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Adds as generalCost
     *
     * Overall costs associated with the plan.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InsurancePlanGeneralCostType $generalCost
     */
    public function addToGeneralCost(\TKusy\Hl7Fhir\R5\InsurancePlanGeneralCostType $generalCost)
    {
        $this->generalCost[] = $generalCost;
        return $this;
    }

    /**
     * isset generalCost
     *
     * Overall costs associated with the plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeneralCost($index)
    {
        return isset($this->generalCost[$index]);
    }

    /**
     * unset generalCost
     *
     * Overall costs associated with the plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeneralCost($index)
    {
        unset($this->generalCost[$index]);
    }

    /**
     * Gets as generalCost
     *
     * Overall costs associated with the plan.
     *
     * @return \TKusy\Hl7Fhir\R5\InsurancePlanGeneralCostType[]
     */
    public function getGeneralCost()
    {
        return $this->generalCost;
    }

    /**
     * Sets a new generalCost
     *
     * Overall costs associated with the plan.
     *
     * @param \TKusy\Hl7Fhir\R5\InsurancePlanGeneralCostType[] $generalCost
     * @return self
     */
    public function setGeneralCost(array $generalCost = null)
    {
        $this->generalCost = $generalCost;
        return $this;
    }

    /**
     * Adds as specificCost
     *
     * Costs associated with the coverage provided by the product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InsurancePlanSpecificCostType $specificCost
     */
    public function addToSpecificCost(\TKusy\Hl7Fhir\R5\InsurancePlanSpecificCostType $specificCost)
    {
        $this->specificCost[] = $specificCost;
        return $this;
    }

    /**
     * isset specificCost
     *
     * Costs associated with the coverage provided by the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecificCost($index)
    {
        return isset($this->specificCost[$index]);
    }

    /**
     * unset specificCost
     *
     * Costs associated with the coverage provided by the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecificCost($index)
    {
        unset($this->specificCost[$index]);
    }

    /**
     * Gets as specificCost
     *
     * Costs associated with the coverage provided by the product.
     *
     * @return \TKusy\Hl7Fhir\R5\InsurancePlanSpecificCostType[]
     */
    public function getSpecificCost()
    {
        return $this->specificCost;
    }

    /**
     * Sets a new specificCost
     *
     * Costs associated with the coverage provided by the product.
     *
     * @param \TKusy\Hl7Fhir\R5\InsurancePlanSpecificCostType[] $specificCost
     * @return self
     */
    public function setSpecificCost(array $specificCost = null)
    {
        $this->specificCost = $specificCost;
        return $this;
    }


}

