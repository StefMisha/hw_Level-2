<?php

//тут нужно созать возможность добавления комментария на примере регистрации пользователя
class ComC extends BaseC
{

    public function WriteCom()
    {
        $this->title .= 'Комментарии';

        $loader = new Twig_Loader_Filesystem('v');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('contacts.twig');

        if ($this->isPost()) {
            $newCom = new ComM();
            $res = $newCom -> WriteCom($_POST['fio'], $_POST['email'], $_POST['text']);
            $this->text = $res;
            $this->content = $template->render(array('text' => $this->text));
        } else {
            $this->content = $template->render(array());

        }
    }
}