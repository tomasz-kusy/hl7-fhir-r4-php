<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing LinkageItemType
 *
 * Identifies two or more records (resource instances) that refer to the same real-world "occurrence".
 * XSD Type: Linkage.Item
 */
class LinkageItemType extends BackboneElementType
{

    /**
     * Distinguishes which item is "source of truth" (if any) and which items are no longer considered to be current representations.
     *
     * @var \TKusy\Hl7Fhir\R5\LinkageTypeType $type
     */
    private $type = null;

    /**
     * The resource instance being linked as part of the group.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $resource
     */
    private $resource = null;

    /**
     * Gets as type
     *
     * Distinguishes which item is "source of truth" (if any) and which items are no longer considered to be current representations.
     *
     * @return \TKusy\Hl7Fhir\R5\LinkageTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Distinguishes which item is "source of truth" (if any) and which items are no longer considered to be current representations.
     *
     * @param \TKusy\Hl7Fhir\R5\LinkageTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\LinkageTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The resource instance being linked as part of the group.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The resource instance being linked as part of the group.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7Fhir\R5\ReferenceType $resource)
    {
        $this->resource = $resource;
        return $this;
    }


}

