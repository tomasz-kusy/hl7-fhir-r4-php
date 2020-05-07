<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MeasureReportComponentType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Component
 */
class MeasureReportComponentType extends BackboneElementType
{

    /**
     * The code for the stratum component value.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The stratum component value.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $value
     */
    private $value = null;

    /**
     * Gets as code
     *
     * The code for the stratum component value.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The code for the stratum component value.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as value
     *
     * The stratum component value.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The stratum component value.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7FhirR4\CodeableConceptType $value)
    {
        $this->value = $value;
        return $this;
    }


}

