<?php

namespace tests\Core\Models;

use Tests\TestCase;
use App\User;

class UserTests extends TestCase
{
    public function testGetters()
    {
        $model = factory(User::class)->create();

        $this->assertEquals($model->id, $model->getId());
        $this->assertEquals($model->first_name, $model->getFirstName());
        $this->assertEquals($model->last_name, $model->getLastName());
        $this->assertEquals($model->dni, $model->getDNI());
        $this->assertEquals($model->email, $model->getEmail());
    }

    public function testSetters()
    {
        $model = factory(User::class)->create();

        $first_name = 'Daniel';
        $last_name = 'Echenique';
        $dni = '37720270';
        $email = 'facueche@gmail.com';

        $model->setFirstName($first_name);
        $model->setLastName($last_name);
        $model->setDNI($dni);
        $model->setEmail($email);

        $this->assertEquals($model->id, $model->getId());
        $this->assertEquals($first_name, $model->getFirstName());
        $this->assertEquals($last_name, $model->getLastName());
        $this->assertEquals($dni, $model->getDNI());
        $this->assertEquals($email, $model->getEmail());
    }
}