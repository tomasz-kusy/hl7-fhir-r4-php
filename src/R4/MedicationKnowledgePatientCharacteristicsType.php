<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicationKnowledgePatientCharacteristicsType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.PatientCharacteristics
 */
class MedicationKnowledgePatientCharacteristicsType extends BackboneElementType
{

    /**
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $characteristicCodeableConcept
     */
    private $characteristicCodeableConcept = null;

    /**
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $characteristicQuantity
     */
    private $characteristicQuantity = null;

    /**
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @var \TKusy\Hl7Fhir\R4\StringType[] $value
     */
    private $value = null;

    /**
     * Gets as characteristicCodeableConcept
     *
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCharacteristicCodeableConcept()
    {
        return $this->characteristicCodeableConcept;
    }

    /**
     * Sets a new characteristicCodeableConcept
     *
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $characteristicCodeableConcept
     * @return self
     */
    public function setCharacteristicCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $characteristicCodeableConcept)
    {
        $this->characteristicCodeableConcept = $characteristicCodeableConcept;
        return $this;
    }

    /**
     * Gets as characteristicQuantity
     *
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getCharacteristicQuantity()
    {
        return $this->characteristicQuantity;
    }

    /**
     * Sets a new characteristicQuantity
     *
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $characteristicQuantity
     * @return self
     */
    public function setCharacteristicQuantity(\TKusy\Hl7Fhir\R4\QuantityType $characteristicQuantity)
    {
        $this->characteristicQuantity = $characteristicQuantity;
        return $this;
    }

    /**
     * Adds as value
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\StringType $value
     */
    public function addToValue(\TKusy\Hl7Fhir\R4\StringType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @return \TKusy\Hl7Fhir\R4\StringType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @param \TKusy\Hl7Fhir\R4\StringType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }


}

