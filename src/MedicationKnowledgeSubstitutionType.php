<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeSubstitutionType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Substitution
 */
class MedicationKnowledgeSubstitutionType extends BackboneElementType
{

    /**
     * Specifies the type of substitution allowed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Specifies if regulation allows for changes in the medication when dispensing.
     *
     * @var bool $allowed
     */
    private $allowed = null;

    /**
     * Gets as type
     *
     * Specifies the type of substitution allowed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies the type of substitution allowed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as allowed
     *
     * Specifies if regulation allows for changes in the medication when dispensing.
     *
     * @return bool
     */
    public function getAllowed()
    {
        return $this->allowed;
    }

    /**
     * Sets a new allowed
     *
     * Specifies if regulation allows for changes in the medication when dispensing.
     *
     * @param bool $allowed
     * @return self
     */
    public function setAllowed($allowed)
    {
        $this->allowed = $allowed;
        return $this;
    }


}

