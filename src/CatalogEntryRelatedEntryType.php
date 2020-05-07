<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CatalogEntryRelatedEntryType
 *
 * Catalog entries are wrappers that contextualize items included in a catalog.
 * XSD Type: CatalogEntry.RelatedEntry
 */
class CatalogEntryRelatedEntryType extends BackboneElementType
{

    /**
     * The type of relation to the related item: child, parent, packageContent, containerPackage, usedIn, uses, requires, etc.
     *
     * @var \TKusy\Hl7FhirR4\CatalogEntryRelationType $relationtype
     */
    private $relationtype = null;

    /**
     * The reference to the related item.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $item
     */
    private $item = null;

    /**
     * Gets as relationtype
     *
     * The type of relation to the related item: child, parent, packageContent, containerPackage, usedIn, uses, requires, etc.
     *
     * @return \TKusy\Hl7FhirR4\CatalogEntryRelationType
     */
    public function getRelationtype()
    {
        return $this->relationtype;
    }

    /**
     * Sets a new relationtype
     *
     * The type of relation to the related item: child, parent, packageContent, containerPackage, usedIn, uses, requires, etc.
     *
     * @param \TKusy\Hl7FhirR4\CatalogEntryRelationType $relationtype
     * @return self
     */
    public function setRelationtype(\TKusy\Hl7FhirR4\CatalogEntryRelationType $relationtype)
    {
        $this->relationtype = $relationtype;
        return $this;
    }

    /**
     * Gets as item
     *
     * The reference to the related item.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * The reference to the related item.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $item
     * @return self
     */
    public function setItem(\TKusy\Hl7FhirR4\ReferenceType $item)
    {
        $this->item = $item;
        return $this;
    }


}

