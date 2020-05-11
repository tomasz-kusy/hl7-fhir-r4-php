<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ResearchStudyObjectiveType
 *
 * A process where a researcher or organization plans and then executes a series of steps intended to increase the field of healthcare-related knowledge. This includes studies of safety, efficacy, comparative effectiveness and other information about medications, devices, therapies and other interventional and investigative techniques. A ResearchStudy involves the gathering of information about human or animal subjects.
 * XSD Type: ResearchStudy.Objective
 */
class ResearchStudyObjectiveType extends BackboneElementType
{

    /**
     * Unique, human-readable label for this objective of the study.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The kind of study objective.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Gets as name
     *
     * Unique, human-readable label for this objective of the study.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Unique, human-readable label for this objective of the study.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * The kind of study objective.
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
     * The kind of study objective.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }


}

