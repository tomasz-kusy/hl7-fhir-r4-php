<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImplementationGuideType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ImplementationGuide
 */
class ImplementationGuideType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this implementation guide when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this implementation guide is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the implementation guide is stored on different servers.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * The identifier that is used to identify this version of the implementation guide when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the implementation guide author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     *
     * @var \TKusy\Hl7FhirR4\StringType $version
     */
    private $version = null;

    /**
     * A natural language name identifying the implementation guide. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the implementation guide.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * The status of this implementation guide. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this implementation guide is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the implementation guide was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the implementation guide.
     *
     * @var \TKusy\Hl7FhirR4\StringType $publisher
     */
    private $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * A free text natural language description of the implementation guide from a consumer's perspective.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate implementation guide instances.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     */
    private $useContext = [
        
    ];

    /**
     * A legal or geographic region in which the implementation guide is intended to be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = [
        
    ];

    /**
     * A copyright statement relating to the implementation guide and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the implementation guide.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * The NPM package name for this Implementation Guide, used in the NPM package distribution, which is the primary mechanism by which FHIR based tooling manages IG dependencies. This value must be globally unique, and should be assigned with care.
     *
     * @var \TKusy\Hl7FhirR4\IdType $packageId
     */
    private $packageId = null;

    /**
     * The license that applies to this Implementation Guide, using an SPDX license code, or 'not-open-source'.
     *
     * @var \TKusy\Hl7FhirR4\SPDXLicenseType $license
     */
    private $license = null;

    /**
     * The version(s) of the FHIR specification that this ImplementationGuide targets - e.g. describes how to use. The value of this element is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.0.1. for this version.
     *
     * @var \TKusy\Hl7FhirR4\FHIRVersionType[] $fhirVersion
     */
    private $fhirVersion = [
        
    ];

    /**
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     *
     * @var \TKusy\Hl7FhirR4\ImplementationGuideDependsOnType[] $dependsOn
     */
    private $dependsOn = [
        
    ];

    /**
     * A set of profiles that all resources covered by this implementation guide must conform to.
     *
     * @var \TKusy\Hl7FhirR4\ImplementationGuideGlobalType[] $global
     */
    private $global = [
        
    ];

    /**
     * The information needed by an IG publisher tool to publish the whole implementation guide.
     *
     * @var \TKusy\Hl7FhirR4\ImplementationGuideDefinitionType $definition
     */
    private $definition = null;

    /**
     * Information about an assembled implementation guide, created by the publication tooling.
     *
     * @var \TKusy\Hl7FhirR4\ImplementationGuideManifestType $manifest
     */
    private $manifest = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this implementation guide when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this implementation guide is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the implementation guide is stored on different servers.
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
     * An absolute URI that is used to identify this implementation guide when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this implementation guide is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the implementation guide is stored on different servers.
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
     * Gets as version
     *
     * The identifier that is used to identify this version of the implementation guide when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the implementation guide author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the implementation guide when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the implementation guide author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the implementation guide. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the implementation guide. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the implementation guide.
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
     * A short, descriptive, user-friendly title for the implementation guide.
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
     * The status of this implementation guide. Enables tracking the life-cycle of the content.
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
     * The status of this implementation guide. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this implementation guide is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this implementation guide is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the implementation guide was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes.
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
     * The date (and optionally time) when the implementation guide was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the implementation guide changes.
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
     * The name of the organization or individual that published the implementation guide.
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
     * The name of the organization or individual that published the implementation guide.
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
     * A free text natural language description of the implementation guide from a consumer's perspective.
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
     * A free text natural language description of the implementation guide from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate implementation guide instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate implementation guide instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate implementation guide instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate implementation guide instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate implementation guide instances.
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
     * A legal or geographic region in which the implementation guide is intended to be used.
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
     * A legal or geographic region in which the implementation guide is intended to be used.
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
     * A legal or geographic region in which the implementation guide is intended to be used.
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
     * A legal or geographic region in which the implementation guide is intended to be used.
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
     * A legal or geographic region in which the implementation guide is intended to be used.
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
     * Gets as copyright
     *
     * A copyright statement relating to the implementation guide and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the implementation guide.
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
     * A copyright statement relating to the implementation guide and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the implementation guide.
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
     * Gets as packageId
     *
     * The NPM package name for this Implementation Guide, used in the NPM package distribution, which is the primary mechanism by which FHIR based tooling manages IG dependencies. This value must be globally unique, and should be assigned with care.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * Sets a new packageId
     *
     * The NPM package name for this Implementation Guide, used in the NPM package distribution, which is the primary mechanism by which FHIR based tooling manages IG dependencies. This value must be globally unique, and should be assigned with care.
     *
     * @param \TKusy\Hl7FhirR4\IdType $packageId
     * @return self
     */
    public function setPackageId(\TKusy\Hl7FhirR4\IdType $packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * Gets as license
     *
     * The license that applies to this Implementation Guide, using an SPDX license code, or 'not-open-source'.
     *
     * @return \TKusy\Hl7FhirR4\SPDXLicenseType
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Sets a new license
     *
     * The license that applies to this Implementation Guide, using an SPDX license code, or 'not-open-source'.
     *
     * @param \TKusy\Hl7FhirR4\SPDXLicenseType $license
     * @return self
     */
    public function setLicense(\TKusy\Hl7FhirR4\SPDXLicenseType $license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * Adds as fhirVersion
     *
     * The version(s) of the FHIR specification that this ImplementationGuide targets - e.g. describes how to use. The value of this element is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.0.1. for this version.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\FHIRVersionType $fhirVersion
     */
    public function addToFhirVersion(\TKusy\Hl7FhirR4\FHIRVersionType $fhirVersion)
    {
        $this->fhirVersion[] = $fhirVersion;
        return $this;
    }

    /**
     * isset fhirVersion
     *
     * The version(s) of the FHIR specification that this ImplementationGuide targets - e.g. describes how to use. The value of this element is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.0.1. for this version.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFhirVersion($index)
    {
        return isset($this->fhirVersion[$index]);
    }

    /**
     * unset fhirVersion
     *
     * The version(s) of the FHIR specification that this ImplementationGuide targets - e.g. describes how to use. The value of this element is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.0.1. for this version.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFhirVersion($index)
    {
        unset($this->fhirVersion[$index]);
    }

    /**
     * Gets as fhirVersion
     *
     * The version(s) of the FHIR specification that this ImplementationGuide targets - e.g. describes how to use. The value of this element is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.0.1. for this version.
     *
     * @return \TKusy\Hl7FhirR4\FHIRVersionType[]
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * Sets a new fhirVersion
     *
     * The version(s) of the FHIR specification that this ImplementationGuide targets - e.g. describes how to use. The value of this element is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.0.1. for this version.
     *
     * @param \TKusy\Hl7FhirR4\FHIRVersionType[] $fhirVersion
     * @return self
     */
    public function setFhirVersion(array $fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * Adds as dependsOn
     *
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImplementationGuideDependsOnType $dependsOn
     */
    public function addToDependsOn(\TKusy\Hl7FhirR4\ImplementationGuideDependsOnType $dependsOn)
    {
        $this->dependsOn[] = $dependsOn;
        return $this;
    }

    /**
     * isset dependsOn
     *
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDependsOn($index)
    {
        return isset($this->dependsOn[$index]);
    }

    /**
     * unset dependsOn
     *
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDependsOn($index)
    {
        unset($this->dependsOn[$index]);
    }

    /**
     * Gets as dependsOn
     *
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     *
     * @return \TKusy\Hl7FhirR4\ImplementationGuideDependsOnType[]
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }

    /**
     * Sets a new dependsOn
     *
     * Another implementation guide that this implementation depends on. Typically, an implementation guide uses value sets, profiles etc.defined in other implementation guides.
     *
     * @param \TKusy\Hl7FhirR4\ImplementationGuideDependsOnType[] $dependsOn
     * @return self
     */
    public function setDependsOn(array $dependsOn)
    {
        $this->dependsOn = $dependsOn;
        return $this;
    }

    /**
     * Adds as global
     *
     * A set of profiles that all resources covered by this implementation guide must conform to.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImplementationGuideGlobalType $global
     */
    public function addToGlobal(\TKusy\Hl7FhirR4\ImplementationGuideGlobalType $global)
    {
        $this->global[] = $global;
        return $this;
    }

    /**
     * isset global
     *
     * A set of profiles that all resources covered by this implementation guide must conform to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGlobal($index)
    {
        return isset($this->global[$index]);
    }

    /**
     * unset global
     *
     * A set of profiles that all resources covered by this implementation guide must conform to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGlobal($index)
    {
        unset($this->global[$index]);
    }

    /**
     * Gets as global
     *
     * A set of profiles that all resources covered by this implementation guide must conform to.
     *
     * @return \TKusy\Hl7FhirR4\ImplementationGuideGlobalType[]
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * Sets a new global
     *
     * A set of profiles that all resources covered by this implementation guide must conform to.
     *
     * @param \TKusy\Hl7FhirR4\ImplementationGuideGlobalType[] $global
     * @return self
     */
    public function setGlobal(array $global)
    {
        $this->global = $global;
        return $this;
    }

    /**
     * Gets as definition
     *
     * The information needed by an IG publisher tool to publish the whole implementation guide.
     *
     * @return \TKusy\Hl7FhirR4\ImplementationGuideDefinitionType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * The information needed by an IG publisher tool to publish the whole implementation guide.
     *
     * @param \TKusy\Hl7FhirR4\ImplementationGuideDefinitionType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7FhirR4\ImplementationGuideDefinitionType $definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as manifest
     *
     * Information about an assembled implementation guide, created by the publication tooling.
     *
     * @return \TKusy\Hl7FhirR4\ImplementationGuideManifestType
     */
    public function getManifest()
    {
        return $this->manifest;
    }

    /**
     * Sets a new manifest
     *
     * Information about an assembled implementation guide, created by the publication tooling.
     *
     * @param \TKusy\Hl7FhirR4\ImplementationGuideManifestType $manifest
     * @return self
     */
    public function setManifest(\TKusy\Hl7FhirR4\ImplementationGuideManifestType $manifest)
    {
        $this->manifest = $manifest;
        return $this;
    }


}

