<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestScriptRequirementType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Requirement
 */
class TestScriptRequirementType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $linkUri
     */
    private $linkUri = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $linkCanonical
     */
    private $linkCanonical = null;

    /**
     * Gets as linkUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getLinkUri()
    {
        return $this->linkUri;
    }

    /**
     * Sets a new linkUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $linkUri
     * @return self
     */
    public function setLinkUri(?\TKusy\Hl7Fhir\R5\UriType $linkUri = null)
    {
        $this->linkUri = $linkUri;
        return $this;
    }

    /**
     * Gets as linkCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getLinkCanonical()
    {
        return $this->linkCanonical;
    }

    /**
     * Sets a new linkCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $linkCanonical
     * @return self
     */
    public function setLinkCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $linkCanonical = null)
    {
        $this->linkCanonical = $linkCanonical;
        return $this;
    }


}

