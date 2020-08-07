<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM; 
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{

    use ResourceId;
    use Timestapable;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NbrAdulte;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NbrEnfant;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tarifs;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getNbrAdulte(): ?int
    {
        return $this->NbrAdulte;
    }

    public function setNbrAdulte(?int $NbrAdulte): self
    {
        $this->NbrAdulte = $NbrAdulte;

        return $this;
    }

    public function getNbrEnfant(): ?int
    {
        return $this->NbrEnfant;
    }

    public function setNbrEnfant(?int $NbrEnfant): self
    {
        $this->NbrEnfant = $NbrEnfant;

        return $this;
    }

    public function getTarifs(): ?float
    {
        return $this->tarifs;
    }

    public function setTarifs(?float $tarifs): self
    {
        $this->tarifs = $tarifs;

        return $this;
    }
}
