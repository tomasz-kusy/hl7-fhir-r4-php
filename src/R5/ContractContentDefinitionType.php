<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ContractContentDefinitionType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.ContentDefinition
 */
class ContractContentDefinitionType extends BackboneElementType
{

    /**
     * Precusory content structure and use, i.e., a boilerplate, template, application for a contract such as an insurance policy or benefits under a program, e.g., workers compensation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Detailed Precusory content type.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subType
     */
    private $subType = null;

    /**
     * The individual or organization that published the Contract precursor content.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $publisher
     */
    private $publisher = null;

    /**
     * The date (and optionally time) when the contract was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the contract changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $publicationDate
     */
    private $publicationDate = null;

    /**
     * amended | appended | cancelled | disputed | entered-in-error | executable +.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractResourcePublicationStatusCodesType $publicationStatus
     */
    private $publicationStatus = null;

    /**
     * A copyright statement relating to Contract precursor content. Copyright statements are generally legal restrictions on the use and publishing of the Contract precursor content.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * Gets as type
     *
     * Precusory content structure and use, i.e., a boilerplate, template, application for a contract such as an insurance policy or benefits under a program, e.g., workers compensation.
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
     * Precusory content structure and use, i.e., a boilerplate, template, application for a contract such as an insurance policy or benefits under a program, e.g., workers compensation.
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
     * Gets as subType
     *
     * Detailed Precusory content type.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Sets a new subType
     *
     * Detailed Precusory content type.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subType
     * @return self
     */
    public function setSubType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subType = null)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * Gets as publisher
     *
     * The individual or organization that published the Contract precursor content.
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
     * The individual or organization that published the Contract precursor content.
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
     * Gets as publicationDate
     *
     * The date (and optionally time) when the contract was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the contract changes.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Sets a new publicationDate
     *
     * The date (and optionally time) when the contract was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the contract changes.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $publicationDate
     * @return self
     */
    public function setPublicationDate(?\TKusy\Hl7Fhir\R5\DateTimeType $publicationDate = null)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * Gets as publicationStatus
     *
     * amended | appended | cancelled | disputed | entered-in-error | executable +.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractResourcePublicationStatusCodesType
     */
    public function getPublicationStatus()
    {
        return $this->publicationStatus;
    }

    /**
     * Sets a new publicationStatus
     *
     * amended | appended | cancelled | disputed | entered-in-error | executable +.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractResourcePublicationStatusCodesType $publicationStatus
     * @return self
     */
    public function setPublicationStatus(\TKusy\Hl7Fhir\R5\ContractResourcePublicationStatusCodesType $publicationStatus)
    {
        $this->publicationStatus = $publicationStatus;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * A copyright statement relating to Contract precursor content. Copyright statements are generally legal restrictions on the use and publishing of the Contract precursor content.
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
     * A copyright statement relating to Contract precursor content. Copyright statements are generally legal restrictions on the use and publishing of the Contract precursor content.
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

