<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CapabilityStatementSoftwareType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Software
 */
class CapabilityStatementSoftwareType extends BackboneElementType
{

    /**
     * Name the software is known by.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * The version identifier for the software covered by this statement.
     *
     * @var \TKusy\Hl7FhirR4\StringType $version
     */
    private $version = null;

    /**
     * Date this version of the software was released.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $releaseDate
     */
    private $releaseDate = null;

    /**
     * Gets as name
     *
     * Name the software is known by.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version identifier for the software covered by this statement.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $version
     * @return self
     */
    public function setVersion(\TKusy\Hl7FhirR4\StringType $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * Date this version of the software was released.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * Date this version of the software was released.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $releaseDate
     * @return self
     */
    public function setReleaseDate(\TKusy\Hl7FhirR4\DateTimeType $releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }


}

