<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creational\Builder;

/**
 *
 * @author theAdmin
 */
interface BuilderInterface 
{
    /**
     * @return mixed.
     */
    public function createVehicle();
    /**
     * @return mixed.
     */
    public function addWheel();
    /**
     * @return mixed.
     */
    public function addEngine();
    /**
     * @return mixed.
     */
    public function addDoors();
    /**
     * @return mixed.
     */
    public function getVehicle();
}
