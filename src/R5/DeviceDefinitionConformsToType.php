<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionConformsToType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.ConformsTo
 */
class DeviceDefinitionConformsToType extends BackboneElementType
{

    /**
     * Describes the type of the standard, specification, or formal guidance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Code that identifies the specific standard, specification, protocol, formal guidance, regulation, legislation, or certification scheme to which the device adheres.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $specification
     */
    private $specification = null;

    /**
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $version
     */
    private $version = null;

    /**
     * Standard, regulation, certification, or guidance website, document, or other publication, or similar, supporting the conformance.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $source
     */
    private $source = null;

    /**
     * Gets as category
     *
     * Describes the type of the standard, specification, or formal guidance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Describes the type of the standard, specification, or formal guidance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(?\TKusy\Hl7Fhir\R5\CodeableConceptType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as specification
     *
     * Code that identifies the specific standard, specification, protocol, formal guidance, regulation, legislation, or certification scheme to which the device adheres.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * Sets a new specification
     *
     * Code that identifies the specific standard, specification, protocol, formal guidance, regulation, legislation, or certification scheme to which the device adheres.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specification
     * @return self
     */
    public function setSpecification(\TKusy\Hl7Fhir\R5\CodeableConceptType $specification)
    {
        $this->specification = $specification;
        return $this;
    }

    /**
     * Adds as version
     *
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     */
    public function addToVersion(\TKusy\Hl7Fhir\R5\StringType $version)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * isset version
     *
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
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
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
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
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $version
     * @return self
     */
    public function setVersion(array $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as source
     *
     * Standard, regulation, certification, or guidance website, document, or other publication, or similar, supporting the conformance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $source
     */
    public function addToSource(\TKusy\Hl7Fhir\R5\RelatedArtifactType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Standard, regulation, certification, or guidance website, document, or other publication, or similar, supporting the conformance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * Standard, regulation, certification, or guidance website, document, or other publication, or similar, supporting the conformance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * Standard, regulation, certification, or guidance website, document, or other publication, or similar, supporting the conformance.
     *
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Standard, regulation, certification, or guidance website, document, or other publication, or similar, supporting the conformance.
     *
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $source
     * @return self
     */
    public function setSource(array $source = null)
    {
        $this->source = $source;
        return $this;
    }


}

