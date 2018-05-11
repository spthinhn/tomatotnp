<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Controller\AppController;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }

    public function home()
    {
        $this->viewBuilder()->layout('default');
        $this->loadModel('Settings');
        $this->loadModel('Albums');
        $introduce = $this->Settings->find('all')->where(['type =' => 'introduce'])->first();
        $vision = $this->Settings->find('all')->where(['type =' => 'vision'])->first();
        $mission = $this->Settings->find('all')->where(['type =' => 'mission'])->first();
        $banners = $this->Albums->find('all')->where(['type =' => 'banner'])->contain(['Medias'])->first();

        $this->set('banners', $banners);
        $this->set('_serialize', ['banners']);

        $this->set(compact('introduce'));
        $this->set(compact('vision'));
        $this->set(compact('mission'));
    }

    public function information()
    {
        $this->viewBuilder()->layout('default');
        $this->loadModel('Feeds');
        $feed = $this->Feeds->find('all')->where(['type =' => 'introduce'])->first();
        $this->set(compact('feed'));
    }

    public function news()
    {   
        $this->viewBuilder()->layout('default');
        $this->loadModel('Settings');
        $this->loadModel('Feeds');
        $feeds = $this->Feeds->find('all')->where(['type =' => 'post']);
        $cover = $this->Settings->find('all')->where(['type =' => 'cover-news'])->first();
        $this->set(compact('feeds'));
        $this->set('_serialize', ['feeds']);
        $this->set(compact('cover'));
    }

    public function products()
    {
        $this->loadModel('Settings');
        $this->viewBuilder()->layout('default');
        $this->loadModel('Categories');
        $cover = $this->Settings->find('all')->where(['type =' => 'cover-product'])->first();
        $categories = $this->Categories->find('all')->contain(['Products' => ['ProductImages']]);
        $this->set(compact('categories'));
        $this->set(compact('cover'));
        $this->set('_serialize', ['categories']);
    }

    public function album()
    {
        $this->viewBuilder()->layout('default');
        $this->loadModel('Settings');
        $cover = $this->Settings->find('all')->where(['type =' => 'cover-lib'])->first();
        $this->set(compact('cover'));
    }

    public function contact()
    {
        $this->viewBuilder()->layout('default');
        $this->loadModel('Settings');
        $cover = $this->Settings->find('all')->where(['type =' => 'cover-contact'])->first();
        $this->set(compact('cover'));
    }
}
