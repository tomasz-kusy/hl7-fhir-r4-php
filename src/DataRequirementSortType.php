<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DataRequirementSortType
 *
 * Describes a required data item for evaluation in terms of the type of data, and optional code or date-based filters of the data.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: DataRequirement.Sort
 */
class DataRequirementSortType extends ElementType
{

    /**
     * The attribute of the sort. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant.
     *
     * @var \TKusy\Hl7FhirR4\StringType $path
     */
    private $path = null;

    /**
     * The direction of the sort, ascending or descending.
     *
     * @var \TKusy\Hl7FhirR4\SortDirectionType $direction
     */
    private $direction = null;

    /**
     * Gets as path
     *
     * The attribute of the sort. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * The attribute of the sort. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant.
     *
     * @param \TKusy\Hl7FhirR4\StringType $path
     * @return self
     */
    public function setPath(\TKusy\Hl7FhirR4\StringType $path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as direction
     *
     * The direction of the sort, ascending or descending.
     *
     * @return \TKusy\Hl7FhirR4\SortDirectionType
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * The direction of the sort, ascending or descending.
     *
     * @param \TKusy\Hl7FhirR4\SortDirectionType $direction
     * @return self
     */
    public function setDirection(\TKusy\Hl7FhirR4\SortDirectionType $direction)
    {
        $this->direction = $direction;
        return $this;
    }


}

