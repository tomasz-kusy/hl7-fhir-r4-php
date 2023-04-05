<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionTopicType
 *
 * Describes a stream of resource state changes or events and annotated with labels useful to filter projections from this topic.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubscriptionTopic
 */
class SubscriptionTopicType extends CanonicalResourceType
{

    /**
     * An absolute URI that is used to identify this subscription topic when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this subscription topic is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the subscription topic is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * Business identifiers assigned to this subscription topic by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the subscription topic when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the Topic author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
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
     * A natural language name identifying the subscription topic This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the subscription topic. For example, "admission".
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The canonical URL pointing to another FHIR-defined SubscriptionTopic that is adhered to in whole or in part by this SubscriptionTopic.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * The current state of the SubscriptionTopic.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A flag to indicate that this TopSubscriptionTopicic is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the subscription topic was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the subscription topic changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * Helps establish the "authority/credibility" of the SubscriptionTopic. May also allow for contact.
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
     * A free text natural language description of the Topic from the consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A jurisdiction in which the Topic is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explains why this Topic is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the SubscriptionTopic and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the SubscriptionTopic.
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
     * The period during which the SubscriptionTopic content was or is planned to be effective.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * A definition of a resource-based event that triggers a notification based on the SubscriptionTopic. The criteria may be just a human readable description and/or a full FHIR search string or FHIRPath expression. Multiple triggers are considered OR joined (e.g., a resource update matching ANY of the definitions will trigger a notification).
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionTopicResourceTriggerType[] $resourceTrigger
     */
    private $resourceTrigger = null;

    /**
     * Event definition which can be used to trigger the SubscriptionTopic.
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionTopicEventTriggerType[] $eventTrigger
     */
    private $eventTrigger = null;

    /**
     * List of properties by which Subscriptions on the SubscriptionTopic can be filtered. May be defined Search Parameters (e.g., Encounter.patient) or parameters defined within this SubscriptionTopic context (e.g., hub.event).
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionTopicCanFilterByType[] $canFilterBy
     */
    private $canFilterBy = null;

    /**
     * List of properties to describe the shape (e.g., resources) included in notifications from this Subscription Topic.
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionTopicNotificationShapeType[] $notificationShape
     */
    private $notificationShape = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this subscription topic when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this subscription topic is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the subscription topic is stored on different servers.
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
     * An absolute URI that is used to identify this subscription topic when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this subscription topic is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the subscription topic is stored on different servers.
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
     * Business identifiers assigned to this subscription topic by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this subscription topic by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this subscription topic by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this subscription topic by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this subscription topic by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * The identifier that is used to identify this version of the subscription topic when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the Topic author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
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
     * The identifier that is used to identify this version of the subscription topic when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the Topic author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
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
     * A natural language name identifying the subscription topic This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the subscription topic This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the subscription topic. For example, "admission".
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
     * A short, descriptive, user-friendly title for the subscription topic. For example, "admission".
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
     * Adds as derivedFrom
     *
     * The canonical URL pointing to another FHIR-defined SubscriptionTopic that is adhered to in whole or in part by this SubscriptionTopic.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $derivedFrom
     */
    public function addToDerivedFrom(\TKusy\Hl7Fhir\R5\CanonicalType $derivedFrom)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * isset derivedFrom
     *
     * The canonical URL pointing to another FHIR-defined SubscriptionTopic that is adhered to in whole or in part by this SubscriptionTopic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFrom($index)
    {
        return isset($this->derivedFrom[$index]);
    }

    /**
     * unset derivedFrom
     *
     * The canonical URL pointing to another FHIR-defined SubscriptionTopic that is adhered to in whole or in part by this SubscriptionTopic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFrom($index)
    {
        unset($this->derivedFrom[$index]);
    }

    /**
     * Gets as derivedFrom
     *
     * The canonical URL pointing to another FHIR-defined SubscriptionTopic that is adhered to in whole or in part by this SubscriptionTopic.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * The canonical URL pointing to another FHIR-defined SubscriptionTopic that is adhered to in whole or in part by this SubscriptionTopic.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $derivedFrom
     * @return self
     */
    public function setDerivedFrom(array $derivedFrom = null)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of the SubscriptionTopic.
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
     * The current state of the SubscriptionTopic.
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
     * A flag to indicate that this TopSubscriptionTopicic is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
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
     * A flag to indicate that this TopSubscriptionTopicic is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the subscription topic was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the subscription topic changes.
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
     * The date (and optionally time) when the subscription topic was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the subscription topic changes.
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
     * Helps establish the "authority/credibility" of the SubscriptionTopic. May also allow for contact.
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
     * Helps establish the "authority/credibility" of the SubscriptionTopic. May also allow for contact.
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
     * A free text natural language description of the Topic from the consumer's perspective.
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
     * A free text natural language description of the Topic from the consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
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
     * A jurisdiction in which the Topic is intended to be used.
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
     * A jurisdiction in which the Topic is intended to be used.
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
     * A jurisdiction in which the Topic is intended to be used.
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
     * A jurisdiction in which the Topic is intended to be used.
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
     * A jurisdiction in which the Topic is intended to be used.
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
     * Explains why this Topic is needed and why it has been designed as it has.
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
     * Explains why this Topic is needed and why it has been designed as it has.
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
     * A copyright statement relating to the SubscriptionTopic and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the SubscriptionTopic.
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
     * A copyright statement relating to the SubscriptionTopic and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the SubscriptionTopic.
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
     * The period during which the SubscriptionTopic content was or is planned to be effective.
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
     * The period during which the SubscriptionTopic content was or is planned to be effective.
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
     * Adds as resourceTrigger
     *
     * A definition of a resource-based event that triggers a notification based on the SubscriptionTopic. The criteria may be just a human readable description and/or a full FHIR search string or FHIRPath expression. Multiple triggers are considered OR joined (e.g., a resource update matching ANY of the definitions will trigger a notification).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicResourceTriggerType $resourceTrigger
     */
    public function addToResourceTrigger(\TKusy\Hl7Fhir\R5\SubscriptionTopicResourceTriggerType $resourceTrigger)
    {
        $this->resourceTrigger[] = $resourceTrigger;
        return $this;
    }

    /**
     * isset resourceTrigger
     *
     * A definition of a resource-based event that triggers a notification based on the SubscriptionTopic. The criteria may be just a human readable description and/or a full FHIR search string or FHIRPath expression. Multiple triggers are considered OR joined (e.g., a resource update matching ANY of the definitions will trigger a notification).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceTrigger($index)
    {
        return isset($this->resourceTrigger[$index]);
    }

    /**
     * unset resourceTrigger
     *
     * A definition of a resource-based event that triggers a notification based on the SubscriptionTopic. The criteria may be just a human readable description and/or a full FHIR search string or FHIRPath expression. Multiple triggers are considered OR joined (e.g., a resource update matching ANY of the definitions will trigger a notification).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceTrigger($index)
    {
        unset($this->resourceTrigger[$index]);
    }

    /**
     * Gets as resourceTrigger
     *
     * A definition of a resource-based event that triggers a notification based on the SubscriptionTopic. The criteria may be just a human readable description and/or a full FHIR search string or FHIRPath expression. Multiple triggers are considered OR joined (e.g., a resource update matching ANY of the definitions will trigger a notification).
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionTopicResourceTriggerType[]
     */
    public function getResourceTrigger()
    {
        return $this->resourceTrigger;
    }

    /**
     * Sets a new resourceTrigger
     *
     * A definition of a resource-based event that triggers a notification based on the SubscriptionTopic. The criteria may be just a human readable description and/or a full FHIR search string or FHIRPath expression. Multiple triggers are considered OR joined (e.g., a resource update matching ANY of the definitions will trigger a notification).
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicResourceTriggerType[] $resourceTrigger
     * @return self
     */
    public function setResourceTrigger(array $resourceTrigger = null)
    {
        $this->resourceTrigger = $resourceTrigger;
        return $this;
    }

    /**
     * Adds as eventTrigger
     *
     * Event definition which can be used to trigger the SubscriptionTopic.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicEventTriggerType $eventTrigger
     */
    public function addToEventTrigger(\TKusy\Hl7Fhir\R5\SubscriptionTopicEventTriggerType $eventTrigger)
    {
        $this->eventTrigger[] = $eventTrigger;
        return $this;
    }

    /**
     * isset eventTrigger
     *
     * Event definition which can be used to trigger the SubscriptionTopic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventTrigger($index)
    {
        return isset($this->eventTrigger[$index]);
    }

    /**
     * unset eventTrigger
     *
     * Event definition which can be used to trigger the SubscriptionTopic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventTrigger($index)
    {
        unset($this->eventTrigger[$index]);
    }

    /**
     * Gets as eventTrigger
     *
     * Event definition which can be used to trigger the SubscriptionTopic.
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionTopicEventTriggerType[]
     */
    public function getEventTrigger()
    {
        return $this->eventTrigger;
    }

    /**
     * Sets a new eventTrigger
     *
     * Event definition which can be used to trigger the SubscriptionTopic.
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicEventTriggerType[] $eventTrigger
     * @return self
     */
    public function setEventTrigger(array $eventTrigger = null)
    {
        $this->eventTrigger = $eventTrigger;
        return $this;
    }

    /**
     * Adds as canFilterBy
     *
     * List of properties by which Subscriptions on the SubscriptionTopic can be filtered. May be defined Search Parameters (e.g., Encounter.patient) or parameters defined within this SubscriptionTopic context (e.g., hub.event).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicCanFilterByType $canFilterBy
     */
    public function addToCanFilterBy(\TKusy\Hl7Fhir\R5\SubscriptionTopicCanFilterByType $canFilterBy)
    {
        $this->canFilterBy[] = $canFilterBy;
        return $this;
    }

    /**
     * isset canFilterBy
     *
     * List of properties by which Subscriptions on the SubscriptionTopic can be filtered. May be defined Search Parameters (e.g., Encounter.patient) or parameters defined within this SubscriptionTopic context (e.g., hub.event).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCanFilterBy($index)
    {
        return isset($this->canFilterBy[$index]);
    }

    /**
     * unset canFilterBy
     *
     * List of properties by which Subscriptions on the SubscriptionTopic can be filtered. May be defined Search Parameters (e.g., Encounter.patient) or parameters defined within this SubscriptionTopic context (e.g., hub.event).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCanFilterBy($index)
    {
        unset($this->canFilterBy[$index]);
    }

    /**
     * Gets as canFilterBy
     *
     * List of properties by which Subscriptions on the SubscriptionTopic can be filtered. May be defined Search Parameters (e.g., Encounter.patient) or parameters defined within this SubscriptionTopic context (e.g., hub.event).
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionTopicCanFilterByType[]
     */
    public function getCanFilterBy()
    {
        return $this->canFilterBy;
    }

    /**
     * Sets a new canFilterBy
     *
     * List of properties by which Subscriptions on the SubscriptionTopic can be filtered. May be defined Search Parameters (e.g., Encounter.patient) or parameters defined within this SubscriptionTopic context (e.g., hub.event).
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicCanFilterByType[] $canFilterBy
     * @return self
     */
    public function setCanFilterBy(array $canFilterBy = null)
    {
        $this->canFilterBy = $canFilterBy;
        return $this;
    }

    /**
     * Adds as notificationShape
     *
     * List of properties to describe the shape (e.g., resources) included in notifications from this Subscription Topic.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicNotificationShapeType $notificationShape
     */
    public function addToNotificationShape(\TKusy\Hl7Fhir\R5\SubscriptionTopicNotificationShapeType $notificationShape)
    {
        $this->notificationShape[] = $notificationShape;
        return $this;
    }

    /**
     * isset notificationShape
     *
     * List of properties to describe the shape (e.g., resources) included in notifications from this Subscription Topic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationShape($index)
    {
        return isset($this->notificationShape[$index]);
    }

    /**
     * unset notificationShape
     *
     * List of properties to describe the shape (e.g., resources) included in notifications from this Subscription Topic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationShape($index)
    {
        unset($this->notificationShape[$index]);
    }

    /**
     * Gets as notificationShape
     *
     * List of properties to describe the shape (e.g., resources) included in notifications from this Subscription Topic.
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionTopicNotificationShapeType[]
     */
    public function getNotificationShape()
    {
        return $this->notificationShape;
    }

    /**
     * Sets a new notificationShape
     *
     * List of properties to describe the shape (e.g., resources) included in notifications from this Subscription Topic.
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicNotificationShapeType[] $notificationShape
     * @return self
     */
    public function setNotificationShape(array $notificationShape = null)
    {
        $this->notificationShape = $notificationShape;
        return $this;
    }


}

