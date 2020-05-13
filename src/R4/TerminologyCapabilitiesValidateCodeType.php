<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\BooleanType $translations
     */
    private $translations = null;

    /**
     * Gets as translations
     *
     * Whether translations are validated.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
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
     * @param \TKusy\Hl7Fhir\R4\BooleanType $translations
     * @return self
     */
    public function setTranslations(\TKusy\Hl7Fhir\R4\BooleanType $translations)
    {
        $this->translations = $translations;
        return $this;
    }


}

