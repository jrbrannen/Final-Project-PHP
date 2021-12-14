/**
 * checks fields in the contact form for validation
 */
function validateContactForm(){
    
    // input values from contact form
    let first_name = document.contactForm.first_name.value;
    let last_name = document.contactForm.last_name.value;
    let email_address = document.contactForm.email_address.value;
    let phone_number = document.contactForm.phone_number.value;
    let reason = document.contactForm.reason.value;
    let comments = document.contactForm.comments.value;
    
    // check fields for empty values
    if (first_name == null || first_name== ""){  
        alert("First name can't be blank");  
        return false;  
    }else if (last_name == null || last_name == ""){  
        alert("Last name can't be blank");  
        return false;  
    }else if (email_address == null || email_address == "") {
        alert("Email can't be blank");
        return false;
    }else if (phone_number == null || phone_number == "") {
        alert("Phone number can't be blank");
        return false;
    }else if (reason == null || reason =="") {
        alert("A reason for contact must be selected");
        return false;
    }else if (comments == null || comments =="") {
        alert("Please enter a comment");
        return false;
    }

    // validate email address
    let numLetterPattern = /^[0-9a-zA-Z]+$/;
    let emailPattern = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
    let secToLastChar = email_address.charAt(email_address.length - 2);

    for(let i = 0; i < email_address.length; i++){
        if(numLetterPattern.test(email_address.substring(i, i + 1)) == false && (numLetterPattern.test(email_address.substring(i + 1, i + 2)) == false) ){
            alert("Please enter a valid email"); 
            return false;
        }
    }
    if(emailPattern.test(email_address) && numLetterPattern.test(email_address.substring(0,1)) && (numLetterPattern.test(secToLastChar)) == false ){
        alert("Please enter a valid email");
        return false;
    }
    // validate phone number
    let phoneNumPattern = /^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;
    if(phoneNumPattern.test(phone_number) == false){
        alert("Please enter a valid phone number with area code");
        return false;
    }
    // validate name and comments for special characters
    let specChars = /[\',\",\/,\\,\<,\>,\*,\-]/;
    if(specChars.test(first_name) || specChars.test(last_name) || specChars.test(comments)){
        alert("Name and comments can't contain some special characters")
        return false;
    }
    // validate comments for length
    if(comments.length > 10){
        alert("Comments can't contain over 500 characters.")
        return false;
    }
}

/**
 * validates the input and update form to
 * make fields be required
 */
function validateInsertForm(){

    // input values from input form
    let vacation_name = document.insert_vacation.vacation_name.value;
    let vacation_image = document.insert_vacation.vacation_image.value;
    let vacation_description = document.insert_vacation.vacation_description.value;
    let vacation_days = document.insert_vacation.vacation_days.value;
    let vacation_nights = document.insert_vacation.vacation_nights.value;
    let vacation_adult_price = document.insert_vacation.vacation_adult_price.value;
    let vacation_child_price = document.insert_vacation.vacation_child_price.value;
    let vacation_group_size = document.insert_vacation.vacation_group_size.value;
    let vacation_spots_remaining = document.insert_vacation.vacation_spots_remaining.value;
    let vacation_date_avail = document.insert_vacation.vacation_date_avail.value;
    let vacation_check_in_time = document.insert_vacation.vacation_check_in_time.value;
    // check fields for empty values
    if (vacation_name == null || vacation_name== ""){  
        alert("Name is required");  
        return false;  
    }else if (vacation_image == null || vacation_image == ""){  
        alert("Image is required");  
        return false;  
    }else if (vacation_description == null || vacation_description == "") {
        alert("Description is required");
        return false;
    }else if (vacation_days == null || vacation_days == "") {
        alert("Days is required");
        return false;
    }else if (vacation_nights == null || vacation_nights =="") {
        alert("Nights is required");
        return false;
    }else if (vacation_adult_price == null || vacation_adult_price =="") {
        alert("Adult price is required");
        return false;
    }else if (vacation_child_pricee == null || vacation_child_price =="") {
        alert("Child price is required");
        return false;
    }else if (vacation_group_size == null || vacation_group_size =="") {
        alert("Group size is required");
        return false;
    }else if (vacation_spots_remaining == null || vacation_spots_remaining =="") {
        alert("Spots remaining is required");
        return false;
    }else if (vacation_date_avail == null || vacation_date_avail =="") {
        alert("Date available is required");
        return false;
    }else if (vacation_check_in_time == null || vacation_check_in_time =="") {
        alert("Check in time is required");
        return false;
    }   
}

function validateUpdateForm(){
    // input values from update form
    let vacation_name = document.update_vacation.vacation_name.value;
    let vacation_image = document.update_vacation.vacation_image.value;
    let vacation_description = document.update_vacation.vacation_description.value;
    let vacation_days = document.update_vacation.vacation_days.value;
    let vacation_nights = document.update_vacation.vacation_nights.value;
    let vacation_adult_price = document.update_vacation.vacation_adult_price.value;
    let vacation_child_price = document.update_vacation.vacation_child_price.value;
    let vacation_group_size = document.update_vacation.vacation_group_size.value;
    let vacation_spots_remaining = document.update_vacation.vacation_spots_remaining.value;
    let vacation_date_avail = document.update_vacation.vacation_date_avail.value;
    let vacation_check_in_time = document.update_vacation.vacation_check_in_time.value;
    // check fields for empty values
    if (vacation_name == null || vacation_name== ""){  
        alert("Name is required");  
        return false;  
    }else if (vacation_image == null || vacation_image == ""){  
        alert("Image is required");  
        return false;  
    }else if (vacation_description == null || vacation_description == "") {
        alert("Description is required");
        return false;
    }else if (vacation_days == null || vacation_days == "") {
        alert("Days is required");
        return false;
    }else if (vacation_nights == null || vacation_nights =="") {
        alert("Nights is required");
        return false;
    }else if (vacation_adult_price == null || vacation_adult_price =="") {
        alert("Adult price is required");
        return false;
    }else if (vacation_child_pricee == null || vacation_child_price =="") {
        alert("Child price is required");
        return false;
    }else if (vacation_group_size == null || vacation_group_size =="") {
        alert("Group size is required");
        return false;
    }else if (vacation_spots_remaining == null || vacation_spots_remaining =="") {
        alert("Spots remaining is required");
        return false;
    }else if (vacation_date_avail == null || vacation_date_avail =="") {
        alert("Date available is required");
        return false;
    }else if (vacation_check_in_time == null || vacation_check_in_time =="") {
        alert("Check in time is required");
        return false;
    }
}

