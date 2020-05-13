<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductNamePartType
 *
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 * XSD Type: MedicinalProduct.NamePart
 */
class MedicinalProductNamePartType extends BackboneElementType
{

    /**
     * A fragment of a product name.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $part
     */
    private $part = null;

    /**
     * Idenifying type for this part of the name (e.g. strength part).
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $type
     */
    private $type = null;

    /**
     * Gets as part
     *
     * A fragment of a product name.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Sets a new part
     *
     * A fragment of a product name.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $part
     * @return self
     */
    public function setPart(\TKusy\Hl7Fhir\R4\StringType $part)
    {
        $this->part = $part;
        return $this;
    }

    /**
     * Gets as type
     *
     * Idenifying type for this part of the name (e.g. strength part).
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Idenifying type for this part of the name (e.g. strength part).
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodingType $type)
    {
        $this->type = $type;
        return $this;
    }


}

