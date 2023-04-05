<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConditionDefinitionQuestionnaireType
 *
 * A definition of a condition and information relevant to managing it.
 * XSD Type: ConditionDefinition.Questionnaire
 */
class ConditionDefinitionQuestionnaireType extends BackboneElementType
{

    /**
     * Use of the questionnaire.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionQuestionnairePurposeType $purpose
     */
    private $purpose = null;

    /**
     * Specific Questionnaire.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Gets as purpose
     *
     * Use of the questionnaire.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionQuestionnairePurposeType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Use of the questionnaire.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionQuestionnairePurposeType $purpose
     * @return self
     */
    public function setPurpose(\TKusy\Hl7Fhir\R5\ConditionQuestionnairePurposeType $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Specific Questionnaire.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Specific Questionnaire.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7Fhir\R5\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

