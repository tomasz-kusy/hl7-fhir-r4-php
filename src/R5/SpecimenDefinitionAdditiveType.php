<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenDefinitionAdditiveType
 *
 * A kind of specimen with associated set of requirements.
 * XSD Type: SpecimenDefinition.Additive
 */
class SpecimenDefinitionAdditiveType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $additiveCodeableConcept
     */
    private $additiveCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $additiveReference
     */
    private $additiveReference = null;

    /**
     * Gets as additiveCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAdditiveCodeableConcept()
    {
        return $this->additiveCodeableConcept;
    }

    /**
     * Sets a new additiveCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $additiveCodeableConcept
     * @return self
     */
    public function setAdditiveCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $additiveCodeableConcept = null)
    {
        $this->additiveCodeableConcept = $additiveCodeableConcept;
        return $this;
    }

    /**
     * Gets as additiveReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAdditiveReference()
    {
        return $this->additiveReference;
    }

    /**
     * Sets a new additiveReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $additiveReference
     * @return self
     */
    public function setAdditiveReference(?\TKusy\Hl7Fhir\R5\ReferenceType $additiveReference = null)
    {
        $this->additiveReference = $additiveReference;
        return $this;
    }


}

