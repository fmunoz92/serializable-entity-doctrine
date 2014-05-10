<?php

/**
 * @Entity
 */
class Article
{
    use ActiveEntity,Timestampable;

    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;
    /** @Column */
    private $headline;
    /** @Column(type="text") */
    private $body;
}
