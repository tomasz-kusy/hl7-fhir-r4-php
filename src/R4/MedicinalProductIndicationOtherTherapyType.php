<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductIndicationOtherTherapyType
 *
 * Indication for the Medicinal Product.
 * XSD Type: MedicinalProductIndication.OtherTherapy
 */
class MedicinalProductIndicationOtherTherapyType extends BackboneElementType
{

    /**
     * The type of relationship between the medicinal product indication or contraindication and another therapy.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $therapyRelationshipType
     */
    private $therapyRelationshipType = null;

    /**
     * Reference to a specific medication (active substance, medicinal product or class of products) as part of an indication or contraindication. (choose any one of medication*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $medicationCodeableConcept
     */
    private $medicationCodeableConcept = null;

    /**
     * Reference to a specific medication (active substance, medicinal product or class of products) as part of an indication or contraindication. (choose any one of medication*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $medicationReference
     */
    private $medicationReference = null;

    /**
     * Gets as therapyRelationshipType
     *
     * The type of relationship between the medicinal product indication or contraindication and another therapy.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getTherapyRelationshipType()
    {
        return $this->therapyRelationshipType;
    }

    /**
     * Sets a new therapyRelationshipType
     *
     * The type of relationship between the medicinal product indication or contraindication and another therapy.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $therapyRelationshipType
     * @return self
     */
    public function setTherapyRelationshipType(\TKusy\Hl7Fhir\R4\CodeableConceptType $therapyRelationshipType)
    {
        $this->therapyRelationshipType = $therapyRelationshipType;
        return $this;
    }

    /**
     * Gets as medicationCodeableConcept
     *
     * Reference to a specific medication (active substance, medicinal product or class of products) as part of an indication or contraindication. (choose any one of medication*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * Sets a new medicationCodeableConcept
     *
     * Reference to a specific medication (active substance, medicinal product or class of products) as part of an indication or contraindication. (choose any one of medication*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $medicationCodeableConcept
     * @return self
     */
    public function setMedicationCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $medicationCodeableConcept)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Gets as medicationReference
     *
     * Reference to a specific medication (active substance, medicinal product or class of products) as part of an indication or contraindication. (choose any one of medication*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * Sets a new medicationReference
     *
     * Reference to a specific medication (active substance, medicinal product or class of products) as part of an indication or contraindication. (choose any one of medication*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $medicationReference
     * @return self
     */
    public function setMedicationReference(\TKusy\Hl7Fhir\R4\ReferenceType $medicationReference)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }


}

