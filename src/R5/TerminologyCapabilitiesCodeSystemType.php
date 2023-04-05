<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TerminologyCapabilitiesCodeSystemType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.CodeSystem
 */
class TerminologyCapabilitiesCodeSystemType extends BackboneElementType
{

    /**
     * Canonical identifier for the code system, represented as a URI.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $uri
     */
    private $uri = null;

    /**
     * For the code system, a list of versions that are supported by the server.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesVersionType[] $version
     */
    private $version = null;

    /**
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeSystemContentModeType $content
     */
    private $content = null;

    /**
     * True if subsumption is supported for this version of the code system.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $subsumption
     */
    private $subsumption = null;

    /**
     * Gets as uri
     *
     * Canonical identifier for the code system, represented as a URI.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * Canonical identifier for the code system, represented as a URI.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $uri
     * @return self
     */
    public function setUri(?\TKusy\Hl7Fhir\R5\CanonicalType $uri = null)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Adds as version
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesVersionType $version
     */
    public function addToVersion(\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesVersionType $version)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * isset version
     *
     * For the code system, a list of versions that are supported by the server.
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
     * For the code system, a list of versions that are supported by the server.
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
     * For the code system, a list of versions that are supported by the server.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesVersionType[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesVersionType[] $version
     * @return self
     */
    public function setVersion(array $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as content
     *
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeSystemContentModeType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeSystemContentModeType $content
     * @return self
     */
    public function setContent(\TKusy\Hl7Fhir\R5\CodeSystemContentModeType $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as subsumption
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getSubsumption()
    {
        return $this->subsumption;
    }

    /**
     * Sets a new subsumption
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $subsumption
     * @return self
     */
    public function setSubsumption(?\TKusy\Hl7Fhir\R5\BooleanType $subsumption = null)
    {
        $this->subsumption = $subsumption;
        return $this;
    }


}

