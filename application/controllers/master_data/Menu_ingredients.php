<?php

class Menu_ingredients extends MY_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * index
   */
  public function index()
  {

    // dataView
    $dataView = [
      'title'     => 'Master Data',
      'subtitle'  => 'Menu ingredients'
    ];

    // view
    $this->load_template('master_data/menu_ingredients/page/index', $dataView);
  }

  public function add()
  {

    // dataView
    $dataView = [
      'title' => 'Master Data',
      'subtitle' => 'Add New Menu ingredients'
    ];

    // view
    $this->load_template('master_data/menu_ingredients/page/add', $dataView);
  }

  public function bulk_add()
  {

    // dataView
    $dataView = [
      'title' => 'Master Data',
      'subtitle' => 'Add New Menu ingredients'
    ];

    // view
    $this->load_template('master_data/menu_ingredients/page/bulk_add', $dataView);
  }

  public function edit()
  {

    // dataView
    $dataView = [
      'title' => 'Master Data',
      'subtitle' => 'Edit Menu ingredients'
    ];

    // view
    $this->load_template('master_data/menu_ingredients/page/edit', $dataView);
  }
}
