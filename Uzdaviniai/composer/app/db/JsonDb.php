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
  
    function sortData($data){
        uasort($data, [$this,'surnameSort']);
        return $data;
       
    }

     public function surnameSort($a, $b) {
        $aLast = $a['surname'];
        $bLast = $b['surname'];
        return strcasecmp($aLast, $bLast);
    }
    
     
}
    

