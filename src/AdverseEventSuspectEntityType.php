<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AdverseEventSuspectEntityType
 *
 * Actual or potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 * XSD Type: AdverseEvent.SuspectEntity
 */
class AdverseEventSuspectEntityType extends BackboneElementType
{

    /**
     * Identifies the actual instance of what caused the adverse event. May be a substance, medication, medication administration, medication statement or a device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $instance
     */
    private $instance = null;

    /**
     * Information on the possible cause of the event.
     *
     * @var \TKusy\Hl7FhirR4\AdverseEventCausalityType[] $causality
     */
    private $causality = null;

    /**
     * Gets as instance
     *
     * Identifies the actual instance of what caused the adverse event. May be a substance, medication, medication administration, medication statement or a device.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * Identifies the actual instance of what caused the adverse event. May be a substance, medication, medication administration, medication statement or a device.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $instance
     * @return self
     */
    public function setInstance(\TKusy\Hl7FhirR4\ReferenceType $instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Adds as causality
     *
     * Information on the possible cause of the event.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AdverseEventCausalityType $causality
     */
    public function addToCausality(\TKusy\Hl7FhirR4\AdverseEventCausalityType $causality)
    {
        $this->causality[] = $causality;
        return $this;
    }

    /**
     * isset causality
     *
     * Information on the possible cause of the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCausality($index)
    {
        return isset($this->causality[$index]);
    }

    /**
     * unset causality
     *
     * Information on the possible cause of the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCausality($index)
    {
        unset($this->causality[$index]);
    }

    /**
     * Gets as causality
     *
     * Information on the possible cause of the event.
     *
     * @return \TKusy\Hl7FhirR4\AdverseEventCausalityType[]
     */
    public function getCausality()
    {
        return $this->causality;
    }

    /**
     * Sets a new causality
     *
     * Information on the possible cause of the event.
     *
     * @param \TKusy\Hl7FhirR4\AdverseEventCausalityType[] $causality
     * @return self
     */
    public function setCausality(array $causality)
    {
        $this->causality = $causality;
        return $this;
    }


}

