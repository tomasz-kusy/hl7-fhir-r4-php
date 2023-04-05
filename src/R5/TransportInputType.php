<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TransportInputType
 *
 * Record of transport of item.
 * XSD Type: Transport.Input
 */
class TransportInputType extends BackboneElementType
{

    /**
     * A code or description indicating how the input is intended to be used as part of the transport execution.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Base64BinaryType $valueBase64Binary
     */
    private $valueBase64Binary = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $valueCanonical
     */
    private $valueCanonical = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeType $valueCode
     */
    private $valueCode = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IdType $valueId
     */
    private $valueId = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\InstantType $valueInstant
     */
    private $valueInstant = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Integer64Type $valueInteger64
     */
    private $valueInteger64 = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $valueMarkdown
     */
    private $valueMarkdown = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\OidType $valueOid
     */
    private $valueOid = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $valuePositiveInt
     */
    private $valuePositiveInt = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $valueString
     */
    private $valueString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $valueUnsignedInt
     */
    private $valueUnsignedInt = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $valueUri
     */
    private $valueUri = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UrlType $valueUrl
     */
    private $valueUrl = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UuidType $valueUuid
     */
    private $valueUuid = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AddressType $valueAddress
     */
    private $valueAddress = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $valueAge
     */
    private $valueAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AnnotationType $valueAnnotation
     */
    private $valueAnnotation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $valueCodeableReference
     */
    private $valueCodeableReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ContactPointType $valueContactPoint
     */
    private $valueContactPoint = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CountType $valueCount
     */
    private $valueCount = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DistanceType $valueDistance
     */
    private $valueDistance = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $valueDuration
     */
    private $valueDuration = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\HumanNameType $valueHumanName
     */
    private $valueHumanName = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $valueIdentifier
     */
    private $valueIdentifier = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MoneyType $valueMoney
     */
    private $valueMoney = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $valueRatio
     */
    private $valueRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioRangeType $valueRatioRange
     */
    private $valueRatioRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SampledDataType $valueSampledData
     */
    private $valueSampledData = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SignatureType $valueSignature
     */
    private $valueSignature = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $valueTiming
     */
    private $valueTiming = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType $valueContactDetail
     */
    private $valueContactDetail = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DataRequirementType $valueDataRequirement
     */
    private $valueDataRequirement = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $valueExpression
     */
    private $valueExpression = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ParameterDefinitionType $valueParameterDefinition
     */
    private $valueParameterDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType $valueRelatedArtifact
     */
    private $valueRelatedArtifact = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TriggerDefinitionType $valueTriggerDefinition
     */
    private $valueTriggerDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UsageContextType $valueUsageContext
     */
    private $valueUsageContext = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AvailabilityType $valueAvailability
     */
    private $valueAvailability = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ExtendedContactDetailType $valueExtendedContactDetail
     */
    private $valueExtendedContactDetail = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DosageType $valueDosage
     */
    private $valueDosage = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MetaType $valueMeta
     */
    private $valueMeta = null;

    /**
     * Gets as type
     *
     * A code or description indicating how the input is intended to be used as part of the transport execution.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A code or description indicating how the input is intended to be used as part of the transport execution.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as valueBase64Binary
     *
     * @return \TKusy\Hl7Fhir\R5\Base64BinaryType
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * Sets a new valueBase64Binary
     *
     * @param \TKusy\Hl7Fhir\R5\Base64BinaryType $valueBase64Binary
     * @return self
     */
    public function setValueBase64Binary(?\TKusy\Hl7Fhir\R5\Base64BinaryType $valueBase64Binary = null)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $valueBoolean = null)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getValueCanonical()
    {
        return $this->valueCanonical;
    }

    /**
     * Sets a new valueCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $valueCanonical
     * @return self
     */
    public function setValueCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $valueCanonical = null)
    {
        $this->valueCanonical = $valueCanonical;
        return $this;
    }

    /**
     * Gets as valueCode
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * Sets a new valueCode
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $valueCode
     * @return self
     */
    public function setValueCode(?\TKusy\Hl7Fhir\R5\CodeType $valueCode = null)
    {
        $this->valueCode = $valueCode;
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
     * Gets as valueDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Sets a new valueDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime = null)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * Gets as valueDecimal
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * Sets a new valueDecimal
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $valueDecimal
     * @return self
     */
    public function setValueDecimal(?\TKusy\Hl7Fhir\R5\DecimalType $valueDecimal = null)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * Gets as valueId
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * Sets a new valueId
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $valueId
     * @return self
     */
    public function setValueId(?\TKusy\Hl7Fhir\R5\IdType $valueId = null)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * Gets as valueInstant
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * Sets a new valueInstant
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $valueInstant
     * @return self
     */
    public function setValueInstant(?\TKusy\Hl7Fhir\R5\InstantType $valueInstant = null)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

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
     * Gets as valueInteger64
     *
     * @return \TKusy\Hl7Fhir\R5\Integer64Type
     */
    public function getValueInteger64()
    {
        return $this->valueInteger64;
    }

    /**
     * Sets a new valueInteger64
     *
     * @param \TKusy\Hl7Fhir\R5\Integer64Type $valueInteger64
     * @return self
     */
    public function setValueInteger64(?\TKusy\Hl7Fhir\R5\Integer64Type $valueInteger64 = null)
    {
        $this->valueInteger64 = $valueInteger64;
        return $this;
    }

    /**
     * Gets as valueMarkdown
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * Sets a new valueMarkdown
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $valueMarkdown
     * @return self
     */
    public function setValueMarkdown(?\TKusy\Hl7Fhir\R5\MarkdownType $valueMarkdown = null)
    {
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * Gets as valueOid
     *
     * @return \TKusy\Hl7Fhir\R5\OidType
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * Sets a new valueOid
     *
     * @param \TKusy\Hl7Fhir\R5\OidType $valueOid
     * @return self
     */
    public function setValueOid(?\TKusy\Hl7Fhir\R5\OidType $valueOid = null)
    {
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * Gets as valuePositiveInt
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * Sets a new valuePositiveInt
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $valuePositiveInt
     * @return self
     */
    public function setValuePositiveInt(?\TKusy\Hl7Fhir\R5\PositiveIntType $valuePositiveInt = null)
    {
        $this->valuePositiveInt = $valuePositiveInt;
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
     * Gets as valueUnsignedInt
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * Sets a new valueUnsignedInt
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $valueUnsignedInt
     * @return self
     */
    public function setValueUnsignedInt(?\TKusy\Hl7Fhir\R5\UnsignedIntType $valueUnsignedInt = null)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * Gets as valueUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * Sets a new valueUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $valueUri
     * @return self
     */
    public function setValueUri(?\TKusy\Hl7Fhir\R5\UriType $valueUri = null)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * Gets as valueUrl
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getValueUrl()
    {
        return $this->valueUrl;
    }

    /**
     * Sets a new valueUrl
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $valueUrl
     * @return self
     */
    public function setValueUrl(?\TKusy\Hl7Fhir\R5\UrlType $valueUrl = null)
    {
        $this->valueUrl = $valueUrl;
        return $this;
    }

    /**
     * Gets as valueUuid
     *
     * @return \TKusy\Hl7Fhir\R5\UuidType
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * Sets a new valueUuid
     *
     * @param \TKusy\Hl7Fhir\R5\UuidType $valueUuid
     * @return self
     */
    public function setValueUuid(?\TKusy\Hl7Fhir\R5\UuidType $valueUuid = null)
    {
        $this->valueUuid = $valueUuid;
        return $this;
    }

    /**
     * Gets as valueAddress
     *
     * @return \TKusy\Hl7Fhir\R5\AddressType
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * Sets a new valueAddress
     *
     * @param \TKusy\Hl7Fhir\R5\AddressType $valueAddress
     * @return self
     */
    public function setValueAddress(?\TKusy\Hl7Fhir\R5\AddressType $valueAddress = null)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * Gets as valueAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * Sets a new valueAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $valueAge
     * @return self
     */
    public function setValueAge(?\TKusy\Hl7Fhir\R5\AgeType $valueAge = null)
    {
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * Gets as valueAnnotation
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * Sets a new valueAnnotation
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $valueAnnotation
     * @return self
     */
    public function setValueAnnotation(?\TKusy\Hl7Fhir\R5\AnnotationType $valueAnnotation = null)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * Gets as valueAttachment
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * Sets a new valueAttachment
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment
     * @return self
     */
    public function setValueAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueCodeableReference
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getValueCodeableReference()
    {
        return $this->valueCodeableReference;
    }

    /**
     * Sets a new valueCodeableReference
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $valueCodeableReference
     * @return self
     */
    public function setValueCodeableReference(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $valueCodeableReference = null)
    {
        $this->valueCodeableReference = $valueCodeableReference;
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
     * Gets as valueContactPoint
     *
     * @return \TKusy\Hl7Fhir\R5\ContactPointType
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * Sets a new valueContactPoint
     *
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $valueContactPoint
     * @return self
     */
    public function setValueContactPoint(?\TKusy\Hl7Fhir\R5\ContactPointType $valueContactPoint = null)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * Gets as valueCount
     *
     * @return \TKusy\Hl7Fhir\R5\CountType
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * Sets a new valueCount
     *
     * @param \TKusy\Hl7Fhir\R5\CountType $valueCount
     * @return self
     */
    public function setValueCount(?\TKusy\Hl7Fhir\R5\CountType $valueCount = null)
    {
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * Gets as valueDistance
     *
     * @return \TKusy\Hl7Fhir\R5\DistanceType
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * Sets a new valueDistance
     *
     * @param \TKusy\Hl7Fhir\R5\DistanceType $valueDistance
     * @return self
     */
    public function setValueDistance(?\TKusy\Hl7Fhir\R5\DistanceType $valueDistance = null)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * Gets as valueDuration
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * Sets a new valueDuration
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $valueDuration
     * @return self
     */
    public function setValueDuration(?\TKusy\Hl7Fhir\R5\DurationType $valueDuration = null)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * Gets as valueHumanName
     *
     * @return \TKusy\Hl7Fhir\R5\HumanNameType
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * Sets a new valueHumanName
     *
     * @param \TKusy\Hl7Fhir\R5\HumanNameType $valueHumanName
     * @return self
     */
    public function setValueHumanName(?\TKusy\Hl7Fhir\R5\HumanNameType $valueHumanName = null)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * Gets as valueIdentifier
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * Sets a new valueIdentifier
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $valueIdentifier
     * @return self
     */
    public function setValueIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $valueIdentifier = null)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * Gets as valueMoney
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * Sets a new valueMoney
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $valueMoney
     * @return self
     */
    public function setValueMoney(?\TKusy\Hl7Fhir\R5\MoneyType $valueMoney = null)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * Gets as valuePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * Sets a new valuePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $valuePeriod
     * @return self
     */
    public function setValuePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $valueRange
     * @return self
     */
    public function setValueRange(?\TKusy\Hl7Fhir\R5\RangeType $valueRange = null)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Sets a new valueRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $valueRatio
     * @return self
     */
    public function setValueRatio(?\TKusy\Hl7Fhir\R5\RatioType $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * Gets as valueRatioRange
     *
     * @return \TKusy\Hl7Fhir\R5\RatioRangeType
     */
    public function getValueRatioRange()
    {
        return $this->valueRatioRange;
    }

    /**
     * Sets a new valueRatioRange
     *
     * @param \TKusy\Hl7Fhir\R5\RatioRangeType $valueRatioRange
     * @return self
     */
    public function setValueRatioRange(?\TKusy\Hl7Fhir\R5\RatioRangeType $valueRatioRange = null)
    {
        $this->valueRatioRange = $valueRatioRange;
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
     * Gets as valueSampledData
     *
     * @return \TKusy\Hl7Fhir\R5\SampledDataType
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * Sets a new valueSampledData
     *
     * @param \TKusy\Hl7Fhir\R5\SampledDataType $valueSampledData
     * @return self
     */
    public function setValueSampledData(?\TKusy\Hl7Fhir\R5\SampledDataType $valueSampledData = null)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * Gets as valueSignature
     *
     * @return \TKusy\Hl7Fhir\R5\SignatureType
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * Sets a new valueSignature
     *
     * @param \TKusy\Hl7Fhir\R5\SignatureType $valueSignature
     * @return self
     */
    public function setValueSignature(?\TKusy\Hl7Fhir\R5\SignatureType $valueSignature = null)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * Gets as valueTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * Sets a new valueTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $valueTiming
     * @return self
     */
    public function setValueTiming(?\TKusy\Hl7Fhir\R5\TimingType $valueTiming = null)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * Gets as valueContactDetail
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType
     */
    public function getValueContactDetail()
    {
        return $this->valueContactDetail;
    }

    /**
     * Sets a new valueContactDetail
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $valueContactDetail
     * @return self
     */
    public function setValueContactDetail(?\TKusy\Hl7Fhir\R5\ContactDetailType $valueContactDetail = null)
    {
        $this->valueContactDetail = $valueContactDetail;
        return $this;
    }

    /**
     * Gets as valueDataRequirement
     *
     * @return \TKusy\Hl7Fhir\R5\DataRequirementType
     */
    public function getValueDataRequirement()
    {
        return $this->valueDataRequirement;
    }

    /**
     * Sets a new valueDataRequirement
     *
     * @param \TKusy\Hl7Fhir\R5\DataRequirementType $valueDataRequirement
     * @return self
     */
    public function setValueDataRequirement(?\TKusy\Hl7Fhir\R5\DataRequirementType $valueDataRequirement = null)
    {
        $this->valueDataRequirement = $valueDataRequirement;
        return $this;
    }

    /**
     * Gets as valueExpression
     *
     * @return \TKusy\Hl7Fhir\R5\ExpressionType
     */
    public function getValueExpression()
    {
        return $this->valueExpression;
    }

    /**
     * Sets a new valueExpression
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $valueExpression
     * @return self
     */
    public function setValueExpression(?\TKusy\Hl7Fhir\R5\ExpressionType $valueExpression = null)
    {
        $this->valueExpression = $valueExpression;
        return $this;
    }

    /**
     * Gets as valueParameterDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\ParameterDefinitionType
     */
    public function getValueParameterDefinition()
    {
        return $this->valueParameterDefinition;
    }

    /**
     * Sets a new valueParameterDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\ParameterDefinitionType $valueParameterDefinition
     * @return self
     */
    public function setValueParameterDefinition(?\TKusy\Hl7Fhir\R5\ParameterDefinitionType $valueParameterDefinition = null)
    {
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * Gets as valueRelatedArtifact
     *
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType
     */
    public function getValueRelatedArtifact()
    {
        return $this->valueRelatedArtifact;
    }

    /**
     * Sets a new valueRelatedArtifact
     *
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $valueRelatedArtifact
     * @return self
     */
    public function setValueRelatedArtifact(?\TKusy\Hl7Fhir\R5\RelatedArtifactType $valueRelatedArtifact = null)
    {
        $this->valueRelatedArtifact = $valueRelatedArtifact;
        return $this;
    }

    /**
     * Gets as valueTriggerDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\TriggerDefinitionType
     */
    public function getValueTriggerDefinition()
    {
        return $this->valueTriggerDefinition;
    }

    /**
     * Sets a new valueTriggerDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\TriggerDefinitionType $valueTriggerDefinition
     * @return self
     */
    public function setValueTriggerDefinition(?\TKusy\Hl7Fhir\R5\TriggerDefinitionType $valueTriggerDefinition = null)
    {
        $this->valueTriggerDefinition = $valueTriggerDefinition;
        return $this;
    }

    /**
     * Gets as valueUsageContext
     *
     * @return \TKusy\Hl7Fhir\R5\UsageContextType
     */
    public function getValueUsageContext()
    {
        return $this->valueUsageContext;
    }

    /**
     * Sets a new valueUsageContext
     *
     * @param \TKusy\Hl7Fhir\R5\UsageContextType $valueUsageContext
     * @return self
     */
    public function setValueUsageContext(?\TKusy\Hl7Fhir\R5\UsageContextType $valueUsageContext = null)
    {
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * Gets as valueAvailability
     *
     * @return \TKusy\Hl7Fhir\R5\AvailabilityType
     */
    public function getValueAvailability()
    {
        return $this->valueAvailability;
    }

    /**
     * Sets a new valueAvailability
     *
     * @param \TKusy\Hl7Fhir\R5\AvailabilityType $valueAvailability
     * @return self
     */
    public function setValueAvailability(?\TKusy\Hl7Fhir\R5\AvailabilityType $valueAvailability = null)
    {
        $this->valueAvailability = $valueAvailability;
        return $this;
    }

    /**
     * Gets as valueExtendedContactDetail
     *
     * @return \TKusy\Hl7Fhir\R5\ExtendedContactDetailType
     */
    public function getValueExtendedContactDetail()
    {
        return $this->valueExtendedContactDetail;
    }

    /**
     * Sets a new valueExtendedContactDetail
     *
     * @param \TKusy\Hl7Fhir\R5\ExtendedContactDetailType $valueExtendedContactDetail
     * @return self
     */
    public function setValueExtendedContactDetail(?\TKusy\Hl7Fhir\R5\ExtendedContactDetailType $valueExtendedContactDetail = null)
    {
        $this->valueExtendedContactDetail = $valueExtendedContactDetail;
        return $this;
    }

    /**
     * Gets as valueDosage
     *
     * @return \TKusy\Hl7Fhir\R5\DosageType
     */
    public function getValueDosage()
    {
        return $this->valueDosage;
    }

    /**
     * Sets a new valueDosage
     *
     * @param \TKusy\Hl7Fhir\R5\DosageType $valueDosage
     * @return self
     */
    public function setValueDosage(?\TKusy\Hl7Fhir\R5\DosageType $valueDosage = null)
    {
        $this->valueDosage = $valueDosage;
        return $this;
    }

    /**
     * Gets as valueMeta
     *
     * @return \TKusy\Hl7Fhir\R5\MetaType
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * Sets a new valueMeta
     *
     * @param \TKusy\Hl7Fhir\R5\MetaType $valueMeta
     * @return self
     */
    public function setValueMeta(?\TKusy\Hl7Fhir\R5\MetaType $valueMeta = null)
    {
        $this->valueMeta = $valueMeta;
        return $this;
    }


}

