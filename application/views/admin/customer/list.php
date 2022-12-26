<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>

<div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <i class="fa fa-truck" aria-hidden="true"></i> Agency
        <small>Add, Edit</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>admin/agency/addnew"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Agency List</h3>
                     <div class="box-tools">
                         
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <!-- <table class="display" cellspacing="0" width="100%" id="example">
                    <thead>
                    <tr>
                      <th>Action</th>
                      <th>Customer Title</th>                                            
                      <th>Customer Mobile</th>                                            
                      <th>Customer Alter Mobile</th> 
                      <th>State</th> 
                      <th>District</th> 
                      <th>City</th>                                            
                      <th>Call Type</th>
                      <th>Call Dir</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                  </table> -->




                                 <form method="GET" action="<?php echo base_url()?>admin/customer/addnew">
               <h5 class="card-header bg-success text-white border-bottom ">
               <div class="row ">
               <div class="col-sm-6">
               Inquiries
               </div>
               <div class="col-sm-6">
               <div class="float-end">
               <?php if($this->session->userdata('role') == 1){  ?>

               <a href="<?php echo base_url()?>admin/customer/export_stat?<?php echo $_SERVER['QUERY_STRING']?>" class="btn btn-info btn-sm">Export</a> 

               <?php } ?>

               <a href="<?php echo base_url()?>admin/customer/addnew" class="btn btn-info btn-sm">Clear</a> 
               <button type="submit" class="btn btn-info btn-sm"> <i class="fa fa-search"></i> Submit Filter</button>
               <input name="form_type" type="hidden" value="inquiry">
               </div>
               </div>
               </div>
               </h5>
               <div class="card-body">
               <div class="table-responsive mytablestyle">
               <table class="table align-middle table-nowrap mb-0 table-striped" id="example">
               <thead class="table-light">
               <tr>
               <th class="align-middle bg-success text-white">Action</th>
               <th class="align-middle bg-success text-white">Date</th>
               <th class="align-middle bg-success text-white"><input class="form-control-sm" type="text" name="search_customer_id" id="search_customer_id" placeholder="Farmer ID"  style="width: 70px;"  ></th>
               <th class="align-middle bg-success text-white"><input class="form-control-sm" type="text" name="search_name" id="search_name" placeholder="Name"  style="width: 60px;" ></th>
               <th class="align-middle bg-success text-white"><input class="form-control-sm" type="text" name="search_mobile" id="search_mobile" placeholder="Mobile"  style="width: 60px;" ></th>
               <th class="align-middle bg-success text-white"><input class="form-control-sm" type="text" name="search_alt_mobile" id="search_alt_mobile" placeholder="ALT Mobile"  style="width: 60px;" ></th>
               <th class="align-middle bg-success text-white">
               <select class=" form-control select2 " id="state2" name="state2" aria-label="Floating label select example" style="width: 150px;" onchange="stateChange2()">
               <option value="" selected>Choose State</option>
               <?php
                  if(!empty($states))
                  {
                          foreach ($states as $state) {
                              ?>
               <option value="<?php echo $state->id;?>"><?php echo $state->name;?></option>
               <?php
                  }
                  }
                  ?>
               </select>
               <input type="text" name="other_state2" id="other_state2"  style="display: none;" class="form-control form-control-sm mb-2" placeholder="Please Enter State Name" />
               </th>
               <th class="align-middle bg-success text-white">
               <select class=" form-control select2 " id="district2" name="district2" aria-label="Floating label select example"   style="width: 150px;" onchange="districtChange2()">
               <option value="" selected>Choose District</option>
               </select>
               <input type="text" name="other_district2" id="other_district2"  style="display: none;" class="form-control form-control-sm mb-2" placeholder="Please Enter District Name" />
               </th>
               <th class="align-middle bg-success text-white">
               <select class=" form-control  select2 " id="city2" name="city2" aria-label="Floating label select example" style="width: 150px;"   onchange="cityChange2()">
               <option value="" selected>Choose Tehsil</option>
               </select>
               <input type="text" name="other_city2" id="other_city2"  style="display: none;" class="form-control form-control-sm mb-2" placeholder="Please Enter Tehsil Name" />
               </th>
               <th class="align-middle bg-success text-white">
               <select class=" form-control  form-control-sm select2" id="farmer_type2" name="farmer_type2" aria-label="Floating label select example"  style="width: 150px;"  >
               <option value="">FarmerType</option>
               <?php
                  if(!empty($farmertypes))
                  {
                      foreach ($farmertypes as $farmertype) {
                          ?>
               <option value="<?php echo $farmertype->id;?>" ><?php echo $farmertype->title;?></option>
               <?php
                  }
                  }
                  ?>
               </select>
               </th>
               <th class="align-middle bg-success text-white">
               <select class=" form-control  form-control-sm select2" id="crop_id2" name="crop_id2" aria-label="Floating label select example"  style="width: 150px;" >
               <option value="">Crop</option>
               <?php
                  if(!empty($crop_lists))
                  {
                      foreach ($crop_lists as $crop_list) {
                          ?>
               <option value="<?php echo $crop_list->id;?>" ><?php echo $crop_list->title;?></option>
               <?php
                  }
                  }
                  ?>
               </select>
               </th>
               <th class="align-middle bg-success text-white">
               <select class=" form-control  form-control-sm select2" id="call_direction2" name="call_direction2" aria-label="Floating label select example"  style="width: 75px;"  >
               <option value="">CallDirection</option>
               <?php
                  if(!empty($calldirections))
                  {
                      foreach ($calldirections as $calldirection) {
                          ?>
               <option value="<?php echo $calldirection->id;?>"><?php echo $calldirection->title;?></option>
               <?php
                  }
                  }
                  ?>
               </select>
               </th>
               <th class="align-middle bg-success text-white">
               <select class=" form-control  form-control-sm select2" id="call_type2" name="call_type2" aria-label="Floating label select example"  style="width: 75px;" >
               <option value="">CallType</option>
               <?php
                  if(!empty($calltypes))
                  {
                      foreach ($calltypes as $calltype) {
                          ?>
               <option value="<?php echo $calltype->id;?>"><?php echo $calltype->title;?></option>
               <?php
                  }
                  }
                  ?>
               </select>
               </th>
               <th class="align-middle bg-success text-white" >Followup date</th>
               <th class="align-middle bg-success text-white" >Assigned to</th>
               <th class="align-middle bg-success text-white" >Entry made by</th>
               <th class="align-middle bg-success text-white" >Entry Date</th>
               <th class="align-middle bg-success text-white" >Last Follower</th>
               <th class="align-middle bg-success text-white" >Last Call Type</th>
               </tr>
               </thead>
               <tbody>
                  
               </tbody>
               </table>
               </div>
               </div>
               </form>














                  
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>

<!-- Delete Script-->
  <script type="text/javascript">
    jQuery(document).ready(function(){
        //$('#example').DataTable();

         jQuery(document).on("click", ".deletebtn", function(){

          var userId = $(this).data("userid"),
            hitURL = "<?php echo base_url() ?>admin/agency/delete",
            currentRow = $(this);
          
          var confirmation = confirm("Are you sure to delete this Agency ?");
          
          if(confirmation)
          {
            jQuery.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { id : userId } 
            }).done(function(data){           
              currentRow.parents('tr').remove();
              if(data.status = true) { alert("successfully deleted"); }
              else if(data.status = false) { alert("deletion failed"); }
              else { alert("Access denied..!"); }
            });
          }
    });
    });
   
</script>
<!-- Get Databse List -->
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#example').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/customer/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
});
</script>

<!-- Status Change -->
  <script type="text/javascript">
    jQuery(document).ready(function(){
         jQuery(document).on("change", ".statusBtn", function(){

          var userId = $(this).attr("data-id");
          var value  = $(this).val();

            hitURL = "<?php echo base_url() ?>admin/agency/statusChange",
            currentRow = $(this);
          
            jQuery.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { id : userId, status : value } 
            }).done(function(data){           
              //currentRow.parents('tr').remove();
              if(data.status = true) { alert("successfully status changed"); }
              else if(data.status = false) { alert("status failed failed"); }
              else { alert("Access denied..!"); }
            });
          
    });
    });
   
</script>








