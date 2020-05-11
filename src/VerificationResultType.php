<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing VerificationResultType
 *
 * Describes validation requirements, source(s), status and dates for one or more elements.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: VerificationResult
 */
class VerificationResultType extends DomainResourceType
{

    /**
     * A resource that was validated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $target
     */
    private $target = null;

    /**
     * The fhirpath location(s) within the resource that was validated.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $targetLocation
     */
    private $targetLocation = null;

    /**
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $need
     */
    private $need = null;

    /**
     * The validation status of the target (attested; validated; in process; requires revalidation; validation failed; revalidation failed).
     *
     * @var \TKusy\Hl7FhirR4\StatusType $status
     */
    private $status = null;

    /**
     * When the validation status was updated.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $statusDate
     */
    private $statusDate = null;

    /**
     * What the target is validated against (nothing; primary source; multiple sources).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $validationType
     */
    private $validationType = null;

    /**
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $validationProcess
     */
    private $validationProcess = null;

    /**
     * Frequency of revalidation.
     *
     * @var \TKusy\Hl7FhirR4\TimingType $frequency
     */
    private $frequency = null;

    /**
     * The date/time validation was last completed (including failed validations).
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $lastPerformed
     */
    private $lastPerformed = null;

    /**
     * The date when target is next validated, if appropriate.
     *
     * @var \TKusy\Hl7FhirR4\DateType $nextScheduled
     */
    private $nextScheduled = null;

    /**
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $failureAction
     */
    private $failureAction = null;

    /**
     * Information about the primary source(s) involved in validation.
     *
     * @var \TKusy\Hl7FhirR4\VerificationResultPrimarySourceType[] $primarySource
     */
    private $primarySource = null;

    /**
     * Information about the entity attesting to information.
     *
     * @var \TKusy\Hl7FhirR4\VerificationResultAttestationType $attestation
     */
    private $attestation = null;

    /**
     * Information about the entity validating information.
     *
     * @var \TKusy\Hl7FhirR4\VerificationResultValidatorType[] $validator
     */
    private $validator = null;

    /**
     * Adds as target
     *
     * A resource that was validated.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $target
     */
    public function addToTarget(\TKusy\Hl7FhirR4\ReferenceType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * A resource that was validated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTarget($index)
    {
        return isset($this->target[$index]);
    }

    /**
     * unset target
     *
     * A resource that was validated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTarget($index)
    {
        unset($this->target[$index]);
    }

    /**
     * Gets as target
     *
     * A resource that was validated.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * A resource that was validated.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Adds as targetLocation
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $targetLocation
     */
    public function addToTargetLocation(\TKusy\Hl7FhirR4\StringType $targetLocation)
    {
        $this->targetLocation[] = $targetLocation;
        return $this;
    }

    /**
     * isset targetLocation
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTargetLocation($index)
    {
        return isset($this->targetLocation[$index]);
    }

    /**
     * unset targetLocation
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTargetLocation($index)
    {
        unset($this->targetLocation[$index]);
    }

    /**
     * Gets as targetLocation
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getTargetLocation()
    {
        return $this->targetLocation;
    }

    /**
     * Sets a new targetLocation
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $targetLocation
     * @return self
     */
    public function setTargetLocation(array $targetLocation)
    {
        $this->targetLocation = $targetLocation;
        return $this;
    }

    /**
     * Gets as need
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getNeed()
    {
        return $this->need;
    }

    /**
     * Sets a new need
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $need
     * @return self
     */
    public function setNeed(\TKusy\Hl7FhirR4\CodeableConceptType $need)
    {
        $this->need = $need;
        return $this;
    }

    /**
     * Gets as status
     *
     * The validation status of the target (attested; validated; in process; requires revalidation; validation failed; revalidation failed).
     *
     * @return \TKusy\Hl7FhirR4\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The validation status of the target (attested; validated; in process; requires revalidation; validation failed; revalidation failed).
     *
     * @param \TKusy\Hl7FhirR4\StatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusDate
     *
     * When the validation status was updated.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Sets a new statusDate
     *
     * When the validation status was updated.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $statusDate
     * @return self
     */
    public function setStatusDate(\TKusy\Hl7FhirR4\DateTimeType $statusDate)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Gets as validationType
     *
     * What the target is validated against (nothing; primary source; multiple sources).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getValidationType()
    {
        return $this->validationType;
    }

    /**
     * Sets a new validationType
     *
     * What the target is validated against (nothing; primary source; multiple sources).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $validationType
     * @return self
     */
    public function setValidationType(\TKusy\Hl7FhirR4\CodeableConceptType $validationType)
    {
        $this->validationType = $validationType;
        return $this;
    }

    /**
     * Adds as validationProcess
     *
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $validationProcess
     */
    public function addToValidationProcess(\TKusy\Hl7FhirR4\CodeableConceptType $validationProcess)
    {
        $this->validationProcess[] = $validationProcess;
        return $this;
    }

    /**
     * isset validationProcess
     *
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidationProcess($index)
    {
        return isset($this->validationProcess[$index]);
    }

    /**
     * unset validationProcess
     *
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidationProcess($index)
    {
        unset($this->validationProcess[$index]);
    }

    /**
     * Gets as validationProcess
     *
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getValidationProcess()
    {
        return $this->validationProcess;
    }

    /**
     * Sets a new validationProcess
     *
     * The primary process by which the target is validated (edit check; value set; primary source; multiple sources; standalone; in context).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $validationProcess
     * @return self
     */
    public function setValidationProcess(array $validationProcess)
    {
        $this->validationProcess = $validationProcess;
        return $this;
    }

    /**
     * Gets as frequency
     *
     * Frequency of revalidation.
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Frequency of revalidation.
     *
     * @param \TKusy\Hl7FhirR4\TimingType $frequency
     * @return self
     */
    public function setFrequency(\TKusy\Hl7FhirR4\TimingType $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as lastPerformed
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getLastPerformed()
    {
        return $this->lastPerformed;
    }

    /**
     * Sets a new lastPerformed
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $lastPerformed
     * @return self
     */
    public function setLastPerformed(\TKusy\Hl7FhirR4\DateTimeType $lastPerformed)
    {
        $this->lastPerformed = $lastPerformed;
        return $this;
    }

    /**
     * Gets as nextScheduled
     *
     * The date when target is next validated, if appropriate.
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getNextScheduled()
    {
        return $this->nextScheduled;
    }

    /**
     * Sets a new nextScheduled
     *
     * The date when target is next validated, if appropriate.
     *
     * @param \TKusy\Hl7FhirR4\DateType $nextScheduled
     * @return self
     */
    public function setNextScheduled(\TKusy\Hl7FhirR4\DateType $nextScheduled)
    {
        $this->nextScheduled = $nextScheduled;
        return $this;
    }

    /**
     * Gets as failureAction
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getFailureAction()
    {
        return $this->failureAction;
    }

    /**
     * Sets a new failureAction
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $failureAction
     * @return self
     */
    public function setFailureAction(\TKusy\Hl7FhirR4\CodeableConceptType $failureAction)
    {
        $this->failureAction = $failureAction;
        return $this;
    }

    /**
     * Adds as primarySource
     *
     * Information about the primary source(s) involved in validation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\VerificationResultPrimarySourceType $primarySource
     */
    public function addToPrimarySource(\TKusy\Hl7FhirR4\VerificationResultPrimarySourceType $primarySource)
    {
        $this->primarySource[] = $primarySource;
        return $this;
    }

    /**
     * isset primarySource
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrimarySource($index)
    {
        return isset($this->primarySource[$index]);
    }

    /**
     * unset primarySource
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrimarySource($index)
    {
        unset($this->primarySource[$index]);
    }

    /**
     * Gets as primarySource
     *
     * Information about the primary source(s) involved in validation.
     *
     * @return \TKusy\Hl7FhirR4\VerificationResultPrimarySourceType[]
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }

    /**
     * Sets a new primarySource
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param \TKusy\Hl7FhirR4\VerificationResultPrimarySourceType[] $primarySource
     * @return self
     */
    public function setPrimarySource(array $primarySource)
    {
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * Gets as attestation
     *
     * Information about the entity attesting to information.
     *
     * @return \TKusy\Hl7FhirR4\VerificationResultAttestationType
     */
    public function getAttestation()
    {
        return $this->attestation;
    }

    /**
     * Sets a new attestation
     *
     * Information about the entity attesting to information.
     *
     * @param \TKusy\Hl7FhirR4\VerificationResultAttestationType $attestation
     * @return self
     */
    public function setAttestation(\TKusy\Hl7FhirR4\VerificationResultAttestationType $attestation)
    {
        $this->attestation = $attestation;
        return $this;
    }

    /**
     * Adds as validator
     *
     * Information about the entity validating information.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\VerificationResultValidatorType $validator
     */
    public function addToValidator(\TKusy\Hl7FhirR4\VerificationResultValidatorType $validator)
    {
        $this->validator[] = $validator;
        return $this;
    }

    /**
     * isset validator
     *
     * Information about the entity validating information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidator($index)
    {
        return isset($this->validator[$index]);
    }

    /**
     * unset validator
     *
     * Information about the entity validating information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidator($index)
    {
        unset($this->validator[$index]);
    }

    /**
     * Gets as validator
     *
     * Information about the entity validating information.
     *
     * @return \TKusy\Hl7FhirR4\VerificationResultValidatorType[]
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Sets a new validator
     *
     * Information about the entity validating information.
     *
     * @param \TKusy\Hl7FhirR4\VerificationResultValidatorType[] $validator
     * @return self
     */
    public function setValidator(array $validator)
    {
        $this->validator = $validator;
        return $this;
    }


}

