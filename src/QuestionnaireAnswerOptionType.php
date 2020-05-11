<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \integer $valueInteger
     */
    private $valueInteger = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var string $valueString
     */
    private $valueString = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Indicates whether the answer value is selected when the list of possible answers is initially shown.
     *
     * @var bool $initialSelected
     */
    private $initialSelected = null;

    /**
     * Gets as valueInteger
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \integer
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
     * @param \integer $valueInteger
     * @return self
     */
    public function setValueInteger(\integer $valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueDate
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
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
     * @param \TKusy\Hl7FhirR4\DateType $valueDate
     * @return self
     */
    public function setValueDate(\TKusy\Hl7FhirR4\DateType $valueDate)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * Gets as valueTime
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimeType
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
     * @param \TKusy\Hl7FhirR4\TimeType $valueTime
     * @return self
     */
    public function setValueTime(\TKusy\Hl7FhirR4\TimeType $valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
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
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
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
     * Gets as valueCoding
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodingType
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
     * @param \TKusy\Hl7FhirR4\CodingType $valueCoding
     * @return self
     */
    public function setValueCoding(\TKusy\Hl7FhirR4\CodingType $valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * A potential answer that's allowed as the answer to this question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(\TKusy\Hl7FhirR4\ReferenceType $valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Gets as initialSelected
     *
     * Indicates whether the answer value is selected when the list of possible answers is initially shown.
     *
     * @return bool
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
     * @param bool $initialSelected
     * @return self
     */
    public function setInitialSelected($initialSelected)
    {
        $this->initialSelected = $initialSelected;
        return $this;
    }


}

