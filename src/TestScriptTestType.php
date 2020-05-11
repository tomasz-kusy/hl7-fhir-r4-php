<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptTestType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Test
 */
class TestScriptTestType extends BackboneElementType
{

    /**
     * The name of this test used for tracking/logging purposes by test engines.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * A short description of the test used by test engines for tracking and reporting purposes.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Action would contain either an operation or an assertion.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptAction1Type[] $action
     */
    private $action = null;

    /**
     * Gets as name
     *
     * The name of this test used for tracking/logging purposes by test engines.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of this test used for tracking/logging purposes by test engines.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * A short description of the test used by test engines for tracking and reporting purposes.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A short description of the test used by test engines for tracking and reporting purposes.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as action
     *
     * Action would contain either an operation or an assertion.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptAction1Type $action
     */
    public function addToAction(\TKusy\Hl7FhirR4\TestScriptAction1Type $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * Action would contain either an operation or an assertion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * Action would contain either an operation or an assertion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * Action would contain either an operation or an assertion.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptAction1Type[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Action would contain either an operation or an assertion.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptAction1Type[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }


}

