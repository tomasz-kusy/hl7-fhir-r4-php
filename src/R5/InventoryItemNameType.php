<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryItemNameType
 *
 * A functional description of an inventory item used in inventory and supply-related workflows.
 * XSD Type: InventoryItem.Name
 */
class InventoryItemNameType extends BackboneElementType
{

    /**
     * The type of name e.g. 'brand-name', 'functional-name', 'common-name'.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $nameType
     */
    private $nameType = null;

    /**
     * The language that the item name is expressed in.
     *
     * @var \TKusy\Hl7Fhir\R5\CommonLanguagesType $language
     */
    private $language = null;

    /**
     * The name or designation that the item is given.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Gets as nameType
     *
     * The type of name e.g. 'brand-name', 'functional-name', 'common-name'.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getNameType()
    {
        return $this->nameType;
    }

    /**
     * Sets a new nameType
     *
     * The type of name e.g. 'brand-name', 'functional-name', 'common-name'.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $nameType
     * @return self
     */
    public function setNameType(\TKusy\Hl7Fhir\R5\CodingType $nameType)
    {
        $this->nameType = $nameType;
        return $this;
    }

    /**
     * Gets as language
     *
     * The language that the item name is expressed in.
     *
     * @return \TKusy\Hl7Fhir\R5\CommonLanguagesType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The language that the item name is expressed in.
     *
     * @param \TKusy\Hl7Fhir\R5\CommonLanguagesType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7Fhir\R5\CommonLanguagesType $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name or designation that the item is given.
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
     * The name or designation that the item is given.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name = $name;
        return $this;
    }


}

