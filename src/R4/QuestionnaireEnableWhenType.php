<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing QuestionnaireEnableWhenType
 *
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 * XSD Type: Questionnaire.EnableWhen
 */
class QuestionnaireEnableWhenType extends BackboneElementType
{

    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $question
     */
    private $question = null;

    /**
     * Specifies the criteria by which the question is enabled.
     *
     * @var \TKusy\Hl7Fhir\R4\QuestionnaireItemOperatorType $operator
     */
    private $operator = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $answerBoolean
     */
    private $answerBoolean = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $answerDecimal
     */
    private $answerDecimal = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $answerInteger
     */
    private $answerInteger = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $answerDate
     */
    private $answerDate = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $answerDateTime
     */
    private $answerDateTime = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimeType $answerTime
     */
    private $answerTime = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $answerString
     */
    private $answerString = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $answerCoding
     */
    private $answerCoding = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $answerQuantity
     */
    private $answerQuantity = null;

    /**
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $answerReference
     */
    private $answerReference = null;

    /**
     * Gets as question
     *
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Sets a new question
     *
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $question
     * @return self
     */
    public function setQuestion(\TKusy\Hl7Fhir\R4\StringType $question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Gets as operator
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @return \TKusy\Hl7Fhir\R4\QuestionnaireItemOperatorType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @param \TKusy\Hl7Fhir\R4\QuestionnaireItemOperatorType $operator
     * @return self
     */
    public function setOperator(\TKusy\Hl7Fhir\R4\QuestionnaireItemOperatorType $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as answerBoolean
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }

    /**
     * Sets a new answerBoolean
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $answerBoolean
     * @return self
     */
    public function setAnswerBoolean(\TKusy\Hl7Fhir\R4\BooleanType $answerBoolean)
    {
        $this->answerBoolean = $answerBoolean;
        return $this;
    }

    /**
     * Gets as answerDecimal
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }

    /**
     * Sets a new answerDecimal
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $answerDecimal
     * @return self
     */
    public function setAnswerDecimal(\TKusy\Hl7Fhir\R4\DecimalType $answerDecimal)
    {
        $this->answerDecimal = $answerDecimal;
        return $this;
    }

    /**
     * Gets as answerInteger
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }

    /**
     * Sets a new answerInteger
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $answerInteger
     * @return self
     */
    public function setAnswerInteger(\TKusy\Hl7Fhir\R4\IntegerType $answerInteger)
    {
        $this->answerInteger = $answerInteger;
        return $this;
    }

    /**
     * Gets as answerDate
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateType
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }

    /**
     * Sets a new answerDate
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateType $answerDate
     * @return self
     */
    public function setAnswerDate(\TKusy\Hl7Fhir\R4\DateType $answerDate)
    {
        $this->answerDate = $answerDate;
        return $this;
    }

    /**
     * Gets as answerDateTime
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getAnswerDateTime()
    {
        return $this->answerDateTime;
    }

    /**
     * Sets a new answerDateTime
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $answerDateTime
     * @return self
     */
    public function setAnswerDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $answerDateTime)
    {
        $this->answerDateTime = $answerDateTime;
        return $this;
    }

    /**
     * Gets as answerTime
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\TimeType
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * Sets a new answerTime
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\TimeType $answerTime
     * @return self
     */
    public function setAnswerTime(\TKusy\Hl7Fhir\R4\TimeType $answerTime)
    {
        $this->answerTime = $answerTime;
        return $this;
    }

    /**
     * Gets as answerString
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getAnswerString()
    {
        return $this->answerString;
    }

    /**
     * Sets a new answerString
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $answerString
     * @return self
     */
    public function setAnswerString(\TKusy\Hl7Fhir\R4\StringType $answerString)
    {
        $this->answerString = $answerString;
        return $this;
    }

    /**
     * Gets as answerCoding
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType
     */
    public function getAnswerCoding()
    {
        return $this->answerCoding;
    }

    /**
     * Sets a new answerCoding
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType $answerCoding
     * @return self
     */
    public function setAnswerCoding(\TKusy\Hl7Fhir\R4\CodingType $answerCoding)
    {
        $this->answerCoding = $answerCoding;
        return $this;
    }

    /**
     * Gets as answerQuantity
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getAnswerQuantity()
    {
        return $this->answerQuantity;
    }

    /**
     * Sets a new answerQuantity
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $answerQuantity
     * @return self
     */
    public function setAnswerQuantity(\TKusy\Hl7Fhir\R4\QuantityType $answerQuantity)
    {
        $this->answerQuantity = $answerQuantity;
        return $this;
    }

    /**
     * Gets as answerReference
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getAnswerReference()
    {
        return $this->answerReference;
    }

    /**
     * Sets a new answerReference
     *
     * A value that the referenced question is tested using the specified operator in order for the item to be enabled. (choose any one of answer*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $answerReference
     * @return self
     */
    public function setAnswerReference(\TKusy\Hl7Fhir\R4\ReferenceType $answerReference)
    {
        $this->answerReference = $answerReference;
        return $this;
    }


}

