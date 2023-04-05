<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExampleScenarioInstanceType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Instance
 */
class ExampleScenarioInstanceType extends BackboneElementType
{

    /**
     * A unique string within the scenario that is used to reference the instance.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $key
     */
    private $key = null;

    /**
     * A code indicating the kind of data structure (FHIR resource or some other standard) this is an instance of.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $structureType
     */
    private $structureType = null;

    /**
     * Conveys the version of the data structure instantiated. I.e. what release of FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $structureVersion
     */
    private $structureVersion = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $structureProfileCanonical
     */
    private $structureProfileCanonical = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $structureProfileUri
     */
    private $structureProfileUri = null;

    /**
     * A short descriptive label the instance to be used in tables or diagrams.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * An explanation of what the instance contains and what it's for.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Points to an instance (typically an example) that shows the data that would corespond to this instance.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $content
     */
    private $content = null;

    /**
     * Represents the instance as it was at a specific time-point.
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioVersionType[] $version
     */
    private $version = null;

    /**
     * References to other instances that can be found within this instance (e.g. the observations contained in a bundle).
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType[] $containedInstance
     */
    private $containedInstance = null;

    /**
     * Gets as key
     *
     * A unique string within the scenario that is used to reference the instance.
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
     * A unique string within the scenario that is used to reference the instance.
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
     * Gets as structureType
     *
     * A code indicating the kind of data structure (FHIR resource or some other standard) this is an instance of.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getStructureType()
    {
        return $this->structureType;
    }

    /**
     * Sets a new structureType
     *
     * A code indicating the kind of data structure (FHIR resource or some other standard) this is an instance of.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $structureType
     * @return self
     */
    public function setStructureType(\TKusy\Hl7Fhir\R5\CodingType $structureType)
    {
        $this->structureType = $structureType;
        return $this;
    }

    /**
     * Gets as structureVersion
     *
     * Conveys the version of the data structure instantiated. I.e. what release of FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getStructureVersion()
    {
        return $this->structureVersion;
    }

    /**
     * Sets a new structureVersion
     *
     * Conveys the version of the data structure instantiated. I.e. what release of FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $structureVersion
     * @return self
     */
    public function setStructureVersion(?\TKusy\Hl7Fhir\R5\StringType $structureVersion = null)
    {
        $this->structureVersion = $structureVersion;
        return $this;
    }

    /**
     * Gets as structureProfileCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getStructureProfileCanonical()
    {
        return $this->structureProfileCanonical;
    }

    /**
     * Sets a new structureProfileCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $structureProfileCanonical
     * @return self
     */
    public function setStructureProfileCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $structureProfileCanonical = null)
    {
        $this->structureProfileCanonical = $structureProfileCanonical;
        return $this;
    }

    /**
     * Gets as structureProfileUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getStructureProfileUri()
    {
        return $this->structureProfileUri;
    }

    /**
     * Sets a new structureProfileUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $structureProfileUri
     * @return self
     */
    public function setStructureProfileUri(?\TKusy\Hl7Fhir\R5\UriType $structureProfileUri = null)
    {
        $this->structureProfileUri = $structureProfileUri;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short descriptive label the instance to be used in tables or diagrams.
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
     * A short descriptive label the instance to be used in tables or diagrams.
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
     * An explanation of what the instance contains and what it's for.
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
     * An explanation of what the instance contains and what it's for.
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
     * Points to an instance (typically an example) that shows the data that would corespond to this instance.
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
     * Points to an instance (typically an example) that shows the data that would corespond to this instance.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $content
     * @return self
     */
    public function setContent(?\TKusy\Hl7Fhir\R5\ReferenceType $content = null)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Adds as version
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioVersionType $version
     */
    public function addToVersion(\TKusy\Hl7Fhir\R5\ExampleScenarioVersionType $version)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * isset version
     *
     * Represents the instance as it was at a specific time-point.
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
     * Represents the instance as it was at a specific time-point.
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
     * Represents the instance as it was at a specific time-point.
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioVersionType[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioVersionType[] $version
     * @return self
     */
    public function setVersion(array $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as containedInstance
     *
     * References to other instances that can be found within this instance (e.g. the observations contained in a bundle).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType $containedInstance
     */
    public function addToContainedInstance(\TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType $containedInstance)
    {
        $this->containedInstance[] = $containedInstance;
        return $this;
    }

    /**
     * isset containedInstance
     *
     * References to other instances that can be found within this instance (e.g. the observations contained in a bundle).
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
     * References to other instances that can be found within this instance (e.g. the observations contained in a bundle).
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
     * References to other instances that can be found within this instance (e.g. the observations contained in a bundle).
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType[]
     */
    public function getContainedInstance()
    {
        return $this->containedInstance;
    }

    /**
     * Sets a new containedInstance
     *
     * References to other instances that can be found within this instance (e.g. the observations contained in a bundle).
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType[] $containedInstance
     * @return self
     */
    public function setContainedInstance(array $containedInstance = null)
    {
        $this->containedInstance = $containedInstance;
        return $this;
    }


}

