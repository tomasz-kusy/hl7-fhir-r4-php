<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SpecimenDefinitionAdditiveType
 *
 * A kind of specimen with associated set of requirements.
 * XSD Type: SpecimenDefinition.Additive
 */
class SpecimenDefinitionAdditiveType extends BackboneElementType
{

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $additiveCodeableConcept
     */
    private $additiveCodeableConcept = null;

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $additiveReference
     */
    private $additiveReference = null;

    /**
     * Gets as additiveCodeableConcept
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getAdditiveCodeableConcept()
    {
        return $this->additiveCodeableConcept;
    }

    /**
     * Sets a new additiveCodeableConcept
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $additiveCodeableConcept
     * @return self
     */
    public function setAdditiveCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $additiveCodeableConcept)
    {
        $this->additiveCodeableConcept = $additiveCodeableConcept;
        return $this;
    }

    /**
     * Gets as additiveReference
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getAdditiveReference()
    {
        return $this->additiveReference;
    }

    /**
     * Sets a new additiveReference
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $additiveReference
     * @return self
     */
    public function setAdditiveReference(\TKusy\Hl7Fhir\R4\ReferenceType $additiveReference)
    {
        $this->additiveReference = $additiveReference;
        return $this;
    }


}

