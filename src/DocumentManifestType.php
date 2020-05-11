<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DocumentManifestType
 *
 * A collection of documents compiled for a purpose together with metadata that applies to the collection.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DocumentManifest
 */
class DocumentManifestType extends DomainResourceType
{

    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $masterIdentifier
     */
    private $masterIdentifier = null;

    /**
     * Other identifiers associated with the document manifest, including version independent identifiers.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of this document manifest.
     *
     * @var \TKusy\Hl7FhirR4\DocumentReferenceStatusType $status
     */
    private $status = null;

    /**
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $author
     */
    private $author = null;

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $recipient
     */
    private $recipient = null;

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     *
     * @var \TKusy\Hl7FhirR4\UriType $source
     */
    private $source = null;

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The list of Resources that consist of the parts of this manifest.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $content
     */
    private $content = null;

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @var \TKusy\Hl7FhirR4\DocumentManifestRelatedType[] $related
     */
    private $related = null;

    /**
     * Gets as masterIdentifier
     *
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
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
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
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
     * Other identifiers associated with the document manifest, including version independent identifiers.
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
     * Other identifiers associated with the document manifest, including version independent identifiers.
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
     * Other identifiers associated with the document manifest, including version independent identifiers.
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
     * Other identifiers associated with the document manifest, including version independent identifiers.
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
     * Other identifiers associated with the document manifest, including version independent identifiers.
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
     * The status of this document manifest.
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
     * The status of this document manifest.
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
     * Gets as type
     *
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
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
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
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
     * Gets as subject
     *
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
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
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
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
     * Gets as created
     *
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7FhirR4\DateTimeType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Adds as author
     *
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
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
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
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
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
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
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
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
     * Identifies who is the author of the manifest. Manifest author is not necessarly the author of the references included.
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
     * Adds as recipient
     *
     * A patient, practitioner, or organization for which this set of documents is intended.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $recipient
     */
    public function addToRecipient(\TKusy\Hl7FhirR4\ReferenceType $recipient)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * isset recipient
     *
     * A patient, practitioner, or organization for which this set of documents is intended.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecipient($index)
    {
        return isset($this->recipient[$index]);
    }

    /**
     * unset recipient
     *
     * A patient, practitioner, or organization for which this set of documents is intended.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecipient($index)
    {
        unset($this->recipient[$index]);
    }

    /**
     * Gets as recipient
     *
     * A patient, practitioner, or organization for which this set of documents is intended.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * A patient, practitioner, or organization for which this set of documents is intended.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $recipient
     * @return self
     */
    public function setRecipient(array $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as source
     *
     * Identifies the source system, application, or software that produced the document manifest.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Identifies the source system, application, or software that produced the document manifest.
     *
     * @param \TKusy\Hl7FhirR4\UriType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7FhirR4\UriType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as description
     *
     * Human-readable description of the source document. This is sometimes known as the "title".
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Human-readable description of the source document. This is sometimes known as the "title".
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as content
     *
     * The list of Resources that consist of the parts of this manifest.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $content
     */
    public function addToContent(\TKusy\Hl7FhirR4\ReferenceType $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * The list of Resources that consist of the parts of this manifest.
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
     * The list of Resources that consist of the parts of this manifest.
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
     * The list of Resources that consist of the parts of this manifest.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The list of Resources that consist of the parts of this manifest.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Adds as related
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DocumentManifestRelatedType $related
     */
    public function addToRelated(\TKusy\Hl7FhirR4\DocumentManifestRelatedType $related)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * isset related
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelated($index)
    {
        return isset($this->related[$index]);
    }

    /**
     * unset related
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelated($index)
    {
        unset($this->related[$index]);
    }

    /**
     * Gets as related
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @return \TKusy\Hl7FhirR4\DocumentManifestRelatedType[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Sets a new related
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @param \TKusy\Hl7FhirR4\DocumentManifestRelatedType[] $related
     * @return self
     */
    public function setRelated(array $related)
    {
        $this->related = $related;
        return $this;
    }


}

