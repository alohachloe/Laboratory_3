<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use Config\App;

class AdminController extends BaseController
{

    private $table_data;
    public function __construct()
    {
        $this-> table_data = new \App\Models\AdminModel();
    }

    public function table_data($table_data)
    {
        echo $table_data;
    }
    public function tables()
    {
        $data['tables'] = $this-> table_data->findAll();
        return view('tables', $data);
    }
    public function delete($id)
    {
        $this->table_data->delete($id);
        return redirect()->to('/tables');
    }
    public function edit($id)
    {
        $data = [
            'table_data'=> $this->table_data->findAll(),
            'tab' => $this->table_data->where('id', $id)->first(),
        ];
        return view('Products', $data);

    }
    public function save()
  {
      $id = isset($_POST['id']) ? $_POST['id'] : null; // Check if 'id' is set in $_POST

      $data = [
          'id' => $this->request->getVar('id'),
          'name' => $this->request->getVar('name'),
          'description' => $this->request->getVar('description'),
          'category' => $this->request->getVar('category'),
          'quantity' => $this->request->getVar('quantity'),
          'price' => $this->request->getVar('price'),
          'image' => $this->request->getVar('image'),
      ];

      if ($id != null) {
          $this->table_data->set($data)->where('id', $id)->update();
      } else {
          $this->table_data->save($data);
      }

      return redirect()->to('tables');
  }

    // public function tableData()
    // {
    //     return view('tableData');
    // }
    public function fPass()
    {
        return view('fPass');
    }

    public function AdminPage()
    {
        // session_start();

        // if (!isset($_SESSION['Logged-in']) || $_SESSION['Logged-in'] !== true) {
        //     return view('/');
        //     exit();
        return view('AdminPage');
    }
    public function insert()
    {
        return view('insert');
    }
}
