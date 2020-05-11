<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SearchParameterType
 *
 * A search parameter that defines a named search item that can be used to search/filter on a resource.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SearchParameter
 */
class SearchParameterType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this search parameter is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the search parameter is stored on different servers.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * The identifier that is used to identify this version of the search parameter when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the search parameter author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     *
     * @var \TKusy\Hl7FhirR4\StringType $version
     */
    private $version = null;

    /**
     * A natural language name identifying the search parameter. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. i.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * The status of this search parameter. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the search parameter was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the search parameter.
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
     * And how it used.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate search parameter instances.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     */
    private $useContext = [
        
    ];

    /**
     * A legal or geographic region in which the search parameter is intended to be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = [
        
    ];

    /**
     * Explanation of why this search parameter is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * The base resource type(s) that this search parameter can be used against.
     *
     * @var \TKusy\Hl7FhirR4\CodeType[] $base
     */
    private $base = [
        
    ];

    /**
     * The type of value that a search parameter may contain, and how the content is interpreted.
     *
     * @var \TKusy\Hl7FhirR4\SearchParamTypeType $type
     */
    private $type = null;

    /**
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @var \TKusy\Hl7FhirR4\StringType $expression
     */
    private $expression = null;

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     *
     * @var \TKusy\Hl7FhirR4\StringType $xpath
     */
    private $xpath = null;

    /**
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     *
     * @var \TKusy\Hl7FhirR4\XPathUsageTypeType $xpathUsage
     */
    private $xpathUsage = null;

    /**
     * Types of resource (if a resource is referenced).
     *
     * @var \TKusy\Hl7FhirR4\CodeType[] $target
     */
    private $target = [
        
    ];

    /**
     * Whether multiple values are allowed for each time the parameter exists. Values are separated by commas, and the parameter matches if any of the values match.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $multipleOr
     */
    private $multipleOr = null;

    /**
     * Whether multiple parameters are allowed - e.g. more than one parameter with the same name. The search matches if all the parameters match.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $multipleAnd
     */
    private $multipleAnd = null;

    /**
     * Comparators supported for the search parameter.
     *
     * @var \TKusy\Hl7FhirR4\SearchComparatorType[] $comparator
     */
    private $comparator = [
        
    ];

    /**
     * A modifier supported for the search parameter.
     *
     * @var \TKusy\Hl7FhirR4\SearchModifierCodeType[] $modifier
     */
    private $modifier = [
        
    ];

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $chain
     */
    private $chain = [
        
    ];

    /**
     * Used to define the parts of a composite search parameter.
     *
     * @var \TKusy\Hl7FhirR4\SearchParameterComponentType[] $component
     */
    private $component = [
        
    ];

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this search parameter is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the search parameter is stored on different servers.
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
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this search parameter is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the search parameter is stored on different servers.
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
     * The identifier that is used to identify this version of the search parameter when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the search parameter author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the search parameter when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the search parameter author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the search parameter. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the search parameter. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * Gets as derivedFrom
     *
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. i.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. i.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $derivedFrom
     * @return self
     */
    public function setDerivedFrom(\TKusy\Hl7FhirR4\CanonicalType $derivedFrom)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this search parameter. Enables tracking the life-cycle of the content.
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
     * The status of this search parameter. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the search parameter was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
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
     * The date (and optionally time) when the search parameter was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
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
     * The name of the organization or individual that published the search parameter.
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
     * The name of the organization or individual that published the search parameter.
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
     * And how it used.
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
     * And how it used.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate search parameter instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate search parameter instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate search parameter instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate search parameter instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate search parameter instances.
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
     * A legal or geographic region in which the search parameter is intended to be used.
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
     * A legal or geographic region in which the search parameter is intended to be used.
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
     * A legal or geographic region in which the search parameter is intended to be used.
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
     * A legal or geographic region in which the search parameter is intended to be used.
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
     * A legal or geographic region in which the search parameter is intended to be used.
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
     * Explanation of why this search parameter is needed and why it has been designed as it has.
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
     * Explanation of why this search parameter is needed and why it has been designed as it has.
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
     * Gets as code
     *
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as base
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeType $base
     */
    public function addToBase(\TKusy\Hl7FhirR4\CodeType $base)
    {
        $this->base[] = $base;
        return $this;
    }

    /**
     * isset base
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBase($index)
    {
        return isset($this->base[$index]);
    }

    /**
     * unset base
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBase($index)
    {
        unset($this->base[$index]);
    }

    /**
     * Gets as base
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @return \TKusy\Hl7FhirR4\CodeType[]
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Sets a new base
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @param \TKusy\Hl7FhirR4\CodeType[] $base
     * @return self
     */
    public function setBase(array $base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of value that a search parameter may contain, and how the content is interpreted.
     *
     * @return \TKusy\Hl7FhirR4\SearchParamTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of value that a search parameter may contain, and how the content is interpreted.
     *
     * @param \TKusy\Hl7FhirR4\SearchParamTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\SearchParamTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as expression
     *
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @param \TKusy\Hl7FhirR4\StringType $expression
     * @return self
     */
    public function setExpression(\TKusy\Hl7FhirR4\StringType $expression)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Gets as xpath
     *
     * An XPath expression that returns a set of elements for the search parameter.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * Sets a new xpath
     *
     * An XPath expression that returns a set of elements for the search parameter.
     *
     * @param \TKusy\Hl7FhirR4\StringType $xpath
     * @return self
     */
    public function setXpath(\TKusy\Hl7FhirR4\StringType $xpath)
    {
        $this->xpath = $xpath;
        return $this;
    }

    /**
     * Gets as xpathUsage
     *
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     *
     * @return \TKusy\Hl7FhirR4\XPathUsageTypeType
     */
    public function getXpathUsage()
    {
        return $this->xpathUsage;
    }

    /**
     * Sets a new xpathUsage
     *
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     *
     * @param \TKusy\Hl7FhirR4\XPathUsageTypeType $xpathUsage
     * @return self
     */
    public function setXpathUsage(\TKusy\Hl7FhirR4\XPathUsageTypeType $xpathUsage)
    {
        $this->xpathUsage = $xpathUsage;
        return $this;
    }

    /**
     * Adds as target
     *
     * Types of resource (if a resource is referenced).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeType $target
     */
    public function addToTarget(\TKusy\Hl7FhirR4\CodeType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * Types of resource (if a resource is referenced).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTarget($index)
    {
        return isset($this->target[$index]);
    }

    /**
     * unset target
     *
     * Types of resource (if a resource is referenced).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTarget($index)
    {
        unset($this->target[$index]);
    }

    /**
     * Gets as target
     *
     * Types of resource (if a resource is referenced).
     *
     * @return \TKusy\Hl7FhirR4\CodeType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Types of resource (if a resource is referenced).
     *
     * @param \TKusy\Hl7FhirR4\CodeType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as multipleOr
     *
     * Whether multiple values are allowed for each time the parameter exists. Values are separated by commas, and the parameter matches if any of the values match.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getMultipleOr()
    {
        return $this->multipleOr;
    }

    /**
     * Sets a new multipleOr
     *
     * Whether multiple values are allowed for each time the parameter exists. Values are separated by commas, and the parameter matches if any of the values match.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $multipleOr
     * @return self
     */
    public function setMultipleOr(\TKusy\Hl7FhirR4\BooleanType $multipleOr)
    {
        $this->multipleOr = $multipleOr;
        return $this;
    }

    /**
     * Gets as multipleAnd
     *
     * Whether multiple parameters are allowed - e.g. more than one parameter with the same name. The search matches if all the parameters match.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getMultipleAnd()
    {
        return $this->multipleAnd;
    }

    /**
     * Sets a new multipleAnd
     *
     * Whether multiple parameters are allowed - e.g. more than one parameter with the same name. The search matches if all the parameters match.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $multipleAnd
     * @return self
     */
    public function setMultipleAnd(\TKusy\Hl7FhirR4\BooleanType $multipleAnd)
    {
        $this->multipleAnd = $multipleAnd;
        return $this;
    }

    /**
     * Adds as comparator
     *
     * Comparators supported for the search parameter.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SearchComparatorType $comparator
     */
    public function addToComparator(\TKusy\Hl7FhirR4\SearchComparatorType $comparator)
    {
        $this->comparator[] = $comparator;
        return $this;
    }

    /**
     * isset comparator
     *
     * Comparators supported for the search parameter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComparator($index)
    {
        return isset($this->comparator[$index]);
    }

    /**
     * unset comparator
     *
     * Comparators supported for the search parameter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComparator($index)
    {
        unset($this->comparator[$index]);
    }

    /**
     * Gets as comparator
     *
     * Comparators supported for the search parameter.
     *
     * @return \TKusy\Hl7FhirR4\SearchComparatorType[]
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * Sets a new comparator
     *
     * Comparators supported for the search parameter.
     *
     * @param \TKusy\Hl7FhirR4\SearchComparatorType[] $comparator
     * @return self
     */
    public function setComparator(array $comparator)
    {
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * Adds as modifier
     *
     * A modifier supported for the search parameter.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SearchModifierCodeType $modifier
     */
    public function addToModifier(\TKusy\Hl7FhirR4\SearchModifierCodeType $modifier)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * isset modifier
     *
     * A modifier supported for the search parameter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModifier($index)
    {
        return isset($this->modifier[$index]);
    }

    /**
     * unset modifier
     *
     * A modifier supported for the search parameter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModifier($index)
    {
        unset($this->modifier[$index]);
    }

    /**
     * Gets as modifier
     *
     * A modifier supported for the search parameter.
     *
     * @return \TKusy\Hl7FhirR4\SearchModifierCodeType[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * A modifier supported for the search parameter.
     *
     * @param \TKusy\Hl7FhirR4\SearchModifierCodeType[] $modifier
     * @return self
     */
    public function setModifier(array $modifier)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Adds as chain
     *
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $chain
     */
    public function addToChain(\TKusy\Hl7FhirR4\StringType $chain)
    {
        $this->chain[] = $chain;
        return $this;
    }

    /**
     * isset chain
     *
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChain($index)
    {
        return isset($this->chain[$index]);
    }

    /**
     * unset chain
     *
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChain($index)
    {
        unset($this->chain[$index]);
    }

    /**
     * Gets as chain
     *
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * Sets a new chain
     *
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $chain
     * @return self
     */
    public function setChain(array $chain)
    {
        $this->chain = $chain;
        return $this;
    }

    /**
     * Adds as component
     *
     * Used to define the parts of a composite search parameter.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SearchParameterComponentType $component
     */
    public function addToComponent(\TKusy\Hl7FhirR4\SearchParameterComponentType $component)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * isset component
     *
     * Used to define the parts of a composite search parameter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponent($index)
    {
        return isset($this->component[$index]);
    }

    /**
     * unset component
     *
     * Used to define the parts of a composite search parameter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponent($index)
    {
        unset($this->component[$index]);
    }

    /**
     * Gets as component
     *
     * Used to define the parts of a composite search parameter.
     *
     * @return \TKusy\Hl7FhirR4\SearchParameterComponentType[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * Used to define the parts of a composite search parameter.
     *
     * @param \TKusy\Hl7FhirR4\SearchParameterComponentType[] $component
     * @return self
     */
    public function setComponent(array $component)
    {
        $this->component = $component;
        return $this;
    }


}

