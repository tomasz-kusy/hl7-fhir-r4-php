<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenDefinitionHandlingType
 *
 * A kind of specimen with associated set of requirements.
 * XSD Type: SpecimenDefinition.Handling
 */
class SpecimenDefinitionHandlingType extends BackboneElementType
{

    /**
     * It qualifies the interval of temperature, which characterizes an occurrence of handling. Conditions that are not related to temperature may be handled in the instruction element.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $temperatureQualifier
     */
    private $temperatureQualifier = null;

    /**
     * The temperature interval for this set of handling instructions.
     *
     * @var \TKusy\Hl7Fhir\R5\RangeType $temperatureRange
     */
    private $temperatureRange = null;

    /**
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $maxDuration
     */
    private $maxDuration = null;

    /**
     * Additional textual instructions for the preservation or transport of the specimen. For instance, 'Protect from light exposure'.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $instruction
     */
    private $instruction = null;

    /**
     * Gets as temperatureQualifier
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of handling. Conditions that are not related to temperature may be handled in the instruction element.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTemperatureQualifier()
    {
        return $this->temperatureQualifier;
    }

    /**
     * Sets a new temperatureQualifier
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of handling. Conditions that are not related to temperature may be handled in the instruction element.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $temperatureQualifier
     * @return self
     */
    public function setTemperatureQualifier(?\TKusy\Hl7Fhir\R5\CodeableConceptType $temperatureQualifier = null)
    {
        $this->temperatureQualifier = $temperatureQualifier;
        return $this;
    }

    /**
     * Gets as temperatureRange
     *
     * The temperature interval for this set of handling instructions.
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getTemperatureRange()
    {
        return $this->temperatureRange;
    }

    /**
     * Sets a new temperatureRange
     *
     * The temperature interval for this set of handling instructions.
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $temperatureRange
     * @return self
     */
    public function setTemperatureRange(?\TKusy\Hl7Fhir\R5\RangeType $temperatureRange = null)
    {
        $this->temperatureRange = $temperatureRange;
        return $this;
    }

    /**
     * Gets as maxDuration
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getMaxDuration()
    {
        return $this->maxDuration;
    }

    /**
     * Sets a new maxDuration
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $maxDuration
     * @return self
     */
    public function setMaxDuration(?\TKusy\Hl7Fhir\R5\DurationType $maxDuration = null)
    {
        $this->maxDuration = $maxDuration;
        return $this;
    }

    /**
     * Gets as instruction
     *
     * Additional textual instructions for the preservation or transport of the specimen. For instance, 'Protect from light exposure'.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Sets a new instruction
     *
     * Additional textual instructions for the preservation or transport of the specimen. For instance, 'Protect from light exposure'.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $instruction
     * @return self
     */
    public function setInstruction(?\TKusy\Hl7Fhir\R5\MarkdownType $instruction = null)
    {
        $this->instruction = $instruction;
        return $this;
    }


}

