<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ArtifactAssessmentType
 *
 * This Resource provides one or more comments, classifiers or ratings about a Resource and supports attribution and rights management metadata for the added content.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ArtifactAssessment
 */
class ArtifactAssessmentType extends DomainResourceType
{

    /**
     * A formal identifier that is used to identify this artifact assessment when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A short title for the assessment for use in displaying and selecting.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $citeAsReference
     */
    private $citeAsReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $citeAsMarkdown
     */
    private $citeAsMarkdown = null;

    /**
     * The date (and optionally time) when the artifact assessment was published. The date must change when the disposition changes and it must change if the workflow status code changes. In addition, it should change when the substantive content of the artifact assessment changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * A copyright statement relating to the artifact assessment and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the artifact assessment.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $approvalDate
     */
    private $approvalDate = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $lastReviewDate
     */
    private $lastReviewDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $artifactReference
     */
    private $artifactReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $artifactCanonical
     */
    private $artifactCanonical = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $artifactUri
     */
    private $artifactUri = null;

    /**
     * A component comment, classifier, or rating of the artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType[] $content
     */
    private $content = null;

    /**
     * Indicates the workflow status of the comment or change request.
     *
     * @var \TKusy\Hl7Fhir\R5\ArtifactAssessmentWorkflowStatusType $workflowStatus
     */
    private $workflowStatus = null;

    /**
     * Indicates the disposition of the responsible party to the comment or change request.
     *
     * @var \TKusy\Hl7Fhir\R5\ArtifactAssessmentDispositionType $disposition
     */
    private $disposition = null;

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this artifact assessment when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A formal identifier that is used to identify this artifact assessment when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * A formal identifier that is used to identify this artifact assessment when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * A formal identifier that is used to identify this artifact assessment when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A formal identifier that is used to identify this artifact assessment when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short title for the assessment for use in displaying and selecting.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short title for the assessment for use in displaying and selecting.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as citeAsReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getCiteAsReference()
    {
        return $this->citeAsReference;
    }

    /**
     * Sets a new citeAsReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $citeAsReference
     * @return self
     */
    public function setCiteAsReference(?\TKusy\Hl7Fhir\R5\ReferenceType $citeAsReference = null)
    {
        $this->citeAsReference = $citeAsReference;
        return $this;
    }

    /**
     * Gets as citeAsMarkdown
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getCiteAsMarkdown()
    {
        return $this->citeAsMarkdown;
    }

    /**
     * Sets a new citeAsMarkdown
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $citeAsMarkdown
     * @return self
     */
    public function setCiteAsMarkdown(?\TKusy\Hl7Fhir\R5\MarkdownType $citeAsMarkdown = null)
    {
        $this->citeAsMarkdown = $citeAsMarkdown;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the artifact assessment was published. The date must change when the disposition changes and it must change if the workflow status code changes. In addition, it should change when the substantive content of the artifact assessment changes.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date (and optionally time) when the artifact assessment was published. The date must change when the disposition changes and it must change if the workflow status code changes. In addition, it should change when the substantive content of the artifact assessment changes.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * A copyright statement relating to the artifact assessment and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the artifact assessment.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * A copyright statement relating to the artifact assessment and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the artifact assessment.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     * @return self
     */
    public function setCopyright(?\TKusy\Hl7Fhir\R5\MarkdownType $copyright = null)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Gets as approvalDate
     *
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    /**
     * Sets a new approvalDate
     *
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $approvalDate
     * @return self
     */
    public function setApprovalDate(?\TKusy\Hl7Fhir\R5\DateType $approvalDate = null)
    {
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * Gets as lastReviewDate
     *
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * Sets a new lastReviewDate
     *
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $lastReviewDate
     * @return self
     */
    public function setLastReviewDate(?\TKusy\Hl7Fhir\R5\DateType $lastReviewDate = null)
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * Gets as artifactReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getArtifactReference()
    {
        return $this->artifactReference;
    }

    /**
     * Sets a new artifactReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $artifactReference
     * @return self
     */
    public function setArtifactReference(?\TKusy\Hl7Fhir\R5\ReferenceType $artifactReference = null)
    {
        $this->artifactReference = $artifactReference;
        return $this;
    }

    /**
     * Gets as artifactCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getArtifactCanonical()
    {
        return $this->artifactCanonical;
    }

    /**
     * Sets a new artifactCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $artifactCanonical
     * @return self
     */
    public function setArtifactCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $artifactCanonical = null)
    {
        $this->artifactCanonical = $artifactCanonical;
        return $this;
    }

    /**
     * Gets as artifactUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getArtifactUri()
    {
        return $this->artifactUri;
    }

    /**
     * Sets a new artifactUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $artifactUri
     * @return self
     */
    public function setArtifactUri(?\TKusy\Hl7Fhir\R5\UriType $artifactUri = null)
    {
        $this->artifactUri = $artifactUri;
        return $this;
    }

    /**
     * Adds as content
     *
     * A component comment, classifier, or rating of the artifact.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType $content
     */
    public function addToContent(\TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * A component comment, classifier, or rating of the artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * A component comment, classifier, or rating of the artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * A component comment, classifier, or rating of the artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * A component comment, classifier, or rating of the artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\ArtifactAssessmentContentType[] $content
     * @return self
     */
    public function setContent(array $content = null)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as workflowStatus
     *
     * Indicates the workflow status of the comment or change request.
     *
     * @return \TKusy\Hl7Fhir\R5\ArtifactAssessmentWorkflowStatusType
     */
    public function getWorkflowStatus()
    {
        return $this->workflowStatus;
    }

    /**
     * Sets a new workflowStatus
     *
     * Indicates the workflow status of the comment or change request.
     *
     * @param \TKusy\Hl7Fhir\R5\ArtifactAssessmentWorkflowStatusType $workflowStatus
     * @return self
     */
    public function setWorkflowStatus(?\TKusy\Hl7Fhir\R5\ArtifactAssessmentWorkflowStatusType $workflowStatus = null)
    {
        $this->workflowStatus = $workflowStatus;
        return $this;
    }

    /**
     * Gets as disposition
     *
     * Indicates the disposition of the responsible party to the comment or change request.
     *
     * @return \TKusy\Hl7Fhir\R5\ArtifactAssessmentDispositionType
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Sets a new disposition
     *
     * Indicates the disposition of the responsible party to the comment or change request.
     *
     * @param \TKusy\Hl7Fhir\R5\ArtifactAssessmentDispositionType $disposition
     * @return self
     */
    public function setDisposition(?\TKusy\Hl7Fhir\R5\ArtifactAssessmentDispositionType $disposition = null)
    {
        $this->disposition = $disposition;
        return $this;
    }


}

