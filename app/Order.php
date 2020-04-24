<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['order_total', 'order_tax', 'order_subTotal','customer_firstname', 'customer_lastname','customer_email','street_address','city','state','zipcode', 'order_ref', 'cart'];
}
