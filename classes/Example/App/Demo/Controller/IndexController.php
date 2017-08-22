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
        $base_memory_usage = memory_get_usage();
        $startTime         = microtime(true);

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

        $endTime      = microtime(true);
        $totalTime    = round(($endTime - $startTime), 6);
        $memory_usage = memory_get_usage() - $base_memory_usage;
        $memory_usage = $this->formatSize($memory_usage);

        var_dump($totalTime);
        var_dump($memory_usage);
        var_dump($this->formatSize(memory_get_peak_usage()));

    }

    private function formatSize($size)
    {
        if ($size >= 1073741824) {
            $size = round($size / 1073741824, 2) . ' GB';
        } else {
            if ($size >= 1048576) {
                $size = round($size / 1048576, 2) . ' MB';
            } else {
                if ($size >= 1024) {
                    $size = round($size / 1024, 2) . ' KB';
                } else {
                    $size = round($size, 2) . ' Bytes';
                }
            }
        }

        return $size;
    }
}