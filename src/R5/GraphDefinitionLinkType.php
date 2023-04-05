<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GraphDefinitionLinkType
 *
 * A formal computable definition of a graph of resources - that is, a coherent set of resources that form a graph by following references. The Graph Definition resource defines a set and makes rules about the set.
 * XSD Type: GraphDefinition.Link
 */
class GraphDefinitionLinkType extends BackboneElementType
{

    /**
     * Information about why this link is of interest in this graph definition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * Minimum occurrences for this link.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $min
     */
    private $min = null;

    /**
     * Maximum occurrences for this link.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $max
     */
    private $max = null;

    /**
     * The source node for this link.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $sourceId
     */
    private $sourceId = null;

    /**
     * A FHIRPath expression that identifies one of FHIR References to other resources.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $path
     */
    private $path = null;

    /**
     * Which slice (if profiled).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $sliceName
     */
    private $sliceName = null;

    /**
     * The target node for this link.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $targetId
     */
    private $targetId = null;

    /**
     * A set of parameters to look up.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $params
     */
    private $params = null;

    /**
     * Compartment Consistency Rules.
     *
     * @var \TKusy\Hl7Fhir\R5\GraphDefinitionCompartmentType[] $compartment
     */
    private $compartment = null;

    /**
     * Gets as description
     *
     * Information about why this link is of interest in this graph definition.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Information about why this link is of interest in this graph definition.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as min
     *
     * Minimum occurrences for this link.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * Minimum occurrences for this link.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $min
     * @return self
     */
    public function setMin(?\TKusy\Hl7Fhir\R5\IntegerType $min = null)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * Maximum occurrences for this link.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * Maximum occurrences for this link.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $max
     * @return self
     */
    public function setMax(?\TKusy\Hl7Fhir\R5\StringType $max = null)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Gets as sourceId
     *
     * The source node for this link.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Sets a new sourceId
     *
     * The source node for this link.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $sourceId
     * @return self
     */
    public function setSourceId(\TKusy\Hl7Fhir\R5\IdType $sourceId)
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * Gets as path
     *
     * A FHIRPath expression that identifies one of FHIR References to other resources.
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
     * A FHIRPath expression that identifies one of FHIR References to other resources.
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
     * Gets as sliceName
     *
     * Which slice (if profiled).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSliceName()
    {
        return $this->sliceName;
    }

    /**
     * Sets a new sliceName
     *
     * Which slice (if profiled).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $sliceName
     * @return self
     */
    public function setSliceName(?\TKusy\Hl7Fhir\R5\StringType $sliceName = null)
    {
        $this->sliceName = $sliceName;
        return $this;
    }

    /**
     * Gets as targetId
     *
     * The target node for this link.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Sets a new targetId
     *
     * The target node for this link.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $targetId
     * @return self
     */
    public function setTargetId(\TKusy\Hl7Fhir\R5\IdType $targetId)
    {
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * Gets as params
     *
     * A set of parameters to look up.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Sets a new params
     *
     * A set of parameters to look up.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $params
     * @return self
     */
    public function setParams(?\TKusy\Hl7Fhir\R5\StringType $params = null)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Adds as compartment
     *
     * Compartment Consistency Rules.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\GraphDefinitionCompartmentType $compartment
     */
    public function addToCompartment(\TKusy\Hl7Fhir\R5\GraphDefinitionCompartmentType $compartment)
    {
        $this->compartment[] = $compartment;
        return $this;
    }

    /**
     * isset compartment
     *
     * Compartment Consistency Rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompartment($index)
    {
        return isset($this->compartment[$index]);
    }

    /**
     * unset compartment
     *
     * Compartment Consistency Rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompartment($index)
    {
        unset($this->compartment[$index]);
    }

    /**
     * Gets as compartment
     *
     * Compartment Consistency Rules.
     *
     * @return \TKusy\Hl7Fhir\R5\GraphDefinitionCompartmentType[]
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * Compartment Consistency Rules.
     *
     * @param \TKusy\Hl7Fhir\R5\GraphDefinitionCompartmentType[] $compartment
     * @return self
     */
    public function setCompartment(array $compartment = null)
    {
        $this->compartment = $compartment;
        return $this;
    }


}

