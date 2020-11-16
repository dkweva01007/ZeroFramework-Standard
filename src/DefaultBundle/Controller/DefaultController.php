<?php

declare(strict_types=1);

namespace DefaultBundle\Controller;

use ZeroBundle\Bundle\Controller;
use ZeroBundle\Bundle\Responses\Response;
use ZeroBundle\Bundle\Responses\Types\Json;

/**
 * @Route("/", name="Default Controller")
 */
class DefaultController extends Controller {

    /**
     * @Route("/", name="HelloWord test")
     */
    public function DashboardAction() {
        //$page = new PhpEcho([__DIR__, '.. View Layout.php'], ['body' => new PhpEcho([realpath(__DIR__), '.. View Dashboard.php'])]);
        $this->setResponse(new Response("hello word", ['HTTP/1.0 200']));
    }

    /**
     * @Route("/json", name="Json test")
     */
    public function TestAction() {
        $test = ["JsonTest" => "Json Something"];
        $this->setResponse(new Json(json_encode($test), ['HTTP/1.0 200']));
    }

}
