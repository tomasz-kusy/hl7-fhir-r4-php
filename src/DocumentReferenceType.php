<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DocumentReferenceType
 *
 * A reference to a document of any kind for any purpose. Provides metadata about the document so that the document can be discovered and managed. The scope of a document is any seralized object with a mime-type, so includes formal patient centric documents (CDA), cliical notes, scanned paper, and non-patient specific documents like policy text.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: DocumentReference
 */
class DocumentReferenceType extends DomainResourceType
{

    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $masterIdentifier
     */
    private $masterIdentifier = null;

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The status of this document reference.
     *
     * @var \TKusy\Hl7FhirR4\DocumentReferenceStatusType $status
     */
    private $status = null;

    /**
     * The status of the underlying document.
     *
     * @var \TKusy\Hl7FhirR4\CompositionStatusType $docStatus
     */
    private $docStatus = null;

    /**
     * Specifies the particular kind of document referenced (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * When the document reference was created.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $date
     */
    private $date = null;

    /**
     * Identifies who is responsible for adding the information to the document.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $author
     */
    private $author = [
        
    ];

    /**
     * Which person or organization authenticates that this document is valid.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $authenticator
     */
    private $authenticator = null;

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $custodian
     */
    private $custodian = null;

    /**
     * Relationships that this document has with other document references that already exist.
     *
     * @var \TKusy\Hl7FhirR4\DocumentReferenceRelatesToType[] $relatesTo
     */
    private $relatesTo = [
        
    ];

    /**
     * Human-readable description of the source document.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $securityLabel
     */
    private $securityLabel = [
        
    ];

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     *
     * @var \TKusy\Hl7FhirR4\DocumentReferenceContentType[] $content
     */
    private $content = [
        
    ];

    /**
     * The clinical context in which the document was prepared.
     *
     * @var \TKusy\Hl7FhirR4\DocumentReferenceContextType $context
     */
    private $context = null;

    /**
     * Gets as masterIdentifier
     *
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }

    /**
     * Sets a new masterIdentifier
     *
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $masterIdentifier
     * @return self
     */
    public function setMasterIdentifier(\TKusy\Hl7FhirR4\IdentifierType $masterIdentifier)
    {
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * Other identifiers associated with the document, including version independent identifiers.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Other identifiers associated with the document, including version independent identifiers.
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
     * Other identifiers associated with the document, including version independent identifiers.
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
     * Other identifiers associated with the document, including version independent identifiers.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Other identifiers associated with the document, including version independent identifiers.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this document reference.
     *
     * @return \TKusy\Hl7FhirR4\DocumentReferenceStatusType
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
     * @param \TKusy\Hl7FhirR4\DocumentReferenceStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\DocumentReferenceStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as docStatus
     *
     * The status of the underlying document.
     *
     * @return \TKusy\Hl7FhirR4\CompositionStatusType
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
     * @param \TKusy\Hl7FhirR4\CompositionStatusType $docStatus
     * @return self
     */
    public function setDocStatus(\TKusy\Hl7FhirR4\CompositionStatusType $docStatus)
    {
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * Gets as type
     *
     * Specifies the particular kind of document referenced (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as date
     *
     * When the document reference was created.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
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
     * @param \TKusy\Hl7FhirR4\InstantType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\InstantType $date)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $author
     */
    public function addToAuthor(\TKusy\Hl7FhirR4\ReferenceType $author)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $author
     * @return self
     */
    public function setAuthor(array $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as authenticator
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * Sets a new authenticator
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $authenticator
     * @return self
     */
    public function setAuthenticator(\TKusy\Hl7FhirR4\ReferenceType $authenticator)
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Gets as custodian
     *
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $custodian
     * @return self
     */
    public function setCustodian(\TKusy\Hl7FhirR4\ReferenceType $custodian)
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
     * @param \TKusy\Hl7FhirR4\DocumentReferenceRelatesToType $relatesTo
     */
    public function addToRelatesTo(\TKusy\Hl7FhirR4\DocumentReferenceRelatesToType $relatesTo)
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
     * @return \TKusy\Hl7FhirR4\DocumentReferenceRelatesToType[]
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
     * @param \TKusy\Hl7FhirR4\DocumentReferenceRelatesToType[] $relatesTo
     * @return self
     */
    public function setRelatesTo(array $relatesTo)
    {
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * Gets as description
     *
     * Human-readable description of the source document.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as securityLabel
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $securityLabel
     */
    public function addToSecurityLabel(\TKusy\Hl7FhirR4\CodeableConceptType $securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * isset securityLabel
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
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
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
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
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * Sets a new securityLabel
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $securityLabel
     * @return self
     */
    public function setSecurityLabel(array $securityLabel)
    {
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Adds as content
     *
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DocumentReferenceContentType $content
     */
    public function addToContent(\TKusy\Hl7FhirR4\DocumentReferenceContentType $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
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
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
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
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     *
     * @return \TKusy\Hl7FhirR4\DocumentReferenceContentType[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     *
     * @param \TKusy\Hl7FhirR4\DocumentReferenceContentType[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as context
     *
     * The clinical context in which the document was prepared.
     *
     * @return \TKusy\Hl7FhirR4\DocumentReferenceContextType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * The clinical context in which the document was prepared.
     *
     * @param \TKusy\Hl7FhirR4\DocumentReferenceContextType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7FhirR4\DocumentReferenceContextType $context)
    {
        $this->context = $context;
        return $this;
    }


}

