<?php
namespace App\DB;

use App\DB\DataBase;
use Ramsey\Uuid\Uuid;


class JsonDb implements DataBase
{

    private $data;


    public function __construct()
    {
  
        if (!file_exists('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json')) {
            file_put_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json'), 1);
    }

    
    public function create(array $userData) : void
    {
       
        $uuid = (string) Uuid::uuid4();
        $this->data[$uuid] = $userData;
       // $this->data[] = $userData;
        $this->save();

    }
 
    public function update(string $userId, array $userData) : void
    {
        
    }
 
    public function delete(string $userId) : void
    {
        _d("tatat");
        unset($this->data[$userId]);
        $this->save();
        
    }
 
    public function show(string $userId) : array
    {
        $data = json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json'),1);
        foreach ($data as $key => $user){

            if($userId == $key){
                
                return $data[$key];
            }
        }   
    }
    
    public function showAll() : array
    {
        return json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json'),1);
    }

    private function save()
    {
        file_put_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composer/app/data2.json', json_encode($this->data));
    }

    // public function sortdata($arr){
    //         for ($i=0; $i<count($arr)-1; $i++){
            
    //                 for($j=$i+1; $j<count($arr); $j++){
    //                     if($arr[$i]['surname'] > $arr[$j]['surname']){
    //                         $temp = $arr[$i];
    //                         $arr[$i] = $arr[$j];
    //                         $arr[$j] = $temp;
    //                     }
    //                 }

    //         }
    //         return $arr;
    // }
        //$data =sortdata($data);
}
    

