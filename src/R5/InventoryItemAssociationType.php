<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryItemAssociationType
 *
 * A functional description of an inventory item used in inventory and supply-related workflows.
 * XSD Type: InventoryItem.Association
 */
class InventoryItemAssociationType extends BackboneElementType
{

    /**
     * This attribute defined the type of association when establishing associations or relations between items, e.g. 'packaged within' or 'used with' or 'to be mixed with.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $associationType
     */
    private $associationType = null;

    /**
     * The related item or product.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $relatedItem
     */
    private $relatedItem = null;

    /**
     * The quantity of the related product in this product - Numerator is the quantity of the related product. Denominator is the quantity of the present product. For example a value of 20 means that this product contains 20 units of the related product; a value of 1:20 means the inverse - that the contained product contains 20 units of the present product.
     *
     * @var \TKusy\Hl7Fhir\R5\RatioType $quantity
     */
    private $quantity = null;

    /**
     * Gets as associationType
     *
     * This attribute defined the type of association when establishing associations or relations between items, e.g. 'packaged within' or 'used with' or 'to be mixed with.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAssociationType()
    {
        return $this->associationType;
    }

    /**
     * Sets a new associationType
     *
     * This attribute defined the type of association when establishing associations or relations between items, e.g. 'packaged within' or 'used with' or 'to be mixed with.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $associationType
     * @return self
     */
    public function setAssociationType(\TKusy\Hl7Fhir\R5\CodeableConceptType $associationType)
    {
        $this->associationType = $associationType;
        return $this;
    }

    /**
     * Gets as relatedItem
     *
     * The related item or product.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * Sets a new relatedItem
     *
     * The related item or product.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $relatedItem
     * @return self
     */
    public function setRelatedItem(\TKusy\Hl7Fhir\R5\ReferenceType $relatedItem)
    {
        $this->relatedItem = $relatedItem;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of the related product in this product - Numerator is the quantity of the related product. Denominator is the quantity of the present product. For example a value of 20 means that this product contains 20 units of the related product; a value of 1:20 means the inverse - that the contained product contains 20 units of the present product.
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of the related product in this product - Numerator is the quantity of the related product. Denominator is the quantity of the present product. For example a value of 20 means that this product contains 20 units of the related product; a value of 1:20 means the inverse - that the contained product contains 20 units of the present product.
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7Fhir\R5\RatioType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

