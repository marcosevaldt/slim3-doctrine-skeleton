<?php
/**
 * Created by PhpStorm.
 * User: ng
 * Date: 23/06/17
 * Time: 20:31
 */

namespace App\Example\Model;

use App\Core\Model\AbstractModel;
use Doctrine\ORM\EntityManager;

class AccountModel extends AbstractModel
{

    public function __construct( EntityManager $entityManager)
    {
        $this->repository = $entityManager->getRepository('App\Example\Entity\Account\Account');
        parent::__construct($entityManager);
    }

    public function create(Array $data)
    {
        try{

            if ( ! isset($data['status']) )
            {
                throw new \InvalidArgumentException("Required property 'status' empty or not found (ACCMD0031exc)");
            }

            if ( ! isset($data['token']) )
            {
                throw new \InvalidArgumentException("Required property 'token' empty or not found (ACCMD0032exc)");
            }

            if ( ! isset($data['currency']) )
            {
                throw new \InvalidArgumentException("Required property 'currency' empty or not found (ACCMD0033exc)");
            }

            if ( ! isset($data['paymentDay']) )
            {
                throw new \InvalidArgumentException("Required property 'paymentDay' empty or not found (ACCMD0034exc)");
            }

            $obj = parent::create($data); // TODO: Change the autogenerated stub
            return $obj;
        }
        catch(\InvalidArgumentException $e)
        {
            throw $e;
        }
        catch(\Exception $e)
        {
            throw $e;
        }
    }
}