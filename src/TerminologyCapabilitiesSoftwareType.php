<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesSoftwareType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Software
 */
class TerminologyCapabilitiesSoftwareType extends BackboneElementType
{

    /**
     * Name the software is known by.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The version identifier for the software covered by this statement.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * Gets as name
     *
     * Name the software is known by.
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
     * Name the software is known by.
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
     * Gets as version
     *
     * The version identifier for the software covered by this statement.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version identifier for the software covered by this statement.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

