<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CompositionType
 *
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Composition
 */
class CompositionType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this Composition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this Composition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the Composition is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * An explicitly assigned identifer of a variation of the content in the Composition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     *
     * @var \TKusy\Hl7Fhir\R5\CompositionStatusType $status
     */
    private $status = null;

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     */
    private $subject = null;

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate Composition instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $author
     */
    private $author = null;

    /**
     * A natural language name identifying the {{title}}. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Official human-readable label for the composition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * For any additional notes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @var \TKusy\Hl7Fhir\R5\CompositionAttesterType[] $attester
     */
    private $attester = null;

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $custodian
     */
    private $custodian = null;

    /**
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatesTo
     */
    private $relatesTo = null;

    /**
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @var \TKusy\Hl7Fhir\R5\CompositionEventType[] $event
     */
    private $event = null;

    /**
     * The root of the sections that make up the composition.
     *
     * @var \TKusy\Hl7Fhir\R5\CompositionSectionType[] $section
     */
    private $section = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this Composition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this Composition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the Composition is stored on different servers.
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
     * An absolute URI that is used to identify this Composition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this Composition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the Composition is stored on different servers.
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
     * Adds as identifier
     *
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
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
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
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
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
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
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
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
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
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
     * An explicitly assigned identifer of a variation of the content in the Composition.
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
     * An explicitly assigned identifer of a variation of the content in the Composition.
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
     * Gets as status
     *
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     *
     * @return \TKusy\Hl7Fhir\R5\CompositionStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     *
     * @param \TKusy\Hl7Fhir\R5\CompositionStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\CompositionStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
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
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as category
     *
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
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
     * Adds as subject
     *
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * Describes the clinical encounter or type of care this documentation is associated with.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * Describes the clinical encounter or type of care this documentation is associated with.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as date
     *
     * The composition editing time, when the composition was last logically changed by the author.
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
     * The composition editing time, when the composition was last logically changed by the author.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7Fhir\R5\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate Composition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate Composition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate Composition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate Composition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate Composition instances.
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
     * Adds as author
     *
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
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
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
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
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
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
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
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
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $author
     * @return self
     */
    public function setAuthor(array $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as name
     *
     * A natural language name identifying the {{title}}. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A natural language name identifying the {{title}}. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * Official human-readable label for the composition.
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
     * Official human-readable label for the composition.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7Fhir\R5\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as note
     *
     * For any additional notes.
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
     * For any additional notes.
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
     * For any additional notes.
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
     * For any additional notes.
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
     * For any additional notes.
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
     * Adds as attester
     *
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CompositionAttesterType $attester
     */
    public function addToAttester(\TKusy\Hl7Fhir\R5\CompositionAttesterType $attester)
    {
        $this->attester[] = $attester;
        return $this;
    }

    /**
     * isset attester
     *
     * A participant who has attested to the accuracy of the composition/document.
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
     * A participant who has attested to the accuracy of the composition/document.
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
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @return \TKusy\Hl7Fhir\R5\CompositionAttesterType[]
     */
    public function getAttester()
    {
        return $this->attester;
    }

    /**
     * Sets a new attester
     *
     * A participant who has attested to the accuracy of the composition/document.
     *
     * @param \TKusy\Hl7Fhir\R5\CompositionAttesterType[] $attester
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
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
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
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
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
     * Relationships that this composition has with other compositions or documents that already exist.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $relatesTo
     */
    public function addToRelatesTo(\TKusy\Hl7Fhir\R5\RelatedArtifactType $relatesTo)
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
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType[]
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
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatesTo
     * @return self
     */
    public function setRelatesTo(array $relatesTo = null)
    {
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * Adds as event
     *
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CompositionEventType $event
     */
    public function addToEvent(\TKusy\Hl7Fhir\R5\CompositionEventType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
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
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
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
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @return \TKusy\Hl7Fhir\R5\CompositionEventType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     *
     * @param \TKusy\Hl7Fhir\R5\CompositionEventType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as section
     *
     * The root of the sections that make up the composition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CompositionSectionType $section
     */
    public function addToSection(\TKusy\Hl7Fhir\R5\CompositionSectionType $section)
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
     * @return \TKusy\Hl7Fhir\R5\CompositionSectionType[]
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
     * @param \TKusy\Hl7Fhir\R5\CompositionSectionType[] $section
     * @return self
     */
    public function setSection(array $section = null)
    {
        $this->section = $section;
        return $this;
    }


}

