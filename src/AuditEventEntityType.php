<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AuditEventEntityType
 *
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 * XSD Type: AuditEvent.Entity
 */
class AuditEventEntityType extends BackboneElementType
{

    /**
     * Identifies a specific instance of the entity. The reference should be version specific.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $what
     */
    private $what = null;

    /**
     * The type of the object that was involved in this audit event.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $type
     */
    private $type = null;

    /**
     * Code representing the role the entity played in the event being audited.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $role
     */
    private $role = null;

    /**
     * Identifier for the data life-cycle stage for the entity.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $lifecycle
     */
    private $lifecycle = null;

    /**
     * Security labels for the identified entity.
     *
     * @var \TKusy\Hl7FhirR4\CodingType[] $securityLabel
     */
    private $securityLabel = null;

    /**
     * A name of the entity in the audit event.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Text that describes the entity in more detail.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The query parameters for a query-type entities.
     *
     * @var \TKusy\Hl7FhirR4\Base64BinaryType $query
     */
    private $query = null;

    /**
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @var \TKusy\Hl7FhirR4\AuditEventDetailType[] $detail
     */
    private $detail = null;

    /**
     * Gets as what
     *
     * Identifies a specific instance of the entity. The reference should be version specific.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * Sets a new what
     *
     * Identifies a specific instance of the entity. The reference should be version specific.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $what
     * @return self
     */
    public function setWhat(\TKusy\Hl7FhirR4\ReferenceType $what)
    {
        $this->what = $what;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of the object that was involved in this audit event.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the object that was involved in this audit event.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodingType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as role
     *
     * Code representing the role the entity played in the event being audited.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Code representing the role the entity played in the event being audited.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7FhirR4\CodingType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as lifecycle
     *
     * Identifier for the data life-cycle stage for the entity.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getLifecycle()
    {
        return $this->lifecycle;
    }

    /**
     * Sets a new lifecycle
     *
     * Identifier for the data life-cycle stage for the entity.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $lifecycle
     * @return self
     */
    public function setLifecycle(\TKusy\Hl7FhirR4\CodingType $lifecycle)
    {
        $this->lifecycle = $lifecycle;
        return $this;
    }

    /**
     * Adds as securityLabel
     *
     * Security labels for the identified entity.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodingType $securityLabel
     */
    public function addToSecurityLabel(\TKusy\Hl7FhirR4\CodingType $securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * isset securityLabel
     *
     * Security labels for the identified entity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityLabel($index)
    {
        return isset($this->securityLabel[$index]);
    }

    /**
     * unset securityLabel
     *
     * Security labels for the identified entity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityLabel($index)
    {
        unset($this->securityLabel[$index]);
    }

    /**
     * Gets as securityLabel
     *
     * Security labels for the identified entity.
     *
     * @return \TKusy\Hl7FhirR4\CodingType[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * Sets a new securityLabel
     *
     * Security labels for the identified entity.
     *
     * @param \TKusy\Hl7FhirR4\CodingType[] $securityLabel
     * @return self
     */
    public function setSecurityLabel(array $securityLabel)
    {
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Gets as name
     *
     * A name of the entity in the audit event.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name of the entity in the audit event.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * Text that describes the entity in more detail.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Text that describes the entity in more detail.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as query
     *
     * The query parameters for a query-type entities.
     *
     * @return \TKusy\Hl7FhirR4\Base64BinaryType
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets a new query
     *
     * The query parameters for a query-type entities.
     *
     * @param \TKusy\Hl7FhirR4\Base64BinaryType $query
     * @return self
     */
    public function setQuery(\TKusy\Hl7FhirR4\Base64BinaryType $query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Adds as detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AuditEventDetailType $detail
     */
    public function addToDetail(\TKusy\Hl7FhirR4\AuditEventDetailType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @return \TKusy\Hl7FhirR4\AuditEventDetailType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @param \TKusy\Hl7FhirR4\AuditEventDetailType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

