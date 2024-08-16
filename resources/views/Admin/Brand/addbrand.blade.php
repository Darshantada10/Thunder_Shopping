<div class="modal fade" id="addbrand" tabindex="-1" aria-labelledby="addbrandlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addbrandlabel">
                    Add Brand
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>


            {{-- <form onsubmit="event.preventDefault(); branddata();" > --}}
            <form id="BrandData" >
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="category_id">Select Category</label>
                        <select name="category_id" id="category_id" required class="form-control">
                            <option value="">--Select Category--</option>
                            @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name">Brand Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug">Brand Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control">
                        @error('slug')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="status">Brand Status</label>
                        <input type="checkbox" name="status" id="status">
                        @error('status')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>



                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                
            </form>
        </div>
    </div>

</div>


<div class="modal fade" id="updatebrand" tabindex="-1" aria-labelledby="updatebrandlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatebrandlabel">
                    Update Brand
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>


            {{-- <form onsubmit="event.preventDefault(); branddata();" > --}}
            <form id="UpdateBrandData" >
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="category_id">Select Category</label>
                        <select name="category_id" id="category_id" required class="form-control">
                            <option value="">--Select Category--</option>
                            @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <input type="hidden" id="id" name="id" >
                    <div class="mb-3">
                        <label for="name">Brand Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug">Brand Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control">
                        @error('slug')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="status">Brand Status</label>
                        <input type="checkbox" name="status" id="status">
                        @error('status')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>



                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                
            </form>
        </div>
    </div>

</div>

<div class="modal fade" id="deletebrand" tabindex="-1" aria-labelledby="deletebrandlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deletebrandlabel">
                    Delete Brand
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>


            {{-- <form onsubmit="event.preventDefault(); branddata();" > --}}
            <form id="DeleteBrandData" >
                <div class="modal-body">

                 <h3>Are you sure you want to delete this brand?</h3>



                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="confirmdelete" class="btn btn-danger">Delete</button>
                </div>
                
            </form>
        </div>
    </div>

</div>




@push('script')
    
    <script>

function deletebrand(id)
        {

            document.getElementById('confirmdelete').onClick = function(){

              
              
              
            fetch(`/admin/api/brand/delete/${id}`,{
                method: 'get',
                // body: brandformdata,
                headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')}
            }).then(response=>response.json())
            .then(data=> {

                // console.log(data.success);

                // document.getElementById('sucess') = data.success;
                // $('#success').text(data.success).show();
                
                // $('#updatebrand').modal('hide')
                // $('#updatebrand input').val('')
                // $('#updatebrand input[type="checkbox"]').prop('checked',false)
                // $('#updatebrand select').val('')

                document.getElementById('success').innerText = data.success;
                displayallbrands();
              }).catch(error => console.error('Error : ',error));
              
            }
          // var deletebrandmodal = document.getElementById('deletebrand');

          // deletebrandmodal.addEventListener('show.bs.modal',function(event){
            
          // })

        }
        
    // function branddata()
    // {
    //     console.log("inside function");
        
    // }

        document.getElementById('BrandData').addEventListener('submit',function(event){
            event.preventDefault();



            var brandformdata = new FormData(this)
            // console.log(brandformdata);
            
            var data = ""
            brandformdata.forEach(function (value,key) 
            {
                data += `${key} + " : " + ${value} `;
                // console.log(key , value);
                    
            });
            // console.log(data);
            

            fetch('http://localhost:8000/admin/brand/create',{
                method: 'post',
                body: brandformdata,
                headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')}
            }).then(response=>response.json())
            .then(data=> {

                // console.log(data.success);

                // document.getElementById('sucess') = data.success;
                // $('#success').text(data.success).show();
                
                $('#addbrand').modal('hide')
                $('#addbrand input').val('')
                $('#addbrand input[type="checkbox"]').prop('checked',false)
                $('#addbrand select').val('')

                document.getElementById('success').innerText = data.success;
                displayallbrands();
            }).catch(error => console.error('Error : ',error));

        });

        document.getElementById('UpdateBrandData').addEventListener('submit',function(event){
            event.preventDefault();



            var brandformdata = new FormData(this)
            // console.log(brandformdata);
            
            var data = ""
            brandformdata.forEach(function (value,key) 
            {
                data += `${key} + " : " + ${value} `;
                // console.log(key , value);
                    
            });
            var updateid = brandformdata.get('id')
            // console.log(updateid);
            

            fetch(`/admin/api/brand/update/${updateid}`,{
                method: 'post',
                body: brandformdata,
                headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')}
            }).then(response=>response.json())
            .then(data=> {

                // console.log(data.success);

                // document.getElementById('sucess') = data.success;
                // $('#success').text(data.success).show();
                
                $('#updatebrand').modal('hide')
                $('#updatebrand input').val('')
                $('#updatebrand input[type="checkbox"]').prop('checked',false)
                $('#updatebrand select').val('')

                document.getElementById('success').innerText = data.success;
                displayallbrands();
            }).catch(error => console.error('Error : ',error));

        });
      
      
        // document.getElementById('DeleteBrandData').addEventListener('submit',function(event){
        //     // event.preventDefault();



        //     // var brandformdata = new FormData(this)
        //     // console.log(brandformdata);
            
        //     // var data = ""
        //     // brandformdata.forEach(function (value,key) 
        //     // {
        //         // data += `${key} + " : " + ${value} `;
        //         // console.log(key , value);
                    
        //     // });
        //     // var updateid = brandformdata.get('id')
        //     // console.log(updateid);
            

        //     fetch(`/admin/api/brand/delete/${updateid}`,{
        //         method: 'post',
        //         // body: brandformdata,
        //         headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')}
        //     }).then(response=>response.json())
        //     .then(data=> {

        //         // console.log(data.success);

        //         // document.getElementById('sucess') = data.success;
        //         // $('#success').text(data.success).show();
                
        //         // $('#updatebrand').modal('hide')
        //         // $('#updatebrand input').val('')
        //         // $('#updatebrand input[type="checkbox"]').prop('checked',false)
        //         // $('#updatebrand select').val('')

        //         document.getElementById('success').innerText = data.success;
        //         displayallbrands();
        //     }).catch(error => console.error('Error : ',error));

        // });


    </script>

@endpush