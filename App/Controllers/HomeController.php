<?php

// namespace App\Controllers\Blog;
namespace App\Controllers;

use System\Controller;

class HomeController extends Controller
{
    
    public function index()
    {
        // echo("HomeController");     
        // echo( $this->request->url() );

        // echo $this->session->set('name', 'للللللللللللللل');
        // echo $this->session->get('name');

        // $this->load->controller("Header")->index();
        // $data['YOUR_NAME'] = 'namo....';
        // return $this->view->render('home', $data);
        $this->db;
        $this->db->query('INSERT INTO users SET email=?, status=?, users_group_id=?, first_name=?, last_name=?' , 'tito@tito.tito', 'any', 1, 'taher', 'ahmed');

    }
    //  /**
    //  * Display Home Page
    //  *
    //  * @return mixed
    //  */
    // public function index()
    // {
    //     $data['posts'] = $this->load->model('Posts')->latest();

    //     $this->html->setTitle($this->settings->get('site_name'));

    //     $postController = $this->load->controller('Blog/Post');

    //     $data['post_box'] = function ($post) use ($postController) {
    //         return $postController->box($post);
    //     };

    //     // i will use getOutput() method just to display errors
    //     // as i'm using php 7 which is throwing all errors as exceptions
    //     // which won't be thrown through the __toString() method
    //     $view = $this->view->render('blog/home', $data);

    //     return $this->blogLayout->render($view);
    // }
}