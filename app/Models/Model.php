<?php

namespace App\Models;

class Model
{
    protected $table;
    protected $fillable = [];
    protected $hidden = [];
    protected $casts = [];
    
    public function __construct($attributes = [])
    {
        $this->fill($attributes);
    }
    
    public function fill($attributes)
    {
        foreach ($attributes as $key => $value) {
            if (in_array($key, $this->fillable)) {
                $this->$key = $value;
            }
        }
        return $this;
    }
    
    public function toArray()
    {
        $array = get_object_vars($this);
        foreach ($this->hidden as $key) {
            unset($array[$key]);
        }
        return $array;
    }
}
// Commit 16 - 2022-02-10 10:25:20
// Commit 53 - 2022-05-26 20:57:45
// Commit 16 - 2022-01-09 22:22:33
// Commit 53 - 2022-01-25 22:06:33
// Commit 90 - 2022-02-19 22:00:40
// Commit 127 - 2022-03-27 21:50:51
