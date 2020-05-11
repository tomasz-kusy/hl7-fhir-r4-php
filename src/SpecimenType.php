<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SpecimenType
 *
 * A sample to be used for analysis.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Specimen
 */
class SpecimenType extends DomainResourceType
{

    /**
     * Id for specimen.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $accessionIdentifier
     */
    private $accessionIdentifier = null;

    /**
     * The availability of the specimen.
     *
     * @var \TKusy\Hl7FhirR4\SpecimenStatusType $status
     */
    private $status = null;

    /**
     * The kind of material that forms the specimen.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Where the specimen came from. This may be from patient(s), from a location (e.g., the source of an environmental sample), or a sampling of a substance or a device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Time when specimen was received for processing or testing.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $receivedTime
     */
    private $receivedTime = null;

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $parent
     */
    private $parent = null;

    /**
     * Details concerning a service request that required a specimen to be collected.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $request
     */
    private $request = null;

    /**
     * Details concerning the specimen collection.
     *
     * @var \TKusy\Hl7FhirR4\SpecimenCollectionType $collection
     */
    private $collection = null;

    /**
     * Details concerning processing and processing steps for the specimen.
     *
     * @var \TKusy\Hl7FhirR4\SpecimenProcessingType[] $processing
     */
    private $processing = null;

    /**
     * The container holding the specimen. The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     *
     * @var \TKusy\Hl7FhirR4\SpecimenContainerType[] $container
     */
    private $container = null;

    /**
     * A mode or state of being that describes the nature of the specimen.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $condition
     */
    private $condition = null;

    /**
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Id for specimen.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as accessionIdentifier
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
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
     * @param \TKusy\Hl7FhirR4\IdentifierType $accessionIdentifier
     * @return self
     */
    public function setAccessionIdentifier(\TKusy\Hl7FhirR4\IdentifierType $accessionIdentifier)
    {
        $this->accessionIdentifier = $accessionIdentifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The availability of the specimen.
     *
     * @return \TKusy\Hl7FhirR4\SpecimenStatusType
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
     * @param \TKusy\Hl7FhirR4\SpecimenStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\SpecimenStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * The kind of material that forms the specimen.
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
     * The kind of material that forms the specimen.
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
     * Gets as subject
     *
     * Where the specimen came from. This may be from patient(s), from a location (e.g., the source of an environmental sample), or a sampling of a substance or a device.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Where the specimen came from. This may be from patient(s), from a location (e.g., the source of an environmental sample), or a sampling of a substance or a device.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as receivedTime
     *
     * Time when specimen was received for processing or testing.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }

    /**
     * Sets a new receivedTime
     *
     * Time when specimen was received for processing or testing.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $receivedTime
     * @return self
     */
    public function setReceivedTime(\TKusy\Hl7FhirR4\DateTimeType $receivedTime)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $parent
     */
    public function addToParent(\TKusy\Hl7FhirR4\ReferenceType $parent)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $parent
     * @return self
     */
    public function setParent(array $parent)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $request
     */
    public function addToRequest(\TKusy\Hl7FhirR4\ReferenceType $request)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $request
     * @return self
     */
    public function setRequest(array $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as collection
     *
     * Details concerning the specimen collection.
     *
     * @return \TKusy\Hl7FhirR4\SpecimenCollectionType
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
     * @param \TKusy\Hl7FhirR4\SpecimenCollectionType $collection
     * @return self
     */
    public function setCollection(\TKusy\Hl7FhirR4\SpecimenCollectionType $collection)
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
     * @param \TKusy\Hl7FhirR4\SpecimenProcessingType $processing
     */
    public function addToProcessing(\TKusy\Hl7FhirR4\SpecimenProcessingType $processing)
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
     * @return \TKusy\Hl7FhirR4\SpecimenProcessingType[]
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
     * @param \TKusy\Hl7FhirR4\SpecimenProcessingType[] $processing
     * @return self
     */
    public function setProcessing(array $processing)
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
     * @param \TKusy\Hl7FhirR4\SpecimenContainerType $container
     */
    public function addToContainer(\TKusy\Hl7FhirR4\SpecimenContainerType $container)
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
     * @return \TKusy\Hl7FhirR4\SpecimenContainerType[]
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
     * @param \TKusy\Hl7FhirR4\SpecimenContainerType[] $container
     * @return self
     */
    public function setContainer(array $container)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $condition
     */
    public function addToCondition(\TKusy\Hl7FhirR4\CodeableConceptType $condition)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
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
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

