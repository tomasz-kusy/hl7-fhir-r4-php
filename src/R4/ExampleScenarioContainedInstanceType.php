<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\StringType $resourceId
     */
    private $resourceId = null;

    /**
     * A specific version of a resource contained in the instance.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $versionId
     */
    private $versionId = null;

    /**
     * Gets as resourceId
     *
     * Each resource contained in the instance.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $resourceId
     * @return self
     */
    public function setResourceId(\TKusy\Hl7Fhir\R4\StringType $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as versionId
     *
     * A specific version of a resource contained in the instance.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $versionId
     * @return self
     */
    public function setVersionId(\TKusy\Hl7Fhir\R4\StringType $versionId)
    {
        $this->versionId = $versionId;
        return $this;
    }


}

