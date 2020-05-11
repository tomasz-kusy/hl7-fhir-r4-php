<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureMapSourceType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Source
 */
class StructureMapSourceType extends BackboneElementType
{

    /**
     * Type or variable this rule applies to.
     *
     * @var \TKusy\Hl7FhirR4\IdType $context
     */
    private $context = null;

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     *
     * @var \integer $min
     */
    private $min = null;

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     *
     * @var string $max
     */
    private $max = null;

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\Base64BinaryType $defaultValueBase64Binary
     */
    private $defaultValueBase64Binary = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var bool $defaultValueBoolean
     */
    private $defaultValueBoolean = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $defaultValueCanonical
     */
    private $defaultValueCanonical = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeType $defaultValueCode
     */
    private $defaultValueCode = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $defaultValueDate
     */
    private $defaultValueDate = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $defaultValueDateTime
     */
    private $defaultValueDateTime = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var float $defaultValueDecimal
     */
    private $defaultValueDecimal = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IdType $defaultValueId
     */
    private $defaultValueId = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\InstantType $defaultValueInstant
     */
    private $defaultValueInstant = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \integer $defaultValueInteger
     */
    private $defaultValueInteger = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $defaultValueMarkdown
     */
    private $defaultValueMarkdown = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\OidType $defaultValueOid
     */
    private $defaultValueOid = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $defaultValuePositiveInt
     */
    private $defaultValuePositiveInt = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var string $defaultValueString
     */
    private $defaultValueString = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimeType $defaultValueTime
     */
    private $defaultValueTime = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $defaultValueUnsignedInt
     */
    private $defaultValueUnsignedInt = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UriType $defaultValueUri
     */
    private $defaultValueUri = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UrlType $defaultValueUrl
     */
    private $defaultValueUrl = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UuidType $defaultValueUuid
     */
    private $defaultValueUuid = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AddressType $defaultValueAddress
     */
    private $defaultValueAddress = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AgeType $defaultValueAge
     */
    private $defaultValueAge = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType $defaultValueAnnotation
     */
    private $defaultValueAnnotation = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $defaultValueAttachment
     */
    private $defaultValueAttachment = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $defaultValueCodeableConcept
     */
    private $defaultValueCodeableConcept = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodingType $defaultValueCoding
     */
    private $defaultValueCoding = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType $defaultValueContactPoint
     */
    private $defaultValueContactPoint = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CountType $defaultValueCount
     */
    private $defaultValueCount = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DistanceType $defaultValueDistance
     */
    private $defaultValueDistance = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $defaultValueDuration
     */
    private $defaultValueDuration = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\HumanNameType $defaultValueHumanName
     */
    private $defaultValueHumanName = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $defaultValueIdentifier
     */
    private $defaultValueIdentifier = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $defaultValueMoney
     */
    private $defaultValueMoney = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $defaultValuePeriod
     */
    private $defaultValuePeriod = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $defaultValueQuantity
     */
    private $defaultValueQuantity = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $defaultValueRange
     */
    private $defaultValueRange = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $defaultValueRatio
     */
    private $defaultValueRatio = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $defaultValueReference
     */
    private $defaultValueReference = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\SampledDataType $defaultValueSampledData
     */
    private $defaultValueSampledData = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\SignatureType $defaultValueSignature
     */
    private $defaultValueSignature = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $defaultValueTiming
     */
    private $defaultValueTiming = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType $defaultValueContactDetail
     */
    private $defaultValueContactDetail = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ContributorType $defaultValueContributor
     */
    private $defaultValueContributor = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementType $defaultValueDataRequirement
     */
    private $defaultValueDataRequirement = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ExpressionType $defaultValueExpression
     */
    private $defaultValueExpression = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ParameterDefinitionType $defaultValueParameterDefinition
     */
    private $defaultValueParameterDefinition = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RelatedArtifactType $defaultValueRelatedArtifact
     */
    private $defaultValueRelatedArtifact = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TriggerDefinitionType $defaultValueTriggerDefinition
     */
    private $defaultValueTriggerDefinition = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType $defaultValueUsageContext
     */
    private $defaultValueUsageContext = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DosageType $defaultValueDosage
     */
    private $defaultValueDosage = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\MetaType $defaultValueMeta
     */
    private $defaultValueMeta = null;

    /**
     * Optional field for this source.
     *
     * @var string $element
     */
    private $element = null;

    /**
     * How to handle the list mode for this element.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapSourceListModeType $listMode
     */
    private $listMode = null;

    /**
     * Named context for field, if a field is specified.
     *
     * @var \TKusy\Hl7FhirR4\IdType $variable
     */
    private $variable = null;

    /**
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @var string $condition
     */
    private $condition = null;

    /**
     * FHIRPath expression - must be true or the mapping engine throws an error instead of completing.
     *
     * @var string $check
     */
    private $check = null;

    /**
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     *
     * @var string $logMessage
     */
    private $logMessage = null;

    /**
     * Gets as context
     *
     * Type or variable this rule applies to.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Type or variable this rule applies to.
     *
     * @param \TKusy\Hl7FhirR4\IdType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7FhirR4\IdType $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Gets as min
     *
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     *
     * @return \integer
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     *
     * @param \integer $min
     * @return self
     */
    public function setMin(\integer $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     *
     * @return string
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     *
     * @param string $max
     * @return self
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Gets as type
     *
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as defaultValueBase64Binary
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\Base64BinaryType
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * Sets a new defaultValueBase64Binary
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\Base64BinaryType $defaultValueBase64Binary
     * @return self
     */
    public function setDefaultValueBase64Binary(\TKusy\Hl7FhirR4\Base64BinaryType $defaultValueBase64Binary)
    {
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * Gets as defaultValueBoolean
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return bool
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * Sets a new defaultValueBoolean
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param bool $defaultValueBoolean
     * @return self
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * Gets as defaultValueCanonical
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getDefaultValueCanonical()
    {
        return $this->defaultValueCanonical;
    }

    /**
     * Sets a new defaultValueCanonical
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $defaultValueCanonical
     * @return self
     */
    public function setDefaultValueCanonical(\TKusy\Hl7FhirR4\CanonicalType $defaultValueCanonical)
    {
        $this->defaultValueCanonical = $defaultValueCanonical;
        return $this;
    }

    /**
     * Gets as defaultValueCode
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * Sets a new defaultValueCode
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeType $defaultValueCode
     * @return self
     */
    public function setDefaultValueCode(\TKusy\Hl7FhirR4\CodeType $defaultValueCode)
    {
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * Gets as defaultValueDate
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * Sets a new defaultValueDate
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $defaultValueDate
     * @return self
     */
    public function setDefaultValueDate(\TKusy\Hl7FhirR4\DateType $defaultValueDate)
    {
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * Gets as defaultValueDateTime
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }

    /**
     * Sets a new defaultValueDateTime
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $defaultValueDateTime
     * @return self
     */
    public function setDefaultValueDateTime(\TKusy\Hl7FhirR4\DateTimeType $defaultValueDateTime)
    {
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * Gets as defaultValueDecimal
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return float
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * Sets a new defaultValueDecimal
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param float $defaultValueDecimal
     * @return self
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * Gets as defaultValueId
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }

    /**
     * Sets a new defaultValueId
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IdType $defaultValueId
     * @return self
     */
    public function setDefaultValueId(\TKusy\Hl7FhirR4\IdType $defaultValueId)
    {
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * Gets as defaultValueInstant
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * Sets a new defaultValueInstant
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\InstantType $defaultValueInstant
     * @return self
     */
    public function setDefaultValueInstant(\TKusy\Hl7FhirR4\InstantType $defaultValueInstant)
    {
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * Gets as defaultValueInteger
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \integer
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * Sets a new defaultValueInteger
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \integer $defaultValueInteger
     * @return self
     */
    public function setDefaultValueInteger(\integer $defaultValueInteger)
    {
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * Gets as defaultValueMarkdown
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * Sets a new defaultValueMarkdown
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $defaultValueMarkdown
     * @return self
     */
    public function setDefaultValueMarkdown(\TKusy\Hl7FhirR4\MarkdownType $defaultValueMarkdown)
    {
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * Gets as defaultValueOid
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\OidType
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * Sets a new defaultValueOid
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\OidType $defaultValueOid
     * @return self
     */
    public function setDefaultValueOid(\TKusy\Hl7FhirR4\OidType $defaultValueOid)
    {
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * Gets as defaultValuePositiveInt
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * Sets a new defaultValuePositiveInt
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $defaultValuePositiveInt
     * @return self
     */
    public function setDefaultValuePositiveInt(\TKusy\Hl7FhirR4\PositiveIntType $defaultValuePositiveInt)
    {
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * Gets as defaultValueString
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return string
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * Sets a new defaultValueString
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param string $defaultValueString
     * @return self
     */
    public function setDefaultValueString($defaultValueString)
    {
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * Gets as defaultValueTime
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimeType
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * Sets a new defaultValueTime
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimeType $defaultValueTime
     * @return self
     */
    public function setDefaultValueTime(\TKusy\Hl7FhirR4\TimeType $defaultValueTime)
    {
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * Gets as defaultValueUnsignedInt
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * Sets a new defaultValueUnsignedInt
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $defaultValueUnsignedInt
     * @return self
     */
    public function setDefaultValueUnsignedInt(\TKusy\Hl7FhirR4\UnsignedIntType $defaultValueUnsignedInt)
    {
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * Gets as defaultValueUri
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * Sets a new defaultValueUri
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UriType $defaultValueUri
     * @return self
     */
    public function setDefaultValueUri(\TKusy\Hl7FhirR4\UriType $defaultValueUri)
    {
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * Gets as defaultValueUrl
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UrlType
     */
    public function getDefaultValueUrl()
    {
        return $this->defaultValueUrl;
    }

    /**
     * Sets a new defaultValueUrl
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UrlType $defaultValueUrl
     * @return self
     */
    public function setDefaultValueUrl(\TKusy\Hl7FhirR4\UrlType $defaultValueUrl)
    {
        $this->defaultValueUrl = $defaultValueUrl;
        return $this;
    }

    /**
     * Gets as defaultValueUuid
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UuidType
     */
    public function getDefaultValueUuid()
    {
        return $this->defaultValueUuid;
    }

    /**
     * Sets a new defaultValueUuid
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UuidType $defaultValueUuid
     * @return self
     */
    public function setDefaultValueUuid(\TKusy\Hl7FhirR4\UuidType $defaultValueUuid)
    {
        $this->defaultValueUuid = $defaultValueUuid;
        return $this;
    }

    /**
     * Gets as defaultValueAddress
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AddressType
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }

    /**
     * Sets a new defaultValueAddress
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AddressType $defaultValueAddress
     * @return self
     */
    public function setDefaultValueAddress(\TKusy\Hl7FhirR4\AddressType $defaultValueAddress)
    {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * Gets as defaultValueAge
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AgeType
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }

    /**
     * Sets a new defaultValueAge
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AgeType $defaultValueAge
     * @return self
     */
    public function setDefaultValueAge(\TKusy\Hl7FhirR4\AgeType $defaultValueAge)
    {
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * Gets as defaultValueAnnotation
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * Sets a new defaultValueAnnotation
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType $defaultValueAnnotation
     * @return self
     */
    public function setDefaultValueAnnotation(\TKusy\Hl7FhirR4\AnnotationType $defaultValueAnnotation)
    {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * Gets as defaultValueAttachment
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * Sets a new defaultValueAttachment
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $defaultValueAttachment
     * @return self
     */
    public function setDefaultValueAttachment(\TKusy\Hl7FhirR4\AttachmentType $defaultValueAttachment)
    {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * Gets as defaultValueCodeableConcept
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * Sets a new defaultValueCodeableConcept
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $defaultValueCodeableConcept
     * @return self
     */
    public function setDefaultValueCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $defaultValueCodeableConcept)
    {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * Gets as defaultValueCoding
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * Sets a new defaultValueCoding
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodingType $defaultValueCoding
     * @return self
     */
    public function setDefaultValueCoding(\TKusy\Hl7FhirR4\CodingType $defaultValueCoding)
    {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * Gets as defaultValueContactPoint
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ContactPointType
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * Sets a new defaultValueContactPoint
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ContactPointType $defaultValueContactPoint
     * @return self
     */
    public function setDefaultValueContactPoint(\TKusy\Hl7FhirR4\ContactPointType $defaultValueContactPoint)
    {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * Gets as defaultValueCount
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CountType
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }

    /**
     * Sets a new defaultValueCount
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CountType $defaultValueCount
     * @return self
     */
    public function setDefaultValueCount(\TKusy\Hl7FhirR4\CountType $defaultValueCount)
    {
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * Gets as defaultValueDistance
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DistanceType
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }

    /**
     * Sets a new defaultValueDistance
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DistanceType $defaultValueDistance
     * @return self
     */
    public function setDefaultValueDistance(\TKusy\Hl7FhirR4\DistanceType $defaultValueDistance)
    {
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * Gets as defaultValueDuration
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }

    /**
     * Sets a new defaultValueDuration
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $defaultValueDuration
     * @return self
     */
    public function setDefaultValueDuration(\TKusy\Hl7FhirR4\DurationType $defaultValueDuration)
    {
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * Gets as defaultValueHumanName
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\HumanNameType
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * Sets a new defaultValueHumanName
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\HumanNameType $defaultValueHumanName
     * @return self
     */
    public function setDefaultValueHumanName(\TKusy\Hl7FhirR4\HumanNameType $defaultValueHumanName)
    {
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * Gets as defaultValueIdentifier
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * Sets a new defaultValueIdentifier
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $defaultValueIdentifier
     * @return self
     */
    public function setDefaultValueIdentifier(\TKusy\Hl7FhirR4\IdentifierType $defaultValueIdentifier)
    {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * Gets as defaultValueMoney
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }

    /**
     * Sets a new defaultValueMoney
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $defaultValueMoney
     * @return self
     */
    public function setDefaultValueMoney(\TKusy\Hl7FhirR4\MoneyType $defaultValueMoney)
    {
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * Gets as defaultValuePeriod
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * Sets a new defaultValuePeriod
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $defaultValuePeriod
     * @return self
     */
    public function setDefaultValuePeriod(\TKusy\Hl7FhirR4\PeriodType $defaultValuePeriod)
    {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * Gets as defaultValueQuantity
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }

    /**
     * Sets a new defaultValueQuantity
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $defaultValueQuantity
     * @return self
     */
    public function setDefaultValueQuantity(\TKusy\Hl7FhirR4\QuantityType $defaultValueQuantity)
    {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * Gets as defaultValueRange
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * Sets a new defaultValueRange
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $defaultValueRange
     * @return self
     */
    public function setDefaultValueRange(\TKusy\Hl7FhirR4\RangeType $defaultValueRange)
    {
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * Gets as defaultValueRatio
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * Sets a new defaultValueRatio
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $defaultValueRatio
     * @return self
     */
    public function setDefaultValueRatio(\TKusy\Hl7FhirR4\RatioType $defaultValueRatio)
    {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * Gets as defaultValueReference
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * Sets a new defaultValueReference
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $defaultValueReference
     * @return self
     */
    public function setDefaultValueReference(\TKusy\Hl7FhirR4\ReferenceType $defaultValueReference)
    {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * Gets as defaultValueSampledData
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\SampledDataType
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * Sets a new defaultValueSampledData
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\SampledDataType $defaultValueSampledData
     * @return self
     */
    public function setDefaultValueSampledData(\TKusy\Hl7FhirR4\SampledDataType $defaultValueSampledData)
    {
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * Gets as defaultValueSignature
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\SignatureType
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }

    /**
     * Sets a new defaultValueSignature
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\SignatureType $defaultValueSignature
     * @return self
     */
    public function setDefaultValueSignature(\TKusy\Hl7FhirR4\SignatureType $defaultValueSignature)
    {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * Gets as defaultValueTiming
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }

    /**
     * Sets a new defaultValueTiming
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $defaultValueTiming
     * @return self
     */
    public function setDefaultValueTiming(\TKusy\Hl7FhirR4\TimingType $defaultValueTiming)
    {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * Gets as defaultValueContactDetail
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ContactDetailType
     */
    public function getDefaultValueContactDetail()
    {
        return $this->defaultValueContactDetail;
    }

    /**
     * Sets a new defaultValueContactDetail
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ContactDetailType $defaultValueContactDetail
     * @return self
     */
    public function setDefaultValueContactDetail(\TKusy\Hl7FhirR4\ContactDetailType $defaultValueContactDetail)
    {
        $this->defaultValueContactDetail = $defaultValueContactDetail;
        return $this;
    }

    /**
     * Gets as defaultValueContributor
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ContributorType
     */
    public function getDefaultValueContributor()
    {
        return $this->defaultValueContributor;
    }

    /**
     * Sets a new defaultValueContributor
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ContributorType $defaultValueContributor
     * @return self
     */
    public function setDefaultValueContributor(\TKusy\Hl7FhirR4\ContributorType $defaultValueContributor)
    {
        $this->defaultValueContributor = $defaultValueContributor;
        return $this;
    }

    /**
     * Gets as defaultValueDataRequirement
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DataRequirementType
     */
    public function getDefaultValueDataRequirement()
    {
        return $this->defaultValueDataRequirement;
    }

    /**
     * Sets a new defaultValueDataRequirement
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DataRequirementType $defaultValueDataRequirement
     * @return self
     */
    public function setDefaultValueDataRequirement(\TKusy\Hl7FhirR4\DataRequirementType $defaultValueDataRequirement)
    {
        $this->defaultValueDataRequirement = $defaultValueDataRequirement;
        return $this;
    }

    /**
     * Gets as defaultValueExpression
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ExpressionType
     */
    public function getDefaultValueExpression()
    {
        return $this->defaultValueExpression;
    }

    /**
     * Sets a new defaultValueExpression
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ExpressionType $defaultValueExpression
     * @return self
     */
    public function setDefaultValueExpression(\TKusy\Hl7FhirR4\ExpressionType $defaultValueExpression)
    {
        $this->defaultValueExpression = $defaultValueExpression;
        return $this;
    }

    /**
     * Gets as defaultValueParameterDefinition
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ParameterDefinitionType
     */
    public function getDefaultValueParameterDefinition()
    {
        return $this->defaultValueParameterDefinition;
    }

    /**
     * Sets a new defaultValueParameterDefinition
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ParameterDefinitionType $defaultValueParameterDefinition
     * @return self
     */
    public function setDefaultValueParameterDefinition(\TKusy\Hl7FhirR4\ParameterDefinitionType $defaultValueParameterDefinition)
    {
        $this->defaultValueParameterDefinition = $defaultValueParameterDefinition;
        return $this;
    }

    /**
     * Gets as defaultValueRelatedArtifact
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RelatedArtifactType
     */
    public function getDefaultValueRelatedArtifact()
    {
        return $this->defaultValueRelatedArtifact;
    }

    /**
     * Sets a new defaultValueRelatedArtifact
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RelatedArtifactType $defaultValueRelatedArtifact
     * @return self
     */
    public function setDefaultValueRelatedArtifact(\TKusy\Hl7FhirR4\RelatedArtifactType $defaultValueRelatedArtifact)
    {
        $this->defaultValueRelatedArtifact = $defaultValueRelatedArtifact;
        return $this;
    }

    /**
     * Gets as defaultValueTriggerDefinition
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TriggerDefinitionType
     */
    public function getDefaultValueTriggerDefinition()
    {
        return $this->defaultValueTriggerDefinition;
    }

    /**
     * Sets a new defaultValueTriggerDefinition
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TriggerDefinitionType $defaultValueTriggerDefinition
     * @return self
     */
    public function setDefaultValueTriggerDefinition(\TKusy\Hl7FhirR4\TriggerDefinitionType $defaultValueTriggerDefinition)
    {
        $this->defaultValueTriggerDefinition = $defaultValueTriggerDefinition;
        return $this;
    }

    /**
     * Gets as defaultValueUsageContext
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UsageContextType
     */
    public function getDefaultValueUsageContext()
    {
        return $this->defaultValueUsageContext;
    }

    /**
     * Sets a new defaultValueUsageContext
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UsageContextType $defaultValueUsageContext
     * @return self
     */
    public function setDefaultValueUsageContext(\TKusy\Hl7FhirR4\UsageContextType $defaultValueUsageContext)
    {
        $this->defaultValueUsageContext = $defaultValueUsageContext;
        return $this;
    }

    /**
     * Gets as defaultValueDosage
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DosageType
     */
    public function getDefaultValueDosage()
    {
        return $this->defaultValueDosage;
    }

    /**
     * Sets a new defaultValueDosage
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DosageType $defaultValueDosage
     * @return self
     */
    public function setDefaultValueDosage(\TKusy\Hl7FhirR4\DosageType $defaultValueDosage)
    {
        $this->defaultValueDosage = $defaultValueDosage;
        return $this;
    }

    /**
     * Gets as defaultValueMeta
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\MetaType
     */
    public function getDefaultValueMeta()
    {
        return $this->defaultValueMeta;
    }

    /**
     * Sets a new defaultValueMeta
     *
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\MetaType $defaultValueMeta
     * @return self
     */
    public function setDefaultValueMeta(\TKusy\Hl7FhirR4\MetaType $defaultValueMeta)
    {
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * Gets as element
     *
     * Optional field for this source.
     *
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * Optional field for this source.
     *
     * @param string $element
     * @return self
     */
    public function setElement($element)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * Gets as listMode
     *
     * How to handle the list mode for this element.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapSourceListModeType
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * Sets a new listMode
     *
     * How to handle the list mode for this element.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapSourceListModeType $listMode
     * @return self
     */
    public function setListMode(\TKusy\Hl7FhirR4\StructureMapSourceListModeType $listMode)
    {
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * Gets as variable
     *
     * Named context for field, if a field is specified.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets a new variable
     *
     * Named context for field, if a field is specified.
     *
     * @param \TKusy\Hl7FhirR4\IdType $variable
     * @return self
     */
    public function setVariable(\TKusy\Hl7FhirR4\IdType $variable)
    {
        $this->variable = $variable;
        return $this;
    }

    /**
     * Gets as condition
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @param string $condition
     * @return self
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as check
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead of completing.
     *
     * @return string
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * Sets a new check
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead of completing.
     *
     * @param string $check
     * @return self
     */
    public function setCheck($check)
    {
        $this->check = $check;
        return $this;
    }

    /**
     * Gets as logMessage
     *
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     *
     * @return string
     */
    public function getLogMessage()
    {
        return $this->logMessage;
    }

    /**
     * Sets a new logMessage
     *
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     *
     * @param string $logMessage
     * @return self
     */
    public function setLogMessage($logMessage)
    {
        $this->logMessage = $logMessage;
        return $this;
    }


}

