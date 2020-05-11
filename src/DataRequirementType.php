<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DataRequirementType
 *
 * Describes a required data item for evaluation in terms of the type of data, and optional code or date-based filters of the data.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: DataRequirement
 */
class DataRequirementType extends ElementType
{

    /**
     * The type of the required data, specified as the type name of a resource. For profiles, this value is set to the type of the base resource of the profile.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $type
     */
    private $type = null;

    /**
     * The profile of the required data, specified as the uri of the profile definition.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $profile
     */
    private $profile = null;

    /**
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subjectReference
     */
    private $subjectReference = null;

    /**
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 
     *
     * The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $mustSupport
     */
    private $mustSupport = null;

    /**
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementCodeFilterType[] $codeFilter
     */
    private $codeFilter = null;

    /**
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementDateFilterType[] $dateFilter
     */
    private $dateFilter = null;

    /**
     * Specifies a maximum number of results that are required (uses the _count search parameter).
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $limit
     */
    private $limit = null;

    /**
     * Specifies the order of the results to be returned.
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementSortType[] $sort
     */
    private $sort = null;

    /**
     * Gets as type
     *
     * The type of the required data, specified as the type name of a resource. For profiles, this value is set to the type of the base resource of the profile.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the required data, specified as the type name of a resource. For profiles, this value is set to the type of the base resource of the profile.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as profile
     *
     * The profile of the required data, specified as the uri of the profile definition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CanonicalType $profile
     */
    public function addToProfile(\TKusy\Hl7FhirR4\CanonicalType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * The profile of the required data, specified as the uri of the profile definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * The profile of the required data, specified as the uri of the profile definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * The profile of the required data, specified as the uri of the profile definition.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * The profile of the required data, specified as the uri of the profile definition.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType[] $profile
     * @return self
     */
    public function setProfile(array $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as subjectCodeableConcept
     *
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * Sets a new subjectCodeableConcept
     *
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept
     * @return self
     */
    public function setSubjectCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * Gets as subjectReference
     *
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * Sets a new subjectReference
     *
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subjectReference
     * @return self
     */
    public function setSubjectReference(\TKusy\Hl7FhirR4\ReferenceType $subjectReference)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * Adds as mustSupport
     *
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 
     *
     * The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $mustSupport
     */
    public function addToMustSupport(\TKusy\Hl7FhirR4\StringType $mustSupport)
    {
        $this->mustSupport[] = $mustSupport;
        return $this;
    }

    /**
     * isset mustSupport
     *
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 
     *
     * The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMustSupport($index)
    {
        return isset($this->mustSupport[$index]);
    }

    /**
     * unset mustSupport
     *
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 
     *
     * The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMustSupport($index)
    {
        unset($this->mustSupport[$index]);
    }

    /**
     * Gets as mustSupport
     *
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 
     *
     * The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * Sets a new mustSupport
     *
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 
     *
     * The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $mustSupport
     * @return self
     */
    public function setMustSupport(array $mustSupport)
    {
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * Adds as codeFilter
     *
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DataRequirementCodeFilterType $codeFilter
     */
    public function addToCodeFilter(\TKusy\Hl7FhirR4\DataRequirementCodeFilterType $codeFilter)
    {
        $this->codeFilter[] = $codeFilter;
        return $this;
    }

    /**
     * isset codeFilter
     *
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCodeFilter($index)
    {
        return isset($this->codeFilter[$index]);
    }

    /**
     * unset codeFilter
     *
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCodeFilter($index)
    {
        unset($this->codeFilter[$index]);
    }

    /**
     * Gets as codeFilter
     *
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @return \TKusy\Hl7FhirR4\DataRequirementCodeFilterType[]
     */
    public function getCodeFilter()
    {
        return $this->codeFilter;
    }

    /**
     * Sets a new codeFilter
     *
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param \TKusy\Hl7FhirR4\DataRequirementCodeFilterType[] $codeFilter
     * @return self
     */
    public function setCodeFilter(array $codeFilter)
    {
        $this->codeFilter = $codeFilter;
        return $this;
    }

    /**
     * Adds as dateFilter
     *
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DataRequirementDateFilterType $dateFilter
     */
    public function addToDateFilter(\TKusy\Hl7FhirR4\DataRequirementDateFilterType $dateFilter)
    {
        $this->dateFilter[] = $dateFilter;
        return $this;
    }

    /**
     * isset dateFilter
     *
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDateFilter($index)
    {
        return isset($this->dateFilter[$index]);
    }

    /**
     * unset dateFilter
     *
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDateFilter($index)
    {
        unset($this->dateFilter[$index]);
    }

    /**
     * Gets as dateFilter
     *
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @return \TKusy\Hl7FhirR4\DataRequirementDateFilterType[]
     */
    public function getDateFilter()
    {
        return $this->dateFilter;
    }

    /**
     * Sets a new dateFilter
     *
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param \TKusy\Hl7FhirR4\DataRequirementDateFilterType[] $dateFilter
     * @return self
     */
    public function setDateFilter(array $dateFilter)
    {
        $this->dateFilter = $dateFilter;
        return $this;
    }

    /**
     * Gets as limit
     *
     * Specifies a maximum number of results that are required (uses the _count search parameter).
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets a new limit
     *
     * Specifies a maximum number of results that are required (uses the _count search parameter).
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $limit
     * @return self
     */
    public function setLimit(\TKusy\Hl7FhirR4\PositiveIntType $limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Adds as sort
     *
     * Specifies the order of the results to be returned.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DataRequirementSortType $sort
     */
    public function addToSort(\TKusy\Hl7FhirR4\DataRequirementSortType $sort)
    {
        $this->sort[] = $sort;
        return $this;
    }

    /**
     * isset sort
     *
     * Specifies the order of the results to be returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSort($index)
    {
        return isset($this->sort[$index]);
    }

    /**
     * unset sort
     *
     * Specifies the order of the results to be returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSort($index)
    {
        unset($this->sort[$index]);
    }

    /**
     * Gets as sort
     *
     * Specifies the order of the results to be returned.
     *
     * @return \TKusy\Hl7FhirR4\DataRequirementSortType[]
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Specifies the order of the results to be returned.
     *
     * @param \TKusy\Hl7FhirR4\DataRequirementSortType[] $sort
     * @return self
     */
    public function setSort(array $sort)
    {
        $this->sort = $sort;
        return $this;
    }


}

