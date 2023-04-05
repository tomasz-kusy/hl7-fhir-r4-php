<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceVariableDefinitionByCombinationType
 *
 * The EvidenceVariable resource describes an element that knowledge (Evidence) is about.
 * XSD Type: EvidenceVariable.DefinitionByCombination
 */
class EvidenceVariableDefinitionByCombinationType extends BackboneElementType
{

    /**
     * Used to specify if two or more characteristics are combined with OR or AND.
     *
     * @var \TKusy\Hl7Fhir\R5\CharacteristicCombinationType $code
     */
    private $code = null;

    /**
     * Provides the value of "n" when "at-least" or "at-most" codes are used.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $threshold
     */
    private $threshold = null;

    /**
     * A defining factor of the characteristic.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceVariableCharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Gets as code
     *
     * Used to specify if two or more characteristics are combined with OR or AND.
     *
     * @return \TKusy\Hl7Fhir\R5\CharacteristicCombinationType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Used to specify if two or more characteristics are combined with OR or AND.
     *
     * @param \TKusy\Hl7Fhir\R5\CharacteristicCombinationType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CharacteristicCombinationType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as threshold
     *
     * Provides the value of "n" when "at-least" or "at-most" codes are used.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * Sets a new threshold
     *
     * Provides the value of "n" when "at-least" or "at-most" codes are used.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $threshold
     * @return self
     */
    public function setThreshold(?\TKusy\Hl7Fhir\R5\PositiveIntType $threshold = null)
    {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * A defining factor of the characteristic.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariableCharacteristicType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R5\EvidenceVariableCharacteristicType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * A defining factor of the characteristic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristic($index)
    {
        return isset($this->characteristic[$index]);
    }

    /**
     * unset characteristic
     *
     * A defining factor of the characteristic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristic($index)
    {
        unset($this->characteristic[$index]);
    }

    /**
     * Gets as characteristic
     *
     * A defining factor of the characteristic.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceVariableCharacteristicType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * A defining factor of the characteristic.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariableCharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }


}

