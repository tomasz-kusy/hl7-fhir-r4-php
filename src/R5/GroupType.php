<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GroupType
 *
 * Represents a defined collection of entities that may be discussed or acted upon collectively but which are not expected to act collectively, and are not formally or legally recognized; i.e. a collection of entities that isn't an Organization.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Group
 */
class GroupType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this participant by one of the applications involved. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $active
     */
    private $active = null;

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @var \TKusy\Hl7Fhir\R5\GroupTypeType $type
     */
    private $type = null;

    /**
     * Basis for membership in the Group:
     *
     * * 'definitional': The Group.characteristics specified are both necessary and sufficient to determine membership. All entities that meet the criteria are considered to be members of the group, whether referenced by the group or not. If members are present, they are individuals that happen to be known as meeting the Group.characteristics. The list cannot be presumed to be complete.
     * * 'enumerated': The Group.characteristics are necessary but not sufficient to determine membership. Membership is determined by being listed as one of the Group.member.
     *
     * @var \TKusy\Hl7Fhir\R5\GroupMembershipBasisType $membership
     */
    private $membership = null;

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A label assigned to the group for human identification and communication.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Explanation of what the group represents and how it is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * A count of the number of resource instances that are part of the group.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $quantity
     */
    private $quantity = null;

    /**
     * Entity responsible for defining and maintaining Group characteristics and/or registered members.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $managingEntity
     */
    private $managingEntity = null;

    /**
     * Identifies traits whose presence r absence is shared by members of the group.
     *
     * @var \TKusy\Hl7Fhir\R5\GroupCharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Identifies the resource instances that are members of the group.
     *
     * @var \TKusy\Hl7Fhir\R5\GroupMemberType[] $member
     */
    private $member = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this participant by one of the applications involved. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this participant by one of the applications involved. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this participant by one of the applications involved. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this participant by one of the applications involved. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this participant by one of the applications involved. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
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
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
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
     * Gets as type
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @return \TKusy\Hl7Fhir\R5\GroupTypeType
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
     * @param \TKusy\Hl7Fhir\R5\GroupTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\GroupTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as membership
     *
     * Basis for membership in the Group:
     *
     * * 'definitional': The Group.characteristics specified are both necessary and sufficient to determine membership. All entities that meet the criteria are considered to be members of the group, whether referenced by the group or not. If members are present, they are individuals that happen to be known as meeting the Group.characteristics. The list cannot be presumed to be complete.
     * * 'enumerated': The Group.characteristics are necessary but not sufficient to determine membership. Membership is determined by being listed as one of the Group.member.
     *
     * @return \TKusy\Hl7Fhir\R5\GroupMembershipBasisType
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Sets a new membership
     *
     * Basis for membership in the Group:
     *
     * * 'definitional': The Group.characteristics specified are both necessary and sufficient to determine membership. All entities that meet the criteria are considered to be members of the group, whether referenced by the group or not. If members are present, they are individuals that happen to be known as meeting the Group.characteristics. The list cannot be presumed to be complete.
     * * 'enumerated': The Group.characteristics are necessary but not sufficient to determine membership. Membership is determined by being listed as one of the Group.member.
     *
     * @param \TKusy\Hl7Fhir\R5\GroupMembershipBasisType $membership
     * @return self
     */
    public function setMembership(\TKusy\Hl7Fhir\R5\GroupMembershipBasisType $membership)
    {
        $this->membership = $membership;
        return $this;
    }

    /**
     * Gets as code
     *
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as name
     *
     * A label assigned to the group for human identification and communication.
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
     * A label assigned to the group for human identification and communication.
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
     * Gets as description
     *
     * Explanation of what the group represents and how it is intended to be used.
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
     * Explanation of what the group represents and how it is intended to be used.
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
     * Gets as quantity
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
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
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\UnsignedIntType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as managingEntity
     *
     * Entity responsible for defining and maintaining Group characteristics and/or registered members.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $managingEntity
     * @return self
     */
    public function setManagingEntity(?\TKusy\Hl7Fhir\R5\ReferenceType $managingEntity = null)
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
     * @param \TKusy\Hl7Fhir\R5\GroupCharacteristicType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R5\GroupCharacteristicType $characteristic)
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
     * @return \TKusy\Hl7Fhir\R5\GroupCharacteristicType[]
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
     * @param \TKusy\Hl7Fhir\R5\GroupCharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic = null)
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
     * @param \TKusy\Hl7Fhir\R5\GroupMemberType $member
     */
    public function addToMember(\TKusy\Hl7Fhir\R5\GroupMemberType $member)
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
     * @return \TKusy\Hl7Fhir\R5\GroupMemberType[]
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
     * @param \TKusy\Hl7Fhir\R5\GroupMemberType[] $member
     * @return self
     */
    public function setMember(array $member = null)
    {
        $this->member = $member;
        return $this;
    }


}

