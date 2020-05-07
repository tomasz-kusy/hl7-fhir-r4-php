<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\LinkageType $type
     */
    private $type = null;

    /**
     * The resource instance being linked as part of the group.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $resource
     */
    private $resource = null;

    /**
     * Gets as type
     *
     * Distinguishes which item is "source of truth" (if any) and which items are no longer considered to be current representations.
     *
     * @return \TKusy\Hl7FhirR4\LinkageType
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
     * @param \TKusy\Hl7FhirR4\LinkageType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\LinkageType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The resource instance being linked as part of the group.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7FhirR4\ReferenceType $resource)
    {
        $this->resource = $resource;
        return $this;
    }


}

