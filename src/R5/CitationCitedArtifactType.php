<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationCitedArtifactType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.CitedArtifact
 */
class CitationCitedArtifactType extends BackboneElementType
{

    /**
     * A formal identifier that is used to identify the cited artifact when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A formal identifier that is used to identify things closely related to the cited artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $relatedIdentifier
     */
    private $relatedIdentifier = null;

    /**
     * When the cited artifact was accessed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $dateAccessed
     */
    private $dateAccessed = null;

    /**
     * The defined version of the cited artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationVersionType $version
     */
    private $version = null;

    /**
     * The status of the cited artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $currentState
     */
    private $currentState = null;

    /**
     * An effective date or period, historical or future, actual or expected, for a status of the cited artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationStatusDate1Type[] $statusDate
     */
    private $statusDate = null;

    /**
     * The title details of the article or artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationTitleType[] $title
     */
    private $title = null;

    /**
     * The abstract may be used to convey article-contained abstracts, externally-created abstracts, or other descriptive summaries.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationAbstractType[] $abstract
     */
    private $abstract = null;

    /**
     * The component of the article or artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationPartType $part
     */
    private $part = null;

    /**
     * The artifact related to the cited artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationRelatesToType[] $relatesTo
     */
    private $relatesTo = null;

    /**
     * If multiple, used to represent alternative forms of the article that are not separate citations.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationPublicationFormType[] $publicationForm
     */
    private $publicationForm = null;

    /**
     * Used for any URL for the article or artifact cited.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationWebLocationType[] $webLocation
     */
    private $webLocation = null;

    /**
     * The assignment to an organizing scheme.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationClassification1Type[] $classification
     */
    private $classification = null;

    /**
     * This element is used to list authors and other contributors, their contact information, specific contributions, and summary statements.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationContributorshipType $contributorship
     */
    private $contributorship = null;

    /**
     * Any additional information or content for the article or artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify the cited artifact when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify the cited artifact when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify the cited artifact when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify the cited artifact when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify the cited artifact when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify things closely related to the cited artifact.
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
     * A formal identifier that is used to identify things closely related to the cited artifact.
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
     * A formal identifier that is used to identify things closely related to the cited artifact.
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
     * A formal identifier that is used to identify things closely related to the cited artifact.
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
     * A formal identifier that is used to identify things closely related to the cited artifact.
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
     * Gets as dateAccessed
     *
     * When the cited artifact was accessed.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDateAccessed()
    {
        return $this->dateAccessed;
    }

    /**
     * Sets a new dateAccessed
     *
     * When the cited artifact was accessed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $dateAccessed
     * @return self
     */
    public function setDateAccessed(?\TKusy\Hl7Fhir\R5\DateTimeType $dateAccessed = null)
    {
        $this->dateAccessed = $dateAccessed;
        return $this;
    }

    /**
     * Gets as version
     *
     * The defined version of the cited artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationVersionType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The defined version of the cited artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationVersionType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\CitationVersionType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as currentState
     *
     * The status of the cited artifact.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $currentState
     */
    public function addToCurrentState(\TKusy\Hl7Fhir\R5\CodeableConceptType $currentState)
    {
        $this->currentState[] = $currentState;
        return $this;
    }

    /**
     * isset currentState
     *
     * The status of the cited artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrentState($index)
    {
        return isset($this->currentState[$index]);
    }

    /**
     * unset currentState
     *
     * The status of the cited artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrentState($index)
    {
        unset($this->currentState[$index]);
    }

    /**
     * Gets as currentState
     *
     * The status of the cited artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCurrentState()
    {
        return $this->currentState;
    }

    /**
     * Sets a new currentState
     *
     * The status of the cited artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $currentState
     * @return self
     */
    public function setCurrentState(array $currentState = null)
    {
        $this->currentState = $currentState;
        return $this;
    }

    /**
     * Adds as statusDate
     *
     * An effective date or period, historical or future, actual or expected, for a status of the cited artifact.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationStatusDate1Type $statusDate
     */
    public function addToStatusDate(\TKusy\Hl7Fhir\R5\CitationStatusDate1Type $statusDate)
    {
        $this->statusDate[] = $statusDate;
        return $this;
    }

    /**
     * isset statusDate
     *
     * An effective date or period, historical or future, actual or expected, for a status of the cited artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusDate($index)
    {
        return isset($this->statusDate[$index]);
    }

    /**
     * unset statusDate
     *
     * An effective date or period, historical or future, actual or expected, for a status of the cited artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusDate($index)
    {
        unset($this->statusDate[$index]);
    }

    /**
     * Gets as statusDate
     *
     * An effective date or period, historical or future, actual or expected, for a status of the cited artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationStatusDate1Type[]
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Sets a new statusDate
     *
     * An effective date or period, historical or future, actual or expected, for a status of the cited artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationStatusDate1Type[] $statusDate
     * @return self
     */
    public function setStatusDate(array $statusDate = null)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Adds as title
     *
     * The title details of the article or artifact.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationTitleType $title
     */
    public function addToTitle(\TKusy\Hl7Fhir\R5\CitationTitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * The title details of the article or artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * The title details of the article or artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * The title details of the article or artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationTitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The title details of the article or artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationTitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as abstract
     *
     * The abstract may be used to convey article-contained abstracts, externally-created abstracts, or other descriptive summaries.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationAbstractType $abstract
     */
    public function addToAbstract(\TKusy\Hl7Fhir\R5\CitationAbstractType $abstract)
    {
        $this->abstract[] = $abstract;
        return $this;
    }

    /**
     * isset abstract
     *
     * The abstract may be used to convey article-contained abstracts, externally-created abstracts, or other descriptive summaries.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAbstract($index)
    {
        return isset($this->abstract[$index]);
    }

    /**
     * unset abstract
     *
     * The abstract may be used to convey article-contained abstracts, externally-created abstracts, or other descriptive summaries.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAbstract($index)
    {
        unset($this->abstract[$index]);
    }

    /**
     * Gets as abstract
     *
     * The abstract may be used to convey article-contained abstracts, externally-created abstracts, or other descriptive summaries.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationAbstractType[]
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Sets a new abstract
     *
     * The abstract may be used to convey article-contained abstracts, externally-created abstracts, or other descriptive summaries.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationAbstractType[] $abstract
     * @return self
     */
    public function setAbstract(array $abstract = null)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * Gets as part
     *
     * The component of the article or artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationPartType
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Sets a new part
     *
     * The component of the article or artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationPartType $part
     * @return self
     */
    public function setPart(?\TKusy\Hl7Fhir\R5\CitationPartType $part = null)
    {
        $this->part = $part;
        return $this;
    }

    /**
     * Adds as relatesTo
     *
     * The artifact related to the cited artifact.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationRelatesToType $relatesTo
     */
    public function addToRelatesTo(\TKusy\Hl7Fhir\R5\CitationRelatesToType $relatesTo)
    {
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * isset relatesTo
     *
     * The artifact related to the cited artifact.
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
     * The artifact related to the cited artifact.
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
     * The artifact related to the cited artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationRelatesToType[]
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }

    /**
     * Sets a new relatesTo
     *
     * The artifact related to the cited artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationRelatesToType[] $relatesTo
     * @return self
     */
    public function setRelatesTo(array $relatesTo = null)
    {
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * Adds as publicationForm
     *
     * If multiple, used to represent alternative forms of the article that are not separate citations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationPublicationFormType $publicationForm
     */
    public function addToPublicationForm(\TKusy\Hl7Fhir\R5\CitationPublicationFormType $publicationForm)
    {
        $this->publicationForm[] = $publicationForm;
        return $this;
    }

    /**
     * isset publicationForm
     *
     * If multiple, used to represent alternative forms of the article that are not separate citations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPublicationForm($index)
    {
        return isset($this->publicationForm[$index]);
    }

    /**
     * unset publicationForm
     *
     * If multiple, used to represent alternative forms of the article that are not separate citations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPublicationForm($index)
    {
        unset($this->publicationForm[$index]);
    }

    /**
     * Gets as publicationForm
     *
     * If multiple, used to represent alternative forms of the article that are not separate citations.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationPublicationFormType[]
     */
    public function getPublicationForm()
    {
        return $this->publicationForm;
    }

    /**
     * Sets a new publicationForm
     *
     * If multiple, used to represent alternative forms of the article that are not separate citations.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationPublicationFormType[] $publicationForm
     * @return self
     */
    public function setPublicationForm(array $publicationForm = null)
    {
        $this->publicationForm = $publicationForm;
        return $this;
    }

    /**
     * Adds as webLocation
     *
     * Used for any URL for the article or artifact cited.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationWebLocationType $webLocation
     */
    public function addToWebLocation(\TKusy\Hl7Fhir\R5\CitationWebLocationType $webLocation)
    {
        $this->webLocation[] = $webLocation;
        return $this;
    }

    /**
     * isset webLocation
     *
     * Used for any URL for the article or artifact cited.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWebLocation($index)
    {
        return isset($this->webLocation[$index]);
    }

    /**
     * unset webLocation
     *
     * Used for any URL for the article or artifact cited.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWebLocation($index)
    {
        unset($this->webLocation[$index]);
    }

    /**
     * Gets as webLocation
     *
     * Used for any URL for the article or artifact cited.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationWebLocationType[]
     */
    public function getWebLocation()
    {
        return $this->webLocation;
    }

    /**
     * Sets a new webLocation
     *
     * Used for any URL for the article or artifact cited.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationWebLocationType[] $webLocation
     * @return self
     */
    public function setWebLocation(array $webLocation = null)
    {
        $this->webLocation = $webLocation;
        return $this;
    }

    /**
     * Adds as classification
     *
     * The assignment to an organizing scheme.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationClassification1Type $classification
     */
    public function addToClassification(\TKusy\Hl7Fhir\R5\CitationClassification1Type $classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * isset classification
     *
     * The assignment to an organizing scheme.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassification($index)
    {
        return isset($this->classification[$index]);
    }

    /**
     * unset classification
     *
     * The assignment to an organizing scheme.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassification($index)
    {
        unset($this->classification[$index]);
    }

    /**
     * Gets as classification
     *
     * The assignment to an organizing scheme.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationClassification1Type[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * The assignment to an organizing scheme.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationClassification1Type[] $classification
     * @return self
     */
    public function setClassification(array $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Gets as contributorship
     *
     * This element is used to list authors and other contributors, their contact information, specific contributions, and summary statements.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationContributorshipType
     */
    public function getContributorship()
    {
        return $this->contributorship;
    }

    /**
     * Sets a new contributorship
     *
     * This element is used to list authors and other contributors, their contact information, specific contributions, and summary statements.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationContributorshipType $contributorship
     * @return self
     */
    public function setContributorship(?\TKusy\Hl7Fhir\R5\CitationContributorshipType $contributorship = null)
    {
        $this->contributorship = $contributorship;
        return $this;
    }

    /**
     * Adds as note
     *
     * Any additional information or content for the article or artifact.
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
     * Any additional information or content for the article or artifact.
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
     * Any additional information or content for the article or artifact.
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
     * Any additional information or content for the article or artifact.
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
     * Any additional information or content for the article or artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

