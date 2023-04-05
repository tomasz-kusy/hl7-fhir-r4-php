<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResourceContainerType
 *
 *
 * XSD Type: ResourceContainer
 */
class ResourceContainerType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\Account $account
     */
    private $account = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ActivityDefinition $activityDefinition
     */
    private $activityDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ActorDefinition $actorDefinition
     */
    private $actorDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AdministrableProductDefinition $administrableProductDefinition
     */
    private $administrableProductDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AdverseEvent $adverseEvent
     */
    private $adverseEvent = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AllergyIntolerance $allergyIntolerance
     */
    private $allergyIntolerance = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Appointment $appointment
     */
    private $appointment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AppointmentResponse $appointmentResponse
     */
    private $appointmentResponse = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ArtifactAssessment $artifactAssessment
     */
    private $artifactAssessment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AuditEvent $auditEvent
     */
    private $auditEvent = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Basic $basic
     */
    private $basic = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Binary $binary
     */
    private $binary = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BiologicallyDerivedProduct $biologicallyDerivedProduct
     */
    private $biologicallyDerivedProduct = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispense $biologicallyDerivedProductDispense
     */
    private $biologicallyDerivedProductDispense = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BodyStructure $bodyStructure
     */
    private $bodyStructure = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Bundle $bundle
     */
    private $bundle = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatement $capabilityStatement
     */
    private $capabilityStatement = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CarePlan $carePlan
     */
    private $carePlan = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CareTeam $careTeam
     */
    private $careTeam = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ChargeItem $chargeItem
     */
    private $chargeItem = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ChargeItemDefinition $chargeItemDefinition
     */
    private $chargeItemDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Citation $citation
     */
    private $citation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Claim $claim
     */
    private $claim = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ClaimResponse $claimResponse
     */
    private $claimResponse = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ClinicalImpression $clinicalImpression
     */
    private $clinicalImpression = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinition $clinicalUseDefinition
     */
    private $clinicalUseDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeSystem $codeSystem
     */
    private $codeSystem = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Communication $communication
     */
    private $communication = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CommunicationRequest $communicationRequest
     */
    private $communicationRequest = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CompartmentDefinition $compartmentDefinition
     */
    private $compartmentDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Composition $composition
     */
    private $composition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ConceptMap $conceptMap
     */
    private $conceptMap = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Condition $condition
     */
    private $condition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ConditionDefinition $conditionDefinition
     */
    private $conditionDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Consent $consent
     */
    private $consent = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Contract $contract
     */
    private $contract = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Coverage $coverage
     */
    private $coverage = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CoverageEligibilityRequest $coverageEligibilityRequest
     */
    private $coverageEligibilityRequest = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CoverageEligibilityResponse $coverageEligibilityResponse
     */
    private $coverageEligibilityResponse = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DetectedIssue $detectedIssue
     */
    private $detectedIssue = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Device $device
     */
    private $device = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DeviceAssociation $deviceAssociation
     */
    private $deviceAssociation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinition $deviceDefinition
     */
    private $deviceDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DeviceDispense $deviceDispense
     */
    private $deviceDispense = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DeviceMetric $deviceMetric
     */
    private $deviceMetric = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DeviceRequest $deviceRequest
     */
    private $deviceRequest = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DeviceUsage $deviceUsage
     */
    private $deviceUsage = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DiagnosticReport $diagnosticReport
     */
    private $diagnosticReport = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Encounter $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\EncounterHistory $encounterHistory
     */
    private $encounterHistory = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Endpoint $endpoint
     */
    private $endpoint = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\EnrollmentRequest $enrollmentRequest
     */
    private $enrollmentRequest = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\EnrollmentResponse $enrollmentResponse
     */
    private $enrollmentResponse = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\EpisodeOfCare $episodeOfCare
     */
    private $episodeOfCare = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\EventDefinition $eventDefinition
     */
    private $eventDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Evidence $evidence
     */
    private $evidence = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\EvidenceReport $evidenceReport
     */
    private $evidenceReport = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\EvidenceVariable $evidenceVariable
     */
    private $evidenceVariable = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ExampleScenario $exampleScenario
     */
    private $exampleScenario = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefit $explanationOfBenefit
     */
    private $explanationOfBenefit = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\FamilyMemberHistory $familyMemberHistory
     */
    private $familyMemberHistory = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Flag $flag
     */
    private $flag = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\FormularyItem $formularyItem
     */
    private $formularyItem = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\GenomicStudy $genomicStudy
     */
    private $genomicStudy = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Goal $goal
     */
    private $goal = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\GraphDefinition $graphDefinition
     */
    private $graphDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Group $group
     */
    private $group = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\GuidanceResponse $guidanceResponse
     */
    private $guidanceResponse = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\HealthcareService $healthcareService
     */
    private $healthcareService = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ImagingSelection $imagingSelection
     */
    private $imagingSelection = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ImagingStudy $imagingStudy
     */
    private $imagingStudy = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Immunization $immunization
     */
    private $immunization = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ImmunizationEvaluation $immunizationEvaluation
     */
    private $immunizationEvaluation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ImmunizationRecommendation $immunizationRecommendation
     */
    private $immunizationRecommendation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ImplementationGuide $implementationGuide
     */
    private $implementationGuide = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Ingredient $ingredient
     */
    private $ingredient = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\InsurancePlan $insurancePlan
     */
    private $insurancePlan = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\InventoryItem $inventoryItem
     */
    private $inventoryItem = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\InventoryReport $inventoryReport
     */
    private $inventoryReport = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Invoice $invoice
     */
    private $invoice = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Library $library
     */
    private $library = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Linkage $linkage
     */
    private $linkage = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ListXsd $list
     */
    private $list = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Location $location
     */
    private $location = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ManufacturedItemDefinition $manufacturedItemDefinition
     */
    private $manufacturedItemDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Measure $measure
     */
    private $measure = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MeasureReport $measureReport
     */
    private $measureReport = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Medication $medication
     */
    private $medication = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MedicationAdministration $medicationAdministration
     */
    private $medicationAdministration = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MedicationDispense $medicationDispense
     */
    private $medicationDispense = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledge $medicationKnowledge
     */
    private $medicationKnowledge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MedicationRequest $medicationRequest
     */
    private $medicationRequest = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MedicationStatement $medicationStatement
     */
    private $medicationStatement = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MedicinalProductDefinition $medicinalProductDefinition
     */
    private $medicinalProductDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MessageDefinition $messageDefinition
     */
    private $messageDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MessageHeader $messageHeader
     */
    private $messageHeader = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MolecularSequence $molecularSequence
     */
    private $molecularSequence = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\NamingSystem $namingSystem
     */
    private $namingSystem = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\NutritionIntake $nutritionIntake
     */
    private $nutritionIntake = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\NutritionOrder $nutritionOrder
     */
    private $nutritionOrder = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\NutritionProduct $nutritionProduct
     */
    private $nutritionProduct = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Observation $observation
     */
    private $observation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ObservationDefinition $observationDefinition
     */
    private $observationDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\OperationDefinition $operationDefinition
     */
    private $operationDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\OperationOutcome $operationOutcome
     */
    private $operationOutcome = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Organization $organization
     */
    private $organization = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\OrganizationAffiliation $organizationAffiliation
     */
    private $organizationAffiliation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PackagedProductDefinition $packagedProductDefinition
     */
    private $packagedProductDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Patient $patient
     */
    private $patient = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PaymentNotice $paymentNotice
     */
    private $paymentNotice = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PaymentReconciliation $paymentReconciliation
     */
    private $paymentReconciliation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Permission $permission
     */
    private $permission = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Person $person
     */
    private $person = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PlanDefinition $planDefinition
     */
    private $planDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Practitioner $practitioner
     */
    private $practitioner = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PractitionerRole $practitionerRole
     */
    private $practitionerRole = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Procedure $procedure
     */
    private $procedure = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Provenance $provenance
     */
    private $provenance = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Questionnaire $questionnaire
     */
    private $questionnaire = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireResponse $questionnaireResponse
     */
    private $questionnaireResponse = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RegulatedAuthorization $regulatedAuthorization
     */
    private $regulatedAuthorization = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RelatedPerson $relatedPerson
     */
    private $relatedPerson = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestration $requestOrchestration
     */
    private $requestOrchestration = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Requirements $requirements
     */
    private $requirements = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ResearchStudy $researchStudy
     */
    private $researchStudy = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ResearchSubject $researchSubject
     */
    private $researchSubject = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RiskAssessment $riskAssessment
     */
    private $riskAssessment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Schedule $schedule
     */
    private $schedule = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SearchParameter $searchParameter
     */
    private $searchParameter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ServiceRequest $serviceRequest
     */
    private $serviceRequest = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Slot $slot
     */
    private $slot = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Specimen $specimen
     */
    private $specimen = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SpecimenDefinition $specimenDefinition
     */
    private $specimenDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StructureDefinition $structureDefinition
     */
    private $structureDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StructureMap $structureMap
     */
    private $structureMap = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Subscription $subscription
     */
    private $subscription = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SubscriptionStatus $subscriptionStatus
     */
    private $subscriptionStatus = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SubscriptionTopic $subscriptionTopic
     */
    private $subscriptionTopic = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Substance $substance
     */
    private $substance = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SubstanceDefinition $substanceDefinition
     */
    private $substanceDefinition = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SubstanceNucleicAcid $substanceNucleicAcid
     */
    private $substanceNucleicAcid = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SubstancePolymer $substancePolymer
     */
    private $substancePolymer = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SubstanceProtein $substanceProtein
     */
    private $substanceProtein = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SubstanceReferenceInformation $substanceReferenceInformation
     */
    private $substanceReferenceInformation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SubstanceSourceMaterial $substanceSourceMaterial
     */
    private $substanceSourceMaterial = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SupplyDelivery $supplyDelivery
     */
    private $supplyDelivery = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SupplyRequest $supplyRequest
     */
    private $supplyRequest = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Task $task
     */
    private $task = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilities $terminologyCapabilities
     */
    private $terminologyCapabilities = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TestPlan $testPlan
     */
    private $testPlan = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TestReport $testReport
     */
    private $testReport = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TestScript $testScript
     */
    private $testScript = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Transport $transport
     */
    private $transport = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ValueSet $valueSet
     */
    private $valueSet = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\VerificationResult $verificationResult
     */
    private $verificationResult = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\VisionPrescription $visionPrescription
     */
    private $visionPrescription = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\Parameters $parameters
     */
    private $parameters = null;

    /**
     * Gets as account
     *
     * @return \TKusy\Hl7Fhir\R5\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \TKusy\Hl7Fhir\R5\Account $account
     * @return self
     */
    public function setAccount(?\TKusy\Hl7Fhir\R5\Account $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as activityDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\ActivityDefinition
     */
    public function getActivityDefinition()
    {
        return $this->activityDefinition;
    }

    /**
     * Sets a new activityDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\ActivityDefinition $activityDefinition
     * @return self
     */
    public function setActivityDefinition(?\TKusy\Hl7Fhir\R5\ActivityDefinition $activityDefinition = null)
    {
        $this->activityDefinition = $activityDefinition;
        return $this;
    }

    /**
     * Gets as actorDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\ActorDefinition
     */
    public function getActorDefinition()
    {
        return $this->actorDefinition;
    }

    /**
     * Sets a new actorDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\ActorDefinition $actorDefinition
     * @return self
     */
    public function setActorDefinition(?\TKusy\Hl7Fhir\R5\ActorDefinition $actorDefinition = null)
    {
        $this->actorDefinition = $actorDefinition;
        return $this;
    }

    /**
     * Gets as administrableProductDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\AdministrableProductDefinition
     */
    public function getAdministrableProductDefinition()
    {
        return $this->administrableProductDefinition;
    }

    /**
     * Sets a new administrableProductDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinition $administrableProductDefinition
     * @return self
     */
    public function setAdministrableProductDefinition(?\TKusy\Hl7Fhir\R5\AdministrableProductDefinition $administrableProductDefinition = null)
    {
        $this->administrableProductDefinition = $administrableProductDefinition;
        return $this;
    }

    /**
     * Gets as adverseEvent
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEvent
     */
    public function getAdverseEvent()
    {
        return $this->adverseEvent;
    }

    /**
     * Sets a new adverseEvent
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEvent $adverseEvent
     * @return self
     */
    public function setAdverseEvent(?\TKusy\Hl7Fhir\R5\AdverseEvent $adverseEvent = null)
    {
        $this->adverseEvent = $adverseEvent;
        return $this;
    }

    /**
     * Gets as allergyIntolerance
     *
     * @return \TKusy\Hl7Fhir\R5\AllergyIntolerance
     */
    public function getAllergyIntolerance()
    {
        return $this->allergyIntolerance;
    }

    /**
     * Sets a new allergyIntolerance
     *
     * @param \TKusy\Hl7Fhir\R5\AllergyIntolerance $allergyIntolerance
     * @return self
     */
    public function setAllergyIntolerance(?\TKusy\Hl7Fhir\R5\AllergyIntolerance $allergyIntolerance = null)
    {
        $this->allergyIntolerance = $allergyIntolerance;
        return $this;
    }

    /**
     * Gets as appointment
     *
     * @return \TKusy\Hl7Fhir\R5\Appointment
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * Sets a new appointment
     *
     * @param \TKusy\Hl7Fhir\R5\Appointment $appointment
     * @return self
     */
    public function setAppointment(?\TKusy\Hl7Fhir\R5\Appointment $appointment = null)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * Gets as appointmentResponse
     *
     * @return \TKusy\Hl7Fhir\R5\AppointmentResponse
     */
    public function getAppointmentResponse()
    {
        return $this->appointmentResponse;
    }

    /**
     * Sets a new appointmentResponse
     *
     * @param \TKusy\Hl7Fhir\R5\AppointmentResponse $appointmentResponse
     * @return self
     */
    public function setAppointmentResponse(?\TKusy\Hl7Fhir\R5\AppointmentResponse $appointmentResponse = null)
    {
        $this->appointmentResponse = $appointmentResponse;
        return $this;
    }

    /**
     * Gets as artifactAssessment
     *
     * @return \TKusy\Hl7Fhir\R5\ArtifactAssessment
     */
    public function getArtifactAssessment()
    {
        return $this->artifactAssessment;
    }

    /**
     * Sets a new artifactAssessment
     *
     * @param \TKusy\Hl7Fhir\R5\ArtifactAssessment $artifactAssessment
     * @return self
     */
    public function setArtifactAssessment(?\TKusy\Hl7Fhir\R5\ArtifactAssessment $artifactAssessment = null)
    {
        $this->artifactAssessment = $artifactAssessment;
        return $this;
    }

    /**
     * Gets as auditEvent
     *
     * @return \TKusy\Hl7Fhir\R5\AuditEvent
     */
    public function getAuditEvent()
    {
        return $this->auditEvent;
    }

    /**
     * Sets a new auditEvent
     *
     * @param \TKusy\Hl7Fhir\R5\AuditEvent $auditEvent
     * @return self
     */
    public function setAuditEvent(?\TKusy\Hl7Fhir\R5\AuditEvent $auditEvent = null)
    {
        $this->auditEvent = $auditEvent;
        return $this;
    }

    /**
     * Gets as basic
     *
     * @return \TKusy\Hl7Fhir\R5\Basic
     */
    public function getBasic()
    {
        return $this->basic;
    }

    /**
     * Sets a new basic
     *
     * @param \TKusy\Hl7Fhir\R5\Basic $basic
     * @return self
     */
    public function setBasic(?\TKusy\Hl7Fhir\R5\Basic $basic = null)
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Gets as binary
     *
     * @return \TKusy\Hl7Fhir\R5\Binary
     */
    public function getBinary()
    {
        return $this->binary;
    }

    /**
     * Sets a new binary
     *
     * @param \TKusy\Hl7Fhir\R5\Binary $binary
     * @return self
     */
    public function setBinary(?\TKusy\Hl7Fhir\R5\Binary $binary = null)
    {
        $this->binary = $binary;
        return $this;
    }

    /**
     * Gets as biologicallyDerivedProduct
     *
     * @return \TKusy\Hl7Fhir\R5\BiologicallyDerivedProduct
     */
    public function getBiologicallyDerivedProduct()
    {
        return $this->biologicallyDerivedProduct;
    }

    /**
     * Sets a new biologicallyDerivedProduct
     *
     * @param \TKusy\Hl7Fhir\R5\BiologicallyDerivedProduct $biologicallyDerivedProduct
     * @return self
     */
    public function setBiologicallyDerivedProduct(?\TKusy\Hl7Fhir\R5\BiologicallyDerivedProduct $biologicallyDerivedProduct = null)
    {
        $this->biologicallyDerivedProduct = $biologicallyDerivedProduct;
        return $this;
    }

    /**
     * Gets as biologicallyDerivedProductDispense
     *
     * @return \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispense
     */
    public function getBiologicallyDerivedProductDispense()
    {
        return $this->biologicallyDerivedProductDispense;
    }

    /**
     * Sets a new biologicallyDerivedProductDispense
     *
     * @param \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispense $biologicallyDerivedProductDispense
     * @return self
     */
    public function setBiologicallyDerivedProductDispense(?\TKusy\Hl7Fhir\R5\BiologicallyDerivedProductDispense $biologicallyDerivedProductDispense = null)
    {
        $this->biologicallyDerivedProductDispense = $biologicallyDerivedProductDispense;
        return $this;
    }

    /**
     * Gets as bodyStructure
     *
     * @return \TKusy\Hl7Fhir\R5\BodyStructure
     */
    public function getBodyStructure()
    {
        return $this->bodyStructure;
    }

    /**
     * Sets a new bodyStructure
     *
     * @param \TKusy\Hl7Fhir\R5\BodyStructure $bodyStructure
     * @return self
     */
    public function setBodyStructure(?\TKusy\Hl7Fhir\R5\BodyStructure $bodyStructure = null)
    {
        $this->bodyStructure = $bodyStructure;
        return $this;
    }

    /**
     * Gets as bundle
     *
     * @return \TKusy\Hl7Fhir\R5\Bundle
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * Sets a new bundle
     *
     * @param \TKusy\Hl7Fhir\R5\Bundle $bundle
     * @return self
     */
    public function setBundle(?\TKusy\Hl7Fhir\R5\Bundle $bundle = null)
    {
        $this->bundle = $bundle;
        return $this;
    }

    /**
     * Gets as capabilityStatement
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatement
     */
    public function getCapabilityStatement()
    {
        return $this->capabilityStatement;
    }

    /**
     * Sets a new capabilityStatement
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatement $capabilityStatement
     * @return self
     */
    public function setCapabilityStatement(?\TKusy\Hl7Fhir\R5\CapabilityStatement $capabilityStatement = null)
    {
        $this->capabilityStatement = $capabilityStatement;
        return $this;
    }

    /**
     * Gets as carePlan
     *
     * @return \TKusy\Hl7Fhir\R5\CarePlan
     */
    public function getCarePlan()
    {
        return $this->carePlan;
    }

    /**
     * Sets a new carePlan
     *
     * @param \TKusy\Hl7Fhir\R5\CarePlan $carePlan
     * @return self
     */
    public function setCarePlan(?\TKusy\Hl7Fhir\R5\CarePlan $carePlan = null)
    {
        $this->carePlan = $carePlan;
        return $this;
    }

    /**
     * Gets as careTeam
     *
     * @return \TKusy\Hl7Fhir\R5\CareTeam
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * Sets a new careTeam
     *
     * @param \TKusy\Hl7Fhir\R5\CareTeam $careTeam
     * @return self
     */
    public function setCareTeam(?\TKusy\Hl7Fhir\R5\CareTeam $careTeam = null)
    {
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * Gets as chargeItem
     *
     * @return \TKusy\Hl7Fhir\R5\ChargeItem
     */
    public function getChargeItem()
    {
        return $this->chargeItem;
    }

    /**
     * Sets a new chargeItem
     *
     * @param \TKusy\Hl7Fhir\R5\ChargeItem $chargeItem
     * @return self
     */
    public function setChargeItem(?\TKusy\Hl7Fhir\R5\ChargeItem $chargeItem = null)
    {
        $this->chargeItem = $chargeItem;
        return $this;
    }

    /**
     * Gets as chargeItemDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\ChargeItemDefinition
     */
    public function getChargeItemDefinition()
    {
        return $this->chargeItemDefinition;
    }

    /**
     * Sets a new chargeItemDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\ChargeItemDefinition $chargeItemDefinition
     * @return self
     */
    public function setChargeItemDefinition(?\TKusy\Hl7Fhir\R5\ChargeItemDefinition $chargeItemDefinition = null)
    {
        $this->chargeItemDefinition = $chargeItemDefinition;
        return $this;
    }

    /**
     * Gets as citation
     *
     * @return \TKusy\Hl7Fhir\R5\Citation
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * Sets a new citation
     *
     * @param \TKusy\Hl7Fhir\R5\Citation $citation
     * @return self
     */
    public function setCitation(?\TKusy\Hl7Fhir\R5\Citation $citation = null)
    {
        $this->citation = $citation;
        return $this;
    }

    /**
     * Gets as claim
     *
     * @return \TKusy\Hl7Fhir\R5\Claim
     */
    public function getClaim()
    {
        return $this->claim;
    }

    /**
     * Sets a new claim
     *
     * @param \TKusy\Hl7Fhir\R5\Claim $claim
     * @return self
     */
    public function setClaim(?\TKusy\Hl7Fhir\R5\Claim $claim = null)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * Gets as claimResponse
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponse
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * Sets a new claimResponse
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponse $claimResponse
     * @return self
     */
    public function setClaimResponse(?\TKusy\Hl7Fhir\R5\ClaimResponse $claimResponse = null)
    {
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * Gets as clinicalImpression
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalImpression
     */
    public function getClinicalImpression()
    {
        return $this->clinicalImpression;
    }

    /**
     * Sets a new clinicalImpression
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalImpression $clinicalImpression
     * @return self
     */
    public function setClinicalImpression(?\TKusy\Hl7Fhir\R5\ClinicalImpression $clinicalImpression = null)
    {
        $this->clinicalImpression = $clinicalImpression;
        return $this;
    }

    /**
     * Gets as clinicalUseDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinition
     */
    public function getClinicalUseDefinition()
    {
        return $this->clinicalUseDefinition;
    }

    /**
     * Sets a new clinicalUseDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinition $clinicalUseDefinition
     * @return self
     */
    public function setClinicalUseDefinition(?\TKusy\Hl7Fhir\R5\ClinicalUseDefinition $clinicalUseDefinition = null)
    {
        $this->clinicalUseDefinition = $clinicalUseDefinition;
        return $this;
    }

    /**
     * Gets as codeSystem
     *
     * @return \TKusy\Hl7Fhir\R5\CodeSystem
     */
    public function getCodeSystem()
    {
        return $this->codeSystem;
    }

    /**
     * Sets a new codeSystem
     *
     * @param \TKusy\Hl7Fhir\R5\CodeSystem $codeSystem
     * @return self
     */
    public function setCodeSystem(?\TKusy\Hl7Fhir\R5\CodeSystem $codeSystem = null)
    {
        $this->codeSystem = $codeSystem;
        return $this;
    }

    /**
     * Gets as communication
     *
     * @return \TKusy\Hl7Fhir\R5\Communication
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * @param \TKusy\Hl7Fhir\R5\Communication $communication
     * @return self
     */
    public function setCommunication(?\TKusy\Hl7Fhir\R5\Communication $communication = null)
    {
        $this->communication = $communication;
        return $this;
    }

    /**
     * Gets as communicationRequest
     *
     * @return \TKusy\Hl7Fhir\R5\CommunicationRequest
     */
    public function getCommunicationRequest()
    {
        return $this->communicationRequest;
    }

    /**
     * Sets a new communicationRequest
     *
     * @param \TKusy\Hl7Fhir\R5\CommunicationRequest $communicationRequest
     * @return self
     */
    public function setCommunicationRequest(?\TKusy\Hl7Fhir\R5\CommunicationRequest $communicationRequest = null)
    {
        $this->communicationRequest = $communicationRequest;
        return $this;
    }

    /**
     * Gets as compartmentDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\CompartmentDefinition
     */
    public function getCompartmentDefinition()
    {
        return $this->compartmentDefinition;
    }

    /**
     * Sets a new compartmentDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\CompartmentDefinition $compartmentDefinition
     * @return self
     */
    public function setCompartmentDefinition(?\TKusy\Hl7Fhir\R5\CompartmentDefinition $compartmentDefinition = null)
    {
        $this->compartmentDefinition = $compartmentDefinition;
        return $this;
    }

    /**
     * Gets as composition
     *
     * @return \TKusy\Hl7Fhir\R5\Composition
     */
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * Sets a new composition
     *
     * @param \TKusy\Hl7Fhir\R5\Composition $composition
     * @return self
     */
    public function setComposition(?\TKusy\Hl7Fhir\R5\Composition $composition = null)
    {
        $this->composition = $composition;
        return $this;
    }

    /**
     * Gets as conceptMap
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMap
     */
    public function getConceptMap()
    {
        return $this->conceptMap;
    }

    /**
     * Sets a new conceptMap
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMap $conceptMap
     * @return self
     */
    public function setConceptMap(?\TKusy\Hl7Fhir\R5\ConceptMap $conceptMap = null)
    {
        $this->conceptMap = $conceptMap;
        return $this;
    }

    /**
     * Gets as condition
     *
     * @return \TKusy\Hl7Fhir\R5\Condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \TKusy\Hl7Fhir\R5\Condition $condition
     * @return self
     */
    public function setCondition(?\TKusy\Hl7Fhir\R5\Condition $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as conditionDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionDefinition
     */
    public function getConditionDefinition()
    {
        return $this->conditionDefinition;
    }

    /**
     * Sets a new conditionDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinition $conditionDefinition
     * @return self
     */
    public function setConditionDefinition(?\TKusy\Hl7Fhir\R5\ConditionDefinition $conditionDefinition = null)
    {
        $this->conditionDefinition = $conditionDefinition;
        return $this;
    }

    /**
     * Gets as consent
     *
     * @return \TKusy\Hl7Fhir\R5\Consent
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * Sets a new consent
     *
     * @param \TKusy\Hl7Fhir\R5\Consent $consent
     * @return self
     */
    public function setConsent(?\TKusy\Hl7Fhir\R5\Consent $consent = null)
    {
        $this->consent = $consent;
        return $this;
    }

    /**
     * Gets as contract
     *
     * @return \TKusy\Hl7Fhir\R5\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * @param \TKusy\Hl7Fhir\R5\Contract $contract
     * @return self
     */
    public function setContract(?\TKusy\Hl7Fhir\R5\Contract $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as coverage
     *
     * @return \TKusy\Hl7Fhir\R5\Coverage
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * @param \TKusy\Hl7Fhir\R5\Coverage $coverage
     * @return self
     */
    public function setCoverage(?\TKusy\Hl7Fhir\R5\Coverage $coverage = null)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as coverageEligibilityRequest
     *
     * @return \TKusy\Hl7Fhir\R5\CoverageEligibilityRequest
     */
    public function getCoverageEligibilityRequest()
    {
        return $this->coverageEligibilityRequest;
    }

    /**
     * Sets a new coverageEligibilityRequest
     *
     * @param \TKusy\Hl7Fhir\R5\CoverageEligibilityRequest $coverageEligibilityRequest
     * @return self
     */
    public function setCoverageEligibilityRequest(?\TKusy\Hl7Fhir\R5\CoverageEligibilityRequest $coverageEligibilityRequest = null)
    {
        $this->coverageEligibilityRequest = $coverageEligibilityRequest;
        return $this;
    }

    /**
     * Gets as coverageEligibilityResponse
     *
     * @return \TKusy\Hl7Fhir\R5\CoverageEligibilityResponse
     */
    public function getCoverageEligibilityResponse()
    {
        return $this->coverageEligibilityResponse;
    }

    /**
     * Sets a new coverageEligibilityResponse
     *
     * @param \TKusy\Hl7Fhir\R5\CoverageEligibilityResponse $coverageEligibilityResponse
     * @return self
     */
    public function setCoverageEligibilityResponse(?\TKusy\Hl7Fhir\R5\CoverageEligibilityResponse $coverageEligibilityResponse = null)
    {
        $this->coverageEligibilityResponse = $coverageEligibilityResponse;
        return $this;
    }

    /**
     * Gets as detectedIssue
     *
     * @return \TKusy\Hl7Fhir\R5\DetectedIssue
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }

    /**
     * Sets a new detectedIssue
     *
     * @param \TKusy\Hl7Fhir\R5\DetectedIssue $detectedIssue
     * @return self
     */
    public function setDetectedIssue(?\TKusy\Hl7Fhir\R5\DetectedIssue $detectedIssue = null)
    {
        $this->detectedIssue = $detectedIssue;
        return $this;
    }

    /**
     * Gets as device
     *
     * @return \TKusy\Hl7Fhir\R5\Device
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * @param \TKusy\Hl7Fhir\R5\Device $device
     * @return self
     */
    public function setDevice(?\TKusy\Hl7Fhir\R5\Device $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as deviceAssociation
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceAssociation
     */
    public function getDeviceAssociation()
    {
        return $this->deviceAssociation;
    }

    /**
     * Sets a new deviceAssociation
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceAssociation $deviceAssociation
     * @return self
     */
    public function setDeviceAssociation(?\TKusy\Hl7Fhir\R5\DeviceAssociation $deviceAssociation = null)
    {
        $this->deviceAssociation = $deviceAssociation;
        return $this;
    }

    /**
     * Gets as deviceDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinition
     */
    public function getDeviceDefinition()
    {
        return $this->deviceDefinition;
    }

    /**
     * Sets a new deviceDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinition $deviceDefinition
     * @return self
     */
    public function setDeviceDefinition(?\TKusy\Hl7Fhir\R5\DeviceDefinition $deviceDefinition = null)
    {
        $this->deviceDefinition = $deviceDefinition;
        return $this;
    }

    /**
     * Gets as deviceDispense
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDispense
     */
    public function getDeviceDispense()
    {
        return $this->deviceDispense;
    }

    /**
     * Sets a new deviceDispense
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDispense $deviceDispense
     * @return self
     */
    public function setDeviceDispense(?\TKusy\Hl7Fhir\R5\DeviceDispense $deviceDispense = null)
    {
        $this->deviceDispense = $deviceDispense;
        return $this;
    }

    /**
     * Gets as deviceMetric
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceMetric
     */
    public function getDeviceMetric()
    {
        return $this->deviceMetric;
    }

    /**
     * Sets a new deviceMetric
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceMetric $deviceMetric
     * @return self
     */
    public function setDeviceMetric(?\TKusy\Hl7Fhir\R5\DeviceMetric $deviceMetric = null)
    {
        $this->deviceMetric = $deviceMetric;
        return $this;
    }

    /**
     * Gets as deviceRequest
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceRequest
     */
    public function getDeviceRequest()
    {
        return $this->deviceRequest;
    }

    /**
     * Sets a new deviceRequest
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceRequest $deviceRequest
     * @return self
     */
    public function setDeviceRequest(?\TKusy\Hl7Fhir\R5\DeviceRequest $deviceRequest = null)
    {
        $this->deviceRequest = $deviceRequest;
        return $this;
    }

    /**
     * Gets as deviceUsage
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceUsage
     */
    public function getDeviceUsage()
    {
        return $this->deviceUsage;
    }

    /**
     * Sets a new deviceUsage
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceUsage $deviceUsage
     * @return self
     */
    public function setDeviceUsage(?\TKusy\Hl7Fhir\R5\DeviceUsage $deviceUsage = null)
    {
        $this->deviceUsage = $deviceUsage;
        return $this;
    }

    /**
     * Gets as diagnosticReport
     *
     * @return \TKusy\Hl7Fhir\R5\DiagnosticReport
     */
    public function getDiagnosticReport()
    {
        return $this->diagnosticReport;
    }

    /**
     * Sets a new diagnosticReport
     *
     * @param \TKusy\Hl7Fhir\R5\DiagnosticReport $diagnosticReport
     * @return self
     */
    public function setDiagnosticReport(?\TKusy\Hl7Fhir\R5\DiagnosticReport $diagnosticReport = null)
    {
        $this->diagnosticReport = $diagnosticReport;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * @return \TKusy\Hl7Fhir\R5\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \TKusy\Hl7Fhir\R5\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(?\TKusy\Hl7Fhir\R5\DocumentReference $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * @return \TKusy\Hl7Fhir\R5\Encounter
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * @param \TKusy\Hl7Fhir\R5\Encounter $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\Encounter $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as encounterHistory
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterHistory
     */
    public function getEncounterHistory()
    {
        return $this->encounterHistory;
    }

    /**
     * Sets a new encounterHistory
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterHistory $encounterHistory
     * @return self
     */
    public function setEncounterHistory(?\TKusy\Hl7Fhir\R5\EncounterHistory $encounterHistory = null)
    {
        $this->encounterHistory = $encounterHistory;
        return $this;
    }

    /**
     * Gets as endpoint
     *
     * @return \TKusy\Hl7Fhir\R5\Endpoint
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * @param \TKusy\Hl7Fhir\R5\Endpoint $endpoint
     * @return self
     */
    public function setEndpoint(?\TKusy\Hl7Fhir\R5\Endpoint $endpoint = null)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Gets as enrollmentRequest
     *
     * @return \TKusy\Hl7Fhir\R5\EnrollmentRequest
     */
    public function getEnrollmentRequest()
    {
        return $this->enrollmentRequest;
    }

    /**
     * Sets a new enrollmentRequest
     *
     * @param \TKusy\Hl7Fhir\R5\EnrollmentRequest $enrollmentRequest
     * @return self
     */
    public function setEnrollmentRequest(?\TKusy\Hl7Fhir\R5\EnrollmentRequest $enrollmentRequest = null)
    {
        $this->enrollmentRequest = $enrollmentRequest;
        return $this;
    }

    /**
     * Gets as enrollmentResponse
     *
     * @return \TKusy\Hl7Fhir\R5\EnrollmentResponse
     */
    public function getEnrollmentResponse()
    {
        return $this->enrollmentResponse;
    }

    /**
     * Sets a new enrollmentResponse
     *
     * @param \TKusy\Hl7Fhir\R5\EnrollmentResponse $enrollmentResponse
     * @return self
     */
    public function setEnrollmentResponse(?\TKusy\Hl7Fhir\R5\EnrollmentResponse $enrollmentResponse = null)
    {
        $this->enrollmentResponse = $enrollmentResponse;
        return $this;
    }

    /**
     * Gets as episodeOfCare
     *
     * @return \TKusy\Hl7Fhir\R5\EpisodeOfCare
     */
    public function getEpisodeOfCare()
    {
        return $this->episodeOfCare;
    }

    /**
     * Sets a new episodeOfCare
     *
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCare $episodeOfCare
     * @return self
     */
    public function setEpisodeOfCare(?\TKusy\Hl7Fhir\R5\EpisodeOfCare $episodeOfCare = null)
    {
        $this->episodeOfCare = $episodeOfCare;
        return $this;
    }

    /**
     * Gets as eventDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\EventDefinition
     */
    public function getEventDefinition()
    {
        return $this->eventDefinition;
    }

    /**
     * Sets a new eventDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\EventDefinition $eventDefinition
     * @return self
     */
    public function setEventDefinition(?\TKusy\Hl7Fhir\R5\EventDefinition $eventDefinition = null)
    {
        $this->eventDefinition = $eventDefinition;
        return $this;
    }

    /**
     * Gets as evidence
     *
     * @return \TKusy\Hl7Fhir\R5\Evidence
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Sets a new evidence
     *
     * @param \TKusy\Hl7Fhir\R5\Evidence $evidence
     * @return self
     */
    public function setEvidence(?\TKusy\Hl7Fhir\R5\Evidence $evidence = null)
    {
        $this->evidence = $evidence;
        return $this;
    }

    /**
     * Gets as evidenceReport
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceReport
     */
    public function getEvidenceReport()
    {
        return $this->evidenceReport;
    }

    /**
     * Sets a new evidenceReport
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceReport $evidenceReport
     * @return self
     */
    public function setEvidenceReport(?\TKusy\Hl7Fhir\R5\EvidenceReport $evidenceReport = null)
    {
        $this->evidenceReport = $evidenceReport;
        return $this;
    }

    /**
     * Gets as evidenceVariable
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceVariable
     */
    public function getEvidenceVariable()
    {
        return $this->evidenceVariable;
    }

    /**
     * Sets a new evidenceVariable
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariable $evidenceVariable
     * @return self
     */
    public function setEvidenceVariable(?\TKusy\Hl7Fhir\R5\EvidenceVariable $evidenceVariable = null)
    {
        $this->evidenceVariable = $evidenceVariable;
        return $this;
    }

    /**
     * Gets as exampleScenario
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenario
     */
    public function getExampleScenario()
    {
        return $this->exampleScenario;
    }

    /**
     * Sets a new exampleScenario
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenario $exampleScenario
     * @return self
     */
    public function setExampleScenario(?\TKusy\Hl7Fhir\R5\ExampleScenario $exampleScenario = null)
    {
        $this->exampleScenario = $exampleScenario;
        return $this;
    }

    /**
     * Gets as explanationOfBenefit
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefit
     */
    public function getExplanationOfBenefit()
    {
        return $this->explanationOfBenefit;
    }

    /**
     * Sets a new explanationOfBenefit
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefit $explanationOfBenefit
     * @return self
     */
    public function setExplanationOfBenefit(?\TKusy\Hl7Fhir\R5\ExplanationOfBenefit $explanationOfBenefit = null)
    {
        $this->explanationOfBenefit = $explanationOfBenefit;
        return $this;
    }

    /**
     * Gets as familyMemberHistory
     *
     * @return \TKusy\Hl7Fhir\R5\FamilyMemberHistory
     */
    public function getFamilyMemberHistory()
    {
        return $this->familyMemberHistory;
    }

    /**
     * Sets a new familyMemberHistory
     *
     * @param \TKusy\Hl7Fhir\R5\FamilyMemberHistory $familyMemberHistory
     * @return self
     */
    public function setFamilyMemberHistory(?\TKusy\Hl7Fhir\R5\FamilyMemberHistory $familyMemberHistory = null)
    {
        $this->familyMemberHistory = $familyMemberHistory;
        return $this;
    }

    /**
     * Gets as flag
     *
     * @return \TKusy\Hl7Fhir\R5\Flag
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Sets a new flag
     *
     * @param \TKusy\Hl7Fhir\R5\Flag $flag
     * @return self
     */
    public function setFlag(?\TKusy\Hl7Fhir\R5\Flag $flag = null)
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Gets as formularyItem
     *
     * @return \TKusy\Hl7Fhir\R5\FormularyItem
     */
    public function getFormularyItem()
    {
        return $this->formularyItem;
    }

    /**
     * Sets a new formularyItem
     *
     * @param \TKusy\Hl7Fhir\R5\FormularyItem $formularyItem
     * @return self
     */
    public function setFormularyItem(?\TKusy\Hl7Fhir\R5\FormularyItem $formularyItem = null)
    {
        $this->formularyItem = $formularyItem;
        return $this;
    }

    /**
     * Gets as genomicStudy
     *
     * @return \TKusy\Hl7Fhir\R5\GenomicStudy
     */
    public function getGenomicStudy()
    {
        return $this->genomicStudy;
    }

    /**
     * Sets a new genomicStudy
     *
     * @param \TKusy\Hl7Fhir\R5\GenomicStudy $genomicStudy
     * @return self
     */
    public function setGenomicStudy(?\TKusy\Hl7Fhir\R5\GenomicStudy $genomicStudy = null)
    {
        $this->genomicStudy = $genomicStudy;
        return $this;
    }

    /**
     * Gets as goal
     *
     * @return \TKusy\Hl7Fhir\R5\Goal
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Sets a new goal
     *
     * @param \TKusy\Hl7Fhir\R5\Goal $goal
     * @return self
     */
    public function setGoal(?\TKusy\Hl7Fhir\R5\Goal $goal = null)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * Gets as graphDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\GraphDefinition
     */
    public function getGraphDefinition()
    {
        return $this->graphDefinition;
    }

    /**
     * Sets a new graphDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\GraphDefinition $graphDefinition
     * @return self
     */
    public function setGraphDefinition(?\TKusy\Hl7Fhir\R5\GraphDefinition $graphDefinition = null)
    {
        $this->graphDefinition = $graphDefinition;
        return $this;
    }

    /**
     * Gets as group
     *
     * @return \TKusy\Hl7Fhir\R5\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * @param \TKusy\Hl7Fhir\R5\Group $group
     * @return self
     */
    public function setGroup(?\TKusy\Hl7Fhir\R5\Group $group = null)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Gets as guidanceResponse
     *
     * @return \TKusy\Hl7Fhir\R5\GuidanceResponse
     */
    public function getGuidanceResponse()
    {
        return $this->guidanceResponse;
    }

    /**
     * Sets a new guidanceResponse
     *
     * @param \TKusy\Hl7Fhir\R5\GuidanceResponse $guidanceResponse
     * @return self
     */
    public function setGuidanceResponse(?\TKusy\Hl7Fhir\R5\GuidanceResponse $guidanceResponse = null)
    {
        $this->guidanceResponse = $guidanceResponse;
        return $this;
    }

    /**
     * Gets as healthcareService
     *
     * @return \TKusy\Hl7Fhir\R5\HealthcareService
     */
    public function getHealthcareService()
    {
        return $this->healthcareService;
    }

    /**
     * Sets a new healthcareService
     *
     * @param \TKusy\Hl7Fhir\R5\HealthcareService $healthcareService
     * @return self
     */
    public function setHealthcareService(?\TKusy\Hl7Fhir\R5\HealthcareService $healthcareService = null)
    {
        $this->healthcareService = $healthcareService;
        return $this;
    }

    /**
     * Gets as imagingSelection
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingSelection
     */
    public function getImagingSelection()
    {
        return $this->imagingSelection;
    }

    /**
     * Sets a new imagingSelection
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingSelection $imagingSelection
     * @return self
     */
    public function setImagingSelection(?\TKusy\Hl7Fhir\R5\ImagingSelection $imagingSelection = null)
    {
        $this->imagingSelection = $imagingSelection;
        return $this;
    }

    /**
     * Gets as imagingStudy
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingStudy
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * Sets a new imagingStudy
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingStudy $imagingStudy
     * @return self
     */
    public function setImagingStudy(?\TKusy\Hl7Fhir\R5\ImagingStudy $imagingStudy = null)
    {
        $this->imagingStudy = $imagingStudy;
        return $this;
    }

    /**
     * Gets as immunization
     *
     * @return \TKusy\Hl7Fhir\R5\Immunization
     */
    public function getImmunization()
    {
        return $this->immunization;
    }

    /**
     * Sets a new immunization
     *
     * @param \TKusy\Hl7Fhir\R5\Immunization $immunization
     * @return self
     */
    public function setImmunization(?\TKusy\Hl7Fhir\R5\Immunization $immunization = null)
    {
        $this->immunization = $immunization;
        return $this;
    }

    /**
     * Gets as immunizationEvaluation
     *
     * @return \TKusy\Hl7Fhir\R5\ImmunizationEvaluation
     */
    public function getImmunizationEvaluation()
    {
        return $this->immunizationEvaluation;
    }

    /**
     * Sets a new immunizationEvaluation
     *
     * @param \TKusy\Hl7Fhir\R5\ImmunizationEvaluation $immunizationEvaluation
     * @return self
     */
    public function setImmunizationEvaluation(?\TKusy\Hl7Fhir\R5\ImmunizationEvaluation $immunizationEvaluation = null)
    {
        $this->immunizationEvaluation = $immunizationEvaluation;
        return $this;
    }

    /**
     * Gets as immunizationRecommendation
     *
     * @return \TKusy\Hl7Fhir\R5\ImmunizationRecommendation
     */
    public function getImmunizationRecommendation()
    {
        return $this->immunizationRecommendation;
    }

    /**
     * Sets a new immunizationRecommendation
     *
     * @param \TKusy\Hl7Fhir\R5\ImmunizationRecommendation $immunizationRecommendation
     * @return self
     */
    public function setImmunizationRecommendation(?\TKusy\Hl7Fhir\R5\ImmunizationRecommendation $immunizationRecommendation = null)
    {
        $this->immunizationRecommendation = $immunizationRecommendation;
        return $this;
    }

    /**
     * Gets as implementationGuide
     *
     * @return \TKusy\Hl7Fhir\R5\ImplementationGuide
     */
    public function getImplementationGuide()
    {
        return $this->implementationGuide;
    }

    /**
     * Sets a new implementationGuide
     *
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuide $implementationGuide
     * @return self
     */
    public function setImplementationGuide(?\TKusy\Hl7Fhir\R5\ImplementationGuide $implementationGuide = null)
    {
        $this->implementationGuide = $implementationGuide;
        return $this;
    }

    /**
     * Gets as ingredient
     *
     * @return \TKusy\Hl7Fhir\R5\Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * @param \TKusy\Hl7Fhir\R5\Ingredient $ingredient
     * @return self
     */
    public function setIngredient(?\TKusy\Hl7Fhir\R5\Ingredient $ingredient = null)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Gets as insurancePlan
     *
     * @return \TKusy\Hl7Fhir\R5\InsurancePlan
     */
    public function getInsurancePlan()
    {
        return $this->insurancePlan;
    }

    /**
     * Sets a new insurancePlan
     *
     * @param \TKusy\Hl7Fhir\R5\InsurancePlan $insurancePlan
     * @return self
     */
    public function setInsurancePlan(?\TKusy\Hl7Fhir\R5\InsurancePlan $insurancePlan = null)
    {
        $this->insurancePlan = $insurancePlan;
        return $this;
    }

    /**
     * Gets as inventoryItem
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryItem
     */
    public function getInventoryItem()
    {
        return $this->inventoryItem;
    }

    /**
     * Sets a new inventoryItem
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryItem $inventoryItem
     * @return self
     */
    public function setInventoryItem(?\TKusy\Hl7Fhir\R5\InventoryItem $inventoryItem = null)
    {
        $this->inventoryItem = $inventoryItem;
        return $this;
    }

    /**
     * Gets as inventoryReport
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryReport
     */
    public function getInventoryReport()
    {
        return $this->inventoryReport;
    }

    /**
     * Sets a new inventoryReport
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryReport $inventoryReport
     * @return self
     */
    public function setInventoryReport(?\TKusy\Hl7Fhir\R5\InventoryReport $inventoryReport = null)
    {
        $this->inventoryReport = $inventoryReport;
        return $this;
    }

    /**
     * Gets as invoice
     *
     * @return \TKusy\Hl7Fhir\R5\Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice
     *
     * @param \TKusy\Hl7Fhir\R5\Invoice $invoice
     * @return self
     */
    public function setInvoice(?\TKusy\Hl7Fhir\R5\Invoice $invoice = null)
    {
        $this->invoice = $invoice;
        return $this;
    }

    /**
     * Gets as library
     *
     * @return \TKusy\Hl7Fhir\R5\Library
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * Sets a new library
     *
     * @param \TKusy\Hl7Fhir\R5\Library $library
     * @return self
     */
    public function setLibrary(?\TKusy\Hl7Fhir\R5\Library $library = null)
    {
        $this->library = $library;
        return $this;
    }

    /**
     * Gets as linkage
     *
     * @return \TKusy\Hl7Fhir\R5\Linkage
     */
    public function getLinkage()
    {
        return $this->linkage;
    }

    /**
     * Sets a new linkage
     *
     * @param \TKusy\Hl7Fhir\R5\Linkage $linkage
     * @return self
     */
    public function setLinkage(?\TKusy\Hl7Fhir\R5\Linkage $linkage = null)
    {
        $this->linkage = $linkage;
        return $this;
    }

    /**
     * Gets as list
     *
     * @return \TKusy\Hl7Fhir\R5\ListXsd
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list
     *
     * @param \TKusy\Hl7Fhir\R5\ListXsd $list
     * @return self
     */
    public function setList(?\TKusy\Hl7Fhir\R5\ListXsd $list = null)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return \TKusy\Hl7Fhir\R5\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \TKusy\Hl7Fhir\R5\Location $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\Location $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as manufacturedItemDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\ManufacturedItemDefinition
     */
    public function getManufacturedItemDefinition()
    {
        return $this->manufacturedItemDefinition;
    }

    /**
     * Sets a new manufacturedItemDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\ManufacturedItemDefinition $manufacturedItemDefinition
     * @return self
     */
    public function setManufacturedItemDefinition(?\TKusy\Hl7Fhir\R5\ManufacturedItemDefinition $manufacturedItemDefinition = null)
    {
        $this->manufacturedItemDefinition = $manufacturedItemDefinition;
        return $this;
    }

    /**
     * Gets as measure
     *
     * @return \TKusy\Hl7Fhir\R5\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * @param \TKusy\Hl7Fhir\R5\Measure $measure
     * @return self
     */
    public function setMeasure(?\TKusy\Hl7Fhir\R5\Measure $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Gets as measureReport
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureReport
     */
    public function getMeasureReport()
    {
        return $this->measureReport;
    }

    /**
     * Sets a new measureReport
     *
     * @param \TKusy\Hl7Fhir\R5\MeasureReport $measureReport
     * @return self
     */
    public function setMeasureReport(?\TKusy\Hl7Fhir\R5\MeasureReport $measureReport = null)
    {
        $this->measureReport = $measureReport;
        return $this;
    }

    /**
     * Gets as medication
     *
     * @return \TKusy\Hl7Fhir\R5\Medication
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Sets a new medication
     *
     * @param \TKusy\Hl7Fhir\R5\Medication $medication
     * @return self
     */
    public function setMedication(?\TKusy\Hl7Fhir\R5\Medication $medication = null)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * Gets as medicationAdministration
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationAdministration
     */
    public function getMedicationAdministration()
    {
        return $this->medicationAdministration;
    }

    /**
     * Sets a new medicationAdministration
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationAdministration $medicationAdministration
     * @return self
     */
    public function setMedicationAdministration(?\TKusy\Hl7Fhir\R5\MedicationAdministration $medicationAdministration = null)
    {
        $this->medicationAdministration = $medicationAdministration;
        return $this;
    }

    /**
     * Gets as medicationDispense
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationDispense
     */
    public function getMedicationDispense()
    {
        return $this->medicationDispense;
    }

    /**
     * Sets a new medicationDispense
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationDispense $medicationDispense
     * @return self
     */
    public function setMedicationDispense(?\TKusy\Hl7Fhir\R5\MedicationDispense $medicationDispense = null)
    {
        $this->medicationDispense = $medicationDispense;
        return $this;
    }

    /**
     * Gets as medicationKnowledge
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledge
     */
    public function getMedicationKnowledge()
    {
        return $this->medicationKnowledge;
    }

    /**
     * Sets a new medicationKnowledge
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledge $medicationKnowledge
     * @return self
     */
    public function setMedicationKnowledge(?\TKusy\Hl7Fhir\R5\MedicationKnowledge $medicationKnowledge = null)
    {
        $this->medicationKnowledge = $medicationKnowledge;
        return $this;
    }

    /**
     * Gets as medicationRequest
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationRequest
     */
    public function getMedicationRequest()
    {
        return $this->medicationRequest;
    }

    /**
     * Sets a new medicationRequest
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationRequest $medicationRequest
     * @return self
     */
    public function setMedicationRequest(?\TKusy\Hl7Fhir\R5\MedicationRequest $medicationRequest = null)
    {
        $this->medicationRequest = $medicationRequest;
        return $this;
    }

    /**
     * Gets as medicationStatement
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationStatement
     */
    public function getMedicationStatement()
    {
        return $this->medicationStatement;
    }

    /**
     * Sets a new medicationStatement
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationStatement $medicationStatement
     * @return self
     */
    public function setMedicationStatement(?\TKusy\Hl7Fhir\R5\MedicationStatement $medicationStatement = null)
    {
        $this->medicationStatement = $medicationStatement;
        return $this;
    }

    /**
     * Gets as medicinalProductDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\MedicinalProductDefinition
     */
    public function getMedicinalProductDefinition()
    {
        return $this->medicinalProductDefinition;
    }

    /**
     * Sets a new medicinalProductDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinition $medicinalProductDefinition
     * @return self
     */
    public function setMedicinalProductDefinition(?\TKusy\Hl7Fhir\R5\MedicinalProductDefinition $medicinalProductDefinition = null)
    {
        $this->medicinalProductDefinition = $medicinalProductDefinition;
        return $this;
    }

    /**
     * Gets as messageDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\MessageDefinition
     */
    public function getMessageDefinition()
    {
        return $this->messageDefinition;
    }

    /**
     * Sets a new messageDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\MessageDefinition $messageDefinition
     * @return self
     */
    public function setMessageDefinition(?\TKusy\Hl7Fhir\R5\MessageDefinition $messageDefinition = null)
    {
        $this->messageDefinition = $messageDefinition;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * @return \TKusy\Hl7Fhir\R5\MessageHeader
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * @param \TKusy\Hl7Fhir\R5\MessageHeader $messageHeader
     * @return self
     */
    public function setMessageHeader(?\TKusy\Hl7Fhir\R5\MessageHeader $messageHeader = null)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as molecularSequence
     *
     * @return \TKusy\Hl7Fhir\R5\MolecularSequence
     */
    public function getMolecularSequence()
    {
        return $this->molecularSequence;
    }

    /**
     * Sets a new molecularSequence
     *
     * @param \TKusy\Hl7Fhir\R5\MolecularSequence $molecularSequence
     * @return self
     */
    public function setMolecularSequence(?\TKusy\Hl7Fhir\R5\MolecularSequence $molecularSequence = null)
    {
        $this->molecularSequence = $molecularSequence;
        return $this;
    }

    /**
     * Gets as namingSystem
     *
     * @return \TKusy\Hl7Fhir\R5\NamingSystem
     */
    public function getNamingSystem()
    {
        return $this->namingSystem;
    }

    /**
     * Sets a new namingSystem
     *
     * @param \TKusy\Hl7Fhir\R5\NamingSystem $namingSystem
     * @return self
     */
    public function setNamingSystem(?\TKusy\Hl7Fhir\R5\NamingSystem $namingSystem = null)
    {
        $this->namingSystem = $namingSystem;
        return $this;
    }

    /**
     * Gets as nutritionIntake
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionIntake
     */
    public function getNutritionIntake()
    {
        return $this->nutritionIntake;
    }

    /**
     * Sets a new nutritionIntake
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionIntake $nutritionIntake
     * @return self
     */
    public function setNutritionIntake(?\TKusy\Hl7Fhir\R5\NutritionIntake $nutritionIntake = null)
    {
        $this->nutritionIntake = $nutritionIntake;
        return $this;
    }

    /**
     * Gets as nutritionOrder
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionOrder
     */
    public function getNutritionOrder()
    {
        return $this->nutritionOrder;
    }

    /**
     * Sets a new nutritionOrder
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionOrder $nutritionOrder
     * @return self
     */
    public function setNutritionOrder(?\TKusy\Hl7Fhir\R5\NutritionOrder $nutritionOrder = null)
    {
        $this->nutritionOrder = $nutritionOrder;
        return $this;
    }

    /**
     * Gets as nutritionProduct
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionProduct
     */
    public function getNutritionProduct()
    {
        return $this->nutritionProduct;
    }

    /**
     * Sets a new nutritionProduct
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionProduct $nutritionProduct
     * @return self
     */
    public function setNutritionProduct(?\TKusy\Hl7Fhir\R5\NutritionProduct $nutritionProduct = null)
    {
        $this->nutritionProduct = $nutritionProduct;
        return $this;
    }

    /**
     * Gets as observation
     *
     * @return \TKusy\Hl7Fhir\R5\Observation
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Sets a new observation
     *
     * @param \TKusy\Hl7Fhir\R5\Observation $observation
     * @return self
     */
    public function setObservation(?\TKusy\Hl7Fhir\R5\Observation $observation = null)
    {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Gets as observationDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\ObservationDefinition
     */
    public function getObservationDefinition()
    {
        return $this->observationDefinition;
    }

    /**
     * Sets a new observationDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\ObservationDefinition $observationDefinition
     * @return self
     */
    public function setObservationDefinition(?\TKusy\Hl7Fhir\R5\ObservationDefinition $observationDefinition = null)
    {
        $this->observationDefinition = $observationDefinition;
        return $this;
    }

    /**
     * Gets as operationDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\OperationDefinition
     */
    public function getOperationDefinition()
    {
        return $this->operationDefinition;
    }

    /**
     * Sets a new operationDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\OperationDefinition $operationDefinition
     * @return self
     */
    public function setOperationDefinition(?\TKusy\Hl7Fhir\R5\OperationDefinition $operationDefinition = null)
    {
        $this->operationDefinition = $operationDefinition;
        return $this;
    }

    /**
     * Gets as operationOutcome
     *
     * @return \TKusy\Hl7Fhir\R5\OperationOutcome
     */
    public function getOperationOutcome()
    {
        return $this->operationOutcome;
    }

    /**
     * Sets a new operationOutcome
     *
     * @param \TKusy\Hl7Fhir\R5\OperationOutcome $operationOutcome
     * @return self
     */
    public function setOperationOutcome(?\TKusy\Hl7Fhir\R5\OperationOutcome $operationOutcome = null)
    {
        $this->operationOutcome = $operationOutcome;
        return $this;
    }

    /**
     * Gets as organization
     *
     * @return \TKusy\Hl7Fhir\R5\Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * @param \TKusy\Hl7Fhir\R5\Organization $organization
     * @return self
     */
    public function setOrganization(?\TKusy\Hl7Fhir\R5\Organization $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as organizationAffiliation
     *
     * @return \TKusy\Hl7Fhir\R5\OrganizationAffiliation
     */
    public function getOrganizationAffiliation()
    {
        return $this->organizationAffiliation;
    }

    /**
     * Sets a new organizationAffiliation
     *
     * @param \TKusy\Hl7Fhir\R5\OrganizationAffiliation $organizationAffiliation
     * @return self
     */
    public function setOrganizationAffiliation(?\TKusy\Hl7Fhir\R5\OrganizationAffiliation $organizationAffiliation = null)
    {
        $this->organizationAffiliation = $organizationAffiliation;
        return $this;
    }

    /**
     * Gets as packagedProductDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\PackagedProductDefinition
     */
    public function getPackagedProductDefinition()
    {
        return $this->packagedProductDefinition;
    }

    /**
     * Sets a new packagedProductDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinition $packagedProductDefinition
     * @return self
     */
    public function setPackagedProductDefinition(?\TKusy\Hl7Fhir\R5\PackagedProductDefinition $packagedProductDefinition = null)
    {
        $this->packagedProductDefinition = $packagedProductDefinition;
        return $this;
    }

    /**
     * Gets as patient
     *
     * @return \TKusy\Hl7Fhir\R5\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * @param \TKusy\Hl7Fhir\R5\Patient $patient
     * @return self
     */
    public function setPatient(?\TKusy\Hl7Fhir\R5\Patient $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as paymentNotice
     *
     * @return \TKusy\Hl7Fhir\R5\PaymentNotice
     */
    public function getPaymentNotice()
    {
        return $this->paymentNotice;
    }

    /**
     * Sets a new paymentNotice
     *
     * @param \TKusy\Hl7Fhir\R5\PaymentNotice $paymentNotice
     * @return self
     */
    public function setPaymentNotice(?\TKusy\Hl7Fhir\R5\PaymentNotice $paymentNotice = null)
    {
        $this->paymentNotice = $paymentNotice;
        return $this;
    }

    /**
     * Gets as paymentReconciliation
     *
     * @return \TKusy\Hl7Fhir\R5\PaymentReconciliation
     */
    public function getPaymentReconciliation()
    {
        return $this->paymentReconciliation;
    }

    /**
     * Sets a new paymentReconciliation
     *
     * @param \TKusy\Hl7Fhir\R5\PaymentReconciliation $paymentReconciliation
     * @return self
     */
    public function setPaymentReconciliation(?\TKusy\Hl7Fhir\R5\PaymentReconciliation $paymentReconciliation = null)
    {
        $this->paymentReconciliation = $paymentReconciliation;
        return $this;
    }

    /**
     * Gets as permission
     *
     * @return \TKusy\Hl7Fhir\R5\Permission
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Sets a new permission
     *
     * @param \TKusy\Hl7Fhir\R5\Permission $permission
     * @return self
     */
    public function setPermission(?\TKusy\Hl7Fhir\R5\Permission $permission = null)
    {
        $this->permission = $permission;
        return $this;
    }

    /**
     * Gets as person
     *
     * @return \TKusy\Hl7Fhir\R5\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \TKusy\Hl7Fhir\R5\Person $person
     * @return self
     */
    public function setPerson(?\TKusy\Hl7Fhir\R5\Person $person = null)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as planDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\PlanDefinition
     */
    public function getPlanDefinition()
    {
        return $this->planDefinition;
    }

    /**
     * Sets a new planDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\PlanDefinition $planDefinition
     * @return self
     */
    public function setPlanDefinition(?\TKusy\Hl7Fhir\R5\PlanDefinition $planDefinition = null)
    {
        $this->planDefinition = $planDefinition;
        return $this;
    }

    /**
     * Gets as practitioner
     *
     * @return \TKusy\Hl7Fhir\R5\Practitioner
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * Sets a new practitioner
     *
     * @param \TKusy\Hl7Fhir\R5\Practitioner $practitioner
     * @return self
     */
    public function setPractitioner(?\TKusy\Hl7Fhir\R5\Practitioner $practitioner = null)
    {
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * Gets as practitionerRole
     *
     * @return \TKusy\Hl7Fhir\R5\PractitionerRole
     */
    public function getPractitionerRole()
    {
        return $this->practitionerRole;
    }

    /**
     * Sets a new practitionerRole
     *
     * @param \TKusy\Hl7Fhir\R5\PractitionerRole $practitionerRole
     * @return self
     */
    public function setPractitionerRole(?\TKusy\Hl7Fhir\R5\PractitionerRole $practitionerRole = null)
    {
        $this->practitionerRole = $practitionerRole;
        return $this;
    }

    /**
     * Gets as procedure
     *
     * @return \TKusy\Hl7Fhir\R5\Procedure
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * @param \TKusy\Hl7Fhir\R5\Procedure $procedure
     * @return self
     */
    public function setProcedure(?\TKusy\Hl7Fhir\R5\Procedure $procedure = null)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Gets as provenance
     *
     * @return \TKusy\Hl7Fhir\R5\Provenance
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * Sets a new provenance
     *
     * @param \TKusy\Hl7Fhir\R5\Provenance $provenance
     * @return self
     */
    public function setProvenance(?\TKusy\Hl7Fhir\R5\Provenance $provenance = null)
    {
        $this->provenance = $provenance;
        return $this;
    }

    /**
     * Gets as questionnaire
     *
     * @return \TKusy\Hl7Fhir\R5\Questionnaire
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Sets a new questionnaire
     *
     * @param \TKusy\Hl7Fhir\R5\Questionnaire $questionnaire
     * @return self
     */
    public function setQuestionnaire(?\TKusy\Hl7Fhir\R5\Questionnaire $questionnaire = null)
    {
        $this->questionnaire = $questionnaire;
        return $this;
    }

    /**
     * Gets as questionnaireResponse
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireResponse
     */
    public function getQuestionnaireResponse()
    {
        return $this->questionnaireResponse;
    }

    /**
     * Sets a new questionnaireResponse
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireResponse $questionnaireResponse
     * @return self
     */
    public function setQuestionnaireResponse(?\TKusy\Hl7Fhir\R5\QuestionnaireResponse $questionnaireResponse = null)
    {
        $this->questionnaireResponse = $questionnaireResponse;
        return $this;
    }

    /**
     * Gets as regulatedAuthorization
     *
     * @return \TKusy\Hl7Fhir\R5\RegulatedAuthorization
     */
    public function getRegulatedAuthorization()
    {
        return $this->regulatedAuthorization;
    }

    /**
     * Sets a new regulatedAuthorization
     *
     * @param \TKusy\Hl7Fhir\R5\RegulatedAuthorization $regulatedAuthorization
     * @return self
     */
    public function setRegulatedAuthorization(?\TKusy\Hl7Fhir\R5\RegulatedAuthorization $regulatedAuthorization = null)
    {
        $this->regulatedAuthorization = $regulatedAuthorization;
        return $this;
    }

    /**
     * Gets as relatedPerson
     *
     * @return \TKusy\Hl7Fhir\R5\RelatedPerson
     */
    public function getRelatedPerson()
    {
        return $this->relatedPerson;
    }

    /**
     * Sets a new relatedPerson
     *
     * @param \TKusy\Hl7Fhir\R5\RelatedPerson $relatedPerson
     * @return self
     */
    public function setRelatedPerson(?\TKusy\Hl7Fhir\R5\RelatedPerson $relatedPerson = null)
    {
        $this->relatedPerson = $relatedPerson;
        return $this;
    }

    /**
     * Gets as requestOrchestration
     *
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestration
     */
    public function getRequestOrchestration()
    {
        return $this->requestOrchestration;
    }

    /**
     * Sets a new requestOrchestration
     *
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestration $requestOrchestration
     * @return self
     */
    public function setRequestOrchestration(?\TKusy\Hl7Fhir\R5\RequestOrchestration $requestOrchestration = null)
    {
        $this->requestOrchestration = $requestOrchestration;
        return $this;
    }

    /**
     * Gets as requirements
     *
     * @return \TKusy\Hl7Fhir\R5\Requirements
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Sets a new requirements
     *
     * @param \TKusy\Hl7Fhir\R5\Requirements $requirements
     * @return self
     */
    public function setRequirements(?\TKusy\Hl7Fhir\R5\Requirements $requirements = null)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Gets as researchStudy
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchStudy
     */
    public function getResearchStudy()
    {
        return $this->researchStudy;
    }

    /**
     * Sets a new researchStudy
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchStudy $researchStudy
     * @return self
     */
    public function setResearchStudy(?\TKusy\Hl7Fhir\R5\ResearchStudy $researchStudy = null)
    {
        $this->researchStudy = $researchStudy;
        return $this;
    }

    /**
     * Gets as researchSubject
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchSubject
     */
    public function getResearchSubject()
    {
        return $this->researchSubject;
    }

    /**
     * Sets a new researchSubject
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchSubject $researchSubject
     * @return self
     */
    public function setResearchSubject(?\TKusy\Hl7Fhir\R5\ResearchSubject $researchSubject = null)
    {
        $this->researchSubject = $researchSubject;
        return $this;
    }

    /**
     * Gets as riskAssessment
     *
     * @return \TKusy\Hl7Fhir\R5\RiskAssessment
     */
    public function getRiskAssessment()
    {
        return $this->riskAssessment;
    }

    /**
     * Sets a new riskAssessment
     *
     * @param \TKusy\Hl7Fhir\R5\RiskAssessment $riskAssessment
     * @return self
     */
    public function setRiskAssessment(?\TKusy\Hl7Fhir\R5\RiskAssessment $riskAssessment = null)
    {
        $this->riskAssessment = $riskAssessment;
        return $this;
    }

    /**
     * Gets as schedule
     *
     * @return \TKusy\Hl7Fhir\R5\Schedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * @param \TKusy\Hl7Fhir\R5\Schedule $schedule
     * @return self
     */
    public function setSchedule(?\TKusy\Hl7Fhir\R5\Schedule $schedule = null)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as searchParameter
     *
     * @return \TKusy\Hl7Fhir\R5\SearchParameter
     */
    public function getSearchParameter()
    {
        return $this->searchParameter;
    }

    /**
     * Sets a new searchParameter
     *
     * @param \TKusy\Hl7Fhir\R5\SearchParameter $searchParameter
     * @return self
     */
    public function setSearchParameter(?\TKusy\Hl7Fhir\R5\SearchParameter $searchParameter = null)
    {
        $this->searchParameter = $searchParameter;
        return $this;
    }

    /**
     * Gets as serviceRequest
     *
     * @return \TKusy\Hl7Fhir\R5\ServiceRequest
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * @param \TKusy\Hl7Fhir\R5\ServiceRequest $serviceRequest
     * @return self
     */
    public function setServiceRequest(?\TKusy\Hl7Fhir\R5\ServiceRequest $serviceRequest = null)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }

    /**
     * Gets as slot
     *
     * @return \TKusy\Hl7Fhir\R5\Slot
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Sets a new slot
     *
     * @param \TKusy\Hl7Fhir\R5\Slot $slot
     * @return self
     */
    public function setSlot(?\TKusy\Hl7Fhir\R5\Slot $slot = null)
    {
        $this->slot = $slot;
        return $this;
    }

    /**
     * Gets as specimen
     *
     * @return \TKusy\Hl7Fhir\R5\Specimen
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * @param \TKusy\Hl7Fhir\R5\Specimen $specimen
     * @return self
     */
    public function setSpecimen(?\TKusy\Hl7Fhir\R5\Specimen $specimen = null)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Gets as specimenDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenDefinition
     */
    public function getSpecimenDefinition()
    {
        return $this->specimenDefinition;
    }

    /**
     * Sets a new specimenDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenDefinition $specimenDefinition
     * @return self
     */
    public function setSpecimenDefinition(?\TKusy\Hl7Fhir\R5\SpecimenDefinition $specimenDefinition = null)
    {
        $this->specimenDefinition = $specimenDefinition;
        return $this;
    }

    /**
     * Gets as structureDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\StructureDefinition
     */
    public function getStructureDefinition()
    {
        return $this->structureDefinition;
    }

    /**
     * Sets a new structureDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\StructureDefinition $structureDefinition
     * @return self
     */
    public function setStructureDefinition(?\TKusy\Hl7Fhir\R5\StructureDefinition $structureDefinition = null)
    {
        $this->structureDefinition = $structureDefinition;
        return $this;
    }

    /**
     * Gets as structureMap
     *
     * @return \TKusy\Hl7Fhir\R5\StructureMap
     */
    public function getStructureMap()
    {
        return $this->structureMap;
    }

    /**
     * Sets a new structureMap
     *
     * @param \TKusy\Hl7Fhir\R5\StructureMap $structureMap
     * @return self
     */
    public function setStructureMap(?\TKusy\Hl7Fhir\R5\StructureMap $structureMap = null)
    {
        $this->structureMap = $structureMap;
        return $this;
    }

    /**
     * Gets as subscription
     *
     * @return \TKusy\Hl7Fhir\R5\Subscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * @param \TKusy\Hl7Fhir\R5\Subscription $subscription
     * @return self
     */
    public function setSubscription(?\TKusy\Hl7Fhir\R5\Subscription $subscription = null)
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * Gets as subscriptionStatus
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionStatus
     */
    public function getSubscriptionStatus()
    {
        return $this->subscriptionStatus;
    }

    /**
     * Sets a new subscriptionStatus
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionStatus $subscriptionStatus
     * @return self
     */
    public function setSubscriptionStatus(?\TKusy\Hl7Fhir\R5\SubscriptionStatus $subscriptionStatus = null)
    {
        $this->subscriptionStatus = $subscriptionStatus;
        return $this;
    }

    /**
     * Gets as subscriptionTopic
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionTopic
     */
    public function getSubscriptionTopic()
    {
        return $this->subscriptionTopic;
    }

    /**
     * Sets a new subscriptionTopic
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopic $subscriptionTopic
     * @return self
     */
    public function setSubscriptionTopic(?\TKusy\Hl7Fhir\R5\SubscriptionTopic $subscriptionTopic = null)
    {
        $this->subscriptionTopic = $subscriptionTopic;
        return $this;
    }

    /**
     * Gets as substance
     *
     * @return \TKusy\Hl7Fhir\R5\Substance
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Sets a new substance
     *
     * @param \TKusy\Hl7Fhir\R5\Substance $substance
     * @return self
     */
    public function setSubstance(?\TKusy\Hl7Fhir\R5\Substance $substance = null)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Gets as substanceDefinition
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceDefinition
     */
    public function getSubstanceDefinition()
    {
        return $this->substanceDefinition;
    }

    /**
     * Sets a new substanceDefinition
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceDefinition $substanceDefinition
     * @return self
     */
    public function setSubstanceDefinition(?\TKusy\Hl7Fhir\R5\SubstanceDefinition $substanceDefinition = null)
    {
        $this->substanceDefinition = $substanceDefinition;
        return $this;
    }

    /**
     * Gets as substanceNucleicAcid
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceNucleicAcid
     */
    public function getSubstanceNucleicAcid()
    {
        return $this->substanceNucleicAcid;
    }

    /**
     * Sets a new substanceNucleicAcid
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceNucleicAcid $substanceNucleicAcid
     * @return self
     */
    public function setSubstanceNucleicAcid(?\TKusy\Hl7Fhir\R5\SubstanceNucleicAcid $substanceNucleicAcid = null)
    {
        $this->substanceNucleicAcid = $substanceNucleicAcid;
        return $this;
    }

    /**
     * Gets as substancePolymer
     *
     * @return \TKusy\Hl7Fhir\R5\SubstancePolymer
     */
    public function getSubstancePolymer()
    {
        return $this->substancePolymer;
    }

    /**
     * Sets a new substancePolymer
     *
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymer $substancePolymer
     * @return self
     */
    public function setSubstancePolymer(?\TKusy\Hl7Fhir\R5\SubstancePolymer $substancePolymer = null)
    {
        $this->substancePolymer = $substancePolymer;
        return $this;
    }

    /**
     * Gets as substanceProtein
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceProtein
     */
    public function getSubstanceProtein()
    {
        return $this->substanceProtein;
    }

    /**
     * Sets a new substanceProtein
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceProtein $substanceProtein
     * @return self
     */
    public function setSubstanceProtein(?\TKusy\Hl7Fhir\R5\SubstanceProtein $substanceProtein = null)
    {
        $this->substanceProtein = $substanceProtein;
        return $this;
    }

    /**
     * Gets as substanceReferenceInformation
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceReferenceInformation
     */
    public function getSubstanceReferenceInformation()
    {
        return $this->substanceReferenceInformation;
    }

    /**
     * Sets a new substanceReferenceInformation
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceReferenceInformation $substanceReferenceInformation
     * @return self
     */
    public function setSubstanceReferenceInformation(?\TKusy\Hl7Fhir\R5\SubstanceReferenceInformation $substanceReferenceInformation = null)
    {
        $this->substanceReferenceInformation = $substanceReferenceInformation;
        return $this;
    }

    /**
     * Gets as substanceSourceMaterial
     *
     * @return \TKusy\Hl7Fhir\R5\SubstanceSourceMaterial
     */
    public function getSubstanceSourceMaterial()
    {
        return $this->substanceSourceMaterial;
    }

    /**
     * Sets a new substanceSourceMaterial
     *
     * @param \TKusy\Hl7Fhir\R5\SubstanceSourceMaterial $substanceSourceMaterial
     * @return self
     */
    public function setSubstanceSourceMaterial(?\TKusy\Hl7Fhir\R5\SubstanceSourceMaterial $substanceSourceMaterial = null)
    {
        $this->substanceSourceMaterial = $substanceSourceMaterial;
        return $this;
    }

    /**
     * Gets as supplyDelivery
     *
     * @return \TKusy\Hl7Fhir\R5\SupplyDelivery
     */
    public function getSupplyDelivery()
    {
        return $this->supplyDelivery;
    }

    /**
     * Sets a new supplyDelivery
     *
     * @param \TKusy\Hl7Fhir\R5\SupplyDelivery $supplyDelivery
     * @return self
     */
    public function setSupplyDelivery(?\TKusy\Hl7Fhir\R5\SupplyDelivery $supplyDelivery = null)
    {
        $this->supplyDelivery = $supplyDelivery;
        return $this;
    }

    /**
     * Gets as supplyRequest
     *
     * @return \TKusy\Hl7Fhir\R5\SupplyRequest
     */
    public function getSupplyRequest()
    {
        return $this->supplyRequest;
    }

    /**
     * Sets a new supplyRequest
     *
     * @param \TKusy\Hl7Fhir\R5\SupplyRequest $supplyRequest
     * @return self
     */
    public function setSupplyRequest(?\TKusy\Hl7Fhir\R5\SupplyRequest $supplyRequest = null)
    {
        $this->supplyRequest = $supplyRequest;
        return $this;
    }

    /**
     * Gets as task
     *
     * @return \TKusy\Hl7Fhir\R5\Task
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Sets a new task
     *
     * @param \TKusy\Hl7Fhir\R5\Task $task
     * @return self
     */
    public function setTask(?\TKusy\Hl7Fhir\R5\Task $task = null)
    {
        $this->task = $task;
        return $this;
    }

    /**
     * Gets as terminologyCapabilities
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilities
     */
    public function getTerminologyCapabilities()
    {
        return $this->terminologyCapabilities;
    }

    /**
     * Sets a new terminologyCapabilities
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilities $terminologyCapabilities
     * @return self
     */
    public function setTerminologyCapabilities(?\TKusy\Hl7Fhir\R5\TerminologyCapabilities $terminologyCapabilities = null)
    {
        $this->terminologyCapabilities = $terminologyCapabilities;
        return $this;
    }

    /**
     * Gets as testPlan
     *
     * @return \TKusy\Hl7Fhir\R5\TestPlan
     */
    public function getTestPlan()
    {
        return $this->testPlan;
    }

    /**
     * Sets a new testPlan
     *
     * @param \TKusy\Hl7Fhir\R5\TestPlan $testPlan
     * @return self
     */
    public function setTestPlan(?\TKusy\Hl7Fhir\R5\TestPlan $testPlan = null)
    {
        $this->testPlan = $testPlan;
        return $this;
    }

    /**
     * Gets as testReport
     *
     * @return \TKusy\Hl7Fhir\R5\TestReport
     */
    public function getTestReport()
    {
        return $this->testReport;
    }

    /**
     * Sets a new testReport
     *
     * @param \TKusy\Hl7Fhir\R5\TestReport $testReport
     * @return self
     */
    public function setTestReport(?\TKusy\Hl7Fhir\R5\TestReport $testReport = null)
    {
        $this->testReport = $testReport;
        return $this;
    }

    /**
     * Gets as testScript
     *
     * @return \TKusy\Hl7Fhir\R5\TestScript
     */
    public function getTestScript()
    {
        return $this->testScript;
    }

    /**
     * Sets a new testScript
     *
     * @param \TKusy\Hl7Fhir\R5\TestScript $testScript
     * @return self
     */
    public function setTestScript(?\TKusy\Hl7Fhir\R5\TestScript $testScript = null)
    {
        $this->testScript = $testScript;
        return $this;
    }

    /**
     * Gets as transport
     *
     * @return \TKusy\Hl7Fhir\R5\Transport
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Sets a new transport
     *
     * @param \TKusy\Hl7Fhir\R5\Transport $transport
     * @return self
     */
    public function setTransport(?\TKusy\Hl7Fhir\R5\Transport $transport = null)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * Gets as valueSet
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSet
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSet $valueSet
     * @return self
     */
    public function setValueSet(?\TKusy\Hl7Fhir\R5\ValueSet $valueSet = null)
    {
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Gets as verificationResult
     *
     * @return \TKusy\Hl7Fhir\R5\VerificationResult
     */
    public function getVerificationResult()
    {
        return $this->verificationResult;
    }

    /**
     * Sets a new verificationResult
     *
     * @param \TKusy\Hl7Fhir\R5\VerificationResult $verificationResult
     * @return self
     */
    public function setVerificationResult(?\TKusy\Hl7Fhir\R5\VerificationResult $verificationResult = null)
    {
        $this->verificationResult = $verificationResult;
        return $this;
    }

    /**
     * Gets as visionPrescription
     *
     * @return \TKusy\Hl7Fhir\R5\VisionPrescription
     */
    public function getVisionPrescription()
    {
        return $this->visionPrescription;
    }

    /**
     * Sets a new visionPrescription
     *
     * @param \TKusy\Hl7Fhir\R5\VisionPrescription $visionPrescription
     * @return self
     */
    public function setVisionPrescription(?\TKusy\Hl7Fhir\R5\VisionPrescription $visionPrescription = null)
    {
        $this->visionPrescription = $visionPrescription;
        return $this;
    }

    /**
     * Gets as parameters
     *
     * @return \TKusy\Hl7Fhir\R5\Parameters
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \TKusy\Hl7Fhir\R5\Parameters $parameters
     * @return self
     */
    public function setParameters(?\TKusy\Hl7Fhir\R5\Parameters $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

