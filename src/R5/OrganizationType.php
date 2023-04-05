<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing OrganizationType
 *
 * A formally or informally recognized grouping of people or organizations formed for the purpose of achieving some form of collective action. Includes companies, institutions, corporations, departments, community groups, healthcare practice groups, payer/insurer, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Organization
 */
class OrganizationType extends DomainResourceType
{

    /**
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether the organization's record is still in active use.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $active
     */
    private $active = null;

    /**
     * The kind(s) of organization that this is.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * A name associated with the organization.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A list of alternate names that the organization is known as, or was known as in the past.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $alias
     */
    private $alias = null;

    /**
     * Description of the organization, which helps provide additional general context on the organization to ensure that the correct organization is selected.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The contact details of communication devices available relevant to the specific Organization. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @var \TKusy\Hl7Fhir\R5\ExtendedContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * The organization of which this organization forms a part.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    private $partOf = null;

    /**
     * Technical endpoints providing access to services operated for the organization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * The official certifications, accreditations, training, designations and licenses that authorize and/or otherwise endorse the provision of care by the organization.
     *
     * For example, an approval to provide a type of services issued by a certifying body (such as the US Joint Commission) to an organization.
     *
     * @var \TKusy\Hl7Fhir\R5\OrganizationQualificationType[] $qualification
     */
    private $qualification = null;

    /**
     * Adds as identifier
     *
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
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
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
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
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
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
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
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
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
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
     * Gets as active
     *
     * Whether the organization's record is still in active use.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Whether the organization's record is still in active use.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $active
     * @return self
     */
    public function setActive(?\TKusy\Hl7Fhir\R5\BooleanType $active = null)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Adds as type
     *
     * The kind(s) of organization that this is.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The kind(s) of organization that this is.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The kind(s) of organization that this is.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The kind(s) of organization that this is.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The kind(s) of organization that this is.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * A name associated with the organization.
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
     * A name associated with the organization.
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
     * Adds as alias
     *
     * A list of alternate names that the organization is known as, or was known as in the past.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $alias
     */
    public function addToAlias(\TKusy\Hl7Fhir\R5\StringType $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * isset alias
     *
     * A list of alternate names that the organization is known as, or was known as in the past.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlias($index)
    {
        return isset($this->alias[$index]);
    }

    /**
     * unset alias
     *
     * A list of alternate names that the organization is known as, or was known as in the past.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlias($index)
    {
        unset($this->alias[$index]);
    }

    /**
     * Gets as alias
     *
     * A list of alternate names that the organization is known as, or was known as in the past.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * A list of alternate names that the organization is known as, or was known as in the past.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $alias
     * @return self
     */
    public function setAlias(array $alias = null)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the organization, which helps provide additional general context on the organization to ensure that the correct organization is selected.
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
     * Description of the organization, which helps provide additional general context on the organization to ensure that the correct organization is selected.
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
     * Adds as contact
     *
     * The contact details of communication devices available relevant to the specific Organization. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExtendedContactDetailType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R5\ExtendedContactDetailType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * The contact details of communication devices available relevant to the specific Organization. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * The contact details of communication devices available relevant to the specific Organization. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * The contact details of communication devices available relevant to the specific Organization. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @return \TKusy\Hl7Fhir\R5\ExtendedContactDetailType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * The contact details of communication devices available relevant to the specific Organization. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @param \TKusy\Hl7Fhir\R5\ExtendedContactDetailType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as partOf
     *
     * The organization of which this organization forms a part.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * The organization of which this organization forms a part.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     * @return self
     */
    public function setPartOf(?\TKusy\Hl7Fhir\R5\ReferenceType $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * Technical endpoints providing access to services operated for the organization.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $endpoint
     */
    public function addToEndpoint(\TKusy\Hl7Fhir\R5\ReferenceType $endpoint)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * isset endpoint
     *
     * Technical endpoints providing access to services operated for the organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndpoint($index)
    {
        return isset($this->endpoint[$index]);
    }

    /**
     * unset endpoint
     *
     * Technical endpoints providing access to services operated for the organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndpoint($index)
    {
        unset($this->endpoint[$index]);
    }

    /**
     * Gets as endpoint
     *
     * Technical endpoints providing access to services operated for the organization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * Technical endpoints providing access to services operated for the organization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint = null)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Adds as qualification
     *
     * The official certifications, accreditations, training, designations and licenses that authorize and/or otherwise endorse the provision of care by the organization.
     *
     * For example, an approval to provide a type of services issued by a certifying body (such as the US Joint Commission) to an organization.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\OrganizationQualificationType $qualification
     */
    public function addToQualification(\TKusy\Hl7Fhir\R5\OrganizationQualificationType $qualification)
    {
        $this->qualification[] = $qualification;
        return $this;
    }

    /**
     * isset qualification
     *
     * The official certifications, accreditations, training, designations and licenses that authorize and/or otherwise endorse the provision of care by the organization.
     *
     * For example, an approval to provide a type of services issued by a certifying body (such as the US Joint Commission) to an organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualification($index)
    {
        return isset($this->qualification[$index]);
    }

    /**
     * unset qualification
     *
     * The official certifications, accreditations, training, designations and licenses that authorize and/or otherwise endorse the provision of care by the organization.
     *
     * For example, an approval to provide a type of services issued by a certifying body (such as the US Joint Commission) to an organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualification($index)
    {
        unset($this->qualification[$index]);
    }

    /**
     * Gets as qualification
     *
     * The official certifications, accreditations, training, designations and licenses that authorize and/or otherwise endorse the provision of care by the organization.
     *
     * For example, an approval to provide a type of services issued by a certifying body (such as the US Joint Commission) to an organization.
     *
     * @return \TKusy\Hl7Fhir\R5\OrganizationQualificationType[]
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Sets a new qualification
     *
     * The official certifications, accreditations, training, designations and licenses that authorize and/or otherwise endorse the provision of care by the organization.
     *
     * For example, an approval to provide a type of services issued by a certifying body (such as the US Joint Commission) to an organization.
     *
     * @param \TKusy\Hl7Fhir\R5\OrganizationQualificationType[] $qualification
     * @return self
     */
    public function setQualification(array $qualification = null)
    {
        $this->qualification = $qualification;
        return $this;
    }


}

