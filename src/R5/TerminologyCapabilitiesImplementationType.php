<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * An absolute base URL for the implementation.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType $url
     */
    private $url = null;

    /**
     * Gets as description
     *
     * Information about the specific installation that this terminology capability statement relates to.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R5\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as url
     *
     * An absolute base URL for the implementation.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
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
     * @param \TKusy\Hl7Fhir\R5\UrlType $url
     * @return self
     */
    public function setUrl(?\TKusy\Hl7Fhir\R5\UrlType $url = null)
    {
        $this->url = $url;
        return $this;
    }


}

