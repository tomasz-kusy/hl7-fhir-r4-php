<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationPublishedInType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.PublishedIn
 */
class CitationPublishedInType extends BackboneElementType
{

    /**
     * Kind of container (e.g. Periodical, database, or book).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Journal identifiers include ISSN, ISO Abbreviation and NLMuniqueID; Book identifiers include ISBN.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Name of the database or title of the book or journal.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * Name of or resource describing the publisher.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $publisher
     */
    private $publisher = null;

    /**
     * Geographic location of the publisher.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $publisherLocation
     */
    private $publisherLocation = null;

    /**
     * Gets as type
     *
     * Kind of container (e.g. Periodical, database, or book).
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
     * Kind of container (e.g. Periodical, database, or book).
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
     * Adds as identifier
     *
     * Journal identifiers include ISSN, ISO Abbreviation and NLMuniqueID; Book identifiers include ISBN.
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
     * Journal identifiers include ISSN, ISO Abbreviation and NLMuniqueID; Book identifiers include ISBN.
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
     * Journal identifiers include ISSN, ISO Abbreviation and NLMuniqueID; Book identifiers include ISBN.
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
     * Journal identifiers include ISSN, ISO Abbreviation and NLMuniqueID; Book identifiers include ISBN.
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
     * Journal identifiers include ISSN, ISO Abbreviation and NLMuniqueID; Book identifiers include ISBN.
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
     * Name of the database or title of the book or journal.
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
     * Name of the database or title of the book or journal.
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
     * Gets as publisher
     *
     * Name of or resource describing the publisher.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * Name of or resource describing the publisher.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $publisher
     * @return self
     */
    public function setPublisher(?\TKusy\Hl7Fhir\R5\ReferenceType $publisher = null)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Gets as publisherLocation
     *
     * Geographic location of the publisher.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPublisherLocation()
    {
        return $this->publisherLocation;
    }

    /**
     * Sets a new publisherLocation
     *
     * Geographic location of the publisher.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $publisherLocation
     * @return self
     */
    public function setPublisherLocation(?\TKusy\Hl7Fhir\R5\StringType $publisherLocation = null)
    {
        $this->publisherLocation = $publisherLocation;
        return $this;
    }


}

