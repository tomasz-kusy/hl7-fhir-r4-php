<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicinalProductDefinitionNameType
 *
 * A medicinal product, being a substance or combination of substances that is intended to treat, prevent or diagnose a disease, or to restore, correct or modify physiological functions by exerting a pharmacological, immunological or metabolic action. This resource is intended to define and detail such products and their properties, for uses other than direct patient care (e.g. regulatory use, or drug catalogs).
 * XSD Type: MedicinalProductDefinition.Name
 */
class MedicinalProductDefinitionNameType extends BackboneElementType
{

    /**
     * The full product name.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $productName
     */
    private $productName = null;

    /**
     * Type of product name, such as rINN, BAN, Proprietary, Non-Proprietary.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Coding words or phrases of the name.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionPartType[] $part
     */
    private $part = null;

    /**
     * Country and jurisdiction where the name applies, and associated language.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionUsageType[] $usage
     */
    private $usage = null;

    /**
     * Gets as productName
     *
     * The full product name.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets a new productName
     *
     * The full product name.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $productName
     * @return self
     */
    public function setProductName(\TKusy\Hl7Fhir\R5\StringType $productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of product name, such as rINN, BAN, Proprietary, Non-Proprietary.
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
     * Type of product name, such as rINN, BAN, Proprietary, Non-Proprietary.
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
     * Adds as part
     *
     * Coding words or phrases of the name.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionPartType $part
     */
    public function addToPart(\TKusy\Hl7Fhir\R5\MedicinalProductDefinitionPartType $part)
    {
        $this->part[] = $part;
        return $this;
    }

    /**
     * isset part
     *
     * Coding words or phrases of the name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPart($index)
    {
        return isset($this->part[$index]);
    }

    /**
     * unset part
     *
     * Coding words or phrases of the name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPart($index)
    {
        unset($this->part[$index]);
    }

    /**
     * Gets as part
     *
     * Coding words or phrases of the name.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionPartType[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Sets a new part
     *
     * Coding words or phrases of the name.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionPartType[] $part
     * @return self
     */
    public function setPart(array $part = null)
    {
        $this->part = $part;
        return $this;
    }

    /**
     * Adds as usage
     *
     * Country and jurisdiction where the name applies, and associated language.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionUsageType $usage
     */
    public function addToUsage(\TKusy\Hl7Fhir\R5\MedicinalProductDefinitionUsageType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * Country and jurisdiction where the name applies, and associated language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsage($index)
    {
        return isset($this->usage[$index]);
    }

    /**
     * unset usage
     *
     * Country and jurisdiction where the name applies, and associated language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsage($index)
    {
        unset($this->usage[$index]);
    }

    /**
     * Gets as usage
     *
     * Country and jurisdiction where the name applies, and associated language.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionUsageType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * Country and jurisdiction where the name applies, and associated language.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionUsageType[] $usage
     * @return self
     */
    public function setUsage(array $usage = null)
    {
        $this->usage = $usage;
        return $this;
    }


}

