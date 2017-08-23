<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testAdduser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addUser');
    }

    public function testFinduser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/findUser');
    }

    public function testRetrieveall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveAll');
    }

    public function testDeleteuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteUser');
    }

}
