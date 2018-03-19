<?php

namespace E2N\CandidateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@E2NCandidate/Default/index.html.twig');
    }
}
