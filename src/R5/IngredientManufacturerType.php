<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing IngredientManufacturerType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * XSD Type: Ingredient.Manufacturer
 */
class IngredientManufacturerType extends BackboneElementType
{

    /**
     * The way in which this manufacturer is associated with the ingredient. For example whether it is a possible one (others allowed), or an exclusive authorized one for this ingredient. Note that this is not the manufacturing process role.
     *
     * @var \TKusy\Hl7Fhir\R5\IngredientManufacturerRoleType $role
     */
    private $role = null;

    /**
     * An organization that manufactures this ingredient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $manufacturer
     */
    private $manufacturer = null;

    /**
     * Gets as role
     *
     * The way in which this manufacturer is associated with the ingredient. For example whether it is a possible one (others allowed), or an exclusive authorized one for this ingredient. Note that this is not the manufacturing process role.
     *
     * @return \TKusy\Hl7Fhir\R5\IngredientManufacturerRoleType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The way in which this manufacturer is associated with the ingredient. For example whether it is a possible one (others allowed), or an exclusive authorized one for this ingredient. Note that this is not the manufacturing process role.
     *
     * @param \TKusy\Hl7Fhir\R5\IngredientManufacturerRoleType $role
     * @return self
     */
    public function setRole(?\TKusy\Hl7Fhir\R5\IngredientManufacturerRoleType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as manufacturer
     *
     * An organization that manufactures this ingredient.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * An organization that manufactures this ingredient.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $manufacturer
     * @return self
     */
    public function setManufacturer(\TKusy\Hl7Fhir\R5\ReferenceType $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }


}

