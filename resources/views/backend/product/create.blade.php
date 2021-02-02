@extends('backend.layout.master')
@section('content')
     <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row">
                
                <div class="col-md-12">
                  <div class="tile">
            <h3 class="tile-title">Add Product</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Product Name</label>
                  <input class="form-control" type="text" placeholder="Enter Product Name" name="product_name">
                </div>
               <div class="form-group">
                    <label class="control-label">Product Brand</label>
                    <select class="form-control" id="exampleSelect1" name="brand">
                      <option>1</option>
                      <option>2</option>

                    </select>
                  </div>
                <div class="form-group">
                  <label class="control-label">Product Summary</label>
                  <textarea class="form-control" rows="4" placeholder="Enter Product Summary" name="summary"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Product Description</label>
                  <textarea class="form-control" rows="4" placeholder="Enter Product Description" name="description"></textarea>
                </div>
              
                 
                <div class="form-group">
                    <label class="control-label">Product Category</label>
                    <select class="form-control" id="exampleSelect1" name="category">
                      <option>1</option>
                      <option>2</option>

                    </select>
                  </div>
         
                    <div class="form-group">
                      <label class="control-label">Product Sub Category</label>   
                      <select class="form-control" id="exampleSelect1" name="sub_category">
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="control-label">Condition</label>   
                      <select class="form-control" id="exampleSelect1" name="condition">
                        <option value="">--Select Condition--</option>
                        <option value="default">Default</option>
                        <option value="new">New</option>
                        <option value="hot">Hot</option>
                      </select>
                    </div>
                   <div class="form-group">
                    <label class="control-label">Product Price</label>
                    <input class="form-control" type="text" placeholder="Enter Product Price" name="price">
                  </div>
                   <div class="form-group">
                    <label class="control-label">Product Offer Price</label>
                    <input class="form-control" type="text" placeholder="Enter Offer Price" name="offer">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Quantity</label>
                    <input class="form-control" type="text" placeholder="Enter Quantity" name="stock">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Product Image</label>
                    <input class="form-control" type="file" name="image">
                  </div>
                 <div class="form-group">
                      <label class="control-label">Status</label>   
                      <select class="form-control" id="exampleSelect1" name="status">
                         <option value="active">Active</option>
                         <option value="inactive">Inactive</option>
                      </select>
                 </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
        
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   @endsection