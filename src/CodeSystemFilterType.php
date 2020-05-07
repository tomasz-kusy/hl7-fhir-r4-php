<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CodeSystemFilterType
 *
 * The CodeSystem resource is used to declare the existence of and describe a code system or code system supplement and its key properties, and optionally define a part or all of its content.
 * XSD Type: CodeSystem.Filter
 */
class CodeSystemFilterType extends BackboneElementType
{

    /**
     * The code that identifies this filter when it is used as a filter in [[[ValueSet]]].compose.include.filter.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * A description of how or why the filter is used.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * A list of operators that can be used with the filter.
     *
     * @var \TKusy\Hl7FhirR4\FilterOperatorType[] $operator
     */
    private $operator = [
        
    ];

    /**
     * A description of what the value for the filter should be.
     *
     * @var \TKusy\Hl7FhirR4\StringType $value
     */
    private $value = null;

    /**
     * Gets as code
     *
     * The code that identifies this filter when it is used as a filter in [[[ValueSet]]].compose.include.filter.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The code that identifies this filter when it is used as a filter in [[[ValueSet]]].compose.include.filter.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of how or why the filter is used.
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
     * A description of how or why the filter is used.
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
     * Adds as operator
     *
     * A list of operators that can be used with the filter.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\FilterOperatorType $operator
     */
    public function addToOperator(\TKusy\Hl7FhirR4\FilterOperatorType $operator)
    {
        $this->operator[] = $operator;
        return $this;
    }

    /**
     * isset operator
     *
     * A list of operators that can be used with the filter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperator($index)
    {
        return isset($this->operator[$index]);
    }

    /**
     * unset operator
     *
     * A list of operators that can be used with the filter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperator($index)
    {
        unset($this->operator[$index]);
    }

    /**
     * Gets as operator
     *
     * A list of operators that can be used with the filter.
     *
     * @return \TKusy\Hl7FhirR4\FilterOperatorType[]
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * A list of operators that can be used with the filter.
     *
     * @param \TKusy\Hl7FhirR4\FilterOperatorType[] $operator
     * @return self
     */
    public function setOperator(array $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as value
     *
     * A description of what the value for the filter should be.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A description of what the value for the filter should be.
     *
     * @param \TKusy\Hl7FhirR4\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7FhirR4\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

