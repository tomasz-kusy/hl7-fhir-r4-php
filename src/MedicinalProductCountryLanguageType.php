<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductCountryLanguageType
 *
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 * XSD Type: MedicinalProduct.CountryLanguage
 */
class MedicinalProductCountryLanguageType extends BackboneElementType
{

    /**
     * Country code for where this name applies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $country
     */
    private $country = null;

    /**
     * Jurisdiction code for where this name applies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Language code for this name.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $language
     */
    private $language = null;

    /**
     * Gets as country
     *
     * Country code for where this name applies.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Country code for where this name applies.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $country
     * @return self
     */
    public function setCountry(\TKusy\Hl7FhirR4\CodeableConceptType $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as jurisdiction
     *
     * Jurisdiction code for where this name applies.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * Jurisdiction code for where this name applies.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction
     * @return self
     */
    public function setJurisdiction(\TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as language
     *
     * Language code for this name.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language code for this name.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7FhirR4\CodeableConceptType $language)
    {
        $this->language = $language;
        return $this;
    }


}

