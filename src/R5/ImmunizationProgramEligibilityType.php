<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImmunizationProgramEligibilityType
 *
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 * XSD Type: Immunization.ProgramEligibility
 */
class ImmunizationProgramEligibilityType extends BackboneElementType
{

    /**
     * Indicates which program the patient had their eligility evaluated for.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $program
     */
    private $program = null;

    /**
     * Indicates the patient's eligility status for for a specific payment program.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $programStatus
     */
    private $programStatus = null;

    /**
     * Gets as program
     *
     * Indicates which program the patient had their eligility evaluated for.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets a new program
     *
     * Indicates which program the patient had their eligility evaluated for.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $program
     * @return self
     */
    public function setProgram(\TKusy\Hl7Fhir\R5\CodeableConceptType $program)
    {
        $this->program = $program;
        return $this;
    }

    /**
     * Gets as programStatus
     *
     * Indicates the patient's eligility status for for a specific payment program.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getProgramStatus()
    {
        return $this->programStatus;
    }

    /**
     * Sets a new programStatus
     *
     * Indicates the patient's eligility status for for a specific payment program.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $programStatus
     * @return self
     */
    public function setProgramStatus(\TKusy\Hl7Fhir\R5\CodeableConceptType $programStatus)
    {
        $this->programStatus = $programStatus;
        return $this;
    }


}

