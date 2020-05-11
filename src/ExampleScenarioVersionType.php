<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExampleScenarioVersionType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Version
 */
class ExampleScenarioVersionType extends BackboneElementType
{

    /**
     * The identifier of a specific version of a resource.
     *
     * @var string $versionId
     */
    private $versionId = null;

    /**
     * The description of the resource version.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * Gets as versionId
     *
     * The identifier of a specific version of a resource.
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->versionId;
    }

    /**
     * Sets a new versionId
     *
     * The identifier of a specific version of a resource.
     *
     * @param string $versionId
     * @return self
     */
    public function setVersionId($versionId)
    {
        $this->versionId = $versionId;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description of the resource version.
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
     * The description of the resource version.
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

