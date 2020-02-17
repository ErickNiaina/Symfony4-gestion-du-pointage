<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/salary")
 */
class SalaryController extends AbstractController
{
    /**
     * @Route("/index", name="salary_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('salary/salary.html.twig');
    }

    /**
     * @Route("/list", name="salary_list", methods={"GET"})
     */
    public function showAll()
    {
        return $this->render('salary/salary_list.html.twig');
    }
    /**
     * @Route("/view", name="salary_view", methods={"GET"})
     */
    public function show()
    {
        return $this->render('salary/salary_view.html.twig');
    }
    /**
     * @Route("/nouveau", name="salary_new", methods={"GET"})
     */
    public function new()
    {
        return $this->render('salary/salary_add.html.twig');
    }
    /**
     * @Route("/modifier", name="salary_edit", methods={"GET"})
     */
    public function edit()
    {
        return $this->render('salary/salary_edit.html.twig');
    }
}
