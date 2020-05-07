<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing GraphDefinitionLinkType
 *
 * A formal computable definition of a graph of resources - that is, a coherent set of resources that form a graph by following references. The Graph Definition resource defines a set and makes rules about the set.
 * XSD Type: GraphDefinition.Link
 */
class GraphDefinitionLinkType extends BackboneElementType
{

    /**
     * A FHIR expression that identifies one of FHIR References to other resources.
     *
     * @var \TKusy\Hl7FhirR4\StringType $path
     */
    private $path = null;

    /**
     * Which slice (if profiled).
     *
     * @var \TKusy\Hl7FhirR4\StringType $sliceName
     */
    private $sliceName = null;

    /**
     * Minimum occurrences for this link.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $min
     */
    private $min = null;

    /**
     * Maximum occurrences for this link.
     *
     * @var \TKusy\Hl7FhirR4\StringType $max
     */
    private $max = null;

    /**
     * Information about why this link is of interest in this graph definition.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Potential target for the link.
     *
     * @var \TKusy\Hl7FhirR4\GraphDefinitionTargetType[] $target
     */
    private $target = [
        
    ];

    /**
     * Gets as path
     *
     * A FHIR expression that identifies one of FHIR References to other resources.
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
     * A FHIR expression that identifies one of FHIR References to other resources.
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
     * Gets as sliceName
     *
     * Which slice (if profiled).
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $sliceName
     * @return self
     */
    public function setSliceName(\TKusy\Hl7FhirR4\StringType $sliceName)
    {
        $this->sliceName = $sliceName;
        return $this;
    }

    /**
     * Gets as min
     *
     * Minimum occurrences for this link.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
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
     * @param \TKusy\Hl7FhirR4\IntegerType $min
     * @return self
     */
    public function setMin(\TKusy\Hl7FhirR4\IntegerType $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * Maximum occurrences for this link.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $max
     * @return self
     */
    public function setMax(\TKusy\Hl7FhirR4\StringType $max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Gets as description
     *
     * Information about why this link is of interest in this graph definition.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as target
     *
     * Potential target for the link.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\GraphDefinitionTargetType $target
     */
    public function addToTarget(\TKusy\Hl7FhirR4\GraphDefinitionTargetType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * Potential target for the link.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTarget($index)
    {
        return isset($this->target[$index]);
    }

    /**
     * unset target
     *
     * Potential target for the link.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTarget($index)
    {
        unset($this->target[$index]);
    }

    /**
     * Gets as target
     *
     * Potential target for the link.
     *
     * @return \TKusy\Hl7FhirR4\GraphDefinitionTargetType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Potential target for the link.
     *
     * @param \TKusy\Hl7FhirR4\GraphDefinitionTargetType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }


}

