$(document).ready(function() { 
    $(".unit_modal_btn").on('click',function(){
        var modal = $("#exampleModal");                
        modal.find('input[type="radio"]').prop('checked', false); 
        modal.find('input[type="text"]').val("");
        modal.find('input[type="number"]').val("");
        modal.find('input[type="file"]').val("");
        modal.find('input[name="ready_for_possesion"]').val('yes').trigger('change');
        modal.find('.hidden_div').html('')
        modal.find('#output').attr('src','')
        modal.find('#unit_submit').addClass('unit_edit_btn').html("Submit");
        modal.find('.detail-box-title').html('Add unit/properties')
    })
    $(".select_amentites_btn").on('click',function(){
        var modal = $("#amenities");                
        modal.find('input[type="checkbox"]').prop('checked', false); 
        modal.find('input[type="number"]').val(""); 
    })
    var unit_id = 0;
    $('#unit_submit').on('click',function(){
        $('.remove_'+unit_id).remove()

        var formArray = $("#seller_form").serializeArray();
        var formDataObject = {};

        $.each(formArray, function(index, field) {
            formDataObject[field.name] = field.value;
        });       
        unit_id ++;
        console.log($("input[name='property_image']") )
        var commercialSpaceRadio = formDataObject['commercialSpaceRadio'] || null;
        var residentialFlatBunglowRadio = formDataObject['residentialFlatBunglowRadio'] || null;
        var plotandRadio = formDataObject['plotandRadio'] || null;
        var propertyDetailsRadio = formDataObject['propertyDetailsRadio'] || null;
        var total_no_unit = formDataObject['total_no_unit'] || null;
        var min_carpet_area = formDataObject['min_carpet_area'] || null;
        var max_carpet_area = formDataObject['max_carpet_area'] || null;
        var saleable_area = formDataObject['saleable_area'] || null;
        var rate_per = formDataObject['rate_per'] || null;
        var price_per_unit = formDataObject['price_per_unit'] || null;
        var stamp_duty_form = formDataObject['stamp_duty_form'] || null;
        var stamp_duty_to = formDataObject['stamp_duty_to'] || null;
        var registration_form = formDataObject['registration_form'] || null;
        var registration_to = formDataObject['registration_to'] || null;
        var gst_form = formDataObject['gst_form'] || null;
        var gst_to = formDataObject['gst_to'] || null;
        var infra_structure_development_form = formDataObject['infra_structure_development_form'] || null;
        var infra_structure_development_to = formDataObject['infra_structure_development_to'] || null;
        var price_per_unit_form = formDataObject['price_per_unit_form'] || null;
        var price_per_unit_to = formDataObject['price_per_unit_to'] || null;
        var ready_for_possesion = formDataObject['ready_for_possesion'] || null;
        var future_date = formDataObject['future_date'] || null;
        var property_image = $("input[name='property_image']").val() || null;
        var broucher = $("input[name='property_image']").val() || null;


        $("#unit_submit").html("Loading...").attr("disabled",true)  
        var output_img = $("#output").attr('src');

        var submitdata = {
            unit_id:unit_id,
            residentialFlatBunglowRadio: residentialFlatBunglowRadio,
            commercialSpaceRadio:commercialSpaceRadio,
            propertyDetailsRadio: propertyDetailsRadio,
            plotandRadio:plotandRadio,
            total_no_unit: total_no_unit,
            min_carpet_area: min_carpet_area,
            max_carpet_area: max_carpet_area,
            saleable_area: saleable_area,
            rate_per: rate_per,
            price_per_unit: price_per_unit,
            stamp_duty_form: stamp_duty_form,
            stamp_duty_to: stamp_duty_to,
            registration_form: registration_form,
            registration_to: registration_to,
            gst_form: gst_form,
            gst_to: gst_to,
            infra_structure_development_form: infra_structure_development_form,
            infra_structure_development_to: infra_structure_development_to,
            price_per_unit_form: price_per_unit_form,
            price_per_unit_to: price_per_unit_to,
            ready_for_possesion: ready_for_possesion,
            future_date: future_date,
            property_image: property_image,
            broucher: broucher,
        };
        var jsonString = JSON.stringify(submitdata); 
        var unit_data = `<div class="col-12" id="unit_${unit_id}">
                <div class="properties-detail-comn-box properties-detail-comn-box-bg-color">
                    <h2 class="detail-box-title detail-box-title-with-boder">Residential flat / bungalow > ${residentialFlatBunglowRadio || ''} > ${propertyDetailsRadio || ''}</h2>
                    <ul class="properties-detail-list properties-detail-list-2-part">
                        <li>units : <span>${total_no_unit || '-'}</span></li>
                        <li>rate per sq.ft : <span>₹ ${rate_per || '-'}</span></li>
                        <li>price : <span>₹ ${price_per_unit || '-'}</span></li>
                        <li>carpet area : <span>${min_carpet_area || ''} - ${max_carpet_area || ''} sq.ft.</span></li>
                        <li>saleable/chargeable area : <span>${saleable_area || '-'} sq.ft</span></li>
                        <li>maintenance : <span>₹ ${price_per_unit_form || ''} - ${price_per_unit_to || ''}</span></li>
                        <li>stamp duty : <span>${stamp_duty_form || ''} - ${stamp_duty_to || ''} %</span></li>
                        <li>registration : <span>₹ ${registration_form || ''} - ${registration_to || ''}</span></li>
                        <li>GST : <span>${gst_form || ''} - ${gst_form || ''} %</span></li>
                        <li>infra structure development : <span>₹ ${infra_structure_development_form || ''} - ${infra_structure_development_to || ''}</span></li>
                        <li>possession : <span>${ready_for_possesion || '-'}</span></li>
                        <li>Future date : <span>${future_date || '-'}</span></li>
                        <li>Image : <span> <img  src="${output_img || '-'}"></span></li>
                        <li>Broucher : <span>${broucher || '-'}</li>
                    </ul>
                    <input type="hidden" value='${jsonString}' name="unit_values[]" />
                </div>
                <div class="edit-delete-comn-row">
                    <button class="edit-delete-btn edit-unit-btn"   data-unit_id ='${jsonString}'><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="edit-delete-btn delete-unit-btn" data-delete_id="${unit_id}" data-unit_id ='${jsonString}'><i class="fa-solid fa-trash-can"></i></button>
                </div>
            </div>`;
            $("#unit_show_box").append(unit_data);
            $('#exampleModal').modal('hide');
            $("#unit_submit").html("Submit").attr("disabled",false)
            toastr.success("Unit/Properties Added successfully") 
    })
    $(document).on('click','.edit-unit-btn',function(e){
        e.preventDefault();
        const unit_value = $(this).data('unit_id') 
        var modal = $("#exampleModal");                
        modal.find('input[name="residentialFlatBunglowRadio"]').filter('[value="' + unit_value.residentialFlatBunglowRadio + '"]').prop('checked', true); 
        modal.find('input[name="commercialSpaceRadio"]').filter('[value="' + unit_value.commercialSpaceRadio + '"]').prop('checked', true); 
        modal.find('input[name="plotandRadio"]').filter('[value="' + unit_value.plotandRadio + '"]').prop('checked', true); 
        modal.find('input[name="propertyDetailsRadio"]').filter('[value="' + unit_value.propertyDetailsRadio + '"]').prop('checked', true); 
        modal.find('input[name="total_no_unit"]').val(unit_value.total_no_unit)
        modal.find('input[name="min_carpet_area"]').val(unit_value.min_carpet_area)
        modal.find('input[name="max_carpet_area"]').val(unit_value.max_carpet_area)
        modal.find('input[name="saleable_area"]').val(unit_value.saleable_area)
        modal.find('input[name="rate_per"]').val(unit_value.rate_per)
        modal.find('input[name="price_per_unit"]').val(unit_value.price_per_unit)
        modal.find('input[name="stamp_duty_form"]').val(unit_value.stamp_duty_form)
        modal.find('input[name="stamp_duty_to"]').val(unit_value.stamp_duty_to)
        modal.find('input[name="registration_form"]').val(unit_value.registration_form)
        modal.find('input[name="registration_to"]').val(unit_value.registration_to)
        modal.find('input[name="gst_form"]').val(unit_value.gst_form)
        modal.find('input[name="gst_to"]').val(unit_value.gst_to)
        modal.find('input[name="infra_structure_development_form"]').val(unit_value.infra_structure_development_form)
        modal.find('input[name="infra_structure_development_to"]').val(unit_value.infra_structure_development_to)
        modal.find('input[name="price_per_unit_form"]').val(unit_value.price_per_unit_form)
        modal.find('input[name="price_per_unit_to"]').val(unit_value.price_per_unit_to)
        modal.find('input[name="ready_for_possesion"]').val(unit_value.ready_for_possesion).trigger('change');
        modal.find('input[name="future_date"]').val(unit_value.future_date) 
        modal.find('#unit_submit').addClass('unit_edit_btn').html("Update");
        modal.find('.detail-box-title').html('Update unit/properties')
        modal.modal('show');
        $('#unit_'+unit_value.unit_id).addClass('remove_'+unit_value.unit_id)
    })
    $(document).on('click','.delete-unit-btn',function(e){
        e.preventDefault();
        const unit_id = $(this).data('delete_id')   
        $('#unit_'+unit_id).remove()
        toastr.success("Unit/Properties Delete successfully") 
    })
    $(document).on('click','#add_amenities_btn',function(e){
        e.preventDefault();
        const amenities =  $("#add_amenities_value").val();
        if(amenities){
            const new_amenities = ` <li>
                                        <input type="checkbox" name="amenities[]" value="${amenities}" class="comn-form-checkbox" id="${amenities}" checked>
                                        <label for="${amenities}">${amenities}</label>
                                    </li>`;
            $(".amenities_list").append(new_amenities)
        $("#add_amenities_value").val('');
        $("#amenities_error").hide()
        }else{
            $("#amenities_error").show()
        }
    })
    $(document).on('click','#nearby_add_btn',function(e){
        e.preventDefault();
        const nearby =  $("#nearby_value").val();
        const nearby_km =  $("#nearby_km_value").val();
        if(nearby && nearby_km){
            const new_nearby = `<li>
                                    <input type="checkbox" name="near_by[]" value="${nearby}" class="comn-form-checkbox" id="${nearby}" checked>
                                    <label for="${nearby}">${nearby}</label>
                                    <input type="number" class="comn-form-control" value="${nearby_km}" name="property_distance[]" placeholder="Property Distance (KM)">
                                </li>`;
            $(".nearby-comn-list").append(new_nearby)
        $("#nearby_value").val('');
        $("#nearby_km_value").val('');
        $("#nearby_error").hide()
        }else{
            $("#nearby_error").show()
        }
    })
    
    var nearby_id = 0;
    $("#nearby_submit_btn").on("click",function(e){
        e.preventDefault();
        nearby_id ++ 
        var amenities = [];
        $("[name='amenities[]']:checked").each(function() {
            amenities.push($(this).val());
        });

        var near_by = [];
        $("[name='near_by[]']").each(function() {
            var checkbox = $(this);
            var value = checkbox.val();
            var isChecked = checkbox.is(":checked");
            
            near_by.push({
                value: value,
                isChecked: isChecked
            });
        });



        var property_distance = [];
        $("[name='property_distance[]']").each(function() {
            property_distance.push($(this).val());
        }); 

        var combine_nearby = near_by.map(function(name, index) {
            if (name.isChecked == true) {
                var distance = property_distance[index] || '';
                return name.value + (distance ? '/' + distance + 'km' : '');
            }
        }).filter(function(item) {
            return item !== undefined;
        }); 
        var near_by_new_array = amenities.concat(combine_nearby)        
        
        $("#amenities").modal('hide');
        toastr.success("Amenities/Nearby Added successfully")
        $(".amenities-data-row").html('');
        for(const value of near_by_new_array){
            const amenities_div = `<aside  class="deleteAmenities">${value} <span><i class="fa-regular fa-circle-xmark"></i></span><input type="hidden" name="nearByValue[]" value="${value}" /></aside>`;
            $(".amenities-data-row").append(amenities_div);
        }
          
    })
    $(document).on('click','.deleteAmenities',function(){
        $(this).remove()
        toastr.error("Amenities/Nearby Removed successfully")
    }) 
       
    
})