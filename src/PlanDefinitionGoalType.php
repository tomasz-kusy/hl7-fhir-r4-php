<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PlanDefinitionGoalType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 * XSD Type: PlanDefinition.Goal
 */
class PlanDefinitionGoalType extends BackboneElementType
{

    /**
     * Indicates a category the goal falls within.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $description
     */
    private $description = null;

    /**
     * Identifies the expected level of importance associated with reaching/sustaining the defined goal.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * The event after which the goal should begin being pursued.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $start
     */
    private $start = null;

    /**
     * Identifies problems, conditions, issues, or concerns the goal is intended to address.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $addresses
     */
    private $addresses = null;

    /**
     * Didactic or other informational resources associated with the goal that provide further supporting information about the goal. Information resources can include inline text commentary and links to web resources.
     *
     * @var \TKusy\Hl7FhirR4\RelatedArtifactType[] $documentation
     */
    private $documentation = null;

    /**
     * Indicates what should be done and within what timeframe.
     *
     * @var \TKusy\Hl7FhirR4\PlanDefinitionTargetType[] $target
     */
    private $target = null;

    /**
     * Gets as category
     *
     * Indicates a category the goal falls within.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Indicates a category the goal falls within.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as description
     *
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Human-readable and/or coded description of a specific desired objective of care, such as "control blood pressure" or "negotiate an obstacle course" or "dance with child at wedding".
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\CodeableConceptType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Identifies the expected level of importance associated with reaching/sustaining the defined goal.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Identifies the expected level of importance associated with reaching/sustaining the defined goal.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\CodeableConceptType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as start
     *
     * The event after which the goal should begin being pursued.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The event after which the goal should begin being pursued.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $start
     * @return self
     */
    public function setStart(\TKusy\Hl7FhirR4\CodeableConceptType $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Adds as addresses
     *
     * Identifies problems, conditions, issues, or concerns the goal is intended to address.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $addresses
     */
    public function addToAddresses(\TKusy\Hl7FhirR4\CodeableConceptType $addresses)
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * isset addresses
     *
     * Identifies problems, conditions, issues, or concerns the goal is intended to address.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * Identifies problems, conditions, issues, or concerns the goal is intended to address.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * Identifies problems, conditions, issues, or concerns the goal is intended to address.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * Identifies problems, conditions, issues, or concerns the goal is intended to address.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Adds as documentation
     *
     * Didactic or other informational resources associated with the goal that provide further supporting information about the goal. Information resources can include inline text commentary and links to web resources.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RelatedArtifactType $documentation
     */
    public function addToDocumentation(\TKusy\Hl7FhirR4\RelatedArtifactType $documentation)
    {
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * isset documentation
     *
     * Didactic or other informational resources associated with the goal that provide further supporting information about the goal. Information resources can include inline text commentary and links to web resources.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentation($index)
    {
        return isset($this->documentation[$index]);
    }

    /**
     * unset documentation
     *
     * Didactic or other informational resources associated with the goal that provide further supporting information about the goal. Information resources can include inline text commentary and links to web resources.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentation($index)
    {
        unset($this->documentation[$index]);
    }

    /**
     * Gets as documentation
     *
     * Didactic or other informational resources associated with the goal that provide further supporting information about the goal. Information resources can include inline text commentary and links to web resources.
     *
     * @return \TKusy\Hl7FhirR4\RelatedArtifactType[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Didactic or other informational resources associated with the goal that provide further supporting information about the goal. Information resources can include inline text commentary and links to web resources.
     *
     * @param \TKusy\Hl7FhirR4\RelatedArtifactType[] $documentation
     * @return self
     */
    public function setDocumentation(array $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as target
     *
     * Indicates what should be done and within what timeframe.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PlanDefinitionTargetType $target
     */
    public function addToTarget(\TKusy\Hl7FhirR4\PlanDefinitionTargetType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * Indicates what should be done and within what timeframe.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTarget($index)
    {
        return isset($this->target[$index]);
    }

    /**
     * unset target
     *
     * Indicates what should be done and within what timeframe.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTarget($index)
    {
        unset($this->target[$index]);
    }

    /**
     * Gets as target
     *
     * Indicates what should be done and within what timeframe.
     *
     * @return \TKusy\Hl7FhirR4\PlanDefinitionTargetType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Indicates what should be done and within what timeframe.
     *
     * @param \TKusy\Hl7FhirR4\PlanDefinitionTargetType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }


}

