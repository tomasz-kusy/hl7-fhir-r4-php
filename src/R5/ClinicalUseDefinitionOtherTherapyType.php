<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClinicalUseDefinitionOtherTherapyType
 *
 * A single issue - either an indication, contraindication, interaction or an undesirable effect for a medicinal product, medication, device or procedure.
 * XSD Type: ClinicalUseDefinition.OtherTherapy
 */
class ClinicalUseDefinitionOtherTherapyType extends BackboneElementType
{

    /**
     * The type of relationship between the medicinal product indication or contraindication and another therapy.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $relationshipType
     */
    private $relationshipType = null;

    /**
     * Reference to a specific medication (active substance, medicinal product or class of products, biological, food etc.) as part of an indication or contraindication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $treatment
     */
    private $treatment = null;

    /**
     * Gets as relationshipType
     *
     * The type of relationship between the medicinal product indication or contraindication and another therapy.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRelationshipType()
    {
        return $this->relationshipType;
    }

    /**
     * Sets a new relationshipType
     *
     * The type of relationship between the medicinal product indication or contraindication and another therapy.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $relationshipType
     * @return self
     */
    public function setRelationshipType(\TKusy\Hl7Fhir\R5\CodeableConceptType $relationshipType)
    {
        $this->relationshipType = $relationshipType;
        return $this;
    }

    /**
     * Gets as treatment
     *
     * Reference to a specific medication (active substance, medicinal product or class of products, biological, food etc.) as part of an indication or contraindication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * Sets a new treatment
     *
     * Reference to a specific medication (active substance, medicinal product or class of products, biological, food etc.) as part of an indication or contraindication.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $treatment
     * @return self
     */
    public function setTreatment(\TKusy\Hl7Fhir\R5\CodeableReferenceType $treatment)
    {
        $this->treatment = $treatment;
        return $this;
    }


}

