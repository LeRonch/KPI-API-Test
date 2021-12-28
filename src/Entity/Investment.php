<?php

namespace App\Entity;

use App\Repository\InvestmentRepository;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;

/**
 * @ORM\Entity(repositoryClass=InvestmentRepository::class)
 * 
 * @ApiResource(
 *  paginationEnabled=false,
 *  collectionOperations= {
 *      "get",
 *      "post"
 *  },
 *  itemOperations={
 *      "get"
 *  }
 * )
 * 
 * @ApiFilter(SearchFilter::class , properties= {"ville":"exact", "etat_d_avancement" :"exact"})

 */

class Investment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $titreoperation;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $mandataire;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $ppi;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $lycee;

    /**
     * @ORM\Column(type="date", nullable= true)
     */
    private $notification_du_marche;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $codeuai;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $etat_d_avancement;

    /**
     * @ORM\Column(type="float")
     */
    private $montant_des_ap_votes_en_meu;

    /**
     * @ORM\Column(type="date")
     */
    private $cao_attribution;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $maitrise_d_oeuvre;

    /**
     * @ORM\Column(type="string", length= 255, nullable= true)
     */
    private $mode_de_devolution;

    /**
     * @ORM\Column(type="string", length= 4, nullable= true)
     */
    private $annee_d_individualisation;

    /**
     * @ORM\Column(type="float")
     */
    private $enveloppe_prev_en_meu;

    /**
     * @ORM\Column(type="string", length= 4, nullable= true)
     */
    private $annee_de_livraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreoperation(): ?string
    {
        return $this->titreoperation;
    }

    public function setTitreoperation(string $titreoperation): self
    {
        $this->titreoperation = $titreoperation;
        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(?string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getAnneeDeLivraison(): ?string
    {
        return $this->annee_de_livraison;
    }

    public function setAnneeDeLivraison(?string $annee_de_livraison): self
    {
        $this->annee_de_livraison = $annee_de_livraison;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getMandataire(): ?string
    {
        return $this->mandataire;
    }

    public function setMandataire(?string $mandataire): self
    {
        $this->mandataire = $mandataire;

        return $this;
    }

    public function getPpi(): ?string
    {
        return $this->ppi;
    }

    public function setPpi(?string $ppi): self
    {
        $this->ppi = $ppi;

        return $this;
    }

    public function getLycee(): ?string
    {
        return $this->lycee;
    }

    public function setLycee(string $lycee): self
    {
        $this->lycee = $lycee;

        return $this;
    }

    public function getNotificationDuMarche(): ?\DateTimeInterface
    {
        return $this->notification_du_marche;
    }

    public function setNotificationDuMarche(?\DateTimeInterface $notification_du_marche): self
    {
        $this->notification_du_marche = $notification_du_marche;

        return $this;
    }

    public function getCodeuai(): ?string
    {
        return $this->codeuai;
    }

    public function setCodeuai(string $codeuai): self
    {
        $this->codeuai = $codeuai;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getEtatDAvancement(): ?string
    {
        return $this->etat_d_avancement;
    }

    public function setEtatDAvancement(string $etat_d_avancement): self
    {
        $this->etat_d_avancement = $etat_d_avancement;

        return $this;
    }

    public function getMontantDesApVotesEnMeu(): ?float
    {
        return $this->montant_des_ap_votes_en_meu;
    }

    public function setMontantDesApVotesEnMeu(?float $montant_des_ap_votes_en_meu): self
    {
        $this->montant_des_ap_votes_en_meu = $montant_des_ap_votes_en_meu;

        return $this;
    }

    public function getCaoAttribution(): ?\DateTimeInterface
    {
        return $this->cao_attribution;
    }

    public function setCaoAttribution(?\DateTimeInterface $cao_attribution): self
    {
        $this->cao_attribution = $cao_attribution;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getMaitriseDOeuvre(): ?string
    {
        return $this->maitrise_d_oeuvre;
    }

    public function setMaitriseDOeuvre(?string $maitrise_d_oeuvre): self
    {
        $this->maitrise_d_oeuvre = $maitrise_d_oeuvre;

        return $this;
    }

    public function getModeDeDevolution(): ?string
    {
        return $this->mode_de_devolution;
    }

    public function setModeDeDevolution(?string $mode_de_devolution): self
    {
        $this->mode_de_devolution = $mode_de_devolution;

        return $this;
    }

    public function getAnneeDIndividualisation(): ?string
    {
        return $this->annee_d_individualisation;
    }

    public function setAnneeDIndividualisation(?string $annee_d_individualisation): self
    {
        $this->annee_d_individualisation = $annee_d_individualisation;

        return $this;
    }

    public function getEnveloppePrevEnMeu(): ?float
    {
        return $this->enveloppe_prev_en_meu;
    }

    public function setEnveloppePrevEnMeu(?float $enveloppe_prev_en_meu): self
    {
        $this->enveloppe_prev_en_meu = $enveloppe_prev_en_meu;

        return $this;
    }
}
