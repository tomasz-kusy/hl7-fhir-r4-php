<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesImplementationType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Implementation
 */
class TerminologyCapabilitiesImplementationType extends BackboneElementType
{

    /**
     * Information about the specific installation that this terminology capability statement relates to.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * An absolute base URL for the implementation.
     *
     * @var \TKusy\Hl7FhirR4\UrlType $url
     */
    private $url = null;

    /**
     * Gets as description
     *
     * Information about the specific installation that this terminology capability statement relates to.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Information about the specific installation that this terminology capability statement relates to.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as url
     *
     * An absolute base URL for the implementation.
     *
     * @return \TKusy\Hl7FhirR4\UrlType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * An absolute base URL for the implementation.
     *
     * @param \TKusy\Hl7FhirR4\UrlType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\UrlType $url)
    {
        $this->url = $url;
        return $this;
    }


}

