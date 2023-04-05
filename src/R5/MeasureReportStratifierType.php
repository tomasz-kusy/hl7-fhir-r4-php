<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureReportStratifierType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Stratifier
 */
class MeasureReportStratifierType extends BackboneElementType
{

    /**
     * The stratifier from the Measure that corresponds to this stratifier in the MeasureReport resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * The meaning of this stratifier, as defined in the measure definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * This element contains the results for a single stratum within the stratifier. For example, when stratifying on administrative gender, there will be four strata, one for each possible gender value.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureReportStratumType[] $stratum
     */
    private $stratum = null;

    /**
     * Gets as linkId
     *
     * The stratifier from the Measure that corresponds to this stratifier in the MeasureReport resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * The stratifier from the Measure that corresponds to this stratifier in the MeasureReport resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $linkId
     * @return self
     */
    public function setLinkId(?\TKusy\Hl7Fhir\R5\StringType $linkId = null)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as code
     *
     * The meaning of this stratifier, as defined in the measure definition.
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
     * The meaning of this stratifier, as defined in the measure definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportStratumType $stratum
     */
    public function addToStratum(\TKusy\Hl7Fhir\R5\MeasureReportStratumType $stratum)
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
     * @return \TKusy\Hl7Fhir\R5\MeasureReportStratumType[]
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportStratumType[] $stratum
     * @return self
     */
    public function setStratum(array $stratum = null)
    {
        $this->stratum = $stratum;
        return $this;
    }


}

