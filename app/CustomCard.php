<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class CustomCard extends Model{
  protected $fillable=['name','manacost','supertype','type','power','toughness','abilities','flavortext'];

}
