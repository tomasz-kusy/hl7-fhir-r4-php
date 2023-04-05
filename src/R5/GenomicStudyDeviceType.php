<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GenomicStudyDeviceType
 *
 * A GenomicStudy is a set of analyses performed to analyze and generate genomic data.
 * XSD Type: GenomicStudy.Device
 */
class GenomicStudyDeviceType extends BackboneElementType
{

    /**
     * Device used for the analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    private $device = null;

    /**
     * Specific function for the device used for the analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * Gets as device
     *
     * Device used for the analysis.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * Device used for the analysis.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     * @return self
     */
    public function setDevice(?\TKusy\Hl7Fhir\R5\ReferenceType $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as function
     *
     * Specific function for the device used for the analysis.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * Specific function for the device used for the analysis.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     * @return self
     */
    public function setFunction(?\TKusy\Hl7Fhir\R5\CodeableConceptType $function = null)
    {
        $this->function = $function;
        return $this;
    }


}

