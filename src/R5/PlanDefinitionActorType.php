<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PlanDefinitionActorType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical and non-clinical artifacts such as clinical decision support rules, order sets, protocols, and drug quality specifications.
 * XSD Type: PlanDefinition.Actor
 */
class PlanDefinitionActorType extends BackboneElementType
{

    /**
     * A descriptive label for the actor.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A description of how the actor fits into the overall actions of the plan definition.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The characteristics of the candidates that could serve as the actor.
     *
     * @var \TKusy\Hl7Fhir\R5\PlanDefinitionOptionType[] $option
     */
    private $option = null;

    /**
     * Gets as title
     *
     * A descriptive label for the actor.
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
     * A descriptive label for the actor.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of how the actor fits into the overall actions of the plan definition.
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
     * A description of how the actor fits into the overall actions of the plan definition.
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
     * Adds as option
     *
     * The characteristics of the candidates that could serve as the actor.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionOptionType $option
     */
    public function addToOption(\TKusy\Hl7Fhir\R5\PlanDefinitionOptionType $option)
    {
        $this->option[] = $option;
        return $this;
    }

    /**
     * isset option
     *
     * The characteristics of the candidates that could serve as the actor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOption($index)
    {
        return isset($this->option[$index]);
    }

    /**
     * unset option
     *
     * The characteristics of the candidates that could serve as the actor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOption($index)
    {
        unset($this->option[$index]);
    }

    /**
     * Gets as option
     *
     * The characteristics of the candidates that could serve as the actor.
     *
     * @return \TKusy\Hl7Fhir\R5\PlanDefinitionOptionType[]
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Sets a new option
     *
     * The characteristics of the candidates that could serve as the actor.
     *
     * @param \TKusy\Hl7Fhir\R5\PlanDefinitionOptionType[] $option
     * @return self
     */
    public function setOption(array $option)
    {
        $this->option = $option;
        return $this;
    }


}

