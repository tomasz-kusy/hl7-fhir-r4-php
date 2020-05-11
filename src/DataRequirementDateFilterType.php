<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DataRequirementDateFilterType
 *
 * Describes a required data item for evaluation in terms of the type of data, and optional code or date-based filters of the data.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: DataRequirement.DateFilter
 */
class DataRequirementDateFilterType extends ElementType
{

    /**
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolveable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     *
     * @var string $path
     */
    private $path = null;

    /**
     * A date parameter that refers to a search parameter defined on the specified type of the DataRequirement, and which searches on elements of type date, dateTime, Period, Schedule, or Timing.
     *
     * @var string $searchParam
     */
    private $searchParam = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $valueDuration
     */
    private $valueDuration = null;

    /**
     * Gets as path
     *
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolveable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolveable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     *
     * @param string $path
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as searchParam
     *
     * A date parameter that refers to a search parameter defined on the specified type of the DataRequirement, and which searches on elements of type date, dateTime, Period, Schedule, or Timing.
     *
     * @return string
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
     * @param string $searchParam
     * @return self
     */
    public function setSearchParam($searchParam)
    {
        $this->searchParam = $searchParam;
        return $this;
    }

    /**
     * Gets as valueDateTime
     *
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
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
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
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
     * Gets as valuePeriod
     *
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
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
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
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
     * Gets as valueDuration
     *
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
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
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $valueDuration
     * @return self
     */
    public function setValueDuration(\TKusy\Hl7FhirR4\DurationType $valueDuration)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }


}

