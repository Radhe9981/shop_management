<div class="container">
  <ul class="nav nav-tabs">
    <li class="active" ><a href="<?php echo base_url(); ?>Home/customer">Add</a></li>
    <li><a href="<?php echo base_url(); ?>Home/customertable">All</a></li>
    
  </ul>
                              
  <div class="table-responsive">          
  <table class="table table-bordered dataTable" id="customer_table">
    <thead class="bg-primary">
      <tr>
        <th>#</th>
        <th>Customer</th>
        <th>Product</th>
        <th>Mobile</th>
        <th>Total payment</th>
        <th>Due Payment</th>
        <th>Cash</th>
        <th>Option</th>
      </tr>
    </thead>
  <?php $i=0; 
    if(count($data)):?>
  <?php foreach ($data as $my):
    $i=$i+1;?>
    <tbody>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $my->customer_name;?></td>
        <td><?php echo $my->product;?></td>
        <td><?php echo $my->customer_mobile;?></td>
        <td><?php echo $my->total_pay;?></td>
        <td><?php echo $my->due_pay;?></td>
        <td><?php echo $my->cash;?></td>
        <td><a  href="<?php echo base_url(); ?>Home/customer_edit/<?php echo $my->id;?>" class="btn btn-info" role="button">Edit</a>
          <a href="<?php echo base_url(); ?>Home/customer_delete/<?php echo $my->id;?>"  class="btn btn-danger" role="button" onclick="return confirm('Do you want to delete this record')" >Delete</a>
          </td>
          
    
    
      </tr>
    </tbody>
     <?php endforeach;?>
        <?php else:?>
        <tr>
            <td colspan="3">No data available</td>
        </tr>
        <?php endif; ?> 
  </table>
  <?php echo $this->pagination->create_links(); ?>
  </div>
</div>
