<?php
 
class CategoriesController extends Controller{

    public function __construct($data=array()){
        parent::__construct($data);
        $this->model = new Category();
    }

    public function index(){
        $this->data['categories'] = $this->model->getList();

        $cats = array();
        $cats = $this->data['categories'];

        for($i = 0; $i < count($cats); $i++){
            $cid = $cats[$i]['id'];

            $news_array = $this->model->getNewsTitle($cid);

            if(isset($news_array) && !empty($news_array)){
                for($j = 0; $j < count($news_array); $j++){
                     $this->data['categories'][$i]['news_t'][] = $news_array[$j];
                }

            }
        }

        $this->data['news_slider'] = $this->model->getNewsForSlider();
    }

    /**
     *
     */
    public function view(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $alias = strtolower($params[0]);
            $this->data['cat'] = $this->model->getByAlias($alias);
        }

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $itemsPerPage = 5;
        
        $offset = ($page - 1) * $itemsPerPage;

        $this->data['news'] = $this->model->getListNews($this->data['cat']['id'],$itemsPerPage,$offset);
        $this->data['count_news'] = $this->model->getCountNews($this->data['cat']['id']);

        $this->p = new Pagination(array(
            'itemsCount' => $this->data['count_news'],
            'itemsPerPage' => $itemsPerPage,
            'currentPage' => $page
        ));
        $this->data['pgn'] = $this->p->buttons;
        

    }

    public function admin_index(){
        $this->data['categories'] = $this->model->getList();
    }

    public function admin_add(){
        if( $_POST ){
            $result = $this->model->save($_POST);
            if( $result ){
                Session::setFlash('Category was saved.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/categories/');
        }
    }

    public function admin_edit(){

        if( $_POST ){
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $result = $this->model->save($_POST,$id);
            if( $result ){
                Session::setFlash('Category was saved.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/categories/');
        }

        if ( isset($this->params[0]) ){
            $this->data['category'] = $this->model->getById($this->params[0]);
        } else {
            Session::setFlash("Wrong category id.");
            Router::redirect('/admin/categories/');
        }
    }

    public function admin_delete(){
        if( isset($this->params[0]) ){
            $result = $this->model->delete($this->params[0]);
            if( $result ){
                Session::setFlash('Category was deleted.');
            } else {
                Session::setFlash('Error.');
            }
        }
        Router::redirect('/admin/categories/');
    }
} 