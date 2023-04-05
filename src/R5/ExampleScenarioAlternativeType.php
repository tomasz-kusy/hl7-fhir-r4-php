<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExampleScenarioAlternativeType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Alternative
 */
class ExampleScenarioAlternativeType extends BackboneElementType
{

    /**
     * The label to display for the alternative that gives a sense of the circumstance in which the alternative should be invoked.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A human-readable description of the alternative explaining when the alternative should occur rather than the base step.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Indicates the operation, sub-process or scenario that happens if the alternative option is selected.
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioStepType[] $step
     */
    private $step = null;

    /**
     * Gets as title
     *
     * The label to display for the alternative that gives a sense of the circumstance in which the alternative should be invoked.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The label to display for the alternative that gives a sense of the circumstance in which the alternative should be invoked.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7Fhir\R5\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as description
     *
     * A human-readable description of the alternative explaining when the alternative should occur rather than the base step.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A human-readable description of the alternative explaining when the alternative should occur rather than the base step.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as step
     *
     * Indicates the operation, sub-process or scenario that happens if the alternative option is selected.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioStepType $step
     */
    public function addToStep(\TKusy\Hl7Fhir\R5\ExampleScenarioStepType $step)
    {
        $this->step[] = $step;
        return $this;
    }

    /**
     * isset step
     *
     * Indicates the operation, sub-process or scenario that happens if the alternative option is selected.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStep($index)
    {
        return isset($this->step[$index]);
    }

    /**
     * unset step
     *
     * Indicates the operation, sub-process or scenario that happens if the alternative option is selected.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStep($index)
    {
        unset($this->step[$index]);
    }

    /**
     * Gets as step
     *
     * Indicates the operation, sub-process or scenario that happens if the alternative option is selected.
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioStepType[]
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Sets a new step
     *
     * Indicates the operation, sub-process or scenario that happens if the alternative option is selected.
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioStepType[] $step
     * @return self
     */
    public function setStep(array $step = null)
    {
        $this->step = $step;
        return $this;
    }


}

