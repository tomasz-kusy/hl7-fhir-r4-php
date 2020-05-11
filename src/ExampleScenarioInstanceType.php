<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExampleScenarioInstanceType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Instance
 */
class ExampleScenarioInstanceType extends BackboneElementType
{

    /**
     * The id of the resource for referencing.
     *
     * @var string $resourceId
     */
    private $resourceId = null;

    /**
     * The type of the resource.
     *
     * @var \TKusy\Hl7FhirR4\ResourceTypeType $resourceType
     */
    private $resourceType = null;

    /**
     * A short name for the resource instance.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Human-friendly description of the resource instance.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * A specific version of the resource.
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioVersionType[] $version
     */
    private $version = null;

    /**
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType[] $containedInstance
     */
    private $containedInstance = null;

    /**
     * Gets as resourceId
     *
     * The id of the resource for referencing.
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * The id of the resource for referencing.
     *
     * @param string $resourceId
     * @return self
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as resourceType
     *
     * The type of the resource.
     *
     * @return \TKusy\Hl7FhirR4\ResourceTypeType
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * The type of the resource.
     *
     * @param \TKusy\Hl7FhirR4\ResourceTypeType $resourceType
     * @return self
     */
    public function setResourceType(\TKusy\Hl7FhirR4\ResourceTypeType $resourceType)
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * Gets as name
     *
     * A short name for the resource instance.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A short name for the resource instance.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * Human-friendly description of the resource instance.
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
     * Human-friendly description of the resource instance.
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
     * Adds as version
     *
     * A specific version of the resource.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExampleScenarioVersionType $version
     */
    public function addToVersion(\TKusy\Hl7FhirR4\ExampleScenarioVersionType $version)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * isset version
     *
     * A specific version of the resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVersion($index)
    {
        return isset($this->version[$index]);
    }

    /**
     * unset version
     *
     * A specific version of the resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVersion($index)
    {
        unset($this->version[$index]);
    }

    /**
     * Gets as version
     *
     * A specific version of the resource.
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioVersionType[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * A specific version of the resource.
     *
     * @param \TKusy\Hl7FhirR4\ExampleScenarioVersionType[] $version
     * @return self
     */
    public function setVersion(array $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as containedInstance
     *
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType $containedInstance
     */
    public function addToContainedInstance(\TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType $containedInstance)
    {
        $this->containedInstance[] = $containedInstance;
        return $this;
    }

    /**
     * isset containedInstance
     *
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedInstance($index)
    {
        return isset($this->containedInstance[$index]);
    }

    /**
     * unset containedInstance
     *
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedInstance($index)
    {
        unset($this->containedInstance[$index]);
    }

    /**
     * Gets as containedInstance
     *
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType[]
     */
    public function getContainedInstance()
    {
        return $this->containedInstance;
    }

    /**
     * Sets a new containedInstance
     *
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     *
     * @param \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType[] $containedInstance
     * @return self
     */
    public function setContainedInstance(array $containedInstance)
    {
        $this->containedInstance = $containedInstance;
        return $this;
    }


}

