<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExampleScenarioContainedInstanceType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.ContainedInstance
 */
class ExampleScenarioContainedInstanceType extends BackboneElementType
{

    /**
     * A reference to the key of an instance found within this one.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $instanceReference
     */
    private $instanceReference = null;

    /**
     * A reference to the key of a specific version of an instance in this instance.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $versionReference
     */
    private $versionReference = null;

    /**
     * Gets as instanceReference
     *
     * A reference to the key of an instance found within this one.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getInstanceReference()
    {
        return $this->instanceReference;
    }

    /**
     * Sets a new instanceReference
     *
     * A reference to the key of an instance found within this one.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $instanceReference
     * @return self
     */
    public function setInstanceReference(\TKusy\Hl7Fhir\R5\StringType $instanceReference)
    {
        $this->instanceReference = $instanceReference;
        return $this;
    }

    /**
     * Gets as versionReference
     *
     * A reference to the key of a specific version of an instance in this instance.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersionReference()
    {
        return $this->versionReference;
    }

    /**
     * Sets a new versionReference
     *
     * A reference to the key of a specific version of an instance in this instance.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $versionReference
     * @return self
     */
    public function setVersionReference(?\TKusy\Hl7Fhir\R5\StringType $versionReference = null)
    {
        $this->versionReference = $versionReference;
        return $this;
    }


}

