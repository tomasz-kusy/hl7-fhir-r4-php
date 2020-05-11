<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeDrugCharacteristicType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.DrugCharacteristic
 */
class MedicationKnowledgeDrugCharacteristicType extends BackboneElementType
{

    /**
     * A code specifying which characteristic of the medicine is being described (for example, colour, shape, imprint).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Description of the characteristic. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * Description of the characteristic. (choose any one of value*, but only one)
     *
     * @var string $valueString
     */
    private $valueString = null;

    /**
     * Description of the characteristic. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * Description of the characteristic. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary
     */
    private $valueBase64Binary = null;

    /**
     * Gets as type
     *
     * A code specifying which characteristic of the medicine is being described (for example, colour, shape, imprint).
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
     * A code specifying which characteristic of the medicine is being described (for example, colour, shape, imprint).
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
     * Gets as valueCodeableConcept
     *
     * Description of the characteristic. (choose any one of value*, but only one)
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
     * Description of the characteristic. (choose any one of value*, but only one)
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
     * Gets as valueString
     *
     * Description of the characteristic. (choose any one of value*, but only one)
     *
     * @return string
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * Description of the characteristic. (choose any one of value*, but only one)
     *
     * @param string $valueString
     * @return self
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * Description of the characteristic. (choose any one of value*, but only one)
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
     * Description of the characteristic. (choose any one of value*, but only one)
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
     * Gets as valueBase64Binary
     *
     * Description of the characteristic. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\Base64BinaryType
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * Sets a new valueBase64Binary
     *
     * Description of the characteristic. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary
     * @return self
     */
    public function setValueBase64Binary(\TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }


}

