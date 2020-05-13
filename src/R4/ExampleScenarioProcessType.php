<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ExampleScenarioProcessType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Process
 */
class ExampleScenarioProcessType extends BackboneElementType
{

    /**
     * The diagram title of the group of operations.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $title
     */
    private $title = null;

    /**
     * A longer description of the group of operations.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $description
     */
    private $description = null;

    /**
     * Description of initial status before the process starts.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $preConditions
     */
    private $preConditions = null;

    /**
     * Description of final status after the process ends.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $postConditions
     */
    private $postConditions = null;

    /**
     * Each step of the process.
     *
     * @var \TKusy\Hl7Fhir\R4\ExampleScenarioStepType[] $step
     */
    private $step = null;

    /**
     * Gets as title
     *
     * The diagram title of the group of operations.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The diagram title of the group of operations.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7Fhir\R4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as description
     *
     * A longer description of the group of operations.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A longer description of the group of operations.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as preConditions
     *
     * Description of initial status before the process starts.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getPreConditions()
    {
        return $this->preConditions;
    }

    /**
     * Sets a new preConditions
     *
     * Description of initial status before the process starts.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $preConditions
     * @return self
     */
    public function setPreConditions(\TKusy\Hl7Fhir\R4\MarkdownType $preConditions)
    {
        $this->preConditions = $preConditions;
        return $this;
    }

    /**
     * Gets as postConditions
     *
     * Description of final status after the process ends.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getPostConditions()
    {
        return $this->postConditions;
    }

    /**
     * Sets a new postConditions
     *
     * Description of final status after the process ends.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $postConditions
     * @return self
     */
    public function setPostConditions(\TKusy\Hl7Fhir\R4\MarkdownType $postConditions)
    {
        $this->postConditions = $postConditions;
        return $this;
    }

    /**
     * Adds as step
     *
     * Each step of the process.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ExampleScenarioStepType $step
     */
    public function addToStep(\TKusy\Hl7Fhir\R4\ExampleScenarioStepType $step)
    {
        $this->step[] = $step;
        return $this;
    }

    /**
     * isset step
     *
     * Each step of the process.
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
     * Each step of the process.
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
     * Each step of the process.
     *
     * @return \TKusy\Hl7Fhir\R4\ExampleScenarioStepType[]
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Sets a new step
     *
     * Each step of the process.
     *
     * @param \TKusy\Hl7Fhir\R4\ExampleScenarioStepType[] $step
     * @return self
     */
    public function setStep(array $step)
    {
        $this->step = $step;
        return $this;
    }


}

