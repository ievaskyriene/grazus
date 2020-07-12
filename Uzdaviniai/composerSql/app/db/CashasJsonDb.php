<?php
namespace App\DB;
use Main\CE;
class CashasJsonDb
{
    private $data;
    public function __construct() {
        if (!file_exists('/opt/lampp/htdocs/grazus/Uzdaviniai/composerSql/app/data.json')) {
                    file_put_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composerSql/app/data.json', json_encode([]));
                }
        $this->data = json_decode(file_get_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composerSql/app/data.json'), 1);
    }

    public function create() {
        $rate = CE::excange();
        $this->data[] = ['USDrate'=>$rate, 'time'=>time()];
        $this->save();
    }

    public function delete($index) {
        unset($this->data[$index]);
        $this->save();
    }
 
    public function update() {
        foreach ($this->data as $key => $value) {  
            if (($this->data[$key]['time'] + 60) < time()) {
                $this->delete($key);
                $this->create();
            }
        } 
    }
 
    public function showAll() {
        return $this->data;
    } 

    public function show() {
        foreach ($this->data as $key => $value) {  
            return $this->data[$key]['USDrate'];
        }
    }

    private function save() {
        file_put_contents('/opt/lampp/htdocs/grazus/Uzdaviniai/composerSql/app/data.json', json_encode($this->data));
    }

}
