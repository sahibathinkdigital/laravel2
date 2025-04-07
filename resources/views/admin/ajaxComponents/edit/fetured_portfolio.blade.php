 <div class="card-header">
     Create  Feautured Portfolio
 </div>
 <div class="card-body">
     <form id="featured_form" enctype="multipart/form-data">
         <div class="row">
             <div class="col-lg-4 mb-3">
                 <label>Featured Portfolio <span class="text-danger">*</span></label>
                 <select name="featured_portfolio" id="" class="form-control">
                     <option value="">-- Select Featured Portfolio --</option>
                     @foreach ($portfolio as $row)
                         <option value="{{ $row->id }}">{{ $row->title }}</option>
                     @endforeach
                 </select>
             </div>

             <div class="col-lg-4 mb-3">
                 <label>Column Span <span class="text-danger">*</span></label>
                 <select name="column_span" id="" class="form-control">
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                     <option value="9">9</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                 </select>
             </div>
         </div>
         <div class="d-flex justify-content-end">
             <button type="submit" class="btn btn-md btn-success px-5">Submit</button>
         </div>
     </form>
 </div>
