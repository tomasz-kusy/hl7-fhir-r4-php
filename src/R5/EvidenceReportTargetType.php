<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceReportTargetType
 *
 * The EvidenceReport Resource is a specialized container for a collection of resources and codeable concepts, adapted to support compositions of Evidence, EvidenceVariable, and Citation resources and related concepts.
 * XSD Type: EvidenceReport.Target
 */
class EvidenceReportTargetType extends BackboneElementType
{

    /**
     * Target of the relationship URL.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * Target of the relationship Identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Target of the relationship Display.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $display
     */
    private $display = null;

    /**
     * Target of the relationship Resource reference.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $resource
     */
    private $resource = null;

    /**
     * Gets as url
     *
     * Target of the relationship URL.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * Target of the relationship URL.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $url
     * @return self
     */
    public function setUrl(?\TKusy\Hl7Fhir\R5\UriType $url = null)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as identifier
     *
     * Target of the relationship Identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Target of the relationship Identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as display
     *
     * Target of the relationship Display.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * Target of the relationship Display.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $display
     * @return self
     */
    public function setDisplay(?\TKusy\Hl7Fhir\R5\MarkdownType $display = null)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as resource
     *
     * Target of the relationship Resource reference.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * Target of the relationship Resource reference.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $resource
     * @return self
     */
    public function setResource(?\TKusy\Hl7Fhir\R5\ReferenceType $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }


}

