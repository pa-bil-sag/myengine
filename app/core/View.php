<?php
namespace liw\app\core;

use liw\app\core\web\Session;

class View
{

    private $total_view = 'index.php';
    private $menu = [];
    private $user;

    public function __construct()
    {

        // $this->menu = new Model();

    }

    /**
     * @param $template - это какую view мы хоти подключить
     * @param null $data - контент страницы
     * @param null $default - данные по умолчанию menu, footer, header, sidebar
     * @return string
     */


    public function fetchPartial($template, $data = null, $default = null)
    {

        if (!empty($data)) {
            extract($data);
        }
        ob_start();

        include VIEWS_BASEDIR . $template . '.php';
        return ob_get_clean();
    }

    // вывести отрендеренный шаблон с параметрами $params
    public function renderPartial($template, $data = null)
    {
        echo $this->fetchPartial($template, $data, null, null);
    }

    // получить отрендеренный в переменную $content layout-а
    // шаблон с параметрами $params
    function fetch($template, $data = [], $default = [])
    {
        //Liw::$isGuest = true;
        //проверяем пользователя если были созданы ссесси то isGuest false сесси связаны напрямую с куками
        //необходимо для прав и приведствия на сайте
        if (Liw::$isGuest == false) {
            $temp = 'intropage';
            $user = $_SESSION['USER'];

            $this->user = $this->fetchPartial($temp, $user);
        }
        if (Liw::$isGuest == true) {
            $temp = 'guest';
            //$user = 'Гость';

            $this->user = $this->fetchPartial($temp);

        };

        $content = $this->fetchPartial($template, $data, null, null);
        //если мы передали сообщение об ошибке
        if (isset($_SESSION['Massage']) && !empty($_SESSION['Massage'])) {
            return $this->fetchPartial('layout', ['content' => $content, 'user' => $this->user, 'massage' => $_SESSION['Massage']], $default, null);

        } else {
            return $this->fetchPartial('layout', ['content' => $content, 'user' => $this->user], $default, null);
        }
    }

    // вывести отрендеренный в переменную $content layout-а
    // шаблон с параметрами $params
    function render($template, $data = [], $default = [])
    {

        echo $this->fetch($template, $data, $default);
        //очмстить сессию сообщения об шибках
        if (isset($_SESSION['Massage']) && !empty($_SESSION['Massage'])) {
            Session::unsetSession('Massage');
            //Session::unsetSession('Array_Massage');
        }
    }

}