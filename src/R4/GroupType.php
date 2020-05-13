<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing GroupType
 *
 * Represents a defined collection of entities that may be discussed or acted upon collectively but which are not expected to act collectively, and are not formally or legally recognized; i.e. a collection of entities that isn't an Organization.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Group
 */
class GroupType extends DomainResourceType
{

    /**
     * A unique business identifier for this group.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $active
     */
    private $active = null;

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @var \TKusy\Hl7Fhir\R4\GroupTypeType $type
     */
    private $type = null;

    /**
     * If true, indicates that the resource refers to a specific group of real individuals. If false, the group defines a set of intended individuals.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $actual
     */
    private $actual = null;

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A label assigned to the group for human identification and communication.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * A count of the number of resource instances that are part of the group.
     *
     * @var \TKusy\Hl7Fhir\R4\UnsignedIntType $quantity
     */
    private $quantity = null;

    /**
     * Entity responsible for defining and maintaining Group characteristics and/or registered members.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $managingEntity
     */
    private $managingEntity = null;

    /**
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @var \TKusy\Hl7Fhir\R4\GroupCharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Identifies the resource instances that are members of the group.
     *
     * @var \TKusy\Hl7Fhir\R4\GroupMemberType[] $member
     */
    private $member = null;

    /**
     * Adds as identifier
     *
     * A unique business identifier for this group.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A unique business identifier for this group.
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
     * A unique business identifier for this group.
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
     * A unique business identifier for this group.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A unique business identifier for this group.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
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
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $active
     * @return self
     */
    public function setActive(\TKusy\Hl7Fhir\R4\BooleanType $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as type
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @return \TKusy\Hl7Fhir\R4\GroupTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @param \TKusy\Hl7Fhir\R4\GroupTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\GroupTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as actual
     *
     * If true, indicates that the resource refers to a specific group of real individuals. If false, the group defines a set of intended individuals.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Sets a new actual
     *
     * If true, indicates that the resource refers to a specific group of real individuals. If false, the group defines a set of intended individuals.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $actual
     * @return self
     */
    public function setActual(\TKusy\Hl7Fhir\R4\BooleanType $actual)
    {
        $this->actual = $actual;
        return $this;
    }

    /**
     * Gets as code
     *
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as name
     *
     * A label assigned to the group for human identification and communication.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A label assigned to the group for human identification and communication.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @return \TKusy\Hl7Fhir\R4\UnsignedIntType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7Fhir\R4\UnsignedIntType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as managingEntity
     *
     * Entity responsible for defining and maintaining Group characteristics and/or registered members.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getManagingEntity()
    {
        return $this->managingEntity;
    }

    /**
     * Sets a new managingEntity
     *
     * Entity responsible for defining and maintaining Group characteristics and/or registered members.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $managingEntity
     * @return self
     */
    public function setManagingEntity(\TKusy\Hl7Fhir\R4\ReferenceType $managingEntity)
    {
        $this->managingEntity = $managingEntity;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\GroupCharacteristicType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R4\GroupCharacteristicType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristic($index)
    {
        return isset($this->characteristic[$index]);
    }

    /**
     * unset characteristic
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristic($index)
    {
        unset($this->characteristic[$index]);
    }

    /**
     * Gets as characteristic
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @return \TKusy\Hl7Fhir\R4\GroupCharacteristicType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @param \TKusy\Hl7Fhir\R4\GroupCharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Adds as member
     *
     * Identifies the resource instances that are members of the group.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\GroupMemberType $member
     */
    public function addToMember(\TKusy\Hl7Fhir\R4\GroupMemberType $member)
    {
        $this->member[] = $member;
        return $this;
    }

    /**
     * isset member
     *
     * Identifies the resource instances that are members of the group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMember($index)
    {
        return isset($this->member[$index]);
    }

    /**
     * unset member
     *
     * Identifies the resource instances that are members of the group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMember($index)
    {
        unset($this->member[$index]);
    }

    /**
     * Gets as member
     *
     * Identifies the resource instances that are members of the group.
     *
     * @return \TKusy\Hl7Fhir\R4\GroupMemberType[]
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Sets a new member
     *
     * Identifies the resource instances that are members of the group.
     *
     * @param \TKusy\Hl7Fhir\R4\GroupMemberType[] $member
     * @return self
     */
    public function setMember(array $member)
    {
        $this->member = $member;
        return $this;
    }


}

