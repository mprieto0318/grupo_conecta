<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{

    public function index(){

        try {
  
          $data = Categoria::get();
          $response['data'] = $data;
          $response['success'] = true;
  
        } catch (\Exception $e) {
          $response['message'] = $e->getMessage();
          $response['success'] = false;
        }
        return $response;
  
      }


    public function create(Request $request){

        try {
  
          $insert['name'] = $request['name'];
  
          Categoria::insert($insert);
  
          $response['message'] = "Save succesful";
          $response['succes'] = true;
  
        } catch (\Exception $e) {
          $response['message'] = $e->getMessage();
          $response['succes'] = true;
        }
         
        return $response;
      }

      public function get($id){

        try {
  
          $data = Categoria::find($id);
  
          if ($data) {
            $response['data'] = $data;
            $response['message'] = "Load successful";
            $response['success'] = true;
          }
          else {
            $response['message'] = "Not found data id => $id";
            $response['success'] = false;
          }
  
        } catch (\Exception $e) {
          $response['message'] = $e->getMessage();
          $response['success'] = false;
        }
        return $response;
      }


      public function update(Request $request,$id){

        try {
  
          $data['name'] = $request['name'];
  
          Categoria::where("id",$id)->update($data);
  
          $response['message'] = "Updated successful";
          $response['success'] = true;
  
        } catch (\Exception $e) {
          $response['message'] = $e->getMessage();
          $response['success'] = false;
        }
        return $response;
  
      }

      public function delete($id){

        try {
          $res = Categoria::where("id",$id)->delete();
          $response['res'] = $res;
          $response['message'] = "Deleted successful";
          $response['success'] = true; 
        } catch (\Exception $e) {
          $response['message'] = $e->getMessage();
          $response['success'] = false;
        }
  
        return $response;
      }
}
