<?php

class SearchController extends Controller{
    
    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Uncos();
    }
    
    public function index() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $itemsPerPage = 5;
        $offset = ($page - 1) * $itemsPerPage;

        if (!empty($_GET['query'])) {
            $this->data['query'] = (string)$_GET['query'];
            $this->data['array'] = array();
            $this->data['request'] = $this->model->getSearchList($this->data['query'],$itemsPerPage,$offset);

            foreach ($this->data['request'] as $this->data['res']) {
                $this->data['array'][] = $this->data['res']['title'];
            }
            $this->data['result'] = $this->data['array'];


        }
        $this->data['count_news'] = $this->model->getCountNews($this->data['query']);

        $this->p = new Pagination(array(
            'itemsCount' => $this->data['count_news'],
            'itemsPerPage' => $itemsPerPage,
            'currentPage' => $page
        ));
        $this->data['pgn'] = $this->p->buttons;


        //$this->data['news'] = $this->model->getListNews($this->data['cat']['id'],$itemsPerPage,$offset);

        
    }

    public function getItem(){
        if(!empty($_GET['query'])) {
                $this->data['query'] = (string)$_GET['query'];
                $this->data['array'] = array();

                $this->data['request'] = $this->model->getSearchList($this->data['query']);

                foreach ($this->data['request'] as $this->data['res']) {
                    $this->data['array'][] = $this->data['res']['title'];
                }
            echo "['".implode("','", $this->data['array'])."']";
        }
    }

}