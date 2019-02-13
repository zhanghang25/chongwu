<?php
//zend 锦尚中国源码论坛
namespace App\Entities;

class OrderInvoice extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'order_invoice';
	protected $primaryKey = 'invoice_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'inv_payee', 'tax_id');
	protected $guarded = array();

	public function getUserId()
	{
		return $this->user_id;
	}

	public function getInvPayee()
	{
		return $this->inv_payee;
	}

	public function getTaxId()
	{
		return $this->tax_id;
	}

	public function setUserId($value)
	{
		$this->user_id = $value;
		return $this;
	}

	public function setInvPayee($value)
	{
		$this->inv_payee = $value;
		return $this;
	}

	public function setTaxId($value)
	{
		$this->tax_id = $value;
		return $this;
	}
}

?>
