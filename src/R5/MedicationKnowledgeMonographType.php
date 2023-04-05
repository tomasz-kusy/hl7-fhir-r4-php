<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Associated documentation about the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    private $source = null;

    /**
     * Gets as type
     *
     * The category of documentation about the medication. (e.g. professional monograph, patient education monograph).
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
     * The category of documentation about the medication. (e.g. professional monograph, patient education monograph).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as source
     *
     * Associated documentation about the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     * @return self
     */
    public function setSource(?\TKusy\Hl7Fhir\R5\ReferenceType $source = null)
    {
        $this->source = $source;
        return $this;
    }


}

