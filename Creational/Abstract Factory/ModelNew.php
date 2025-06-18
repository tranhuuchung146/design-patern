<?php

class ModelNew implements VinFactory
{
    public function createVinfast(): VinfastInterface
    {
        return new VinfastModelNew();
    }

    public function createVsmart(): VsmartInterface
    {
        return new VsmartModelNew();
    }
}
