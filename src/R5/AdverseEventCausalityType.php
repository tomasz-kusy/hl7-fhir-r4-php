<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AdverseEventCausalityType
 *
 * An event (i.e. any change to current patient status) that may be related to unintended effects on a patient or research participant. The unintended effects may require additional monitoring, treatment, hospitalization, or may result in death. The AdverseEvent resource also extends to potential or avoided events that could have had such effects. There are two major domains where the AdverseEvent resource is expected to be used. One is in clinical care reported adverse events and the other is in reporting adverse events in clinical research trial management. Adverse events can be reported by healthcare providers, patients, caregivers or by medical products manufacturers. Given the differences between these two concepts, we recommend consulting the domain specific implementation guides when implementing the AdverseEvent Resource. The implementation guides include specific extensions, value sets and constraints.
 * XSD Type: AdverseEvent.Causality
 */
class AdverseEventCausalityType extends BackboneElementType
{

    /**
     * The method of evaluating the relatedness of the suspected entity to the event.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $assessmentMethod
     */
    private $assessmentMethod = null;

    /**
     * The result of the assessment regarding the relatedness of the suspected entity to the event.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $entityRelatedness
     */
    private $entityRelatedness = null;

    /**
     * The author of the information on the possible cause of the event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * Gets as assessmentMethod
     *
     * The method of evaluating the relatedness of the suspected entity to the event.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAssessmentMethod()
    {
        return $this->assessmentMethod;
    }

    /**
     * Sets a new assessmentMethod
     *
     * The method of evaluating the relatedness of the suspected entity to the event.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $assessmentMethod
     * @return self
     */
    public function setAssessmentMethod(?\TKusy\Hl7Fhir\R5\CodeableConceptType $assessmentMethod = null)
    {
        $this->assessmentMethod = $assessmentMethod;
        return $this;
    }

    /**
     * Gets as entityRelatedness
     *
     * The result of the assessment regarding the relatedness of the suspected entity to the event.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getEntityRelatedness()
    {
        return $this->entityRelatedness;
    }

    /**
     * Sets a new entityRelatedness
     *
     * The result of the assessment regarding the relatedness of the suspected entity to the event.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $entityRelatedness
     * @return self
     */
    public function setEntityRelatedness(?\TKusy\Hl7Fhir\R5\CodeableConceptType $entityRelatedness = null)
    {
        $this->entityRelatedness = $entityRelatedness;
        return $this;
    }

    /**
     * Gets as author
     *
     * The author of the information on the possible cause of the event.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * The author of the information on the possible cause of the event.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     * @return self
     */
    public function setAuthor(?\TKusy\Hl7Fhir\R5\ReferenceType $author = null)
    {
        $this->author = $author;
        return $this;
    }


}

