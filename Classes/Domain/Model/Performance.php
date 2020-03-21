<?php
namespace DWenzel\T3events\Domain\Model;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use DWenzel\T3calendar\Domain\Model\CalendarItemInterface;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Performance
 * @package DWenzel\T3events\Domain\Model
 */
class Performance extends AbstractEntity implements CalendarItemInterface
{
    use EqualsTrait;

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date;

    /**
     * admission
     *
     * @var int
     */
    protected $admission;

    /**
     * begin
     *
     * @var int
     */
    protected $begin;

    /**
     * end
     *
     * @var int
     */
    protected $end;

    /**
     * statusInfo
     *
     * @var string
     */
    protected $statusInfo;

    /**
     * externalProviderLink
     *
     * @var string
     */
    protected $externalProviderLink;

    /**
     * additionalLink
     *
     * @var string
     */
    protected $additionalLink;

    /**
     * providerType
     *
     * @var integer
     */
    protected $providerType = 0;

    /**
     * image
     *
     * @var string
     */
    protected $image;

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $images;

    /**
     * plan
     *
     * @var string
     */
    protected $plan;

    /**
     * noHandlingFee
     *
     * @var boolean
     */
    protected $noHandlingFee = false;

    /**
     * priceNotice
     *
     * @var string
     */
    protected $priceNotice;

    /**
     * @var \DWenzel\T3events\Domain\Model\Event
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $event;

    /**
     * eventLocation
     *
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     * @var \DWenzel\T3events\Domain\Model\EventLocation
     */
    protected $eventLocation;

    /**
     * ticketClass
     *
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DWenzel\T3events\Domain\Model\TicketClass>
     */
    protected $ticketClass;

    /**
     * status
     *
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     * @var \DWenzel\T3events\Domain\Model\PerformanceStatus
     */
    protected $status;

    /**
     * hidden
     *
     * @var integer
     */
    protected $hidden;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all \TYPO3\CMS\Extbase\Persistence\ObjectStorage properties.
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        /**
         * Do not modify this method!
         * It will be rewritten on each save in the extension builder
         * You may modify the constructor of this class instead
         */
        $this->images = new ObjectStorage();
        $this->ticketClass = new ObjectStorage();
    }

    /**
     * Returns the eventLocation
     *
     * @return \DWenzel\T3events\Domain\Model\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets the event
     *
     * @param \DWenzel\T3events\Domain\Model\Event $event
     */
    public function setEvent(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Returns the eventLocation
     *
     * @return \DWenzel\T3events\Domain\Model\EventLocation eventLocation
     */
    public function getEventLocation()
    {
        return $this->eventLocation;
    }

    /**
     * Sets the eventLocation
     *
     * @param \DWenzel\T3events\Domain\Model\EventLocation $eventLocation
     * @return void
     */
    public function setEventLocation(\DWenzel\T3events\Domain\Model\EventLocation $eventLocation)
    {
        $this->eventLocation = $eventLocation;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * Gets the end date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets the end date
     *
     * @param \DateTime $date
     */
    public function setEndDate($date)
    {
        $this->endDate = $date;
    }

    /**
     * Returns the admission
     *
     * @return int $admission
     */
    public function getAdmission()
    {
        return $this->admission;
    }

    /**
     * Sets the admission
     *
     * @param int $admission
     * @return void
     */
    public function setAdmission($admission)
    {
        $this->admission = $admission;
    }

    /**
     * Returns the begin
     *
     * @return int $begin
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Sets the begin
     *
     * @param int $begin
     * @return void
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;
    }

    /**
     * Returns the end
     *
     * @return int $end
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets the end
     *
     * @param int $end
     * @return void
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * Returns the statusInfo
     *
     * @return string $statusInfo
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * Sets the statusInfo
     *
     * @param string $statusInfo
     * @return void
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;
    }

    /**
     * Returns the image
     *
     * @return string $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param string $image
     * @return void
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Adds an image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image Image
     * @return void
     */
    public function addImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes an image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove Image
     * @return void
     */
    public function removeImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $images Images
     * @return void
     */
    public function setImages(ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Returns the plan
     *
     * @return string $plan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets the plan
     *
     * @param string $plan
     * @return void
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    /**
     * Returns the noHandlingFee
     *
     * @return boolean $noHandlingFee
     */
    public function getNoHandlingFee()
    {
        return $this->noHandlingFee;
    }

    /**
     * Sets the noHandlingFee
     *
     * @param boolean $noHandlingFee
     * @return void
     */
    public function setNoHandlingFee($noHandlingFee)
    {
        $this->noHandlingFee = $noHandlingFee;
    }

    /**
     * Returns the boolean state of noHandlingFee
     *
     * @return boolean
     */
    public function isNoHandlingFee()
    {
        return $this->getNoHandlingFee();
    }

    /**
     * Returns the status
     *
     * @return \DWenzel\T3events\Domain\Model\PerformanceStatus $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     *
     * @param \DWenzel\T3events\Domain\Model\PerformanceStatus $status
     * @return void
     */
    public function setStatus(\DWenzel\T3events\Domain\Model\PerformanceStatus $status)
    {
        $this->status = $status;
    }

    /**
     * Returns the priceNotice
     *
     * @return string $priceNotice
     */
    public function getPriceNotice()
    {
        return $this->priceNotice;
    }

    /**
     * Sets the priceNotice
     *
     * @param string $priceNotice
     * @return void
     */
    public function setPriceNotice($priceNotice)
    {
        $this->priceNotice = $priceNotice;
    }

    /**
     * Adds a TicketClass
     *
     * @param \DWenzel\T3events\Domain\Model\TicketClass $ticketClass
     * @return void
     */
    public function addTicketClass(\DWenzel\T3events\Domain\Model\TicketClass $ticketClass)
    {
        $this->ticketClass->attach($ticketClass);
    }

    /**
     * Removes a TicketClass
     *
     * @param \DWenzel\T3events\Domain\Model\TicketClass $ticketClassToRemove The TicketClass to be removed
     * @return void
     */
    public function removeTicketClass(\DWenzel\T3events\Domain\Model\TicketClass $ticketClassToRemove)
    {
        $this->ticketClass->detach($ticketClassToRemove);
    }

    /**
     * Returns the ticketClass
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DWenzel\T3events\Domain\Model\TicketClass> $ticketClass
     */
    public function getTicketClass()
    {
        return $this->ticketClass;
    }

    /**
     * Sets the ticketClass
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DWenzel\T3events\Domain\Model\TicketClass> $ticketClass
     * @return void
     */
    public function setTicketClass(ObjectStorage $ticketClass)
    {
        $this->ticketClass = $ticketClass;
    }

    /**
     * Returns the additionalLink
     *
     * @return string additionalLink
     */
    public function getAdditionalLink()
    {
        return $this->additionalLink;
    }

    /**
     * Sets the additionalLink
     *
     * @param string $additionalLink
     * @return void
     */
    public function setAdditionalLink($additionalLink)
    {
        $this->additionalLink = $additionalLink;
    }

    /**
     * Returns the externalProviderLink
     *
     * @return string externalProviderLink
     */
    public function getExternalProviderLink()
    {
        return $this->externalProviderLink;
    }

    /**
     * Sets the externalProviderLink
     *
     * @param string $externalProviderLink
     * @return void
     */
    public function setExternalProviderLink($externalProviderLink)
    {
        $this->externalProviderLink = $externalProviderLink;
    }

    /**
     * Returns the providerType
     *
     * @return integer $providerType
     */
    public function getProviderType()
    {
        return $this->providerType;
    }

    /**
     * Sets the providerType
     *
     * @param integer $providerType
     * @return void
     */
    public function setProviderType($providerType)
    {
        $this->providerType = $providerType;
    }

    /**
     * Return hidden
     *
     * @return integer
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set hidden
     *
     * @var integer $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = ($hidden);
    }
}
