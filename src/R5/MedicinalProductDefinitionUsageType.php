<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicinalProductDefinitionUsageType
 *
 * A medicinal product, being a substance or combination of substances that is intended to treat, prevent or diagnose a disease, or to restore, correct or modify physiological functions by exerting a pharmacological, immunological or metabolic action. This resource is intended to define and detail such products and their properties, for uses other than direct patient care (e.g. regulatory use, or drug catalogs).
 * XSD Type: MedicinalProductDefinition.Usage
 */
class MedicinalProductDefinitionUsageType extends BackboneElementType
{

    /**
     * Country code for where this name applies.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $country
     */
    private $country = null;

    /**
     * Jurisdiction code for where this name applies. A jurisdiction may be a sub- or supra-national entity (e.g. a state or a geographic region).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Language code for this name.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     */
    private $language = null;

    /**
     * Gets as country
     *
     * Country code for where this name applies.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $country
     * @return self
     */
    public function setCountry(\TKusy\Hl7Fhir\R5\CodeableConceptType $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as jurisdiction
     *
     * Jurisdiction code for where this name applies. A jurisdiction may be a sub- or supra-national entity (e.g. a state or a geographic region).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * Jurisdiction code for where this name applies. A jurisdiction may be a sub- or supra-national entity (e.g. a state or a geographic region).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction
     * @return self
     */
    public function setJurisdiction(?\TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction = null)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as language
     *
     * Language code for this name.
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
     * Language code for this name.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7Fhir\R5\CodeableConceptType $language)
    {
        $this->language = $language;
        return $this;
    }


}

