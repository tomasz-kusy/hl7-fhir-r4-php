<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ExtensionType
 *
 * Optional Extension Element - found in all resources.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Extension
 */
class ExtensionType extends ElementType
{

    /**
     * @var string $url
     */
    private $url = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\Base64BinaryType $valueBase64Binary
     */
    private $valueBase64Binary = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType $valueCanonical
     */
    private $valueCanonical = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $valueCode
     */
    private $valueCode = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\IdType $valueId
     */
    private $valueId = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\InstantType $valueInstant
     */
    private $valueInstant = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $valueMarkdown
     */
    private $valueMarkdown = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\OidType $valueOid
     */
    private $valueOid = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType $valuePositiveInt
     */
    private $valuePositiveInt = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $valueString
     */
    private $valueString = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\UnsignedIntType $valueUnsignedInt
     */
    private $valueUnsignedInt = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $valueUri
     */
    private $valueUri = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\UrlType $valueUrl
     */
    private $valueUrl = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\UuidType $valueUuid
     */
    private $valueUuid = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AddressType $valueAddress
     */
    private $valueAddress = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AgeType $valueAge
     */
    private $valueAge = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AnnotationType $valueAnnotation
     */
    private $valueAnnotation = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ContactPointType $valueContactPoint
     */
    private $valueContactPoint = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CountType $valueCount
     */
    private $valueCount = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DistanceType $valueDistance
     */
    private $valueDistance = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DurationType $valueDuration
     */
    private $valueDuration = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\HumanNameType $valueHumanName
     */
    private $valueHumanName = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $valueIdentifier
     */
    private $valueIdentifier = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\MoneyType $valueMoney
     */
    private $valueMoney = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RatioType $valueRatio
     */
    private $valueRatio = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\SampledDataType $valueSampledData
     */
    private $valueSampledData = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\SignatureType $valueSignature
     */
    private $valueSignature = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimingType $valueTiming
     */
    private $valueTiming = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ContactDetailType $valueContactDetail
     */
    private $valueContactDetail = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ContributorType $valueContributor
     */
    private $valueContributor = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DataRequirementType $valueDataRequirement
     */
    private $valueDataRequirement = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ExpressionType $valueExpression
     */
    private $valueExpression = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ParameterDefinitionType $valueParameterDefinition
     */
    private $valueParameterDefinition = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RelatedArtifactType $valueRelatedArtifact
     */
    private $valueRelatedArtifact = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TriggerDefinitionType $valueTriggerDefinition
     */
    private $valueTriggerDefinition = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\UsageContextType $valueUsageContext
     */
    private $valueUsageContext = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DosageType $valueDosage
     */
    private $valueDosage = null;

    /**
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\MetaType $valueMeta
     */
    private $valueMeta = null;

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as valueBase64Binary
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\Base64BinaryType
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * Sets a new valueBase64Binary
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\Base64BinaryType $valueBase64Binary
     * @return self
     */
    public function setValueBase64Binary(\TKusy\Hl7Fhir\R4\Base64BinaryType $valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueCanonical
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CanonicalType
     */
    public function getValueCanonical()
    {
        return $this->valueCanonical;
    }

    /**
     * Sets a new valueCanonical
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $valueCanonical
     * @return self
     */
    public function setValueCanonical(\TKusy\Hl7Fhir\R4\CanonicalType $valueCanonical)
    {
        $this->valueCanonical = $valueCanonical;
        return $this;
    }

    /**
     * Gets as valueCode
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * Sets a new valueCode
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $valueCode
     * @return self
     */
    public function setValueCode(\TKusy\Hl7Fhir\R4\CodeType $valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * Gets as valueDate
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueDecimal
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueId
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\IdType
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * Sets a new valueId
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\IdType $valueId
     * @return self
     */
    public function setValueId(\TKusy\Hl7Fhir\R4\IdType $valueId)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * Gets as valueInstant
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\InstantType
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * Sets a new valueInstant
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\InstantType $valueInstant
     * @return self
     */
    public function setValueInstant(\TKusy\Hl7Fhir\R4\InstantType $valueInstant)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueMarkdown
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * Sets a new valueMarkdown
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $valueMarkdown
     * @return self
     */
    public function setValueMarkdown(\TKusy\Hl7Fhir\R4\MarkdownType $valueMarkdown)
    {
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * Gets as valueOid
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\OidType
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * Sets a new valueOid
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\OidType $valueOid
     * @return self
     */
    public function setValueOid(\TKusy\Hl7Fhir\R4\OidType $valueOid)
    {
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * Gets as valuePositiveInt
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * Sets a new valuePositiveInt
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $valuePositiveInt
     * @return self
     */
    public function setValuePositiveInt(\TKusy\Hl7Fhir\R4\PositiveIntType $valuePositiveInt)
    {
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueTime
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueUnsignedInt
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\UnsignedIntType
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * Sets a new valueUnsignedInt
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType $valueUnsignedInt
     * @return self
     */
    public function setValueUnsignedInt(\TKusy\Hl7Fhir\R4\UnsignedIntType $valueUnsignedInt)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * Gets as valueUri
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueUrl
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\UrlType
     */
    public function getValueUrl()
    {
        return $this->valueUrl;
    }

    /**
     * Sets a new valueUrl
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\UrlType $valueUrl
     * @return self
     */
    public function setValueUrl(\TKusy\Hl7Fhir\R4\UrlType $valueUrl)
    {
        $this->valueUrl = $valueUrl;
        return $this;
    }

    /**
     * Gets as valueUuid
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\UuidType
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * Sets a new valueUuid
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\UuidType $valueUuid
     * @return self
     */
    public function setValueUuid(\TKusy\Hl7Fhir\R4\UuidType $valueUuid)
    {
        $this->valueUuid = $valueUuid;
        return $this;
    }

    /**
     * Gets as valueAddress
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AddressType
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * Sets a new valueAddress
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AddressType $valueAddress
     * @return self
     */
    public function setValueAddress(\TKusy\Hl7Fhir\R4\AddressType $valueAddress)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * Gets as valueAge
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AgeType
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * Sets a new valueAge
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AgeType $valueAge
     * @return self
     */
    public function setValueAge(\TKusy\Hl7Fhir\R4\AgeType $valueAge)
    {
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * Gets as valueAnnotation
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AnnotationType
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * Sets a new valueAnnotation
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AnnotationType $valueAnnotation
     * @return self
     */
    public function setValueAnnotation(\TKusy\Hl7Fhir\R4\AnnotationType $valueAnnotation)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * Gets as valueAttachment
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueCodeableConcept
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueCoding
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueContactPoint
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ContactPointType
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * Sets a new valueContactPoint
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ContactPointType $valueContactPoint
     * @return self
     */
    public function setValueContactPoint(\TKusy\Hl7Fhir\R4\ContactPointType $valueContactPoint)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * Gets as valueCount
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CountType
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * Sets a new valueCount
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CountType $valueCount
     * @return self
     */
    public function setValueCount(\TKusy\Hl7Fhir\R4\CountType $valueCount)
    {
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * Gets as valueDistance
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DistanceType
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * Sets a new valueDistance
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DistanceType $valueDistance
     * @return self
     */
    public function setValueDistance(\TKusy\Hl7Fhir\R4\DistanceType $valueDistance)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * Gets as valueDuration
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DurationType
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * Sets a new valueDuration
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DurationType $valueDuration
     * @return self
     */
    public function setValueDuration(\TKusy\Hl7Fhir\R4\DurationType $valueDuration)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * Gets as valueHumanName
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\HumanNameType
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * Sets a new valueHumanName
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\HumanNameType $valueHumanName
     * @return self
     */
    public function setValueHumanName(\TKusy\Hl7Fhir\R4\HumanNameType $valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * Gets as valueIdentifier
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * Sets a new valueIdentifier
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $valueIdentifier
     * @return self
     */
    public function setValueIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * Gets as valueMoney
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\MoneyType
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * Sets a new valueMoney
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\MoneyType $valueMoney
     * @return self
     */
    public function setValueMoney(\TKusy\Hl7Fhir\R4\MoneyType $valueMoney)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * Gets as valuePeriod
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * Sets a new valuePeriod
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $valuePeriod
     * @return self
     */
    public function setValuePeriod(\TKusy\Hl7Fhir\R4\PeriodType $valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueRange
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RangeType $valueRange
     * @return self
     */
    public function setValueRange(\TKusy\Hl7Fhir\R4\RangeType $valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueRatio
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RatioType
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Sets a new valueRatio
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RatioType $valueRatio
     * @return self
     */
    public function setValueRatio(\TKusy\Hl7Fhir\R4\RatioType $valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
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
     * Gets as valueSampledData
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\SampledDataType
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * Sets a new valueSampledData
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\SampledDataType $valueSampledData
     * @return self
     */
    public function setValueSampledData(\TKusy\Hl7Fhir\R4\SampledDataType $valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * Gets as valueSignature
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\SignatureType
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * Sets a new valueSignature
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\SignatureType $valueSignature
     * @return self
     */
    public function setValueSignature(\TKusy\Hl7Fhir\R4\SignatureType $valueSignature)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * Gets as valueTiming
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\TimingType
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * Sets a new valueTiming
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\TimingType $valueTiming
     * @return self
     */
    public function setValueTiming(\TKusy\Hl7Fhir\R4\TimingType $valueTiming)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * Gets as valueContactDetail
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ContactDetailType
     */
    public function getValueContactDetail()
    {
        return $this->valueContactDetail;
    }

    /**
     * Sets a new valueContactDetail
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType $valueContactDetail
     * @return self
     */
    public function setValueContactDetail(\TKusy\Hl7Fhir\R4\ContactDetailType $valueContactDetail)
    {
        $this->valueContactDetail = $valueContactDetail;
        return $this;
    }

    /**
     * Gets as valueContributor
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ContributorType
     */
    public function getValueContributor()
    {
        return $this->valueContributor;
    }

    /**
     * Sets a new valueContributor
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ContributorType $valueContributor
     * @return self
     */
    public function setValueContributor(\TKusy\Hl7Fhir\R4\ContributorType $valueContributor)
    {
        $this->valueContributor = $valueContributor;
        return $this;
    }

    /**
     * Gets as valueDataRequirement
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DataRequirementType
     */
    public function getValueDataRequirement()
    {
        return $this->valueDataRequirement;
    }

    /**
     * Sets a new valueDataRequirement
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DataRequirementType $valueDataRequirement
     * @return self
     */
    public function setValueDataRequirement(\TKusy\Hl7Fhir\R4\DataRequirementType $valueDataRequirement)
    {
        $this->valueDataRequirement = $valueDataRequirement;
        return $this;
    }

    /**
     * Gets as valueExpression
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ExpressionType
     */
    public function getValueExpression()
    {
        return $this->valueExpression;
    }

    /**
     * Sets a new valueExpression
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ExpressionType $valueExpression
     * @return self
     */
    public function setValueExpression(\TKusy\Hl7Fhir\R4\ExpressionType $valueExpression)
    {
        $this->valueExpression = $valueExpression;
        return $this;
    }

    /**
     * Gets as valueParameterDefinition
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ParameterDefinitionType
     */
    public function getValueParameterDefinition()
    {
        return $this->valueParameterDefinition;
    }

    /**
     * Sets a new valueParameterDefinition
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ParameterDefinitionType $valueParameterDefinition
     * @return self
     */
    public function setValueParameterDefinition(\TKusy\Hl7Fhir\R4\ParameterDefinitionType $valueParameterDefinition)
    {
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * Gets as valueRelatedArtifact
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RelatedArtifactType
     */
    public function getValueRelatedArtifact()
    {
        return $this->valueRelatedArtifact;
    }

    /**
     * Sets a new valueRelatedArtifact
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RelatedArtifactType $valueRelatedArtifact
     * @return self
     */
    public function setValueRelatedArtifact(\TKusy\Hl7Fhir\R4\RelatedArtifactType $valueRelatedArtifact)
    {
        $this->valueRelatedArtifact = $valueRelatedArtifact;
        return $this;
    }

    /**
     * Gets as valueTriggerDefinition
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\TriggerDefinitionType
     */
    public function getValueTriggerDefinition()
    {
        return $this->valueTriggerDefinition;
    }

    /**
     * Sets a new valueTriggerDefinition
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\TriggerDefinitionType $valueTriggerDefinition
     * @return self
     */
    public function setValueTriggerDefinition(\TKusy\Hl7Fhir\R4\TriggerDefinitionType $valueTriggerDefinition)
    {
        $this->valueTriggerDefinition = $valueTriggerDefinition;
        return $this;
    }

    /**
     * Gets as valueUsageContext
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\UsageContextType
     */
    public function getValueUsageContext()
    {
        return $this->valueUsageContext;
    }

    /**
     * Sets a new valueUsageContext
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\UsageContextType $valueUsageContext
     * @return self
     */
    public function setValueUsageContext(\TKusy\Hl7Fhir\R4\UsageContextType $valueUsageContext)
    {
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * Gets as valueDosage
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DosageType
     */
    public function getValueDosage()
    {
        return $this->valueDosage;
    }

    /**
     * Sets a new valueDosage
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DosageType $valueDosage
     * @return self
     */
    public function setValueDosage(\TKusy\Hl7Fhir\R4\DosageType $valueDosage)
    {
        $this->valueDosage = $valueDosage;
        return $this;
    }

    /**
     * Gets as valueMeta
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\MetaType
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * Sets a new valueMeta
     *
     * Value of extension - must be one of a constrained set of the data types (see [Extensibility](extensibility.html) for a list). (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\MetaType $valueMeta
     * @return self
     */
    public function setValueMeta(\TKusy\Hl7Fhir\R4\MetaType $valueMeta)
    {
        $this->valueMeta = $valueMeta;
        return $this;
    }


}

