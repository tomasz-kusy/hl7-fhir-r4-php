<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgePackagingType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Packaging
 */
class MedicationKnowledgePackagingType extends BackboneElementType
{

    /**
     * The cost of the packaged medication.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType[] $cost
     */
    private $cost = null;

    /**
     * A reference to a PackagedProductDefinition that provides the details of the product that is in the packaging and is being priced.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $packagedProduct
     */
    private $packagedProduct = null;

    /**
     * Adds as cost
     *
     * The cost of the packaged medication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType $cost
     */
    public function addToCost(\TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType $cost)
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * isset cost
     *
     * The cost of the packaged medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCost($index)
    {
        return isset($this->cost[$index]);
    }

    /**
     * unset cost
     *
     * The cost of the packaged medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCost($index)
    {
        unset($this->cost[$index]);
    }

    /**
     * Gets as cost
     *
     * The cost of the packaged medication.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType[]
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets a new cost
     *
     * The cost of the packaged medication.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType[] $cost
     * @return self
     */
    public function setCost(array $cost = null)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Gets as packagedProduct
     *
     * A reference to a PackagedProductDefinition that provides the details of the product that is in the packaging and is being priced.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPackagedProduct()
    {
        return $this->packagedProduct;
    }

    /**
     * Sets a new packagedProduct
     *
     * A reference to a PackagedProductDefinition that provides the details of the product that is in the packaging and is being priced.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $packagedProduct
     * @return self
     */
    public function setPackagedProduct(?\TKusy\Hl7Fhir\R5\ReferenceType $packagedProduct = null)
    {
        $this->packagedProduct = $packagedProduct;
        return $this;
    }


}

