<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductosModel;

class Productos extends BaseController
{
protected $productos;
public function __construct()
{
    $this->productos = new ProductosModel();

}

    public function index($activo =1)
    {
       
       $productos = $this->productos->where('activo', $activo)->findAll();
       $data =['titulo' =>'Productos', 'datos' =>$productos];
        echo view ('header');
        echo view('productos/productos', $data);
        echo view('footer');

    }

    public function eliminados($activo =0)
    {
       
       $productos = $this->productos->where('activo', $activo)->findAll();
       $data =['titulo' =>'Productos eliminados', 'datos' =>$productos];
        echo view ('header');
        echo view('productos/eliminados', $data);
        echo view('footer');

    }

    public function nuevo(){
        $data =['titulo' =>'Agregar Productos' ];
        echo view ('header');
        echo view('productos/nuevo', $data);
        echo view('footer'); 
    
    
    }

    public function insertar()
    {
        $this->productos->save(['nombre' =>$this->request->getPost('nombre')]);
        return redirect()->to(base_url().'/productos');
    }

    //
    public function editar($id){

        $unidad = $this->productos->where('id', $id)->first();
        $data =['titulo' =>'Actualizar Unidad', 'datos'=>$unidad ];
        echo view ('header');
        echo view('productos/editar', $data);
        echo view('footer'); 
    
    
    }

    public function actualizar()
    {
        $this->productos->update($this->request->getpost('id'),['nombre' =>
        $this->request->getPost('nombre')]);
        return redirect()->to(base_url().'/productos');
    }

    public function eliminar($id)
    {
        $this->productos->update($id, ['activo' =>0]);
        return redirect()->to(base_url().'/productos');
    }

    public function reingresar($id)
    {
        $this->productos->update($id, ['activo' =>1]);
        return redirect()->to(base_url().'/productos');
    }


}


