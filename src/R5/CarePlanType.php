<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CarePlanType
 *
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CarePlan
 */
class CarePlanType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * A higher-level request resource (i.e. a plan, proposal or order) that is fulfilled in whole or in part by this care plan.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * Completed or terminated care plan whose function is taken by this new care plan.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $replaces
     */
    private $replaces = null;

    /**
     * A larger care plan of which this particular care plan is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestStatusType $status
     */
    private $status = null;

    /**
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     *
     * @var \TKusy\Hl7Fhir\R5\CarePlanIntentType $intent
     */
    private $intent = null;

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Human-friendly name for the care plan.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A description of the scope and nature of the plan.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which this CarePlan was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Represents when this particular CarePlan record was created in the system, which is often a system-generated date.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $created
     */
    private $created = null;

    /**
     * When populated, the custodian is responsible for the care plan. The care plan is attributed to the custodian.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $custodian
     */
    private $custodian = null;

    /**
     * Identifies the individual(s), organization or device who provided the contents of the care plan.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $contributor
     */
    private $contributor = null;

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $careTeam
     */
    private $careTeam = null;

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $addresses
     */
    private $addresses = null;

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan. These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $goal
     */
    private $goal = null;

    /**
     * Identifies an action that has occurred or is a planned action to occur as part of the plan. For example, a medication to be used, lab tests to perform, self-monitoring that has occurred, education etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CarePlanActivityType[] $activity
     */
    private $activity = null;

    /**
     * General notes about the care plan not covered elsewhere.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Adds as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * isset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesCanonical($index)
    {
        return isset($this->instantiatesCanonical[$index]);
    }

    /**
     * unset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesCanonical($index)
    {
        unset($this->instantiatesCanonical[$index]);
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Adds as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7Fhir\R5\UriType $instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * isset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesUri($index)
    {
        return isset($this->instantiatesUri[$index]);
    }

    /**
     * unset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesUri($index)
    {
        unset($this->instantiatesUri[$index]);
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri = null)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A higher-level request resource (i.e. a plan, proposal or order) that is fulfilled in whole or in part by this care plan.
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
     * A higher-level request resource (i.e. a plan, proposal or order) that is fulfilled in whole or in part by this care plan.
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
     * A higher-level request resource (i.e. a plan, proposal or order) that is fulfilled in whole or in part by this care plan.
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
     * A higher-level request resource (i.e. a plan, proposal or order) that is fulfilled in whole or in part by this care plan.
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
     * A higher-level request resource (i.e. a plan, proposal or order) that is fulfilled in whole or in part by this care plan.
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
     * Adds as replaces
     *
     * Completed or terminated care plan whose function is taken by this new care plan.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $replaces
     */
    public function addToReplaces(\TKusy\Hl7Fhir\R5\ReferenceType $replaces)
    {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * isset replaces
     *
     * Completed or terminated care plan whose function is taken by this new care plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplaces($index)
    {
        return isset($this->replaces[$index]);
    }

    /**
     * unset replaces
     *
     * Completed or terminated care plan whose function is taken by this new care plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplaces($index)
    {
        unset($this->replaces[$index]);
    }

    /**
     * Gets as replaces
     *
     * Completed or terminated care plan whose function is taken by this new care plan.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getReplaces()
    {
        return $this->replaces;
    }

    /**
     * Sets a new replaces
     *
     * Completed or terminated care plan whose function is taken by this new care plan.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $replaces
     * @return self
     */
    public function setReplaces(array $replaces = null)
    {
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * A larger care plan of which this particular care plan is a component or step.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R5\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A larger care plan of which this particular care plan is a component or step.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartOf($index)
    {
        return isset($this->partOf[$index]);
    }

    /**
     * unset partOf
     *
     * A larger care plan of which this particular care plan is a component or step.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartOf($index)
    {
        unset($this->partOf[$index]);
    }

    /**
     * Gets as partOf
     *
     * A larger care plan of which this particular care plan is a component or step.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A larger care plan of which this particular care plan is a component or step.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\RequestStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     *
     * @return \TKusy\Hl7Fhir\R5\CarePlanIntentType
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Sets a new intent
     *
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     *
     * @param \TKusy\Hl7Fhir\R5\CarePlanIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7Fhir\R5\CarePlanIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Adds as category
     *
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as title
     *
     * Human-friendly name for the care plan.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Human-friendly name for the care plan.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the scope and nature of the plan.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the scope and nature of the plan.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Identifies the patient or group whose intended care is described by the plan.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Identifies the patient or group whose intended care is described by the plan.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter during which this CarePlan was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this CarePlan was created or to which the creation of this record is tightly associated.
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
     * Gets as period
     *
     * Indicates when the plan did (or is intended to) come into effect and end.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Indicates when the plan did (or is intended to) come into effect and end.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as created
     *
     * Represents when this particular CarePlan record was created in the system, which is often a system-generated date.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * Represents when this particular CarePlan record was created in the system, which is often a system-generated date.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $created
     * @return self
     */
    public function setCreated(?\TKusy\Hl7Fhir\R5\DateTimeType $created = null)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as custodian
     *
     * When populated, the custodian is responsible for the care plan. The care plan is attributed to the custodian.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * Sets a new custodian
     *
     * When populated, the custodian is responsible for the care plan. The care plan is attributed to the custodian.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $custodian
     * @return self
     */
    public function setCustodian(?\TKusy\Hl7Fhir\R5\ReferenceType $custodian = null)
    {
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * Identifies the individual(s), organization or device who provided the contents of the care plan.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $contributor
     */
    public function addToContributor(\TKusy\Hl7Fhir\R5\ReferenceType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * Identifies the individual(s), organization or device who provided the contents of the care plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * Identifies the individual(s), organization or device who provided the contents of the care plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * Identifies the individual(s), organization or device who provided the contents of the care plan.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * Identifies the individual(s), organization or device who provided the contents of the care plan.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as careTeam
     *
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $careTeam
     */
    public function addToCareTeam(\TKusy\Hl7Fhir\R5\ReferenceType $careTeam)
    {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * isset careTeam
     *
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCareTeam($index)
    {
        return isset($this->careTeam[$index]);
    }

    /**
     * unset careTeam
     *
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCareTeam($index)
    {
        unset($this->careTeam[$index]);
    }

    /**
     * Gets as careTeam
     *
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * Sets a new careTeam
     *
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $careTeam
     * @return self
     */
    public function setCareTeam(array $careTeam = null)
    {
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * Adds as addresses
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $addresses
     */
    public function addToAddresses(\TKusy\Hl7Fhir\R5\CodeableReferenceType $addresses)
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * isset addresses
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Identifies portions of the patient's record that specifically influenced the formation of the plan. These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Identifies portions of the patient's record that specifically influenced the formation of the plan. These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInfo($index)
    {
        return isset($this->supportingInfo[$index]);
    }

    /**
     * unset supportingInfo
     *
     * Identifies portions of the patient's record that specifically influenced the formation of the plan. These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInfo($index)
    {
        unset($this->supportingInfo[$index]);
    }

    /**
     * Gets as supportingInfo
     *
     * Identifies portions of the patient's record that specifically influenced the formation of the plan. These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Identifies portions of the patient's record that specifically influenced the formation of the plan. These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo = null)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Adds as goal
     *
     * Describes the intended objective(s) of carrying out the care plan.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $goal
     */
    public function addToGoal(\TKusy\Hl7Fhir\R5\ReferenceType $goal)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * isset goal
     *
     * Describes the intended objective(s) of carrying out the care plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoal($index)
    {
        return isset($this->goal[$index]);
    }

    /**
     * unset goal
     *
     * Describes the intended objective(s) of carrying out the care plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoal($index)
    {
        unset($this->goal[$index]);
    }

    /**
     * Gets as goal
     *
     * Describes the intended objective(s) of carrying out the care plan.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Sets a new goal
     *
     * Describes the intended objective(s) of carrying out the care plan.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $goal
     * @return self
     */
    public function setGoal(array $goal = null)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * Adds as activity
     *
     * Identifies an action that has occurred or is a planned action to occur as part of the plan. For example, a medication to be used, lab tests to perform, self-monitoring that has occurred, education etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CarePlanActivityType $activity
     */
    public function addToActivity(\TKusy\Hl7Fhir\R5\CarePlanActivityType $activity)
    {
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * isset activity
     *
     * Identifies an action that has occurred or is a planned action to occur as part of the plan. For example, a medication to be used, lab tests to perform, self-monitoring that has occurred, education etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActivity($index)
    {
        return isset($this->activity[$index]);
    }

    /**
     * unset activity
     *
     * Identifies an action that has occurred or is a planned action to occur as part of the plan. For example, a medication to be used, lab tests to perform, self-monitoring that has occurred, education etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActivity($index)
    {
        unset($this->activity[$index]);
    }

    /**
     * Gets as activity
     *
     * Identifies an action that has occurred or is a planned action to occur as part of the plan. For example, a medication to be used, lab tests to perform, self-monitoring that has occurred, education etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CarePlanActivityType[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * Identifies an action that has occurred or is a planned action to occur as part of the plan. For example, a medication to be used, lab tests to perform, self-monitoring that has occurred, education etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CarePlanActivityType[] $activity
     * @return self
     */
    public function setActivity(array $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Adds as note
     *
     * General notes about the care plan not covered elsewhere.
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
     * General notes about the care plan not covered elsewhere.
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
     * General notes about the care plan not covered elsewhere.
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
     * General notes about the care plan not covered elsewhere.
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
     * General notes about the care plan not covered elsewhere.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

