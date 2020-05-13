<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ContractAnswerType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Answer
 */
class ContractAnswerType extends BackboneElementType
{

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $valueString
     */
    private $valueString = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $valueUri
     */
    private $valueUri = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Gets as valueBoolean
     *
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
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
     * Response to an offer clause or question text, which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(\TKusy\Hl7Fhir\R4\ReferenceType $valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }


}

