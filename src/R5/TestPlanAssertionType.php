<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestPlanAssertionType
 *
 * A plan for executing testing on an artifact or specifications.
 * XSD Type: TestPlan.Assertion
 */
class TestPlanAssertionType extends BackboneElementType
{

    /**
     * The test assertion type - this can be used to group assertions as 'required' or 'optional', or can be used for other classification of the assertion.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The focus or object of the assertion i.e. a resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $object
     */
    private $object = null;

    /**
     * The test assertion - the expected outcome from the test case execution.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $result
     */
    private $result = null;

    /**
     * Adds as type
     *
     * The test assertion type - this can be used to group assertions as 'required' or 'optional', or can be used for other classification of the assertion.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The test assertion type - this can be used to group assertions as 'required' or 'optional', or can be used for other classification of the assertion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The test assertion type - this can be used to group assertions as 'required' or 'optional', or can be used for other classification of the assertion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The test assertion type - this can be used to group assertions as 'required' or 'optional', or can be used for other classification of the assertion.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The test assertion type - this can be used to group assertions as 'required' or 'optional', or can be used for other classification of the assertion.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as object
     *
     * The focus or object of the assertion i.e. a resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $object
     */
    public function addToObject(\TKusy\Hl7Fhir\R5\CodeableReferenceType $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * The focus or object of the assertion i.e. a resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * The focus or object of the assertion i.e. a resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * The focus or object of the assertion i.e. a resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * The focus or object of the assertion i.e. a resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $object
     * @return self
     */
    public function setObject(array $object = null)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * Adds as result
     *
     * The test assertion - the expected outcome from the test case execution.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $result
     */
    public function addToResult(\TKusy\Hl7Fhir\R5\CodeableReferenceType $result)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * isset result
     *
     * The test assertion - the expected outcome from the test case execution.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResult($index)
    {
        return isset($this->result[$index]);
    }

    /**
     * unset result
     *
     * The test assertion - the expected outcome from the test case execution.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResult($index)
    {
        unset($this->result[$index]);
    }

    /**
     * Gets as result
     *
     * The test assertion - the expected outcome from the test case execution.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * The test assertion - the expected outcome from the test case execution.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $result
     * @return self
     */
    public function setResult(array $result = null)
    {
        $this->result = $result;
        return $this;
    }


}

