<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExampleScenarioContainedInstanceType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.ContainedInstance
 */
class ExampleScenarioContainedInstanceType extends BackboneElementType
{

    /**
     * Each resource contained in the instance.
     *
     * @var string $resourceId
     */
    private $resourceId = null;

    /**
     * A specific version of a resource contained in the instance.
     *
     * @var string $versionId
     */
    private $versionId = null;

    /**
     * Gets as resourceId
     *
     * Each resource contained in the instance.
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
     * Each resource contained in the instance.
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
     * Gets as versionId
     *
     * A specific version of a resource contained in the instance.
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
     * A specific version of a resource contained in the instance.
     *
     * @param string $versionId
     * @return self
     */
    public function setVersionId($versionId)
    {
        $this->versionId = $versionId;
        return $this;
    }


}

