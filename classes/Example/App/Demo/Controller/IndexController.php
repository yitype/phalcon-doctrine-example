<?php
/**
 * created by zhaoyi at 2017-08-20 16:13
 * made better by you.
 */

namespace Example\App\Demo\Controller;

use Example\Lib\Entities\Regions;
use Phalcon\Mvc\Controller;

/**
 * @property \Doctrine\ORM\EntityManager $em_demo
 */
class IndexController extends Controller
{
    public function IndexAction()
    {
        // get from Di
        $em = $this->em_demo;

        // Create
        $region = new Regions();
        $region->setRegionName('河北');
        $em->persist($region);
        $em->flush();

        $insertId = $region->getRegionId();

        // Retrieve
        /** @var Regions $regionFromDb */
        $regionFromDb = $em->find(Regions::class, $insertId);

        var_dump($regionFromDb);

        // Update
        $regionFromDb->setRegionName('衡水');
        $em->persist($regionFromDb);
        $em->flush();

        var_dump($regionFromDb);

        // Delete
        $em->remove($regionFromDb);
        $em->flush();

        var_dump($regionFromDb);

        // find all
        $regionsRepository = $em->getRepository(Regions::class);
        $regions           = $regionsRepository->findAll();

        var_dump($regions);

        foreach ($regions as $region) {
            $em->remove($region);
        }
        $em->flush();


        $region = $em->find('Example\Lib\Entities\Regions', 16);

        if ($region !== null) {
            $em->remove($region);
            $em->flush();
        }
    }
}