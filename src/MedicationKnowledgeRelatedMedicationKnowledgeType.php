<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeRelatedMedicationKnowledgeType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.RelatedMedicationKnowledge
 */
class MedicationKnowledgeRelatedMedicationKnowledgeType extends BackboneElementType
{

    /**
     * The category of the associated medication knowledge reference.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Associated documentation about the associated medication knowledge.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reference
     */
    private $reference = [
        
    ];

    /**
     * Gets as type
     *
     * The category of the associated medication knowledge reference.
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
     * The category of the associated medication knowledge reference.
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
     * Adds as reference
     *
     * Associated documentation about the associated medication knowledge.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $reference
     */
    public function addToReference(\TKusy\Hl7FhirR4\ReferenceType $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * Associated documentation about the associated medication knowledge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * Associated documentation about the associated medication knowledge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * Associated documentation about the associated medication knowledge.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Associated documentation about the associated medication knowledge.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

