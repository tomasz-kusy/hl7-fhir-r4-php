<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceReportType
 *
 * The EvidenceReport Resource is a specialized container for a collection of resources and codeable concepts, adapted to support compositions of Evidence, EvidenceVariable, and Citation resources and related concepts.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: EvidenceReport
 */
class EvidenceReportType extends MetadataResourceType
{

    /**
     * An absolute URI that is used to identify this EvidenceReport when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this summary is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the summary is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * The status of this summary. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence report instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A formal identifier that is used to identify this EvidenceReport when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A formal identifier that is used to identify things closely related to this EvidenceReport.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $relatedIdentifier
     */
    private $relatedIdentifier = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $citeAsReference
     */
    private $citeAsReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $citeAsMarkdown
     */
    private $citeAsMarkdown = null;

    /**
     * Specifies the kind of report, such as grouping of classifiers, search results, or human-compiled expression.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Used for footnotes and annotations.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Link, description or reference to artifact associated with the report.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatedArtifact
     */
    private $relatedArtifact = null;

    /**
     * Specifies the subject or focus of the report. Answers "What is this report about?".
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceReportSubjectType $subject
     */
    private $subject = null;

    /**
     * The name of the organization or individual responsible for the release and ongoing maintenance of the evidence report.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $publisher
     */
    private $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * An individiual, organization, or device primarily involved in the creation and maintenance of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $author
     */
    private $author = null;

    /**
     * An individiual, organization, or device primarily responsible for internal coherence of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $editor
     */
    private $editor = null;

    /**
     * An individiual, organization, or device primarily responsible for review of some aspect of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $reviewer
     */
    private $reviewer = null;

    /**
     * An individiual, organization, or device responsible for officially endorsing the content for use in some setting.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $endorser
     */
    private $endorser = null;

    /**
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceReportRelatesToType[] $relatesTo
     */
    private $relatesTo = null;

    /**
     * The root of the sections that make up the composition.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceReportSectionType[] $section
     */
    private $section = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this EvidenceReport when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this summary is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the summary is stored on different servers.
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
     * An absolute URI that is used to identify this EvidenceReport when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this summary is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the summary is stored on different servers.
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
     * Gets as status
     *
     * The status of this summary. Enables tracking the life-cycle of the content.
     *
     * @return \TKusy\Hl7Fhir\R5\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of this summary. Enables tracking the life-cycle of the content.
     *
     * @param \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence report instances.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UsageContextType $useContext
     */
    public function addToUseContext(\TKusy\Hl7Fhir\R5\UsageContextType $useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * isset useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence report instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseContext($index)
    {
        return isset($this->useContext[$index]);
    }

    /**
     * unset useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence report instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseContext($index)
    {
        unset($this->useContext[$index]);
    }

    /**
     * Gets as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence report instances.
     *
     * @return \TKusy\Hl7Fhir\R5\UsageContextType[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Sets a new useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence report instances.
     *
     * @param \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     * @return self
     */
    public function setUseContext(array $useContext = null)
    {
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this EvidenceReport when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this EvidenceReport when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this EvidenceReport when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this EvidenceReport when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this EvidenceReport when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * Adds as relatedIdentifier
     *
     * A formal identifier that is used to identify things closely related to this EvidenceReport.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $relatedIdentifier
     */
    public function addToRelatedIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $relatedIdentifier)
    {
        $this->relatedIdentifier[] = $relatedIdentifier;
        return $this;
    }

    /**
     * isset relatedIdentifier
     *
     * A formal identifier that is used to identify things closely related to this EvidenceReport.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedIdentifier($index)
    {
        return isset($this->relatedIdentifier[$index]);
    }

    /**
     * unset relatedIdentifier
     *
     * A formal identifier that is used to identify things closely related to this EvidenceReport.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedIdentifier($index)
    {
        unset($this->relatedIdentifier[$index]);
    }

    /**
     * Gets as relatedIdentifier
     *
     * A formal identifier that is used to identify things closely related to this EvidenceReport.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getRelatedIdentifier()
    {
        return $this->relatedIdentifier;
    }

    /**
     * Sets a new relatedIdentifier
     *
     * A formal identifier that is used to identify things closely related to this EvidenceReport.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $relatedIdentifier
     * @return self
     */
    public function setRelatedIdentifier(array $relatedIdentifier = null)
    {
        $this->relatedIdentifier = $relatedIdentifier;
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
     * Gets as type
     *
     * Specifies the kind of report, such as grouping of classifiers, search results, or human-compiled expression.
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
     * Specifies the kind of report, such as grouping of classifiers, search results, or human-compiled expression.
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
     * Adds as note
     *
     * Used for footnotes and annotations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Used for footnotes and annotations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Used for footnotes and annotations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Used for footnotes and annotations.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Used for footnotes and annotations.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as relatedArtifact
     *
     * Link, description or reference to artifact associated with the report.
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
     * Link, description or reference to artifact associated with the report.
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
     * Link, description or reference to artifact associated with the report.
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
     * Link, description or reference to artifact associated with the report.
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
     * Link, description or reference to artifact associated with the report.
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
     * Gets as subject
     *
     * Specifies the subject or focus of the report. Answers "What is this report about?".
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceReportSubjectType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Specifies the subject or focus of the report. Answers "What is this report about?".
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportSubjectType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R5\EvidenceReportSubjectType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as publisher
     *
     * The name of the organization or individual responsible for the release and ongoing maintenance of the evidence report.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * The name of the organization or individual responsible for the release and ongoing maintenance of the evidence report.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $publisher
     * @return self
     */
    public function setPublisher(?\TKusy\Hl7Fhir\R5\StringType $publisher = null)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R5\ContactDetailType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as author
     *
     * An individiual, organization, or device primarily involved in the creation and maintenance of the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $author
     */
    public function addToAuthor(\TKusy\Hl7Fhir\R5\ContactDetailType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * An individiual, organization, or device primarily involved in the creation and maintenance of the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthor($index)
    {
        return isset($this->author[$index]);
    }

    /**
     * unset author
     *
     * An individiual, organization, or device primarily involved in the creation and maintenance of the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthor($index)
    {
        unset($this->author[$index]);
    }

    /**
     * Gets as author
     *
     * An individiual, organization, or device primarily involved in the creation and maintenance of the content.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * An individiual, organization, or device primarily involved in the creation and maintenance of the content.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $author
     * @return self
     */
    public function setAuthor(array $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as editor
     *
     * An individiual, organization, or device primarily responsible for internal coherence of the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $editor
     */
    public function addToEditor(\TKusy\Hl7Fhir\R5\ContactDetailType $editor)
    {
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * isset editor
     *
     * An individiual, organization, or device primarily responsible for internal coherence of the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEditor($index)
    {
        return isset($this->editor[$index]);
    }

    /**
     * unset editor
     *
     * An individiual, organization, or device primarily responsible for internal coherence of the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEditor($index)
    {
        unset($this->editor[$index]);
    }

    /**
     * Gets as editor
     *
     * An individiual, organization, or device primarily responsible for internal coherence of the content.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Sets a new editor
     *
     * An individiual, organization, or device primarily responsible for internal coherence of the content.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $editor
     * @return self
     */
    public function setEditor(array $editor = null)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * Adds as reviewer
     *
     * An individiual, organization, or device primarily responsible for review of some aspect of the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $reviewer
     */
    public function addToReviewer(\TKusy\Hl7Fhir\R5\ContactDetailType $reviewer)
    {
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * isset reviewer
     *
     * An individiual, organization, or device primarily responsible for review of some aspect of the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReviewer($index)
    {
        return isset($this->reviewer[$index]);
    }

    /**
     * unset reviewer
     *
     * An individiual, organization, or device primarily responsible for review of some aspect of the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReviewer($index)
    {
        unset($this->reviewer[$index]);
    }

    /**
     * Gets as reviewer
     *
     * An individiual, organization, or device primarily responsible for review of some aspect of the content.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * Sets a new reviewer
     *
     * An individiual, organization, or device primarily responsible for review of some aspect of the content.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $reviewer
     * @return self
     */
    public function setReviewer(array $reviewer = null)
    {
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * Adds as endorser
     *
     * An individiual, organization, or device responsible for officially endorsing the content for use in some setting.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $endorser
     */
    public function addToEndorser(\TKusy\Hl7Fhir\R5\ContactDetailType $endorser)
    {
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * isset endorser
     *
     * An individiual, organization, or device responsible for officially endorsing the content for use in some setting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndorser($index)
    {
        return isset($this->endorser[$index]);
    }

    /**
     * unset endorser
     *
     * An individiual, organization, or device responsible for officially endorsing the content for use in some setting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndorser($index)
    {
        unset($this->endorser[$index]);
    }

    /**
     * Gets as endorser
     *
     * An individiual, organization, or device responsible for officially endorsing the content for use in some setting.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
     */
    public function getEndorser()
    {
        return $this->endorser;
    }

    /**
     * Sets a new endorser
     *
     * An individiual, organization, or device responsible for officially endorsing the content for use in some setting.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $endorser
     * @return self
     */
    public function setEndorser(array $endorser = null)
    {
        $this->endorser = $endorser;
        return $this;
    }

    /**
     * Adds as relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportRelatesToType $relatesTo
     */
    public function addToRelatesTo(\TKusy\Hl7Fhir\R5\EvidenceReportRelatesToType $relatesTo)
    {
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * isset relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatesTo($index)
    {
        return isset($this->relatesTo[$index]);
    }

    /**
     * unset relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatesTo($index)
    {
        unset($this->relatesTo[$index]);
    }

    /**
     * Gets as relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceReportRelatesToType[]
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }

    /**
     * Sets a new relatesTo
     *
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportRelatesToType[] $relatesTo
     * @return self
     */
    public function setRelatesTo(array $relatesTo = null)
    {
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * Adds as section
     *
     * The root of the sections that make up the composition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportSectionType $section
     */
    public function addToSection(\TKusy\Hl7Fhir\R5\EvidenceReportSectionType $section)
    {
        $this->section[] = $section;
        return $this;
    }

    /**
     * isset section
     *
     * The root of the sections that make up the composition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSection($index)
    {
        return isset($this->section[$index]);
    }

    /**
     * unset section
     *
     * The root of the sections that make up the composition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSection($index)
    {
        unset($this->section[$index]);
    }

    /**
     * Gets as section
     *
     * The root of the sections that make up the composition.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceReportSectionType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * The root of the sections that make up the composition.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportSectionType[] $section
     * @return self
     */
    public function setSection(array $section = null)
    {
        $this->section = $section;
        return $this;
    }


}

