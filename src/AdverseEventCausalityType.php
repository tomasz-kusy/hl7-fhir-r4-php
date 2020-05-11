<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AdverseEventCausalityType
 *
 * Actual or potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 * XSD Type: AdverseEvent.Causality
 */
class AdverseEventCausalityType extends BackboneElementType
{

    /**
     * Assessment of if the entity caused the event.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $assessment
     */
    private $assessment = null;

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @var string $productRelatedness
     */
    private $productRelatedness = null;

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $author
     */
    private $author = null;

    /**
     * ProbabilityScale | Bayesian | Checklist.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * Gets as assessment
     *
     * Assessment of if the entity caused the event.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAssessment()
    {
        return $this->assessment;
    }

    /**
     * Sets a new assessment
     *
     * Assessment of if the entity caused the event.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $assessment
     * @return self
     */
    public function setAssessment(\TKusy\Hl7FhirR4\CodeableConceptType $assessment)
    {
        $this->assessment = $assessment;
        return $this;
    }

    /**
     * Gets as productRelatedness
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @return string
     */
    public function getProductRelatedness()
    {
        return $this->productRelatedness;
    }

    /**
     * Sets a new productRelatedness
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @param string $productRelatedness
     * @return self
     */
    public function setProductRelatedness($productRelatedness)
    {
        $this->productRelatedness = $productRelatedness;
        return $this;
    }

    /**
     * Gets as author
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $author
     * @return self
     */
    public function setAuthor(\TKusy\Hl7FhirR4\ReferenceType $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as method
     *
     * ProbabilityScale | Bayesian | Checklist.
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
     * ProbabilityScale | Bayesian | Checklist.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }


}

