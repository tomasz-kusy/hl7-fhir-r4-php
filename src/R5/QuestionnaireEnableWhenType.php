<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\StringType $question
     */
    private $question = null;

    /**
     * Specifies the criteria by which the question is enabled.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireItemOperatorType $operator
     */
    private $operator = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $answerBoolean
     */
    private $answerBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DecimalType $answerDecimal
     */
    private $answerDecimal = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IntegerType $answerInteger
     */
    private $answerInteger = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $answerDate
     */
    private $answerDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $answerDateTime
     */
    private $answerDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimeType $answerTime
     */
    private $answerTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $answerString
     */
    private $answerString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $answerCoding
     */
    private $answerCoding = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $answerQuantity
     */
    private $answerQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $answerReference
     */
    private $answerReference = null;

    /**
     * Gets as question
     *
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $question
     * @return self
     */
    public function setQuestion(\TKusy\Hl7Fhir\R5\StringType $question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Gets as operator
     *
     * Specifies the criteria by which the question is enabled.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireItemOperatorType
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
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireItemOperatorType $operator
     * @return self
     */
    public function setOperator(\TKusy\Hl7Fhir\R5\QuestionnaireItemOperatorType $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as answerBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }

    /**
     * Sets a new answerBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $answerBoolean
     * @return self
     */
    public function setAnswerBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $answerBoolean = null)
    {
        $this->answerBoolean = $answerBoolean;
        return $this;
    }

    /**
     * Gets as answerDecimal
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }

    /**
     * Sets a new answerDecimal
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $answerDecimal
     * @return self
     */
    public function setAnswerDecimal(?\TKusy\Hl7Fhir\R5\DecimalType $answerDecimal = null)
    {
        $this->answerDecimal = $answerDecimal;
        return $this;
    }

    /**
     * Gets as answerInteger
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }

    /**
     * Sets a new answerInteger
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $answerInteger
     * @return self
     */
    public function setAnswerInteger(?\TKusy\Hl7Fhir\R5\IntegerType $answerInteger = null)
    {
        $this->answerInteger = $answerInteger;
        return $this;
    }

    /**
     * Gets as answerDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }

    /**
     * Sets a new answerDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $answerDate
     * @return self
     */
    public function setAnswerDate(?\TKusy\Hl7Fhir\R5\DateType $answerDate = null)
    {
        $this->answerDate = $answerDate;
        return $this;
    }

    /**
     * Gets as answerDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getAnswerDateTime()
    {
        return $this->answerDateTime;
    }

    /**
     * Sets a new answerDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $answerDateTime
     * @return self
     */
    public function setAnswerDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $answerDateTime = null)
    {
        $this->answerDateTime = $answerDateTime;
        return $this;
    }

    /**
     * Gets as answerTime
     *
     * @return \TKusy\Hl7Fhir\R5\TimeType
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * Sets a new answerTime
     *
     * @param \TKusy\Hl7Fhir\R5\TimeType $answerTime
     * @return self
     */
    public function setAnswerTime(?\TKusy\Hl7Fhir\R5\TimeType $answerTime = null)
    {
        $this->answerTime = $answerTime;
        return $this;
    }

    /**
     * Gets as answerString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAnswerString()
    {
        return $this->answerString;
    }

    /**
     * Sets a new answerString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $answerString
     * @return self
     */
    public function setAnswerString(?\TKusy\Hl7Fhir\R5\StringType $answerString = null)
    {
        $this->answerString = $answerString;
        return $this;
    }

    /**
     * Gets as answerCoding
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getAnswerCoding()
    {
        return $this->answerCoding;
    }

    /**
     * Sets a new answerCoding
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $answerCoding
     * @return self
     */
    public function setAnswerCoding(?\TKusy\Hl7Fhir\R5\CodingType $answerCoding = null)
    {
        $this->answerCoding = $answerCoding;
        return $this;
    }

    /**
     * Gets as answerQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getAnswerQuantity()
    {
        return $this->answerQuantity;
    }

    /**
     * Sets a new answerQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $answerQuantity
     * @return self
     */
    public function setAnswerQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $answerQuantity = null)
    {
        $this->answerQuantity = $answerQuantity;
        return $this;
    }

    /**
     * Gets as answerReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAnswerReference()
    {
        return $this->answerReference;
    }

    /**
     * Sets a new answerReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $answerReference
     * @return self
     */
    public function setAnswerReference(?\TKusy\Hl7Fhir\R5\ReferenceType $answerReference = null)
    {
        $this->answerReference = $answerReference;
        return $this;
    }


}

