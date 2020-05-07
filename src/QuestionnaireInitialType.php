<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing QuestionnaireInitialType
 *
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 * XSD Type: Questionnaire.Initial
 */
class QuestionnaireInitialType extends BackboneElementType
{

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $valueString
     */
    private $valueString = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UriType $valueUri
     */
    private $valueUri = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Gets as valueBoolean
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(\TKusy\Hl7FhirR4\BooleanType $valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueDecimal
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * Sets a new valueDecimal
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $valueDecimal
     * @return self
     */
    public function setValueDecimal(\TKusy\Hl7FhirR4\DecimalType $valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $valueInteger
     * @return self
     */
    public function setValueInteger(\TKusy\Hl7FhirR4\IntegerType $valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueDate
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * Gets as valueDateTime
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Sets a new valueDateTime
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(\TKusy\Hl7FhirR4\DateTimeType $valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * Gets as valueTime
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $valueString
     * @return self
     */
    public function setValueString(\TKusy\Hl7FhirR4\StringType $valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueUri
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * Sets a new valueUri
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UriType $valueUri
     * @return self
     */
    public function setValueUri(\TKusy\Hl7FhirR4\UriType $valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * Gets as valueAttachment
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * Sets a new valueAttachment
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $valueAttachment
     * @return self
     */
    public function setValueAttachment(\TKusy\Hl7FhirR4\AttachmentType $valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Gets as valueCoding
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * Gets as valueQuantity
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * Gets as valueReference
     *
     * The actual value to for an initial answer. (choose any one of value*, but only one)
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
     * The actual value to for an initial answer. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(\TKusy\Hl7FhirR4\ReferenceType $valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }


}

