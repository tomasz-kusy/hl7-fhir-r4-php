<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductInteractionInteractantType
 *
 * The interactions of the medicinal product with other medicinal products, or other forms of interactions.
 * XSD Type: MedicinalProductInteraction.Interactant
 */
class MedicinalProductInteractionInteractantType extends BackboneElementType
{

    /**
     * The specific medication, food or laboratory test that interacts. (choose any one of item*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $itemReference
     */
    private $itemReference = null;

    /**
     * The specific medication, food or laboratory test that interacts. (choose any one of item*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * Gets as itemReference
     *
     * The specific medication, food or laboratory test that interacts. (choose any one of item*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * The specific medication, food or laboratory test that interacts. (choose any one of item*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $itemReference
     * @return self
     */
    public function setItemReference(\TKusy\Hl7FhirR4\ReferenceType $itemReference)
    {
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Gets as itemCodeableConcept
     *
     * The specific medication, food or laboratory test that interacts. (choose any one of item*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Sets a new itemCodeableConcept
     *
     * The specific medication, food or laboratory test that interacts. (choose any one of item*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept
     * @return self
     */
    public function setItemCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }


}

