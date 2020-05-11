<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductPharmaceuticalType
 *
 * A pharmaceutical product described in terms of its composition and dose form.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductPharmaceutical
 */
class MedicinalProductPharmaceuticalType extends DomainResourceType
{

    /**
     * An identifier for the pharmaceutical medicinal product.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The administrable dose form, after necessary reconstitution.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $administrableDoseForm
     */
    private $administrableDoseForm = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $unitOfPresentation
     */
    private $unitOfPresentation = null;

    /**
     * Ingredient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $ingredient
     */
    private $ingredient = [
        
    ];

    /**
     * Accompanying device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $device
     */
    private $device = [
        
    ];

    /**
     * Characteristics e.g. a products onset of action.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalCharacteristicsType[] $characteristics
     */
    private $characteristics = [
        
    ];

    /**
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalRouteOfAdministrationType[] $routeOfAdministration
     */
    private $routeOfAdministration = [
        
    ];

    /**
     * Adds as identifier
     *
     * An identifier for the pharmaceutical medicinal product.
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
     * An identifier for the pharmaceutical medicinal product.
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
     * An identifier for the pharmaceutical medicinal product.
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
     * An identifier for the pharmaceutical medicinal product.
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
     * An identifier for the pharmaceutical medicinal product.
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
     * Gets as administrableDoseForm
     *
     * The administrable dose form, after necessary reconstitution.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAdministrableDoseForm()
    {
        return $this->administrableDoseForm;
    }

    /**
     * Sets a new administrableDoseForm
     *
     * The administrable dose form, after necessary reconstitution.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $administrableDoseForm
     * @return self
     */
    public function setAdministrableDoseForm(\TKusy\Hl7FhirR4\CodeableConceptType $administrableDoseForm)
    {
        $this->administrableDoseForm = $administrableDoseForm;
        return $this;
    }

    /**
     * Gets as unitOfPresentation
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getUnitOfPresentation()
    {
        return $this->unitOfPresentation;
    }

    /**
     * Sets a new unitOfPresentation
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $unitOfPresentation
     * @return self
     */
    public function setUnitOfPresentation(\TKusy\Hl7FhirR4\CodeableConceptType $unitOfPresentation)
    {
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * Ingredient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7FhirR4\ReferenceType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * Ingredient.
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
     * Ingredient.
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
     * Ingredient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * Ingredient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Adds as device
     *
     * Accompanying device.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $device
     */
    public function addToDevice(\TKusy\Hl7FhirR4\ReferenceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * Accompanying device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDevice($index)
    {
        return isset($this->device[$index]);
    }

    /**
     * unset device
     *
     * Accompanying device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDevice($index)
    {
        unset($this->device[$index]);
    }

    /**
     * Gets as device
     *
     * Accompanying device.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * Accompanying device.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $device
     * @return self
     */
    public function setDevice(array $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adds as characteristics
     *
     * Characteristics e.g. a products onset of action.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalCharacteristicsType $characteristics
     */
    public function addToCharacteristics(\TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalCharacteristicsType $characteristics)
    {
        $this->characteristics[] = $characteristics;
        return $this;
    }

    /**
     * isset characteristics
     *
     * Characteristics e.g. a products onset of action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristics($index)
    {
        return isset($this->characteristics[$index]);
    }

    /**
     * unset characteristics
     *
     * Characteristics e.g. a products onset of action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristics($index)
    {
        unset($this->characteristics[$index]);
    }

    /**
     * Gets as characteristics
     *
     * Characteristics e.g. a products onset of action.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalCharacteristicsType[]
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Sets a new characteristics
     *
     * Characteristics e.g. a products onset of action.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalCharacteristicsType[] $characteristics
     * @return self
     */
    public function setCharacteristics(array $characteristics)
    {
        $this->characteristics = $characteristics;
        return $this;
    }

    /**
     * Adds as routeOfAdministration
     *
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalRouteOfAdministrationType $routeOfAdministration
     */
    public function addToRouteOfAdministration(\TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalRouteOfAdministrationType $routeOfAdministration)
    {
        $this->routeOfAdministration[] = $routeOfAdministration;
        return $this;
    }

    /**
     * isset routeOfAdministration
     *
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
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
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
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
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalRouteOfAdministrationType[]
     */
    public function getRouteOfAdministration()
    {
        return $this->routeOfAdministration;
    }

    /**
     * Sets a new routeOfAdministration
     *
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalRouteOfAdministrationType[] $routeOfAdministration
     * @return self
     */
    public function setRouteOfAdministration(array $routeOfAdministration)
    {
        $this->routeOfAdministration = $routeOfAdministration;
        return $this;
    }


}

