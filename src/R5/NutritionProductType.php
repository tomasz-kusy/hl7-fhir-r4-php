<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionProductType
 *
 * A food or supplement that is consumed by patients.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: NutritionProduct
 */
class NutritionProductType extends DomainResourceType
{

    /**
     * The code assigned to the product, for example a USDA NDB number, a USDA FDC ID number, or a Langual code.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The current state of the product.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionProductStatusType $status
     */
    private $status = null;

    /**
     * Nutrition products can have different classifications - according to its nutritional properties, preparation methods, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * The organisation (manufacturer, representative or legal authorization holder) that is responsible for the device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     */
    private $manufacturer = null;

    /**
     * The product's nutritional information expressed by the nutrients.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionProductNutrientType[] $nutrient
     */
    private $nutrient = null;

    /**
     * Ingredients contained in this product.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionProductIngredientType[] $ingredient
     */
    private $ingredient = null;

    /**
     * Allergens that are known or suspected to be a part of this nutrition product.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $knownAllergen
     */
    private $knownAllergen = null;

    /**
     * Specifies descriptive properties of the nutrition product.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionProductCharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Conveys instance-level information about this product item. One or several physical, countable instances or occurrences of the product.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionProductInstanceType[] $instance
     */
    private $instance = null;

    /**
     * Comments made about the product.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as code
     *
     * The code assigned to the product, for example a USDA NDB number, a USDA FDC ID number, or a Langual code.
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
     * The code assigned to the product, for example a USDA NDB number, a USDA FDC ID number, or a Langual code.
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
     * Gets as status
     *
     * The current state of the product.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionProductStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the product.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionProductStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\NutritionProductStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * Nutrition products can have different classifications - according to its nutritional properties, preparation methods, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Nutrition products can have different classifications - according to its nutritional properties, preparation methods, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * Nutrition products can have different classifications - according to its nutritional properties, preparation methods, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * Nutrition products can have different classifications - according to its nutritional properties, preparation methods, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Nutrition products can have different classifications - according to its nutritional properties, preparation methods, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * The organisation (manufacturer, representative or legal authorization holder) that is responsible for the device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7Fhir\R5\ReferenceType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * The organisation (manufacturer, representative or legal authorization holder) that is responsible for the device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturer($index)
    {
        return isset($this->manufacturer[$index]);
    }

    /**
     * unset manufacturer
     *
     * The organisation (manufacturer, representative or legal authorization holder) that is responsible for the device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturer($index)
    {
        unset($this->manufacturer[$index]);
    }

    /**
     * Gets as manufacturer
     *
     * The organisation (manufacturer, representative or legal authorization holder) that is responsible for the device.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * The organisation (manufacturer, representative or legal authorization holder) that is responsible for the device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as nutrient
     *
     * The product's nutritional information expressed by the nutrients.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionProductNutrientType $nutrient
     */
    public function addToNutrient(\TKusy\Hl7Fhir\R5\NutritionProductNutrientType $nutrient)
    {
        $this->nutrient[] = $nutrient;
        return $this;
    }

    /**
     * isset nutrient
     *
     * The product's nutritional information expressed by the nutrients.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNutrient($index)
    {
        return isset($this->nutrient[$index]);
    }

    /**
     * unset nutrient
     *
     * The product's nutritional information expressed by the nutrients.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNutrient($index)
    {
        unset($this->nutrient[$index]);
    }

    /**
     * Gets as nutrient
     *
     * The product's nutritional information expressed by the nutrients.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionProductNutrientType[]
     */
    public function getNutrient()
    {
        return $this->nutrient;
    }

    /**
     * Sets a new nutrient
     *
     * The product's nutritional information expressed by the nutrients.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionProductNutrientType[] $nutrient
     * @return self
     */
    public function setNutrient(array $nutrient = null)
    {
        $this->nutrient = $nutrient;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * Ingredients contained in this product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionProductIngredientType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7Fhir\R5\NutritionProductIngredientType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * Ingredients contained in this product.
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
     * Ingredients contained in this product.
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
     * Ingredients contained in this product.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionProductIngredientType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * Ingredients contained in this product.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionProductIngredientType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient = null)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Adds as knownAllergen
     *
     * Allergens that are known or suspected to be a part of this nutrition product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $knownAllergen
     */
    public function addToKnownAllergen(\TKusy\Hl7Fhir\R5\CodeableReferenceType $knownAllergen)
    {
        $this->knownAllergen[] = $knownAllergen;
        return $this;
    }

    /**
     * isset knownAllergen
     *
     * Allergens that are known or suspected to be a part of this nutrition product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKnownAllergen($index)
    {
        return isset($this->knownAllergen[$index]);
    }

    /**
     * unset knownAllergen
     *
     * Allergens that are known or suspected to be a part of this nutrition product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKnownAllergen($index)
    {
        unset($this->knownAllergen[$index]);
    }

    /**
     * Gets as knownAllergen
     *
     * Allergens that are known or suspected to be a part of this nutrition product.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getKnownAllergen()
    {
        return $this->knownAllergen;
    }

    /**
     * Sets a new knownAllergen
     *
     * Allergens that are known or suspected to be a part of this nutrition product.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $knownAllergen
     * @return self
     */
    public function setKnownAllergen(array $knownAllergen = null)
    {
        $this->knownAllergen = $knownAllergen;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * Specifies descriptive properties of the nutrition product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionProductCharacteristicType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R5\NutritionProductCharacteristicType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * Specifies descriptive properties of the nutrition product.
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
     * Specifies descriptive properties of the nutrition product.
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
     * Specifies descriptive properties of the nutrition product.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionProductCharacteristicType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * Specifies descriptive properties of the nutrition product.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionProductCharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic = null)
    {
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Adds as instance
     *
     * Conveys instance-level information about this product item. One or several physical, countable instances or occurrences of the product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionProductInstanceType $instance
     */
    public function addToInstance(\TKusy\Hl7Fhir\R5\NutritionProductInstanceType $instance)
    {
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * isset instance
     *
     * Conveys instance-level information about this product item. One or several physical, countable instances or occurrences of the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstance($index)
    {
        return isset($this->instance[$index]);
    }

    /**
     * unset instance
     *
     * Conveys instance-level information about this product item. One or several physical, countable instances or occurrences of the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstance($index)
    {
        unset($this->instance[$index]);
    }

    /**
     * Gets as instance
     *
     * Conveys instance-level information about this product item. One or several physical, countable instances or occurrences of the product.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionProductInstanceType[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * Conveys instance-level information about this product item. One or several physical, countable instances or occurrences of the product.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionProductInstanceType[] $instance
     * @return self
     */
    public function setInstance(array $instance = null)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Comments made about the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Comments made about the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Comments made about the product.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Comments made about the product.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

