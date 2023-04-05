<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ObservationDefinitionComponentType
 *
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 * XSD Type: ObservationDefinition.Component
 */
class ObservationDefinitionComponentType extends BackboneElementType
{

    /**
     * Describes what will be observed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The data types allowed for the value element of the instance of this component observations.
     *
     * @var \TKusy\Hl7Fhir\R5\ObservationDataTypeType[] $permittedDataType
     */
    private $permittedDataType = null;

    /**
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $permittedUnit
     */
    private $permittedUnit = null;

    /**
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @var \TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType[] $qualifiedValue
     */
    private $qualifiedValue = null;

    /**
     * Gets as code
     *
     * Describes what will be observed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Describes what will be observed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as permittedDataType
     *
     * The data types allowed for the value element of the instance of this component observations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ObservationDataTypeType $permittedDataType
     */
    public function addToPermittedDataType(\TKusy\Hl7Fhir\R5\ObservationDataTypeType $permittedDataType)
    {
        $this->permittedDataType[] = $permittedDataType;
        return $this;
    }

    /**
     * isset permittedDataType
     *
     * The data types allowed for the value element of the instance of this component observations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPermittedDataType($index)
    {
        return isset($this->permittedDataType[$index]);
    }

    /**
     * unset permittedDataType
     *
     * The data types allowed for the value element of the instance of this component observations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPermittedDataType($index)
    {
        unset($this->permittedDataType[$index]);
    }

    /**
     * Gets as permittedDataType
     *
     * The data types allowed for the value element of the instance of this component observations.
     *
     * @return \TKusy\Hl7Fhir\R5\ObservationDataTypeType[]
     */
    public function getPermittedDataType()
    {
        return $this->permittedDataType;
    }

    /**
     * Sets a new permittedDataType
     *
     * The data types allowed for the value element of the instance of this component observations.
     *
     * @param \TKusy\Hl7Fhir\R5\ObservationDataTypeType[] $permittedDataType
     * @return self
     */
    public function setPermittedDataType(array $permittedDataType = null)
    {
        $this->permittedDataType = $permittedDataType;
        return $this;
    }

    /**
     * Adds as permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $permittedUnit
     */
    public function addToPermittedUnit(\TKusy\Hl7Fhir\R5\CodingType $permittedUnit)
    {
        $this->permittedUnit[] = $permittedUnit;
        return $this;
    }

    /**
     * isset permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPermittedUnit($index)
    {
        return isset($this->permittedUnit[$index]);
    }

    /**
     * unset permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPermittedUnit($index)
    {
        unset($this->permittedUnit[$index]);
    }

    /**
     * Gets as permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getPermittedUnit()
    {
        return $this->permittedUnit;
    }

    /**
     * Sets a new permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $permittedUnit
     * @return self
     */
    public function setPermittedUnit(array $permittedUnit = null)
    {
        $this->permittedUnit = $permittedUnit;
        return $this;
    }

    /**
     * Adds as qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType $qualifiedValue
     */
    public function addToQualifiedValue(\TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType $qualifiedValue)
    {
        $this->qualifiedValue[] = $qualifiedValue;
        return $this;
    }

    /**
     * isset qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualifiedValue($index)
    {
        return isset($this->qualifiedValue[$index]);
    }

    /**
     * unset qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualifiedValue($index)
    {
        unset($this->qualifiedValue[$index]);
    }

    /**
     * Gets as qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @return \TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType[]
     */
    public function getQualifiedValue()
    {
        return $this->qualifiedValue;
    }

    /**
     * Sets a new qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @param \TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType[] $qualifiedValue
     * @return self
     */
    public function setQualifiedValue(array $qualifiedValue = null)
    {
        $this->qualifiedValue = $qualifiedValue;
        return $this;
    }


}

