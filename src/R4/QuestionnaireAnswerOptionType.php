<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing QuestionnaireAnswerOptionType
 *
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 * XSD Type: Questionnaire.AnswerOption
 */
class QuestionnaireAnswerOptionType extends BackboneElementType
{

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $valueString
     */
    private $valueString = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Indicates whether the answer value is selected when the list of possible answers is initially shown.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $initialSelected
     */
    private $initialSelected = null;

    /**
     * Gets as valueInteger
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $valueInteger
     * @return self
     */
    public function setValueInteger(\TKusy\Hl7Fhir\R4\IntegerType $valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueDate
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateType
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * Sets a new valueDate
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateType $valueDate
     * @return self
     */
    public function setValueDate(\TKusy\Hl7Fhir\R4\DateType $valueDate)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * Gets as valueTime
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\TimeType
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * Sets a new valueTime
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\TimeType $valueTime
     * @return self
     */
    public function setValueTime(\TKusy\Hl7Fhir\R4\TimeType $valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $valueString
     * @return self
     */
    public function setValueString(\TKusy\Hl7Fhir\R4\StringType $valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueCoding
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * Sets a new valueCoding
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType $valueCoding
     * @return self
     */
    public function setValueCoding(\TKusy\Hl7Fhir\R4\CodingType $valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Sets a new valueReference
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(\TKusy\Hl7Fhir\R4\ReferenceType $valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Gets as initialSelected
     *
     * Indicates whether the answer value is selected when the list of possible answers is initially shown.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
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
     * @param \TKusy\Hl7Fhir\R4\BooleanType $initialSelected
     * @return self
     */
    public function setInitialSelected(\TKusy\Hl7Fhir\R4\BooleanType $initialSelected)
    {
        $this->initialSelected = $initialSelected;
        return $this;
    }


}

