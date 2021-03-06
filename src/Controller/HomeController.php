<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Capitalize;
use App\Entity\SpacesToDashes;
use App\Entity\LoggerInfo;
use App\Entity\transform;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        if (isset($_POST['string'])) {
            $caps = new Capitalize();
            $dashes = new SpacesToDashes();


            if ($_POST["choice"] == "caps") {
                return $this->render('home/index.html.twig', [
                    'controller_name' => 'with caps',
                    'caps' => $caps->transform($_POST['string']),
                    'dashes' => " "
                ]);

            } else {
                return $this->render('home/index.html.twig', [
                    'controller_name' => 'with spaces',
                    'caps' => "",
                    'dashes' => $dashes->transform($_POST['string'])
                ]);
            }

        } else {
            $_POST['string'] = "Please enter something";
            $_POST['choice'] = "caps";
            return $this->render('home/index.html.twig', [
                'controller_name' => 'Dependency Injection',
                'caps' => " ",
                'dashes' => " "
            ]);
        }
    }
}

/* Original code with 2 separate input fields

        // link with home/index sentences 1 capitalize
        if (!isset($_POST['sentence1'])) {
            $_POST['sentence1'] = "";
        }

        // link with home/index sentences 2 spaces to dashes
        if (!isset($_POST['sentence2'])) {
            $_POST['sentence2'] = "";
        }

        // link with Classes (otherwise error "app\Entity classes" is never used
        $capitalization = new Capitalize();
        $dashes = new SpacesToDashes();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Dependency Injection',
            'sentence1' => $capitalization->transform($_POST['sentence1']),
            'sentence2' => $dashes->transform($_POST['sentence2']),*/