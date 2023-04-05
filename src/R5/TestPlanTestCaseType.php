<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestPlanTestCaseType
 *
 * A plan for executing testing on an artifact or specifications.
 * XSD Type: TestPlan.TestCase
 */
class TestPlanTestCaseType extends BackboneElementType
{

    /**
     * Sequence of test case - an ordinal number that indicates the order for the present test case in the test plan.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $sequence
     */
    private $sequence = null;

    /**
     * The scope or artifact covered by the case, when the individual test case is associated with a testable artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $scope
     */
    private $scope = null;

    /**
     * The required criteria to execute the test case - e.g. preconditions, previous tests.
     *
     * @var \TKusy\Hl7Fhir\R5\TestPlanDependency1Type[] $dependency
     */
    private $dependency = null;

    /**
     * The actual test to be executed.
     *
     * @var \TKusy\Hl7Fhir\R5\TestPlanTestRunType[] $testRun
     */
    private $testRun = null;

    /**
     * The test data used in the test case.
     *
     * @var \TKusy\Hl7Fhir\R5\TestPlanTestDataType[] $testData
     */
    private $testData = null;

    /**
     * The test assertions - the expectations of test results from the execution of the test case.
     *
     * @var \TKusy\Hl7Fhir\R5\TestPlanAssertionType[] $assertion
     */
    private $assertion = null;

    /**
     * Gets as sequence
     *
     * Sequence of test case - an ordinal number that indicates the order for the present test case in the test plan.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * Sequence of test case - an ordinal number that indicates the order for the present test case in the test plan.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $sequence
     * @return self
     */
    public function setSequence(?\TKusy\Hl7Fhir\R5\IntegerType $sequence = null)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Adds as scope
     *
     * The scope or artifact covered by the case, when the individual test case is associated with a testable artifact.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $scope
     */
    public function addToScope(\TKusy\Hl7Fhir\R5\ReferenceType $scope)
    {
        $this->scope[] = $scope;
        return $this;
    }

    /**
     * isset scope
     *
     * The scope or artifact covered by the case, when the individual test case is associated with a testable artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScope($index)
    {
        return isset($this->scope[$index]);
    }

    /**
     * unset scope
     *
     * The scope or artifact covered by the case, when the individual test case is associated with a testable artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScope($index)
    {
        unset($this->scope[$index]);
    }

    /**
     * Gets as scope
     *
     * The scope or artifact covered by the case, when the individual test case is associated with a testable artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * The scope or artifact covered by the case, when the individual test case is associated with a testable artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $scope
     * @return self
     */
    public function setScope(array $scope = null)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Adds as dependency
     *
     * The required criteria to execute the test case - e.g. preconditions, previous tests.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TestPlanDependency1Type $dependency
     */
    public function addToDependency(\TKusy\Hl7Fhir\R5\TestPlanDependency1Type $dependency)
    {
        $this->dependency[] = $dependency;
        return $this;
    }

    /**
     * isset dependency
     *
     * The required criteria to execute the test case - e.g. preconditions, previous tests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDependency($index)
    {
        return isset($this->dependency[$index]);
    }

    /**
     * unset dependency
     *
     * The required criteria to execute the test case - e.g. preconditions, previous tests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDependency($index)
    {
        unset($this->dependency[$index]);
    }

    /**
     * Gets as dependency
     *
     * The required criteria to execute the test case - e.g. preconditions, previous tests.
     *
     * @return \TKusy\Hl7Fhir\R5\TestPlanDependency1Type[]
     */
    public function getDependency()
    {
        return $this->dependency;
    }

    /**
     * Sets a new dependency
     *
     * The required criteria to execute the test case - e.g. preconditions, previous tests.
     *
     * @param \TKusy\Hl7Fhir\R5\TestPlanDependency1Type[] $dependency
     * @return self
     */
    public function setDependency(array $dependency = null)
    {
        $this->dependency = $dependency;
        return $this;
    }

    /**
     * Adds as testRun
     *
     * The actual test to be executed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TestPlanTestRunType $testRun
     */
    public function addToTestRun(\TKusy\Hl7Fhir\R5\TestPlanTestRunType $testRun)
    {
        $this->testRun[] = $testRun;
        return $this;
    }

    /**
     * isset testRun
     *
     * The actual test to be executed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTestRun($index)
    {
        return isset($this->testRun[$index]);
    }

    /**
     * unset testRun
     *
     * The actual test to be executed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTestRun($index)
    {
        unset($this->testRun[$index]);
    }

    /**
     * Gets as testRun
     *
     * The actual test to be executed.
     *
     * @return \TKusy\Hl7Fhir\R5\TestPlanTestRunType[]
     */
    public function getTestRun()
    {
        return $this->testRun;
    }

    /**
     * Sets a new testRun
     *
     * The actual test to be executed.
     *
     * @param \TKusy\Hl7Fhir\R5\TestPlanTestRunType[] $testRun
     * @return self
     */
    public function setTestRun(array $testRun = null)
    {
        $this->testRun = $testRun;
        return $this;
    }

    /**
     * Adds as testData
     *
     * The test data used in the test case.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TestPlanTestDataType $testData
     */
    public function addToTestData(\TKusy\Hl7Fhir\R5\TestPlanTestDataType $testData)
    {
        $this->testData[] = $testData;
        return $this;
    }

    /**
     * isset testData
     *
     * The test data used in the test case.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTestData($index)
    {
        return isset($this->testData[$index]);
    }

    /**
     * unset testData
     *
     * The test data used in the test case.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTestData($index)
    {
        unset($this->testData[$index]);
    }

    /**
     * Gets as testData
     *
     * The test data used in the test case.
     *
     * @return \TKusy\Hl7Fhir\R5\TestPlanTestDataType[]
     */
    public function getTestData()
    {
        return $this->testData;
    }

    /**
     * Sets a new testData
     *
     * The test data used in the test case.
     *
     * @param \TKusy\Hl7Fhir\R5\TestPlanTestDataType[] $testData
     * @return self
     */
    public function setTestData(array $testData = null)
    {
        $this->testData = $testData;
        return $this;
    }

    /**
     * Adds as assertion
     *
     * The test assertions - the expectations of test results from the execution of the test case.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TestPlanAssertionType $assertion
     */
    public function addToAssertion(\TKusy\Hl7Fhir\R5\TestPlanAssertionType $assertion)
    {
        $this->assertion[] = $assertion;
        return $this;
    }

    /**
     * isset assertion
     *
     * The test assertions - the expectations of test results from the execution of the test case.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssertion($index)
    {
        return isset($this->assertion[$index]);
    }

    /**
     * unset assertion
     *
     * The test assertions - the expectations of test results from the execution of the test case.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssertion($index)
    {
        unset($this->assertion[$index]);
    }

    /**
     * Gets as assertion
     *
     * The test assertions - the expectations of test results from the execution of the test case.
     *
     * @return \TKusy\Hl7Fhir\R5\TestPlanAssertionType[]
     */
    public function getAssertion()
    {
        return $this->assertion;
    }

    /**
     * Sets a new assertion
     *
     * The test assertions - the expectations of test results from the execution of the test case.
     *
     * @param \TKusy\Hl7Fhir\R5\TestPlanAssertionType[] $assertion
     * @return self
     */
    public function setAssertion(array $assertion = null)
    {
        $this->assertion = $assertion;
        return $this;
    }


}

