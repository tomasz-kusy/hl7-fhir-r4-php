<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptSetupType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Setup
 */
class TestScriptSetupType extends BackboneElementType
{

    /**
     * Action would contain either an operation or an assertion.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptActionType[] $action
     */
    private $action = null;

    /**
     * Adds as action
     *
     * Action would contain either an operation or an assertion.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptActionType $action
     */
    public function addToAction(\TKusy\Hl7FhirR4\TestScriptActionType $action)
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
     * @return \TKusy\Hl7FhirR4\TestScriptActionType[]
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
     * @param \TKusy\Hl7FhirR4\TestScriptActionType[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }


}

