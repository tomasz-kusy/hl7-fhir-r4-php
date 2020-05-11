<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing GroupMemberType
 *
 * Represents a defined collection of entities that may be discussed or acted upon collectively but which are not expected to act collectively, and are not formally or legally recognized; i.e. a collection of entities that isn't an Organization.
 * XSD Type: Group.Member
 */
class GroupMemberType extends BackboneElementType
{

    /**
     * A reference to the entity that is a member of the group. Must be consistent with Group.type. If the entity is another group, then the type must be the same.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $entity
     */
    private $entity = null;

    /**
     * The period that the member was in the group, if known.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * A flag to indicate that the member is no longer in the group, but previously may have been a member.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $inactive
     */
    private $inactive = null;

    /**
     * Gets as entity
     *
     * A reference to the entity that is a member of the group. Must be consistent with Group.type. If the entity is another group, then the type must be the same.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Sets a new entity
     *
     * A reference to the entity that is a member of the group. Must be consistent with Group.type. If the entity is another group, then the type must be the same.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $entity
     * @return self
     */
    public function setEntity(\TKusy\Hl7FhirR4\ReferenceType $entity)
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period that the member was in the group, if known.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period that the member was in the group, if known.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as inactive
     *
     * A flag to indicate that the member is no longer in the group, but previously may have been a member.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Sets a new inactive
     *
     * A flag to indicate that the member is no longer in the group, but previously may have been a member.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $inactive
     * @return self
     */
    public function setInactive(\TKusy\Hl7FhirR4\BooleanType $inactive)
    {
        $this->inactive = $inactive;
        return $this;
    }


}

