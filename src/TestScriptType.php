<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: TestScript
 */
class TestScriptType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this test script when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this test script is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the test script is stored on different servers.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this test script when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the test script when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the test script author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     *
     * @var \TKusy\Hl7FhirR4\StringType $version
     */
    private $version = null;

    /**
     * A natural language name identifying the test script. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the test script.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * The status of this test script. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this test script is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the test script was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the test script changes.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the test script.
     *
     * @var \TKusy\Hl7FhirR4\StringType $publisher
     */
    private $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * A free text natural language description of the test script from a consumer's perspective.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate test script instances.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the test script is intended to be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this test script is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the test script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the test script.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * An abstract server used in operations within this test script in the origin element.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptOriginType[] $origin
     */
    private $origin = null;

    /**
     * An abstract server used in operations within this test script in the destination element.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptDestinationType[] $destination
     */
    private $destination = null;

    /**
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptMetadataType $metadata
     */
    private $metadata = null;

    /**
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptFixtureType[] $fixture
     */
    private $fixture = null;

    /**
     * Reference to the profile to be used for validation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $profile
     */
    private $profile = null;

    /**
     * Variable is set based either on element value in response body or on header field value in the response headers.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptVariableType[] $variable
     */
    private $variable = null;

    /**
     * A series of required setup operations before tests are executed.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptSetupType $setup
     */
    private $setup = null;

    /**
     * A test in this script.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptTestType[] $test
     */
    private $test = null;

    /**
     * A series of operations required to clean up after all the tests are executed (successfully or otherwise).
     *
     * @var \TKusy\Hl7FhirR4\TestScriptTeardownType $teardown
     */
    private $teardown = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this test script when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this test script is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the test script is stored on different servers.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * An absolute URI that is used to identify this test script when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this test script is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the test script is stored on different servers.
     *
     * @param \TKusy\Hl7FhirR4\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as identifier
     *
     * A formal identifier that is used to identify this test script when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A formal identifier that is used to identify this test script when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as version
     *
     * The identifier that is used to identify this version of the test script when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the test script author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The identifier that is used to identify this version of the test script when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the test script author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     *
     * @param \TKusy\Hl7FhirR4\StringType $version
     * @return self
     */
    public function setVersion(\TKusy\Hl7FhirR4\StringType $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as name
     *
     * A natural language name identifying the test script. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A natural language name identifying the test script. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short, descriptive, user-friendly title for the test script.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short, descriptive, user-friendly title for the test script.
     *
     * @param \TKusy\Hl7FhirR4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7FhirR4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this test script. Enables tracking the life-cycle of the content.
     *
     * @return \TKusy\Hl7FhirR4\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of this test script. Enables tracking the life-cycle of the content.
     *
     * @param \TKusy\Hl7FhirR4\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as experimental
     *
     * A Boolean value to indicate that this test script is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Sets a new experimental
     *
     * A Boolean value to indicate that this test script is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $experimental
     * @return self
     */
    public function setExperimental(\TKusy\Hl7FhirR4\BooleanType $experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the test script was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the test script changes.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date (and optionally time) when the test script was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the test script changes.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as publisher
     *
     * The name of the organization or individual that published the test script.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * The name of the organization or individual that published the test script.
     *
     * @param \TKusy\Hl7FhirR4\StringType $publisher
     * @return self
     */
    public function setPublisher(\TKusy\Hl7FhirR4\StringType $publisher)
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\ContactDetailType $contact)
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
     * @return \TKusy\Hl7FhirR4\ContactDetailType[]
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as description
     *
     * A free text natural language description of the test script from a consumer's perspective.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A free text natural language description of the test script from a consumer's perspective.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate test script instances.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UsageContextType $useContext
     */
    public function addToUseContext(\TKusy\Hl7FhirR4\UsageContextType $useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * isset useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate test script instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate test script instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate test script instances.
     *
     * @return \TKusy\Hl7FhirR4\UsageContextType[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Sets a new useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate test script instances.
     *
     * @param \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     * @return self
     */
    public function setUseContext(array $useContext)
    {
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * Adds as jurisdiction
     *
     * A legal or geographic region in which the test script is intended to be used.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * isset jurisdiction
     *
     * A legal or geographic region in which the test script is intended to be used.
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
     * A legal or geographic region in which the test script is intended to be used.
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
     * A legal or geographic region in which the test script is intended to be used.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * A legal or geographic region in which the test script is intended to be used.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     * @return self
     */
    public function setJurisdiction(array $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as purpose
     *
     * Explanation of why this test script is needed and why it has been designed as it has.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Explanation of why this test script is needed and why it has been designed as it has.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $purpose
     * @return self
     */
    public function setPurpose(\TKusy\Hl7FhirR4\MarkdownType $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * A copyright statement relating to the test script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the test script.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * A copyright statement relating to the test script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the test script.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $copyright
     * @return self
     */
    public function setCopyright(\TKusy\Hl7FhirR4\MarkdownType $copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Adds as origin
     *
     * An abstract server used in operations within this test script in the origin element.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptOriginType $origin
     */
    public function addToOrigin(\TKusy\Hl7FhirR4\TestScriptOriginType $origin)
    {
        $this->origin[] = $origin;
        return $this;
    }

    /**
     * isset origin
     *
     * An abstract server used in operations within this test script in the origin element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrigin($index)
    {
        return isset($this->origin[$index]);
    }

    /**
     * unset origin
     *
     * An abstract server used in operations within this test script in the origin element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrigin($index)
    {
        unset($this->origin[$index]);
    }

    /**
     * Gets as origin
     *
     * An abstract server used in operations within this test script in the origin element.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptOriginType[]
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * An abstract server used in operations within this test script in the origin element.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptOriginType[] $origin
     * @return self
     */
    public function setOrigin(array $origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Adds as destination
     *
     * An abstract server used in operations within this test script in the destination element.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptDestinationType $destination
     */
    public function addToDestination(\TKusy\Hl7FhirR4\TestScriptDestinationType $destination)
    {
        $this->destination[] = $destination;
        return $this;
    }

    /**
     * isset destination
     *
     * An abstract server used in operations within this test script in the destination element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestination($index)
    {
        return isset($this->destination[$index]);
    }

    /**
     * unset destination
     *
     * An abstract server used in operations within this test script in the destination element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestination($index)
    {
        unset($this->destination[$index]);
    }

    /**
     * Gets as destination
     *
     * An abstract server used in operations within this test script in the destination element.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptDestinationType[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * An abstract server used in operations within this test script in the destination element.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptDestinationType[] $destination
     * @return self
     */
    public function setDestination(array $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as metadata
     *
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptMetadataType
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Sets a new metadata
     *
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptMetadataType $metadata
     * @return self
     */
    public function setMetadata(\TKusy\Hl7FhirR4\TestScriptMetadataType $metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * Adds as fixture
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptFixtureType $fixture
     */
    public function addToFixture(\TKusy\Hl7FhirR4\TestScriptFixtureType $fixture)
    {
        $this->fixture[] = $fixture;
        return $this;
    }

    /**
     * isset fixture
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFixture($index)
    {
        return isset($this->fixture[$index]);
    }

    /**
     * unset fixture
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFixture($index)
    {
        unset($this->fixture[$index]);
    }

    /**
     * Gets as fixture
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptFixtureType[]
     */
    public function getFixture()
    {
        return $this->fixture;
    }

    /**
     * Sets a new fixture
     *
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptFixtureType[] $fixture
     * @return self
     */
    public function setFixture(array $fixture)
    {
        $this->fixture = $fixture;
        return $this;
    }

    /**
     * Adds as profile
     *
     * Reference to the profile to be used for validation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $profile
     */
    public function addToProfile(\TKusy\Hl7FhirR4\ReferenceType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * Reference to the profile to be used for validation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * Reference to the profile to be used for validation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * Reference to the profile to be used for validation.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Reference to the profile to be used for validation.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $profile
     * @return self
     */
    public function setProfile(array $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Adds as variable
     *
     * Variable is set based either on element value in response body or on header field value in the response headers.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptVariableType $variable
     */
    public function addToVariable(\TKusy\Hl7FhirR4\TestScriptVariableType $variable)
    {
        $this->variable[] = $variable;
        return $this;
    }

    /**
     * isset variable
     *
     * Variable is set based either on element value in response body or on header field value in the response headers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariable($index)
    {
        return isset($this->variable[$index]);
    }

    /**
     * unset variable
     *
     * Variable is set based either on element value in response body or on header field value in the response headers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariable($index)
    {
        unset($this->variable[$index]);
    }

    /**
     * Gets as variable
     *
     * Variable is set based either on element value in response body or on header field value in the response headers.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptVariableType[]
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets a new variable
     *
     * Variable is set based either on element value in response body or on header field value in the response headers.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptVariableType[] $variable
     * @return self
     */
    public function setVariable(array $variable)
    {
        $this->variable = $variable;
        return $this;
    }

    /**
     * Gets as setup
     *
     * A series of required setup operations before tests are executed.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptSetupType
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * Sets a new setup
     *
     * A series of required setup operations before tests are executed.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptSetupType $setup
     * @return self
     */
    public function setSetup(\TKusy\Hl7FhirR4\TestScriptSetupType $setup)
    {
        $this->setup = $setup;
        return $this;
    }

    /**
     * Adds as test
     *
     * A test in this script.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptTestType $test
     */
    public function addToTest(\TKusy\Hl7FhirR4\TestScriptTestType $test)
    {
        $this->test[] = $test;
        return $this;
    }

    /**
     * isset test
     *
     * A test in this script.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTest($index)
    {
        return isset($this->test[$index]);
    }

    /**
     * unset test
     *
     * A test in this script.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTest($index)
    {
        unset($this->test[$index]);
    }

    /**
     * Gets as test
     *
     * A test in this script.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptTestType[]
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Sets a new test
     *
     * A test in this script.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptTestType[] $test
     * @return self
     */
    public function setTest(array $test)
    {
        $this->test = $test;
        return $this;
    }

    /**
     * Gets as teardown
     *
     * A series of operations required to clean up after all the tests are executed (successfully or otherwise).
     *
     * @return \TKusy\Hl7FhirR4\TestScriptTeardownType
     */
    public function getTeardown()
    {
        return $this->teardown;
    }

    /**
     * Sets a new teardown
     *
     * A series of operations required to clean up after all the tests are executed (successfully or otherwise).
     *
     * @param \TKusy\Hl7FhirR4\TestScriptTeardownType $teardown
     * @return self
     */
    public function setTeardown(\TKusy\Hl7FhirR4\TestScriptTeardownType $teardown)
    {
        $this->teardown = $teardown;
        return $this;
    }


}

