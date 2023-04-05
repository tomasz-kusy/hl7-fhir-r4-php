<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DocumentReferenceType
 *
 * A reference to a document of any kind for any purpose. While the term “document” implies a more narrow focus, for this resource this "document" encompasses *any* serialized object with a mime-type, it includes formal patient-centric documents (CDA), clinical notes, scanned paper, non-patient specific documents like policy text, as well as a photo, video, or audio recording acquired or used in healthcare. The DocumentReference resource provides metadata about the document so that the document can be discovered and managed. The actual content may be inline base64 encoded data or provided by direct reference.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DocumentReference
 */
class DocumentReferenceType extends DomainResourceType
{

    /**
     * Other business identifiers associated with the document, including version independent identifiers.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * An explicitly assigned identifer of a variation of the content in the DocumentReference.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The status of this document reference.
     *
     * @var \TKusy\Hl7Fhir\R5\DocumentReferenceStatusType $status
     */
    private $status = null;

    /**
     * The status of the underlying document.
     *
     * @var \TKusy\Hl7Fhir\R5\CompositionStatusType $docStatus
     */
    private $docStatus = null;

    /**
     * Imaging modality used. This may include both acquisition and non-acquisition modalities.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $modality
     */
    private $modality = null;

    /**
     * Specifies the particular kind of document referenced (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $context
     */
    private $context = null;

    /**
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $event
     */
    private $event = null;

    /**
     * The anatomic structures included in the document.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $bodySite
     */
    private $bodySite = null;

    /**
     * The kind of facility where the patient was seen.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $facilityType
     */
    private $facilityType = null;

    /**
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $practiceSetting
     */
    private $practiceSetting = null;

    /**
     * The time period over which the service that is described by the document was provided.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * When the document reference was created.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $date
     */
    private $date = null;

    /**
     * Identifies who is responsible for adding the information to the document.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $author
     */
    private $author = null;

    /**
     * A participant who has authenticated the accuracy of the document.
     *
     * @var \TKusy\Hl7Fhir\R5\DocumentReferenceAttesterType[] $attester
     */
    private $attester = null;

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $custodian
     */
    private $custodian = null;

    /**
     * Relationships that this document has with other document references that already exist.
     *
     * @var \TKusy\Hl7Fhir\R5\DocumentReferenceRelatesToType[] $relatesTo
     */
    private $relatesTo = null;

    /**
     * Human-readable description of the source document.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document found at DocumentReference.content.attachment.url. Note that DocumentReference.meta.security contains the security labels of the data elements in DocumentReference, while DocumentReference.securityLabel contains the security labels for the document the reference refers to. The distinction recognizes that the document may contain sensitive information, while the DocumentReference is metadata about the document and thus might not be as sensitive as the document. For example: a psychotherapy episode may contain highly sensitive information, while the metadata may simply indicate that some episode happened.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $securityLabel
     */
    private $securityLabel = null;

    /**
     * The document and format referenced. If there are multiple content element repetitions, these must all represent the same document in different format, or attachment metadata.
     *
     * @var \TKusy\Hl7Fhir\R5\DocumentReferenceContentType[] $content
     */
    private $content = null;

    /**
     * Adds as identifier
     *
     * Other business identifiers associated with the document, including version independent identifiers.
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
     * Other business identifiers associated with the document, including version independent identifiers.
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
     * Other business identifiers associated with the document, including version independent identifiers.
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
     * Other business identifiers associated with the document, including version independent identifiers.
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
     * Other business identifiers associated with the document, including version independent identifiers.
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
     * Gets as version
     *
     * An explicitly assigned identifer of a variation of the content in the DocumentReference.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * An explicitly assigned identifer of a variation of the content in the DocumentReference.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this document reference.
     *
     * @return \TKusy\Hl7Fhir\R5\DocumentReferenceStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of this document reference.
     *
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\DocumentReferenceStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as docStatus
     *
     * The status of the underlying document.
     *
     * @return \TKusy\Hl7Fhir\R5\CompositionStatusType
     */
    public function getDocStatus()
    {
        return $this->docStatus;
    }

    /**
     * Sets a new docStatus
     *
     * The status of the underlying document.
     *
     * @param \TKusy\Hl7Fhir\R5\CompositionStatusType $docStatus
     * @return self
     */
    public function setDocStatus(?\TKusy\Hl7Fhir\R5\CompositionStatusType $docStatus = null)
    {
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * Adds as modality
     *
     * Imaging modality used. This may include both acquisition and non-acquisition modalities.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $modality
     */
    public function addToModality(\TKusy\Hl7Fhir\R5\CodeableConceptType $modality)
    {
        $this->modality[] = $modality;
        return $this;
    }

    /**
     * isset modality
     *
     * Imaging modality used. This may include both acquisition and non-acquisition modalities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModality($index)
    {
        return isset($this->modality[$index]);
    }

    /**
     * unset modality
     *
     * Imaging modality used. This may include both acquisition and non-acquisition modalities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModality($index)
    {
        unset($this->modality[$index]);
    }

    /**
     * Gets as modality
     *
     * Imaging modality used. This may include both acquisition and non-acquisition modalities.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Sets a new modality
     *
     * Imaging modality used. This may include both acquisition and non-acquisition modalities.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $modality
     * @return self
     */
    public function setModality(array $modality = null)
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * Gets as type
     *
     * Specifies the particular kind of document referenced (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
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
     * Specifies the particular kind of document referenced (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
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
     * Adds as category
     *
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Adds as context
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $context
     */
    public function addToContext(\TKusy\Hl7Fhir\R5\ReferenceType $context)
    {
        $this->context[] = $context;
        return $this;
    }

    /**
     * isset context
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContext($index)
    {
        return isset($this->context[$index]);
    }

    /**
     * unset context
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContext($index)
    {
        unset($this->context[$index]);
    }

    /**
     * Gets as context
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Describes the clinical encounter or type of care that the document content is associated with.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $context
     * @return self
     */
    public function setContext(array $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Adds as event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $event
     */
    public function addToEvent(\TKusy\Hl7Fhir\R5\CodeableReferenceType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type Code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as bodySite
     *
     * The anatomic structures included in the document.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * isset bodySite
     *
     * The anatomic structures included in the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodySite($index)
    {
        return isset($this->bodySite[$index]);
    }

    /**
     * unset bodySite
     *
     * The anatomic structures included in the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodySite($index)
    {
        unset($this->bodySite[$index]);
    }

    /**
     * Gets as bodySite
     *
     * The anatomic structures included in the document.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * The anatomic structures included in the document.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as facilityType
     *
     * The kind of facility where the patient was seen.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFacilityType()
    {
        return $this->facilityType;
    }

    /**
     * Sets a new facilityType
     *
     * The kind of facility where the patient was seen.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $facilityType
     * @return self
     */
    public function setFacilityType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $facilityType = null)
    {
        $this->facilityType = $facilityType;
        return $this;
    }

    /**
     * Gets as practiceSetting
     *
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPracticeSetting()
    {
        return $this->practiceSetting;
    }

    /**
     * Sets a new practiceSetting
     *
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $practiceSetting
     * @return self
     */
    public function setPracticeSetting(?\TKusy\Hl7Fhir\R5\CodeableConceptType $practiceSetting = null)
    {
        $this->practiceSetting = $practiceSetting;
        return $this;
    }

    /**
     * Gets as period
     *
     * The time period over which the service that is described by the document was provided.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The time period over which the service that is described by the document was provided.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as date
     *
     * When the document reference was created.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * When the document reference was created.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\InstantType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as author
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    public function addToAuthor(\TKusy\Hl7Fhir\R5\ReferenceType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * Identifies who is responsible for adding the information to the document.
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
     * Identifies who is responsible for adding the information to the document.
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
     * Identifies who is responsible for adding the information to the document.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $author
     * @return self
     */
    public function setAuthor(array $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as attester
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceAttesterType $attester
     */
    public function addToAttester(\TKusy\Hl7Fhir\R5\DocumentReferenceAttesterType $attester)
    {
        $this->attester[] = $attester;
        return $this;
    }

    /**
     * isset attester
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttester($index)
    {
        return isset($this->attester[$index]);
    }

    /**
     * unset attester
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttester($index)
    {
        unset($this->attester[$index]);
    }

    /**
     * Gets as attester
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @return \TKusy\Hl7Fhir\R5\DocumentReferenceAttesterType[]
     */
    public function getAttester()
    {
        return $this->attester;
    }

    /**
     * Sets a new attester
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceAttesterType[] $attester
     * @return self
     */
    public function setAttester(array $attester = null)
    {
        $this->attester = $attester;
        return $this;
    }

    /**
     * Gets as custodian
     *
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * Sets a new custodian
     *
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $custodian
     * @return self
     */
    public function setCustodian(?\TKusy\Hl7Fhir\R5\ReferenceType $custodian = null)
    {
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * Adds as relatesTo
     *
     * Relationships that this document has with other document references that already exist.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceRelatesToType $relatesTo
     */
    public function addToRelatesTo(\TKusy\Hl7Fhir\R5\DocumentReferenceRelatesToType $relatesTo)
    {
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * isset relatesTo
     *
     * Relationships that this document has with other document references that already exist.
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
     * Relationships that this document has with other document references that already exist.
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
     * Relationships that this document has with other document references that already exist.
     *
     * @return \TKusy\Hl7Fhir\R5\DocumentReferenceRelatesToType[]
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }

    /**
     * Sets a new relatesTo
     *
     * Relationships that this document has with other document references that already exist.
     *
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceRelatesToType[] $relatesTo
     * @return self
     */
    public function setRelatesTo(array $relatesTo = null)
    {
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * Gets as description
     *
     * Human-readable description of the source document.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Human-readable description of the source document.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as securityLabel
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the Document found at DocumentReference.content.attachment.url. Note that DocumentReference.meta.security contains the security labels of the data elements in DocumentReference, while DocumentReference.securityLabel contains the security labels for the document the reference refers to. The distinction recognizes that the document may contain sensitive information, while the DocumentReference is metadata about the document and thus might not be as sensitive as the document. For example: a psychotherapy episode may contain highly sensitive information, while the metadata may simply indicate that some episode happened.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $securityLabel
     */
    public function addToSecurityLabel(\TKusy\Hl7Fhir\R5\CodeableConceptType $securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * isset securityLabel
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the Document found at DocumentReference.content.attachment.url. Note that DocumentReference.meta.security contains the security labels of the data elements in DocumentReference, while DocumentReference.securityLabel contains the security labels for the document the reference refers to. The distinction recognizes that the document may contain sensitive information, while the DocumentReference is metadata about the document and thus might not be as sensitive as the document. For example: a psychotherapy episode may contain highly sensitive information, while the metadata may simply indicate that some episode happened.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityLabel($index)
    {
        return isset($this->securityLabel[$index]);
    }

    /**
     * unset securityLabel
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the Document found at DocumentReference.content.attachment.url. Note that DocumentReference.meta.security contains the security labels of the data elements in DocumentReference, while DocumentReference.securityLabel contains the security labels for the document the reference refers to. The distinction recognizes that the document may contain sensitive information, while the DocumentReference is metadata about the document and thus might not be as sensitive as the document. For example: a psychotherapy episode may contain highly sensitive information, while the metadata may simply indicate that some episode happened.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityLabel($index)
    {
        unset($this->securityLabel[$index]);
    }

    /**
     * Gets as securityLabel
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the Document found at DocumentReference.content.attachment.url. Note that DocumentReference.meta.security contains the security labels of the data elements in DocumentReference, while DocumentReference.securityLabel contains the security labels for the document the reference refers to. The distinction recognizes that the document may contain sensitive information, while the DocumentReference is metadata about the document and thus might not be as sensitive as the document. For example: a psychotherapy episode may contain highly sensitive information, while the metadata may simply indicate that some episode happened.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * Sets a new securityLabel
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the Document found at DocumentReference.content.attachment.url. Note that DocumentReference.meta.security contains the security labels of the data elements in DocumentReference, while DocumentReference.securityLabel contains the security labels for the document the reference refers to. The distinction recognizes that the document may contain sensitive information, while the DocumentReference is metadata about the document and thus might not be as sensitive as the document. For example: a psychotherapy episode may contain highly sensitive information, while the metadata may simply indicate that some episode happened.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $securityLabel
     * @return self
     */
    public function setSecurityLabel(array $securityLabel = null)
    {
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Adds as content
     *
     * The document and format referenced. If there are multiple content element repetitions, these must all represent the same document in different format, or attachment metadata.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceContentType $content
     */
    public function addToContent(\TKusy\Hl7Fhir\R5\DocumentReferenceContentType $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * The document and format referenced. If there are multiple content element repetitions, these must all represent the same document in different format, or attachment metadata.
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
     * The document and format referenced. If there are multiple content element repetitions, these must all represent the same document in different format, or attachment metadata.
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
     * The document and format referenced. If there are multiple content element repetitions, these must all represent the same document in different format, or attachment metadata.
     *
     * @return \TKusy\Hl7Fhir\R5\DocumentReferenceContentType[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The document and format referenced. If there are multiple content element repetitions, these must all represent the same document in different format, or attachment metadata.
     *
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceContentType[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }


}

