<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesValidateCodeType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.ValidateCode
 */
class TerminologyCapabilitiesValidateCodeType extends BackboneElementType
{

    /**
     * Whether translations are validated.
     *
     * @var bool $translations
     */
    private $translations = null;

    /**
     * Gets as translations
     *
     * Whether translations are validated.
     *
     * @return bool
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Sets a new translations
     *
     * Whether translations are validated.
     *
     * @param bool $translations
     * @return self
     */
    public function setTranslations($translations)
    {
        $this->translations = $translations;
        return $this;
    }


}

