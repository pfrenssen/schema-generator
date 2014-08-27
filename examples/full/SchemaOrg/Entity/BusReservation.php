<?php


namespace SchemaOrg\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * A reservation for bus travel.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use http://schema.org/Offer.
 * 
 * @see http://schema.org/BusReservation Documentation on Schema.org
 * 
 * @ORM\MappedSuperclass
 */
class BusReservation extends Reservation
{
}