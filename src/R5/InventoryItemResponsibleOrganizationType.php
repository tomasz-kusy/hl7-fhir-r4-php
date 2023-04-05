<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryItemResponsibleOrganizationType
 *
 * A functional description of an inventory item used in inventory and supply-related workflows.
 * XSD Type: InventoryItem.ResponsibleOrganization
 */
class InventoryItemResponsibleOrganizationType extends BackboneElementType
{

    /**
     * The role of the organization e.g. manufacturer, distributor, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * An organization that has an association with the item, e.g. manufacturer, distributor, responsible, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $organization
     */
    private $organization = null;

    /**
     * Gets as role
     *
     * The role of the organization e.g. manufacturer, distributor, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The role of the organization e.g. manufacturer, distributor, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7Fhir\R5\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as organization
     *
     * An organization that has an association with the item, e.g. manufacturer, distributor, responsible, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * An organization that has an association with the item, e.g. manufacturer, distributor, responsible, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $organization
     * @return self
     */
    public function setOrganization(\TKusy\Hl7Fhir\R5\ReferenceType $organization)
    {
        $this->organization = $organization;
        return $this;
    }


}

