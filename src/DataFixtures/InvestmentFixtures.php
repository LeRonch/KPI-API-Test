<?php

namespace App\DataFixtures;

use App\Entity\Investment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Contracts\HttpClient\HttpClientInterface;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class InvestmentFixtures extends Fixture
{
    private $client;
    private $serializer;

    public function __construct(HttpClientInterface $client)
    {
        $normalizers = [new ObjectNormalizer()];
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $serializer = new Serializer($normalizers, $encoders);
        $this->client = $client;
        $this->serializer = $serializer;
    }
    public function load(ObjectManager $manager)
    {
        $response = $this->client->request('GET', 'http://127.0.0.1:8000/data.json');
        $content = $response->toArray();
        foreach ($content as $value) {

           $investment = new Investment($value);
           $this->serializer->serialize($value, Investment::class);
           dd($investment);
        }
    }


}