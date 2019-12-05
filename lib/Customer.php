<?php
class Customer extends Db
{
    public function getCustomers()
    {
        return $this->query("SELECT * FROM customers JOIN groups on customers.group_id = groups.g_id" );
    }
    public function getCustomer($id)
    {
        return $this->query("SELECT * FROM customers WHERE c_id=".$id);
    }
}
?>