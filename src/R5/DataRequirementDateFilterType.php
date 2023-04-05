<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DataRequirementDateFilterType
 *
 * Describes a required data item for evaluation in terms of the type of data, and optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: DataRequirement.DateFilter
 */
class DataRequirementDateFilterType extends DataTypeType
{

    /**
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolvable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $path
     */
    private $path = null;

    /**
     * A date parameter that refers to a search parameter defined on the specified type of the DataRequirement, and which searches on elements of type date, dateTime, Period, Schedule, or Timing.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $searchParam
     */
    private $searchParam = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $valueDuration
     */
    private $valueDuration = null;

    /**
     * Gets as path
     *
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolvable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolvable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $path
     * @return self
     */
    public function setPath(?\TKusy\Hl7Fhir\R5\StringType $path = null)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as searchParam
     *
     * A date parameter that refers to a search parameter defined on the specified type of the DataRequirement, and which searches on elements of type date, dateTime, Period, Schedule, or Timing.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * Sets a new searchParam
     *
     * A date parameter that refers to a search parameter defined on the specified type of the DataRequirement, and which searches on elements of type date, dateTime, Period, Schedule, or Timing.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $searchParam
     * @return self
     */
    public function setSearchParam(?\TKusy\Hl7Fhir\R5\StringType $searchParam = null)
    {
        $this->searchParam = $searchParam;
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


}

