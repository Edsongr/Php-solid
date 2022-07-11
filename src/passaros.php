<?php 

interface Passaro
{
    public function come();
    public function dorme();
    public function anda();
}

interface PassaroQueVoa extends Passaro
{
    public function voa();
}

interface PassaroQueNada extends Passaro
{
    public function nada();
}

class Andorinha implements PassaroQueVoa 
{

    public function come()
    {
        /**
         * Códigos
         */

    }

    public function dorme()
    {
        /**
         * Códigos
         */

    }

    public function voa()
    {
        /**
         * Códigos
         */

    }

    public function anda()
    {
        /**
         * Códigos
         */

    }

}

class Pinguin implements PassaroQueNada
{

    public function come()
    {
        /**
         * Códigos
         */

    }

    public function dorme()
    {
        /**
         * Códigos
         */

    }
    
    public function anda()
    {
        /**
         * Códigos
         */

    }

    public function nada()
    {
        /**
         * Códigos
         */

    }

}