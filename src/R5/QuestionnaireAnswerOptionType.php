<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing QuestionnaireAnswerOptionType
 *
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 * XSD Type: Questionnaire.AnswerOption
 */
class QuestionnaireAnswerOptionType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $valueString
     */
    private $valueString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Indicates whether the answer value is selected when the list of possible answers is initially shown.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $initialSelected
     */
    private $initialSelected = null;

    /**
     * Gets as valueInteger
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     * @return self
     */
    public function setValueInteger(?\TKusy\Hl7Fhir\R5\IntegerType $valueInteger = null)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * Sets a new valueDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $valueDate
     * @return self
     */
    public function setValueDate(?\TKusy\Hl7Fhir\R5\DateType $valueDate = null)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * Gets as valueTime
     *
     * @return \TKusy\Hl7Fhir\R5\TimeType
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * Sets a new valueTime
     *
     * @param \TKusy\Hl7Fhir\R5\TimeType $valueTime
     * @return self
     */
    public function setValueTime(?\TKusy\Hl7Fhir\R5\TimeType $valueTime = null)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $valueString
     * @return self
     */
    public function setValueString(?\TKusy\Hl7Fhir\R5\StringType $valueString = null)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueCoding
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * Sets a new valueCoding
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $valueCoding
     * @return self
     */
    public function setValueCoding(?\TKusy\Hl7Fhir\R5\CodingType $valueCoding = null)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Sets a new valueReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(?\TKusy\Hl7Fhir\R5\ReferenceType $valueReference = null)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Gets as initialSelected
     *
     * Indicates whether the answer value is selected when the list of possible answers is initially shown.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getInitialSelected()
    {
        return $this->initialSelected;
    }

    /**
     * Sets a new initialSelected
     *
     * Indicates whether the answer value is selected when the list of possible answers is initially shown.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $initialSelected
     * @return self
     */
    public function setInitialSelected(?\TKusy\Hl7Fhir\R5\BooleanType $initialSelected = null)
    {
        $this->initialSelected = $initialSelected;
        return $this;
    }


}

