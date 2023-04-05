<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicinalProductDefinitionOperationType
 *
 * A medicinal product, being a substance or combination of substances that is intended to treat, prevent or diagnose a disease, or to restore, correct or modify physiological functions by exerting a pharmacological, immunological or metabolic action. This resource is intended to define and detail such products and their properties, for uses other than direct patient care (e.g. regulatory use, or drug catalogs).
 * XSD Type: MedicinalProductDefinition.Operation
 */
class MedicinalProductDefinitionOperationType extends BackboneElementType
{

    /**
     * The type of manufacturing operation e.g. manufacturing itself, re-packaging. For the authorization of this, a RegulatedAuthorization would point to the same plan or activity referenced here.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $type
     */
    private $type = null;

    /**
     * Date range of applicability.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * The organization or establishment responsible for (or associated with) the particular process or step, examples include the manufacturer, importer, agent.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $organization
     */
    private $organization = null;

    /**
     * Specifies whether this particular business or manufacturing process is considered proprietary or confidential.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $confidentialityIndicator
     */
    private $confidentialityIndicator = null;

    /**
     * Gets as type
     *
     * The type of manufacturing operation e.g. manufacturing itself, re-packaging. For the authorization of this, a RegulatedAuthorization would point to the same plan or activity referenced here.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of manufacturing operation e.g. manufacturing itself, re-packaging. For the authorization of this, a RegulatedAuthorization would point to the same plan or activity referenced here.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Date range of applicability.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Date range of applicability.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectiveDate
     * @return self
     */
    public function setEffectiveDate(?\TKusy\Hl7Fhir\R5\PeriodType $effectiveDate = null)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Adds as organization
     *
     * The organization or establishment responsible for (or associated with) the particular process or step, examples include the manufacturer, importer, agent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $organization
     */
    public function addToOrganization(\TKusy\Hl7Fhir\R5\ReferenceType $organization)
    {
        $this->organization[] = $organization;
        return $this;
    }

    /**
     * isset organization
     *
     * The organization or establishment responsible for (or associated with) the particular process or step, examples include the manufacturer, importer, agent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganization($index)
    {
        return isset($this->organization[$index]);
    }

    /**
     * unset organization
     *
     * The organization or establishment responsible for (or associated with) the particular process or step, examples include the manufacturer, importer, agent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganization($index)
    {
        unset($this->organization[$index]);
    }

    /**
     * Gets as organization
     *
     * The organization or establishment responsible for (or associated with) the particular process or step, examples include the manufacturer, importer, agent.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * The organization or establishment responsible for (or associated with) the particular process or step, examples include the manufacturer, importer, agent.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $organization
     * @return self
     */
    public function setOrganization(array $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as confidentialityIndicator
     *
     * Specifies whether this particular business or manufacturing process is considered proprietary or confidential.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getConfidentialityIndicator()
    {
        return $this->confidentialityIndicator;
    }

    /**
     * Sets a new confidentialityIndicator
     *
     * Specifies whether this particular business or manufacturing process is considered proprietary or confidential.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $confidentialityIndicator
     * @return self
     */
    public function setConfidentialityIndicator(?\TKusy\Hl7Fhir\R5\CodeableConceptType $confidentialityIndicator = null)
    {
        $this->confidentialityIndicator = $confidentialityIndicator;
        return $this;
    }


}

