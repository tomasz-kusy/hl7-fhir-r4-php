<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing OrganizationType
 *
 * A formally or informally recognized grouping of people or organizations formed for the purpose of achieving some form of collective action. Includes companies, institutions, corporations, departments, community groups, healthcare practice groups, payer/insurer, etc.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Organization
 */
class OrganizationType extends DomainResourceType
{

    /**
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Whether the organization's record is still in active use.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $active
     */
    private $active = null;

    /**
     * The kind(s) of organization that this is.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     */
    private $type = [
        
    ];

    /**
     * A name associated with the organization.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A list of alternate names that the organization is known as, or was known as in the past.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $alias
     */
    private $alias = [
        
    ];

    /**
     * A contact detail for the organization.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     */
    private $telecom = [
        
    ];

    /**
     * An address for the organization.
     *
     * @var \TKusy\Hl7FhirR4\AddressType[] $address
     */
    private $address = [
        
    ];

    /**
     * The organization of which this organization forms a part.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $partOf
     */
    private $partOf = null;

    /**
     * Contact for the organization for a certain purpose.
     *
     * @var \TKusy\Hl7FhirR4\OrganizationContactType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Technical endpoints providing access to services operated for the organization.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     */
    private $endpoint = [
        
    ];

    /**
     * Adds as identifier
     *
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as active
     *
     * Whether the organization's record is still in active use.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
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
     * @param \TKusy\Hl7FhirR4\BooleanType $active
     * @return self
     */
    public function setActive(\TKusy\Hl7FhirR4\BooleanType $active)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * A name associated with the organization.
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
     * A name associated with the organization.
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
     * Adds as alias
     *
     * A list of alternate names that the organization is known as, or was known as in the past.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $alias
     */
    public function addToAlias(\TKusy\Hl7FhirR4\StringType $alias)
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
     * @return \TKusy\Hl7FhirR4\StringType[]
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
     * @param \TKusy\Hl7FhirR4\StringType[] $alias
     * @return self
     */
    public function setAlias(array $alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * A contact detail for the organization.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContactPointType $telecom
     */
    public function addToTelecom(\TKusy\Hl7FhirR4\ContactPointType $telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * isset telecom
     *
     * A contact detail for the organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelecom($index)
    {
        return isset($this->telecom[$index]);
    }

    /**
     * unset telecom
     *
     * A contact detail for the organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelecom($index)
    {
        unset($this->telecom[$index]);
    }

    /**
     * Gets as telecom
     *
     * A contact detail for the organization.
     *
     * @return \TKusy\Hl7FhirR4\ContactPointType[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Sets a new telecom
     *
     * A contact detail for the organization.
     *
     * @param \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom)
    {
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * Adds as address
     *
     * An address for the organization.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AddressType $address
     */
    public function addToAddress(\TKusy\Hl7FhirR4\AddressType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * An address for the organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * An address for the organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * An address for the organization.
     *
     * @return \TKusy\Hl7FhirR4\AddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * An address for the organization.
     *
     * @param \TKusy\Hl7FhirR4\AddressType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as partOf
     *
     * The organization of which this organization forms a part.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $partOf
     * @return self
     */
    public function setPartOf(\TKusy\Hl7FhirR4\ReferenceType $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact for the organization for a certain purpose.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\OrganizationContactType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\OrganizationContactType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact for the organization for a certain purpose.
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
     * Contact for the organization for a certain purpose.
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
     * Contact for the organization for a certain purpose.
     *
     * @return \TKusy\Hl7FhirR4\OrganizationContactType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact for the organization for a certain purpose.
     *
     * @param \TKusy\Hl7FhirR4\OrganizationContactType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * Technical endpoints providing access to services operated for the organization.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $endpoint
     */
    public function addToEndpoint(\TKusy\Hl7FhirR4\ReferenceType $endpoint)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }


}

