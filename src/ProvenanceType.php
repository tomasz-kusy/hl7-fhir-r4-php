<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ProvenanceType
 *
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Provenance
 */
class ProvenanceType extends DomainResourceType
{

    /**
     * The Reference(s) that were generated or updated by the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $target
     */
    private $target = [
        
    ];

    /**
     * The period during which the activity occurred. (choose any one of occurred*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $occurredPeriod
     */
    private $occurredPeriod = null;

    /**
     * The period during which the activity occurred. (choose any one of occurred*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurredDateTime
     */
    private $occurredDateTime = null;

    /**
     * The instant of time at which the activity was recorded.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $recorded
     */
    private $recorded = null;

    /**
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $policy
     */
    private $policy = [
        
    ];

    /**
     * Where the activity occurred, if relevant.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * The reason that the activity was taking place.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reason
     */
    private $reason = [
        
    ];

    /**
     * An activity is something that occurs over a period of time and acts upon or with entities; it may include consuming, processing, transforming, modifying, relocating, using, or generating entities.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $activity
     */
    private $activity = null;

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @var \TKusy\Hl7FhirR4\ProvenanceAgentType[] $agent
     */
    private $agent = [
        
    ];

    /**
     * An entity used in this activity.
     *
     * @var \TKusy\Hl7FhirR4\ProvenanceEntityType[] $entity
     */
    private $entity = [
        
    ];

    /**
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     *
     * @var \TKusy\Hl7FhirR4\SignatureType[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Adds as target
     *
     * The Reference(s) that were generated or updated by the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
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
     * The Reference(s) that were generated or updated by the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
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
     * The Reference(s) that were generated or updated by the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
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
     * The Reference(s) that were generated or updated by the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
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
     * The Reference(s) that were generated or updated by the activity described in this resource. A provenance can point to more than one target if multiple resources were created/updated by the same activity.
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
     * Gets as occurredPeriod
     *
     * The period during which the activity occurred. (choose any one of occurred*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getOccurredPeriod()
    {
        return $this->occurredPeriod;
    }

    /**
     * Sets a new occurredPeriod
     *
     * The period during which the activity occurred. (choose any one of occurred*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $occurredPeriod
     * @return self
     */
    public function setOccurredPeriod(\TKusy\Hl7FhirR4\PeriodType $occurredPeriod)
    {
        $this->occurredPeriod = $occurredPeriod;
        return $this;
    }

    /**
     * Gets as occurredDateTime
     *
     * The period during which the activity occurred. (choose any one of occurred*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getOccurredDateTime()
    {
        return $this->occurredDateTime;
    }

    /**
     * Sets a new occurredDateTime
     *
     * The period during which the activity occurred. (choose any one of occurred*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $occurredDateTime
     * @return self
     */
    public function setOccurredDateTime(\TKusy\Hl7FhirR4\DateTimeType $occurredDateTime)
    {
        $this->occurredDateTime = $occurredDateTime;
        return $this;
    }

    /**
     * Gets as recorded
     *
     * The instant of time at which the activity was recorded.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * Sets a new recorded
     *
     * The instant of time at which the activity was recorded.
     *
     * @param \TKusy\Hl7FhirR4\InstantType $recorded
     * @return self
     */
    public function setRecorded(\TKusy\Hl7FhirR4\InstantType $recorded)
    {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * Adds as policy
     *
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UriType $policy
     */
    public function addToPolicy(\TKusy\Hl7FhirR4\UriType $policy)
    {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * isset policy
     *
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     *
     * @return \TKusy\Hl7FhirR4\UriType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Policy or plan the activity was defined by. Typically, a single activity may have multiple applicable policy documents, such as patient consent, guarantor funding, etc.
     *
     * @param \TKusy\Hl7FhirR4\UriType[] $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Gets as location
     *
     * Where the activity occurred, if relevant.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Where the activity occurred, if relevant.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The reason that the activity was taking place.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reason
     */
    public function addToReason(\TKusy\Hl7FhirR4\CodeableConceptType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * The reason that the activity was taking place.
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
     * The reason that the activity was taking place.
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
     * The reason that the activity was taking place.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The reason that the activity was taking place.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $reason
     * @return self
     */
    public function setReason(array $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as activity
     *
     * An activity is something that occurs over a period of time and acts upon or with entities; it may include consuming, processing, transforming, modifying, relocating, using, or generating entities.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * An activity is something that occurs over a period of time and acts upon or with entities; it may include consuming, processing, transforming, modifying, relocating, using, or generating entities.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $activity
     * @return self
     */
    public function setActivity(\TKusy\Hl7FhirR4\CodeableConceptType $activity)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Adds as agent
     *
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ProvenanceAgentType $agent
     */
    public function addToAgent(\TKusy\Hl7FhirR4\ProvenanceAgentType $agent)
    {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * isset agent
     *
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgent($index)
    {
        return isset($this->agent[$index]);
    }

    /**
     * unset agent
     *
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgent($index)
    {
        unset($this->agent[$index]);
    }

    /**
     * Gets as agent
     *
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @return \TKusy\Hl7FhirR4\ProvenanceAgentType[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Sets a new agent
     *
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @param \TKusy\Hl7FhirR4\ProvenanceAgentType[] $agent
     * @return self
     */
    public function setAgent(array $agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * Adds as entity
     *
     * An entity used in this activity.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ProvenanceEntityType $entity
     */
    public function addToEntity(\TKusy\Hl7FhirR4\ProvenanceEntityType $entity)
    {
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * isset entity
     *
     * An entity used in this activity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntity($index)
    {
        return isset($this->entity[$index]);
    }

    /**
     * unset entity
     *
     * An entity used in this activity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntity($index)
    {
        unset($this->entity[$index]);
    }

    /**
     * Gets as entity
     *
     * An entity used in this activity.
     *
     * @return \TKusy\Hl7FhirR4\ProvenanceEntityType[]
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Sets a new entity
     *
     * An entity used in this activity.
     *
     * @param \TKusy\Hl7FhirR4\ProvenanceEntityType[] $entity
     * @return self
     */
    public function setEntity(array $entity)
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Adds as signature
     *
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SignatureType $signature
     */
    public function addToSignature(\TKusy\Hl7FhirR4\SignatureType $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     *
     * @return \TKusy\Hl7FhirR4\SignatureType[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * A digital signature on the target Reference(s). The signer should match a Provenance.agent. The purpose of the signature is indicated.
     *
     * @param \TKusy\Hl7FhirR4\SignatureType[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

