<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationPublicationFormType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.PublicationForm
 */
class CitationPublicationFormType extends BackboneElementType
{

    /**
     * The collection the cited article or artifact is published in.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationPublishedInType $publishedIn
     */
    private $publishedIn = null;

    /**
     * Describes the form of the medium cited. Common codes are "Internet" or "Print". The CitedMedium value set has 6 codes. The codes internet, print, and offline-digital-storage are the common codes for a typical publication form, though internet and print are more common for study citations. Three additional codes (each appending one of the primary codes with "-without-issue" are used for situations when a study is published both within an issue (of a periodical release as commonly done for journals) AND is published separately from the issue (as commonly done with early online publication), to represent specific identification of the publication form not associated with the issue.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $citedMedium
     */
    private $citedMedium = null;

    /**
     * Volume number of journal or other collection in which the article is published.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $volume
     */
    private $volume = null;

    /**
     * Issue, part or supplement of journal or other collection in which the article is published.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $issue
     */
    private $issue = null;

    /**
     * The date the article was added to the database, or the date the article was released.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $articleDate
     */
    private $articleDate = null;

    /**
     * Text representation of the date on which the issue of the cited artifact was published.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $publicationDateText
     */
    private $publicationDateText = null;

    /**
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $publicationDateSeason
     */
    private $publicationDateSeason = null;

    /**
     * The date the article was last revised or updated in the database.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $lastRevisionDate
     */
    private $lastRevisionDate = null;

    /**
     * The language or languages in which this form of the article is published.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $language
     */
    private $language = null;

    /**
     * Entry number or identifier for inclusion in a database.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $accessionNumber
     */
    private $accessionNumber = null;

    /**
     * Used for full display of pagination.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $pageString
     */
    private $pageString = null;

    /**
     * Used for isolated representation of first page.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $firstPage
     */
    private $firstPage = null;

    /**
     * Used for isolated representation of last page.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $lastPage
     */
    private $lastPage = null;

    /**
     * Actual or approximate number of pages or screens. Distinct from reporting the page numbers.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $pageCount
     */
    private $pageCount = null;

    /**
     * Copyright notice for the full article or artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * Gets as publishedIn
     *
     * The collection the cited article or artifact is published in.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationPublishedInType
     */
    public function getPublishedIn()
    {
        return $this->publishedIn;
    }

    /**
     * Sets a new publishedIn
     *
     * The collection the cited article or artifact is published in.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationPublishedInType $publishedIn
     * @return self
     */
    public function setPublishedIn(?\TKusy\Hl7Fhir\R5\CitationPublishedInType $publishedIn = null)
    {
        $this->publishedIn = $publishedIn;
        return $this;
    }

    /**
     * Gets as citedMedium
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print". The CitedMedium value set has 6 codes. The codes internet, print, and offline-digital-storage are the common codes for a typical publication form, though internet and print are more common for study citations. Three additional codes (each appending one of the primary codes with "-without-issue" are used for situations when a study is published both within an issue (of a periodical release as commonly done for journals) AND is published separately from the issue (as commonly done with early online publication), to represent specific identification of the publication form not associated with the issue.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCitedMedium()
    {
        return $this->citedMedium;
    }

    /**
     * Sets a new citedMedium
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print". The CitedMedium value set has 6 codes. The codes internet, print, and offline-digital-storage are the common codes for a typical publication form, though internet and print are more common for study citations. Three additional codes (each appending one of the primary codes with "-without-issue" are used for situations when a study is published both within an issue (of a periodical release as commonly done for journals) AND is published separately from the issue (as commonly done with early online publication), to represent specific identification of the publication form not associated with the issue.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $citedMedium
     * @return self
     */
    public function setCitedMedium(?\TKusy\Hl7Fhir\R5\CodeableConceptType $citedMedium = null)
    {
        $this->citedMedium = $citedMedium;
        return $this;
    }

    /**
     * Gets as volume
     *
     * Volume number of journal or other collection in which the article is published.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets a new volume
     *
     * Volume number of journal or other collection in which the article is published.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $volume
     * @return self
     */
    public function setVolume(?\TKusy\Hl7Fhir\R5\StringType $volume = null)
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * Gets as issue
     *
     * Issue, part or supplement of journal or other collection in which the article is published.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Sets a new issue
     *
     * Issue, part or supplement of journal or other collection in which the article is published.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $issue
     * @return self
     */
    public function setIssue(?\TKusy\Hl7Fhir\R5\StringType $issue = null)
    {
        $this->issue = $issue;
        return $this;
    }

    /**
     * Gets as articleDate
     *
     * The date the article was added to the database, or the date the article was released.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getArticleDate()
    {
        return $this->articleDate;
    }

    /**
     * Sets a new articleDate
     *
     * The date the article was added to the database, or the date the article was released.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $articleDate
     * @return self
     */
    public function setArticleDate(?\TKusy\Hl7Fhir\R5\DateTimeType $articleDate = null)
    {
        $this->articleDate = $articleDate;
        return $this;
    }

    /**
     * Gets as publicationDateText
     *
     * Text representation of the date on which the issue of the cited artifact was published.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPublicationDateText()
    {
        return $this->publicationDateText;
    }

    /**
     * Sets a new publicationDateText
     *
     * Text representation of the date on which the issue of the cited artifact was published.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $publicationDateText
     * @return self
     */
    public function setPublicationDateText(?\TKusy\Hl7Fhir\R5\StringType $publicationDateText = null)
    {
        $this->publicationDateText = $publicationDateText;
        return $this;
    }

    /**
     * Gets as publicationDateSeason
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPublicationDateSeason()
    {
        return $this->publicationDateSeason;
    }

    /**
     * Sets a new publicationDateSeason
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $publicationDateSeason
     * @return self
     */
    public function setPublicationDateSeason(?\TKusy\Hl7Fhir\R5\StringType $publicationDateSeason = null)
    {
        $this->publicationDateSeason = $publicationDateSeason;
        return $this;
    }

    /**
     * Gets as lastRevisionDate
     *
     * The date the article was last revised or updated in the database.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getLastRevisionDate()
    {
        return $this->lastRevisionDate;
    }

    /**
     * Sets a new lastRevisionDate
     *
     * The date the article was last revised or updated in the database.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $lastRevisionDate
     * @return self
     */
    public function setLastRevisionDate(?\TKusy\Hl7Fhir\R5\DateTimeType $lastRevisionDate = null)
    {
        $this->lastRevisionDate = $lastRevisionDate;
        return $this;
    }

    /**
     * Adds as language
     *
     * The language or languages in which this form of the article is published.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     */
    public function addToLanguage(\TKusy\Hl7Fhir\R5\CodeableConceptType $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * The language or languages in which this form of the article is published.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * The language or languages in which this form of the article is published.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * The language or languages in which this form of the article is published.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The language or languages in which this form of the article is published.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $language
     * @return self
     */
    public function setLanguage(array $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as accessionNumber
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAccessionNumber()
    {
        return $this->accessionNumber;
    }

    /**
     * Sets a new accessionNumber
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $accessionNumber
     * @return self
     */
    public function setAccessionNumber(?\TKusy\Hl7Fhir\R5\StringType $accessionNumber = null)
    {
        $this->accessionNumber = $accessionNumber;
        return $this;
    }

    /**
     * Gets as pageString
     *
     * Used for full display of pagination.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPageString()
    {
        return $this->pageString;
    }

    /**
     * Sets a new pageString
     *
     * Used for full display of pagination.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $pageString
     * @return self
     */
    public function setPageString(?\TKusy\Hl7Fhir\R5\StringType $pageString = null)
    {
        $this->pageString = $pageString;
        return $this;
    }

    /**
     * Gets as firstPage
     *
     * Used for isolated representation of first page.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getFirstPage()
    {
        return $this->firstPage;
    }

    /**
     * Sets a new firstPage
     *
     * Used for isolated representation of first page.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $firstPage
     * @return self
     */
    public function setFirstPage(?\TKusy\Hl7Fhir\R5\StringType $firstPage = null)
    {
        $this->firstPage = $firstPage;
        return $this;
    }

    /**
     * Gets as lastPage
     *
     * Used for isolated representation of last page.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLastPage()
    {
        return $this->lastPage;
    }

    /**
     * Sets a new lastPage
     *
     * Used for isolated representation of last page.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $lastPage
     * @return self
     */
    public function setLastPage(?\TKusy\Hl7Fhir\R5\StringType $lastPage = null)
    {
        $this->lastPage = $lastPage;
        return $this;
    }

    /**
     * Gets as pageCount
     *
     * Actual or approximate number of pages or screens. Distinct from reporting the page numbers.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * Sets a new pageCount
     *
     * Actual or approximate number of pages or screens. Distinct from reporting the page numbers.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $pageCount
     * @return self
     */
    public function setPageCount(?\TKusy\Hl7Fhir\R5\StringType $pageCount = null)
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * Copyright notice for the full article or artifact.
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
     * Copyright notice for the full article or artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     * @return self
     */
    public function setCopyright(?\TKusy\Hl7Fhir\R5\MarkdownType $copyright = null)
    {
        $this->copyright = $copyright;
        return $this;
    }


}

