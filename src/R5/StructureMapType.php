<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing StructureMapType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: StructureMap
 */
class StructureMapType extends CanonicalResourceType
{

    /**
     * An absolute URI that is used to identify this structure map when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this structure map is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure map is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the structure map when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure map author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the structure map. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the structure map.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The status of this structure map. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this structure map is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the structure map was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure map changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual responsible for the release and ongoing maintenance of the structure map.
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
     * A free text natural language description of the structure map from a consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure map instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the structure map is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this structure map is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the structure map and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure map.
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
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureMapStructureType[] $structure
     */
    private $structure = null;

    /**
     * Other maps used by this map (canonical URLs).
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $import
     */
    private $import = null;

    /**
     * Definition of a constant value used in the map rules.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureMapConstType[] $const
     */
    private $const = null;

    /**
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureMapGroupType[] $group
     */
    private $group = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this structure map when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this structure map is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure map is stored on different servers.
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
     * An absolute URI that is used to identify this structure map when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this structure map is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure map is stored on different servers.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7Fhir\R5\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure map when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the structure map when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure map author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the structure map when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure map author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the structure map. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the structure map. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short, descriptive, user-friendly title for the structure map.
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
     * A short, descriptive, user-friendly title for the structure map.
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
     * Gets as status
     *
     * The status of this structure map. Enables tracking the life-cycle of the content.
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
     * The status of this structure map. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this structure map is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this structure map is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * Gets as date
     *
     * The date (and optionally time) when the structure map was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure map changes.
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
     * The date (and optionally time) when the structure map was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure map changes.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the structure map.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the structure map.
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
     * A free text natural language description of the structure map from a consumer's perspective.
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
     * A free text natural language description of the structure map from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure map instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure map instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure map instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure map instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure map instances.
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
     * A legal or geographic region in which the structure map is intended to be used.
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
     * A legal or geographic region in which the structure map is intended to be used.
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
     * A legal or geographic region in which the structure map is intended to be used.
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
     * A legal or geographic region in which the structure map is intended to be used.
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
     * A legal or geographic region in which the structure map is intended to be used.
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
     * Explanation of why this structure map is needed and why it has been designed as it has.
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
     * Explanation of why this structure map is needed and why it has been designed as it has.
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
     * A copyright statement relating to the structure map and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure map.
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
     * A copyright statement relating to the structure map and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure map.
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
     * Adds as structure
     *
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StructureMapStructureType $structure
     */
    public function addToStructure(\TKusy\Hl7Fhir\R5\StructureMapStructureType $structure)
    {
        $this->structure[] = $structure;
        return $this;
    }

    /**
     * isset structure
     *
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStructure($index)
    {
        return isset($this->structure[$index]);
    }

    /**
     * unset structure
     *
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStructure($index)
    {
        unset($this->structure[$index]);
    }

    /**
     * Gets as structure
     *
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureMapStructureType[]
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Sets a new structure
     *
     * A structure definition used by this map. The structure definition may describe instances that are converted, or the instances that are produced.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureMapStructureType[] $structure
     * @return self
     */
    public function setStructure(array $structure = null)
    {
        $this->structure = $structure;
        return $this;
    }

    /**
     * Adds as import
     *
     * Other maps used by this map (canonical URLs).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $import
     */
    public function addToImport(\TKusy\Hl7Fhir\R5\CanonicalType $import)
    {
        $this->import[] = $import;
        return $this;
    }

    /**
     * isset import
     *
     * Other maps used by this map (canonical URLs).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImport($index)
    {
        return isset($this->import[$index]);
    }

    /**
     * unset import
     *
     * Other maps used by this map (canonical URLs).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImport($index)
    {
        unset($this->import[$index]);
    }

    /**
     * Gets as import
     *
     * Other maps used by this map (canonical URLs).
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Sets a new import
     *
     * Other maps used by this map (canonical URLs).
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $import
     * @return self
     */
    public function setImport(array $import = null)
    {
        $this->import = $import;
        return $this;
    }

    /**
     * Adds as const
     *
     * Definition of a constant value used in the map rules.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StructureMapConstType $const
     */
    public function addToConst(\TKusy\Hl7Fhir\R5\StructureMapConstType $const)
    {
        $this->const[] = $const;
        return $this;
    }

    /**
     * isset const
     *
     * Definition of a constant value used in the map rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConst($index)
    {
        return isset($this->const[$index]);
    }

    /**
     * unset const
     *
     * Definition of a constant value used in the map rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConst($index)
    {
        unset($this->const[$index]);
    }

    /**
     * Gets as const
     *
     * Definition of a constant value used in the map rules.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureMapConstType[]
     */
    public function getConst()
    {
        return $this->const;
    }

    /**
     * Sets a new const
     *
     * Definition of a constant value used in the map rules.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureMapConstType[] $const
     * @return self
     */
    public function setConst(array $const = null)
    {
        $this->const = $const;
        return $this;
    }

    /**
     * Adds as group
     *
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StructureMapGroupType $group
     */
    public function addToGroup(\TKusy\Hl7Fhir\R5\StructureMapGroupType $group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * isset group
     *
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group
     *
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroup($index)
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group
     *
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureMapGroupType[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * Organizes the mapping into managable chunks for human review/ease of maintenance.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureMapGroupType[] $group
     * @return self
     */
    public function setGroup(array $group)
    {
        $this->group = $group;
        return $this;
    }


}

