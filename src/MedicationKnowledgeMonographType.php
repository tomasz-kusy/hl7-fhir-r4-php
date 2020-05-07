<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeMonographType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Monograph
 */
class MedicationKnowledgeMonographType extends BackboneElementType
{

    /**
     * The category of documentation about the medication. (e.g. professional monograph, patient education monograph).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Associated documentation about the medication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $source
     */
    private $source = null;

    /**
     * Gets as type
     *
     * The category of documentation about the medication. (e.g. professional monograph, patient education monograph).
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
     * The category of documentation about the medication. (e.g. professional monograph, patient education monograph).
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
     * Gets as source
     *
     * Associated documentation about the medication.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Associated documentation about the medication.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7FhirR4\ReferenceType $source)
    {
        $this->source = $source;
        return $this;
    }


}

