<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureMapInputType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Input
 */
class StructureMapInputType extends BackboneElementType
{

    /**
     * Name for this instance of data.
     *
     * @var \TKusy\Hl7FhirR4\IdType $name
     */
    private $name = null;

    /**
     * Type for this instance of data.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Mode for this instance of data.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapInputModeType $mode
     */
    private $mode = null;

    /**
     * Documentation for this instance of data.
     *
     * @var string $documentation
     */
    private $documentation = null;

    /**
     * Gets as name
     *
     * Name for this instance of data.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name for this instance of data.
     *
     * @param \TKusy\Hl7FhirR4\IdType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\IdType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type for this instance of data.
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
     * Type for this instance of data.
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
     * Gets as mode
     *
     * Mode for this instance of data.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapInputModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Mode for this instance of data.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapInputModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7FhirR4\StructureMapInputModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Documentation for this instance of data.
     *
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Documentation for this instance of data.
     *
     * @param string $documentation
     * @return self
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

