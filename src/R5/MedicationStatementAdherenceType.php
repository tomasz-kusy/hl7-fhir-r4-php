<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationStatementAdherenceType
 *
 * A record of a medication that is being consumed by a patient. A MedicationStatement may indicate that the patient may be taking the medication now or has taken the medication in the past or will be taking the medication in the future. The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician. A common scenario where this information is captured is during the history taking process during a patient visit or stay. The medication information may come from sources such as the patient's memory, from a prescription bottle, or from a list of medications the patient, clinician or other party maintains. 
 *
 * The primary difference between a medicationstatement and a medicationadministration is that the medication administration has complete administration information and is based on actual administration information from the person who administered the medication. A medicationstatement is often, if not always, less specific. There is no required date/time when the medication was administered, in fact we only know that a source has reported the patient is taking this medication, where details such as time, quantity, or rate or even medication product may be incomplete or missing or less precise. As stated earlier, the Medication Statement information may come from the patient's memory, from a prescription bottle or from a list of medications the patient, clinician or other party maintains. Medication administration is more formal and is not missing detailed information.
 *
 * The MedicationStatement resource was previously called MedicationStatement.
 * XSD Type: MedicationStatement.Adherence
 */
class MedicationStatementAdherenceType extends BackboneElementType
{

    /**
     * Type of the adherence for the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Captures the reason for the current use or adherence of a medication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    private $reason = null;

    /**
     * Gets as code
     *
     * Type of the adherence for the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Type of the adherence for the medication.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Captures the reason for the current use or adherence of a medication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Captures the reason for the current use or adherence of a medication.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }


}

