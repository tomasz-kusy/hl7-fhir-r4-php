<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExampleScenarioActorType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Actor
 */
class ExampleScenarioActorType extends BackboneElementType
{

    /**
     * A unique string within the scenario that is used to reference the actor.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $key
     */
    private $key = null;

    /**
     * The category of actor - person or system.
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioActorTypeType $type
     */
    private $type = null;

    /**
     * The human-readable name for the actor used when rendering the scenario.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * An explanation of who/what the actor is and its role in the scenario.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Gets as key
     *
     * A unique string within the scenario that is used to reference the actor.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * A unique string within the scenario that is used to reference the actor.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $key
     * @return self
     */
    public function setKey(\TKusy\Hl7Fhir\R5\StringType $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Gets as type
     *
     * The category of actor - person or system.
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioActorTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The category of actor - person or system.
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioActorTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\ExampleScenarioActorTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as title
     *
     * The human-readable name for the actor used when rendering the scenario.
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
     * The human-readable name for the actor used when rendering the scenario.
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
     * An explanation of who/what the actor is and its role in the scenario.
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
     * An explanation of who/what the actor is and its role in the scenario.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }


}

