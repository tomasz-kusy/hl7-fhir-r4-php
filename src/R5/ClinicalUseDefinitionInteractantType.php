<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClinicalUseDefinitionInteractantType
 *
 * A single issue - either an indication, contraindication, interaction or an undesirable effect for a medicinal product, medication, device or procedure.
 * XSD Type: ClinicalUseDefinition.Interactant
 */
class ClinicalUseDefinitionInteractantType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $itemReference
     */
    private $itemReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * Gets as itemReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $itemReference
     * @return self
     */
    public function setItemReference(?\TKusy\Hl7Fhir\R5\ReferenceType $itemReference = null)
    {
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Gets as itemCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Sets a new itemCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept
     * @return self
     */
    public function setItemCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept = null)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }


}

