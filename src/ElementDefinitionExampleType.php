<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ElementDefinitionExampleType
 *
 * Captures constraints on each element within the resource, profile, or extension.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Example
 */
class ElementDefinitionExampleType extends BackboneElementType
{

    /**
     * Describes the purpose of this example amoung the set of examples.
     *
     * @var string $label
     */
    private $label = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary
     */
    private $valueBase64Binary = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var bool $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $valueCanonical
     */
    private $valueCanonical = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeType $valueCode
     */
    private $valueCode = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $valueDate
     */
    private $valueDate = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var float $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IdType $valueId
     */
    private $valueId = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\InstantType $valueInstant
     */
    private $valueInstant = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \integer $valueInteger
     */
    private $valueInteger = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $valueMarkdown
     */
    private $valueMarkdown = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\OidType $valueOid
     */
    private $valueOid = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $valuePositiveInt
     */
    private $valuePositiveInt = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var string $valueString
     */
    private $valueString = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $valueUnsignedInt
     */
    private $valueUnsignedInt = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UriType $valueUri
     */
    private $valueUri = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UrlType $valueUrl
     */
    private $valueUrl = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UuidType $valueUuid
     */
    private $valueUuid = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AddressType $valueAddress
     */
    private $valueAddress = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AgeType $valueAge
     */
    private $valueAge = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType $valueAnnotation
     */
    private $valueAnnotation = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType $valueContactPoint
     */
    private $valueContactPoint = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CountType $valueCount
     */
    private $valueCount = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DistanceType $valueDistance
     */
    private $valueDistance = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $valueDuration
     */
    private $valueDuration = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\HumanNameType $valueHumanName
     */
    private $valueHumanName = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $valueIdentifier
     */
    private $valueIdentifier = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $valueMoney
     */
    private $valueMoney = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $valueRatio
     */
    private $valueRatio = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\SampledDataType $valueSampledData
     */
    private $valueSampledData = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\SignatureType $valueSignature
     */
    private $valueSignature = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $valueTiming
     */
    private $valueTiming = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType $valueContactDetail
     */
    private $valueContactDetail = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ContributorType $valueContributor
     */
    private $valueContributor = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementType $valueDataRequirement
     */
    private $valueDataRequirement = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ExpressionType $valueExpression
     */
    private $valueExpression = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ParameterDefinitionType $valueParameterDefinition
     */
    private $valueParameterDefinition = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RelatedArtifactType $valueRelatedArtifact
     */
    private $valueRelatedArtifact = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TriggerDefinitionType $valueTriggerDefinition
     */
    private $valueTriggerDefinition = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType $valueUsageContext
     */
    private $valueUsageContext = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DosageType $valueDosage
     */
    private $valueDosage = null;

    /**
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MetaType $valueMeta
     */
    private $valueMeta = null;

    /**
     * Gets as label
     *
     * Describes the purpose of this example amoung the set of examples.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * Describes the purpose of this example amoung the set of examples.
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as valueBase64Binary
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\Base64BinaryType
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * Sets a new valueBase64Binary
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary
     * @return self
     */
    public function setValueBase64Binary(\TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return bool
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param bool $valueBoolean
     * @return self
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueCanonical
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getValueCanonical()
    {
        return $this->valueCanonical;
    }

    /**
     * Sets a new valueCanonical
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $valueCanonical
     * @return self
     */
    public function setValueCanonical(\TKusy\Hl7FhirR4\CanonicalType $valueCanonical)
    {
        $this->valueCanonical = $valueCanonical;
        return $this;
    }

    /**
     * Gets as valueCode
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * Sets a new valueCode
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeType $valueCode
     * @return self
     */
    public function setValueCode(\TKusy\Hl7FhirR4\CodeType $valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * Gets as valueDate
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueDecimal
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return float
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * Sets a new valueDecimal
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param float $valueDecimal
     * @return self
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * Gets as valueId
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * Sets a new valueId
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IdType $valueId
     * @return self
     */
    public function setValueId(\TKusy\Hl7FhirR4\IdType $valueId)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * Gets as valueInstant
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * Sets a new valueInstant
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\InstantType $valueInstant
     * @return self
     */
    public function setValueInstant(\TKusy\Hl7FhirR4\InstantType $valueInstant)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueMarkdown
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * Sets a new valueMarkdown
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $valueMarkdown
     * @return self
     */
    public function setValueMarkdown(\TKusy\Hl7FhirR4\MarkdownType $valueMarkdown)
    {
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * Gets as valueOid
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\OidType
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * Sets a new valueOid
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\OidType $valueOid
     * @return self
     */
    public function setValueOid(\TKusy\Hl7FhirR4\OidType $valueOid)
    {
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * Gets as valuePositiveInt
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * Sets a new valuePositiveInt
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $valuePositiveInt
     * @return self
     */
    public function setValuePositiveInt(\TKusy\Hl7FhirR4\PositiveIntType $valuePositiveInt)
    {
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueTime
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueUnsignedInt
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * Sets a new valueUnsignedInt
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $valueUnsignedInt
     * @return self
     */
    public function setValueUnsignedInt(\TKusy\Hl7FhirR4\UnsignedIntType $valueUnsignedInt)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * Gets as valueUri
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueUrl
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UrlType
     */
    public function getValueUrl()
    {
        return $this->valueUrl;
    }

    /**
     * Sets a new valueUrl
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UrlType $valueUrl
     * @return self
     */
    public function setValueUrl(\TKusy\Hl7FhirR4\UrlType $valueUrl)
    {
        $this->valueUrl = $valueUrl;
        return $this;
    }

    /**
     * Gets as valueUuid
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UuidType
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * Sets a new valueUuid
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UuidType $valueUuid
     * @return self
     */
    public function setValueUuid(\TKusy\Hl7FhirR4\UuidType $valueUuid)
    {
        $this->valueUuid = $valueUuid;
        return $this;
    }

    /**
     * Gets as valueAddress
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AddressType
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * Sets a new valueAddress
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AddressType $valueAddress
     * @return self
     */
    public function setValueAddress(\TKusy\Hl7FhirR4\AddressType $valueAddress)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * Gets as valueAge
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AgeType
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * Sets a new valueAge
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AgeType $valueAge
     * @return self
     */
    public function setValueAge(\TKusy\Hl7FhirR4\AgeType $valueAge)
    {
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * Gets as valueAnnotation
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * Sets a new valueAnnotation
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType $valueAnnotation
     * @return self
     */
    public function setValueAnnotation(\TKusy\Hl7FhirR4\AnnotationType $valueAnnotation)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * Gets as valueAttachment
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueCodeableConcept
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueCoding
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueContactPoint
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ContactPointType
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * Sets a new valueContactPoint
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ContactPointType $valueContactPoint
     * @return self
     */
    public function setValueContactPoint(\TKusy\Hl7FhirR4\ContactPointType $valueContactPoint)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * Gets as valueCount
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CountType
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * Sets a new valueCount
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CountType $valueCount
     * @return self
     */
    public function setValueCount(\TKusy\Hl7FhirR4\CountType $valueCount)
    {
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * Gets as valueDistance
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DistanceType
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * Sets a new valueDistance
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DistanceType $valueDistance
     * @return self
     */
    public function setValueDistance(\TKusy\Hl7FhirR4\DistanceType $valueDistance)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * Gets as valueDuration
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * Sets a new valueDuration
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $valueDuration
     * @return self
     */
    public function setValueDuration(\TKusy\Hl7FhirR4\DurationType $valueDuration)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * Gets as valueHumanName
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\HumanNameType
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * Sets a new valueHumanName
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\HumanNameType $valueHumanName
     * @return self
     */
    public function setValueHumanName(\TKusy\Hl7FhirR4\HumanNameType $valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * Gets as valueIdentifier
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * Sets a new valueIdentifier
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $valueIdentifier
     * @return self
     */
    public function setValueIdentifier(\TKusy\Hl7FhirR4\IdentifierType $valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * Gets as valueMoney
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * Sets a new valueMoney
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $valueMoney
     * @return self
     */
    public function setValueMoney(\TKusy\Hl7FhirR4\MoneyType $valueMoney)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * Gets as valuePeriod
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * Sets a new valuePeriod
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $valuePeriod
     * @return self
     */
    public function setValuePeriod(\TKusy\Hl7FhirR4\PeriodType $valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueRange
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $valueRange
     * @return self
     */
    public function setValueRange(\TKusy\Hl7FhirR4\RangeType $valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueRatio
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Sets a new valueRatio
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $valueRatio
     * @return self
     */
    public function setValueRatio(\TKusy\Hl7FhirR4\RatioType $valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
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
     * Gets as valueSampledData
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\SampledDataType
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * Sets a new valueSampledData
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\SampledDataType $valueSampledData
     * @return self
     */
    public function setValueSampledData(\TKusy\Hl7FhirR4\SampledDataType $valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * Gets as valueSignature
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\SignatureType
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * Sets a new valueSignature
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\SignatureType $valueSignature
     * @return self
     */
    public function setValueSignature(\TKusy\Hl7FhirR4\SignatureType $valueSignature)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * Gets as valueTiming
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * Sets a new valueTiming
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $valueTiming
     * @return self
     */
    public function setValueTiming(\TKusy\Hl7FhirR4\TimingType $valueTiming)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * Gets as valueContactDetail
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ContactDetailType
     */
    public function getValueContactDetail()
    {
        return $this->valueContactDetail;
    }

    /**
     * Sets a new valueContactDetail
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ContactDetailType $valueContactDetail
     * @return self
     */
    public function setValueContactDetail(\TKusy\Hl7FhirR4\ContactDetailType $valueContactDetail)
    {
        $this->valueContactDetail = $valueContactDetail;
        return $this;
    }

    /**
     * Gets as valueContributor
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ContributorType
     */
    public function getValueContributor()
    {
        return $this->valueContributor;
    }

    /**
     * Sets a new valueContributor
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ContributorType $valueContributor
     * @return self
     */
    public function setValueContributor(\TKusy\Hl7FhirR4\ContributorType $valueContributor)
    {
        $this->valueContributor = $valueContributor;
        return $this;
    }

    /**
     * Gets as valueDataRequirement
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DataRequirementType
     */
    public function getValueDataRequirement()
    {
        return $this->valueDataRequirement;
    }

    /**
     * Sets a new valueDataRequirement
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DataRequirementType $valueDataRequirement
     * @return self
     */
    public function setValueDataRequirement(\TKusy\Hl7FhirR4\DataRequirementType $valueDataRequirement)
    {
        $this->valueDataRequirement = $valueDataRequirement;
        return $this;
    }

    /**
     * Gets as valueExpression
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ExpressionType
     */
    public function getValueExpression()
    {
        return $this->valueExpression;
    }

    /**
     * Sets a new valueExpression
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ExpressionType $valueExpression
     * @return self
     */
    public function setValueExpression(\TKusy\Hl7FhirR4\ExpressionType $valueExpression)
    {
        $this->valueExpression = $valueExpression;
        return $this;
    }

    /**
     * Gets as valueParameterDefinition
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ParameterDefinitionType
     */
    public function getValueParameterDefinition()
    {
        return $this->valueParameterDefinition;
    }

    /**
     * Sets a new valueParameterDefinition
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ParameterDefinitionType $valueParameterDefinition
     * @return self
     */
    public function setValueParameterDefinition(\TKusy\Hl7FhirR4\ParameterDefinitionType $valueParameterDefinition)
    {
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * Gets as valueRelatedArtifact
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RelatedArtifactType
     */
    public function getValueRelatedArtifact()
    {
        return $this->valueRelatedArtifact;
    }

    /**
     * Sets a new valueRelatedArtifact
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RelatedArtifactType $valueRelatedArtifact
     * @return self
     */
    public function setValueRelatedArtifact(\TKusy\Hl7FhirR4\RelatedArtifactType $valueRelatedArtifact)
    {
        $this->valueRelatedArtifact = $valueRelatedArtifact;
        return $this;
    }

    /**
     * Gets as valueTriggerDefinition
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TriggerDefinitionType
     */
    public function getValueTriggerDefinition()
    {
        return $this->valueTriggerDefinition;
    }

    /**
     * Sets a new valueTriggerDefinition
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TriggerDefinitionType $valueTriggerDefinition
     * @return self
     */
    public function setValueTriggerDefinition(\TKusy\Hl7FhirR4\TriggerDefinitionType $valueTriggerDefinition)
    {
        $this->valueTriggerDefinition = $valueTriggerDefinition;
        return $this;
    }

    /**
     * Gets as valueUsageContext
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UsageContextType
     */
    public function getValueUsageContext()
    {
        return $this->valueUsageContext;
    }

    /**
     * Sets a new valueUsageContext
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UsageContextType $valueUsageContext
     * @return self
     */
    public function setValueUsageContext(\TKusy\Hl7FhirR4\UsageContextType $valueUsageContext)
    {
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * Gets as valueDosage
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DosageType
     */
    public function getValueDosage()
    {
        return $this->valueDosage;
    }

    /**
     * Sets a new valueDosage
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DosageType $valueDosage
     * @return self
     */
    public function setValueDosage(\TKusy\Hl7FhirR4\DosageType $valueDosage)
    {
        $this->valueDosage = $valueDosage;
        return $this;
    }

    /**
     * Gets as valueMeta
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MetaType
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * Sets a new valueMeta
     *
     * The actual value for the element, which must be one of the types allowed for this element. (choose any one of the elements, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MetaType $valueMeta
     * @return self
     */
    public function setValueMeta(\TKusy\Hl7FhirR4\MetaType $valueMeta)
    {
        $this->valueMeta = $valueMeta;
        return $this;
    }


}

