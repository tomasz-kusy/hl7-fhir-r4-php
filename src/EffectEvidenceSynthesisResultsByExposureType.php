<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EffectEvidenceSynthesisResultsByExposureType
 *
 * The EffectEvidenceSynthesis resource describes the difference in an outcome between exposures states in a population where the effect estimate is derived from a combination of research studies.
 * XSD Type: EffectEvidenceSynthesis.ResultsByExposure
 */
class EffectEvidenceSynthesisResultsByExposureType extends BackboneElementType
{

    /**
     * Human-readable summary of results by exposure state.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Whether these results are for the exposure state or alternative exposure state.
     *
     * @var \TKusy\Hl7FhirR4\ExposureStateType $exposureState
     */
    private $exposureState = null;

    /**
     * Used to define variant exposure states such as low-risk state.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $variantState
     */
    private $variantState = null;

    /**
     * Reference to a RiskEvidenceSynthesis resource.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $riskEvidenceSynthesis
     */
    private $riskEvidenceSynthesis = null;

    /**
     * Gets as description
     *
     * Human-readable summary of results by exposure state.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Human-readable summary of results by exposure state.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as exposureState
     *
     * Whether these results are for the exposure state or alternative exposure state.
     *
     * @return \TKusy\Hl7FhirR4\ExposureStateType
     */
    public function getExposureState()
    {
        return $this->exposureState;
    }

    /**
     * Sets a new exposureState
     *
     * Whether these results are for the exposure state or alternative exposure state.
     *
     * @param \TKusy\Hl7FhirR4\ExposureStateType $exposureState
     * @return self
     */
    public function setExposureState(\TKusy\Hl7FhirR4\ExposureStateType $exposureState)
    {
        $this->exposureState = $exposureState;
        return $this;
    }

    /**
     * Gets as variantState
     *
     * Used to define variant exposure states such as low-risk state.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getVariantState()
    {
        return $this->variantState;
    }

    /**
     * Sets a new variantState
     *
     * Used to define variant exposure states such as low-risk state.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $variantState
     * @return self
     */
    public function setVariantState(\TKusy\Hl7FhirR4\CodeableConceptType $variantState)
    {
        $this->variantState = $variantState;
        return $this;
    }

    /**
     * Gets as riskEvidenceSynthesis
     *
     * Reference to a RiskEvidenceSynthesis resource.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRiskEvidenceSynthesis()
    {
        return $this->riskEvidenceSynthesis;
    }

    /**
     * Sets a new riskEvidenceSynthesis
     *
     * Reference to a RiskEvidenceSynthesis resource.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $riskEvidenceSynthesis
     * @return self
     */
    public function setRiskEvidenceSynthesis(\TKusy\Hl7FhirR4\ReferenceType $riskEvidenceSynthesis)
    {
        $this->riskEvidenceSynthesis = $riskEvidenceSynthesis;
        return $this;
    }


}

