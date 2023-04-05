<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PermissionResourceType
 *
 * Permission resource holds access rules for a given data and context.
 * XSD Type: Permission.Resource
 */
class PermissionResourceType extends BackboneElementType
{

    /**
     * How the resource reference is interpreted when testing consent restrictions.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentDataMeaningType $meaning
     */
    private $meaning = null;

    /**
     * A reference to a specific resource that defines which resources are covered by this consent.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Gets as meaning
     *
     * How the resource reference is interpreted when testing consent restrictions.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentDataMeaningType
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * Sets a new meaning
     *
     * How the resource reference is interpreted when testing consent restrictions.
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentDataMeaningType $meaning
     * @return self
     */
    public function setMeaning(\TKusy\Hl7Fhir\R5\ConsentDataMeaningType $meaning)
    {
        $this->meaning = $meaning;
        return $this;
    }

    /**
     * Gets as reference
     *
     * A reference to a specific resource that defines which resources are covered by this consent.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A reference to a specific resource that defines which resources are covered by this consent.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7Fhir\R5\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

