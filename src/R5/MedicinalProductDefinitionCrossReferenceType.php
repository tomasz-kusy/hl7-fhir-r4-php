<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicinalProductDefinitionCrossReferenceType
 *
 * A medicinal product, being a substance or combination of substances that is intended to treat, prevent or diagnose a disease, or to restore, correct or modify physiological functions by exerting a pharmacological, immunological or metabolic action. This resource is intended to define and detail such products and their properties, for uses other than direct patient care (e.g. regulatory use, or drug catalogs).
 * XSD Type: MedicinalProductDefinition.CrossReference
 */
class MedicinalProductDefinitionCrossReferenceType extends BackboneElementType
{

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $product
     */
    private $product = null;

    /**
     * The type of relationship, for instance branded to generic, virtual to actual product, product to development product (investigational), parallel import version.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Gets as product
     *
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $product
     * @return self
     */
    public function setProduct(\TKusy\Hl7Fhir\R5\CodeableReferenceType $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of relationship, for instance branded to generic, virtual to actual product, product to development product (investigational), parallel import version.
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
     * The type of relationship, for instance branded to generic, virtual to actual product, product to development product (investigational), parallel import version.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }


}

