<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RelatedArtifactType
 *
 * Related artifacts such as additional documentation, justification, or bibliographic references.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: RelatedArtifact
 */
class RelatedArtifactType extends ElementType
{

    /**
     * The type of relationship to the related artifact.
     *
     * @var \TKusy\Hl7FhirR4\RelatedArtifactTypeType $type
     */
    private $type = null;

    /**
     * A short label that can be used to reference the citation from elsewhere in the containing artifact, such as a footnote index.
     *
     * @var \TKusy\Hl7FhirR4\StringType $label
     */
    private $label = null;

    /**
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     *
     * @var \TKusy\Hl7FhirR4\StringType $display
     */
    private $display = null;

    /**
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $citation
     */
    private $citation = null;

    /**
     * A url for the artifact that can be followed to access the actual content.
     *
     * @var \TKusy\Hl7FhirR4\UrlType $url
     */
    private $url = null;

    /**
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $document
     */
    private $document = null;

    /**
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $resource
     */
    private $resource = null;

    /**
     * Gets as type
     *
     * The type of relationship to the related artifact.
     *
     * @return \TKusy\Hl7FhirR4\RelatedArtifactTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of relationship to the related artifact.
     *
     * @param \TKusy\Hl7FhirR4\RelatedArtifactTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\RelatedArtifactTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as label
     *
     * A short label that can be used to reference the citation from elsewhere in the containing artifact, such as a footnote index.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * A short label that can be used to reference the citation from elsewhere in the containing artifact, such as a footnote index.
     *
     * @param \TKusy\Hl7FhirR4\StringType $label
     * @return self
     */
    public function setLabel(\TKusy\Hl7FhirR4\StringType $label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as display
     *
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     *
     * @param \TKusy\Hl7FhirR4\StringType $display
     * @return self
     */
    public function setDisplay(\TKusy\Hl7FhirR4\StringType $display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as citation
     *
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * Sets a new citation
     *
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $citation
     * @return self
     */
    public function setCitation(\TKusy\Hl7FhirR4\MarkdownType $citation)
    {
        $this->citation = $citation;
        return $this;
    }

    /**
     * Gets as url
     *
     * A url for the artifact that can be followed to access the actual content.
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
     * A url for the artifact that can be followed to access the actual content.
     *
     * @param \TKusy\Hl7FhirR4\UrlType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\UrlType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as document
     *
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * The document being referenced, represented as an attachment. This is exclusive with the resource element.
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $document
     * @return self
     */
    public function setDocument(\TKusy\Hl7FhirR4\AttachmentType $document)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The related resource, such as a library, value set, profile, or other knowledge resource.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7FhirR4\CanonicalType $resource)
    {
        $this->resource = $resource;
        return $this;
    }


}

