<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AdministrableProductDefinitionType
 *
 * A medicinal product in the final form which is suitable for administering to a patient (after any mixing of multiple components, dissolution etc. has been performed).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: AdministrableProductDefinition
 */
class AdministrableProductDefinitionType extends DomainResourceType
{

    /**
     * An identifier for the administrable product.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of this administrable product. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * References a product from which one or more of the constituent parts of that product can be prepared and used as described by this administrable product. If this administrable product describes the administration of a crushed tablet, the 'formOf' would be the product representing a distribution containing tablets and possibly also a cream. This is distinct from the 'producedFrom' which refers to the specific components of the product that are used in this preparation, rather than the product as a whole.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $formOf
     */
    private $formOf = null;

    /**
     * The dose form of the final product after necessary reconstitution or processing. Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the manufactured form was 'powder for solution for injection', the administrable dose form could be 'solution for injection' (once mixed with another item having manufactured form 'solvent for solution for injection').
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $administrableDoseForm
     */
    private $administrableDoseForm = null;

    /**
     * The presentation type in which this item is given to a patient. e.g. for a spray - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in 'contains 5 ml per vial').
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $unitOfPresentation
     */
    private $unitOfPresentation = null;

    /**
     * Indicates the specific manufactured items that are part of the 'formOf' product that are used in the preparation of this specific administrable form. In some cases, an administrable form might use all of the items from the overall product (or there might only be one item), while in other cases, an administrable form might use only a subset of the items available in the overall product. For example, an administrable form might involve combining a liquid and a powder available as part of an overall product, but not involve applying the also supplied cream.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $producedFrom
     */
    private $producedFrom = null;

    /**
     * The ingredients of this administrable medicinal product. This is only needed if the ingredients are not specified either using ManufacturedItemDefiniton (via AdministrableProductDefinition.producedFrom) to state which component items are used to make this, or using by incoming references from the Ingredient resource, to state in detail which substances exist within this. This element allows a basic coded ingredient to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $ingredient
     */
    private $ingredient = null;

    /**
     * A device that is integral to the medicinal product, in effect being considered as an "ingredient" of the medicinal product. This is not intended for devices that are just co-packaged.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    private $device = null;

    /**
     * A general description of the product, when in its final form, suitable for administration e.g. effervescent blue liquid, to be swallowed. Intended to be used when the other structured properties of this resource are insufficient or cannot be supported. It is not intended to duplicate information already carried elswehere.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Characteristics e.g. a product's onset of action.
     *
     * @var \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionPropertyType[] $property
     */
    private $property = null;

    /**
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. RouteOfAdministration cannot be used when the 'formOf' product already uses MedicinalProductDefinition.route (and vice versa).
     *
     * @var \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionRouteOfAdministrationType[] $routeOfAdministration
     */
    private $routeOfAdministration = null;

    /**
     * Adds as identifier
     *
     * An identifier for the administrable product.
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
     * An identifier for the administrable product.
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
     * An identifier for the administrable product.
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
     * An identifier for the administrable product.
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
     * An identifier for the administrable product.
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
     * Gets as status
     *
     * The status of this administrable product. Enables tracking the life-cycle of the content.
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
     * The status of this administrable product. Enables tracking the life-cycle of the content.
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
     * Adds as formOf
     *
     * References a product from which one or more of the constituent parts of that product can be prepared and used as described by this administrable product. If this administrable product describes the administration of a crushed tablet, the 'formOf' would be the product representing a distribution containing tablets and possibly also a cream. This is distinct from the 'producedFrom' which refers to the specific components of the product that are used in this preparation, rather than the product as a whole.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $formOf
     */
    public function addToFormOf(\TKusy\Hl7Fhir\R5\ReferenceType $formOf)
    {
        $this->formOf[] = $formOf;
        return $this;
    }

    /**
     * isset formOf
     *
     * References a product from which one or more of the constituent parts of that product can be prepared and used as described by this administrable product. If this administrable product describes the administration of a crushed tablet, the 'formOf' would be the product representing a distribution containing tablets and possibly also a cream. This is distinct from the 'producedFrom' which refers to the specific components of the product that are used in this preparation, rather than the product as a whole.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormOf($index)
    {
        return isset($this->formOf[$index]);
    }

    /**
     * unset formOf
     *
     * References a product from which one or more of the constituent parts of that product can be prepared and used as described by this administrable product. If this administrable product describes the administration of a crushed tablet, the 'formOf' would be the product representing a distribution containing tablets and possibly also a cream. This is distinct from the 'producedFrom' which refers to the specific components of the product that are used in this preparation, rather than the product as a whole.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormOf($index)
    {
        unset($this->formOf[$index]);
    }

    /**
     * Gets as formOf
     *
     * References a product from which one or more of the constituent parts of that product can be prepared and used as described by this administrable product. If this administrable product describes the administration of a crushed tablet, the 'formOf' would be the product representing a distribution containing tablets and possibly also a cream. This is distinct from the 'producedFrom' which refers to the specific components of the product that are used in this preparation, rather than the product as a whole.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getFormOf()
    {
        return $this->formOf;
    }

    /**
     * Sets a new formOf
     *
     * References a product from which one or more of the constituent parts of that product can be prepared and used as described by this administrable product. If this administrable product describes the administration of a crushed tablet, the 'formOf' would be the product representing a distribution containing tablets and possibly also a cream. This is distinct from the 'producedFrom' which refers to the specific components of the product that are used in this preparation, rather than the product as a whole.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $formOf
     * @return self
     */
    public function setFormOf(array $formOf = null)
    {
        $this->formOf = $formOf;
        return $this;
    }

    /**
     * Gets as administrableDoseForm
     *
     * The dose form of the final product after necessary reconstitution or processing. Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the manufactured form was 'powder for solution for injection', the administrable dose form could be 'solution for injection' (once mixed with another item having manufactured form 'solvent for solution for injection').
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAdministrableDoseForm()
    {
        return $this->administrableDoseForm;
    }

    /**
     * Sets a new administrableDoseForm
     *
     * The dose form of the final product after necessary reconstitution or processing. Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the manufactured form was 'powder for solution for injection', the administrable dose form could be 'solution for injection' (once mixed with another item having manufactured form 'solvent for solution for injection').
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $administrableDoseForm
     * @return self
     */
    public function setAdministrableDoseForm(?\TKusy\Hl7Fhir\R5\CodeableConceptType $administrableDoseForm = null)
    {
        $this->administrableDoseForm = $administrableDoseForm;
        return $this;
    }

    /**
     * Gets as unitOfPresentation
     *
     * The presentation type in which this item is given to a patient. e.g. for a spray - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in 'contains 5 ml per vial').
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getUnitOfPresentation()
    {
        return $this->unitOfPresentation;
    }

    /**
     * Sets a new unitOfPresentation
     *
     * The presentation type in which this item is given to a patient. e.g. for a spray - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in 'contains 5 ml per vial').
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $unitOfPresentation
     * @return self
     */
    public function setUnitOfPresentation(?\TKusy\Hl7Fhir\R5\CodeableConceptType $unitOfPresentation = null)
    {
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * Adds as producedFrom
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product that are used in the preparation of this specific administrable form. In some cases, an administrable form might use all of the items from the overall product (or there might only be one item), while in other cases, an administrable form might use only a subset of the items available in the overall product. For example, an administrable form might involve combining a liquid and a powder available as part of an overall product, but not involve applying the also supplied cream.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $producedFrom
     */
    public function addToProducedFrom(\TKusy\Hl7Fhir\R5\ReferenceType $producedFrom)
    {
        $this->producedFrom[] = $producedFrom;
        return $this;
    }

    /**
     * isset producedFrom
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product that are used in the preparation of this specific administrable form. In some cases, an administrable form might use all of the items from the overall product (or there might only be one item), while in other cases, an administrable form might use only a subset of the items available in the overall product. For example, an administrable form might involve combining a liquid and a powder available as part of an overall product, but not involve applying the also supplied cream.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducedFrom($index)
    {
        return isset($this->producedFrom[$index]);
    }

    /**
     * unset producedFrom
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product that are used in the preparation of this specific administrable form. In some cases, an administrable form might use all of the items from the overall product (or there might only be one item), while in other cases, an administrable form might use only a subset of the items available in the overall product. For example, an administrable form might involve combining a liquid and a powder available as part of an overall product, but not involve applying the also supplied cream.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducedFrom($index)
    {
        unset($this->producedFrom[$index]);
    }

    /**
     * Gets as producedFrom
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product that are used in the preparation of this specific administrable form. In some cases, an administrable form might use all of the items from the overall product (or there might only be one item), while in other cases, an administrable form might use only a subset of the items available in the overall product. For example, an administrable form might involve combining a liquid and a powder available as part of an overall product, but not involve applying the also supplied cream.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getProducedFrom()
    {
        return $this->producedFrom;
    }

    /**
     * Sets a new producedFrom
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product that are used in the preparation of this specific administrable form. In some cases, an administrable form might use all of the items from the overall product (or there might only be one item), while in other cases, an administrable form might use only a subset of the items available in the overall product. For example, an administrable form might involve combining a liquid and a powder available as part of an overall product, but not involve applying the also supplied cream.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $producedFrom
     * @return self
     */
    public function setProducedFrom(array $producedFrom = null)
    {
        $this->producedFrom = $producedFrom;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * The ingredients of this administrable medicinal product. This is only needed if the ingredients are not specified either using ManufacturedItemDefiniton (via AdministrableProductDefinition.producedFrom) to state which component items are used to make this, or using by incoming references from the Ingredient resource, to state in detail which substances exist within this. This element allows a basic coded ingredient to be used.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7Fhir\R5\CodeableConceptType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * The ingredients of this administrable medicinal product. This is only needed if the ingredients are not specified either using ManufacturedItemDefiniton (via AdministrableProductDefinition.producedFrom) to state which component items are used to make this, or using by incoming references from the Ingredient resource, to state in detail which substances exist within this. This element allows a basic coded ingredient to be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIngredient($index)
    {
        return isset($this->ingredient[$index]);
    }

    /**
     * unset ingredient
     *
     * The ingredients of this administrable medicinal product. This is only needed if the ingredients are not specified either using ManufacturedItemDefiniton (via AdministrableProductDefinition.producedFrom) to state which component items are used to make this, or using by incoming references from the Ingredient resource, to state in detail which substances exist within this. This element allows a basic coded ingredient to be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIngredient($index)
    {
        unset($this->ingredient[$index]);
    }

    /**
     * Gets as ingredient
     *
     * The ingredients of this administrable medicinal product. This is only needed if the ingredients are not specified either using ManufacturedItemDefiniton (via AdministrableProductDefinition.producedFrom) to state which component items are used to make this, or using by incoming references from the Ingredient resource, to state in detail which substances exist within this. This element allows a basic coded ingredient to be used.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * The ingredients of this administrable medicinal product. This is only needed if the ingredients are not specified either using ManufacturedItemDefiniton (via AdministrableProductDefinition.producedFrom) to state which component items are used to make this, or using by incoming references from the Ingredient resource, to state in detail which substances exist within this. This element allows a basic coded ingredient to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient = null)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Gets as device
     *
     * A device that is integral to the medicinal product, in effect being considered as an "ingredient" of the medicinal product. This is not intended for devices that are just co-packaged.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * A device that is integral to the medicinal product, in effect being considered as an "ingredient" of the medicinal product. This is not intended for devices that are just co-packaged.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     * @return self
     */
    public function setDevice(?\TKusy\Hl7Fhir\R5\ReferenceType $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as description
     *
     * A general description of the product, when in its final form, suitable for administration e.g. effervescent blue liquid, to be swallowed. Intended to be used when the other structured properties of this resource are insufficient or cannot be supported. It is not intended to duplicate information already carried elswehere.
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
     * A general description of the product, when in its final form, suitable for administration e.g. effervescent blue liquid, to be swallowed. Intended to be used when the other structured properties of this resource are insufficient or cannot be supported. It is not intended to duplicate information already carried elswehere.
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
     * Adds as property
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\AdministrableProductDefinitionPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @return \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as routeOfAdministration
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. RouteOfAdministration cannot be used when the 'formOf' product already uses MedicinalProductDefinition.route (and vice versa).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionRouteOfAdministrationType $routeOfAdministration
     */
    public function addToRouteOfAdministration(\TKusy\Hl7Fhir\R5\AdministrableProductDefinitionRouteOfAdministrationType $routeOfAdministration)
    {
        $this->routeOfAdministration[] = $routeOfAdministration;
        return $this;
    }

    /**
     * isset routeOfAdministration
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. RouteOfAdministration cannot be used when the 'formOf' product already uses MedicinalProductDefinition.route (and vice versa).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRouteOfAdministration($index)
    {
        return isset($this->routeOfAdministration[$index]);
    }

    /**
     * unset routeOfAdministration
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. RouteOfAdministration cannot be used when the 'formOf' product already uses MedicinalProductDefinition.route (and vice versa).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRouteOfAdministration($index)
    {
        unset($this->routeOfAdministration[$index]);
    }

    /**
     * Gets as routeOfAdministration
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. RouteOfAdministration cannot be used when the 'formOf' product already uses MedicinalProductDefinition.route (and vice versa).
     *
     * @return \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionRouteOfAdministrationType[]
     */
    public function getRouteOfAdministration()
    {
        return $this->routeOfAdministration;
    }

    /**
     * Sets a new routeOfAdministration
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. RouteOfAdministration cannot be used when the 'formOf' product already uses MedicinalProductDefinition.route (and vice versa).
     *
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionRouteOfAdministrationType[] $routeOfAdministration
     * @return self
     */
    public function setRouteOfAdministration(array $routeOfAdministration)
    {
        $this->routeOfAdministration = $routeOfAdministration;
        return $this;
    }


}

