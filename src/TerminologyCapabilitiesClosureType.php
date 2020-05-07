<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesClosureType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Closure
 */
class TerminologyCapabilitiesClosureType extends BackboneElementType
{

    /**
     * If cross-system closure is supported.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $translation
     */
    private $translation = null;

    /**
     * Gets as translation
     *
     * If cross-system closure is supported.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Sets a new translation
     *
     * If cross-system closure is supported.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $translation
     * @return self
     */
    public function setTranslation(\TKusy\Hl7FhirR4\BooleanType $translation)
    {
        $this->translation = $translation;
        return $this;
    }


}

