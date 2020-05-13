<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing QuestionnaireResponseAnswerType
 *
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the questionnaire being responded to.
 * XSD Type: QuestionnaireResponse.Answer
 */
class QuestionnaireResponseAnswerType extends BackboneElementType
{

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $valueString
     */
    private $valueString = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $valueUri
     */
    private $valueUri = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Nested groups and/or questions found within this particular answer.
     *
     * @var \TKusy\Hl7Fhir\R4\QuestionnaireResponseItemType[] $item
     */
    private $item = null;

    /**
     * Gets as valueBoolean
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(\TKusy\Hl7Fhir\R4\BooleanType $valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueDecimal
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * Sets a new valueDecimal
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $valueDecimal
     * @return self
     */
    public function setValueDecimal(\TKusy\Hl7Fhir\R4\DecimalType $valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * Gets as valueDateTime
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Sets a new valueDateTime
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * Gets as valueTime
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * Gets as valueUri
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * Sets a new valueUri
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $valueUri
     * @return self
     */
    public function setValueUri(\TKusy\Hl7Fhir\R4\UriType $valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * Gets as valueAttachment
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AttachmentType
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * Sets a new valueAttachment
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AttachmentType $valueAttachment
     * @return self
     */
    public function setValueAttachment(\TKusy\Hl7Fhir\R4\AttachmentType $valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Gets as valueCoding
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * Gets as valueQuantity
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(\TKusy\Hl7Fhir\R4\QuantityType $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
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
     * Adds as item
     *
     * Nested groups and/or questions found within this particular answer.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\QuestionnaireResponseItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R4\QuestionnaireResponseItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Nested groups and/or questions found within this particular answer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * Nested groups and/or questions found within this particular answer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * Nested groups and/or questions found within this particular answer.
     *
     * @return \TKusy\Hl7Fhir\R4\QuestionnaireResponseItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Nested groups and/or questions found within this particular answer.
     *
     * @param \TKusy\Hl7Fhir\R4\QuestionnaireResponseItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }


}

