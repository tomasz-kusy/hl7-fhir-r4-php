<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicinalProductDefinitionPartType
 *
 * A medicinal product, being a substance or combination of substances that is intended to treat, prevent or diagnose a disease, or to restore, correct or modify physiological functions by exerting a pharmacological, immunological or metabolic action. This resource is intended to define and detail such products and their properties, for uses other than direct patient care (e.g. regulatory use, or drug catalogs).
 * XSD Type: MedicinalProductDefinition.Part
 */
class MedicinalProductDefinitionPartType extends BackboneElementType
{

    /**
     * A fragment of a product name.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $part
     */
    private $part = null;

    /**
     * Identifying type for this part of the name (e.g. strength part).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Gets as part
     *
     * A fragment of a product name.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $part
     * @return self
     */
    public function setPart(\TKusy\Hl7Fhir\R5\StringType $part)
    {
        $this->part = $part;
        return $this;
    }

    /**
     * Gets as type
     *
     * Identifying type for this part of the name (e.g. strength part).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifying type for this part of the name (e.g. strength part).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }


}

