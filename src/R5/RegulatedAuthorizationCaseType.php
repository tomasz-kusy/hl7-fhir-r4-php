<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RegulatedAuthorizationCaseType
 *
 * Regulatory approval, clearance or licencing related to a regulated product, treatment, facility or activity that is cited in a guidance, regulation, rule or legislative act. An example is Market Authorization relating to a Medicinal Product.
 * XSD Type: RegulatedAuthorization.Case
 */
class RegulatedAuthorizationCaseType extends BackboneElementType
{

    /**
     * Identifier by which this case can be referenced.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * The defining type of case.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The status associated with the case.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $datePeriod
     */
    private $datePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $dateDateTime
     */
    private $dateDateTime = null;

    /**
     * A regulatory submission from an organization to a regulator, as part of an assessing case. Multiple applications may occur over time, with more or different information to support or modify the submission or the authorization. The applications can be considered as steps within the longer running case or procedure for this authorization process.
     *
     * @var \TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType[] $application
     */
    private $application = null;

    /**
     * Gets as identifier
     *
     * Identifier by which this case can be referenced.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier by which this case can be referenced.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * The defining type of case.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The defining type of case.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status associated with the case.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status associated with the case.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as datePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getDatePeriod()
    {
        return $this->datePeriod;
    }

    /**
     * Sets a new datePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $datePeriod
     * @return self
     */
    public function setDatePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $datePeriod = null)
    {
        $this->datePeriod = $datePeriod;
        return $this;
    }

    /**
     * Gets as dateDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDateDateTime()
    {
        return $this->dateDateTime;
    }

    /**
     * Sets a new dateDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $dateDateTime
     * @return self
     */
    public function setDateDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $dateDateTime = null)
    {
        $this->dateDateTime = $dateDateTime;
        return $this;
    }

    /**
     * Adds as application
     *
     * A regulatory submission from an organization to a regulator, as part of an assessing case. Multiple applications may occur over time, with more or different information to support or modify the submission or the authorization. The applications can be considered as steps within the longer running case or procedure for this authorization process.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType $application
     */
    public function addToApplication(\TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType $application)
    {
        $this->application[] = $application;
        return $this;
    }

    /**
     * isset application
     *
     * A regulatory submission from an organization to a regulator, as part of an assessing case. Multiple applications may occur over time, with more or different information to support or modify the submission or the authorization. The applications can be considered as steps within the longer running case or procedure for this authorization process.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplication($index)
    {
        return isset($this->application[$index]);
    }

    /**
     * unset application
     *
     * A regulatory submission from an organization to a regulator, as part of an assessing case. Multiple applications may occur over time, with more or different information to support or modify the submission or the authorization. The applications can be considered as steps within the longer running case or procedure for this authorization process.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplication($index)
    {
        unset($this->application[$index]);
    }

    /**
     * Gets as application
     *
     * A regulatory submission from an organization to a regulator, as part of an assessing case. Multiple applications may occur over time, with more or different information to support or modify the submission or the authorization. The applications can be considered as steps within the longer running case or procedure for this authorization process.
     *
     * @return \TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType[]
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Sets a new application
     *
     * A regulatory submission from an organization to a regulator, as part of an assessing case. Multiple applications may occur over time, with more or different information to support or modify the submission or the authorization. The applications can be considered as steps within the longer running case or procedure for this authorization process.
     *
     * @param \TKusy\Hl7Fhir\R5\RegulatedAuthorizationCaseType[] $application
     * @return self
     */
    public function setApplication(array $application = null)
    {
        $this->application = $application;
        return $this;
    }


}

