<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExampleScenarioProcessType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Process
 */
class ExampleScenarioProcessType extends BackboneElementType
{

    /**
     * A short descriptive label the process to be used in tables or diagrams.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * An explanation of what the process represents and what it does.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Description of the initial state of the actors, environment and data before the process starts.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $preConditions
     */
    private $preConditions = null;

    /**
     * Description of the final state of the actors, environment and data after the process has been successfully completed.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $postConditions
     */
    private $postConditions = null;

    /**
     * A significant action that occurs as part of the process.
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioStepType[] $step
     */
    private $step = null;

    /**
     * Gets as title
     *
     * A short descriptive label the process to be used in tables or diagrams.
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
     * A short descriptive label the process to be used in tables or diagrams.
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
     * An explanation of what the process represents and what it does.
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
     * An explanation of what the process represents and what it does.
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
     * Gets as preConditions
     *
     * Description of the initial state of the actors, environment and data before the process starts.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getPreConditions()
    {
        return $this->preConditions;
    }

    /**
     * Sets a new preConditions
     *
     * Description of the initial state of the actors, environment and data before the process starts.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $preConditions
     * @return self
     */
    public function setPreConditions(?\TKusy\Hl7Fhir\R5\MarkdownType $preConditions = null)
    {
        $this->preConditions = $preConditions;
        return $this;
    }

    /**
     * Gets as postConditions
     *
     * Description of the final state of the actors, environment and data after the process has been successfully completed.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getPostConditions()
    {
        return $this->postConditions;
    }

    /**
     * Sets a new postConditions
     *
     * Description of the final state of the actors, environment and data after the process has been successfully completed.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $postConditions
     * @return self
     */
    public function setPostConditions(?\TKusy\Hl7Fhir\R5\MarkdownType $postConditions = null)
    {
        $this->postConditions = $postConditions;
        return $this;
    }

    /**
     * Adds as step
     *
     * A significant action that occurs as part of the process.
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
     * A significant action that occurs as part of the process.
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
     * A significant action that occurs as part of the process.
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
     * A significant action that occurs as part of the process.
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
     * A significant action that occurs as part of the process.
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

