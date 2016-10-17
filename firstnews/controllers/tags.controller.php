<?php

class TagsController extends Controller{

    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Uncos();
    }

    public function index(){
        $this->data['tag'] = isset($_GET['tag']) ? addslashes($_GET['tag']) : null;

        $this->data['news_by_tag'] = $this->model->getListTagsNews($this->data['tag']);
        
    }


}