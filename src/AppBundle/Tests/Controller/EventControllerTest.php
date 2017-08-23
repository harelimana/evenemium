<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EventControllerTest extends WebTestCase
{
    public function testAddevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addEvent');
    }

    public function testFindevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/findEvent');
    }

    public function testRetrieveallevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveAllEvent');
    }

    public function testDeleteevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteEvent');
    }

}
