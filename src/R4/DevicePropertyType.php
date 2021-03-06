<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing DevicePropertyType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * XSD Type: Device.Property
 */
class DevicePropertyType extends BackboneElementType
{

    /**
     * Code that specifies the property DeviceDefinitionPropetyCode (Extensible).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Property value as a quantity.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType[] $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * Property value as a code, e.g., NTP4 (synced to NTP).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $valueCode
     */
    private $valueCode = null;

    /**
     * Gets as type
     *
     * Code that specifies the property DeviceDefinitionPropetyCode (Extensible).
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
     * Code that specifies the property DeviceDefinitionPropetyCode (Extensible).
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
     * Adds as valueQuantity
     *
     * Property value as a quantity.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\QuantityType $valueQuantity
     */
    public function addToValueQuantity(\TKusy\Hl7Fhir\R4\QuantityType $valueQuantity)
    {
        $this->valueQuantity[] = $valueQuantity;
        return $this;
    }

    /**
     * isset valueQuantity
     *
     * Property value as a quantity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueQuantity($index)
    {
        return isset($this->valueQuantity[$index]);
    }

    /**
     * unset valueQuantity
     *
     * Property value as a quantity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueQuantity($index)
    {
        unset($this->valueQuantity[$index]);
    }

    /**
     * Gets as valueQuantity
     *
     * Property value as a quantity.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType[]
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * Property value as a quantity.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType[] $valueQuantity
     * @return self
     */
    public function setValueQuantity(array $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as valueCode
     *
     * Property value as a code, e.g., NTP4 (synced to NTP).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $valueCode
     */
    public function addToValueCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $valueCode)
    {
        $this->valueCode[] = $valueCode;
        return $this;
    }

    /**
     * isset valueCode
     *
     * Property value as a code, e.g., NTP4 (synced to NTP).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueCode($index)
    {
        return isset($this->valueCode[$index]);
    }

    /**
     * unset valueCode
     *
     * Property value as a code, e.g., NTP4 (synced to NTP).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueCode($index)
    {
        unset($this->valueCode[$index]);
    }

    /**
     * Gets as valueCode
     *
     * Property value as a code, e.g., NTP4 (synced to NTP).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * Sets a new valueCode
     *
     * Property value as a code, e.g., NTP4 (synced to NTP).
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $valueCode
     * @return self
     */
    public function setValueCode(array $valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }


}

