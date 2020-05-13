<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing StructureMapStructureType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Structure
 */
class StructureMapStructureType extends BackboneElementType
{

    /**
     * The canonical reference to the structure.
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType $url
     */
    private $url = null;

    /**
     * How the referenced structure is used in this mapping.
     *
     * @var \TKusy\Hl7Fhir\R4\StructureMapModelModeType $mode
     */
    private $mode = null;

    /**
     * The name used for this type in the map.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $alias
     */
    private $alias = null;

    /**
     * Documentation that describes how the structure is used in the mapping.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $documentation
     */
    private $documentation = null;

    /**
     * Gets as url
     *
     * The canonical reference to the structure.
     *
     * @return \TKusy\Hl7Fhir\R4\CanonicalType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * The canonical reference to the structure.
     *
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7Fhir\R4\CanonicalType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as mode
     *
     * How the referenced structure is used in this mapping.
     *
     * @return \TKusy\Hl7Fhir\R4\StructureMapModelModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * How the referenced structure is used in this mapping.
     *
     * @param \TKusy\Hl7Fhir\R4\StructureMapModelModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R4\StructureMapModelModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as alias
     *
     * The name used for this type in the map.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * The name used for this type in the map.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $alias
     * @return self
     */
    public function setAlias(\TKusy\Hl7Fhir\R4\StringType $alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Documentation that describes how the structure is used in the mapping.
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
     * Documentation that describes how the structure is used in the mapping.
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

