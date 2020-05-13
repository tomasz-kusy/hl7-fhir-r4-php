<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing PatientCommunicationType
 *
 * Demographics and other administrative information about an individual or animal receiving care or other health-related services.
 * XSD Type: Patient.Communication
 */
class PatientCommunicationType extends BackboneElementType
{

    /**
     * The ISO-639-1 alpha 2 code in lower case for the language, optionally followed by a hyphen and the ISO-3166-1 alpha 2 code for the region in upper case; e.g. "en" for English, or "en-US" for American English versus "en-EN" for England English.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $language
     */
    private $language = null;

    /**
     * Indicates whether or not the patient prefers this language (over other languages he masters up a certain level).
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $preferred
     */
    private $preferred = null;

    /**
     * Gets as language
     *
     * The ISO-639-1 alpha 2 code in lower case for the language, optionally followed by a hyphen and the ISO-3166-1 alpha 2 code for the region in upper case; e.g. "en" for English, or "en-US" for American English versus "en-EN" for England English.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The ISO-639-1 alpha 2 code in lower case for the language, optionally followed by a hyphen and the ISO-3166-1 alpha 2 code for the region in upper case; e.g. "en" for English, or "en-US" for American English versus "en-EN" for England English.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7Fhir\R4\CodeableConceptType $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as preferred
     *
     * Indicates whether or not the patient prefers this language (over other languages he masters up a certain level).
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getPreferred()
    {
        return $this->preferred;
    }

    /**
     * Sets a new preferred
     *
     * Indicates whether or not the patient prefers this language (over other languages he masters up a certain level).
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $preferred
     * @return self
     */
    public function setPreferred(\TKusy\Hl7Fhir\R4\BooleanType $preferred)
    {
        $this->preferred = $preferred;
        return $this;
    }


}

