<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeMonitoringProgramType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.MonitoringProgram
 */
class MedicationKnowledgeMonitoringProgramType extends BackboneElementType
{

    /**
     * Type of program under which the medication is monitored.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Name of the reviewing program.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * Gets as type
     *
     * Type of program under which the medication is monitored.
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
     * Type of program under which the medication is monitored.
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
     * Gets as name
     *
     * Name of the reviewing program.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the reviewing program.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }


}

