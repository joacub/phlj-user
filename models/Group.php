<?php
/**
 * @author Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

namespace PhljUser\Model;

/**
 * Class Group
 * @package PhljUser\Model
 *
 * @Source("User__Groups")
 */
class Group extends \Phalcon\Mvc\Model
{
    /**
     * @Id
     * @Identity
     * @GeneratedValue
     * @Primary
     * @Column(type="integer")
     * @var integer
     */
    public $id;

    /**
     * @Column(name="title", type="string")
     * @var string
     */
    public $title;
}
