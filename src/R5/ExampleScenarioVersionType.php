<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExampleScenarioVersionType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Version
 */
class ExampleScenarioVersionType extends BackboneElementType
{

    /**
     * A unique string within the instance that is used to reference the version of the instance.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $key
     */
    private $key = null;

    /**
     * A short descriptive label the version to be used in tables or diagrams.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * An explanation of what this specific version of the instance contains and represents.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Points to an instance (typically an example) that shows the data that would flow at this point in the scenario.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $content
     */
    private $content = null;

    /**
     * Gets as key
     *
     * A unique string within the instance that is used to reference the version of the instance.
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
     * A unique string within the instance that is used to reference the version of the instance.
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
     * Gets as title
     *
     * A short descriptive label the version to be used in tables or diagrams.
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
     * A short descriptive label the version to be used in tables or diagrams.
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
     * An explanation of what this specific version of the instance contains and represents.
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
     * An explanation of what this specific version of the instance contains and represents.
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
     * Gets as content
     *
     * Points to an instance (typically an example) that shows the data that would flow at this point in the scenario.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * Points to an instance (typically an example) that shows the data that would flow at this point in the scenario.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $content
     * @return self
     */
    public function setContent(?\TKusy\Hl7Fhir\R5\ReferenceType $content = null)
    {
        $this->content = $content;
        return $this;
    }


}

