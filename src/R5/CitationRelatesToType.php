<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationRelatesToType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.RelatesTo
 */
class CitationRelatesToType extends BackboneElementType
{

    /**
     * The type of relationship to the related artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactTypeExpandedType $type
     */
    private $type = null;

    /**
     * Provides additional classifiers of the related artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     */
    private $classifier = null;

    /**
     * A short label that can be used to reference the related artifact from elsewhere in the containing artifact, such as a footnote index.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $label
     */
    private $label = null;

    /**
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $display
     */
    private $display = null;

    /**
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $citation
     */
    private $citation = null;

    /**
     * The document being referenced, represented as an attachment. Do not use this element if using the resource element to provide the canonical to the related artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $document
     */
    private $document = null;

    /**
     * The related artifact, such as a library, value set, profile, or other knowledge resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $resource
     */
    private $resource = null;

    /**
     * The related artifact, if the artifact is not a canonical resource, or a resource reference to a canonical resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $resourceReference
     */
    private $resourceReference = null;

    /**
     * Gets as type
     *
     * The type of relationship to the related artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactTypeExpandedType
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
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactTypeExpandedType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\RelatedArtifactTypeExpandedType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as classifier
     *
     * Provides additional classifiers of the related artifact.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $classifier
     */
    public function addToClassifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $classifier)
    {
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * isset classifier
     *
     * Provides additional classifiers of the related artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifier($index)
    {
        return isset($this->classifier[$index]);
    }

    /**
     * unset classifier
     *
     * Provides additional classifiers of the related artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifier($index)
    {
        unset($this->classifier[$index]);
    }

    /**
     * Gets as classifier
     *
     * Provides additional classifiers of the related artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClassifier()
    {
        return $this->classifier;
    }

    /**
     * Sets a new classifier
     *
     * Provides additional classifiers of the related artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     * @return self
     */
    public function setClassifier(array $classifier = null)
    {
        $this->classifier = $classifier;
        return $this;
    }

    /**
     * Gets as label
     *
     * A short label that can be used to reference the related artifact from elsewhere in the containing artifact, such as a footnote index.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * A short label that can be used to reference the related artifact from elsewhere in the containing artifact, such as a footnote index.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $label
     * @return self
     */
    public function setLabel(?\TKusy\Hl7Fhir\R5\StringType $label = null)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as display
     *
     * A brief description of the document or knowledge resource being referenced, suitable for display to a consumer.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $display
     * @return self
     */
    public function setDisplay(?\TKusy\Hl7Fhir\R5\StringType $display = null)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as citation
     *
     * A bibliographic citation for the related artifact. This text SHOULD be formatted according to an accepted citation format.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $citation
     * @return self
     */
    public function setCitation(?\TKusy\Hl7Fhir\R5\MarkdownType $citation = null)
    {
        $this->citation = $citation;
        return $this;
    }

    /**
     * Gets as document
     *
     * The document being referenced, represented as an attachment. Do not use this element if using the resource element to provide the canonical to the related artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * The document being referenced, represented as an attachment. Do not use this element if using the resource element to provide the canonical to the related artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $document
     * @return self
     */
    public function setDocument(?\TKusy\Hl7Fhir\R5\AttachmentType $document = null)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The related artifact, such as a library, value set, profile, or other knowledge resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The related artifact, such as a library, value set, profile, or other knowledge resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $resource
     * @return self
     */
    public function setResource(?\TKusy\Hl7Fhir\R5\CanonicalType $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The related artifact, if the artifact is not a canonical resource, or a resource reference to a canonical resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getResourceReference()
    {
        return $this->resourceReference;
    }

    /**
     * Sets a new resourceReference
     *
     * The related artifact, if the artifact is not a canonical resource, or a resource reference to a canonical resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $resourceReference
     * @return self
     */
    public function setResourceReference(?\TKusy\Hl7Fhir\R5\ReferenceType $resourceReference = null)
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }


}

