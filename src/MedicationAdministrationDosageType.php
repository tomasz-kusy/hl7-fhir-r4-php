<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationAdministrationDosageType
 *
 * Describes the event of a patient consuming or otherwise being administered a medication. This may be as simple as swallowing a tablet or it may be a long running infusion. Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * XSD Type: MedicationAdministration.Dosage
 */
class MedicationAdministrationDosageType extends BackboneElementType
{

    /**
     * Free text dosage can be used for cases where the dosage administered is too complex to code. When coded dosage is present, the free text dosage may still be present for display to humans.
     *
     * The dosage instructions should reflect the dosage of the medication that was administered.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * A coded specification of the anatomic site where the medication first entered the body. For example, "left arm".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $site
     */
    private $site = null;

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto the patient. For example, topical, intravenous, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $route
     */
    private $route = null;

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body. This attribute will most often NOT be populated. It is most commonly used for injections. For example, Slow Push, Deep IV.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * The amount of the medication given at one administration event. Use this value when the administration is essentially an instantaneous event such as a swallowing a tablet or giving an injection.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $dose
     */
    private $dose = null;

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically, the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr. May also be expressed as a rate per unit of time, e.g. 500 ml per 2 hours. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $rateRatio
     */
    private $rateRatio = null;

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically, the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr. May also be expressed as a rate per unit of time, e.g. 500 ml per 2 hours. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $rateQuantity
     */
    private $rateQuantity = null;

    /**
     * Gets as text
     *
     * Free text dosage can be used for cases where the dosage administered is too complex to code. When coded dosage is present, the free text dosage may still be present for display to humans.
     *
     * The dosage instructions should reflect the dosage of the medication that was administered.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Free text dosage can be used for cases where the dosage administered is too complex to code. When coded dosage is present, the free text dosage may still be present for display to humans.
     *
     * The dosage instructions should reflect the dosage of the medication that was administered.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as site
     *
     * A coded specification of the anatomic site where the medication first entered the body. For example, "left arm".
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * A coded specification of the anatomic site where the medication first entered the body. For example, "left arm".
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $site
     * @return self
     */
    public function setSite(\TKusy\Hl7FhirR4\CodeableConceptType $site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as route
     *
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto the patient. For example, topical, intravenous, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Sets a new route
     *
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto the patient. For example, topical, intravenous, etc.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $route
     * @return self
     */
    public function setRoute(\TKusy\Hl7FhirR4\CodeableConceptType $route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Gets as method
     *
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body. This attribute will most often NOT be populated. It is most commonly used for injections. For example, Slow Push, Deep IV.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body. This attribute will most often NOT be populated. It is most commonly used for injections. For example, Slow Push, Deep IV.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as dose
     *
     * The amount of the medication given at one administration event. Use this value when the administration is essentially an instantaneous event such as a swallowing a tablet or giving an injection.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getDose()
    {
        return $this->dose;
    }

    /**
     * Sets a new dose
     *
     * The amount of the medication given at one administration event. Use this value when the administration is essentially an instantaneous event such as a swallowing a tablet or giving an injection.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $dose
     * @return self
     */
    public function setDose(\TKusy\Hl7FhirR4\QuantityType $dose)
    {
        $this->dose = $dose;
        return $this;
    }

    /**
     * Gets as rateRatio
     *
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically, the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr. May also be expressed as a rate per unit of time, e.g. 500 ml per 2 hours. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * Sets a new rateRatio
     *
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically, the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr. May also be expressed as a rate per unit of time, e.g. 500 ml per 2 hours. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $rateRatio
     * @return self
     */
    public function setRateRatio(\TKusy\Hl7FhirR4\RatioType $rateRatio)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * Gets as rateQuantity
     *
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically, the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr. May also be expressed as a rate per unit of time, e.g. 500 ml per 2 hours. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }

    /**
     * Sets a new rateQuantity
     *
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically, the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr. May also be expressed as a rate per unit of time, e.g. 500 ml per 2 hours. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $rateQuantity
     * @return self
     */
    public function setRateQuantity(\TKusy\Hl7FhirR4\QuantityType $rateQuantity)
    {
        $this->rateQuantity = $rateQuantity;
        return $this;
    }


}

