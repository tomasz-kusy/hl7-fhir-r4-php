<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ResearchStudyArmType
 *
 * A process where a researcher or organization plans and then executes a series of steps intended to increase the field of healthcare-related knowledge. This includes studies of safety, efficacy, comparative effectiveness and other information about medications, devices, therapies and other interventional and investigative techniques. A ResearchStudy involves the gathering of information about human or animal subjects.
 * XSD Type: ResearchStudy.Arm
 */
class ResearchStudyArmType extends BackboneElementType
{

    /**
     * Unique, human-readable label for this arm of the study.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Categorization of study arm, e.g. experimental, active comparator, placebo comparater.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A succinct description of the path through the study that would be followed by a subject adhering to this arm.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as name
     *
     * Unique, human-readable label for this arm of the study.
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
     * Unique, human-readable label for this arm of the study.
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
     * Categorization of study arm, e.g. experimental, active comparator, placebo comparater.
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
     * Categorization of study arm, e.g. experimental, active comparator, placebo comparater.
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
     * Gets as description
     *
     * A succinct description of the path through the study that would be followed by a subject adhering to this arm.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A succinct description of the path through the study that would be followed by a subject adhering to this arm.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

