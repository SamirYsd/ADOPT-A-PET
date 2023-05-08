// Check if the user filled all the fields.
function checkInput(){
   let checkradioDog = document.getElementsByName("requirements1");
   let checkradioCat = document.getElementsByName("requirements2");
   let checkGenderDog = document.getElementsByName("gender1");
   let checkGenderCat = document.getElementsByName("gender2");
   let checkedradioDog = false;
   let checkedradioCat = false;
   let checkedGenderDog = false;
   let checkedGenderCat = false;
   let dropdownselect1 = document.getElementById("select1").value;
   let dropdownselect2 = document.getElementById("select2").value;
   let dropdownselect3 = document.getElementById("select3").value;
   let dropdownselect4 = document.getElementById("select4").value;
    // check if the user checked all radio buttons 
   for(let i =0; i< checkGenderDog.length; i++){
    if(checkGenderDog[i].checked){
    checkedGenderDog = true;
    break;}
   }
   for(let i =0; i< checkGenderCat.length; i++){
    if(checkGenderCat[i].checked){
    checkedGenderCat = true;
    break;}
   }
   for(let i =0; i< checkradioCat.length; i++){
    if(checkradioCat[i].checked){
    checkedradioCat = true;
    break;}
   }
   for(let i =0; i< checkradioDog.length; i++){
    if(checkradioDog[i].checked){
    checkedradioDog = true;
    break;}
   }
   // Check if user filled all fields. 
   if(!checkedGenderCat || !checkedGenderDog || !checkedradioCat || !checkedradioDog || dropdownselect1 == "Choose here" || dropdownselect2 == "Choose here" || dropdownselect3 == "Choose here" || dropdownselect4 == "Choose here" ){
    alert("Please fill out all fields");
    return false;
   }
   else{
    return true;
   }



}

 