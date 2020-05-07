<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ResourceContainerType
 *
 * 
 * XSD Type: ResourceContainer
 */
class ResourceContainerType
{

    /**
     * @var \TKusy\Hl7FhirR4\AccountType $account
     */
    private $account = null;

    /**
     * @var \TKusy\Hl7FhirR4\ActivityDefinitionType $activityDefinition
     */
    private $activityDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\AdverseEventType $adverseEvent
     */
    private $adverseEvent = null;

    /**
     * @var \TKusy\Hl7FhirR4\AllergyIntoleranceType $allergyIntolerance
     */
    private $allergyIntolerance = null;

    /**
     * @var \TKusy\Hl7FhirR4\AppointmentType $appointment
     */
    private $appointment = null;

    /**
     * @var \TKusy\Hl7FhirR4\AppointmentResponseType $appointmentResponse
     */
    private $appointmentResponse = null;

    /**
     * @var \TKusy\Hl7FhirR4\AuditEventType $auditEvent
     */
    private $auditEvent = null;

    /**
     * @var \TKusy\Hl7FhirR4\BasicType $basic
     */
    private $basic = null;

    /**
     * @var \TKusy\Hl7FhirR4\BinaryType $binary
     */
    private $binary = null;

    /**
     * @var \TKusy\Hl7FhirR4\BiologicallyDerivedProductType $biologicallyDerivedProduct
     */
    private $biologicallyDerivedProduct = null;

    /**
     * @var \TKusy\Hl7FhirR4\BodyStructureType $bodyStructure
     */
    private $bodyStructure = null;

    /**
     * @var \TKusy\Hl7FhirR4\BundleType $bundle
     */
    private $bundle = null;

    /**
     * @var \TKusy\Hl7FhirR4\CapabilityStatementType $capabilityStatement
     */
    private $capabilityStatement = null;

    /**
     * @var \TKusy\Hl7FhirR4\CarePlanType $carePlan
     */
    private $carePlan = null;

    /**
     * @var \TKusy\Hl7FhirR4\CareTeamType $careTeam
     */
    private $careTeam = null;

    /**
     * @var \TKusy\Hl7FhirR4\CatalogEntryType $catalogEntry
     */
    private $catalogEntry = null;

    /**
     * @var \TKusy\Hl7FhirR4\ChargeItemType $chargeItem
     */
    private $chargeItem = null;

    /**
     * @var \TKusy\Hl7FhirR4\ChargeItemDefinitionType $chargeItemDefinition
     */
    private $chargeItemDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\ClaimType $claim
     */
    private $claim = null;

    /**
     * @var \TKusy\Hl7FhirR4\ClaimResponseType $claimResponse
     */
    private $claimResponse = null;

    /**
     * @var \TKusy\Hl7FhirR4\ClinicalImpressionType $clinicalImpression
     */
    private $clinicalImpression = null;

    /**
     * @var \TKusy\Hl7FhirR4\CodeSystemType $codeSystem
     */
    private $codeSystem = null;

    /**
     * @var \TKusy\Hl7FhirR4\CommunicationType $communication
     */
    private $communication = null;

    /**
     * @var \TKusy\Hl7FhirR4\CommunicationRequestType $communicationRequest
     */
    private $communicationRequest = null;

    /**
     * @var \TKusy\Hl7FhirR4\CompartmentDefinitionType $compartmentDefinition
     */
    private $compartmentDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\CompositionType $composition
     */
    private $composition = null;

    /**
     * @var \TKusy\Hl7FhirR4\ConceptMapType $conceptMap
     */
    private $conceptMap = null;

    /**
     * @var \TKusy\Hl7FhirR4\ConditionType $condition
     */
    private $condition = null;

    /**
     * @var \TKusy\Hl7FhirR4\ConsentType $consent
     */
    private $consent = null;

    /**
     * @var \TKusy\Hl7FhirR4\ContractType $contract
     */
    private $contract = null;

    /**
     * @var \TKusy\Hl7FhirR4\CoverageType $coverage
     */
    private $coverage = null;

    /**
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityRequestType $coverageEligibilityRequest
     */
    private $coverageEligibilityRequest = null;

    /**
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityResponseType $coverageEligibilityResponse
     */
    private $coverageEligibilityResponse = null;

    /**
     * @var \TKusy\Hl7FhirR4\DetectedIssueType $detectedIssue
     */
    private $detectedIssue = null;

    /**
     * @var \TKusy\Hl7FhirR4\DeviceType $device
     */
    private $device = null;

    /**
     * @var \TKusy\Hl7FhirR4\DeviceDefinitionType $deviceDefinition
     */
    private $deviceDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\DeviceMetricType $deviceMetric
     */
    private $deviceMetric = null;

    /**
     * @var \TKusy\Hl7FhirR4\DeviceRequestType $deviceRequest
     */
    private $deviceRequest = null;

    /**
     * @var \TKusy\Hl7FhirR4\DeviceUseStatementType $deviceUseStatement
     */
    private $deviceUseStatement = null;

    /**
     * @var \TKusy\Hl7FhirR4\DiagnosticReportType $diagnosticReport
     */
    private $diagnosticReport = null;

    /**
     * @var \TKusy\Hl7FhirR4\DocumentManifestType $documentManifest
     */
    private $documentManifest = null;

    /**
     * @var \TKusy\Hl7FhirR4\DocumentReferenceType $documentReference
     */
    private $documentReference = null;

    /**
     * @var \TKusy\Hl7FhirR4\EffectEvidenceSynthesisType $effectEvidenceSynthesis
     */
    private $effectEvidenceSynthesis = null;

    /**
     * @var \TKusy\Hl7FhirR4\EncounterType $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7FhirR4\EndpointType $endpoint
     */
    private $endpoint = null;

    /**
     * @var \TKusy\Hl7FhirR4\EnrollmentRequestType $enrollmentRequest
     */
    private $enrollmentRequest = null;

    /**
     * @var \TKusy\Hl7FhirR4\EnrollmentResponseType $enrollmentResponse
     */
    private $enrollmentResponse = null;

    /**
     * @var \TKusy\Hl7FhirR4\EpisodeOfCareType $episodeOfCare
     */
    private $episodeOfCare = null;

    /**
     * @var \TKusy\Hl7FhirR4\EventDefinitionType $eventDefinition
     */
    private $eventDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\EvidenceType $evidence
     */
    private $evidence = null;

    /**
     * @var \TKusy\Hl7FhirR4\EvidenceVariableType $evidenceVariable
     */
    private $evidenceVariable = null;

    /**
     * @var \TKusy\Hl7FhirR4\ExampleScenarioType $exampleScenario
     */
    private $exampleScenario = null;

    /**
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitType $explanationOfBenefit
     */
    private $explanationOfBenefit = null;

    /**
     * @var \TKusy\Hl7FhirR4\FamilyMemberHistoryType $familyMemberHistory
     */
    private $familyMemberHistory = null;

    /**
     * @var \TKusy\Hl7FhirR4\FlagType $flag
     */
    private $flag = null;

    /**
     * @var \TKusy\Hl7FhirR4\GoalType $goal
     */
    private $goal = null;

    /**
     * @var \TKusy\Hl7FhirR4\GraphDefinitionType $graphDefinition
     */
    private $graphDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\GroupType $group
     */
    private $group = null;

    /**
     * @var \TKusy\Hl7FhirR4\GuidanceResponseType $guidanceResponse
     */
    private $guidanceResponse = null;

    /**
     * @var \TKusy\Hl7FhirR4\HealthcareServiceType $healthcareService
     */
    private $healthcareService = null;

    /**
     * @var \TKusy\Hl7FhirR4\ImagingStudyType $imagingStudy
     */
    private $imagingStudy = null;

    /**
     * @var \TKusy\Hl7FhirR4\ImmunizationType $immunization
     */
    private $immunization = null;

    /**
     * @var \TKusy\Hl7FhirR4\ImmunizationEvaluationType $immunizationEvaluation
     */
    private $immunizationEvaluation = null;

    /**
     * @var \TKusy\Hl7FhirR4\ImmunizationRecommendationType $immunizationRecommendation
     */
    private $immunizationRecommendation = null;

    /**
     * @var \TKusy\Hl7FhirR4\ImplementationGuideType $implementationGuide
     */
    private $implementationGuide = null;

    /**
     * @var \TKusy\Hl7FhirR4\InsurancePlanType $insurancePlan
     */
    private $insurancePlan = null;

    /**
     * @var \TKusy\Hl7FhirR4\InvoiceType $invoice
     */
    private $invoice = null;

    /**
     * @var \TKusy\Hl7FhirR4\LibraryType $library
     */
    private $library = null;

    /**
     * @var \TKusy\Hl7FhirR4\LinkageType $linkage
     */
    private $linkage = null;

    /**
     * @var \TKusy\Hl7FhirR4\ListType $list
     */
    private $list = null;

    /**
     * @var \TKusy\Hl7FhirR4\LocationType $location
     */
    private $location = null;

    /**
     * @var \TKusy\Hl7FhirR4\MeasureType $measure
     */
    private $measure = null;

    /**
     * @var \TKusy\Hl7FhirR4\MeasureReportType $measureReport
     */
    private $measureReport = null;

    /**
     * @var \TKusy\Hl7FhirR4\MediaType $media
     */
    private $media = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicationType $medication
     */
    private $medication = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicationAdministrationType $medicationAdministration
     */
    private $medicationAdministration = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicationDispenseType $medicationDispense
     */
    private $medicationDispense = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeType $medicationKnowledge
     */
    private $medicationKnowledge = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicationRequestType $medicationRequest
     */
    private $medicationRequest = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicationStatementType $medicationStatement
     */
    private $medicationStatement = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductType $medicinalProduct
     */
    private $medicinalProduct = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductAuthorizationType $medicinalProductAuthorization
     */
    private $medicinalProductAuthorization = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductContraindicationType $medicinalProductContraindication
     */
    private $medicinalProductContraindication = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductIndicationType $medicinalProductIndication
     */
    private $medicinalProductIndication = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductIngredientType $medicinalProductIngredient
     */
    private $medicinalProductIngredient = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductInteractionType $medicinalProductInteraction
     */
    private $medicinalProductInteraction = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductManufacturedType $medicinalProductManufactured
     */
    private $medicinalProductManufactured = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductPackagedType $medicinalProductPackaged
     */
    private $medicinalProductPackaged = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalType $medicinalProductPharmaceutical
     */
    private $medicinalProductPharmaceutical = null;

    /**
     * @var \TKusy\Hl7FhirR4\MedicinalProductUndesirableEffectType $medicinalProductUndesirableEffect
     */
    private $medicinalProductUndesirableEffect = null;

    /**
     * @var \TKusy\Hl7FhirR4\MessageDefinitionType $messageDefinition
     */
    private $messageDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * @var \TKusy\Hl7FhirR4\MolecularSequenceType $molecularSequence
     */
    private $molecularSequence = null;

    /**
     * @var \TKusy\Hl7FhirR4\NamingSystemType $namingSystem
     */
    private $namingSystem = null;

    /**
     * @var \TKusy\Hl7FhirR4\NutritionOrderType $nutritionOrder
     */
    private $nutritionOrder = null;

    /**
     * @var \TKusy\Hl7FhirR4\ObservationType $observation
     */
    private $observation = null;

    /**
     * @var \TKusy\Hl7FhirR4\ObservationDefinitionType $observationDefinition
     */
    private $observationDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\OperationDefinitionType $operationDefinition
     */
    private $operationDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\OperationOutcomeType $operationOutcome
     */
    private $operationOutcome = null;

    /**
     * @var \TKusy\Hl7FhirR4\OrganizationType $organization
     */
    private $organization = null;

    /**
     * @var \TKusy\Hl7FhirR4\OrganizationAffiliationType $organizationAffiliation
     */
    private $organizationAffiliation = null;

    /**
     * @var \TKusy\Hl7FhirR4\PatientType $patient
     */
    private $patient = null;

    /**
     * @var \TKusy\Hl7FhirR4\PaymentNoticeType $paymentNotice
     */
    private $paymentNotice = null;

    /**
     * @var \TKusy\Hl7FhirR4\PaymentReconciliationType $paymentReconciliation
     */
    private $paymentReconciliation = null;

    /**
     * @var \TKusy\Hl7FhirR4\PersonType $person
     */
    private $person = null;

    /**
     * @var \TKusy\Hl7FhirR4\PlanDefinitionType $planDefinition
     */
    private $planDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\PractitionerType $practitioner
     */
    private $practitioner = null;

    /**
     * @var \TKusy\Hl7FhirR4\PractitionerRoleType $practitionerRole
     */
    private $practitionerRole = null;

    /**
     * @var \TKusy\Hl7FhirR4\ProcedureType $procedure
     */
    private $procedure = null;

    /**
     * @var \TKusy\Hl7FhirR4\ProvenanceType $provenance
     */
    private $provenance = null;

    /**
     * @var \TKusy\Hl7FhirR4\QuestionnaireType $questionnaire
     */
    private $questionnaire = null;

    /**
     * @var \TKusy\Hl7FhirR4\QuestionnaireResponseType $questionnaireResponse
     */
    private $questionnaireResponse = null;

    /**
     * @var \TKusy\Hl7FhirR4\RelatedPersonType $relatedPerson
     */
    private $relatedPerson = null;

    /**
     * @var \TKusy\Hl7FhirR4\RequestGroupType $requestGroup
     */
    private $requestGroup = null;

    /**
     * @var \TKusy\Hl7FhirR4\ResearchDefinitionType $researchDefinition
     */
    private $researchDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\ResearchElementDefinitionType $researchElementDefinition
     */
    private $researchElementDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\ResearchStudyType $researchStudy
     */
    private $researchStudy = null;

    /**
     * @var \TKusy\Hl7FhirR4\ResearchSubjectType $researchSubject
     */
    private $researchSubject = null;

    /**
     * @var \TKusy\Hl7FhirR4\RiskAssessmentType $riskAssessment
     */
    private $riskAssessment = null;

    /**
     * @var \TKusy\Hl7FhirR4\RiskEvidenceSynthesisType $riskEvidenceSynthesis
     */
    private $riskEvidenceSynthesis = null;

    /**
     * @var \TKusy\Hl7FhirR4\ScheduleType $schedule
     */
    private $schedule = null;

    /**
     * @var \TKusy\Hl7FhirR4\SearchParameterType $searchParameter
     */
    private $searchParameter = null;

    /**
     * @var \TKusy\Hl7FhirR4\ServiceRequestType $serviceRequest
     */
    private $serviceRequest = null;

    /**
     * @var \TKusy\Hl7FhirR4\SlotType $slot
     */
    private $slot = null;

    /**
     * @var \TKusy\Hl7FhirR4\SpecimenType $specimen
     */
    private $specimen = null;

    /**
     * @var \TKusy\Hl7FhirR4\SpecimenDefinitionType $specimenDefinition
     */
    private $specimenDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\StructureDefinitionType $structureDefinition
     */
    private $structureDefinition = null;

    /**
     * @var \TKusy\Hl7FhirR4\StructureMapType $structureMap
     */
    private $structureMap = null;

    /**
     * @var \TKusy\Hl7FhirR4\SubscriptionType $subscription
     */
    private $subscription = null;

    /**
     * @var \TKusy\Hl7FhirR4\SubstanceType $substance
     */
    private $substance = null;

    /**
     * @var \TKusy\Hl7FhirR4\SubstanceNucleicAcidType $substanceNucleicAcid
     */
    private $substanceNucleicAcid = null;

    /**
     * @var \TKusy\Hl7FhirR4\SubstancePolymerType $substancePolymer
     */
    private $substancePolymer = null;

    /**
     * @var \TKusy\Hl7FhirR4\SubstanceProteinType $substanceProtein
     */
    private $substanceProtein = null;

    /**
     * @var \TKusy\Hl7FhirR4\SubstanceReferenceInformationType $substanceReferenceInformation
     */
    private $substanceReferenceInformation = null;

    /**
     * @var \TKusy\Hl7FhirR4\SubstanceSourceMaterialType $substanceSourceMaterial
     */
    private $substanceSourceMaterial = null;

    /**
     * @var \TKusy\Hl7FhirR4\SubstanceSpecificationType $substanceSpecification
     */
    private $substanceSpecification = null;

    /**
     * @var \TKusy\Hl7FhirR4\SupplyDeliveryType $supplyDelivery
     */
    private $supplyDelivery = null;

    /**
     * @var \TKusy\Hl7FhirR4\SupplyRequestType $supplyRequest
     */
    private $supplyRequest = null;

    /**
     * @var \TKusy\Hl7FhirR4\TaskType $task
     */
    private $task = null;

    /**
     * @var \TKusy\Hl7FhirR4\TerminologyCapabilitiesType $terminologyCapabilities
     */
    private $terminologyCapabilities = null;

    /**
     * @var \TKusy\Hl7FhirR4\TestReportType $testReport
     */
    private $testReport = null;

    /**
     * @var \TKusy\Hl7FhirR4\TestScriptType $testScript
     */
    private $testScript = null;

    /**
     * @var \TKusy\Hl7FhirR4\ValueSetType $valueSet
     */
    private $valueSet = null;

    /**
     * @var \TKusy\Hl7FhirR4\VerificationResultType $verificationResult
     */
    private $verificationResult = null;

    /**
     * @var \TKusy\Hl7FhirR4\VisionPrescriptionType $visionPrescription
     */
    private $visionPrescription = null;

    /**
     * @var \TKusy\Hl7FhirR4\ParametersType $parameters
     */
    private $parameters = null;

    /**
     * Gets as account
     *
     * @return \TKusy\Hl7FhirR4\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \TKusy\Hl7FhirR4\AccountType $account
     * @return self
     */
    public function setAccount(\TKusy\Hl7FhirR4\AccountType $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as activityDefinition
     *
     * @return \TKusy\Hl7FhirR4\ActivityDefinitionType
     */
    public function getActivityDefinition()
    {
        return $this->activityDefinition;
    }

    /**
     * Sets a new activityDefinition
     *
     * @param \TKusy\Hl7FhirR4\ActivityDefinitionType $activityDefinition
     * @return self
     */
    public function setActivityDefinition(\TKusy\Hl7FhirR4\ActivityDefinitionType $activityDefinition)
    {
        $this->activityDefinition = $activityDefinition;
        return $this;
    }

    /**
     * Gets as adverseEvent
     *
     * @return \TKusy\Hl7FhirR4\AdverseEventType
     */
    public function getAdverseEvent()
    {
        return $this->adverseEvent;
    }

    /**
     * Sets a new adverseEvent
     *
     * @param \TKusy\Hl7FhirR4\AdverseEventType $adverseEvent
     * @return self
     */
    public function setAdverseEvent(\TKusy\Hl7FhirR4\AdverseEventType $adverseEvent)
    {
        $this->adverseEvent = $adverseEvent;
        return $this;
    }

    /**
     * Gets as allergyIntolerance
     *
     * @return \TKusy\Hl7FhirR4\AllergyIntoleranceType
     */
    public function getAllergyIntolerance()
    {
        return $this->allergyIntolerance;
    }

    /**
     * Sets a new allergyIntolerance
     *
     * @param \TKusy\Hl7FhirR4\AllergyIntoleranceType $allergyIntolerance
     * @return self
     */
    public function setAllergyIntolerance(\TKusy\Hl7FhirR4\AllergyIntoleranceType $allergyIntolerance)
    {
        $this->allergyIntolerance = $allergyIntolerance;
        return $this;
    }

    /**
     * Gets as appointment
     *
     * @return \TKusy\Hl7FhirR4\AppointmentType
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * Sets a new appointment
     *
     * @param \TKusy\Hl7FhirR4\AppointmentType $appointment
     * @return self
     */
    public function setAppointment(\TKusy\Hl7FhirR4\AppointmentType $appointment)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * Gets as appointmentResponse
     *
     * @return \TKusy\Hl7FhirR4\AppointmentResponseType
     */
    public function getAppointmentResponse()
    {
        return $this->appointmentResponse;
    }

    /**
     * Sets a new appointmentResponse
     *
     * @param \TKusy\Hl7FhirR4\AppointmentResponseType $appointmentResponse
     * @return self
     */
    public function setAppointmentResponse(\TKusy\Hl7FhirR4\AppointmentResponseType $appointmentResponse)
    {
        $this->appointmentResponse = $appointmentResponse;
        return $this;
    }

    /**
     * Gets as auditEvent
     *
     * @return \TKusy\Hl7FhirR4\AuditEventType
     */
    public function getAuditEvent()
    {
        return $this->auditEvent;
    }

    /**
     * Sets a new auditEvent
     *
     * @param \TKusy\Hl7FhirR4\AuditEventType $auditEvent
     * @return self
     */
    public function setAuditEvent(\TKusy\Hl7FhirR4\AuditEventType $auditEvent)
    {
        $this->auditEvent = $auditEvent;
        return $this;
    }

    /**
     * Gets as basic
     *
     * @return \TKusy\Hl7FhirR4\BasicType
     */
    public function getBasic()
    {
        return $this->basic;
    }

    /**
     * Sets a new basic
     *
     * @param \TKusy\Hl7FhirR4\BasicType $basic
     * @return self
     */
    public function setBasic(\TKusy\Hl7FhirR4\BasicType $basic)
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Gets as binary
     *
     * @return \TKusy\Hl7FhirR4\BinaryType
     */
    public function getBinary()
    {
        return $this->binary;
    }

    /**
     * Sets a new binary
     *
     * @param \TKusy\Hl7FhirR4\BinaryType $binary
     * @return self
     */
    public function setBinary(\TKusy\Hl7FhirR4\BinaryType $binary)
    {
        $this->binary = $binary;
        return $this;
    }

    /**
     * Gets as biologicallyDerivedProduct
     *
     * @return \TKusy\Hl7FhirR4\BiologicallyDerivedProductType
     */
    public function getBiologicallyDerivedProduct()
    {
        return $this->biologicallyDerivedProduct;
    }

    /**
     * Sets a new biologicallyDerivedProduct
     *
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductType $biologicallyDerivedProduct
     * @return self
     */
    public function setBiologicallyDerivedProduct(\TKusy\Hl7FhirR4\BiologicallyDerivedProductType $biologicallyDerivedProduct)
    {
        $this->biologicallyDerivedProduct = $biologicallyDerivedProduct;
        return $this;
    }

    /**
     * Gets as bodyStructure
     *
     * @return \TKusy\Hl7FhirR4\BodyStructureType
     */
    public function getBodyStructure()
    {
        return $this->bodyStructure;
    }

    /**
     * Sets a new bodyStructure
     *
     * @param \TKusy\Hl7FhirR4\BodyStructureType $bodyStructure
     * @return self
     */
    public function setBodyStructure(\TKusy\Hl7FhirR4\BodyStructureType $bodyStructure)
    {
        $this->bodyStructure = $bodyStructure;
        return $this;
    }

    /**
     * Gets as bundle
     *
     * @return \TKusy\Hl7FhirR4\BundleType
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * Sets a new bundle
     *
     * @param \TKusy\Hl7FhirR4\BundleType $bundle
     * @return self
     */
    public function setBundle(\TKusy\Hl7FhirR4\BundleType $bundle)
    {
        $this->bundle = $bundle;
        return $this;
    }

    /**
     * Gets as capabilityStatement
     *
     * @return \TKusy\Hl7FhirR4\CapabilityStatementType
     */
    public function getCapabilityStatement()
    {
        return $this->capabilityStatement;
    }

    /**
     * Sets a new capabilityStatement
     *
     * @param \TKusy\Hl7FhirR4\CapabilityStatementType $capabilityStatement
     * @return self
     */
    public function setCapabilityStatement(\TKusy\Hl7FhirR4\CapabilityStatementType $capabilityStatement)
    {
        $this->capabilityStatement = $capabilityStatement;
        return $this;
    }

    /**
     * Gets as carePlan
     *
     * @return \TKusy\Hl7FhirR4\CarePlanType
     */
    public function getCarePlan()
    {
        return $this->carePlan;
    }

    /**
     * Sets a new carePlan
     *
     * @param \TKusy\Hl7FhirR4\CarePlanType $carePlan
     * @return self
     */
    public function setCarePlan(\TKusy\Hl7FhirR4\CarePlanType $carePlan)
    {
        $this->carePlan = $carePlan;
        return $this;
    }

    /**
     * Gets as careTeam
     *
     * @return \TKusy\Hl7FhirR4\CareTeamType
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * Sets a new careTeam
     *
     * @param \TKusy\Hl7FhirR4\CareTeamType $careTeam
     * @return self
     */
    public function setCareTeam(\TKusy\Hl7FhirR4\CareTeamType $careTeam)
    {
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * Gets as catalogEntry
     *
     * @return \TKusy\Hl7FhirR4\CatalogEntryType
     */
    public function getCatalogEntry()
    {
        return $this->catalogEntry;
    }

    /**
     * Sets a new catalogEntry
     *
     * @param \TKusy\Hl7FhirR4\CatalogEntryType $catalogEntry
     * @return self
     */
    public function setCatalogEntry(\TKusy\Hl7FhirR4\CatalogEntryType $catalogEntry)
    {
        $this->catalogEntry = $catalogEntry;
        return $this;
    }

    /**
     * Gets as chargeItem
     *
     * @return \TKusy\Hl7FhirR4\ChargeItemType
     */
    public function getChargeItem()
    {
        return $this->chargeItem;
    }

    /**
     * Sets a new chargeItem
     *
     * @param \TKusy\Hl7FhirR4\ChargeItemType $chargeItem
     * @return self
     */
    public function setChargeItem(\TKusy\Hl7FhirR4\ChargeItemType $chargeItem)
    {
        $this->chargeItem = $chargeItem;
        return $this;
    }

    /**
     * Gets as chargeItemDefinition
     *
     * @return \TKusy\Hl7FhirR4\ChargeItemDefinitionType
     */
    public function getChargeItemDefinition()
    {
        return $this->chargeItemDefinition;
    }

    /**
     * Sets a new chargeItemDefinition
     *
     * @param \TKusy\Hl7FhirR4\ChargeItemDefinitionType $chargeItemDefinition
     * @return self
     */
    public function setChargeItemDefinition(\TKusy\Hl7FhirR4\ChargeItemDefinitionType $chargeItemDefinition)
    {
        $this->chargeItemDefinition = $chargeItemDefinition;
        return $this;
    }

    /**
     * Gets as claim
     *
     * @return \TKusy\Hl7FhirR4\ClaimType
     */
    public function getClaim()
    {
        return $this->claim;
    }

    /**
     * Sets a new claim
     *
     * @param \TKusy\Hl7FhirR4\ClaimType $claim
     * @return self
     */
    public function setClaim(\TKusy\Hl7FhirR4\ClaimType $claim)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * Gets as claimResponse
     *
     * @return \TKusy\Hl7FhirR4\ClaimResponseType
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * Sets a new claimResponse
     *
     * @param \TKusy\Hl7FhirR4\ClaimResponseType $claimResponse
     * @return self
     */
    public function setClaimResponse(\TKusy\Hl7FhirR4\ClaimResponseType $claimResponse)
    {
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * Gets as clinicalImpression
     *
     * @return \TKusy\Hl7FhirR4\ClinicalImpressionType
     */
    public function getClinicalImpression()
    {
        return $this->clinicalImpression;
    }

    /**
     * Sets a new clinicalImpression
     *
     * @param \TKusy\Hl7FhirR4\ClinicalImpressionType $clinicalImpression
     * @return self
     */
    public function setClinicalImpression(\TKusy\Hl7FhirR4\ClinicalImpressionType $clinicalImpression)
    {
        $this->clinicalImpression = $clinicalImpression;
        return $this;
    }

    /**
     * Gets as codeSystem
     *
     * @return \TKusy\Hl7FhirR4\CodeSystemType
     */
    public function getCodeSystem()
    {
        return $this->codeSystem;
    }

    /**
     * Sets a new codeSystem
     *
     * @param \TKusy\Hl7FhirR4\CodeSystemType $codeSystem
     * @return self
     */
    public function setCodeSystem(\TKusy\Hl7FhirR4\CodeSystemType $codeSystem)
    {
        $this->codeSystem = $codeSystem;
        return $this;
    }

    /**
     * Gets as communication
     *
     * @return \TKusy\Hl7FhirR4\CommunicationType
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * @param \TKusy\Hl7FhirR4\CommunicationType $communication
     * @return self
     */
    public function setCommunication(\TKusy\Hl7FhirR4\CommunicationType $communication)
    {
        $this->communication = $communication;
        return $this;
    }

    /**
     * Gets as communicationRequest
     *
     * @return \TKusy\Hl7FhirR4\CommunicationRequestType
     */
    public function getCommunicationRequest()
    {
        return $this->communicationRequest;
    }

    /**
     * Sets a new communicationRequest
     *
     * @param \TKusy\Hl7FhirR4\CommunicationRequestType $communicationRequest
     * @return self
     */
    public function setCommunicationRequest(\TKusy\Hl7FhirR4\CommunicationRequestType $communicationRequest)
    {
        $this->communicationRequest = $communicationRequest;
        return $this;
    }

    /**
     * Gets as compartmentDefinition
     *
     * @return \TKusy\Hl7FhirR4\CompartmentDefinitionType
     */
    public function getCompartmentDefinition()
    {
        return $this->compartmentDefinition;
    }

    /**
     * Sets a new compartmentDefinition
     *
     * @param \TKusy\Hl7FhirR4\CompartmentDefinitionType $compartmentDefinition
     * @return self
     */
    public function setCompartmentDefinition(\TKusy\Hl7FhirR4\CompartmentDefinitionType $compartmentDefinition)
    {
        $this->compartmentDefinition = $compartmentDefinition;
        return $this;
    }

    /**
     * Gets as composition
     *
     * @return \TKusy\Hl7FhirR4\CompositionType
     */
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * Sets a new composition
     *
     * @param \TKusy\Hl7FhirR4\CompositionType $composition
     * @return self
     */
    public function setComposition(\TKusy\Hl7FhirR4\CompositionType $composition)
    {
        $this->composition = $composition;
        return $this;
    }

    /**
     * Gets as conceptMap
     *
     * @return \TKusy\Hl7FhirR4\ConceptMapType
     */
    public function getConceptMap()
    {
        return $this->conceptMap;
    }

    /**
     * Sets a new conceptMap
     *
     * @param \TKusy\Hl7FhirR4\ConceptMapType $conceptMap
     * @return self
     */
    public function setConceptMap(\TKusy\Hl7FhirR4\ConceptMapType $conceptMap)
    {
        $this->conceptMap = $conceptMap;
        return $this;
    }

    /**
     * Gets as condition
     *
     * @return \TKusy\Hl7FhirR4\ConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \TKusy\Hl7FhirR4\ConditionType $condition
     * @return self
     */
    public function setCondition(\TKusy\Hl7FhirR4\ConditionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as consent
     *
     * @return \TKusy\Hl7FhirR4\ConsentType
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * Sets a new consent
     *
     * @param \TKusy\Hl7FhirR4\ConsentType $consent
     * @return self
     */
    public function setConsent(\TKusy\Hl7FhirR4\ConsentType $consent)
    {
        $this->consent = $consent;
        return $this;
    }

    /**
     * Gets as contract
     *
     * @return \TKusy\Hl7FhirR4\ContractType
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * @param \TKusy\Hl7FhirR4\ContractType $contract
     * @return self
     */
    public function setContract(\TKusy\Hl7FhirR4\ContractType $contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as coverage
     *
     * @return \TKusy\Hl7FhirR4\CoverageType
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * @param \TKusy\Hl7FhirR4\CoverageType $coverage
     * @return self
     */
    public function setCoverage(\TKusy\Hl7FhirR4\CoverageType $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as coverageEligibilityRequest
     *
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityRequestType
     */
    public function getCoverageEligibilityRequest()
    {
        return $this->coverageEligibilityRequest;
    }

    /**
     * Sets a new coverageEligibilityRequest
     *
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestType $coverageEligibilityRequest
     * @return self
     */
    public function setCoverageEligibilityRequest(\TKusy\Hl7FhirR4\CoverageEligibilityRequestType $coverageEligibilityRequest)
    {
        $this->coverageEligibilityRequest = $coverageEligibilityRequest;
        return $this;
    }

    /**
     * Gets as coverageEligibilityResponse
     *
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityResponseType
     */
    public function getCoverageEligibilityResponse()
    {
        return $this->coverageEligibilityResponse;
    }

    /**
     * Sets a new coverageEligibilityResponse
     *
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityResponseType $coverageEligibilityResponse
     * @return self
     */
    public function setCoverageEligibilityResponse(\TKusy\Hl7FhirR4\CoverageEligibilityResponseType $coverageEligibilityResponse)
    {
        $this->coverageEligibilityResponse = $coverageEligibilityResponse;
        return $this;
    }

    /**
     * Gets as detectedIssue
     *
     * @return \TKusy\Hl7FhirR4\DetectedIssueType
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }

    /**
     * Sets a new detectedIssue
     *
     * @param \TKusy\Hl7FhirR4\DetectedIssueType $detectedIssue
     * @return self
     */
    public function setDetectedIssue(\TKusy\Hl7FhirR4\DetectedIssueType $detectedIssue)
    {
        $this->detectedIssue = $detectedIssue;
        return $this;
    }

    /**
     * Gets as device
     *
     * @return \TKusy\Hl7FhirR4\DeviceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * @param \TKusy\Hl7FhirR4\DeviceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7FhirR4\DeviceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as deviceDefinition
     *
     * @return \TKusy\Hl7FhirR4\DeviceDefinitionType
     */
    public function getDeviceDefinition()
    {
        return $this->deviceDefinition;
    }

    /**
     * Sets a new deviceDefinition
     *
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionType $deviceDefinition
     * @return self
     */
    public function setDeviceDefinition(\TKusy\Hl7FhirR4\DeviceDefinitionType $deviceDefinition)
    {
        $this->deviceDefinition = $deviceDefinition;
        return $this;
    }

    /**
     * Gets as deviceMetric
     *
     * @return \TKusy\Hl7FhirR4\DeviceMetricType
     */
    public function getDeviceMetric()
    {
        return $this->deviceMetric;
    }

    /**
     * Sets a new deviceMetric
     *
     * @param \TKusy\Hl7FhirR4\DeviceMetricType $deviceMetric
     * @return self
     */
    public function setDeviceMetric(\TKusy\Hl7FhirR4\DeviceMetricType $deviceMetric)
    {
        $this->deviceMetric = $deviceMetric;
        return $this;
    }

    /**
     * Gets as deviceRequest
     *
     * @return \TKusy\Hl7FhirR4\DeviceRequestType
     */
    public function getDeviceRequest()
    {
        return $this->deviceRequest;
    }

    /**
     * Sets a new deviceRequest
     *
     * @param \TKusy\Hl7FhirR4\DeviceRequestType $deviceRequest
     * @return self
     */
    public function setDeviceRequest(\TKusy\Hl7FhirR4\DeviceRequestType $deviceRequest)
    {
        $this->deviceRequest = $deviceRequest;
        return $this;
    }

    /**
     * Gets as deviceUseStatement
     *
     * @return \TKusy\Hl7FhirR4\DeviceUseStatementType
     */
    public function getDeviceUseStatement()
    {
        return $this->deviceUseStatement;
    }

    /**
     * Sets a new deviceUseStatement
     *
     * @param \TKusy\Hl7FhirR4\DeviceUseStatementType $deviceUseStatement
     * @return self
     */
    public function setDeviceUseStatement(\TKusy\Hl7FhirR4\DeviceUseStatementType $deviceUseStatement)
    {
        $this->deviceUseStatement = $deviceUseStatement;
        return $this;
    }

    /**
     * Gets as diagnosticReport
     *
     * @return \TKusy\Hl7FhirR4\DiagnosticReportType
     */
    public function getDiagnosticReport()
    {
        return $this->diagnosticReport;
    }

    /**
     * Sets a new diagnosticReport
     *
     * @param \TKusy\Hl7FhirR4\DiagnosticReportType $diagnosticReport
     * @return self
     */
    public function setDiagnosticReport(\TKusy\Hl7FhirR4\DiagnosticReportType $diagnosticReport)
    {
        $this->diagnosticReport = $diagnosticReport;
        return $this;
    }

    /**
     * Gets as documentManifest
     *
     * @return \TKusy\Hl7FhirR4\DocumentManifestType
     */
    public function getDocumentManifest()
    {
        return $this->documentManifest;
    }

    /**
     * Sets a new documentManifest
     *
     * @param \TKusy\Hl7FhirR4\DocumentManifestType $documentManifest
     * @return self
     */
    public function setDocumentManifest(\TKusy\Hl7FhirR4\DocumentManifestType $documentManifest)
    {
        $this->documentManifest = $documentManifest;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * @return \TKusy\Hl7FhirR4\DocumentReferenceType
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \TKusy\Hl7FhirR4\DocumentReferenceType $documentReference
     * @return self
     */
    public function setDocumentReference(\TKusy\Hl7FhirR4\DocumentReferenceType $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as effectEvidenceSynthesis
     *
     * @return \TKusy\Hl7FhirR4\EffectEvidenceSynthesisType
     */
    public function getEffectEvidenceSynthesis()
    {
        return $this->effectEvidenceSynthesis;
    }

    /**
     * Sets a new effectEvidenceSynthesis
     *
     * @param \TKusy\Hl7FhirR4\EffectEvidenceSynthesisType $effectEvidenceSynthesis
     * @return self
     */
    public function setEffectEvidenceSynthesis(\TKusy\Hl7FhirR4\EffectEvidenceSynthesisType $effectEvidenceSynthesis)
    {
        $this->effectEvidenceSynthesis = $effectEvidenceSynthesis;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * @return \TKusy\Hl7FhirR4\EncounterType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * @param \TKusy\Hl7FhirR4\EncounterType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7FhirR4\EncounterType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as endpoint
     *
     * @return \TKusy\Hl7FhirR4\EndpointType
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * @param \TKusy\Hl7FhirR4\EndpointType $endpoint
     * @return self
     */
    public function setEndpoint(\TKusy\Hl7FhirR4\EndpointType $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Gets as enrollmentRequest
     *
     * @return \TKusy\Hl7FhirR4\EnrollmentRequestType
     */
    public function getEnrollmentRequest()
    {
        return $this->enrollmentRequest;
    }

    /**
     * Sets a new enrollmentRequest
     *
     * @param \TKusy\Hl7FhirR4\EnrollmentRequestType $enrollmentRequest
     * @return self
     */
    public function setEnrollmentRequest(\TKusy\Hl7FhirR4\EnrollmentRequestType $enrollmentRequest)
    {
        $this->enrollmentRequest = $enrollmentRequest;
        return $this;
    }

    /**
     * Gets as enrollmentResponse
     *
     * @return \TKusy\Hl7FhirR4\EnrollmentResponseType
     */
    public function getEnrollmentResponse()
    {
        return $this->enrollmentResponse;
    }

    /**
     * Sets a new enrollmentResponse
     *
     * @param \TKusy\Hl7FhirR4\EnrollmentResponseType $enrollmentResponse
     * @return self
     */
    public function setEnrollmentResponse(\TKusy\Hl7FhirR4\EnrollmentResponseType $enrollmentResponse)
    {
        $this->enrollmentResponse = $enrollmentResponse;
        return $this;
    }

    /**
     * Gets as episodeOfCare
     *
     * @return \TKusy\Hl7FhirR4\EpisodeOfCareType
     */
    public function getEpisodeOfCare()
    {
        return $this->episodeOfCare;
    }

    /**
     * Sets a new episodeOfCare
     *
     * @param \TKusy\Hl7FhirR4\EpisodeOfCareType $episodeOfCare
     * @return self
     */
    public function setEpisodeOfCare(\TKusy\Hl7FhirR4\EpisodeOfCareType $episodeOfCare)
    {
        $this->episodeOfCare = $episodeOfCare;
        return $this;
    }

    /**
     * Gets as eventDefinition
     *
     * @return \TKusy\Hl7FhirR4\EventDefinitionType
     */
    public function getEventDefinition()
    {
        return $this->eventDefinition;
    }

    /**
     * Sets a new eventDefinition
     *
     * @param \TKusy\Hl7FhirR4\EventDefinitionType $eventDefinition
     * @return self
     */
    public function setEventDefinition(\TKusy\Hl7FhirR4\EventDefinitionType $eventDefinition)
    {
        $this->eventDefinition = $eventDefinition;
        return $this;
    }

    /**
     * Gets as evidence
     *
     * @return \TKusy\Hl7FhirR4\EvidenceType
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Sets a new evidence
     *
     * @param \TKusy\Hl7FhirR4\EvidenceType $evidence
     * @return self
     */
    public function setEvidence(\TKusy\Hl7FhirR4\EvidenceType $evidence)
    {
        $this->evidence = $evidence;
        return $this;
    }

    /**
     * Gets as evidenceVariable
     *
     * @return \TKusy\Hl7FhirR4\EvidenceVariableType
     */
    public function getEvidenceVariable()
    {
        return $this->evidenceVariable;
    }

    /**
     * Sets a new evidenceVariable
     *
     * @param \TKusy\Hl7FhirR4\EvidenceVariableType $evidenceVariable
     * @return self
     */
    public function setEvidenceVariable(\TKusy\Hl7FhirR4\EvidenceVariableType $evidenceVariable)
    {
        $this->evidenceVariable = $evidenceVariable;
        return $this;
    }

    /**
     * Gets as exampleScenario
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioType
     */
    public function getExampleScenario()
    {
        return $this->exampleScenario;
    }

    /**
     * Sets a new exampleScenario
     *
     * @param \TKusy\Hl7FhirR4\ExampleScenarioType $exampleScenario
     * @return self
     */
    public function setExampleScenario(\TKusy\Hl7FhirR4\ExampleScenarioType $exampleScenario)
    {
        $this->exampleScenario = $exampleScenario;
        return $this;
    }

    /**
     * Gets as explanationOfBenefit
     *
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitType
     */
    public function getExplanationOfBenefit()
    {
        return $this->explanationOfBenefit;
    }

    /**
     * Sets a new explanationOfBenefit
     *
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitType $explanationOfBenefit
     * @return self
     */
    public function setExplanationOfBenefit(\TKusy\Hl7FhirR4\ExplanationOfBenefitType $explanationOfBenefit)
    {
        $this->explanationOfBenefit = $explanationOfBenefit;
        return $this;
    }

    /**
     * Gets as familyMemberHistory
     *
     * @return \TKusy\Hl7FhirR4\FamilyMemberHistoryType
     */
    public function getFamilyMemberHistory()
    {
        return $this->familyMemberHistory;
    }

    /**
     * Sets a new familyMemberHistory
     *
     * @param \TKusy\Hl7FhirR4\FamilyMemberHistoryType $familyMemberHistory
     * @return self
     */
    public function setFamilyMemberHistory(\TKusy\Hl7FhirR4\FamilyMemberHistoryType $familyMemberHistory)
    {
        $this->familyMemberHistory = $familyMemberHistory;
        return $this;
    }

    /**
     * Gets as flag
     *
     * @return \TKusy\Hl7FhirR4\FlagType
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Sets a new flag
     *
     * @param \TKusy\Hl7FhirR4\FlagType $flag
     * @return self
     */
    public function setFlag(\TKusy\Hl7FhirR4\FlagType $flag)
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Gets as goal
     *
     * @return \TKusy\Hl7FhirR4\GoalType
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Sets a new goal
     *
     * @param \TKusy\Hl7FhirR4\GoalType $goal
     * @return self
     */
    public function setGoal(\TKusy\Hl7FhirR4\GoalType $goal)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * Gets as graphDefinition
     *
     * @return \TKusy\Hl7FhirR4\GraphDefinitionType
     */
    public function getGraphDefinition()
    {
        return $this->graphDefinition;
    }

    /**
     * Sets a new graphDefinition
     *
     * @param \TKusy\Hl7FhirR4\GraphDefinitionType $graphDefinition
     * @return self
     */
    public function setGraphDefinition(\TKusy\Hl7FhirR4\GraphDefinitionType $graphDefinition)
    {
        $this->graphDefinition = $graphDefinition;
        return $this;
    }

    /**
     * Gets as group
     *
     * @return \TKusy\Hl7FhirR4\GroupType
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * @param \TKusy\Hl7FhirR4\GroupType $group
     * @return self
     */
    public function setGroup(\TKusy\Hl7FhirR4\GroupType $group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Gets as guidanceResponse
     *
     * @return \TKusy\Hl7FhirR4\GuidanceResponseType
     */
    public function getGuidanceResponse()
    {
        return $this->guidanceResponse;
    }

    /**
     * Sets a new guidanceResponse
     *
     * @param \TKusy\Hl7FhirR4\GuidanceResponseType $guidanceResponse
     * @return self
     */
    public function setGuidanceResponse(\TKusy\Hl7FhirR4\GuidanceResponseType $guidanceResponse)
    {
        $this->guidanceResponse = $guidanceResponse;
        return $this;
    }

    /**
     * Gets as healthcareService
     *
     * @return \TKusy\Hl7FhirR4\HealthcareServiceType
     */
    public function getHealthcareService()
    {
        return $this->healthcareService;
    }

    /**
     * Sets a new healthcareService
     *
     * @param \TKusy\Hl7FhirR4\HealthcareServiceType $healthcareService
     * @return self
     */
    public function setHealthcareService(\TKusy\Hl7FhirR4\HealthcareServiceType $healthcareService)
    {
        $this->healthcareService = $healthcareService;
        return $this;
    }

    /**
     * Gets as imagingStudy
     *
     * @return \TKusy\Hl7FhirR4\ImagingStudyType
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * Sets a new imagingStudy
     *
     * @param \TKusy\Hl7FhirR4\ImagingStudyType $imagingStudy
     * @return self
     */
    public function setImagingStudy(\TKusy\Hl7FhirR4\ImagingStudyType $imagingStudy)
    {
        $this->imagingStudy = $imagingStudy;
        return $this;
    }

    /**
     * Gets as immunization
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationType
     */
    public function getImmunization()
    {
        return $this->immunization;
    }

    /**
     * Sets a new immunization
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationType $immunization
     * @return self
     */
    public function setImmunization(\TKusy\Hl7FhirR4\ImmunizationType $immunization)
    {
        $this->immunization = $immunization;
        return $this;
    }

    /**
     * Gets as immunizationEvaluation
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationEvaluationType
     */
    public function getImmunizationEvaluation()
    {
        return $this->immunizationEvaluation;
    }

    /**
     * Sets a new immunizationEvaluation
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationEvaluationType $immunizationEvaluation
     * @return self
     */
    public function setImmunizationEvaluation(\TKusy\Hl7FhirR4\ImmunizationEvaluationType $immunizationEvaluation)
    {
        $this->immunizationEvaluation = $immunizationEvaluation;
        return $this;
    }

    /**
     * Gets as immunizationRecommendation
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationRecommendationType
     */
    public function getImmunizationRecommendation()
    {
        return $this->immunizationRecommendation;
    }

    /**
     * Sets a new immunizationRecommendation
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationRecommendationType $immunizationRecommendation
     * @return self
     */
    public function setImmunizationRecommendation(\TKusy\Hl7FhirR4\ImmunizationRecommendationType $immunizationRecommendation)
    {
        $this->immunizationRecommendation = $immunizationRecommendation;
        return $this;
    }

    /**
     * Gets as implementationGuide
     *
     * @return \TKusy\Hl7FhirR4\ImplementationGuideType
     */
    public function getImplementationGuide()
    {
        return $this->implementationGuide;
    }

    /**
     * Sets a new implementationGuide
     *
     * @param \TKusy\Hl7FhirR4\ImplementationGuideType $implementationGuide
     * @return self
     */
    public function setImplementationGuide(\TKusy\Hl7FhirR4\ImplementationGuideType $implementationGuide)
    {
        $this->implementationGuide = $implementationGuide;
        return $this;
    }

    /**
     * Gets as insurancePlan
     *
     * @return \TKusy\Hl7FhirR4\InsurancePlanType
     */
    public function getInsurancePlan()
    {
        return $this->insurancePlan;
    }

    /**
     * Sets a new insurancePlan
     *
     * @param \TKusy\Hl7FhirR4\InsurancePlanType $insurancePlan
     * @return self
     */
    public function setInsurancePlan(\TKusy\Hl7FhirR4\InsurancePlanType $insurancePlan)
    {
        $this->insurancePlan = $insurancePlan;
        return $this;
    }

    /**
     * Gets as invoice
     *
     * @return \TKusy\Hl7FhirR4\InvoiceType
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice
     *
     * @param \TKusy\Hl7FhirR4\InvoiceType $invoice
     * @return self
     */
    public function setInvoice(\TKusy\Hl7FhirR4\InvoiceType $invoice)
    {
        $this->invoice = $invoice;
        return $this;
    }

    /**
     * Gets as library
     *
     * @return \TKusy\Hl7FhirR4\LibraryType
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * Sets a new library
     *
     * @param \TKusy\Hl7FhirR4\LibraryType $library
     * @return self
     */
    public function setLibrary(\TKusy\Hl7FhirR4\LibraryType $library)
    {
        $this->library = $library;
        return $this;
    }

    /**
     * Gets as linkage
     *
     * @return \TKusy\Hl7FhirR4\LinkageType
     */
    public function getLinkage()
    {
        return $this->linkage;
    }

    /**
     * Sets a new linkage
     *
     * @param \TKusy\Hl7FhirR4\LinkageType $linkage
     * @return self
     */
    public function setLinkage(\TKusy\Hl7FhirR4\LinkageType $linkage)
    {
        $this->linkage = $linkage;
        return $this;
    }

    /**
     * Gets as list
     *
     * @return \TKusy\Hl7FhirR4\ListType
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list
     *
     * @param \TKusy\Hl7FhirR4\ListType $list
     * @return self
     */
    public function setList(\TKusy\Hl7FhirR4\ListType $list)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return \TKusy\Hl7FhirR4\LocationType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \TKusy\Hl7FhirR4\LocationType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\LocationType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as measure
     *
     * @return \TKusy\Hl7FhirR4\MeasureType
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * @param \TKusy\Hl7FhirR4\MeasureType $measure
     * @return self
     */
    public function setMeasure(\TKusy\Hl7FhirR4\MeasureType $measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Gets as measureReport
     *
     * @return \TKusy\Hl7FhirR4\MeasureReportType
     */
    public function getMeasureReport()
    {
        return $this->measureReport;
    }

    /**
     * Sets a new measureReport
     *
     * @param \TKusy\Hl7FhirR4\MeasureReportType $measureReport
     * @return self
     */
    public function setMeasureReport(\TKusy\Hl7FhirR4\MeasureReportType $measureReport)
    {
        $this->measureReport = $measureReport;
        return $this;
    }

    /**
     * Gets as media
     *
     * @return \TKusy\Hl7FhirR4\MediaType
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets a new media
     *
     * @param \TKusy\Hl7FhirR4\MediaType $media
     * @return self
     */
    public function setMedia(\TKusy\Hl7FhirR4\MediaType $media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * Gets as medication
     *
     * @return \TKusy\Hl7FhirR4\MedicationType
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Sets a new medication
     *
     * @param \TKusy\Hl7FhirR4\MedicationType $medication
     * @return self
     */
    public function setMedication(\TKusy\Hl7FhirR4\MedicationType $medication)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * Gets as medicationAdministration
     *
     * @return \TKusy\Hl7FhirR4\MedicationAdministrationType
     */
    public function getMedicationAdministration()
    {
        return $this->medicationAdministration;
    }

    /**
     * Sets a new medicationAdministration
     *
     * @param \TKusy\Hl7FhirR4\MedicationAdministrationType $medicationAdministration
     * @return self
     */
    public function setMedicationAdministration(\TKusy\Hl7FhirR4\MedicationAdministrationType $medicationAdministration)
    {
        $this->medicationAdministration = $medicationAdministration;
        return $this;
    }

    /**
     * Gets as medicationDispense
     *
     * @return \TKusy\Hl7FhirR4\MedicationDispenseType
     */
    public function getMedicationDispense()
    {
        return $this->medicationDispense;
    }

    /**
     * Sets a new medicationDispense
     *
     * @param \TKusy\Hl7FhirR4\MedicationDispenseType $medicationDispense
     * @return self
     */
    public function setMedicationDispense(\TKusy\Hl7FhirR4\MedicationDispenseType $medicationDispense)
    {
        $this->medicationDispense = $medicationDispense;
        return $this;
    }

    /**
     * Gets as medicationKnowledge
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeType
     */
    public function getMedicationKnowledge()
    {
        return $this->medicationKnowledge;
    }

    /**
     * Sets a new medicationKnowledge
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeType $medicationKnowledge
     * @return self
     */
    public function setMedicationKnowledge(\TKusy\Hl7FhirR4\MedicationKnowledgeType $medicationKnowledge)
    {
        $this->medicationKnowledge = $medicationKnowledge;
        return $this;
    }

    /**
     * Gets as medicationRequest
     *
     * @return \TKusy\Hl7FhirR4\MedicationRequestType
     */
    public function getMedicationRequest()
    {
        return $this->medicationRequest;
    }

    /**
     * Sets a new medicationRequest
     *
     * @param \TKusy\Hl7FhirR4\MedicationRequestType $medicationRequest
     * @return self
     */
    public function setMedicationRequest(\TKusy\Hl7FhirR4\MedicationRequestType $medicationRequest)
    {
        $this->medicationRequest = $medicationRequest;
        return $this;
    }

    /**
     * Gets as medicationStatement
     *
     * @return \TKusy\Hl7FhirR4\MedicationStatementType
     */
    public function getMedicationStatement()
    {
        return $this->medicationStatement;
    }

    /**
     * Sets a new medicationStatement
     *
     * @param \TKusy\Hl7FhirR4\MedicationStatementType $medicationStatement
     * @return self
     */
    public function setMedicationStatement(\TKusy\Hl7FhirR4\MedicationStatementType $medicationStatement)
    {
        $this->medicationStatement = $medicationStatement;
        return $this;
    }

    /**
     * Gets as medicinalProduct
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductType
     */
    public function getMedicinalProduct()
    {
        return $this->medicinalProduct;
    }

    /**
     * Sets a new medicinalProduct
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductType $medicinalProduct
     * @return self
     */
    public function setMedicinalProduct(\TKusy\Hl7FhirR4\MedicinalProductType $medicinalProduct)
    {
        $this->medicinalProduct = $medicinalProduct;
        return $this;
    }

    /**
     * Gets as medicinalProductAuthorization
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductAuthorizationType
     */
    public function getMedicinalProductAuthorization()
    {
        return $this->medicinalProductAuthorization;
    }

    /**
     * Sets a new medicinalProductAuthorization
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductAuthorizationType $medicinalProductAuthorization
     * @return self
     */
    public function setMedicinalProductAuthorization(\TKusy\Hl7FhirR4\MedicinalProductAuthorizationType $medicinalProductAuthorization)
    {
        $this->medicinalProductAuthorization = $medicinalProductAuthorization;
        return $this;
    }

    /**
     * Gets as medicinalProductContraindication
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductContraindicationType
     */
    public function getMedicinalProductContraindication()
    {
        return $this->medicinalProductContraindication;
    }

    /**
     * Sets a new medicinalProductContraindication
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductContraindicationType $medicinalProductContraindication
     * @return self
     */
    public function setMedicinalProductContraindication(\TKusy\Hl7FhirR4\MedicinalProductContraindicationType $medicinalProductContraindication)
    {
        $this->medicinalProductContraindication = $medicinalProductContraindication;
        return $this;
    }

    /**
     * Gets as medicinalProductIndication
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductIndicationType
     */
    public function getMedicinalProductIndication()
    {
        return $this->medicinalProductIndication;
    }

    /**
     * Sets a new medicinalProductIndication
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductIndicationType $medicinalProductIndication
     * @return self
     */
    public function setMedicinalProductIndication(\TKusy\Hl7FhirR4\MedicinalProductIndicationType $medicinalProductIndication)
    {
        $this->medicinalProductIndication = $medicinalProductIndication;
        return $this;
    }

    /**
     * Gets as medicinalProductIngredient
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductIngredientType
     */
    public function getMedicinalProductIngredient()
    {
        return $this->medicinalProductIngredient;
    }

    /**
     * Sets a new medicinalProductIngredient
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductIngredientType $medicinalProductIngredient
     * @return self
     */
    public function setMedicinalProductIngredient(\TKusy\Hl7FhirR4\MedicinalProductIngredientType $medicinalProductIngredient)
    {
        $this->medicinalProductIngredient = $medicinalProductIngredient;
        return $this;
    }

    /**
     * Gets as medicinalProductInteraction
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductInteractionType
     */
    public function getMedicinalProductInteraction()
    {
        return $this->medicinalProductInteraction;
    }

    /**
     * Sets a new medicinalProductInteraction
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductInteractionType $medicinalProductInteraction
     * @return self
     */
    public function setMedicinalProductInteraction(\TKusy\Hl7FhirR4\MedicinalProductInteractionType $medicinalProductInteraction)
    {
        $this->medicinalProductInteraction = $medicinalProductInteraction;
        return $this;
    }

    /**
     * Gets as medicinalProductManufactured
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductManufacturedType
     */
    public function getMedicinalProductManufactured()
    {
        return $this->medicinalProductManufactured;
    }

    /**
     * Sets a new medicinalProductManufactured
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductManufacturedType $medicinalProductManufactured
     * @return self
     */
    public function setMedicinalProductManufactured(\TKusy\Hl7FhirR4\MedicinalProductManufacturedType $medicinalProductManufactured)
    {
        $this->medicinalProductManufactured = $medicinalProductManufactured;
        return $this;
    }

    /**
     * Gets as medicinalProductPackaged
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPackagedType
     */
    public function getMedicinalProductPackaged()
    {
        return $this->medicinalProductPackaged;
    }

    /**
     * Sets a new medicinalProductPackaged
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPackagedType $medicinalProductPackaged
     * @return self
     */
    public function setMedicinalProductPackaged(\TKusy\Hl7FhirR4\MedicinalProductPackagedType $medicinalProductPackaged)
    {
        $this->medicinalProductPackaged = $medicinalProductPackaged;
        return $this;
    }

    /**
     * Gets as medicinalProductPharmaceutical
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalType
     */
    public function getMedicinalProductPharmaceutical()
    {
        return $this->medicinalProductPharmaceutical;
    }

    /**
     * Sets a new medicinalProductPharmaceutical
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalType $medicinalProductPharmaceutical
     * @return self
     */
    public function setMedicinalProductPharmaceutical(\TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalType $medicinalProductPharmaceutical)
    {
        $this->medicinalProductPharmaceutical = $medicinalProductPharmaceutical;
        return $this;
    }

    /**
     * Gets as medicinalProductUndesirableEffect
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductUndesirableEffectType
     */
    public function getMedicinalProductUndesirableEffect()
    {
        return $this->medicinalProductUndesirableEffect;
    }

    /**
     * Sets a new medicinalProductUndesirableEffect
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductUndesirableEffectType $medicinalProductUndesirableEffect
     * @return self
     */
    public function setMedicinalProductUndesirableEffect(\TKusy\Hl7FhirR4\MedicinalProductUndesirableEffectType $medicinalProductUndesirableEffect)
    {
        $this->medicinalProductUndesirableEffect = $medicinalProductUndesirableEffect;
        return $this;
    }

    /**
     * Gets as messageDefinition
     *
     * @return \TKusy\Hl7FhirR4\MessageDefinitionType
     */
    public function getMessageDefinition()
    {
        return $this->messageDefinition;
    }

    /**
     * Sets a new messageDefinition
     *
     * @param \TKusy\Hl7FhirR4\MessageDefinitionType $messageDefinition
     * @return self
     */
    public function setMessageDefinition(\TKusy\Hl7FhirR4\MessageDefinitionType $messageDefinition)
    {
        $this->messageDefinition = $messageDefinition;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * @return \TKusy\Hl7FhirR4\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * @param \TKusy\Hl7FhirR4\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\TKusy\Hl7FhirR4\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as molecularSequence
     *
     * @return \TKusy\Hl7FhirR4\MolecularSequenceType
     */
    public function getMolecularSequence()
    {
        return $this->molecularSequence;
    }

    /**
     * Sets a new molecularSequence
     *
     * @param \TKusy\Hl7FhirR4\MolecularSequenceType $molecularSequence
     * @return self
     */
    public function setMolecularSequence(\TKusy\Hl7FhirR4\MolecularSequenceType $molecularSequence)
    {
        $this->molecularSequence = $molecularSequence;
        return $this;
    }

    /**
     * Gets as namingSystem
     *
     * @return \TKusy\Hl7FhirR4\NamingSystemType
     */
    public function getNamingSystem()
    {
        return $this->namingSystem;
    }

    /**
     * Sets a new namingSystem
     *
     * @param \TKusy\Hl7FhirR4\NamingSystemType $namingSystem
     * @return self
     */
    public function setNamingSystem(\TKusy\Hl7FhirR4\NamingSystemType $namingSystem)
    {
        $this->namingSystem = $namingSystem;
        return $this;
    }

    /**
     * Gets as nutritionOrder
     *
     * @return \TKusy\Hl7FhirR4\NutritionOrderType
     */
    public function getNutritionOrder()
    {
        return $this->nutritionOrder;
    }

    /**
     * Sets a new nutritionOrder
     *
     * @param \TKusy\Hl7FhirR4\NutritionOrderType $nutritionOrder
     * @return self
     */
    public function setNutritionOrder(\TKusy\Hl7FhirR4\NutritionOrderType $nutritionOrder)
    {
        $this->nutritionOrder = $nutritionOrder;
        return $this;
    }

    /**
     * Gets as observation
     *
     * @return \TKusy\Hl7FhirR4\ObservationType
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Sets a new observation
     *
     * @param \TKusy\Hl7FhirR4\ObservationType $observation
     * @return self
     */
    public function setObservation(\TKusy\Hl7FhirR4\ObservationType $observation)
    {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Gets as observationDefinition
     *
     * @return \TKusy\Hl7FhirR4\ObservationDefinitionType
     */
    public function getObservationDefinition()
    {
        return $this->observationDefinition;
    }

    /**
     * Sets a new observationDefinition
     *
     * @param \TKusy\Hl7FhirR4\ObservationDefinitionType $observationDefinition
     * @return self
     */
    public function setObservationDefinition(\TKusy\Hl7FhirR4\ObservationDefinitionType $observationDefinition)
    {
        $this->observationDefinition = $observationDefinition;
        return $this;
    }

    /**
     * Gets as operationDefinition
     *
     * @return \TKusy\Hl7FhirR4\OperationDefinitionType
     */
    public function getOperationDefinition()
    {
        return $this->operationDefinition;
    }

    /**
     * Sets a new operationDefinition
     *
     * @param \TKusy\Hl7FhirR4\OperationDefinitionType $operationDefinition
     * @return self
     */
    public function setOperationDefinition(\TKusy\Hl7FhirR4\OperationDefinitionType $operationDefinition)
    {
        $this->operationDefinition = $operationDefinition;
        return $this;
    }

    /**
     * Gets as operationOutcome
     *
     * @return \TKusy\Hl7FhirR4\OperationOutcomeType
     */
    public function getOperationOutcome()
    {
        return $this->operationOutcome;
    }

    /**
     * Sets a new operationOutcome
     *
     * @param \TKusy\Hl7FhirR4\OperationOutcomeType $operationOutcome
     * @return self
     */
    public function setOperationOutcome(\TKusy\Hl7FhirR4\OperationOutcomeType $operationOutcome)
    {
        $this->operationOutcome = $operationOutcome;
        return $this;
    }

    /**
     * Gets as organization
     *
     * @return \TKusy\Hl7FhirR4\OrganizationType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * @param \TKusy\Hl7FhirR4\OrganizationType $organization
     * @return self
     */
    public function setOrganization(\TKusy\Hl7FhirR4\OrganizationType $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as organizationAffiliation
     *
     * @return \TKusy\Hl7FhirR4\OrganizationAffiliationType
     */
    public function getOrganizationAffiliation()
    {
        return $this->organizationAffiliation;
    }

    /**
     * Sets a new organizationAffiliation
     *
     * @param \TKusy\Hl7FhirR4\OrganizationAffiliationType $organizationAffiliation
     * @return self
     */
    public function setOrganizationAffiliation(\TKusy\Hl7FhirR4\OrganizationAffiliationType $organizationAffiliation)
    {
        $this->organizationAffiliation = $organizationAffiliation;
        return $this;
    }

    /**
     * Gets as patient
     *
     * @return \TKusy\Hl7FhirR4\PatientType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * @param \TKusy\Hl7FhirR4\PatientType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\PatientType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as paymentNotice
     *
     * @return \TKusy\Hl7FhirR4\PaymentNoticeType
     */
    public function getPaymentNotice()
    {
        return $this->paymentNotice;
    }

    /**
     * Sets a new paymentNotice
     *
     * @param \TKusy\Hl7FhirR4\PaymentNoticeType $paymentNotice
     * @return self
     */
    public function setPaymentNotice(\TKusy\Hl7FhirR4\PaymentNoticeType $paymentNotice)
    {
        $this->paymentNotice = $paymentNotice;
        return $this;
    }

    /**
     * Gets as paymentReconciliation
     *
     * @return \TKusy\Hl7FhirR4\PaymentReconciliationType
     */
    public function getPaymentReconciliation()
    {
        return $this->paymentReconciliation;
    }

    /**
     * Sets a new paymentReconciliation
     *
     * @param \TKusy\Hl7FhirR4\PaymentReconciliationType $paymentReconciliation
     * @return self
     */
    public function setPaymentReconciliation(\TKusy\Hl7FhirR4\PaymentReconciliationType $paymentReconciliation)
    {
        $this->paymentReconciliation = $paymentReconciliation;
        return $this;
    }

    /**
     * Gets as person
     *
     * @return \TKusy\Hl7FhirR4\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \TKusy\Hl7FhirR4\PersonType $person
     * @return self
     */
    public function setPerson(\TKusy\Hl7FhirR4\PersonType $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as planDefinition
     *
     * @return \TKusy\Hl7FhirR4\PlanDefinitionType
     */
    public function getPlanDefinition()
    {
        return $this->planDefinition;
    }

    /**
     * Sets a new planDefinition
     *
     * @param \TKusy\Hl7FhirR4\PlanDefinitionType $planDefinition
     * @return self
     */
    public function setPlanDefinition(\TKusy\Hl7FhirR4\PlanDefinitionType $planDefinition)
    {
        $this->planDefinition = $planDefinition;
        return $this;
    }

    /**
     * Gets as practitioner
     *
     * @return \TKusy\Hl7FhirR4\PractitionerType
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * Sets a new practitioner
     *
     * @param \TKusy\Hl7FhirR4\PractitionerType $practitioner
     * @return self
     */
    public function setPractitioner(\TKusy\Hl7FhirR4\PractitionerType $practitioner)
    {
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * Gets as practitionerRole
     *
     * @return \TKusy\Hl7FhirR4\PractitionerRoleType
     */
    public function getPractitionerRole()
    {
        return $this->practitionerRole;
    }

    /**
     * Sets a new practitionerRole
     *
     * @param \TKusy\Hl7FhirR4\PractitionerRoleType $practitionerRole
     * @return self
     */
    public function setPractitionerRole(\TKusy\Hl7FhirR4\PractitionerRoleType $practitionerRole)
    {
        $this->practitionerRole = $practitionerRole;
        return $this;
    }

    /**
     * Gets as procedure
     *
     * @return \TKusy\Hl7FhirR4\ProcedureType
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * @param \TKusy\Hl7FhirR4\ProcedureType $procedure
     * @return self
     */
    public function setProcedure(\TKusy\Hl7FhirR4\ProcedureType $procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Gets as provenance
     *
     * @return \TKusy\Hl7FhirR4\ProvenanceType
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * Sets a new provenance
     *
     * @param \TKusy\Hl7FhirR4\ProvenanceType $provenance
     * @return self
     */
    public function setProvenance(\TKusy\Hl7FhirR4\ProvenanceType $provenance)
    {
        $this->provenance = $provenance;
        return $this;
    }

    /**
     * Gets as questionnaire
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireType
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Sets a new questionnaire
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireType $questionnaire
     * @return self
     */
    public function setQuestionnaire(\TKusy\Hl7FhirR4\QuestionnaireType $questionnaire)
    {
        $this->questionnaire = $questionnaire;
        return $this;
    }

    /**
     * Gets as questionnaireResponse
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireResponseType
     */
    public function getQuestionnaireResponse()
    {
        return $this->questionnaireResponse;
    }

    /**
     * Sets a new questionnaireResponse
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireResponseType $questionnaireResponse
     * @return self
     */
    public function setQuestionnaireResponse(\TKusy\Hl7FhirR4\QuestionnaireResponseType $questionnaireResponse)
    {
        $this->questionnaireResponse = $questionnaireResponse;
        return $this;
    }

    /**
     * Gets as relatedPerson
     *
     * @return \TKusy\Hl7FhirR4\RelatedPersonType
     */
    public function getRelatedPerson()
    {
        return $this->relatedPerson;
    }

    /**
     * Sets a new relatedPerson
     *
     * @param \TKusy\Hl7FhirR4\RelatedPersonType $relatedPerson
     * @return self
     */
    public function setRelatedPerson(\TKusy\Hl7FhirR4\RelatedPersonType $relatedPerson)
    {
        $this->relatedPerson = $relatedPerson;
        return $this;
    }

    /**
     * Gets as requestGroup
     *
     * @return \TKusy\Hl7FhirR4\RequestGroupType
     */
    public function getRequestGroup()
    {
        return $this->requestGroup;
    }

    /**
     * Sets a new requestGroup
     *
     * @param \TKusy\Hl7FhirR4\RequestGroupType $requestGroup
     * @return self
     */
    public function setRequestGroup(\TKusy\Hl7FhirR4\RequestGroupType $requestGroup)
    {
        $this->requestGroup = $requestGroup;
        return $this;
    }

    /**
     * Gets as researchDefinition
     *
     * @return \TKusy\Hl7FhirR4\ResearchDefinitionType
     */
    public function getResearchDefinition()
    {
        return $this->researchDefinition;
    }

    /**
     * Sets a new researchDefinition
     *
     * @param \TKusy\Hl7FhirR4\ResearchDefinitionType $researchDefinition
     * @return self
     */
    public function setResearchDefinition(\TKusy\Hl7FhirR4\ResearchDefinitionType $researchDefinition)
    {
        $this->researchDefinition = $researchDefinition;
        return $this;
    }

    /**
     * Gets as researchElementDefinition
     *
     * @return \TKusy\Hl7FhirR4\ResearchElementDefinitionType
     */
    public function getResearchElementDefinition()
    {
        return $this->researchElementDefinition;
    }

    /**
     * Sets a new researchElementDefinition
     *
     * @param \TKusy\Hl7FhirR4\ResearchElementDefinitionType $researchElementDefinition
     * @return self
     */
    public function setResearchElementDefinition(\TKusy\Hl7FhirR4\ResearchElementDefinitionType $researchElementDefinition)
    {
        $this->researchElementDefinition = $researchElementDefinition;
        return $this;
    }

    /**
     * Gets as researchStudy
     *
     * @return \TKusy\Hl7FhirR4\ResearchStudyType
     */
    public function getResearchStudy()
    {
        return $this->researchStudy;
    }

    /**
     * Sets a new researchStudy
     *
     * @param \TKusy\Hl7FhirR4\ResearchStudyType $researchStudy
     * @return self
     */
    public function setResearchStudy(\TKusy\Hl7FhirR4\ResearchStudyType $researchStudy)
    {
        $this->researchStudy = $researchStudy;
        return $this;
    }

    /**
     * Gets as researchSubject
     *
     * @return \TKusy\Hl7FhirR4\ResearchSubjectType
     */
    public function getResearchSubject()
    {
        return $this->researchSubject;
    }

    /**
     * Sets a new researchSubject
     *
     * @param \TKusy\Hl7FhirR4\ResearchSubjectType $researchSubject
     * @return self
     */
    public function setResearchSubject(\TKusy\Hl7FhirR4\ResearchSubjectType $researchSubject)
    {
        $this->researchSubject = $researchSubject;
        return $this;
    }

    /**
     * Gets as riskAssessment
     *
     * @return \TKusy\Hl7FhirR4\RiskAssessmentType
     */
    public function getRiskAssessment()
    {
        return $this->riskAssessment;
    }

    /**
     * Sets a new riskAssessment
     *
     * @param \TKusy\Hl7FhirR4\RiskAssessmentType $riskAssessment
     * @return self
     */
    public function setRiskAssessment(\TKusy\Hl7FhirR4\RiskAssessmentType $riskAssessment)
    {
        $this->riskAssessment = $riskAssessment;
        return $this;
    }

    /**
     * Gets as riskEvidenceSynthesis
     *
     * @return \TKusy\Hl7FhirR4\RiskEvidenceSynthesisType
     */
    public function getRiskEvidenceSynthesis()
    {
        return $this->riskEvidenceSynthesis;
    }

    /**
     * Sets a new riskEvidenceSynthesis
     *
     * @param \TKusy\Hl7FhirR4\RiskEvidenceSynthesisType $riskEvidenceSynthesis
     * @return self
     */
    public function setRiskEvidenceSynthesis(\TKusy\Hl7FhirR4\RiskEvidenceSynthesisType $riskEvidenceSynthesis)
    {
        $this->riskEvidenceSynthesis = $riskEvidenceSynthesis;
        return $this;
    }

    /**
     * Gets as schedule
     *
     * @return \TKusy\Hl7FhirR4\ScheduleType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * @param \TKusy\Hl7FhirR4\ScheduleType $schedule
     * @return self
     */
    public function setSchedule(\TKusy\Hl7FhirR4\ScheduleType $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as searchParameter
     *
     * @return \TKusy\Hl7FhirR4\SearchParameterType
     */
    public function getSearchParameter()
    {
        return $this->searchParameter;
    }

    /**
     * Sets a new searchParameter
     *
     * @param \TKusy\Hl7FhirR4\SearchParameterType $searchParameter
     * @return self
     */
    public function setSearchParameter(\TKusy\Hl7FhirR4\SearchParameterType $searchParameter)
    {
        $this->searchParameter = $searchParameter;
        return $this;
    }

    /**
     * Gets as serviceRequest
     *
     * @return \TKusy\Hl7FhirR4\ServiceRequestType
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * @param \TKusy\Hl7FhirR4\ServiceRequestType $serviceRequest
     * @return self
     */
    public function setServiceRequest(\TKusy\Hl7FhirR4\ServiceRequestType $serviceRequest)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }

    /**
     * Gets as slot
     *
     * @return \TKusy\Hl7FhirR4\SlotType
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Sets a new slot
     *
     * @param \TKusy\Hl7FhirR4\SlotType $slot
     * @return self
     */
    public function setSlot(\TKusy\Hl7FhirR4\SlotType $slot)
    {
        $this->slot = $slot;
        return $this;
    }

    /**
     * Gets as specimen
     *
     * @return \TKusy\Hl7FhirR4\SpecimenType
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * @param \TKusy\Hl7FhirR4\SpecimenType $specimen
     * @return self
     */
    public function setSpecimen(\TKusy\Hl7FhirR4\SpecimenType $specimen)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Gets as specimenDefinition
     *
     * @return \TKusy\Hl7FhirR4\SpecimenDefinitionType
     */
    public function getSpecimenDefinition()
    {
        return $this->specimenDefinition;
    }

    /**
     * Sets a new specimenDefinition
     *
     * @param \TKusy\Hl7FhirR4\SpecimenDefinitionType $specimenDefinition
     * @return self
     */
    public function setSpecimenDefinition(\TKusy\Hl7FhirR4\SpecimenDefinitionType $specimenDefinition)
    {
        $this->specimenDefinition = $specimenDefinition;
        return $this;
    }

    /**
     * Gets as structureDefinition
     *
     * @return \TKusy\Hl7FhirR4\StructureDefinitionType
     */
    public function getStructureDefinition()
    {
        return $this->structureDefinition;
    }

    /**
     * Sets a new structureDefinition
     *
     * @param \TKusy\Hl7FhirR4\StructureDefinitionType $structureDefinition
     * @return self
     */
    public function setStructureDefinition(\TKusy\Hl7FhirR4\StructureDefinitionType $structureDefinition)
    {
        $this->structureDefinition = $structureDefinition;
        return $this;
    }

    /**
     * Gets as structureMap
     *
     * @return \TKusy\Hl7FhirR4\StructureMapType
     */
    public function getStructureMap()
    {
        return $this->structureMap;
    }

    /**
     * Sets a new structureMap
     *
     * @param \TKusy\Hl7FhirR4\StructureMapType $structureMap
     * @return self
     */
    public function setStructureMap(\TKusy\Hl7FhirR4\StructureMapType $structureMap)
    {
        $this->structureMap = $structureMap;
        return $this;
    }

    /**
     * Gets as subscription
     *
     * @return \TKusy\Hl7FhirR4\SubscriptionType
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * @param \TKusy\Hl7FhirR4\SubscriptionType $subscription
     * @return self
     */
    public function setSubscription(\TKusy\Hl7FhirR4\SubscriptionType $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * Gets as substance
     *
     * @return \TKusy\Hl7FhirR4\SubstanceType
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Sets a new substance
     *
     * @param \TKusy\Hl7FhirR4\SubstanceType $substance
     * @return self
     */
    public function setSubstance(\TKusy\Hl7FhirR4\SubstanceType $substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Gets as substanceNucleicAcid
     *
     * @return \TKusy\Hl7FhirR4\SubstanceNucleicAcidType
     */
    public function getSubstanceNucleicAcid()
    {
        return $this->substanceNucleicAcid;
    }

    /**
     * Sets a new substanceNucleicAcid
     *
     * @param \TKusy\Hl7FhirR4\SubstanceNucleicAcidType $substanceNucleicAcid
     * @return self
     */
    public function setSubstanceNucleicAcid(\TKusy\Hl7FhirR4\SubstanceNucleicAcidType $substanceNucleicAcid)
    {
        $this->substanceNucleicAcid = $substanceNucleicAcid;
        return $this;
    }

    /**
     * Gets as substancePolymer
     *
     * @return \TKusy\Hl7FhirR4\SubstancePolymerType
     */
    public function getSubstancePolymer()
    {
        return $this->substancePolymer;
    }

    /**
     * Sets a new substancePolymer
     *
     * @param \TKusy\Hl7FhirR4\SubstancePolymerType $substancePolymer
     * @return self
     */
    public function setSubstancePolymer(\TKusy\Hl7FhirR4\SubstancePolymerType $substancePolymer)
    {
        $this->substancePolymer = $substancePolymer;
        return $this;
    }

    /**
     * Gets as substanceProtein
     *
     * @return \TKusy\Hl7FhirR4\SubstanceProteinType
     */
    public function getSubstanceProtein()
    {
        return $this->substanceProtein;
    }

    /**
     * Sets a new substanceProtein
     *
     * @param \TKusy\Hl7FhirR4\SubstanceProteinType $substanceProtein
     * @return self
     */
    public function setSubstanceProtein(\TKusy\Hl7FhirR4\SubstanceProteinType $substanceProtein)
    {
        $this->substanceProtein = $substanceProtein;
        return $this;
    }

    /**
     * Gets as substanceReferenceInformation
     *
     * @return \TKusy\Hl7FhirR4\SubstanceReferenceInformationType
     */
    public function getSubstanceReferenceInformation()
    {
        return $this->substanceReferenceInformation;
    }

    /**
     * Sets a new substanceReferenceInformation
     *
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationType $substanceReferenceInformation
     * @return self
     */
    public function setSubstanceReferenceInformation(\TKusy\Hl7FhirR4\SubstanceReferenceInformationType $substanceReferenceInformation)
    {
        $this->substanceReferenceInformation = $substanceReferenceInformation;
        return $this;
    }

    /**
     * Gets as substanceSourceMaterial
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSourceMaterialType
     */
    public function getSubstanceSourceMaterial()
    {
        return $this->substanceSourceMaterial;
    }

    /**
     * Sets a new substanceSourceMaterial
     *
     * @param \TKusy\Hl7FhirR4\SubstanceSourceMaterialType $substanceSourceMaterial
     * @return self
     */
    public function setSubstanceSourceMaterial(\TKusy\Hl7FhirR4\SubstanceSourceMaterialType $substanceSourceMaterial)
    {
        $this->substanceSourceMaterial = $substanceSourceMaterial;
        return $this;
    }

    /**
     * Gets as substanceSpecification
     *
     * @return \TKusy\Hl7FhirR4\SubstanceSpecificationType
     */
    public function getSubstanceSpecification()
    {
        return $this->substanceSpecification;
    }

    /**
     * Sets a new substanceSpecification
     *
     * @param \TKusy\Hl7FhirR4\SubstanceSpecificationType $substanceSpecification
     * @return self
     */
    public function setSubstanceSpecification(\TKusy\Hl7FhirR4\SubstanceSpecificationType $substanceSpecification)
    {
        $this->substanceSpecification = $substanceSpecification;
        return $this;
    }

    /**
     * Gets as supplyDelivery
     *
     * @return \TKusy\Hl7FhirR4\SupplyDeliveryType
     */
    public function getSupplyDelivery()
    {
        return $this->supplyDelivery;
    }

    /**
     * Sets a new supplyDelivery
     *
     * @param \TKusy\Hl7FhirR4\SupplyDeliveryType $supplyDelivery
     * @return self
     */
    public function setSupplyDelivery(\TKusy\Hl7FhirR4\SupplyDeliveryType $supplyDelivery)
    {
        $this->supplyDelivery = $supplyDelivery;
        return $this;
    }

    /**
     * Gets as supplyRequest
     *
     * @return \TKusy\Hl7FhirR4\SupplyRequestType
     */
    public function getSupplyRequest()
    {
        return $this->supplyRequest;
    }

    /**
     * Sets a new supplyRequest
     *
     * @param \TKusy\Hl7FhirR4\SupplyRequestType $supplyRequest
     * @return self
     */
    public function setSupplyRequest(\TKusy\Hl7FhirR4\SupplyRequestType $supplyRequest)
    {
        $this->supplyRequest = $supplyRequest;
        return $this;
    }

    /**
     * Gets as task
     *
     * @return \TKusy\Hl7FhirR4\TaskType
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Sets a new task
     *
     * @param \TKusy\Hl7FhirR4\TaskType $task
     * @return self
     */
    public function setTask(\TKusy\Hl7FhirR4\TaskType $task)
    {
        $this->task = $task;
        return $this;
    }

    /**
     * Gets as terminologyCapabilities
     *
     * @return \TKusy\Hl7FhirR4\TerminologyCapabilitiesType
     */
    public function getTerminologyCapabilities()
    {
        return $this->terminologyCapabilities;
    }

    /**
     * Sets a new terminologyCapabilities
     *
     * @param \TKusy\Hl7FhirR4\TerminologyCapabilitiesType $terminologyCapabilities
     * @return self
     */
    public function setTerminologyCapabilities(\TKusy\Hl7FhirR4\TerminologyCapabilitiesType $terminologyCapabilities)
    {
        $this->terminologyCapabilities = $terminologyCapabilities;
        return $this;
    }

    /**
     * Gets as testReport
     *
     * @return \TKusy\Hl7FhirR4\TestReportType
     */
    public function getTestReport()
    {
        return $this->testReport;
    }

    /**
     * Sets a new testReport
     *
     * @param \TKusy\Hl7FhirR4\TestReportType $testReport
     * @return self
     */
    public function setTestReport(\TKusy\Hl7FhirR4\TestReportType $testReport)
    {
        $this->testReport = $testReport;
        return $this;
    }

    /**
     * Gets as testScript
     *
     * @return \TKusy\Hl7FhirR4\TestScriptType
     */
    public function getTestScript()
    {
        return $this->testScript;
    }

    /**
     * Sets a new testScript
     *
     * @param \TKusy\Hl7FhirR4\TestScriptType $testScript
     * @return self
     */
    public function setTestScript(\TKusy\Hl7FhirR4\TestScriptType $testScript)
    {
        $this->testScript = $testScript;
        return $this;
    }

    /**
     * Gets as valueSet
     *
     * @return \TKusy\Hl7FhirR4\ValueSetType
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * @param \TKusy\Hl7FhirR4\ValueSetType $valueSet
     * @return self
     */
    public function setValueSet(\TKusy\Hl7FhirR4\ValueSetType $valueSet)
    {
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Gets as verificationResult
     *
     * @return \TKusy\Hl7FhirR4\VerificationResultType
     */
    public function getVerificationResult()
    {
        return $this->verificationResult;
    }

    /**
     * Sets a new verificationResult
     *
     * @param \TKusy\Hl7FhirR4\VerificationResultType $verificationResult
     * @return self
     */
    public function setVerificationResult(\TKusy\Hl7FhirR4\VerificationResultType $verificationResult)
    {
        $this->verificationResult = $verificationResult;
        return $this;
    }

    /**
     * Gets as visionPrescription
     *
     * @return \TKusy\Hl7FhirR4\VisionPrescriptionType
     */
    public function getVisionPrescription()
    {
        return $this->visionPrescription;
    }

    /**
     * Sets a new visionPrescription
     *
     * @param \TKusy\Hl7FhirR4\VisionPrescriptionType $visionPrescription
     * @return self
     */
    public function setVisionPrescription(\TKusy\Hl7FhirR4\VisionPrescriptionType $visionPrescription)
    {
        $this->visionPrescription = $visionPrescription;
        return $this;
    }

    /**
     * Gets as parameters
     *
     * @return \TKusy\Hl7FhirR4\ParametersType
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \TKusy\Hl7FhirR4\ParametersType $parameters
     * @return self
     */
    public function setParameters(\TKusy\Hl7FhirR4\ParametersType $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

