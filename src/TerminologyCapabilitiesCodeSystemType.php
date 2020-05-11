<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesCodeSystemType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.CodeSystem
 */
class TerminologyCapabilitiesCodeSystemType extends BackboneElementType
{

    /**
     * URI for the Code System.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $uri
     */
    private $uri = null;

    /**
     * For the code system, a list of versions that are supported by the server.
     *
     * @var \TKusy\Hl7FhirR4\TerminologyCapabilitiesVersionType[] $version
     */
    private $version = null;

    /**
     * True if subsumption is supported for this version of the code system.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $subsumption
     */
    private $subsumption = null;

    /**
     * Gets as uri
     *
     * URI for the Code System.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * URI for the Code System.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $uri
     * @return self
     */
    public function setUri(\TKusy\Hl7FhirR4\CanonicalType $uri)
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
     * @param \TKusy\Hl7FhirR4\TerminologyCapabilitiesVersionType $version
     */
    public function addToVersion(\TKusy\Hl7FhirR4\TerminologyCapabilitiesVersionType $version)
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
     * @return \TKusy\Hl7FhirR4\TerminologyCapabilitiesVersionType[]
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
     * @param \TKusy\Hl7FhirR4\TerminologyCapabilitiesVersionType[] $version
     * @return self
     */
    public function setVersion(array $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as subsumption
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
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
     * @param \TKusy\Hl7FhirR4\BooleanType $subsumption
     * @return self
     */
    public function setSubsumption(\TKusy\Hl7FhirR4\BooleanType $subsumption)
    {
        $this->subsumption = $subsumption;
        return $this;
    }


}

