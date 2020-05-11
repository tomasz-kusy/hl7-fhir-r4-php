<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptLinkType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Link
 */
class TestScriptLinkType extends BackboneElementType
{

    /**
     * URL to a particular requirement or feature within the FHIR specification.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * Short description of the link.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as url
     *
     * URL to a particular requirement or feature within the FHIR specification.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * URL to a particular requirement or feature within the FHIR specification.
     *
     * @param \TKusy\Hl7FhirR4\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as description
     *
     * Short description of the link.
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
     * Short description of the link.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

