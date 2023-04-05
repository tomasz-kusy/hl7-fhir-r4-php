<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImmunizationType
 *
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Immunization
 */
class ImmunizationType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this immunization record.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan, order or recommendation fulfilled in whole or in part by this immunization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * Indicates the current status of the immunization event.
     *
     * @var \TKusy\Hl7Fhir\R5\ImmunizationStatusCodesType $status
     */
    private $status = null;

    /**
     * Indicates the reason the immunization event was not performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * Vaccine that was administered or was to be administered.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $vaccineCode
     */
    private $vaccineCode = null;

    /**
     * An indication of which product was administered to the patient. This is typically a more detailed representation of the concept conveyed by the vaccineCode data element. If a Medication resource is referenced, it may be to a stand-alone resource or a contained resource within the Immunization resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $administeredProduct
     */
    private $administeredProduct = null;

    /**
     * Name of vaccine manufacturer.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $manufacturer
     */
    private $manufacturer = null;

    /**
     * Lot number of the vaccine product.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $lotNumber
     */
    private $lotNumber = null;

    /**
     * Date vaccine batch expires.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $expirationDate
     */
    private $expirationDate = null;

    /**
     * The patient who either received or did not receive the immunization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Additional information that is relevant to the immunization (e.g. for a vaccine recipient who is pregnant, the gestational age of the fetus). The reason why a vaccine was given (e.g. occupation, underlying medical condition) should be conveyed in Immunization.reason, not as supporting information. The reason why a vaccine was not given (e.g. contraindication) should be conveyed in Immunization.statusReason, not as supporting information.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $occurrenceString
     */
    private $occurrenceString = null;

    /**
     * Indicates whether the data contained in the resource was captured by the individual/organization which was responsible for the administration of the vaccine rather than as 'secondary reported' data documented by a third party. A value of 'true' means this data originated with the individual/organization which was responsible for the administration of the vaccine.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $primarySource
     */
    private $primarySource = null;

    /**
     * Typically the source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $informationSource
     */
    private $informationSource = null;

    /**
     * The service delivery location where the vaccine administration occurred.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Body site where vaccine was administered.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $site
     */
    private $site = null;

    /**
     * The path by which the vaccine product is taken into the body.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $route
     */
    private $route = null;

    /**
     * The quantity of vaccine product that was administered.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $doseQuantity
     */
    private $doseQuantity = null;

    /**
     * Indicates who performed the immunization event.
     *
     * @var \TKusy\Hl7Fhir\R5\ImmunizationPerformerType[] $performer
     */
    private $performer = null;

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Describes why the immunization occurred in coded or textual form, or Indicates another resource (Condition, Observation or DiagnosticReport) whose existence justifies this immunization.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isSubpotent
     */
    private $isSubpotent = null;

    /**
     * Reason why a dose is considered to be subpotent.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subpotentReason
     */
    private $subpotentReason = null;

    /**
     * Indicates a patient's eligibility for a funding program.
     *
     * @var \TKusy\Hl7Fhir\R5\ImmunizationProgramEligibilityType[] $programEligibility
     */
    private $programEligibility = null;

    /**
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $fundingSource
     */
    private $fundingSource = null;

    /**
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @var \TKusy\Hl7Fhir\R5\ImmunizationReactionType[] $reaction
     */
    private $reaction = null;

    /**
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @var \TKusy\Hl7Fhir\R5\ImmunizationProtocolAppliedType[] $protocolApplied
     */
    private $protocolApplied = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this immunization record.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A unique identifier assigned to this immunization record.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * A unique identifier assigned to this immunization record.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * A unique identifier assigned to this immunization record.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A unique identifier assigned to this immunization record.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A plan, order or recommendation fulfilled in whole or in part by this immunization.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A plan, order or recommendation fulfilled in whole or in part by this immunization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * A plan, order or recommendation fulfilled in whole or in part by this immunization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * A plan, order or recommendation fulfilled in whole or in part by this immunization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A plan, order or recommendation fulfilled in whole or in part by this immunization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the current status of the immunization event.
     *
     * @return \TKusy\Hl7Fhir\R5\ImmunizationStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the current status of the immunization event.
     *
     * @param \TKusy\Hl7Fhir\R5\ImmunizationStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\ImmunizationStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     * @return self
     */
    public function setStatusReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as vaccineCode
     *
     * Vaccine that was administered or was to be administered.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * Sets a new vaccineCode
     *
     * Vaccine that was administered or was to be administered.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $vaccineCode
     * @return self
     */
    public function setVaccineCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $vaccineCode)
    {
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * Gets as administeredProduct
     *
     * An indication of which product was administered to the patient. This is typically a more detailed representation of the concept conveyed by the vaccineCode data element. If a Medication resource is referenced, it may be to a stand-alone resource or a contained resource within the Immunization resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getAdministeredProduct()
    {
        return $this->administeredProduct;
    }

    /**
     * Sets a new administeredProduct
     *
     * An indication of which product was administered to the patient. This is typically a more detailed representation of the concept conveyed by the vaccineCode data element. If a Medication resource is referenced, it may be to a stand-alone resource or a contained resource within the Immunization resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $administeredProduct
     * @return self
     */
    public function setAdministeredProduct(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $administeredProduct = null)
    {
        $this->administeredProduct = $administeredProduct;
        return $this;
    }

    /**
     * Gets as manufacturer
     *
     * Name of vaccine manufacturer.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Name of vaccine manufacturer.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $manufacturer
     * @return self
     */
    public function setManufacturer(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Gets as lotNumber
     *
     * Lot number of the vaccine product.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Sets a new lotNumber
     *
     * Lot number of the vaccine product.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $lotNumber
     * @return self
     */
    public function setLotNumber(?\TKusy\Hl7Fhir\R5\StringType $lotNumber = null)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * Date vaccine batch expires.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * Date vaccine batch expires.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $expirationDate
     * @return self
     */
    public function setExpirationDate(?\TKusy\Hl7Fhir\R5\DateType $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient who either received or did not receive the immunization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The patient who either received or did not receive the immunization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7Fhir\R5\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Adds as supportingInformation
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine recipient who is pregnant, the gestational age of the fetus). The reason why a vaccine was given (e.g. occupation, underlying medical condition) should be conveyed in Immunization.reason, not as supporting information. The reason why a vaccine was not given (e.g. contraindication) should be conveyed in Immunization.statusReason, not as supporting information.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * isset supportingInformation
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine recipient who is pregnant, the gestational age of the fetus). The reason why a vaccine was given (e.g. occupation, underlying medical condition) should be conveyed in Immunization.reason, not as supporting information. The reason why a vaccine was not given (e.g. contraindication) should be conveyed in Immunization.statusReason, not as supporting information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInformation($index)
    {
        return isset($this->supportingInformation[$index]);
    }

    /**
     * unset supportingInformation
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine recipient who is pregnant, the gestational age of the fetus). The reason why a vaccine was given (e.g. occupation, underlying medical condition) should be conveyed in Immunization.reason, not as supporting information. The reason why a vaccine was not given (e.g. contraindication) should be conveyed in Immunization.statusReason, not as supporting information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInformation($index)
    {
        unset($this->supportingInformation[$index]);
    }

    /**
     * Gets as supportingInformation
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine recipient who is pregnant, the gestational age of the fetus). The reason why a vaccine was given (e.g. occupation, underlying medical condition) should be conveyed in Immunization.reason, not as supporting information. The reason why a vaccine was not given (e.g. contraindication) should be conveyed in Immunization.statusReason, not as supporting information.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Additional information that is relevant to the immunization (e.g. for a vaccine recipient who is pregnant, the gestational age of the fetus). The reason why a vaccine was given (e.g. occupation, underlying medical condition) should be conveyed in Immunization.reason, not as supporting information. The reason why a vaccine was not given (e.g. contraindication) should be conveyed in Immunization.statusReason, not as supporting information.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation = null)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime = null)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrenceString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getOccurrenceString()
    {
        return $this->occurrenceString;
    }

    /**
     * Sets a new occurrenceString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $occurrenceString
     * @return self
     */
    public function setOccurrenceString(?\TKusy\Hl7Fhir\R5\StringType $occurrenceString = null)
    {
        $this->occurrenceString = $occurrenceString;
        return $this;
    }

    /**
     * Gets as primarySource
     *
     * Indicates whether the data contained in the resource was captured by the individual/organization which was responsible for the administration of the vaccine rather than as 'secondary reported' data documented by a third party. A value of 'true' means this data originated with the individual/organization which was responsible for the administration of the vaccine.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }

    /**
     * Sets a new primarySource
     *
     * Indicates whether the data contained in the resource was captured by the individual/organization which was responsible for the administration of the vaccine rather than as 'secondary reported' data documented by a third party. A value of 'true' means this data originated with the individual/organization which was responsible for the administration of the vaccine.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $primarySource
     * @return self
     */
    public function setPrimarySource(?\TKusy\Hl7Fhir\R5\BooleanType $primarySource = null)
    {
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * Gets as informationSource
     *
     * Typically the source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getInformationSource()
    {
        return $this->informationSource;
    }

    /**
     * Sets a new informationSource
     *
     * Typically the source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $informationSource
     * @return self
     */
    public function setInformationSource(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $informationSource = null)
    {
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * Gets as location
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as site
     *
     * Body site where vaccine was administered.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Body site where vaccine was administered.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $site
     * @return self
     */
    public function setSite(?\TKusy\Hl7Fhir\R5\CodeableConceptType $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as route
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Sets a new route
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $route
     * @return self
     */
    public function setRoute(?\TKusy\Hl7Fhir\R5\CodeableConceptType $route = null)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Gets as doseQuantity
     *
     * The quantity of vaccine product that was administered.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * Sets a new doseQuantity
     *
     * The quantity of vaccine product that was administered.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $doseQuantity
     * @return self
     */
    public function setDoseQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $doseQuantity = null)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Indicates who performed the immunization event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImmunizationPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\ImmunizationPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who performed the immunization event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformer($index)
    {
        return isset($this->performer[$index]);
    }

    /**
     * unset performer
     *
     * Indicates who performed the immunization event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformer($index)
    {
        unset($this->performer[$index]);
    }

    /**
     * Gets as performer
     *
     * Indicates who performed the immunization event.
     *
     * @return \TKusy\Hl7Fhir\R5\ImmunizationPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who performed the immunization event.
     *
     * @param \TKusy\Hl7Fhir\R5\ImmunizationPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as note
     *
     * Extra information about the immunization that is not conveyed by the other attributes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Extra information about the immunization that is not conveyed by the other attributes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Extra information about the immunization that is not conveyed by the other attributes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Extra information about the immunization that is not conveyed by the other attributes.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Extra information about the immunization that is not conveyed by the other attributes.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates another resource (Condition, Observation or DiagnosticReport) whose existence justifies this immunization.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableReferenceType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates another resource (Condition, Observation or DiagnosticReport) whose existence justifies this immunization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates another resource (Condition, Observation or DiagnosticReport) whose existence justifies this immunization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates another resource (Condition, Observation or DiagnosticReport) whose existence justifies this immunization.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Describes why the immunization occurred in coded or textual form, or Indicates another resource (Condition, Observation or DiagnosticReport) whose existence justifies this immunization.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as isSubpotent
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getIsSubpotent()
    {
        return $this->isSubpotent;
    }

    /**
     * Sets a new isSubpotent
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isSubpotent
     * @return self
     */
    public function setIsSubpotent(?\TKusy\Hl7Fhir\R5\BooleanType $isSubpotent = null)
    {
        $this->isSubpotent = $isSubpotent;
        return $this;
    }

    /**
     * Adds as subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subpotentReason
     */
    public function addToSubpotentReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $subpotentReason)
    {
        $this->subpotentReason[] = $subpotentReason;
        return $this;
    }

    /**
     * isset subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubpotentReason($index)
    {
        return isset($this->subpotentReason[$index]);
    }

    /**
     * unset subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubpotentReason($index)
    {
        unset($this->subpotentReason[$index]);
    }

    /**
     * Gets as subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSubpotentReason()
    {
        return $this->subpotentReason;
    }

    /**
     * Sets a new subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subpotentReason
     * @return self
     */
    public function setSubpotentReason(array $subpotentReason = null)
    {
        $this->subpotentReason = $subpotentReason;
        return $this;
    }

    /**
     * Adds as programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImmunizationProgramEligibilityType $programEligibility
     */
    public function addToProgramEligibility(\TKusy\Hl7Fhir\R5\ImmunizationProgramEligibilityType $programEligibility)
    {
        $this->programEligibility[] = $programEligibility;
        return $this;
    }

    /**
     * isset programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgramEligibility($index)
    {
        return isset($this->programEligibility[$index]);
    }

    /**
     * unset programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgramEligibility($index)
    {
        unset($this->programEligibility[$index]);
    }

    /**
     * Gets as programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @return \TKusy\Hl7Fhir\R5\ImmunizationProgramEligibilityType[]
     */
    public function getProgramEligibility()
    {
        return $this->programEligibility;
    }

    /**
     * Sets a new programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param \TKusy\Hl7Fhir\R5\ImmunizationProgramEligibilityType[] $programEligibility
     * @return self
     */
    public function setProgramEligibility(array $programEligibility = null)
    {
        $this->programEligibility = $programEligibility;
        return $this;
    }

    /**
     * Gets as fundingSource
     *
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFundingSource()
    {
        return $this->fundingSource;
    }

    /**
     * Sets a new fundingSource
     *
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $fundingSource
     * @return self
     */
    public function setFundingSource(?\TKusy\Hl7Fhir\R5\CodeableConceptType $fundingSource = null)
    {
        $this->fundingSource = $fundingSource;
        return $this;
    }

    /**
     * Adds as reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImmunizationReactionType $reaction
     */
    public function addToReaction(\TKusy\Hl7Fhir\R5\ImmunizationReactionType $reaction)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * isset reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReaction($index)
    {
        return isset($this->reaction[$index]);
    }

    /**
     * unset reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReaction($index)
    {
        unset($this->reaction[$index]);
    }

    /**
     * Gets as reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @return \TKusy\Hl7Fhir\R5\ImmunizationReactionType[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Sets a new reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @param \TKusy\Hl7Fhir\R5\ImmunizationReactionType[] $reaction
     * @return self
     */
    public function setReaction(array $reaction = null)
    {
        $this->reaction = $reaction;
        return $this;
    }

    /**
     * Adds as protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImmunizationProtocolAppliedType $protocolApplied
     */
    public function addToProtocolApplied(\TKusy\Hl7Fhir\R5\ImmunizationProtocolAppliedType $protocolApplied)
    {
        $this->protocolApplied[] = $protocolApplied;
        return $this;
    }

    /**
     * isset protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProtocolApplied($index)
    {
        return isset($this->protocolApplied[$index]);
    }

    /**
     * unset protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProtocolApplied($index)
    {
        unset($this->protocolApplied[$index]);
    }

    /**
     * Gets as protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @return \TKusy\Hl7Fhir\R5\ImmunizationProtocolAppliedType[]
     */
    public function getProtocolApplied()
    {
        return $this->protocolApplied;
    }

    /**
     * Sets a new protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @param \TKusy\Hl7Fhir\R5\ImmunizationProtocolAppliedType[] $protocolApplied
     * @return self
     */
    public function setProtocolApplied(array $protocolApplied = null)
    {
        $this->protocolApplied = $protocolApplied;
        return $this;
    }


}

