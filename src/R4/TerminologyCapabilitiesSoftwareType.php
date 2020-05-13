<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * The version identifier for the software covered by this statement.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $version
     */
    private $version = null;

    /**
     * Gets as name
     *
     * Name the software is known by.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version identifier for the software covered by this statement.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $version
     * @return self
     */
    public function setVersion(\TKusy\Hl7Fhir\R4\StringType $version)
    {
        $this->version = $version;
        return $this;
    }


}

