<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MeasureReportStratifierType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Stratifier
 */
class MeasureReportStratifierType extends BackboneElementType
{

    /**
     * The meaning of this stratifier, as defined in the measure definition.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     */
    private $code = [
        
    ];

    /**
     * This element contains the results for a single stratum within the stratifier. For example, when stratifying on administrative gender, there will be four strata, one for each possible gender value.
     *
     * @var \TKusy\Hl7FhirR4\MeasureReportStratumType[] $stratum
     */
    private $stratum = [
        
    ];

    /**
     * Adds as code
     *
     * The meaning of this stratifier, as defined in the measure definition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * The meaning of this stratifier, as defined in the measure definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * The meaning of this stratifier, as defined in the measure definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * The meaning of this stratifier, as defined in the measure definition.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The meaning of this stratifier, as defined in the measure definition.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as stratum
     *
     * This element contains the results for a single stratum within the stratifier. For example, when stratifying on administrative gender, there will be four strata, one for each possible gender value.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MeasureReportStratumType $stratum
     */
    public function addToStratum(\TKusy\Hl7FhirR4\MeasureReportStratumType $stratum)
    {
        $this->stratum[] = $stratum;
        return $this;
    }

    /**
     * isset stratum
     *
     * This element contains the results for a single stratum within the stratifier. For example, when stratifying on administrative gender, there will be four strata, one for each possible gender value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStratum($index)
    {
        return isset($this->stratum[$index]);
    }

    /**
     * unset stratum
     *
     * This element contains the results for a single stratum within the stratifier. For example, when stratifying on administrative gender, there will be four strata, one for each possible gender value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStratum($index)
    {
        unset($this->stratum[$index]);
    }

    /**
     * Gets as stratum
     *
     * This element contains the results for a single stratum within the stratifier. For example, when stratifying on administrative gender, there will be four strata, one for each possible gender value.
     *
     * @return \TKusy\Hl7FhirR4\MeasureReportStratumType[]
     */
    public function getStratum()
    {
        return $this->stratum;
    }

    /**
     * Sets a new stratum
     *
     * This element contains the results for a single stratum within the stratifier. For example, when stratifying on administrative gender, there will be four strata, one for each possible gender value.
     *
     * @param \TKusy\Hl7FhirR4\MeasureReportStratumType[] $stratum
     * @return self
     */
    public function setStratum(array $stratum)
    {
        $this->stratum = $stratum;
        return $this;
    }


}

