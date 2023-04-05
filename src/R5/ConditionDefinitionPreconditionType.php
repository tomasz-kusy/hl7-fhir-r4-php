<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConditionDefinitionPreconditionType
 *
 * A definition of a condition and information relevant to managing it.
 * XSD Type: ConditionDefinition.Precondition
 */
class ConditionDefinitionPreconditionType extends BackboneElementType
{

    /**
     * Kind of pre-condition.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionPreconditionTypeType $type
     */
    private $type = null;

    /**
     * Code for relevant Observation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * Gets as type
     *
     * Kind of pre-condition.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionPreconditionTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Kind of pre-condition.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionPreconditionTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\ConditionPreconditionTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as code
     *
     * Code for relevant Observation.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code for relevant Observation.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }


}

