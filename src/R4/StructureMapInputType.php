<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\IdType $name
     */
    private $name = null;

    /**
     * Type for this instance of data.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $type
     */
    private $type = null;

    /**
     * Mode for this instance of data.
     *
     * @var \TKusy\Hl7Fhir\R4\StructureMapInputModeType $mode
     */
    private $mode = null;

    /**
     * Documentation for this instance of data.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $documentation
     */
    private $documentation = null;

    /**
     * Gets as name
     *
     * Name for this instance of data.
     *
     * @return \TKusy\Hl7Fhir\R4\IdType
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
     * @param \TKusy\Hl7Fhir\R4\IdType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\IdType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type for this instance of data.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\StringType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as mode
     *
     * Mode for this instance of data.
     *
     * @return \TKusy\Hl7Fhir\R4\StructureMapInputModeType
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
     * @param \TKusy\Hl7Fhir\R4\StructureMapInputModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R4\StructureMapInputModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Documentation for this instance of data.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7Fhir\R4\StringType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

