<?php

class NewsController extends Controller{

    public function __construct($data=array()){
        parent::__construct($data);
        $this->model = new Uncos();
    }

    public function index(){
        $this->data['news'] = $this->model->getList();
    }

    public function view(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $alias = strtolower($params[0]);
            $this->data['news'] = $this->model->getByAlias($alias);
        }

        //count views news page
        $unical_page_id_gid = md5($_SERVER['REQUEST_URI']); // получение md5() хэша из url страницы

        $this->count = new Count();

        if (!$this->count->searchID($unical_page_id_gid)){ // существует ли запись с таким id
            $this->count->Default_Write($unical_page_id_gid); // запись всех значений по умолчанию
        } else { // если не существует
            $tmp = $this->count->MySQLRead($unical_page_id_gid); // считаем значения
            for($i = 0; $i < count($tmp); $i++) {
                $this->data['all'] = $tmp[$i]['all'] + 1;
                $this->data['today'] = $tmp[$i]['today'] + 1;
                if (time() >= $tmp[$i]['date']) { // если сутки с момента записи прошли
                    $this->count->UpdateTime($unical_page_id_gid, (time() + 60 * 60 * 24)); // обновим дату
                    $this->count->UpdateCounders($unical_page_id_gid, $this->data['all'], 1); // обновим счетчики
                } else { // если еще нет
                    /* обновим счетчики */
                    $this->count->UpdateCounders($unical_page_id_gid, $this->data['all'], $this->data['today']);
                }
            }
        }

        $this->data['tags'] = $this->data['news']['tags'];
        $this->data['tags'] = explode(',',$this->data['tags']);
    }

    public function admin_index(){
        $this->data['news'] = $this->model->getList();

    }

    public function admin_add(){
        $this->data_cats = new Category();
        $this->data['cats'] = $this->data_cats->getList();

        if( $_POST ){
            if(isset($_FILES['image']['tmp_name']))
                $this->upload_img();
            $result = $this->model->save($_POST);
            print_r($result);
            if( $result ){
                Session::setFlash('News was saved.');
            } else {
                Session::setFlash('Error.');
            }
            //Router::redirect('/admin/news/');
        }
    }

    public function admin_edit(){

        $this->data_cats = new Category();
        $this->data['cats'] = $this->data_cats->getList();

        if( $_POST ){
            if(isset($_FILES['image']['tmp_name'])) {
                $this->upload_img();
            }
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $result = $this->model->save($_POST,$id);
            if( $result ){
                Session::setFlash('News was saved.');
            } else {
                Session::setFlash('Error.');
            }
            //Router::redirect('/admin/news/');
        }

        if ( isset($this->params[0]) ){
            $this->data['news'] = $this->model->getById($this->params[0]);
        } else {
            Session::setFlash("Wrong news id.");
            Router::redirect('/admin/news/');
        }
    }

    public function upload_img(){
        $blacklist = array(".php", ".phtml", ".php3", ".php4");
        foreach ($blacklist as $item) {
            if(isset($_FILES['image']['tmp_name']))
                if(preg_match("/$item\$/i", $_FILES['image']['name'])) {
                    echo "We do not allow uploading PHP files\n";
                    exit;
                }
        }

        $uploaddir = '/Applications/XAMPP/xamppfiles/htdocs/firstnews/webroot/img/';
        if(isset($_FILES['image']['tmp_name']))
            $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        $_POST['image'] = $_FILES['image']['name'];
        if(isset($_FILES['image']['tmp_name']))
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                echo "File is valid, and was successfully uploaded.\n";
            } else {
                echo "File uploading failed.\n";
            }

    }



    public function admin_delete(){
        if( isset($this->params[0]) ){
            $result = $this->model->delete($this->params[0]);
            if( $result ){
                Session::setFlash('News was deleted.');
            } else {
                Session::setFlash('Error.');
            }
        }
        Router::redirect('/admin/news/');
    }

}