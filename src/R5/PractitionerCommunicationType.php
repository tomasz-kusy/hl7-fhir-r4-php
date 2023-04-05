<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PractitionerCommunicationType
 *
 * A person who is directly or indirectly involved in the provisioning of healthcare or related services.
 * XSD Type: Practitioner.Communication
 */
class PractitionerCommunicationType extends BackboneElementType
{

    /**
     * The ISO-639-1 alpha 2 code in lower case for the language, optionally followed by a hyphen and the ISO-3166-1 alpha 2 code for the region in upper case; e.g. "en" for English, or "en-US" for American English versus "en-AU" for Australian English.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     */
    private $language = null;

    /**
     * Indicates whether or not the person prefers this language (over other languages he masters up a certain level).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $preferred
     */
    private $preferred = null;

    /**
     * Gets as language
     *
     * The ISO-639-1 alpha 2 code in lower case for the language, optionally followed by a hyphen and the ISO-3166-1 alpha 2 code for the region in upper case; e.g. "en" for English, or "en-US" for American English versus "en-AU" for Australian English.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The ISO-639-1 alpha 2 code in lower case for the language, optionally followed by a hyphen and the ISO-3166-1 alpha 2 code for the region in upper case; e.g. "en" for English, or "en-US" for American English versus "en-AU" for Australian English.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7Fhir\R5\CodeableConceptType $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as preferred
     *
     * Indicates whether or not the person prefers this language (over other languages he masters up a certain level).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getPreferred()
    {
        return $this->preferred;
    }

    /**
     * Sets a new preferred
     *
     * Indicates whether or not the person prefers this language (over other languages he masters up a certain level).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $preferred
     * @return self
     */
    public function setPreferred(?\TKusy\Hl7Fhir\R5\BooleanType $preferred = null)
    {
        $this->preferred = $preferred;
        return $this;
    }


}

