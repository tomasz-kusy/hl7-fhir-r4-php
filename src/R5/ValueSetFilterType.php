<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetFilterType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Filter
 */
class ValueSetFilterType extends BackboneElementType
{

    /**
     * A code that identifies a property or a filter defined in the code system.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $property
     */
    private $property = null;

    /**
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @var \TKusy\Hl7Fhir\R5\FilterOperatorType $op
     */
    private $op = null;

    /**
     * The match value may be either a code defined by the system, or a string value, which is a regex match on the literal string of the property value (if the filter represents a property defined in CodeSystem) or of the system filter value (if the filter represents a filter defined in CodeSystem) when the operation is 'regex', or one of the values (true and false), when the operation is 'exists'.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Gets as property
     *
     * A code that identifies a property or a filter defined in the code system.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A code that identifies a property or a filter defined in the code system.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $property
     * @return self
     */
    public function setProperty(\TKusy\Hl7Fhir\R5\CodeType $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Gets as op
     *
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @return \TKusy\Hl7Fhir\R5\FilterOperatorType
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Sets a new op
     *
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @param \TKusy\Hl7Fhir\R5\FilterOperatorType $op
     * @return self
     */
    public function setOp(\TKusy\Hl7Fhir\R5\FilterOperatorType $op)
    {
        $this->op = $op;
        return $this;
    }

    /**
     * Gets as value
     *
     * The match value may be either a code defined by the system, or a string value, which is a regex match on the literal string of the property value (if the filter represents a property defined in CodeSystem) or of the system filter value (if the filter represents a filter defined in CodeSystem) when the operation is 'regex', or one of the values (true and false), when the operation is 'exists'.
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
     * The match value may be either a code defined by the system, or a string value, which is a regex match on the literal string of the property value (if the filter represents a property defined in CodeSystem) or of the system filter value (if the filter represents a filter defined in CodeSystem) when the operation is 'regex', or one of the values (true and false), when the operation is 'exists'.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

