<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestReportTeardownType
 *
 * A summary of information based on the results of executing a TestScript.
 * XSD Type: TestReport.Teardown
 */
class TestReportTeardownType extends BackboneElementType
{

    /**
     * The teardown action will only contain an operation.
     *
     * @var \TKusy\Hl7FhirR4\TestReportAction2Type[] $action
     */
    private $action = null;

    /**
     * Adds as action
     *
     * The teardown action will only contain an operation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestReportAction2Type $action
     */
    public function addToAction(\TKusy\Hl7FhirR4\TestReportAction2Type $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * The teardown action will only contain an operation.
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
     * The teardown action will only contain an operation.
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
     * The teardown action will only contain an operation.
     *
     * @return \TKusy\Hl7FhirR4\TestReportAction2Type[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * The teardown action will only contain an operation.
     *
     * @param \TKusy\Hl7FhirR4\TestReportAction2Type[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }


}

