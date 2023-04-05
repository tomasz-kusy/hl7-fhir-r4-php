<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceModelCharacteristicType
 *
 * The Evidence Resource provides a machine-interpretable expression of an evidence concept including the evidence variables (e.g., population, exposures/interventions, comparators, outcomes, measured variables, confounding variables), the statistics, and the certainty of this evidence.
 * XSD Type: Evidence.ModelCharacteristic
 */
class EvidenceModelCharacteristicType extends BackboneElementType
{

    /**
     * Description of a component of the method to generate the statistic.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Further specification of the quantified value of the component of the method to generate the statistic.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $value
     */
    private $value = null;

    /**
     * A variable adjusted for in the adjusted analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceVariableType[] $variable
     */
    private $variable = null;

    /**
     * An attribute of the statistic used as a model characteristic.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType[] $attributeEstimate
     */
    private $attributeEstimate = null;

    /**
     * Gets as code
     *
     * Description of a component of the method to generate the statistic.
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
     * Description of a component of the method to generate the statistic.
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
     * Gets as value
     *
     * Further specification of the quantified value of the component of the method to generate the statistic.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Further specification of the quantified value of the component of the method to generate the statistic.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $value
     * @return self
     */
    public function setValue(?\TKusy\Hl7Fhir\R5\QuantityType $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as variable
     *
     * A variable adjusted for in the adjusted analysis.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariableType $variable
     */
    public function addToVariable(\TKusy\Hl7Fhir\R5\EvidenceVariableType $variable)
    {
        $this->variable[] = $variable;
        return $this;
    }

    /**
     * isset variable
     *
     * A variable adjusted for in the adjusted analysis.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariable($index)
    {
        return isset($this->variable[$index]);
    }

    /**
     * unset variable
     *
     * A variable adjusted for in the adjusted analysis.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariable($index)
    {
        unset($this->variable[$index]);
    }

    /**
     * Gets as variable
     *
     * A variable adjusted for in the adjusted analysis.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceVariableType[]
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets a new variable
     *
     * A variable adjusted for in the adjusted analysis.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariableType[] $variable
     * @return self
     */
    public function setVariable(array $variable = null)
    {
        $this->variable = $variable;
        return $this;
    }

    /**
     * Adds as attributeEstimate
     *
     * An attribute of the statistic used as a model characteristic.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType $attributeEstimate
     */
    public function addToAttributeEstimate(\TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType $attributeEstimate)
    {
        $this->attributeEstimate[] = $attributeEstimate;
        return $this;
    }

    /**
     * isset attributeEstimate
     *
     * An attribute of the statistic used as a model characteristic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeEstimate($index)
    {
        return isset($this->attributeEstimate[$index]);
    }

    /**
     * unset attributeEstimate
     *
     * An attribute of the statistic used as a model characteristic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeEstimate($index)
    {
        unset($this->attributeEstimate[$index]);
    }

    /**
     * Gets as attributeEstimate
     *
     * An attribute of the statistic used as a model characteristic.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType[]
     */
    public function getAttributeEstimate()
    {
        return $this->attributeEstimate;
    }

    /**
     * Sets a new attributeEstimate
     *
     * An attribute of the statistic used as a model characteristic.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType[] $attributeEstimate
     * @return self
     */
    public function setAttributeEstimate(array $attributeEstimate = null)
    {
        $this->attributeEstimate = $attributeEstimate;
        return $this;
    }


}

