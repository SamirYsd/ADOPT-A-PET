// Check inputs
function CheckInput(){
let AnimalInput = document.getElementsByName("catordog");
let CatBreedSelect = document.getElementById("Catbreed").value;
let DogBreedSelect = document.getElementById("Dogbreed").value;
let GenderInput = document.getElementsByName("gender");
let DogFriendlyInput = document.getElementsByName("dogfriendly");
let CatFriendlyInput = document.getElementsByName("catfriendly");
let ChildFriendlyInput = document.getElementsByName("childfriendly");
let infoText = document.getElementById("brag");
let fnameText = document.getElementById("fname");
let lnameText = document.getElementById("lname");
let emailtext = document.getElementById("email");

AnimalInputCheck = false;
GenderInputCheck = false;
DFInputCheck = false;
CFCheck = false;
ChildFriendlyInputCheck = false;
// Check if the radio buttons are checked
 for(let i =0; i< AnimalInput.length; i++){
    if(AnimalInput[i].checked){
    AnimalInputCheck = true;
    break;}
   }
    for(let i =0; i< GenderInput.length; i++){
    if(GenderInput[i].checked){
    GenderInputCheck = true;
    break;}
   }


   for(let i =0; i< DogFriendlyInput.length; i++){
    if(DogFriendlyInput[i].checked){
    DFInputCheck = true;
    break;}
   }
   for(let i =0; i< CatFriendlyInput.length; i++){
    if(CatFriendlyInput[i].checked){
    CFCheck = true;
    break;}
   }
   for(let i =0; i< ChildFriendlyInput.length; i++){
    if(ChildFriendlyInput[i].checked){
    ChildFriendlyInputCheck = true;
    break;}
   }
// check if conditions are met
   if(!AnimalInputCheck || !DFInputCheck || !CFCheck || !ChildFriendlyInputCheck || !GenderInputCheck || CatBreedSelect == "Choose here" || DogBreedSelect == "Choose here" || infoText.value == "" || fnameText.value == "" || lnameText.value == "" || emailtext.value == ""){

    alert("Please make sure to choose all of the options and to fill up all text fields.");
    return false;
   }
   else{
    return true;
   }

   
   

   
   



}
//Validate  if correct email
function CheckEmail(){

    let emailtext = document.getElementById("email");
    let validEmail = /^\S+@\S+\.\S+$/; 

    if(!(validEmail.test(emailtext.value))){
        alert("Please enter a valid Email")
        return false;
       }
       else{
       return true;}
    
}
// 2 functions in 1 for simplicity
function Validate(){
    CheckInput();
    CheckEmail();
}