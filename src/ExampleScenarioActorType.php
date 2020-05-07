<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExampleScenarioActorType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Actor
 */
class ExampleScenarioActorType extends BackboneElementType
{

    /**
     * ID or acronym of actor.
     *
     * @var \TKusy\Hl7FhirR4\StringType $actorId
     */
    private $actorId = null;

    /**
     * The type of actor - person or system.
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioActorTypeType $type
     */
    private $type = null;

    /**
     * The name of the actor as shown in the page.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * The description of the actor.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * Gets as actorId
     *
     * ID or acronym of actor.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * Sets a new actorId
     *
     * ID or acronym of actor.
     *
     * @param \TKusy\Hl7FhirR4\StringType $actorId
     * @return self
     */
    public function setActorId(\TKusy\Hl7FhirR4\StringType $actorId)
    {
        $this->actorId = $actorId;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of actor - person or system.
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioActorTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of actor - person or system.
     *
     * @param \TKusy\Hl7FhirR4\ExampleScenarioActorTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\ExampleScenarioActorTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the actor as shown in the page.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the actor as shown in the page.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description of the actor.
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
     * The description of the actor.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }


}

