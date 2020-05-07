<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestReportType
 *
 * A summary of information based on the results of executing a TestScript.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: TestReport
 */
class TestReportType extends DomainResourceType
{

    /**
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * A free text natural language name identifying the executed TestScript.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * The current state of this test report.
     *
     * @var \TKusy\Hl7FhirR4\TestReportStatusType $status
     */
    private $status = null;

    /**
     * Ideally this is an absolute URL that is used to identify the version-specific TestScript that was executed, matching the `TestScript.url`.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $testScript
     */
    private $testScript = null;

    /**
     * The overall result from the execution of the TestScript.
     *
     * @var \TKusy\Hl7FhirR4\TestReportResultType $result
     */
    private $result = null;

    /**
     * The final score (percentage of tests passed) resulting from the execution of the TestScript.
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $score
     */
    private $score = null;

    /**
     * Name of the tester producing this report (Organization or individual).
     *
     * @var \TKusy\Hl7FhirR4\StringType $tester
     */
    private $tester = null;

    /**
     * When the TestScript was executed and this TestReport was generated.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $issued
     */
    private $issued = null;

    /**
     * A participant in the test execution, either the execution engine, a client, or a server.
     *
     * @var \TKusy\Hl7FhirR4\TestReportParticipantType[] $participant
     */
    private $participant = [
        
    ];

    /**
     * The results of the series of required setup operations before the tests were executed.
     *
     * @var \TKusy\Hl7FhirR4\TestReportSetupType $setup
     */
    private $setup = null;

    /**
     * A test executed from the test script.
     *
     * @var \TKusy\Hl7FhirR4\TestReportTestType[] $test
     */
    private $test = [
        
    ];

    /**
     * The results of the series of operations required to clean up after all the tests were executed (successfully or otherwise).
     *
     * @var \TKusy\Hl7FhirR4\TestReportTeardownType $teardown
     */
    private $teardown = null;

    /**
     * Gets as identifier
     *
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier for the TestScript assigned for external purposes outside the context of FHIR.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * A free text natural language name identifying the executed TestScript.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A free text natural language name identifying the executed TestScript.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of this test report.
     *
     * @return \TKusy\Hl7FhirR4\TestReportStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of this test report.
     *
     * @param \TKusy\Hl7FhirR4\TestReportStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\TestReportStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as testScript
     *
     * Ideally this is an absolute URL that is used to identify the version-specific TestScript that was executed, matching the `TestScript.url`.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getTestScript()
    {
        return $this->testScript;
    }

    /**
     * Sets a new testScript
     *
     * Ideally this is an absolute URL that is used to identify the version-specific TestScript that was executed, matching the `TestScript.url`.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $testScript
     * @return self
     */
    public function setTestScript(\TKusy\Hl7FhirR4\ReferenceType $testScript)
    {
        $this->testScript = $testScript;
        return $this;
    }

    /**
     * Gets as result
     *
     * The overall result from the execution of the TestScript.
     *
     * @return \TKusy\Hl7FhirR4\TestReportResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * The overall result from the execution of the TestScript.
     *
     * @param \TKusy\Hl7FhirR4\TestReportResultType $result
     * @return self
     */
    public function setResult(\TKusy\Hl7FhirR4\TestReportResultType $result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Gets as score
     *
     * The final score (percentage of tests passed) resulting from the execution of the TestScript.
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * The final score (percentage of tests passed) resulting from the execution of the TestScript.
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $score
     * @return self
     */
    public function setScore(\TKusy\Hl7FhirR4\DecimalType $score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as tester
     *
     * Name of the tester producing this report (Organization or individual).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getTester()
    {
        return $this->tester;
    }

    /**
     * Sets a new tester
     *
     * Name of the tester producing this report (Organization or individual).
     *
     * @param \TKusy\Hl7FhirR4\StringType $tester
     * @return self
     */
    public function setTester(\TKusy\Hl7FhirR4\StringType $tester)
    {
        $this->tester = $tester;
        return $this;
    }

    /**
     * Gets as issued
     *
     * When the TestScript was executed and this TestReport was generated.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Sets a new issued
     *
     * When the TestScript was executed and this TestReport was generated.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $issued
     * @return self
     */
    public function setIssued(\TKusy\Hl7FhirR4\DateTimeType $issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Adds as participant
     *
     * A participant in the test execution, either the execution engine, a client, or a server.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestReportParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7FhirR4\TestReportParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * A participant in the test execution, either the execution engine, a client, or a server.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParticipant($index)
    {
        return isset($this->participant[$index]);
    }

    /**
     * unset participant
     *
     * A participant in the test execution, either the execution engine, a client, or a server.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParticipant($index)
    {
        unset($this->participant[$index]);
    }

    /**
     * Gets as participant
     *
     * A participant in the test execution, either the execution engine, a client, or a server.
     *
     * @return \TKusy\Hl7FhirR4\TestReportParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * A participant in the test execution, either the execution engine, a client, or a server.
     *
     * @param \TKusy\Hl7FhirR4\TestReportParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Gets as setup
     *
     * The results of the series of required setup operations before the tests were executed.
     *
     * @return \TKusy\Hl7FhirR4\TestReportSetupType
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * Sets a new setup
     *
     * The results of the series of required setup operations before the tests were executed.
     *
     * @param \TKusy\Hl7FhirR4\TestReportSetupType $setup
     * @return self
     */
    public function setSetup(\TKusy\Hl7FhirR4\TestReportSetupType $setup)
    {
        $this->setup = $setup;
        return $this;
    }

    /**
     * Adds as test
     *
     * A test executed from the test script.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestReportTestType $test
     */
    public function addToTest(\TKusy\Hl7FhirR4\TestReportTestType $test)
    {
        $this->test[] = $test;
        return $this;
    }

    /**
     * isset test
     *
     * A test executed from the test script.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTest($index)
    {
        return isset($this->test[$index]);
    }

    /**
     * unset test
     *
     * A test executed from the test script.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTest($index)
    {
        unset($this->test[$index]);
    }

    /**
     * Gets as test
     *
     * A test executed from the test script.
     *
     * @return \TKusy\Hl7FhirR4\TestReportTestType[]
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Sets a new test
     *
     * A test executed from the test script.
     *
     * @param \TKusy\Hl7FhirR4\TestReportTestType[] $test
     * @return self
     */
    public function setTest(array $test)
    {
        $this->test = $test;
        return $this;
    }

    /**
     * Gets as teardown
     *
     * The results of the series of operations required to clean up after all the tests were executed (successfully or otherwise).
     *
     * @return \TKusy\Hl7FhirR4\TestReportTeardownType
     */
    public function getTeardown()
    {
        return $this->teardown;
    }

    /**
     * Sets a new teardown
     *
     * The results of the series of operations required to clean up after all the tests were executed (successfully or otherwise).
     *
     * @param \TKusy\Hl7FhirR4\TestReportTeardownType $teardown
     * @return self
     */
    public function setTeardown(\TKusy\Hl7FhirR4\TestReportTeardownType $teardown)
    {
        $this->teardown = $teardown;
        return $this;
    }


}

