<?php


namespace App\Entity;
 
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Appartement
 *
 * @ORM\Table(name="appartement")
 * @ORM\Entity
 */
class Appartement
{

    use ResourceId;
    use Timestapable;
    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"appartement:read", "appartement:write"})
     */
    private $title;

    /**
     * @ORM\Column(type="float")
     * @Groups({"appartement:read", "appartement:write"})
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     * @Groups({"appartement:read", "appartement:write"})
     */
    private $adress;

    /**
     * @ORM\Column(type="float")
     * @Groups({"appartement:read", "appartement:write"})
     */
    private $espace;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"appartement:read", "appartement:write"})
     */
    private $nbrpersonne;

    /**
     * @ORM\Column(type="text")
     * @Groups({"appartement:read", "appartement:write"})
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"appartement:read", "appartement:write"})
     */
    private $postalCode;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"appartement:read", "appartement:write"})
     */
    private $isPublished;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getEspace(): ?float
    {
        return $this->espace;
    }

    public function setEspace(float $espace): self
    {
        $this->espace = $espace;

        return $this;
    }

    public function getNbrpersonne(): ?int
    {
        return $this->nbrpersonne;
    }

    public function setNbrpersonne(int $nbrpersonne): self
    {
        $this->nbrpersonne = $nbrpersonne;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postalCode;
    }

    public function setPostalCode(int $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }
}
