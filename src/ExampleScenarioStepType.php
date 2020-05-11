<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExampleScenarioStepType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Step
 */
class ExampleScenarioStepType extends BackboneElementType
{

    /**
     * Nested process.
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioProcessType[] $process
     */
    private $process = null;

    /**
     * If there is a pause in the flow.
     *
     * @var bool $pause
     */
    private $pause = null;

    /**
     * Each interaction or action.
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioOperationType $operation
     */
    private $operation = null;

    /**
     * Indicates an alternative step that can be taken instead of the operations on the base step in exceptional/atypical circumstances.
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioAlternativeType[] $alternative
     */
    private $alternative = null;

    /**
     * Adds as process
     *
     * Nested process.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExampleScenarioProcessType $process
     */
    public function addToProcess(\TKusy\Hl7FhirR4\ExampleScenarioProcessType $process)
    {
        $this->process[] = $process;
        return $this;
    }

    /**
     * isset process
     *
     * Nested process.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcess($index)
    {
        return isset($this->process[$index]);
    }

    /**
     * unset process
     *
     * Nested process.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcess($index)
    {
        unset($this->process[$index]);
    }

    /**
     * Gets as process
     *
     * Nested process.
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioProcessType[]
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * Sets a new process
     *
     * Nested process.
     *
     * @param \TKusy\Hl7FhirR4\ExampleScenarioProcessType[] $process
     * @return self
     */
    public function setProcess(array $process)
    {
        $this->process = $process;
        return $this;
    }

    /**
     * Gets as pause
     *
     * If there is a pause in the flow.
     *
     * @return bool
     */
    public function getPause()
    {
        return $this->pause;
    }

    /**
     * Sets a new pause
     *
     * If there is a pause in the flow.
     *
     * @param bool $pause
     * @return self
     */
    public function setPause($pause)
    {
        $this->pause = $pause;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Each interaction or action.
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioOperationType
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Each interaction or action.
     *
     * @param \TKusy\Hl7FhirR4\ExampleScenarioOperationType $operation
     * @return self
     */
    public function setOperation(\TKusy\Hl7FhirR4\ExampleScenarioOperationType $operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Adds as alternative
     *
     * Indicates an alternative step that can be taken instead of the operations on the base step in exceptional/atypical circumstances.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExampleScenarioAlternativeType $alternative
     */
    public function addToAlternative(\TKusy\Hl7FhirR4\ExampleScenarioAlternativeType $alternative)
    {
        $this->alternative[] = $alternative;
        return $this;
    }

    /**
     * isset alternative
     *
     * Indicates an alternative step that can be taken instead of the operations on the base step in exceptional/atypical circumstances.
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
     * Indicates an alternative step that can be taken instead of the operations on the base step in exceptional/atypical circumstances.
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
     * Indicates an alternative step that can be taken instead of the operations on the base step in exceptional/atypical circumstances.
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioAlternativeType[]
     */
    public function getAlternative()
    {
        return $this->alternative;
    }

    /**
     * Sets a new alternative
     *
     * Indicates an alternative step that can be taken instead of the operations on the base step in exceptional/atypical circumstances.
     *
     * @param \TKusy\Hl7FhirR4\ExampleScenarioAlternativeType[] $alternative
     * @return self
     */
    public function setAlternative(array $alternative)
    {
        $this->alternative = $alternative;
        return $this;
    }


}

