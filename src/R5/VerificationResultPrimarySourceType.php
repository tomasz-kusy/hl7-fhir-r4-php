<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing VerificationResultPrimarySourceType
 *
 * Describes validation requirements, source(s), status and dates for one or more elements.
 * XSD Type: VerificationResult.PrimarySource
 */
class VerificationResultPrimarySourceType extends BackboneElementType
{

    /**
     * Reference to the primary source.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $who
     */
    private $who = null;

    /**
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $communicationMethod
     */
    private $communicationMethod = null;

    /**
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $validationStatus
     */
    private $validationStatus = null;

    /**
     * When the target was validated against the primary source.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $validationDate
     */
    private $validationDate = null;

    /**
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $canPushUpdates
     */
    private $canPushUpdates = null;

    /**
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $pushTypeAvailable
     */
    private $pushTypeAvailable = null;

    /**
     * Gets as who
     *
     * Reference to the primary source.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Sets a new who
     *
     * Reference to the primary source.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $who
     * @return self
     */
    public function setWho(?\TKusy\Hl7Fhir\R5\ReferenceType $who = null)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * Adds as type
     *
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as communicationMethod
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $communicationMethod
     */
    public function addToCommunicationMethod(\TKusy\Hl7Fhir\R5\CodeableConceptType $communicationMethod)
    {
        $this->communicationMethod[] = $communicationMethod;
        return $this;
    }

    /**
     * isset communicationMethod
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommunicationMethod($index)
    {
        return isset($this->communicationMethod[$index]);
    }

    /**
     * unset communicationMethod
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommunicationMethod($index)
    {
        unset($this->communicationMethod[$index]);
    }

    /**
     * Gets as communicationMethod
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCommunicationMethod()
    {
        return $this->communicationMethod;
    }

    /**
     * Sets a new communicationMethod
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $communicationMethod
     * @return self
     */
    public function setCommunicationMethod(array $communicationMethod = null)
    {
        $this->communicationMethod = $communicationMethod;
        return $this;
    }

    /**
     * Gets as validationStatus
     *
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getValidationStatus()
    {
        return $this->validationStatus;
    }

    /**
     * Sets a new validationStatus
     *
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $validationStatus
     * @return self
     */
    public function setValidationStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $validationStatus = null)
    {
        $this->validationStatus = $validationStatus;
        return $this;
    }

    /**
     * Gets as validationDate
     *
     * When the target was validated against the primary source.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Sets a new validationDate
     *
     * When the target was validated against the primary source.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $validationDate
     * @return self
     */
    public function setValidationDate(?\TKusy\Hl7Fhir\R5\DateTimeType $validationDate = null)
    {
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * Gets as canPushUpdates
     *
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCanPushUpdates()
    {
        return $this->canPushUpdates;
    }

    /**
     * Sets a new canPushUpdates
     *
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $canPushUpdates
     * @return self
     */
    public function setCanPushUpdates(?\TKusy\Hl7Fhir\R5\CodeableConceptType $canPushUpdates = null)
    {
        $this->canPushUpdates = $canPushUpdates;
        return $this;
    }

    /**
     * Adds as pushTypeAvailable
     *
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $pushTypeAvailable
     */
    public function addToPushTypeAvailable(\TKusy\Hl7Fhir\R5\CodeableConceptType $pushTypeAvailable)
    {
        $this->pushTypeAvailable[] = $pushTypeAvailable;
        return $this;
    }

    /**
     * isset pushTypeAvailable
     *
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPushTypeAvailable($index)
    {
        return isset($this->pushTypeAvailable[$index]);
    }

    /**
     * unset pushTypeAvailable
     *
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPushTypeAvailable($index)
    {
        unset($this->pushTypeAvailable[$index]);
    }

    /**
     * Gets as pushTypeAvailable
     *
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getPushTypeAvailable()
    {
        return $this->pushTypeAvailable;
    }

    /**
     * Sets a new pushTypeAvailable
     *
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $pushTypeAvailable
     * @return self
     */
    public function setPushTypeAvailable(array $pushTypeAvailable = null)
    {
        $this->pushTypeAvailable = $pushTypeAvailable;
        return $this;
    }


}

