<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryItemDescriptionType
 *
 * A functional description of an inventory item used in inventory and supply-related workflows.
 * XSD Type: InventoryItem.Description
 */
class InventoryItemDescriptionType extends BackboneElementType
{

    /**
     * The language for the item description, when an item must be described in different languages and those languages may be authoritative and not translations of a 'main' language.
     *
     * @var \TKusy\Hl7Fhir\R5\CommonLanguagesType $language
     */
    private $language = null;

    /**
     * Textual description of the item.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * Gets as language
     *
     * The language for the item description, when an item must be described in different languages and those languages may be authoritative and not translations of a 'main' language.
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
     * The language for the item description, when an item must be described in different languages and those languages may be authoritative and not translations of a 'main' language.
     *
     * @param \TKusy\Hl7Fhir\R5\CommonLanguagesType $language
     * @return self
     */
    public function setLanguage(?\TKusy\Hl7Fhir\R5\CommonLanguagesType $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as description
     *
     * Textual description of the item.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Textual description of the item.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }


}

