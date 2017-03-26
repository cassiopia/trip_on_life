<?php


namespace TripOnLife\InfoBundle\Entity;



class Enquiry
{
    protected $senderName;

    protected $senderEmail;

    protected $senderSubject;

    protected $senderMessage;

    /**
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    /**
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * @param string $senderEmail
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmaill = $senderEmail;
    }

    /**
     * @return string
     */
    public function getSenderSubject()
    {
        return $this->senderSubject;
    }

    /**
     * @param string $senderSubject
     */
    public function setSenderSubject($senderSubject)
    {
        $this->senderSubject = $senderSubject;
    }

    /**
     * @return string
     */
    public function getSenderMessage()
    {
        return $this->senderMessage;
    }

    /**
     * @param string $senderMessage
     */
    public function setSenderMessage($senderMessage)
    {
        $this->senderMessage = $senderMessage;
    }

}