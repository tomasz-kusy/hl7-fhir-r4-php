<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing NamingSystemType
 *
 * A curated namespace that issues unique symbols within that namespace for the identification of concepts, people, devices, etc. Represents a "System" used within the Identifier and Coding data types.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: NamingSystem
 */
class NamingSystemType extends DomainResourceType
{

    /**
     * A natural language name identifying the naming system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * The status of this naming system. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     *
     * @var \TKusy\Hl7FhirR4\NamingSystemTypeType $kind
     */
    private $kind = null;

    /**
     * The date (and optionally time) when the naming system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the naming system changes.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the naming system.
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
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     *
     * @var \TKusy\Hl7FhirR4\StringType $responsible
     */
    private $responsible = null;

    /**
     * Categorizes a naming system for easier search by grouping related naming systems.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A free text natural language description of the naming system from a consumer's perspective. Details about what the namespace identifies including scope, granularity, version labeling, etc.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate naming system instances.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     */
    private $useContext = [
        
    ];

    /**
     * A legal or geographic region in which the naming system is intended to be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = [
        
    ];

    /**
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     *
     * @var \TKusy\Hl7FhirR4\StringType $usage
     */
    private $usage = null;

    /**
     * Indicates how the system may be identified when referenced in electronic exchange.
     *
     * @var \TKusy\Hl7FhirR4\NamingSystemUniqueIdType[] $uniqueId
     */
    private $uniqueId = [
        
    ];

    /**
     * Gets as name
     *
     * A natural language name identifying the naming system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the naming system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * Gets as status
     *
     * The status of this naming system. Enables tracking the life-cycle of the content.
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
     * The status of this naming system. Enables tracking the life-cycle of the content.
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
     * Gets as kind
     *
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     *
     * @return \TKusy\Hl7FhirR4\NamingSystemTypeType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     *
     * @param \TKusy\Hl7FhirR4\NamingSystemTypeType $kind
     * @return self
     */
    public function setKind(\TKusy\Hl7FhirR4\NamingSystemTypeType $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the naming system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the naming system changes.
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
     * The date (and optionally time) when the naming system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the naming system changes.
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
     * The name of the organization or individual that published the naming system.
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
     * The name of the organization or individual that published the naming system.
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
     * Gets as responsible
     *
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Sets a new responsible
     *
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     *
     * @param \TKusy\Hl7FhirR4\StringType $responsible
     * @return self
     */
    public function setResponsible(\TKusy\Hl7FhirR4\StringType $responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Gets as type
     *
     * Categorizes a naming system for easier search by grouping related naming systems.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Categorizes a naming system for easier search by grouping related naming systems.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as description
     *
     * A free text natural language description of the naming system from a consumer's perspective. Details about what the namespace identifies including scope, granularity, version labeling, etc.
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
     * A free text natural language description of the naming system from a consumer's perspective. Details about what the namespace identifies including scope, granularity, version labeling, etc.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate naming system instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate naming system instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate naming system instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate naming system instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate naming system instances.
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
     * A legal or geographic region in which the naming system is intended to be used.
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
     * A legal or geographic region in which the naming system is intended to be used.
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
     * A legal or geographic region in which the naming system is intended to be used.
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
     * A legal or geographic region in which the naming system is intended to be used.
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
     * A legal or geographic region in which the naming system is intended to be used.
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
     * Gets as usage
     *
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     *
     * @param \TKusy\Hl7FhirR4\StringType $usage
     * @return self
     */
    public function setUsage(\TKusy\Hl7FhirR4\StringType $usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Adds as uniqueId
     *
     * Indicates how the system may be identified when referenced in electronic exchange.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\NamingSystemUniqueIdType $uniqueId
     */
    public function addToUniqueId(\TKusy\Hl7FhirR4\NamingSystemUniqueIdType $uniqueId)
    {
        $this->uniqueId[] = $uniqueId;
        return $this;
    }

    /**
     * isset uniqueId
     *
     * Indicates how the system may be identified when referenced in electronic exchange.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueId($index)
    {
        return isset($this->uniqueId[$index]);
    }

    /**
     * unset uniqueId
     *
     * Indicates how the system may be identified when referenced in electronic exchange.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueId($index)
    {
        unset($this->uniqueId[$index]);
    }

    /**
     * Gets as uniqueId
     *
     * Indicates how the system may be identified when referenced in electronic exchange.
     *
     * @return \TKusy\Hl7FhirR4\NamingSystemUniqueIdType[]
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Sets a new uniqueId
     *
     * Indicates how the system may be identified when referenced in electronic exchange.
     *
     * @param \TKusy\Hl7FhirR4\NamingSystemUniqueIdType[] $uniqueId
     * @return self
     */
    public function setUniqueId(array $uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }


}

