<?php

    class PageC extends BaseC {
        public function index() {
            $this -> title .= 'Главная';
            $this -> content = 'главный контент';
        }

        public function catalog() {
            $this -> title .= ' | Каталог';
            $getGoods = new PageM();
            $goods = $getGoods -> getGoods();

            $loader = new Twig_Loader_Filesystem('v'); 
            $twig = new Twig_Environment($loader); 
            $template = $twig -> loadTemplate('catalog.twig');
            $this->content = $template -> render(array('goods' => $goods));
        }

        public function good() {
            $getGood = new PageM();
            $good = $getGood -> getGood();

            $this -> title .= ' | Каталог | ' . $good['title'];

            $loader = new Twig_Loader_Filesystem('v'); 
            $twig = new Twig_Environment($loader); 
            $template = $twig -> loadTemplate('good.twig');
            $this->content = $template -> render(array('good' => $good));
        }

        public function WriteCom()
        {

        }
        public function comment()
        {
            $this->title .= 'Комментарии';
            $getComs = new PageM();
            $coms = $getComs->getComs();
            $loader = new Twig_Loader_Filesystem('v');
            $twig = new Twig_Environment($loader);
            $template = $twig->loadTemplate('contacts.twig');

            if ($this->isPost()) {
                $newCom = new ComM();
                $res = $newCom -> WriteCom($_POST['fio'], $_POST['email'], $_POST['text']);
                $this->text = $res;
              //  $this->content = $template->render(array('text' => $this->text));
            } else {
                $this->content = $template->render([]);
                $this->content = $template->render(
                    array('coms' => $coms,
                    ));

            }
        }
    }
