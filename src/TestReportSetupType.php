<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestReportSetupType
 *
 * A summary of information based on the results of executing a TestScript.
 * XSD Type: TestReport.Setup
 */
class TestReportSetupType extends BackboneElementType
{

    /**
     * Action would contain either an operation or an assertion.
     *
     * @var \TKusy\Hl7FhirR4\TestReportActionType[] $action
     */
    private $action = null;

    /**
     * Adds as action
     *
     * Action would contain either an operation or an assertion.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestReportActionType $action
     */
    public function addToAction(\TKusy\Hl7FhirR4\TestReportActionType $action)
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
     * @return \TKusy\Hl7FhirR4\TestReportActionType[]
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
     * @param \TKusy\Hl7FhirR4\TestReportActionType[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }


}

