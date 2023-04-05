<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ArtifactAssessmentContentType
 *
 * This Resource provides one or more comments, classifiers or ratings about a Resource and supports attribution and rights management metadata for the added content.
 * XSD Type: ArtifactAssessment.Content
 */
class ArtifactAssessmentContentType extends BackboneElementType
{

    /**
     * The type of information this component of the content represents.
     *
     * @var \TKusy\Hl7Fhir\R5\ArtifactAssessmentInformationTypeType $informationType
     */
    private $informationType = null;

    /**
     * A brief summary of the content of this component.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $summary
     */
    private $summary = null;

    /**
     * Indicates what type of content this component represents.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Represents a rating, classifier, or assessment of the artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     */
    private $classifier = null;

    /**
     * A quantitative rating of the artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Indicates who or what authored the content.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * A URI that points to what the comment is about, such as a line of text in the CQL, or a specific element in a resource.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $path
     */
    private $path = null;

    /**
     * Additional related artifacts that provide supporting documentation, additional evidence, or further information related to the content.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatedArtifact
     */
    private $relatedArtifact = null;

    /**
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $freeToShare
     */
    private $freeToShare = null;

    /**
     * If the informationType is container, the components of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType[] $component
     */
    private $component = null;

    /**
     * Gets as informationType
     *
     * The type of information this component of the content represents.
     *
     * @return \TKusy\Hl7Fhir\R5\ArtifactAssessmentInformationTypeType
     */
    public function getInformationType()
    {
        return $this->informationType;
    }

    /**
     * Sets a new informationType
     *
     * The type of information this component of the content represents.
     *
     * @param \TKusy\Hl7Fhir\R5\ArtifactAssessmentInformationTypeType $informationType
     * @return self
     */
    public function setInformationType(?\TKusy\Hl7Fhir\R5\ArtifactAssessmentInformationTypeType $informationType = null)
    {
        $this->informationType = $informationType;
        return $this;
    }

    /**
     * Gets as summary
     *
     * A brief summary of the content of this component.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * A brief summary of the content of this component.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $summary
     * @return self
     */
    public function setSummary(?\TKusy\Hl7Fhir\R5\MarkdownType $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates what type of content this component represents.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates what type of content this component represents.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as classifier
     *
     * Represents a rating, classifier, or assessment of the artifact.
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
     * Represents a rating, classifier, or assessment of the artifact.
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
     * Represents a rating, classifier, or assessment of the artifact.
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
     * Represents a rating, classifier, or assessment of the artifact.
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
     * Represents a rating, classifier, or assessment of the artifact.
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
     * Gets as quantity
     *
     * A quantitative rating of the artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * A quantitative rating of the artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as author
     *
     * Indicates who or what authored the content.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Indicates who or what authored the content.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     * @return self
     */
    public function setAuthor(?\TKusy\Hl7Fhir\R5\ReferenceType $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as path
     *
     * A URI that points to what the comment is about, such as a line of text in the CQL, or a specific element in a resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $path
     */
    public function addToPath(\TKusy\Hl7Fhir\R5\UriType $path)
    {
        $this->path[] = $path;
        return $this;
    }

    /**
     * isset path
     *
     * A URI that points to what the comment is about, such as a line of text in the CQL, or a specific element in a resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPath($index)
    {
        return isset($this->path[$index]);
    }

    /**
     * unset path
     *
     * A URI that points to what the comment is about, such as a line of text in the CQL, or a specific element in a resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPath($index)
    {
        unset($this->path[$index]);
    }

    /**
     * Gets as path
     *
     * A URI that points to what the comment is about, such as a line of text in the CQL, or a specific element in a resource.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * A URI that points to what the comment is about, such as a line of text in the CQL, or a specific element in a resource.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $path
     * @return self
     */
    public function setPath(array $path = null)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Adds as relatedArtifact
     *
     * Additional related artifacts that provide supporting documentation, additional evidence, or further information related to the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact
     */
    public function addToRelatedArtifact(\TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact)
    {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * isset relatedArtifact
     *
     * Additional related artifacts that provide supporting documentation, additional evidence, or further information related to the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedArtifact($index)
    {
        return isset($this->relatedArtifact[$index]);
    }

    /**
     * unset relatedArtifact
     *
     * Additional related artifacts that provide supporting documentation, additional evidence, or further information related to the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedArtifact($index)
    {
        unset($this->relatedArtifact[$index]);
    }

    /**
     * Gets as relatedArtifact
     *
     * Additional related artifacts that provide supporting documentation, additional evidence, or further information related to the content.
     *
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Sets a new relatedArtifact
     *
     * Additional related artifacts that provide supporting documentation, additional evidence, or further information related to the content.
     *
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatedArtifact
     * @return self
     */
    public function setRelatedArtifact(array $relatedArtifact = null)
    {
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * Gets as freeToShare
     *
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getFreeToShare()
    {
        return $this->freeToShare;
    }

    /**
     * Sets a new freeToShare
     *
     * Acceptable to publicly share the comment, classifier or rating.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $freeToShare
     * @return self
     */
    public function setFreeToShare(?\TKusy\Hl7Fhir\R5\BooleanType $freeToShare = null)
    {
        $this->freeToShare = $freeToShare;
        return $this;
    }

    /**
     * Adds as component
     *
     * If the informationType is container, the components of the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType $component
     */
    public function addToComponent(\TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType $component)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * isset component
     *
     * If the informationType is container, the components of the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponent($index)
    {
        return isset($this->component[$index]);
    }

    /**
     * unset component
     *
     * If the informationType is container, the components of the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponent($index)
    {
        unset($this->component[$index]);
    }

    /**
     * Gets as component
     *
     * If the informationType is container, the components of the content.
     *
     * @return \TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * If the informationType is container, the components of the content.
     *
     * @param \TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType[] $component
     * @return self
     */
    public function setComponent(array $component = null)
    {
        $this->component = $component;
        return $this;
    }


}

