<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\_Figures\Circle;
use AppBundle\_Figures\Square;
use AppBundle\_Figures\Cube;
use AppBundle\_Calculator\AreaCalculator;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $shapes = array(new Square(2), new Circle(2), new Cube(2));
        $areas = new AreaCalculator($shapes);
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'output' => $areas->sum(),
        ));
    }
}
