<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $characteristicCodeableConcept
     */
    private $characteristicCodeableConcept = null;

    /**
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $characteristicQuantity
     */
    private $characteristicQuantity = null;

    /**
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @var string[] $value
     */
    private $value = null;

    /**
     * Gets as characteristicCodeableConcept
     *
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $characteristicCodeableConcept
     * @return self
     */
    public function setCharacteristicCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $characteristicCodeableConcept)
    {
        $this->characteristicCodeableConcept = $characteristicCodeableConcept;
        return $this;
    }

    /**
     * Gets as characteristicQuantity
     *
     * Specific characteristic that is relevant to the administration guideline (e.g. height, weight, gender). (choose any one of characteristic*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
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
     * @param \TKusy\Hl7FhirR4\QuantityType $characteristicQuantity
     * @return self
     */
    public function setCharacteristicQuantity(\TKusy\Hl7FhirR4\QuantityType $characteristicQuantity)
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
     * @param string $value
     */
    public function addToValue($value)
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
     * @return string[]
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
     * @param string[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }


}

