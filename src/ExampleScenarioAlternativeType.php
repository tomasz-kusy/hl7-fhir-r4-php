<?php

namespace TKusy\Hl7FhirR4;

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
     * @var string $title
     */
    private $title = null;

    /**
     * A human-readable description of the alternative explaining when the alternative should occur rather than the base step.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * What happens in each alternative option.
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioStepType[] $step
     */
    private $step = null;

    /**
     * Gets as title
     *
     * The label to display for the alternative that gives a sense of the circumstance in which the alternative should be invoked.
     *
     * @return string
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
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as description
     *
     * A human-readable description of the alternative explaining when the alternative should occur rather than the base step.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
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
     * @param \TKusy\Hl7FhirR4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as step
     *
     * What happens in each alternative option.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExampleScenarioStepType $step
     */
    public function addToStep(\TKusy\Hl7FhirR4\ExampleScenarioStepType $step)
    {
        $this->step[] = $step;
        return $this;
    }

    /**
     * isset step
     *
     * What happens in each alternative option.
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
     * What happens in each alternative option.
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
     * What happens in each alternative option.
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioStepType[]
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Sets a new step
     *
     * What happens in each alternative option.
     *
     * @param \TKusy\Hl7FhirR4\ExampleScenarioStepType[] $step
     * @return self
     */
    public function setStep(array $step)
    {
        $this->step = $step;
        return $this;
    }


}

