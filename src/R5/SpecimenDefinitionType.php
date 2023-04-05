<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenDefinitionType
 *
 * A kind of specimen with associated set of requirements.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SpecimenDefinition
 */
class SpecimenDefinitionType extends MetadataResourceType
{

    /**
     * An absolute URL that is used to identify this SpecimenDefinition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this SpecimenDefinition is (or will be) published. The URL SHOULD include the major version of the SpecimenDefinition. For more information see Technical and Business Versions.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A business identifier assigned to this SpecimenDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the SpecimenDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the SpecimenDefinition author and is not expected to be globally unique.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $versionAlgorithmString
     */
    private $versionAlgorithmString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $versionAlgorithmCoding
     */
    private $versionAlgorithmCoding = null;

    /**
     * A natural language name identifying the {{title}}. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the SpecimenDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The canonical URL pointing to another FHIR-defined SpecimenDefinition that is adhered to in whole or in part by this definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $derivedFromCanonical
     */
    private $derivedFromCanonical = null;

    /**
     * The URL pointing to an externally-defined type of specimen, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $derivedFromUri
     */
    private $derivedFromUri = null;

    /**
     * The current state of theSpecimenDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A flag to indicate that this SpecimenDefinition is not authored for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subjectReference
     */
    private $subjectReference = null;

    /**
     * For draft definitions, indicates the date of initial creation. For active definitions, represents the date of activation. For withdrawn definitions, indicates the date of withdrawal.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * Helps establish the "authority/credibility" of the SpecimenDefinition. May also allow for contact.
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
     * A free text natural language description of the SpecimenDefinition from the consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of specimen definitions.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A jurisdiction in which the SpecimenDefinition is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explains why this SpecimeDefinition is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * Copyright statement relating to the SpecimenDefinition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the SpecimenDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * A short string (<50 characters), suitable for inclusion in a page footer that identifies the copyright holder, effective period, and optionally whether rights are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $copyrightLabel
     */
    private $copyrightLabel = null;

    /**
     * The date on which the asset content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $approvalDate
     */
    private $approvalDate = null;

    /**
     * The date on which the asset content was last reviewed. Review happens periodically after that, but doesn't change the original approval date.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $lastReviewDate
     */
    private $lastReviewDate = null;

    /**
     * The period during which the SpecimenDefinition content was or is planned to be effective.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * The kind of material to be collected.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $typeCollected
     */
    private $typeCollected = null;

    /**
     * Preparation of the patient for specimen collection.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $patientPreparation
     */
    private $patientPreparation = null;

    /**
     * Time aspect of specimen collection (duration or offset).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $timeAspect
     */
    private $timeAspect = null;

    /**
     * The action to be performed for collecting the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $collection
     */
    private $collection = null;

    /**
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenDefinitionTypeTestedType[] $typeTested
     */
    private $typeTested = null;

    /**
     * Gets as url
     *
     * An absolute URL that is used to identify this SpecimenDefinition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this SpecimenDefinition is (or will be) published. The URL SHOULD include the major version of the SpecimenDefinition. For more information see Technical and Business Versions.
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
     * An absolute URL that is used to identify this SpecimenDefinition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this SpecimenDefinition is (or will be) published. The URL SHOULD include the major version of the SpecimenDefinition. For more information see Technical and Business Versions.
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
     * Gets as identifier
     *
     * A business identifier assigned to this SpecimenDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A business identifier assigned to this SpecimenDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as version
     *
     * The identifier that is used to identify this version of the SpecimenDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the SpecimenDefinition author and is not expected to be globally unique.
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
     * The identifier that is used to identify this version of the SpecimenDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the SpecimenDefinition author and is not expected to be globally unique.
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
     * Gets as versionAlgorithmString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersionAlgorithmString()
    {
        return $this->versionAlgorithmString;
    }

    /**
     * Sets a new versionAlgorithmString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $versionAlgorithmString
     * @return self
     */
    public function setVersionAlgorithmString(?\TKusy\Hl7Fhir\R5\StringType $versionAlgorithmString = null)
    {
        $this->versionAlgorithmString = $versionAlgorithmString;
        return $this;
    }

    /**
     * Gets as versionAlgorithmCoding
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getVersionAlgorithmCoding()
    {
        return $this->versionAlgorithmCoding;
    }

    /**
     * Sets a new versionAlgorithmCoding
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $versionAlgorithmCoding
     * @return self
     */
    public function setVersionAlgorithmCoding(?\TKusy\Hl7Fhir\R5\CodingType $versionAlgorithmCoding = null)
    {
        $this->versionAlgorithmCoding = $versionAlgorithmCoding;
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
     * A short, descriptive, user-friendly title for the SpecimenDefinition.
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
     * A short, descriptive, user-friendly title for the SpecimenDefinition.
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
     * Adds as derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined SpecimenDefinition that is adhered to in whole or in part by this definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $derivedFromCanonical
     */
    public function addToDerivedFromCanonical(\TKusy\Hl7Fhir\R5\CanonicalType $derivedFromCanonical)
    {
        $this->derivedFromCanonical[] = $derivedFromCanonical;
        return $this;
    }

    /**
     * isset derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined SpecimenDefinition that is adhered to in whole or in part by this definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFromCanonical($index)
    {
        return isset($this->derivedFromCanonical[$index]);
    }

    /**
     * unset derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined SpecimenDefinition that is adhered to in whole or in part by this definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFromCanonical($index)
    {
        unset($this->derivedFromCanonical[$index]);
    }

    /**
     * Gets as derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined SpecimenDefinition that is adhered to in whole or in part by this definition.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getDerivedFromCanonical()
    {
        return $this->derivedFromCanonical;
    }

    /**
     * Sets a new derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined SpecimenDefinition that is adhered to in whole or in part by this definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $derivedFromCanonical
     * @return self
     */
    public function setDerivedFromCanonical(array $derivedFromCanonical = null)
    {
        $this->derivedFromCanonical = $derivedFromCanonical;
        return $this;
    }

    /**
     * Adds as derivedFromUri
     *
     * The URL pointing to an externally-defined type of specimen, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $derivedFromUri
     */
    public function addToDerivedFromUri(\TKusy\Hl7Fhir\R5\UriType $derivedFromUri)
    {
        $this->derivedFromUri[] = $derivedFromUri;
        return $this;
    }

    /**
     * isset derivedFromUri
     *
     * The URL pointing to an externally-defined type of specimen, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFromUri($index)
    {
        return isset($this->derivedFromUri[$index]);
    }

    /**
     * unset derivedFromUri
     *
     * The URL pointing to an externally-defined type of specimen, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFromUri($index)
    {
        unset($this->derivedFromUri[$index]);
    }

    /**
     * Gets as derivedFromUri
     *
     * The URL pointing to an externally-defined type of specimen, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getDerivedFromUri()
    {
        return $this->derivedFromUri;
    }

    /**
     * Sets a new derivedFromUri
     *
     * The URL pointing to an externally-defined type of specimen, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $derivedFromUri
     * @return self
     */
    public function setDerivedFromUri(array $derivedFromUri = null)
    {
        $this->derivedFromUri = $derivedFromUri;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of theSpecimenDefinition.
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
     * The current state of theSpecimenDefinition.
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
     * Gets as experimental
     *
     * A flag to indicate that this SpecimenDefinition is not authored for genuine usage.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Sets a new experimental
     *
     * A flag to indicate that this SpecimenDefinition is not authored for genuine usage.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $experimental
     * @return self
     */
    public function setExperimental(?\TKusy\Hl7Fhir\R5\BooleanType $experimental = null)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * Gets as subjectCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * Sets a new subjectCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept
     * @return self
     */
    public function setSubjectCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept = null)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * Gets as subjectReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * Sets a new subjectReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subjectReference
     * @return self
     */
    public function setSubjectReference(?\TKusy\Hl7Fhir\R5\ReferenceType $subjectReference = null)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * Gets as date
     *
     * For draft definitions, indicates the date of initial creation. For active definitions, represents the date of activation. For withdrawn definitions, indicates the date of withdrawal.
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
     * For draft definitions, indicates the date of initial creation. For active definitions, represents the date of activation. For withdrawn definitions, indicates the date of withdrawal.
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
     * Gets as publisher
     *
     * Helps establish the "authority/credibility" of the SpecimenDefinition. May also allow for contact.
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
     * Helps establish the "authority/credibility" of the SpecimenDefinition. May also allow for contact.
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
     * Gets as description
     *
     * A free text natural language description of the SpecimenDefinition from the consumer's perspective.
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
     * A free text natural language description of the SpecimenDefinition from the consumer's perspective.
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
     * Adds as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of specimen definitions.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of specimen definitions.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of specimen definitions.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of specimen definitions.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of specimen definitions.
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
     * Adds as jurisdiction
     *
     * A jurisdiction in which the SpecimenDefinition is intended to be used.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * isset jurisdiction
     *
     * A jurisdiction in which the SpecimenDefinition is intended to be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdiction($index)
    {
        return isset($this->jurisdiction[$index]);
    }

    /**
     * unset jurisdiction
     *
     * A jurisdiction in which the SpecimenDefinition is intended to be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdiction($index)
    {
        unset($this->jurisdiction[$index]);
    }

    /**
     * Gets as jurisdiction
     *
     * A jurisdiction in which the SpecimenDefinition is intended to be used.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * A jurisdiction in which the SpecimenDefinition is intended to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     * @return self
     */
    public function setJurisdiction(array $jurisdiction = null)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as purpose
     *
     * Explains why this SpecimeDefinition is needed and why it has been designed as it has.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Explains why this SpecimeDefinition is needed and why it has been designed as it has.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     * @return self
     */
    public function setPurpose(?\TKusy\Hl7Fhir\R5\MarkdownType $purpose = null)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * Copyright statement relating to the SpecimenDefinition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the SpecimenDefinition.
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
     * Copyright statement relating to the SpecimenDefinition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the SpecimenDefinition.
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
     * Gets as copyrightLabel
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that identifies the copyright holder, effective period, and optionally whether rights are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCopyrightLabel()
    {
        return $this->copyrightLabel;
    }

    /**
     * Sets a new copyrightLabel
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that identifies the copyright holder, effective period, and optionally whether rights are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $copyrightLabel
     * @return self
     */
    public function setCopyrightLabel(?\TKusy\Hl7Fhir\R5\StringType $copyrightLabel = null)
    {
        $this->copyrightLabel = $copyrightLabel;
        return $this;
    }

    /**
     * Gets as approvalDate
     *
     * The date on which the asset content was approved by the publisher. Approval happens once when the content is officially approved for usage.
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
     * The date on which the asset content was approved by the publisher. Approval happens once when the content is officially approved for usage.
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
     * The date on which the asset content was last reviewed. Review happens periodically after that, but doesn't change the original approval date.
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
     * The date on which the asset content was last reviewed. Review happens periodically after that, but doesn't change the original approval date.
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
     * Gets as effectivePeriod
     *
     * The period during which the SpecimenDefinition content was or is planned to be effective.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The period during which the SpecimenDefinition content was or is planned to be effective.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as typeCollected
     *
     * The kind of material to be collected.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTypeCollected()
    {
        return $this->typeCollected;
    }

    /**
     * Sets a new typeCollected
     *
     * The kind of material to be collected.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $typeCollected
     * @return self
     */
    public function setTypeCollected(?\TKusy\Hl7Fhir\R5\CodeableConceptType $typeCollected = null)
    {
        $this->typeCollected = $typeCollected;
        return $this;
    }

    /**
     * Adds as patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $patientPreparation
     */
    public function addToPatientPreparation(\TKusy\Hl7Fhir\R5\CodeableConceptType $patientPreparation)
    {
        $this->patientPreparation[] = $patientPreparation;
        return $this;
    }

    /**
     * isset patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPatientPreparation($index)
    {
        return isset($this->patientPreparation[$index]);
    }

    /**
     * unset patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPatientPreparation($index)
    {
        unset($this->patientPreparation[$index]);
    }

    /**
     * Gets as patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getPatientPreparation()
    {
        return $this->patientPreparation;
    }

    /**
     * Sets a new patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $patientPreparation
     * @return self
     */
    public function setPatientPreparation(array $patientPreparation = null)
    {
        $this->patientPreparation = $patientPreparation;
        return $this;
    }

    /**
     * Gets as timeAspect
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTimeAspect()
    {
        return $this->timeAspect;
    }

    /**
     * Sets a new timeAspect
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $timeAspect
     * @return self
     */
    public function setTimeAspect(?\TKusy\Hl7Fhir\R5\StringType $timeAspect = null)
    {
        $this->timeAspect = $timeAspect;
        return $this;
    }

    /**
     * Adds as collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $collection
     */
    public function addToCollection(\TKusy\Hl7Fhir\R5\CodeableConceptType $collection)
    {
        $this->collection[] = $collection;
        return $this;
    }

    /**
     * isset collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollection($index)
    {
        return isset($this->collection[$index]);
    }

    /**
     * unset collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollection($index)
    {
        unset($this->collection[$index]);
    }

    /**
     * Gets as collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Sets a new collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $collection
     * @return self
     */
    public function setCollection(array $collection = null)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * Adds as typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SpecimenDefinitionTypeTestedType $typeTested
     */
    public function addToTypeTested(\TKusy\Hl7Fhir\R5\SpecimenDefinitionTypeTestedType $typeTested)
    {
        $this->typeTested[] = $typeTested;
        return $this;
    }

    /**
     * isset typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTypeTested($index)
    {
        return isset($this->typeTested[$index]);
    }

    /**
     * unset typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTypeTested($index)
    {
        unset($this->typeTested[$index]);
    }

    /**
     * Gets as typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenDefinitionTypeTestedType[]
     */
    public function getTypeTested()
    {
        return $this->typeTested;
    }

    /**
     * Sets a new typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenDefinitionTypeTestedType[] $typeTested
     * @return self
     */
    public function setTypeTested(array $typeTested = null)
    {
        $this->typeTested = $typeTested;
        return $this;
    }


}

