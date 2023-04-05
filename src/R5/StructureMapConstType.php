<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing StructureMapConstType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Const
 */
class StructureMapConstType extends BackboneElementType
{

    /**
     * Other maps used by this map (canonical URLs).
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $name
     */
    private $name = null;

    /**
     * A FHIRPath expression that is the value of this variable.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Gets as name
     *
     * Other maps used by this map (canonical URLs).
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Other maps used by this map (canonical URLs).
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\IdType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as value
     *
     * A FHIRPath expression that is the value of this variable.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A FHIRPath expression that is the value of this variable.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(?\TKusy\Hl7Fhir\R5\StringType $value = null)
    {
        $this->value = $value;
        return $this;
    }


}

