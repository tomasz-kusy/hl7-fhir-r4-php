<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductAuthorizationProcedureType
 *
 * The regulatory authorization of a medicinal product.
 * XSD Type: MedicinalProductAuthorization.Procedure
 */
class MedicinalProductAuthorizationProcedureType extends BackboneElementType
{

    /**
     * Identifier for this procedure.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Type of procedure.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Date of procedure. (choose any one of date*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $datePeriod
     */
    private $datePeriod = null;

    /**
     * Date of procedure. (choose any one of date*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $dateDateTime
     */
    private $dateDateTime = null;

    /**
     * Applcations submitted to obtain a marketing authorization.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType[] $application
     */
    private $application = [
        
    ];

    /**
     * Gets as identifier
     *
     * Identifier for this procedure.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier for this procedure.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of procedure.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of procedure.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as datePeriod
     *
     * Date of procedure. (choose any one of date*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getDatePeriod()
    {
        return $this->datePeriod;
    }

    /**
     * Sets a new datePeriod
     *
     * Date of procedure. (choose any one of date*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $datePeriod
     * @return self
     */
    public function setDatePeriod(\TKusy\Hl7FhirR4\PeriodType $datePeriod)
    {
        $this->datePeriod = $datePeriod;
        return $this;
    }

    /**
     * Gets as dateDateTime
     *
     * Date of procedure. (choose any one of date*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDateDateTime()
    {
        return $this->dateDateTime;
    }

    /**
     * Sets a new dateDateTime
     *
     * Date of procedure. (choose any one of date*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $dateDateTime
     * @return self
     */
    public function setDateDateTime(\TKusy\Hl7FhirR4\DateTimeType $dateDateTime)
    {
        $this->dateDateTime = $dateDateTime;
        return $this;
    }

    /**
     * Adds as application
     *
     * Applcations submitted to obtain a marketing authorization.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType $application
     */
    public function addToApplication(\TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType $application)
    {
        $this->application[] = $application;
        return $this;
    }

    /**
     * isset application
     *
     * Applcations submitted to obtain a marketing authorization.
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
     * Applcations submitted to obtain a marketing authorization.
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
     * Applcations submitted to obtain a marketing authorization.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType[]
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Sets a new application
     *
     * Applcations submitted to obtain a marketing authorization.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductAuthorizationProcedureType[] $application
     * @return self
     */
    public function setApplication(array $application)
    {
        $this->application = $application;
        return $this;
    }


}

