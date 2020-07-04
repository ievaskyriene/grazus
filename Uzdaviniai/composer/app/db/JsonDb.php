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
        foreach ($this->data as $key => $value) {
            if ($userId == $key) {
                $this->data[$key] = $userData;
            }
        }
        $this->save();
       
    }
 
    public function delete(string $userId) : void
    {

        unset($this->data[$userId]);
        $this->save();
        
    }
 
    public function show(string $userId) : array
    {
        foreach ($this->data as $key => $value) {
            if ($key == $userId) {
                return $value;
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
    

