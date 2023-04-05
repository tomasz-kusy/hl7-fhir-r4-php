<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenType
 *
 * A sample to be used for analysis.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Specimen
 */
class SpecimenType extends DomainResourceType
{

    /**
     * Id for specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $accessionIdentifier
     */
    private $accessionIdentifier = null;

    /**
     * The availability of the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenStatusType $status
     */
    private $status = null;

    /**
     * The kind of material that forms the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Where the specimen came from. This may be from patient(s), from a location (e.g., the source of an environmental sample), or a sampling of a substance, a biologically-derived product, or a device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Time when specimen is received by the testing laboratory for processing or testing.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $receivedTime
     */
    private $receivedTime = null;

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $parent
     */
    private $parent = null;

    /**
     * Details concerning a service request that required a specimen to be collected.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $request
     */
    private $request = null;

    /**
     * This element signifies if the specimen is part of a group or pooled.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenCombinedType $combined
     */
    private $combined = null;

    /**
     * The role or reason for the specimen in the testing workflow.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $role
     */
    private $role = null;

    /**
     * A physical feature or landmark on a specimen, highlighted for context by the collector of the specimen (e.g. surgeon), that identifies the type of feature as well as its meaning (e.g. the red ink indicating the resection margin of the right lobe of the excised prostate tissue or wire loop at radiologically suspected tumor location).
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenFeatureType[] $feature
     */
    private $feature = null;

    /**
     * Details concerning the specimen collection.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenCollectionType $collection
     */
    private $collection = null;

    /**
     * Details concerning processing and processing steps for the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenProcessingType[] $processing
     */
    private $processing = null;

    /**
     * The container holding the specimen. The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenContainerType[] $container
     */
    private $container = null;

    /**
     * A mode or state of being that describes the nature of the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $condition
     */
    private $condition = null;

    /**
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Id for specimen.
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
     * Id for specimen.
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
     * Id for specimen.
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
     * Id for specimen.
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
     * Id for specimen.
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
     * Gets as accessionIdentifier
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getAccessionIdentifier()
    {
        return $this->accessionIdentifier;
    }

    /**
     * Sets a new accessionIdentifier
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $accessionIdentifier
     * @return self
     */
    public function setAccessionIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $accessionIdentifier = null)
    {
        $this->accessionIdentifier = $accessionIdentifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The availability of the specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The availability of the specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\SpecimenStatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * The kind of material that forms the specimen.
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
     * The kind of material that forms the specimen.
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
     * Gets as subject
     *
     * Where the specimen came from. This may be from patient(s), from a location (e.g., the source of an environmental sample), or a sampling of a substance, a biologically-derived product, or a device.
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
     * Where the specimen came from. This may be from patient(s), from a location (e.g., the source of an environmental sample), or a sampling of a substance, a biologically-derived product, or a device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as receivedTime
     *
     * Time when specimen is received by the testing laboratory for processing or testing.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }

    /**
     * Sets a new receivedTime
     *
     * Time when specimen is received by the testing laboratory for processing or testing.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $receivedTime
     * @return self
     */
    public function setReceivedTime(?\TKusy\Hl7Fhir\R5\DateTimeType $receivedTime = null)
    {
        $this->receivedTime = $receivedTime;
        return $this;
    }

    /**
     * Adds as parent
     *
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $parent
     */
    public function addToParent(\TKusy\Hl7Fhir\R5\ReferenceType $parent)
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * isset parent
     *
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParent($index)
    {
        return isset($this->parent[$index]);
    }

    /**
     * unset parent
     *
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParent($index)
    {
        unset($this->parent[$index]);
    }

    /**
     * Gets as parent
     *
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $parent
     * @return self
     */
    public function setParent(array $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Adds as request
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $request
     */
    public function addToRequest(\TKusy\Hl7Fhir\R5\ReferenceType $request)
    {
        $this->request[] = $request;
        return $this;
    }

    /**
     * isset request
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequest($index)
    {
        return isset($this->request[$index]);
    }

    /**
     * unset request
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequest($index)
    {
        unset($this->request[$index]);
    }

    /**
     * Gets as request
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $request
     * @return self
     */
    public function setRequest(array $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as combined
     *
     * This element signifies if the specimen is part of a group or pooled.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenCombinedType
     */
    public function getCombined()
    {
        return $this->combined;
    }

    /**
     * Sets a new combined
     *
     * This element signifies if the specimen is part of a group or pooled.
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenCombinedType $combined
     * @return self
     */
    public function setCombined(?\TKusy\Hl7Fhir\R5\SpecimenCombinedType $combined = null)
    {
        $this->combined = $combined;
        return $this;
    }

    /**
     * Adds as role
     *
     * The role or reason for the specimen in the testing workflow.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    public function addToRole(\TKusy\Hl7Fhir\R5\CodeableConceptType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * The role or reason for the specimen in the testing workflow.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * The role or reason for the specimen in the testing workflow.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * The role or reason for the specimen in the testing workflow.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The role or reason for the specimen in the testing workflow.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as feature
     *
     * A physical feature or landmark on a specimen, highlighted for context by the collector of the specimen (e.g. surgeon), that identifies the type of feature as well as its meaning (e.g. the red ink indicating the resection margin of the right lobe of the excised prostate tissue or wire loop at radiologically suspected tumor location).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SpecimenFeatureType $feature
     */
    public function addToFeature(\TKusy\Hl7Fhir\R5\SpecimenFeatureType $feature)
    {
        $this->feature[] = $feature;
        return $this;
    }

    /**
     * isset feature
     *
     * A physical feature or landmark on a specimen, highlighted for context by the collector of the specimen (e.g. surgeon), that identifies the type of feature as well as its meaning (e.g. the red ink indicating the resection margin of the right lobe of the excised prostate tissue or wire loop at radiologically suspected tumor location).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeature($index)
    {
        return isset($this->feature[$index]);
    }

    /**
     * unset feature
     *
     * A physical feature or landmark on a specimen, highlighted for context by the collector of the specimen (e.g. surgeon), that identifies the type of feature as well as its meaning (e.g. the red ink indicating the resection margin of the right lobe of the excised prostate tissue or wire loop at radiologically suspected tumor location).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeature($index)
    {
        unset($this->feature[$index]);
    }

    /**
     * Gets as feature
     *
     * A physical feature or landmark on a specimen, highlighted for context by the collector of the specimen (e.g. surgeon), that identifies the type of feature as well as its meaning (e.g. the red ink indicating the resection margin of the right lobe of the excised prostate tissue or wire loop at radiologically suspected tumor location).
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenFeatureType[]
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Sets a new feature
     *
     * A physical feature or landmark on a specimen, highlighted for context by the collector of the specimen (e.g. surgeon), that identifies the type of feature as well as its meaning (e.g. the red ink indicating the resection margin of the right lobe of the excised prostate tissue or wire loop at radiologically suspected tumor location).
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenFeatureType[] $feature
     * @return self
     */
    public function setFeature(array $feature = null)
    {
        $this->feature = $feature;
        return $this;
    }

    /**
     * Gets as collection
     *
     * Details concerning the specimen collection.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenCollectionType
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Sets a new collection
     *
     * Details concerning the specimen collection.
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenCollectionType $collection
     * @return self
     */
    public function setCollection(?\TKusy\Hl7Fhir\R5\SpecimenCollectionType $collection = null)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * Adds as processing
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SpecimenProcessingType $processing
     */
    public function addToProcessing(\TKusy\Hl7Fhir\R5\SpecimenProcessingType $processing)
    {
        $this->processing[] = $processing;
        return $this;
    }

    /**
     * isset processing
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessing($index)
    {
        return isset($this->processing[$index]);
    }

    /**
     * unset processing
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessing($index)
    {
        unset($this->processing[$index]);
    }

    /**
     * Gets as processing
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenProcessingType[]
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * Sets a new processing
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenProcessingType[] $processing
     * @return self
     */
    public function setProcessing(array $processing = null)
    {
        $this->processing = $processing;
        return $this;
    }

    /**
     * Adds as container
     *
     * The container holding the specimen. The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SpecimenContainerType $container
     */
    public function addToContainer(\TKusy\Hl7Fhir\R5\SpecimenContainerType $container)
    {
        $this->container[] = $container;
        return $this;
    }

    /**
     * isset container
     *
     * The container holding the specimen. The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainer($index)
    {
        return isset($this->container[$index]);
    }

    /**
     * unset container
     *
     * The container holding the specimen. The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainer($index)
    {
        unset($this->container[$index]);
    }

    /**
     * Gets as container
     *
     * The container holding the specimen. The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenContainerType[]
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Sets a new container
     *
     * The container holding the specimen. The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     *
     * @param \TKusy\Hl7Fhir\R5\SpecimenContainerType[] $container
     * @return self
     */
    public function setContainer(array $container = null)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * Adds as condition
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $condition
     */
    public function addToCondition(\TKusy\Hl7Fhir\R5\CodeableConceptType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as note
     *
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
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
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
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
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
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
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
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
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
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

