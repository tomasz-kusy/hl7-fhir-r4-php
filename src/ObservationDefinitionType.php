<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ObservationDefinitionType
 *
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ObservationDefinition
 */
class ObservationDefinitionType extends DomainResourceType
{

    /**
     * A code that classifies the general type of observation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Describes what will be observed. Sometimes this is called the observation "name".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\ObservationDataTypeType[] $permittedDataType
     */
    private $permittedDataType = null;

    /**
     * Multiple results allowed for observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $multipleResultsAllowed
     */
    private $multipleResultsAllowed = null;

    /**
     * The method or technique used to perform the observation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * The preferred name to be used when reporting the results of observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\StringType $preferredReportName
     */
    private $preferredReportName = null;

    /**
     * Characteristics for quantitative results of this observation.
     *
     * @var \TKusy\Hl7FhirR4\ObservationDefinitionQuantitativeDetailsType $quantitativeDetails
     */
    private $quantitativeDetails = null;

    /**
     * Multiple ranges of results qualified by different contexts for ordinal or continuous observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\ObservationDefinitionQualifiedIntervalType[] $qualifiedInterval
     */
    private $qualifiedInterval = null;

    /**
     * The set of valid coded results for the observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $validCodedValueSet
     */
    private $validCodedValueSet = null;

    /**
     * The set of normal coded results for the observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $normalCodedValueSet
     */
    private $normalCodedValueSet = null;

    /**
     * The set of abnormal coded results for the observation conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $abnormalCodedValueSet
     */
    private $abnormalCodedValueSet = null;

    /**
     * The set of critical coded results for the observation conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $criticalCodedValueSet
     */
    private $criticalCodedValueSet = null;

    /**
     * Adds as category
     *
     * A code that classifies the general type of observation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A code that classifies the general type of observation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * A code that classifies the general type of observation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * A code that classifies the general type of observation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A code that classifies the general type of observation.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * Describes what will be observed. Sometimes this is called the observation "name".
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Describes what will be observed. Sometimes this is called the observation "name".
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ObservationDataTypeType $permittedDataType
     */
    public function addToPermittedDataType(\TKusy\Hl7FhirR4\ObservationDataTypeType $permittedDataType)
    {
        $this->permittedDataType[] = $permittedDataType;
        return $this;
    }

    /**
     * isset permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPermittedDataType($index)
    {
        return isset($this->permittedDataType[$index]);
    }

    /**
     * unset permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPermittedDataType($index)
    {
        unset($this->permittedDataType[$index]);
    }

    /**
     * Gets as permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\ObservationDataTypeType[]
     */
    public function getPermittedDataType()
    {
        return $this->permittedDataType;
    }

    /**
     * Sets a new permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\ObservationDataTypeType[] $permittedDataType
     * @return self
     */
    public function setPermittedDataType(array $permittedDataType)
    {
        $this->permittedDataType = $permittedDataType;
        return $this;
    }

    /**
     * Gets as multipleResultsAllowed
     *
     * Multiple results allowed for observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getMultipleResultsAllowed()
    {
        return $this->multipleResultsAllowed;
    }

    /**
     * Sets a new multipleResultsAllowed
     *
     * Multiple results allowed for observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $multipleResultsAllowed
     * @return self
     */
    public function setMultipleResultsAllowed(\TKusy\Hl7FhirR4\BooleanType $multipleResultsAllowed)
    {
        $this->multipleResultsAllowed = $multipleResultsAllowed;
        return $this;
    }

    /**
     * Gets as method
     *
     * The method or technique used to perform the observation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * The method or technique used to perform the observation.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as preferredReportName
     *
     * The preferred name to be used when reporting the results of observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPreferredReportName()
    {
        return $this->preferredReportName;
    }

    /**
     * Sets a new preferredReportName
     *
     * The preferred name to be used when reporting the results of observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\StringType $preferredReportName
     * @return self
     */
    public function setPreferredReportName(\TKusy\Hl7FhirR4\StringType $preferredReportName)
    {
        $this->preferredReportName = $preferredReportName;
        return $this;
    }

    /**
     * Gets as quantitativeDetails
     *
     * Characteristics for quantitative results of this observation.
     *
     * @return \TKusy\Hl7FhirR4\ObservationDefinitionQuantitativeDetailsType
     */
    public function getQuantitativeDetails()
    {
        return $this->quantitativeDetails;
    }

    /**
     * Sets a new quantitativeDetails
     *
     * Characteristics for quantitative results of this observation.
     *
     * @param \TKusy\Hl7FhirR4\ObservationDefinitionQuantitativeDetailsType $quantitativeDetails
     * @return self
     */
    public function setQuantitativeDetails(\TKusy\Hl7FhirR4\ObservationDefinitionQuantitativeDetailsType $quantitativeDetails)
    {
        $this->quantitativeDetails = $quantitativeDetails;
        return $this;
    }

    /**
     * Adds as qualifiedInterval
     *
     * Multiple ranges of results qualified by different contexts for ordinal or continuous observations conforming to this ObservationDefinition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ObservationDefinitionQualifiedIntervalType $qualifiedInterval
     */
    public function addToQualifiedInterval(\TKusy\Hl7FhirR4\ObservationDefinitionQualifiedIntervalType $qualifiedInterval)
    {
        $this->qualifiedInterval[] = $qualifiedInterval;
        return $this;
    }

    /**
     * isset qualifiedInterval
     *
     * Multiple ranges of results qualified by different contexts for ordinal or continuous observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualifiedInterval($index)
    {
        return isset($this->qualifiedInterval[$index]);
    }

    /**
     * unset qualifiedInterval
     *
     * Multiple ranges of results qualified by different contexts for ordinal or continuous observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualifiedInterval($index)
    {
        unset($this->qualifiedInterval[$index]);
    }

    /**
     * Gets as qualifiedInterval
     *
     * Multiple ranges of results qualified by different contexts for ordinal or continuous observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\ObservationDefinitionQualifiedIntervalType[]
     */
    public function getQualifiedInterval()
    {
        return $this->qualifiedInterval;
    }

    /**
     * Sets a new qualifiedInterval
     *
     * Multiple ranges of results qualified by different contexts for ordinal or continuous observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\ObservationDefinitionQualifiedIntervalType[] $qualifiedInterval
     * @return self
     */
    public function setQualifiedInterval(array $qualifiedInterval)
    {
        $this->qualifiedInterval = $qualifiedInterval;
        return $this;
    }

    /**
     * Gets as validCodedValueSet
     *
     * The set of valid coded results for the observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getValidCodedValueSet()
    {
        return $this->validCodedValueSet;
    }

    /**
     * Sets a new validCodedValueSet
     *
     * The set of valid coded results for the observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $validCodedValueSet
     * @return self
     */
    public function setValidCodedValueSet(\TKusy\Hl7FhirR4\ReferenceType $validCodedValueSet)
    {
        $this->validCodedValueSet = $validCodedValueSet;
        return $this;
    }

    /**
     * Gets as normalCodedValueSet
     *
     * The set of normal coded results for the observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getNormalCodedValueSet()
    {
        return $this->normalCodedValueSet;
    }

    /**
     * Sets a new normalCodedValueSet
     *
     * The set of normal coded results for the observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $normalCodedValueSet
     * @return self
     */
    public function setNormalCodedValueSet(\TKusy\Hl7FhirR4\ReferenceType $normalCodedValueSet)
    {
        $this->normalCodedValueSet = $normalCodedValueSet;
        return $this;
    }

    /**
     * Gets as abnormalCodedValueSet
     *
     * The set of abnormal coded results for the observation conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAbnormalCodedValueSet()
    {
        return $this->abnormalCodedValueSet;
    }

    /**
     * Sets a new abnormalCodedValueSet
     *
     * The set of abnormal coded results for the observation conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $abnormalCodedValueSet
     * @return self
     */
    public function setAbnormalCodedValueSet(\TKusy\Hl7FhirR4\ReferenceType $abnormalCodedValueSet)
    {
        $this->abnormalCodedValueSet = $abnormalCodedValueSet;
        return $this;
    }

    /**
     * Gets as criticalCodedValueSet
     *
     * The set of critical coded results for the observation conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getCriticalCodedValueSet()
    {
        return $this->criticalCodedValueSet;
    }

    /**
     * Sets a new criticalCodedValueSet
     *
     * The set of critical coded results for the observation conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $criticalCodedValueSet
     * @return self
     */
    public function setCriticalCodedValueSet(\TKusy\Hl7FhirR4\ReferenceType $criticalCodedValueSet)
    {
        $this->criticalCodedValueSet = $criticalCodedValueSet;
        return $this;
    }


}

