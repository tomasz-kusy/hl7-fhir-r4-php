<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExampleScenarioStepType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Step
 */
class ExampleScenarioStepType extends BackboneElementType
{

    /**
     * The sequential number of the step, e.g. 1.2.5.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $number
     */
    private $number = null;

    /**
     * Indicates that the step is a complex sub-process with its own steps.
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioProcessType $process
     */
    private $process = null;

    /**
     * Indicates that the step is defined by a seaparate scenario instance.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $workflow
     */
    private $workflow = null;

    /**
     * The step represents a single operation invoked on receiver by sender.
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioOperationType $operation
     */
    private $operation = null;

    /**
     * Indicates an alternative step that can be taken instead of the sub-process, scenario or operation. E.g. to represent non-happy-path/exceptional/atypical circumstances.
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioAlternativeType[] $alternative
     */
    private $alternative = null;

    /**
     * If true, indicates that, following this step, there is a pause in the flow and the subsequent step will occur at some later time (triggered by some event).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $pause
     */
    private $pause = null;

    /**
     * Gets as number
     *
     * The sequential number of the step, e.g. 1.2.5.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The sequential number of the step, e.g. 1.2.5.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $number
     * @return self
     */
    public function setNumber(?\TKusy\Hl7Fhir\R5\StringType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as process
     *
     * Indicates that the step is a complex sub-process with its own steps.
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioProcessType
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * Sets a new process
     *
     * Indicates that the step is a complex sub-process with its own steps.
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioProcessType $process
     * @return self
     */
    public function setProcess(?\TKusy\Hl7Fhir\R5\ExampleScenarioProcessType $process = null)
    {
        $this->process = $process;
        return $this;
    }

    /**
     * Gets as workflow
     *
     * Indicates that the step is defined by a seaparate scenario instance.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }

    /**
     * Sets a new workflow
     *
     * Indicates that the step is defined by a seaparate scenario instance.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $workflow
     * @return self
     */
    public function setWorkflow(?\TKusy\Hl7Fhir\R5\CanonicalType $workflow = null)
    {
        $this->workflow = $workflow;
        return $this;
    }

    /**
     * Gets as operation
     *
     * The step represents a single operation invoked on receiver by sender.
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioOperationType
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * The step represents a single operation invoked on receiver by sender.
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioOperationType $operation
     * @return self
     */
    public function setOperation(?\TKusy\Hl7Fhir\R5\ExampleScenarioOperationType $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Adds as alternative
     *
     * Indicates an alternative step that can be taken instead of the sub-process, scenario or operation. E.g. to represent non-happy-path/exceptional/atypical circumstances.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioAlternativeType $alternative
     */
    public function addToAlternative(\TKusy\Hl7Fhir\R5\ExampleScenarioAlternativeType $alternative)
    {
        $this->alternative[] = $alternative;
        return $this;
    }

    /**
     * isset alternative
     *
     * Indicates an alternative step that can be taken instead of the sub-process, scenario or operation. E.g. to represent non-happy-path/exceptional/atypical circumstances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternative($index)
    {
        return isset($this->alternative[$index]);
    }

    /**
     * unset alternative
     *
     * Indicates an alternative step that can be taken instead of the sub-process, scenario or operation. E.g. to represent non-happy-path/exceptional/atypical circumstances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternative($index)
    {
        unset($this->alternative[$index]);
    }

    /**
     * Gets as alternative
     *
     * Indicates an alternative step that can be taken instead of the sub-process, scenario or operation. E.g. to represent non-happy-path/exceptional/atypical circumstances.
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioAlternativeType[]
     */
    public function getAlternative()
    {
        return $this->alternative;
    }

    /**
     * Sets a new alternative
     *
     * Indicates an alternative step that can be taken instead of the sub-process, scenario or operation. E.g. to represent non-happy-path/exceptional/atypical circumstances.
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioAlternativeType[] $alternative
     * @return self
     */
    public function setAlternative(array $alternative = null)
    {
        $this->alternative = $alternative;
        return $this;
    }

    /**
     * Gets as pause
     *
     * If true, indicates that, following this step, there is a pause in the flow and the subsequent step will occur at some later time (triggered by some event).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getPause()
    {
        return $this->pause;
    }

    /**
     * Sets a new pause
     *
     * If true, indicates that, following this step, there is a pause in the flow and the subsequent step will occur at some later time (triggered by some event).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $pause
     * @return self
     */
    public function setPause(?\TKusy\Hl7Fhir\R5\BooleanType $pause = null)
    {
        $this->pause = $pause;
        return $this;
    }


}

